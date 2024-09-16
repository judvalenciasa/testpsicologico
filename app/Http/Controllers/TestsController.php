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

//se importa el controlador de respuestas
use App\Http\Controllers\RespuestasController;

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
    public function guardarRespuesta(Request $request, $user_id, $pregunta_id, $respuesta, $calificacion)
    {
        $respuestaExistente = Respuestas::where('id_usuario', $user_id)
            ->where('id_pregunta', $pregunta_id)
            ->first();

        if ($respuestaExistente) {
            $respuestaExistente->update([
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
            ]);
        } else {

            $respuestasControler = new RespuestasController();

            $respuestasControler->guardarRespuesta($request, $user_id, $pregunta_id, $respuesta, $calificacion);
        }
    }


    // Función para mostrar la página de metacognición
    public function metacognicion($tiempo_prueba)

    {
        return view('private.metacognicion', compact("tiempo_prueba"));
    }

    public function mostrarPrueba()
    {
        $prueba = Pruebas::first();

        if (!$prueba) {
            return redirect()->back()->with('error', 'No hay pruebas disponibles.');
        }

        return view('private.mostrarTest', compact('prueba'));
    }

    public function calificar_pregunta_cerrada(Request $request, $pregunta_id, $user)
    {

        $respuesta_cerrada = $request->input('respuestas_cerradas');


        $opcionSeleccionada = DB::table('opciones')
            ->where('id_pregunta', $pregunta_id)
            ->where('id_opcion', $respuesta_cerrada)
            ->first();

        if (!$opcionSeleccionada) {
            return redirect()->back()->with('error', 'Opción seleccionada no válida.');
        }

        $this->guardarRespuesta($request, $user, $pregunta_id, $opcionSeleccionada->texto, $opcionSeleccionada->valor_opcion);
    }

    public function calificar_pregunta_abierta(Request $request,  $pregunta_id, $user)
    {
        $respuestas_abiertas = $request->input('respuestas_abiertas');
        $respuestas_abiertas_texto = reset($respuestas_abiertas);

        if (is_array($respuestas_abiertas)) {
            $respuestas_abiertas = reset($respuestas_abiertas); // Obtén el primer valor del array
        }

        $respuesta_cerrada = $request->input('respuestas_cerradas');
        $opcion_seleccionada = reset($respuesta_cerrada);

        $opcion = Opciones::find($opcion_seleccionada);

        if ($opcion->valor_opcion == 0) {
            $respuesta_chatgpt = 0;
        } else {

            $id_contexto = Preguntas::where('id_pregunta', $pregunta_id)->pluck('id_contexto')->first();
            $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
            $pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('texto')->first();
            $criterio = Criterios::where('id_pregunta', $pregunta_id)->pluck('texto');

            $respuesta_cerrada = $request->input('respuestas_cerradas');
            $opcion_seleccionada = reset($respuesta_cerrada);

            $opcion = Opciones::find($opcion_seleccionada)->pluck('texto')->first();


            $prompt = "Contexto: " . $contexto . " fin contexto. Esta es la pregunta : " . $pregunta . " fin pregunta. Esta es la opcion seleccionada en el anterior item" . $opcion . "Estos son los criterios para la calificacion " . $criterio . "Fin criterio. Necesito que lo que valla en la respuesta abierta sea coherente con la pregunta que se hace y si no lo es su calificación debe ser 0. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuestas_abiertas_texto;


            $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);
        }

        $this->guardarRespuesta($request, $user, $pregunta_id, $respuestas_abiertas, $respuesta_chatgpt);
    }

    public function calificar_subpreguntas_cerradas(Request $request, $pregunta_id, $user)
    {

        $totalCalificacionSubpreguntas = 0;
        $totalSubpreguntas = 0;

        foreach ($request->input('respuestas_cerradas') as $subpregunta => $respuesta) {

            $opcionSubpreguntaSeleccionada = DB::table('opcionessubpreguntas')
                ->where('id_subpregunta', $subpregunta)
                ->where('id_opcionessubpregunta', $respuesta)
                ->first();


            if (!$opcionSubpreguntaSeleccionada) {
                return redirect()->back()->with('error', 'Opción seleccionada no válida para la subpregunta.');
            }


            $totalCalificacionSubpreguntas += $opcionSubpreguntaSeleccionada->valor_opcion;
            $totalSubpreguntas++;
        }


        $preguntaPrincipalId = $request->input('pregunta_ids')[0]; 
        $this->guardarRespuesta($request, $user, $preguntaPrincipalId, 'Calificación basada en subpreguntas', $totalCalificacionSubpreguntas);
    }

    public function calificar_subpreguntas_abiertas(Request $request, $pregunta_id, $user)
    {
        $totalCalificacionSubpreguntas = 0;
        $totalSubpreguntas = 0;

        $preguntaPrincipalId = $request->input('pregunta_ids')[1]; 


        $id_contexto = Preguntas::where('id_pregunta', $preguntaPrincipalId)->pluck('id_contexto')->first();
        $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();

        $i = 0;

        foreach ($request->input('respuestas_abiertas') as $subpregunta_id => $respuesta_abierta) {

            $respuestas_cerradas = $request->input('respuestas_cerradas');

            $respuestas_cerradas_indexadas = array_values($respuestas_cerradas);

            if (!is_string($respuesta_abierta) || empty(trim($respuesta_abierta))) {
                return redirect()->back()->with('error', 'Por favor ingrese una respuesta válida para la subpregunta.');
            }

            $opcion_seleccionada = $respuestas_cerradas_indexadas[$i];

            $opcion = Opcionessubpreguntas::find($opcion_seleccionada);

            if ($opcion->valor_opcion == 0) {
                $respuesta_chatgpt = 0;
            } else {

                $subpregunta = Subpreguntas::find($subpregunta_id);

                $criterio = Subcriterios::where('id_subpregunta', $subpregunta_id)->pluck('texto');

                $prompt =  "Contexto: " . $contexto . " fin contexto. Esta es la pregunta: "  . $subpregunta->texto . " Fin pregunta. Esta es la respuesta del enunciado: " . $opcion->texto . ". fin respuesta. Estos son los criterios para la calificación: " . $criterio . " fin criterio. " . "Nota: La respuesta debe tener un sentido coherente con lo que se pregunta en el contexto." . "Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta;


                $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


                if (!is_numeric($respuesta_chatgpt)) {

                    $respuesta_chatgpt = 0;
                }

                $totalCalificacionSubpreguntas += $respuesta_chatgpt;
                $totalSubpreguntas++;
            }

            if ($totalSubpreguntas > 0) {

                $this->guardarRespuesta($request, $user, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
            }

            $totalCalificacionSubpreguntas += $respuesta_chatgpt;
            $totalSubpreguntas++;

            if ($totalSubpreguntas > 0) {

                $this->guardarRespuesta($request, $user, $preguntaPrincipalId, 'Calificación basada en subpreguntas abiertas', $totalCalificacionSubpreguntas);
            }

            $i++;
        }
    }

    public function calificar_pregunta_93(Request $request, $user)
    {

        $pregunta1Id = $request->input('pregunta_ids')[0];
        $pregunta2Id = $request->input('pregunta_ids')[1];


        $this->calificar_subpreguntas_cerradas($request, $pregunta1Id, $user);

        $respuestas_cerradas = $request->input('respuestas_cerradas');

        $respuestas_cerradas_indexadas = array_values($respuestas_cerradas);

        $respuesta_cerrada = $respuestas_cerradas_indexadas[1];

        $subopcion = opcionessubpreguntas::find($respuesta_cerrada);

        if ($subopcion->valor_opcion == 0) {
            $respuesta_chatgpt = 0;
        } else {

            $respuestas_abiertas = $request->input('respuestas_abiertas');
            $respuesta_abierta_texto = reset($respuestas_abiertas);


            $id_contexto = Preguntas::where('id_pregunta', $pregunta2Id)->pluck('id_contexto')->first();
            $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
            $pregunta = Preguntas::where('id_pregunta', $pregunta2Id)->pluck('texto')->first();
            $criterio = Criterios::where('id_pregunta', $pregunta2Id)->pluck('texto')->first();


            $prompt = "Contexto: " . $contexto . " fin contexto. Esta es la pregunta : " . $pregunta . " fin pregunta. Esta es la opcion seleccionada en el anterior item" . $subopcion->texto . "Estos son los criterios para la calificacion " . $criterio . "Fin criterio. Necesito que lo que valla en la respuesta abierta sea coherente con la pregunta que se hace y si no lo es su calificación debe ser 0. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuesta_abierta_texto;

            $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


            $this->guardarRespuesta($request, $user, $pregunta2Id, $respuesta_abierta_texto, $respuesta_chatgpt);
        }
    }

    public function calificar_pregunta_101(Request $request, $user)
    {
        $pregunta1Id = $request->input('pregunta_ids')[0];
        $pregunta2Id = $request->input('pregunta_ids')[1];

        $this->calificar_subpreguntas_cerradas($request, $pregunta1Id, $user);

        //se califica la pregunta abierta con chatgpt

        $respuestas_abiertas = $request->input('respuestas_abiertas');
        $respuestas_abiertas = reset($respuestas_abiertas);

        // Obtener contexto y criterios para la calificación
        $id_contexto = Preguntas::where('id_pregunta', $pregunta2Id)->pluck('id_contexto')->first();
        $contexto = Contexto::where('id_contexto', $id_contexto)->pluck('texto')->first();
        $pregunta = Preguntas::where('id_pregunta', $pregunta2Id)->pluck('texto')->first();
        $criterio = Criterios::where('id_pregunta', $pregunta2Id)->pluck('texto');


        // Concatenar contexto y criterios para el prompt de la IA
        $prompt = "Contexto: " . $contexto . " fin contexto. Esta es la pregunta : " . $pregunta . " fin pregunta. " . "Estos son los criterios para la calificacion " . $criterio . "Fin criterio. Necesito que lo que valla en la respuesta abierta sea coherente con la pregunta que se hace y si no lo es su calificación debe ser 0. Con lo anterior devuélveme el número de la calificación, sin ninguna otra letra, con la siguiente respuesta: " . $respuestas_abiertas;

        // Llamar a la IA para obtener la calificación
        $respuesta_chatgpt = $this->openAIService->enviarRespuestaAChatGPT($prompt);


        // Guardar o actualizar la respuesta
        $this->guardarRespuesta($request, $user, $pregunta2Id, $respuestas_abiertas, $respuesta_chatgpt);
    }



    //public static $hora_inicio_prueba = 'Soy una variable estática';

    public function cargarPreguntas(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para continuar.');
        }

        $user = Auth::user();

        Log::info($request);



        if (!$request->has('pregunta_ids')) {

            $hora_inicio_prueba = Carbon::now();
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

        $pregunta_ids = $request->input('pregunta_ids');

        if (is_array($pregunta_ids)) {

            foreach ($pregunta_ids as $pregunta_id) {


                if ($pregunta_id == 93 || $pregunta_id == 94) {
                    $this->calificar_pregunta_93($request,  $user);
                } elseif ($pregunta_id == 101 || $pregunta_id == 102) {
                    $this->calificar_pregunta_101($request,  $user);
                } else {
                    $tipo_pregunta = Preguntas::where('id_pregunta', $pregunta_id)->pluck('tipo_pregunta')->first();

                    if ($tipo_pregunta == 'cerrada' && $request->has('respuestas_cerradas')) {
                        $this->calificar_pregunta_cerrada($request, $pregunta_id, $user);
                    }
                    if ($tipo_pregunta == 'abierta' && $request->has('respuestas_abiertas')) {


                        $this->calificar_pregunta_abierta($request, $pregunta_id, $user);
                    }

                    if ($tipo_pregunta == 'subpregunta' && $request->has('respuestas_cerradas')) {

                        $this->calificar_subpreguntas_cerradas($request, $pregunta_id, $user);
                    }


                    if ($tipo_pregunta == 'subpregunta' && $request->has('respuestas_abiertas')) {

                        $this->calificar_subpreguntas_abiertas($request, $pregunta_id, $user);
                    }
                }
            }
        } else {
            return redirect()->back()->with('error', 'No se recibieron preguntas.');
        }

        $prueba_id = $request->input('prueba_id');
        $contexto_index = $request->input('contexto_index', 0);

        $total_contextos = Contexto::count();
        if ($contexto_index >= $total_contextos) {
            $hora_final_prueba = Carbon::now();
            $hora_inicio_prueba = session('hora_inicio_prueba');
            $tiempo_prueba = $tiempo_prueba = $hora_final_prueba->diffInSeconds($hora_inicio_prueba);

            return $this->metacognicion($tiempo_prueba);
        }

        $contextos_ordenados = session('contextos_ordenados');

        $preguntas = $contextos_ordenados[$contexto_index]->preguntas;

        return view('private.prueba_page', compact('preguntas', 'contexto_index', 'total_contextos', 'prueba_id'));
    }
}
