<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCharacterization
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Verificar si los campos de caracterización están llenos
        if (
            is_null($user->edad) || 
            is_null($user->genero) || 
            is_null($user->estrato) || 
            is_null($user->escolaridad_madre) ||
            is_null($user->escolaridad_padre) || 
            is_null($user->horas_lectura) || 
            is_null($user->horas_redes_sociales) || 
            is_null($user->horas_entretenimiento) || 
            is_null($user->promedio_segundo_idioma) || 
            is_null($user->promedio_deporte) || 
            is_null($user->promedio_arte) || 
            is_null($user->hora_sueno) || 
            is_null($user->grasas) || 
            is_null($user->pensamiento_critico)
        ) {
            // Redirigir a la página de la encuesta de caracterización
            return redirect()->route('characterization.survey');
        }

        return $next($request);
    }
}
