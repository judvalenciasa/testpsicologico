<?php

namespace App\Http\Controllers;

use App\Models\Respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guardarRespuesta(Request $request, $user, $pregunta_id, $respuestas, $respuesta_chatgpt, $id_reporte)
    {

        // Guardar o actualizar la respuesta
        Respuestas::updateOrCreate(
            ['id_usuario' => $user->id_usuario, 'id_pregunta' => $pregunta_id],
            ['id_reporte' => $id_reporte, 'respuesta' => $respuestas, 'calificacion_respuesta' => $respuesta_chatgpt,]
        );
    }

}
