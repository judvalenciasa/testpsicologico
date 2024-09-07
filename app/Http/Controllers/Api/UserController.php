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
use App\Models\Pruebas;

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

            // Obtener la prueba para pasarla a la vista
            $prueba = Pruebas::first(); // O busca la prueba específica que desees

            Log::info('Prueba: ' . $prueba);

            return view('private.administrator-page', compact('prueba'));; // Pasar la variable 'prueba' a la vista
        } else {
            return redirect()->route('login');
        }
    }


    public function indexCaracterizacion(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return view('private.caracterizacion')->with('user', $user);
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
        Log::info('Usuario intenta autenticarse: ' . $request->email);
        // Validar los datos del formulario de login
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Obtener las credenciales (email y password) del request
        $credentials = $request->only('email', 'password');

        // Intentar autenticar al usuario usando Auth::attempt
        if (Auth::attempt($credentials)) {
            // Regenerar la sesión después de autenticación exitosa
            $request->session()->regenerate();

            // Registrar en los logs al usuario autenticado
            Log::info('Usuario autenticado: ' . $request->user());

            // Llamar al método authenticated para redirigir dependiendo del usuario
            //return $this->authenticated($request, Auth::user());
            $this->authenticated($request, Auth::user());
            return   $request->session()->token();
        }

        // Si la autenticación falla, redirigir de vuelta al formulario de login con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
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
        // Cerrar la sesión del usuario
        Auth::logout();

        // Invalidar la sesión y regenerar el token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al usuario a la página principal después de cerrar sesión
        Log::info('Usuario cerró sesión');
        return redirect()->route('home');
    }




    /**
     * Update the specified resource in storage.
     */
    public function llenar_encuesta_caracterizacion(Request $request)
    {
        Log::info('Usuario intenta llenar encuesta de caracterización: ' . $request->user());
        $user = $request->user();

        if (!$user) {
            return response()->json([
                "status" => 0,
                "msg" => "Usuario no autenticado"
            ], 401);
        }

        // Validar la información del formulario
        $request->validate([
            'documento_identificacion' => 'required|string',
            'edad' => 'required|integer|min:15|max:18',
            'genero' => 'required|string|max:9',
            'estrato' => 'required|integer|min:1|max:6',
            'nivel_escolaridad' => 'required|string',
            'nivel_educativo_madre' => 'required|string',
            'nivel_educativo_padre' => 'required|string',
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


        try {
            // Intentar actualizar los datos del usuario
            $user->update([
                'documento_identificacion' => $request->documento_identificacion,
                'edad' => $request->edad,
                'genero' => $request->genero,
                'estrato' => $request->estrato,
                'nivel_escolaridad' => $request->nivel_escolaridad,
                'nivel_educativo_madre' => $request->nivel_educativo_madre,
                'nivel_educativo_padre' => $request->nivel_educativo_padre,
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

            Log::info('Encuesta de caracterización completada por: ' . $user);

            // Redirigir al usuario a la página del test después de guardar la encuesta
            return redirect()->route('test.iniciar')->with('success', 'Encuesta completada con éxito, ahora puedes iniciar el test.');
        } catch (\Exception $e) {
            // Si ocurre algún error durante la actualización, loguéalo y muestra un mensaje
            Log::error('Error al actualizar la encuesta de caracterización: ' . $e->getMessage());
            return redirect()->back()->withErrors(['msg' => 'Ocurrió un error al guardar la encuesta.']);
        }
    }
}
