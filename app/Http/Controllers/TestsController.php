<?php

namespace App\Http\Controllers;

use App\Models\Contexto;
use App\Models\Criterios;
use App\Models\Opciones;
use App\Models\opcionessubpreguntas;
use App\Models\Preguntas;
use App\Models\Pruebas;
use App\Models\Respuestas;
use App\Models\Subcriterios;
use App\Models\subpreguntas;
use App\Services\OpenAIService;
use Carbon\Carbon;
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
    public function metacognicion($tiempo_prueba)
    {
        return view('private.metacognicion', compact("tiempo_prueba"));
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

    //public static $hora_inicio_prueba = 'Soy una variable estática';

    public function cargarPreguntas(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para continuar.');
        }


        $user = Auth::user();

        Log::info($request);

        // Verificar si es la primera vez que se carga la página o si ya se han enviado respuestas
        if (!$request->has('pregunta_ids')) {


            $hora_inicio_prueba = Carbon::now();
            Log::info("cronometro inicio" . $hora_inicio_prueba);

            session(['hora_inicio_prueba' => $hora_inicio_prueba]);

            // Primera carga de la página: cargar las primeras preguntas
            $prueba_id = $request->input('prueba_id');

            // Obtener los contextos y preguntas asociadas a la prueba
            $contextos = Contexto::with('preguntas')->get();

            // Definir los índices según el orden que deseas (pares primero, impares después)
            $indices = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 30];

            $contextos_ordenados = [];

            // Ordenar los contextos de acuerdo a los índices dados
            foreach ($indices as $indice) {
                // Utilizar la función `firstWhere` para hacer coincidir el contexto según el id_contexto
                $contexto_encontrado = $contextos->firstWhere('id_contexto', $indice);

                if ($contexto_encontrado) {
                    array_push($contextos_ordenados, $contexto_encontrado);
                }
            }

            $contexto_index = 0;
            $total_contextos = count($contextos_ordenados);
            $preguntas = $contextos_ordenados[$contexto_index]->preguntas;

            session(['contextos_ordenados' => $contextos_ordenados]);

            return view('private.prueba_page', compact('preguntas', 'contexto_index', 'total_contextos', 'prueba_id'));
        }

        // Si ya se han enviado respuestas, procesar las preguntas
        $pregunta_ids = $request->input('pregunta_ids');
        if (is_array($pregunta_ids)) {
            // Iterar sobre las preguntas enviadas y procesar cada una según su tipo
            foreach ($pregunta_ids as $pregunta_id) {
                // Obtener el tipo de pregunta
                $tipo_pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('tipo_pregunta')->first();
                dd($request);

                // Procesar preguntas cerradas
                if ($tipo_pregunta == 'cerrada' && $request->has('respuestas_cerrada')) {


                    $respuesta_cerrada = $request->input('respuestas_cerrada');


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

                // Procesar preguntas abiertas
                if ($tipo_pregunta == 'abierta' && $request->has('respuestas_abiertas')) {
                    $respuesta_abierta = $request->input('respuestas_abiertas');

                    $respuesta_cerrada = $request->input('respuestas_cerrada');

                    if (count($respuesta_cerrada) > 1) {


                        //obtengo el item en la posicion 2 del array
                        $respuesta_cerrada_index = array_values($respuesta_cerrada);
                        $opcion_seleccionada = $respuesta_cerrada_index[1];

                        $opcion = opcionessubpreguntas::find($opcion_seleccionada);

                        if ($opcion->valor_opcion == 0 ) {
                            $respuesta_chatgpt = 0;
                        } else {
                            // Verificar si es un array y extraer el primer valor
                            if (is_array($respuesta_abierta)) {
                                $respuesta_abierta = reset($respuesta_abierta); // Obtén el primer valor del array
                            }

                            //se obtiene la opcion seleccionada para la pregunta cerrada que viene en la respuestas_cerrada
                            $respuesta_cerrada = $request->input('respuestas_cerrada');
                            $opcion_seleccionada = reset($respuesta_cerrada);

                            //buscar opcion por id
                            //$opcion = Opciones::find($opcion_seleccionada)->pluck('texto');
                            $opcion = Opciones::find($opcion_seleccionada);

                            if ($opcion->valor_opcion == 0) {
                                $respuesta_chatgpt = 0;
                            } else {
                                // Obtener contexto y criterios para la calificación
                                $id_contexto = Preguntas::where('id_pregunta', $pregunta_id)->pluck('id_contexto')->first();
                                $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
                                $pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('texto')->first();
                                $criterio = Criterios::where('id_pregunta', $pregunta_id)->pluck('texto');

                                //se obtiene la opcion seleccionada para la pregunta cerrada que viene en la respuestas_cerrada
                                $respuesta_cerrada = $request->input('respuestas_cerrada');
                                $opcion_seleccionada = reset($respuesta_cerrada);

                                //buscar opcion por id
                                $opcion = Opciones::find($opcion_seleccionada)->pluck('texto')->first();


                                // Concatenar contexto y criterios para el prompt de la IA
                                $prompt = "Contexto: " . $contexto . " fin contexto. Esta es la pregunta : " . $pregunta . " fin pregunta. Esta es la opcion seleccionada en el anterior item" . $opcion . "Estos son los criterios para la calificacion " . $criterio . "Fin criterio. Necesito que lo que valla en la respuesta abierta sea coherente con la pregunta que se hace y si no lo es su calificación debe ser 0. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;


                                // Llamar a la IA para obtener la calificación
                                $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


                                //verificar que la respuesta sea un número
                                if (!is_numeric($respuesta_chatgpt)) {
                                    $respuesta_chatgpt = 0;
                                }
                            }
                        }
                    } else {


                        // Verificar si es un array y extraer el primer valor
                        if (is_array($respuesta_abierta)) {
                            $respuesta_abierta = reset($respuesta_abierta); // Obtén el primer valor del array
                        }

                        //se obtiene la opcion seleccionada para la pregunta cerrada que viene en la respuestas_cerrada
                        $respuesta_cerrada = $request->input('respuestas_cerrada');
                        $opcion_seleccionada = reset($respuesta_cerrada);

                        //buscar opcion por id
                        //$opcion = Opciones::find($opcion_seleccionada)->pluck('texto');
                        $opcion = Opciones::find($opcion_seleccionada);

                        if ($opcion->valor_opcion == 0) {
                            $respuesta_chatgpt = 0;
                        } else {
                            // Obtener contexto y criterios para la calificación
                            $id_contexto = Preguntas::where('id_pregunta', $pregunta_id)->pluck('id_contexto')->first();
                            $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
                            $pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('texto')->first();
                            $criterio = Criterios::where('id_pregunta', $pregunta_id)->pluck('texto');

                            //se obtiene la opcion seleccionada para la pregunta cerrada que viene en la respuestas_cerrada
                            $respuesta_cerrada = $request->input('respuestas_cerrada');
                            $opcion_seleccionada = reset($respuesta_cerrada);

                            //buscar opcion por id
                            $opcion = Opciones::find($opcion_seleccionada)->pluck('texto')->first();


                            // Concatenar contexto y criterios para el prompt de la IA
                            $prompt = "Contexto: " . $contexto . " fin contexto. Esta es la pregunta : " . $pregunta . " fin pregunta. Esta es la opcion seleccionada en el anterior item" . $opcion . "Estos son los criterios para la calificacion " . $criterio . "Fin criterio. Necesito que lo que valla en la respuesta abierta sea coherente con la pregunta que se hace y si no lo es su calificación debe ser 0. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;


                            // Llamar a la IA para obtener la calificación
                            $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


                            //verificar que la respuesta sea un número
                            if (!is_numeric($respuesta_chatgpt)) {
                                $respuesta_chatgpt = 0;
                            }
                        }
                    }

                    // Guardar o actualizar la respuesta
                    Respuestas::updateOrCreate(
                        ['id_usuario' => $user->id_usuario, 'id_pregunta' => $pregunta_id],
                        ['respuesta' => $respuesta_abierta, 'calificacion_respuesta' => $respuesta_chatgpt]
                    );
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
                    }


                    // Guardar la calificación final para la pregunta principal
                    $preguntaPrincipalId = $request->input('pregunta_ids')[0]; // Suponiendo que la pregunta principal está en el índice 0
                    $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas', $totalCalificacionSubpreguntas);
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

                    $respuestas_abiertas = $request->input('respuestas_abiertas');
                    // Asignar a $i el número de elementos en el array
                    $i = 0;

                    foreach ($request->input('respuestas_abiertas') as $subpregunta_id => $respuesta_abierta) {


                        // Obtener las opciones cerradas de la subpregunta
                        $respuestas_cerradas = $request->input('respuestas_cerrada');

                        //capturar la opcion cerrada seleccionada que esté en el mismo indice que la subpregunta abierta
                        $respuesta_cerrada = $request->input('respuestas_cerrada');

                        $respuestas_cerradas_indexadas = array_values($respuestas_cerradas);

                        // Verificar que la respuesta sea válida
                        if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                            return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida para la subpregunta.');
                        }

                        $opcion_seleccionada = $respuestas_cerradas_indexadas[$i];
                        Log::info("opcion seleccionada" . $opcion_seleccionada);

                        //buscar opcion por id
                        $opcion = Opcionessubpreguntas::find($opcion_seleccionada);

                        if ($opcion->valor_opcion == 0) {
                            $respuesta_chatgpt = 0;
                        } else {
                            //obtengo el texto de la subpregunta asociada
                            $subpregunta = Subpreguntas::find($subpregunta_id);

                            // Obtener los criterios asociados a la subpregunta
                            $criterio = Subcriterios::where('id_subpregunta', $subpregunta_id)->pluck('texto');

                            // Crear el prompt para OpenAI utilizando el contexto de la pregunta principal y los criterios de la subpregunta
                            $prompt =  "Contexto: " . $contexto . " fin contexto. Esta es la pregunta: "  . $subpregunta->texto . " Fin pregunta. Esta es la respuesta del enunciado: " . $opcion->texto . ". fin respuesta. Estos son los criterios para la calificación: " . $criterio . " fin criterio. " . "Nota: La respuesta debe tener un sentido coherente con lo que se pregunta en el contexto." . "Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;


                            // Llamar a la IA para obtener la calificación
                            $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


                            //verificar que la respuesta sea un número
                            if (!is_numeric($respuesta_chatgpt)) {

                                $respuesta_chatgpt = 0;
                            }

                            //total subpreguntas subpreguntas
                            // Sumar la calificación de la subpregunta abierta
                            $totalCalificacionSubpreguntas += $respuesta_chatgpt;
                            $totalSubpreguntas++;
                        }

                        // Guardar la calificación final para la pregunta principal
                        if ($totalSubpreguntas > 0) {

                            $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
                        }

                        //total subpreguntas subpreguntas
                        // Sumar la calificación de la subpregunta abierta
                        $totalCalificacionSubpreguntas += $respuesta_chatgpt;
                        $totalSubpreguntas++;

                        // Guardar la calificación final para la pregunta principal
                        if ($totalSubpreguntas > 0) {

                            $this->guardarRespuesta($user->id_usuario, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
                        }

                        $i++;
                    }
                }
            } // Cierra el foreach
        } else {
            return redirect()->back()->with('error', 'No se recibieron preguntas.');
        }

        // Lógica para cargar las siguientes preguntas o finalizar la prueba
        $prueba_id = $request->input('prueba_id');
        $contexto_index = $request->input('contexto_index', 0);

        // Verificar si ya no hay más preguntas por responder
        $total_contextos = Contexto::count();
        if ($contexto_index >= $total_contextos) {
            $hora_final_prueba = Carbon::now();
            $hora_inicio_prueba = session('hora_inicio_prueba');
            $tiempo_prueba = $tiempo_prueba = $hora_final_prueba->diffInSeconds($hora_inicio_prueba);

            return $this->metacognicion($tiempo_prueba);
        }

        //cargo los contextos ordenados desde session
        $contextos_ordenados = session('contextos_ordenados');

        //envio el contexto en la posicion contexto_index
        $preguntas = $contextos_ordenados[$contexto_index]->preguntas;

        /*  // Cargar las siguientes preguntas
        $preguntas = Preguntas::with('opciones', 'subpreguntas.opciones')
            ->where('id_prueba', $prueba_id)
            ->skip($pregunta_index)
            ->take(2)
            ->get(); */

        return view('private.prueba_page', compact('preguntas', 'contexto_index', 'total_contextos', 'prueba_id'));
    }
}
