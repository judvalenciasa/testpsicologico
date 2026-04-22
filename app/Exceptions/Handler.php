<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    private const HTTP_PAGE_EXPIRED = 419;

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (ValidationException $e, Request $request) {
            if (! $request->expectsJson()) {
                return null;
            }

            return response()->json([
                'message' => 'Datos de entrada no validos.',
                'errors' => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        });

        $this->renderable(function (TokenMismatchException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                'errors.419',
                self::HTTP_PAGE_EXPIRED,
                'Tu sesion expiro. Recarga la pagina y vuelve a intentarlo.'
            );
        });

        $this->renderable(function (TooManyRequestsHttpException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                'errors.429',
                Response::HTTP_TOO_MANY_REQUESTS,
                'Demasiadas solicitudes en poco tiempo. Espera unos segundos e intenta de nuevo.'
            );
        });

        $this->renderable(function (AuthorizationException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                'errors.403',
                Response::HTTP_FORBIDDEN,
                'No tienes permisos para acceder a este recurso.'
            );
        });

        $this->renderable(function (ChatGPTException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                'errors.503',
                Response::HTTP_SERVICE_UNAVAILABLE,
                'El servicio de calificacion automatica no esta disponible temporalmente.'
            );
        });

        $this->renderable(function (ExternalServiceUnavailableException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                'errors.503',
                Response::HTTP_SERVICE_UNAVAILABLE,
                $e->getMessage()
            );
        });

        $this->renderable(function (TestFlowException $e, Request $request) {
            return $this->buildErrorResponse(
                $request,
                $this->resolveViewByStatus($e->statusCode()),
                $e->statusCode(),
                $e->getMessage()
            );
        });

        $this->renderable(function (QueryException $e, Request $request) {
            if ($this->isDatabaseConcurrencyFailure($e)) {
                return $this->buildErrorResponse(
                    $request,
                    'errors.503',
                    Response::HTTP_SERVICE_UNAVAILABLE,
                    'El sistema esta procesando un alto volumen de solicitudes. Intenta nuevamente en unos segundos.'
                );
            }

            if ($this->isDatabaseConnectionFailure($e)) {
                return $this->buildErrorResponse(
                    $request,
                    'errors.503',
                    Response::HTTP_SERVICE_UNAVAILABLE,
                    'Servicio temporalmente no disponible. Intenta nuevamente en unos minutos.'
                );
            }

            return null;
        });

        $this->renderable(function (Throwable $e, Request $request) {
            // En produccion, devuelve una respuesta controlada para errores no contemplados.
            if (config('app.debug')) {
                return null;
            }

            // Respeta el manejo por defecto de excepciones HTTP (404, 405, etc).
            if ($e instanceof HttpExceptionInterface) {
                return null;
            }

            return $this->buildErrorResponse(
                $request,
                'errors.500',
                Response::HTTP_INTERNAL_SERVER_ERROR,
                'Ocurrio un error inesperado. Intenta nuevamente.'
            );
        });
    }

    private function buildErrorResponse(
        Request $request,
        string $view,
        int $status,
        string $message
    ) {
        if ($request->expectsJson()) {
            return response()->json(['message' => $message], $status);
        }

        return response()->view($view, ['message' => $message], $status);
    }

    private function resolveViewByStatus(int $status): string
    {
        return match ($status) {
            self::HTTP_PAGE_EXPIRED => 'errors.419',
            Response::HTTP_TOO_MANY_REQUESTS => 'errors.429',
            Response::HTTP_FORBIDDEN => 'errors.403',
            Response::HTTP_SERVICE_UNAVAILABLE => 'errors.503',
            default => 'errors.500',
        };
    }

    private function isDatabaseConnectionFailure(QueryException $e): bool
    {
        $message = $e->getMessage();

        return Str::contains($message, [
            'SQLSTATE[HY000] [2002]',
            'Connection refused',
            'No se puede establecer una conexi',
            'php_network_getaddresses',
            'Too many connections',
            'server has gone away',
            'Lost connection to MySQL server',
        ]);
    }

    private function isDatabaseConcurrencyFailure(QueryException $e): bool
    {
        $message = $e->getMessage();

        return Str::contains($message, [
            'SQLSTATE[40001]',
            'Deadlock found when trying to get lock',
            'Lock wait timeout exceeded',
            'try restarting transaction',
        ]);
    }
}
