<?php

namespace App\Application\Tests;

use App\Models\Respuestas;
use App\Models\subrespuestas;

class AnswerPersistenceService
{
    public function saveSubAnswer($user, $idSubpregunta, $idReporte, $respuesta, $calificacion): void
    {
        $subrespuestaExistente = subrespuestas::where('id_usuario', $user->id_usuario)
            ->where('id_subpregunta', $idSubpregunta)
            ->where('id_reporte', $idReporte)
            ->first();

        if ($subrespuestaExistente) {
            $subrespuestaExistente->update([
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
            ]);
            return;
        }

        subrespuestas::create([
            'id_usuario' => $user->id_usuario,
            'id_subpregunta' => $idSubpregunta,
            'id_reporte' => $idReporte,
            'respuesta' => $respuesta,
            'calificacion_respuesta' => $calificacion,
        ]);
    }

    public function saveAnswer($user, $preguntaId, $idReporte, $respuesta, $calificacion): void
    {
        $respuestaExistente = Respuestas::where('id_usuario', $user->id_usuario)
            ->where('id_pregunta', $preguntaId)
            ->where('id_reporte', $idReporte)
            ->first();

        if ($respuestaExistente) {
            $respuestaExistente->update([
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
            ]);
            return;
        }

        Respuestas::create([
            'id_usuario' => $user->id_usuario,
            'id_pregunta' => $preguntaId,
            'id_reporte' => $idReporte,
            'respuesta' => $respuesta,
            'calificacion_respuesta' => $calificacion,
        ]);
    }
}

