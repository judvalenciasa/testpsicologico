<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registrar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json([
            "status" => 1,
            "msg" => "Registro exitoso"
        ]);

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where("email", "=", $request->email)->first();
        

        
        if (isset($user->id)) {
            //verifica el password sea igual
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken("auth_token")->plainTextToken;

                return response()->json([
                    "status" => 0,
                    "msg" => "Exito logeado",
                    "acess_token" => $token
                ]);
            } else {
                return response()->json([
                    "status" => 0,
                    "msg" =>$user
                ], 404);
            }
        }else{
            return response()->json([
                "status" => 0,
                "msg" => "Usuario no registrado"
            ], 404);
        }


    }
    public function perfil_usuario(Request $request)
    {

    }
    public function logout(Request $request)
    {

    }

}
