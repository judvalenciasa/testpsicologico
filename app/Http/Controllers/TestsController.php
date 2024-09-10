<?php

namespace App\Http\Controllers;

use App\Models\Contexto;
use App\Models\Criterios;
use App\Models\opcionessubpreguntas;
use App\Models\Preguntas;
use App\Models\Pruebas;
use App\Models\Respuestas;
use App\Models\Subcriterios;
use App\Models\subpreguntas;
use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class TestsController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    //funcion para guardar respuesta
    public function guardarRespuesta($user_id, $pregunta_id, $respuesta, $calificacion)
    {
        // Verificar si la respuesta ya existe para este usuario y pregunta
        $respuestaExistente = Respuestas::where('id_usuario', $user_id)
            ->where('id_pregunta', $pregunta_id)
            ->first();

        if ($respuestaExistente) {
            $respuestaExistente->update([
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
            ]);
        } else {
            // Crear una nueva respuesta
            Respuestas::create([
                'id_usuario' => $user_id,
                'id_pregunta' => $pregunta_id,
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
            ]);
        }
    }


    // Función para mostrar la página de metacognición
    public function metacognicion()
    {
        return view('private.metacognicion');
    }

    public function mostrarPrueba()
    {
        Log::info('Mostrando prueba');
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


        if ($request->tipo_pregunta != 'subpregunta') {
            // Procesar la respuesta anterior antes de cargar la siguiente pregunta
            if ($request->has('respuestas_abiertas')) {
                $respuestas_abiertas = $request->input('respuestas_abiertas');
                $pregunta_id = key($respuestas_abiertas);  // Obtiene la clave (id de la pregunta)
                $respuesta_abierta = $respuestas_abiertas[$pregunta_id];  // Obtiene la respuesta correspondiente

                // Verificar que $respuesta_abierta es una cadena válida
                if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                    return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida.');
                }

                $id_contexto = Preguntas::where('id_pregunta', $pregunta_id)->pluck('id_contexto')->first();

                $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
                $criterio = Criterios::where('id_pregunta', $pregunta_id)->pluck('texto');

                //concatenar contexto,criterio "con lo anterior devuelveme el numero de la calificación, sin ninguna otra letra", respuesta ($respuesta_abierta)
                $promt =  "Contexto: " . $contexto . " fin contexto. " . "Estos son los criterios para la calificacion: " . $criterio . " fin criterio. " . "Con lo anterior devuelveme el numero de la calificación, sin ninguna otra letra con la siguiente respuesta: " . $respuesta_abierta;

                // Llamar a la IA para obtener la calificación
                $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($promt);

                Log::info('Calificación obtenida', ['calificacion' => $respuesta_chatgpt]);

                // Verificar si la respuesta ya existe para este usuario y pregunta
                $respuestaExistente = Respuestas::where('id_usuario', $user->id_usuario)
                    ->where('id_pregunta', $pregunta_id)
                    ->first();

                if ($respuestaExistente) {
                    // Actualizar la respuesta existente
                    $respuestaExistente->update([
                        'respuesta' => $respuesta_abierta,
                        'calificacion_respuesta' => $respuesta_chatgpt,
                    ]);
                } else {
                    // Crear una nueva respuesta
                    Respuestas::create([
                        'id_usuario' => $user->id_usuario,
                        'id_pregunta' => $pregunta_id,
                        'respuesta' => $respuesta_abierta,
                        'calificacion_respuesta' => $respuesta_chatgpt,
                    ]);
                }
            }

            if ($request->has('respuestas_cerrada')) {
                foreach ($request->input('respuestas_cerrada') as $pregunta_id => $respuesta) {

                    // Obtener el texto de la opción seleccionada
                    $opcionSeleccionada = DB::table('opciones')
                        ->where('id_pregunta', $pregunta_id)
                        ->where('id_opcion', $respuesta)
                        ->first();

                    // Verificar si la respuesta ya existe para este usuario y pregunta
                    $respuestaExistente = Respuestas::where('id_usuario', $user->id_usuario)
                        ->where('id_pregunta', $pregunta_id)
                        ->first();

                    if (!$opcionSeleccionada) {
                        return redirect()->back()->with('error', 'Opción seleccionada no válida.');
                    }

                    if ($respuestaExistente) {
                        $respuestaExistente->update([
                            'respuesta' => $opcionSeleccionada->texto,
                            'calificacion_respuesta' => $opcionSeleccionada->valor_opcion,
                        ]);
                    } else {
                        // Crear una nueva respuesta
                        Respuestas::create([
                            'id_usuario' => $user->id_usuario,
                            'id_pregunta' => $pregunta_id,
                            'respuesta' => $opcionSeleccionada->texto,
                            'calificacion_respuesta' => $opcionSeleccionada->valor_opcion,
                        ]);
                    }
                }
            }
        } else {
            // Procesar respuestas de subpreguntas
            Log::info('Respuestas subpreguntas');

            $totalCalificacionSubpreguntas = 0;
            $totalSubpreguntas = 0;

            if ($request->has('respuestas_cerrada')) {
                foreach ($request->input('respuestas_cerrada') as $subpregunta => $respuesta) {

                    $opcionSubpreguntaSeleccionada = DB::table('opcionessubpreguntas')
                        ->where('id_subpregunta', $subpregunta)
                        ->where('id_opcionessubpregunta', $respuesta)
                        ->first();

                    if (!$opcionSubpreguntaSeleccionada) {
                        return redirect()->back()->with('error', 'Opción seleccionada no válida para la subpregunta.');
                    }

                    // Sumar la calificación de la subpregunta
                    $totalCalificacionSubpreguntas += $opcionSubpreguntaSeleccionada->valor_opcion;
                    $totalSubpreguntas++;
                }

                // Guardar la calificación final para la pregunta principal
                $preguntaPrincipalId = $request->input('pregunta_ids')[0]; // Suponiendo que la pregunta principal está en el índice 0
                $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas', $totalCalificacionSubpreguntas);
            }
            if ($request->has('respuestas_abiertas')) {
                Log::info('Respuestas abiertas subpreguntas');

                $totalCalificacionSubpreguntas = 0;
                $totalSubpreguntas = 0;

                // Obtener el ID de la pregunta principal
                $preguntaPrincipalId = $request->input('pregunta_ids')[1]; // Suponiendo que la pregunta principal está en el índice 0

                Log::info('ID de la pregunta principal', ['id_pregunta' => $preguntaPrincipalId]);

                // Obtener el contexto de la pregunta principal
                $id_contexto = Preguntas::where('id_pregunta', $preguntaPrincipalId)->pluck('id_contexto')->first();
                $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();

                Log::info('Contexto asociado a la pregunta principal', ['id_contexto' => $id_contexto, 'contexto' => $contexto]);


                foreach ($request->input('respuestas_abiertas') as $subpregunta_id => $respuesta_abierta) {
                    Log::info('Procesando subpregunta abierta', ['id_subpregunta' => $subpregunta_id, 'respuesta' => $respuesta_abierta]);

                    // Verificar que la respuesta sea válida
                    if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                        return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida para la subpregunta.');
                    }

                    // Obtener los criterios asociados a la subpregunta
                    $criterio = Subcriterios::where('id_subpregunta', $subpregunta_id)->pluck('texto');

                    // Crear el prompt para OpenAI utilizando el contexto de la pregunta principal y los criterios de la subpregunta
                    $prompt =  "Contexto: " . $contexto . " fin contexto. " . "Estos son los criterios para la calificación: " . $criterio . " fin criterio. " . "Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;

                    Log::info('Prompt para subpregunta abierta', ['prompt' => $prompt]);

                    // Llamar a la IA para obtener la calificación
                    $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);

                    Log::info('Calificación obtenida para la subpregunta abierta', ['calificacion' => $respuesta_chatgpt]);

                    // Sumar la calificación de la subpregunta abierta
                    $totalCalificacionSubpreguntas += $respuesta_chatgpt;
                    $totalSubpreguntas++;
                }

                // Guardar la calificación final para la pregunta principal
                if ($totalSubpreguntas > 0) {
                    Log::info('Calificación final basada en subpreguntas abiertas', ['totalCalificacionSubpreguntas' => $totalCalificacionSubpreguntas]);

                    $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
                }
            }
        }


        $prueba_id = $request->input('prueba_id');
        $pregunta_index = $request->input('pregunta_index', 0);

        // Verificar si ya no hay más preguntas por responder
        $total_preguntas = Preguntas::where('id_prueba', $prueba_id)->count();

        if ($pregunta_index >= $total_preguntas) {
            return redirect()->route('metacognicion.encuesta')->with('message', 'Has completado la prueba. Ahora continúa con la encuesta de metacognición.');
        }


        // Cargar dos preguntas y subpreguntas relacionadas con el mismo contexto
        $preguntas = Preguntas::with('opciones', 'subpreguntas.opciones')
            ->where('id_prueba', $prueba_id)
            ->skip($pregunta_index)
            ->take(2)
            ->get();

        Log::info($preguntas);

        $total_preguntas = Preguntas::where('id_prueba', $prueba_id)->count();

        return view('private.prueba_page', compact('preguntas', 'pregunta_index', 'total_preguntas', 'prueba_id'));
    }
}
