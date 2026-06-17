<?php

namespace Tests\Feature;

use App\Http\Controllers\MailController;
use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class MailControllerTest extends TestCase
{
    public function test_enviar_correo_retorna_exito_y_envia_mail_contact(): void
    {
        Mail::fake();

        $requestData = [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
            'message' => 'Hola equipo',
        ];

        $controller = new MailController();
        $request = Request::create('/contacto', 'POST', $requestData);

        $response = $controller->enviarCorreo($request);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('El status esperado era 200.');
        }

        if ($response->getData(true) !== ['success' => true, 'message' => 'Correo enviado exitosamente.']) {
            throw new \RuntimeException('El JSON de respuesta de exito no coincide.');
        }

        Mail::assertSent(MailContact::class, function (MailContact $mail) use ($requestData) {
            return $mail->details === $requestData;
        });
    }

    public function test_enviar_correo_retorna_error_cuando_falla_envio(): void
    {
        Mail::shouldReceive('to')
            ->once()
            ->with('cognitivesparkmarista@gmail.com')
            ->andReturnSelf();

        Mail::shouldReceive('send')
            ->once()
            ->andThrow(new \Exception('Fallo de envio'));

        $controller = new MailController();
        $request = Request::create('/contacto', 'POST', [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
            'message' => 'Hola equipo',
        ]);

        $response = $controller->enviarCorreo($request);

        if ($response->getStatusCode() !== 500) {
            throw new \RuntimeException('El status esperado era 500.');
        }

        if ($response->getData(true) !== ['success' => false, 'message' => 'Hubo un error al enviar el correo. Inténtalo nuevamente.']) {
            throw new \RuntimeException('El JSON de respuesta de error no coincide.');
        }
    }

    public function test_enviar_correo_mantiene_validacion_obligatoria(): void
    {
        $controller = new MailController();
        $request = Request::create('/contacto', 'POST', [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
        ]);

        try {
            $controller->enviarCorreo($request);
            throw new \RuntimeException('Se esperaba ValidationException y no fue lanzada.');
        } catch (ValidationException $exception) {
            if ($exception->status !== 422) {
                throw new \RuntimeException('La excepcion de validacion no mantiene el status 422.');
            }
        }
    }
}
