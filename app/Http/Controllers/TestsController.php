<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Pruebas;
use App\Models\Respuestas;
use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestsController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function mostrarPrueba()
    {
        $prueba = Pruebas::first();

        if (!$prueba) {
            return redirect()->back()->with('error', 'No hay pruebas disponibles.');
        }

        return view('private.mostrarTest', compact('prueba'));
    }

    public function cargarPreguntas(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para continuar.');
        }

        $user = Auth::user();

        // Procesar la respuesta anterior antes de cargar la siguiente pregunta
        if ($request->has('respuesta_abierta')) {
            $respuesta_abierta = $request->input('respuesta_abierta');
            $pregunta_id = $request->input('pregunta_id');

            // Guardar la respuesta abierta
            $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($respuesta_abierta);

            Respuestas::create([
                'id_usuario' => $user->id_usuario,
                'id_pregunta' => $pregunta_id,
                'respuesta' => $respuesta_abierta,
                'calificacion_respuesta' => $respuesta_chatgpt,
            ]);
        } elseif ($request->has('respuestas')) {
            foreach ($request->input('respuestas') as $pregunta_id => $respuesta) {
                $opcion = Preguntas::find($pregunta_id)->opciones->where('valor_opcion', $respuesta)->first();

                Respuestas::create([
                    'id_usuario' => $user->id_usuario,
                    'id_pregunta' => $pregunta_id,
                    'respuesta' => $respuesta,
                    'calificacion_respuesta' => $opcion->valor_opcion,
                ]);
            }
        }

        $prueba_id = $request->input('prueba_id');
        $pregunta_index = $request->input('pregunta_index', 0);

        // Cargar dos preguntas relacionadas con el mismo contexto
        $preguntas = Preguntas::with('opciones')
            ->where('id_prueba', $prueba_id)
            ->skip($pregunta_index)
            ->take(2)
            ->get();

        $total_preguntas = Preguntas::where('id_prueba', $prueba_id)->count();

        return view('private.prueba_page', compact('preguntas', 'pregunta_index', 'total_preguntas', 'prueba_id'));
    }
}
