<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pines;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

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
        // Validar la entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario por email
        $user = User::where('email', $request->email)->first();

        // Verificar las credenciales y autenticar al usuario
        if ($user && Hash::check($request->password, $user->password)) {

            // Autenticar al usuario en la sesión de Laravel
            Auth::login($user);

            // Generar el token de acceso
            $token = $user->createToken("auth_token")->plainTextToken;

            // Verificar si el usuario es administrador
            if ($user->es_administrador) {
                return response()->json([
                    'status' => 1,
                    'msg' => 'Login exitoso',
                    'access_token' => $token,
                    'is_admin' => true
                ])->header('Location', route('administrator'));
            } else {
                // Verificar si los campos de caracterización están llenos
                if (
                    is_null($user->edad) ||
                    is_null($user->genero) ||
                    is_null($user->estrato) ||
                    is_null($user->horas_lectura) ||
                    is_null($user->horas_redes_sociales) ||
                    is_null($user->horas_entretenimiento) ||
                    is_null($user->promedio_deporte) ||
                    is_null($user->promedio_arte) ||
                    is_null($user->hora_sueno) ||
                    is_null($user->grasas) 
                ) {
                    return response()->json([
                        'status' => 1,
                        'msg' => 'Debe completar la encuesta de caracterización.',
                        'access_token' => $token,
                        'is_admin' => false
                    ])->header('Location', route('caracterizacion'));
                } else {
                    // Si todos los campos están completos, redirigir a la página principal
                    return response()->json([
                        'status' => 1,
                        'msg' => 'Login exitoso',
                        'access_token' => $token,
                        'is_admin' => false
                    ])->header('Location', route('/'));
                }
            }
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'Credenciales incorrectas',
            ], 401);
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


        // Invalidar la sesión actual
        $request->session()->invalidate();

        // Regenerar el token CSRF
        $request->session()->regenerateToken();

        // Redirigir al usuario a la página de inicio con un mensaje de estado
        return redirect()->route('home')->with('status', 'Sesión cerrada');
    }



    /**
     * Update the specified resource in storage.
     */
    public function llenar_encuesta_caracterizacion(Request $request)
    {
        $user = User::where("email", "=", auth()->user()->email)->first();

        $request->validate([
            'edad' => 'required|integer|min:15|max:18',
            'genero' => 'required|string|max:9',
            'estrato' => 'required|integer|min:1|max:6',
            //'escolaridad_madre' => 'required|string',
            //'escolaridad_padre' => 'required|string',
            'horas_lectura' => 'required|string',
            'horas_redes_sociales' => 'required|string',
            'horas_entretenimiento' => 'required|string',
            'promedio_deporte' => 'required|string',
            'promedio_arte' => 'required|string',
            'hora_sueno' => 'required|string',
            'grasas' => 'required|string',
            'alimentos_saludables' => 'required|string',
            //'pensamiento_critico' => 'required|int',
        ]);

        $user->update([
            'edad' => $request->edad,
            'genero' => $request->genero,
            'estrato' => $request->estrato,
            //'escolaridad_madre' => $request->escolaridad_madre,
            //'escolaridad_padre' => $request->escolaridad_padre,
            'horas_lectura' => $request->horas_lectura,
            'horas_redes_sociales' => $request->horas_redes_sociales,
            'horas_entretenimiento' => $request->horas_entretenimiento,
            //'promedio_segundo_idioma' => $request->promedio_segundo_idioma,
            'promedio_deporte' => $request->promedio_deporte,
            'promedio_arte' => $request->promedio_arte,
            'hora_sueno' => $request->hora_sueno,
            'grasas' => $request->grasas,
            'alimentos_saludables' => $request->alimentos_saludables,
            //'pensamiento_critico' => $request->pensamiento_critico,
        ]);

        return redirect()->back()->with('success', 'Encuesta guardada correctamente');
    }
}
