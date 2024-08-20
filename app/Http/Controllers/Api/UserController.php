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

        //vamos a verificar el pin si existe

        $id_pin = $this->pin_valido($request);

        if ($id_pin != Null) {

            $request->merge(['id_pin' => $id_pin]);

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'id_pin' => 'required'
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->id_pin = $request->id_pin;
            $user->es_administrador = 0;

            $user->save();

            return response()->json([
                "status" => 1,
                "msg" => "Registro exitoso"
            ]);
        } else {
            return "pin invalido";
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

            if ($user->es_administrador) {
                return view('private.administrator-page')->with('access_token', $token);
            } else {
                // Redirigir a una página para usuarios normales
                return view('home')->with('access_token', $token);
            }
        } else {
            // Respuesta en caso de credenciales incorrectas
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
    public function llenar_encuesta_caracterizacion(Request $request, User $user)
    {
        $user = User::where("email", "=", auth()->user()->email)->first();

        $request->validate([
            'edad' => 'required|int',
            'genero' => 'required|string|max:9',
            'estrato' => 'required|int',
            'escolaridad_madre' => 'required|string',
            'escolaridad_padre' => 'required|string',
            'horas_lectura' => 'required|int',
            'horas_redes_sociales' => 'required|int',
            'horas_entretenimiento' => 'required|int',
            'promedio_segundo_idioma' => 'required|int',
            'promedio_deporte' => 'required|int',
            'promedio_arte' => 'required|int',
            'hora_sueno' => 'required|int',
            'grasas' => 'required|int',
            'pensamiento_critico' => 'required|int',
        ]);

        $user->update([
            'edad' => $user->edad,
            'genero' => $user->genero,
            'estrato' => $user->estrato,
            'escolaridad_madre' => $user->escolaridad_madre,
            'escolaridad_padre' => $user->escolaridad_padre,
            'horas_lectura' => $user->horas_lectura,
            'horas_redes_sociales' => $user->horas_redes_sociales,
            'horas_entretenimiento' => $user->horas_entretenimiento,
            'promedio_segundo_idioma' => $user->promedio_segundo_idioma,
            'promedio_deporte' => $user->promedio_deporte,
            'promedio_arte' => $user->promedio_arte,
            'hora_sueno' => $user->hora_sueno,
            'grasas' => $user->grasas,
            'pensamiento_critico' => $user->pensamiento_critico,
        ]);

        return $user;
    }
}
