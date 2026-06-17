<?php

namespace App\Http\Controllers;

use App\Application\Pines\PinService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PinesController extends Controller
{
    private const DEFAULT_SORT = 'creacion_fecha';
    private const DEFAULT_DIRECTION = 'desc';
    private const SORTABLE_FIELDS = ['pin', 'creacion_fecha', 'usuario'];
    private const ASSIGNMENT_FILTERS = ['todos', 'asignados', 'libres'];

    public function __construct(private readonly PinService $pinService)
    {
    }

    /**
     * Almacenamos los pines en la base de datos.
     */
    public function almacenar_pines($pin)
    {
        return $this->pinService->storePin($pin);
    }

    /**
     * Verificar que el código generado no esté en la base de datos.
     * $pines: lista de pines que fueron generados en generar_pines.
     * $true: en caso de que exista algun pin
     */
    public function pin_existe($pines)
    {
        return $this->pinService->anyPinExists($pines);
    }

    /**
     * Es llamado desde el controlador y lo que hace es generar la cantidad de pines que el usuario administrados ingresa
     * $cantidad: cantidad de pines que el usuario quiere guardar en base de datos, estos pines aún no son conetados con 
     * algún usuario.
     * retorna: mensaje los pines fueron creados y almacenados correctamente.
     */
    public function generar_pines(Request $request)
    {
        $cantidad = $request->input('cantidad'); // Recibe el parámetro cantidad de la query string


        if ($cantidad === null) {
            return response()->json(['error' => 'Cantidad no proporcionada'], 400);
        }
        $usuario = auth()->user();
        if ($usuario) {
            if ($usuario->es_administrador == 1) {
                $pines_generados = $this->pinService->generatePins($cantidad);

                if (!$this->pin_existe($pines_generados)) {
                    $this->pinService->storePins($pines_generados);

                    // Respuesta de éxito en JSON
                    return response()->json([
                        'success' => true,
                        'msg' => 'Los pines fueron creados y almacenados correctamente'
                    ]);
                } else {
                    // Respuesta de error en JSON
                    return response()->json([
                        'success' => false,
                        'msg' => 'Uno de los pines ya está en la lista de generados. Vuelva a generar los códigos.'
                    ]);
                }
            } else {
                // Respuesta de no autorizado en JSON
                return response()->json([
                    'success' => false,
                    'msg' => 'No eres usuario administrador.'
                ], 403);
            }
        } else {
            // Respuesta de error por no estar autenticado
            return response()->json([
                'success' => false,
                'msg' => 'Es imposible que estés aquí sin estar logueado. Error en el middleware.'
            ], 401);
        }
    }


    /**
     * Cambiar el estado de un pin.
     */
    public function toggleEstado(Request $request)
    {
        // Mantiene el comportamiento actual: solo registrar la llamada.
        Log::info($request);
    }


    public function cantidad_intentos($id_pin)
    {
        return $this->pinService->findByIdPin($id_pin);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Log::info('PinesController@index');
        $filters = $this->pinFilters($request);
        $pines = $this->pinService->allWithUsers($filters);

        return view('pines.index', compact('pines', 'filters'));
    }

    private function pinFilters(Request $request): array
    {
        $sort = (string) $request->query('sort', self::DEFAULT_SORT);
        $direction = (string) $request->query('direction', self::DEFAULT_DIRECTION);
        $asignacion = (string) $request->query('asignacion', 'todos');

        return [
            'search' => trim((string) $request->query('search', '')),
            'estado' => 'todos',
            'asignacion' => in_array($asignacion, self::ASSIGNMENT_FILTERS, true) ? $asignacion : 'todos',
            'fecha_desde' => null,
            'fecha_hasta' => null,
            'sort' => in_array($sort, self::SORTABLE_FIELDS, true) ? $sort : self::DEFAULT_SORT,
            'direction' => in_array($direction, ['asc', 'desc'], true) ? $direction : self::DEFAULT_DIRECTION,
        ];
    }

}
