<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pines;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
//import el controlador de test
use App\Http\Controllers\TestsController;
use PHPUnit\Event\Code\Test;

class UserController extends Controller
{
    protected $testsController;

    public function __construct(TestsController $testsController)
    {
        $this->testsController = $testsController;
    }

    public function indexAdministrador(Request $request)
    {
        $user = $request->user();

        if ($user) {
            Log::info('Usuario administrador' . $user);
            return view('private.administrator-page');
        } else {
            return redirect()->route('login');
        }
    }

    public function indexCaracterizacion(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return view('private.caracterizacion');
        } else {
            return redirect()->route('login');
        }
    }

    public function indexMostrarTest(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return $this->testsController->mostrarPrueba();
        } else {
            return redirect()->route('login');
        }
    }


    public function pin_valido(Request $request)
    {
        $id_pin = pines::where('pin', $request->pin)->value('id_pin');

        if ($id_pin) {
            return $id_pin;
        } else {
            return Null;
        }
    }
    public function registrar(Request $request)
    {
        try {
            $id_pin = $this->pin_valido($request);

            if ($id_pin != null) {
                $request->merge(['id_pin' => $id_pin]);

                $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'id_pin' => 'required',
                    'password' => 'required|string|min:6',

                ]);

                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->id_pin = $request->id_pin;
                $user->password = Hash::make($request->password); // Hashear la contraseña
                $user->es_administrador = 0;

                $user->save();

                return response()->json([
                    "status" => 1,
                    "msg" => "Registro exitoso"
                ]);
            } else {
                return response()->json([
                    "status" => 0,
                    "msg" => "Pin inválido"
                ], 400);
            }
        } catch (\Exception $e) {
            return response()->json([
                "status" => 0,
                "msg" => "Ocurrió un error en el servidor.",
                "error" => $e->getMessage()
            ], 500);
        }
    }


    public function login(Request $request)
    {


        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                "status" => 0,
                "msg" => "Credenciales incorrectas"
            ], 401);
        }

        Log::info('Usuario autenticado' . Auth::user());

        $user = Auth::user();


        return $this->authenticated($request, $user);
    }


    protected function authenticated(Request $request, $user)
    {

        if ($user->es_administrador) {
            return $this->indexAdministrador($request);
        } else {
            if ($user->documento_identificacion == null) {
                Log::info('Usuario sin caracterización' . $user);
                return $this->indexCaracterizacion($request);
            } else {
                return $this->indexMostrarTest($request);
            }
        }
    }



    public function perfil_usuario(Request $request)
    {

        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->user()
        ], 404);
    }

    public function logout(Request $request)
    {


        // Si estás utilizando cookies para gestionar la sesión (para SPA), puedes regenerar la sesión:
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir a la página de inicio o enviar una respuesta JSON
        return redirect()->route('home');
    }


    /**
     * Update the specified resource in storage.
     */
    public function llenar_encuesta_caracterizacion(Request $request)
    {
        Log::info('llegue a encuesta' . $request);

        $user = User::where("email", "=", auth()->user()->email)->first();

        $request->validate([
            'documento_identificacion' => 'required|string',
            'edad' => 'required|integer|min:15|max:18',
            'genero' => 'required|string|max:9',
            'estrato' => 'required|integer|min:1|max:6',
            'nivel_escolaridad' => 'required|string',
            'escolaridad_madre' => 'required|string',
            'escolaridad_padre' => 'required|string',
            'horas_lectura' => 'required|string',
            'horas_redes_sociales' => 'required|string',
            'horas_entretenimiento' => 'required|string',
            'promedio_deporte' => 'required|string',
            'promedio_arte' => 'required|string',
            'hora_sueno' => 'required|string',
            'grasas' => 'required|string',
            'alimentos_saludables' => 'required|string',
            'litro_agua' => 'required|string',
        ]);

        $user->update([
            'documento_identificacion' => $request->documento_identificacion,
            'edad' => $request->edad,
            'genero' => $request->genero,
            'estrato' => $request->estrato,
            'nivel_escolaridad' => $request->nivel_escolaridad,
            'escolaridad_madre' => $request->escolaridad_madre,
            'escolaridad_padre' => $request->escolaridad_padre,
            'horas_lectura' => $request->horas_lectura,
            'horas_redes_sociales' => $request->horas_redes_sociales,
            'horas_entretenimiento' => $request->horas_entretenimiento,
            'promedio_deporte' => $request->promedio_deporte,
            'promedio_arte' => $request->promedio_arte,
            'hora_sueno' => $request->hora_sueno,
            'grasas' => $request->grasas,
            'alimentos_saludables' => $request->alimentos_saludables,
            'litro_agua' => $request->litro_agua,
        ]);

        return response()->json([
            "status" => 1,
            "msg" => "Encuesta de caracterización completada"
        ]);
    }
}
