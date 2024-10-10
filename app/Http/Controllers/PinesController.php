<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use App\Models\Pines;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class PinesController extends Controller
{

    private $CANTIDAD_DE_INTENTOS = 2;

    /**
     * Almacenamos los pines en la base de datos.
     */
    public function almacenar_pines($pin)
    {
        $creacion_fecha = Carbon::now();

        $product = new Pines;
        $product->pin = $pin;
        $product->id_prueba = 1;
        $product->creacion_fecha = $creacion_fecha;
        $product->fecha_expiracion = $creacion_fecha;
        $product->intentos = $this->CANTIDAD_DE_INTENTOS;
        $product->save();

        return true;
    }

    /**
     * Verificar que el código generado no esté en la base de datos.
     * $pines: lista de pines que fueron generados en generar_pines.
     * $true: en caso de que exista algun pin
     */
    public function pin_existe($pines)
    {
        for ($j = 0; $j < count($pines); $j++) {
            if (Pines::where('pin', $pines[$j])->exists()) {
                return true;
            }
        }
        return false;
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
                $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $pines_generados = [];

                for ($i = 0; $i < $cantidad; $i++) {
                    $tamaño_de_codigo = 10; // Longitud de cada código generado
                    $codigo = '';
                    for ($j = 0; $j < $tamaño_de_codigo; $j++) {
                        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
                    }
                    $pines_generados[] = $codigo;
                }

                if (!$this->pin_existe($pines_generados)) {
                    for ($i = 0; $i < count($pines_generados); $i++) {
                        $this->almacenar_pines($pines_generados[$i]);
                    }

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
        //Log para imprimir el request
        Log::info($request);

        // 1. Verifica si el método se está llamando y qué datos llegan
        //$pin = Pines::findOrFail($id_pin);


        //$pin->estado = $request->input('estado');

        //$pin->save();

        //return response()->json(['success' => true]);
    }


    public function cantidad_intentos($id_pin){

        $pin = Pines::where('id_pin', $id_pin)->first();
        return $pin;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('PinesController@index');
        $pines = Pines::with('usuario')->get();

        return view('pines.index', compact('pines'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pines $pines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pines $pines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pines $pines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pines $pines)
    {
        //
    }
}
