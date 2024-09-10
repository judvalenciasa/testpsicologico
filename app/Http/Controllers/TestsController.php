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


        // Verificar si es la primera vez que se carga la página o si ya se han enviado respuestas
        if (!$request->has('pregunta_ids')) {
            // Primera carga de la página: cargar las primeras preguntas
            $prueba_id = $request->input('prueba_id');

            // Cargar las primeras preguntas
            $pregunta_index = 0;
            $preguntas = Preguntas::with('opciones', 'subpreguntas.opciones')
                ->where('id_prueba', $prueba_id)
                ->skip($pregunta_index)
                ->take(2)
                ->get();

            // Mostrar las preguntas en la vista
            $total_preguntas = Preguntas::where('id_prueba', $prueba_id)->count();
            return view('private.prueba_page', compact('preguntas', 'pregunta_index', 'total_preguntas', 'prueba_id'));
        }

        // Si ya se han enviado respuestas, procesar las preguntas
        $pregunta_ids = $request->input('pregunta_ids');
        if (is_array($pregunta_ids)) {
            // Iterar sobre las preguntas enviadas y procesar cada una según su tipo
            foreach ($pregunta_ids as $pregunta_id) {
                // Obtener el tipo de pregunta
                $tipo_pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('tipo_pregunta')->first();

                // Procesar preguntas abiertas
                if ($tipo_pregunta == 'abierta' && $request->has('respuestas_abiertas' . $pregunta_id)) {
                    $respuesta_abierta = $request->input('respuestas_abiertas.' . $pregunta_id);

                    if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                        return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida.');
                    }

                    // Obtener contexto y criterios para la calificación
                    $id_contexto = Preguntas::where('id_pregunta', $pregunta_id)->pluck('id_contexto')->first();
                    $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
                    $criterio = Criterios::where('id_pregunta', $pregunta_id)->pluck('texto');

                    // Concatenar contexto y criterios para el prompt de la IA
                    $prompt = "Contexto: " . $contexto . " fin contexto. Estos son los criterios para la calificación: " . $criterio . " fin criterio. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;

                    // Llamar a la IA para obtener la calificación
                    $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);

                    //verificar que la respuesta sea un número
                    if (!is_numeric($respuesta_chatgpt)) {
                        $respuesta_chatgpt = 0;
                    }

                    // Guardar o actualizar la respuesta
                    Respuestas::updateOrCreate(
                        ['id_usuario' => $user->id_usuario, 'id_pregunta' => $pregunta_id],
                        ['respuesta' => $respuesta_abierta, 'calificacion_respuesta' => $respuesta_chatgpt]
                    );
                }

                // Procesar preguntas cerradas
                if ($tipo_pregunta == 'cerrada' && $request->has('respuestas_cerrada' . $pregunta_id)) {
                    $respuesta_cerrada = $request->input('respuestas_cerrada.' . $pregunta_id);

                    $opcionSeleccionada = DB::table('opciones')
                        ->where('id_pregunta', $pregunta_id)
                        ->where('id_opcion', $respuesta_cerrada)
                        ->first();

                    if (!$opcionSeleccionada) {
                        return redirect()->back()->with('error', 'Opción seleccionada no válida.');
                    }

                    // Guardar o actualizar la respuesta cerrada
                    Respuestas::updateOrCreate(
                        ['id_usuario' => $user->id_usuario, 'id_pregunta' => $pregunta_id],
                        ['respuesta' => $opcionSeleccionada->texto, 'calificacion_respuesta' => $opcionSeleccionada->valor_opcion]
                    );
                }

                // Procesar subpreguntas abiertas
                if ($tipo_pregunta == 'subpregunta' && $request->has('respuestas_abiertas')) {

                    $totalCalificacionSubpreguntas = 0;
                    $totalSubpreguntas = 0;


                    // Obtener el ID de la pregunta principal
                    $preguntaPrincipalId = $request->input('pregunta_ids')[1]; // Suponiendo que la pregunta principal está en el índice 0

                    // Obtener el contexto de la pregunta principal
                    $id_contexto = Preguntas::where('id_pregunta', $preguntaPrincipalId)->pluck('id_contexto')->first();
                    $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();



                    foreach ($request->input('respuestas_abiertas') as $subpregunta_id => $respuesta_abierta) {

                        // Verificar que la respuesta sea válida
                        if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                            return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida para la subpregunta.');
                        }

                        // Obtener los criterios asociados a la subpregunta
                        $criterio = Subcriterios::where('id_subpregunta', $subpregunta_id)->pluck('texto');

                        // Crear el prompt para OpenAI utilizando el contexto de la pregunta principal y los criterios de la subpregunta
                        $prompt =  "Contexto: " . $contexto . " fin contexto. " . "Estos son los criterios para la calificación: " . $criterio . " fin criterio. " . "Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;



                        // Llamar a la IA para obtener la calificación
                        $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);

                        Log::info('Respuesta de OpenAI: ' . $respuesta_chatgpt . ' para la subpregunta: ' . $subpregunta_id);

                        //verificar que la respuesta sea un número
                        if (!is_numeric($respuesta_chatgpt)) {

                            $respuesta_chatgpt = 0;
                        }

                        //total subpreguntas subpreguntas
                        // Sumar la calificación de la subpregunta abierta
                        $totalCalificacionSubpreguntas += $respuesta_chatgpt;
                        $totalSubpreguntas++;

                        //total subpreguntas subpreguntas
                    }

                    // Guardar la calificación final para la pregunta principal
                    if ($totalSubpreguntas > 0) {

                        $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
                    }
                }

                $totalCalificacionSubpreguntas = 0;
                $totalSubpreguntas = 0;

                // Procesar subpreguntas cerradas
                if ($tipo_pregunta == 'subpregunta' && $request->has('respuestas_cerrada')) {


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

                        Log::info('totalCalificacionSubpreguntas: ' . $totalCalificacionSubpreguntas);
                        Log::info('totalSubpreguntas: ' . $totalSubpreguntas);
                    }


                    // Guardar la calificación final para la pregunta principal
                    $preguntaPrincipalId = $request->input('pregunta_ids')[0]; // Suponiendo que la pregunta principal está en el índice 0
                    $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas', $totalCalificacionSubpreguntas);
                }
            } // Cierra el foreach
        } else {
            return redirect()->back()->with('error', 'No se recibieron preguntas.');
        }

        // Lógica para cargar las siguientes preguntas o finalizar la prueba
        $prueba_id = $request->input('prueba_id');
        $pregunta_index = $request->input('pregunta_index', 0);

        // Verificar si ya no hay más preguntas por responder
        $total_preguntas = Preguntas::where('id_prueba', $prueba_id)->count();
        if ($pregunta_index >= $total_preguntas) {
            return redirect()->route('metacognicion.encuesta')->with('message', 'Has completado la prueba. Ahora continúa con la encuesta de metacognición.');
        }

        // Cargar las siguientes preguntas
        $preguntas = Preguntas::with('opciones', 'subpreguntas.opciones')
            ->where('id_prueba', $prueba_id)
            ->skip($pregunta_index)
            ->take(2)
            ->get();

        return view('private.prueba_page', compact('preguntas', 'pregunta_index', 'total_preguntas', 'prueba_id'));
    }
}
