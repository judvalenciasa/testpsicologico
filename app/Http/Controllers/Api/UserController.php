<?php

namespace App\Http\Controllers\Api;

use App\Application\Mail\MailService;
use App\Application\Pines\PinService;
use App\Application\Users\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
//import el controlador de test
use App\Http\Controllers\TestsController;
use App\Models\Pruebas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    private const ROUTE_LOGIN = 'login';
    private const ROUTE_HOME = 'home';
    private const ROUTE_POLITICA_DATOS = 'politica.datos';
    private const ROUTE_CARACTERIZACION = 'caracterizacion';
    private const ROUTE_TEST_INICIAR = 'test.iniciar';

    protected $testsController;

    public function __construct(
        TestsController $testsController,
        private readonly UserService $userService,
        private readonly PinService $pinService,
        private readonly MailService $mailService
    ) {
        $this->testsController = $testsController;
    }

    //Carga todos los usuarios que no son administradores
    public function index()
    {
        $users = $this->userService->nonAdminUsers();
        return view('private.usuarios', compact('users')); // Asegúrate de tener una vista admin/usuarios
    }

    // Página de política de privacidad
    public function mostrarPolitica()
    {

        $user = Auth::user();

        // Crear el nombre personalizado del archivo
        $fileName = $user->name . "_" . Carbon::now()->format('Y-m-d') . ".pdf";

        $consentimientoSubido = Storage::disk('public')->exists('pdfs/' . $user->name . '/' . $fileName);

        return view('private.politica_tratamiento_datos', compact('consentimientoSubido'));
    }


    public function indexAdministrador(Request $request)
    {
        $user = $request->user();

        if ($user) {

            // Obtener la prueba para pasarla a la vista
            $prueba = Pruebas::first(); // O busca la prueba específica que desees

            Log::info('Prueba: ' . $prueba);

            return view('private.administrator-page', compact('prueba')); // Pasar la variable 'prueba' a la vista
        } else {
            return $this->redirectToLogin();
        }
    }


    public function indexCaracterizacion(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return view('private.caracterizacion')->with('user', $user);
        } else {
            return $this->redirectToLogin();
        }
    }

    public function indexMostrarTest(Request $request)
    {
        Log::info('Usuario intenta mostrar test: ' . $request->user());
        $user = $request->user();

        if ($user) {
            return $this->testsController->mostrarPrueba();
        } else {
            return $this->redirectToLogin();
        }
    }


    /**
     * 
     * Si el es valido es porque existe entonces retorna el pin
     * si no es porque el pin no existe y es invalido
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function pin_valido(Request $request)
    {
        return $this->pinService->findPinIdByValue((string) $request->pin);
    }


    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function registro_existente(Request $request)
    {
        return $this->userService->existingByEmail((string) $request->email);
    }


    public function registrar(Request $request)
    {
        $id_pin = $this->pin_valido($request);


        if ($id_pin == null) {
            return response()->json(['success' => false, 'message' => 'El pin es inválido.']);
        }

        $registro_existente = $this->registro_existente($request);
        if ($registro_existente != null) {
            return response()->json(['success' => false, 'message' => 'El usuario ya está registrado']);
        }


        $request->merge(['id_pin' => $id_pin]);
        $request->validate($this->registrationRules());

        $user = $this->userService->newRegisteredUser([
            'name' => $request->name,
            'email' => $request->email,
            'id_pin' => $request->id_pin,
            'password' => $request->password,
        ]);

        try {
            $this->userService->save($user);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Error al registrar el usuario, recargue la página e intente nuevamente']);
        }


        $details = $this->registrationMailDetails($request);

        // Enviar correo al usuario
        try {
            $this->mailService->sendCredentials((string) $request->email, $details);
            Log::info('Correo enviado a: ' . $request->email);
        } catch (\Exception $e) {
            Log::error('Error al enviar el correo: ' . $e->getMessage());
        }


        // Devolver respuesta JSON de éxito
        return response()->json(['success' => true]);

    }

    public function comprobar_cantidad_pines($request)
    {
        $user = $this->userService->userWithPinByEmail((string) $request->email);
        //verificamos la cantidad de intentos del pin
        $pin = $this->pinService->findByIdPin($user->id_pin);
        session(['pin' => $pin]);

        if ($pin->intentos >= 2) {
            session()->flush();
            return back()->with('message', 'La cantidad de pines ha sido superada');
        }
    }


    public function login(Request $request)
    {
        // Validar los datos del formulario de login
        $request->validate([
            ...$this->loginRules(),
        ]);

        // Obtener las credenciales (email y password) del request
        $credentials = $request->only('email', 'password');


        // Intentar autenticar al usuario usando Auth::attempt
        if (Auth::attempt($credentials)) {

            if ($this->comprobar_cantidad_pines($request)) {
                return back()->with('message', 'La cantidad de pines ha sido superada');
            } else {
                return $this->authenticated($request, Auth::user());
            }


        }

        // Si la autenticación falla, redirigir de vuelta al formulario de login con un mensaje de error
        return back()->withErrors([
            'email' => 'Usuario o contraseña invalidos.',
        ])->onlyInput('email');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->es_administrador) {

            return $this->indexAdministrador($request);
        } else {
            // Verificar si el usuario ya aceptó la política de tratamiento de datos
            if (!$user->ha_aceptado_politica) { // Suponiendo que tienes este campo en tu base de datos
                return redirect()->route(self::ROUTE_POLITICA_DATOS); // Redirigir a la página de política
            }

            // Si ya aceptó la política, verificar si debe llenar la caracterización
            if ($user->documento_identificacion == null) {
                Log::info('Usuario sin caracterización' . $user);
                return $this->indexCaracterizacion($request);
            } else {
                return $this->indexMostrarTest($request);
            }
        }
    }

    // Método para aceptar la política de datos
    public function aceptarPolitica(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $user->update(['ha_aceptado_politica' => true]);
        }

        return $this->redirectAfterPolicyAcceptance($user);
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
        return redirect()->route(self::ROUTE_HOME);
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
        $request->validate($this->characterizationRules());


       // try {
            // Intentar actualizar los datos del usuario
            $user->update($this->characterizationUpdatePayload($request));

            Log::info('Encuesta de caracterización completada por: ' . $user);

            // Redirigir al usuario a la página del test después de guardar la encuesta
            return redirect()->route(self::ROUTE_TEST_INICIAR)->with('success', 'Encuesta completada con éxito, ahora puedes iniciar el test.');
       // } catch (\Exception $e) {
            // Si ocurre algún error durante la actualización, loguéalo y muestra un mensaje
     //       Log::error('Error al actualizar la encuesta de caracterización: ' . $e->getMessage());
      //      return redirect()->back()->withErrors(['msg' => 'Ocurrió un error al guardar la encuesta.']);
     //   }
    }

    private function redirectToLogin()
    {
        return redirect()->route(self::ROUTE_LOGIN);
    }

    private function registrationRules(): array
    {
        return [
            'name' => 'required|max:70',
            'email' => 'required|string|email|max:70',
            'id_pin' => 'required',
            'password' => 'required|string|min:6',
        ];
    }

    private function loginRules(): array
    {
        return [
            'email' => 'required|string|email|max:60',
            'password' => 'required|string|max:60',
        ];
    }

    private function characterizationRules(): array
    {
        return [
            'documento_identificacion' => 'required|string',
            'edad' => 'required|integer|min:14|max:18',
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
        ];
    }

    private function registrationMailDetails(Request $request): array
    {
        return [
            'email' => $request->email,
            'contrasena' => $request->password,
        ];
    }

    private function redirectAfterPolicyAcceptance($user)
    {
        if ($user->documento_identificacion == null) {
            return redirect()->route(self::ROUTE_CARACTERIZACION);
        }

        return redirect()->route(self::ROUTE_TEST_INICIAR);
    }

    private function characterizationUpdatePayload(Request $request): array
    {
        return [
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
        ];
    }
}
