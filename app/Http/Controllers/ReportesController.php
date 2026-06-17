<?php

namespace App\Http\Controllers;

use App\Application\Reports\ReportComputationService;
use App\Models\Descriptivos;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\Subhabilidad;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reportes;
use App\Models\subpreguntas;
use App\Models\subrespuestas;
use Session;

class ReportesController extends Controller
{
    public function __construct(private readonly ReportComputationService $reportComputationService)
    {
    }


    /**
     * Crea un nuevo reporte
     */
    public function actualizar_reporte($request, $user, $categorias, $id_reporte)
    {
        $reporte = Reportes::where('id_reporte', $id_reporte)->first();

        if ($reporte) {
            // Si el reporte existe, actualízalo con los nuevos datos
            $reporte->update([
                'calificacion_metacognicion' => $categorias['conocimiento_procedimental'] + $categorias['depuracion'] + $categorias['evaluacion'] + $categorias['monitoreo'] + $categorias['organizacion'] + $categorias['planificacion'],
                'documento_identificacion' => $user->documento_identificacion,
                'edad' => $user->edad,
                'estrato' => $user->estrato,
                'nivel_escolaridad' => $user->nivel_escolaridad,
                'nivel_educativo_padre' => $user->nivel_educativo_padre,
                'nivel_educativo_madre' => $user->nivel_educativo_madre,
                'horas_lectura' => $user->horas_lectura,
                'horas_redes_sociales' => $user->horas_redes_sociales,
                'horas_entretenimiento' => $user->horas_entretenimiento,
                'hora_sueno' => $user->hora_sueno,
                'genero' => $user->genero,
                'promedio_deporte' => $user->promedio_deporte,
                'promedio_arte' => $user->promedio_arte,
                'grasas' => $user->grasas,
                'alimentos_saludables' => $user->alimentos_saludables,
                'litro_agua' => $user->litro_agua,

                'induccion_general' => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL", $id_reporte),

                'induccion_especifica' => $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA", $id_reporte),

                'total_macrohabilidad_inductiva' => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA", $id_reporte),
                'comprobacion_hipotesis' => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS", $id_reporte),
                'uso_probabilidad_incertidumbre' => $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE", $id_reporte),

                'total_macrohabilidad_abductiva' => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS", $id_reporte) + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE", $id_reporte),

                'identificacion_analogia' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA", $id_reporte),

                'identificacion_por_fallo_vaguedad' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD", $id_reporte),

                'total_macrohabilidad_deductivo_y_verbal' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD", $id_reporte),

                'identificacion_estructura_argumentativa' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA", $id_reporte),

                'identificacion_de_suposicion' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN", $id_reporte),

                'identificacion_de_falacia' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA", $id_reporte),

                'total_macrohabilidad_analisis_de_argumentos' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA", $id_reporte),

                'toma_desiciones_informadas' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS", $id_reporte),

                'conciencia_situacion_acciones_razonables' => $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES", $id_reporte),
                'pensamiento_estrategico' => $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO", $id_reporte),

                'pensamiento_creativo' => $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO", $id_reporte),

                'macrohabilidad_toma_desiciones_y_resolucion_problemas' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS", $id_reporte) + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO", $id_reporte),

                'calificacion_total' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS", $id_reporte) + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD", $id_reporte) + $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS", $id_reporte) + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA", $id_reporte),

                'conocimiento_procedimental' => $categorias['conocimiento_procedimental'],

                'nivel_inductivo' => $this->calcularNivel($this->buscar_total_subhabilidad("INDUCCIÓN GENERAL", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA", $id_reporte), 'inductivo'),

                'nivel_abductivo' => $this->calcularNivel($this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS", $id_reporte) + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE", $id_reporte), 'abductivo'),

                'nivel_deductivo_y_verbal' => $this->calcularNivel($this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD", $id_reporte), 'deductivo'),


                'nivel_analisis_de_argumentos' => $this->calcularNivel($this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA", $id_reporte), 'analisis_argumentos'),

                'nivel_toma_desiciones_y_resolucion_problemas' => $this->calcularNivel($this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS", $id_reporte) + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO", $id_reporte), 'toma_decisiones'),

                'nivel_total' => $this->calcularNivel($this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS", $id_reporte) + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO", $id_reporte) + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA", $id_reporte) + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD", $id_reporte) + $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS", $id_reporte) + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL", $id_reporte) + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA", $id_reporte), 'total'),

                'depuracion' => $categorias['depuracion'],
                'evaluacion' => $categorias['evaluacion'],
                'monitoreo' => $categorias['monitoreo'],
                'organizacion' => $categorias['organizacion'],
                'planificacion' => $categorias['planificacion'],
                'tiempo_prueba' => $request->tiempo_prueba,
            ]);
        }


    }



    public function aumentar_intento(){
        $pin = session('pin');

        if($pin){
            $pin->update([
                'intentos' => ($pin->intentos) + 1
            ]);
        }
    }


    /**
     * Muestra el reporte en la vista de un usuario
     * 
     */
    public function ver_reporte_usuario(Request $request)
    {
        $this->aumentar_intento();
        $user = $request->user();
        $categorias = $this->sumar_por_categorias(request: $request);
        $tiempoTotal = $request->input('tiempo_total');
        $id_reporte = $request->input('id_reporte');


        $this->actualizar_reporte($request, $user, $categorias, $id_reporte);

        $consulta_informe = $this->consultar_informe(id_usuario: $user->id_usuario, id_reporte: $id_reporte);
        $informe_final = $this->crear_informe_descriptivo($consulta_informe, $id_reporte);

        
        //Esto es lo que debería restornar
        return view('reporte.index', compact('informe_final'));
    }






    /**
     * Suma las categorías de las respuestas del request y retorna una 
     * lista de categorias con su correspondiente suma
     */
    private function sumar_por_categorias(Request $request)
    {
        return $this->reportComputationService->sumCategories($request->all());
    }


    // Mostrar los reportes de un usuario específico
    public function verReportes($id_usuario)
    {

        $user = User::findOrFail($id_usuario);
        $reportes = Reportes::where('id_usuario', $id_usuario)->get();

        return view('private.reportes_usuario', compact('user', 'reportes')); // Asegúrate de tener una vista admin/reportes_usuario
    }

    private function calcularNivel($puntaje, $tipo_habilidad)
    {
        return $this->reportComputationService->calculateLevel($puntaje, $tipo_habilidad);
    }

    /**
     * Muestra el reporte para el usuario administrador buscado por el id del reporte
     * Retorna la vista reporte_detalle con los datos del reporte
     */
    public function verReporte(Request $request)
    {

        $categorias = Reportes::where('id_reporte', $request->id_reporte)
            ->select(
                'conocimiento_procedimental',
                'depuracion',
                'evaluacion',
                'monitoreo',
                'organizacion',
                'planificacion',
                'calificacion_metacognicion',
                'tiempo_prueba'
            )
            ->first()
            ->toArray();


        $consulta_informe = $this->consultar_informe(id_usuario: $request->id_usuario, id_reporte: $request->id_reporte);

        
        $informe_final = $this->crear_informe_descriptivo($consulta_informe, $request->id_reporte);

       
        //Esto es lo que debería restornar
        return view('reporte.reporte_detalle', compact('informe_final'));



        //necesito crear la consulta para ver el reporte 
        //$reporte_descriptivo = $this->consultar_informe(id_usuario: $request->id_usuario, id_reporte: $request->id_reporte);

        //return view('reporte.reporte_detalle', compact('reporte_descriptivo'));
    }

    /**
     * Display a listing of the resource.
     */
    public function buscar_total_subhabilidad($nombre_habilidad, $id_reporte)
    {
    

        //dd($id_reporte);
        $id_subhabilidad = Subhabilidad::where('nombre', $nombre_habilidad)
            ->pluck('id_subhabilidad')
            ->first();


        if ($id_subhabilidad) {
            $total_Calificacion_induccion_general = 
            Respuestas::join('preguntas', 'respuestas.id_pregunta', '=', 'preguntas.id_pregunta')
                ->where('preguntas.id_subhabilidad', $id_subhabilidad)
                ->where('preguntas.tipo_pregunta', '!=', 'abierta')
                ->where('respuestas.id_reporte', $id_reporte)
                ->sum('respuestas.calificacion_respuesta');
        } else {
            $total_Calificacion_induccion_general = 0;
        }

        
        return $total_Calificacion_induccion_general;
    }


    /**
     * Realiza la consulta para traer Contexto, Habilidad, Subhabilidad, texto_pregunta, calificacion, respuesta y calificacion de una pregunta.
     * respecto a un usuario devuelve todas las preguntas con los encabezados descritos anteriormente 
     */
    public function consultar_informe($id_usuario, $id_reporte)
    {

        $consulta_informe = Preguntas::with([
            'subhabilidad.habilidad',
            'contexto',
            'respuestas'
        ])
            ->get()
            ->flatMap(function ($pregunta) use ($id_usuario, $id_reporte) {
                // Filtramos las respuestas para obtener solo las que pertenecen al usuario y al reporte indicado
                $respuestas_usuario = $pregunta->respuestas->filter(function ($respuesta) use ($id_usuario, $id_reporte) {
                    return $respuesta->id_usuario == $id_usuario && $respuesta->id_reporte == $id_reporte;
                });

                // Si no hay respuestas que coincidan con el usuario y reporte, no procesamos esta pregunta
                if ($respuestas_usuario->isEmpty()) {
                    return [];
                }

                // Aplanamos los datos, retornando una entrada por cada respuesta
                return $respuestas_usuario->map(function ($respuesta) use ($pregunta) {
                    return [
                        'habilidad' => $pregunta->subhabilidad->habilidad->nombre,
                        'subhabilidad' => $pregunta->subhabilidad->nombre,
                        'contexto' => $pregunta->contexto ? $pregunta->contexto->texto : null,
                        'id_contexto' => $pregunta->id_contexto ? $pregunta->contexto->id_contexto : null,
                        'id_pregunta' => $pregunta->id_pregunta,
                        'tipo_pregunta' => $pregunta->tipo_pregunta,
                        'texto_pregunta' => $pregunta->texto,
                        'respuesta_texto' => $respuesta->respuesta, // Una única respuesta
                        'calificacion' => $respuesta->calificacion_respuesta, // Calificación de la respuesta
                    ];
                });
            })
            ->toArray(); // Convertir el resultado final a un solo array plano


        return $consulta_informe;
    }

    /**
     * Recorremos toda la consulta y sacamos solamente lo que necesitamos de consultar_informe y lo
     * unimos con la metacognición
     */
    public function crear_informe_descriptivo($consulta_informe, $id_reporte)
    {

        
        $documentos_totales = [];
        $indice_item = 1;
        $indice_contexto = 1;

        
        for ($i = 0; $i < count($consulta_informe) - 1; $i++) {

            if ($consulta_informe[$i]['id_contexto'] == $consulta_informe[$i + 1]['id_contexto']) {
                $nombre_contexto = "Contexto " . $indice_contexto; // Usar el índice en lugar del ID de la pregunta
                $nombre_item_1 = "Item " . $indice_item;
                $nombre_item_2 = "Item " . $indice_item + 1;

                $documento = [
                    $nombre_item_1 => [
                        "Contexto y habilidad" => $consulta_informe[$i]['habilidad'],
                        "id_contexto" => $consulta_informe[$i]['id_contexto'],
                        "Ejercicio mental/subhabilidad" => $consulta_informe[$i]['subhabilidad'],
                        "puntuación" => $consulta_informe[$i]['calificacion']
                    ],
                    $nombre_item_2 =>
                    [
                        "Contexto y habilidad" => $consulta_informe[$i + 1]['habilidad'],
                        "id_contexto" => $consulta_informe[$i + 1]['id_contexto'],
                        "Ejercicio mental/subhabilidad" => $consulta_informe[$i + 1]['subhabilidad'],
                        "puntuación" => $consulta_informe[$i + 1]['calificacion']
                    ],
                    "descriptor" =>
                    $this->identificar_descriptor($consulta_informe[$i]['id_pregunta'], $consulta_informe[$i]['calificacion']) . " " . $this->identificar_descriptor($consulta_informe[$i + 1]['id_pregunta'], $consulta_informe[$i + 1]['calificacion']) . $this->buscar_descriptor_contexto($consulta_informe[$i]['id_contexto']),
                    // "id_contexto" =>
                    //     $consulta_informe[$i]['id_contexto']

                ];
                $documentos_totales[$nombre_contexto] = $documento;
                $indice_contexto++; // Incrementar el índice
            }
            $indice_item++;
        }
    
        $reporte = Reportes::where('id_reporte', $id_reporte)->first();
        
        $metacognicion_motivacion = [
            "id_reporte" => $reporte->id_reporte,
            "id_usuario" => $reporte->id_usuario,
            "calificacion_total" => $reporte->calificacion_total,
            "calificacion_metacognicion" => $reporte->calificacion_metacognicion,  // Asumiendo que existe este atributo en $reporte
            "fecha_calificacion" => $reporte->fecha_calificacion,  // Asumiendo que existe
            "documento_identificacion" => $reporte->documento_identificacion,
            "edad" => $reporte->edad,
            "estrato" => $reporte->estrato,
            "nivel_escolaridad" => $reporte->nivel_escolaridad,
            "nivel_educativo_padre" => $reporte->nivel_educativo_padre,
            "nivel_educativo_madre" => $reporte->nivel_educativo_madre,
            "horas_lectura" => $reporte->horas_lectura,
            "horas_redes_sociales" => $reporte->horas_redes_sociales,
            "horas_entretenimiento" => $reporte->horas_entretenimiento,
            "hora_sueno" => $reporte->hora_sueno,
            "genero" => $reporte->genero,
            "promedio_deporte" => $reporte->promedio_deporte,
            "promedio_arte" => $reporte->promedio_arte,
            "grasas" => $reporte->grasas,
            "alimentos_saludables" => $reporte->alimentos_saludables,
            "litro_agua" => $reporte->litro_agua,
            "induccion_general" => $reporte->induccion_general,
            "induccion_especifica" => $reporte->induccion_especifica,
            "total_macrohabilidad_inductiva" => $reporte->total_macrohabilidad_inductiva,
            "comprobacion_hipotesis" => $reporte->comprobacion_hipotesis,
            "uso_probabilidad_incertidumbre" => $reporte->uso_probabilidad_incertidumbre,
            "total_macrohabilidad_abductiva" => $reporte->total_macrohabilidad_abductiva,
            "identificacion_analogia" => $reporte->identificacion_analogia,
            "identificacion_por_fallo_vaguedad" => $reporte->identificacion_por_fallo_vaguedad,
            "total_macrohabilidad_deductivo_y_verbal" => $reporte->total_macrohabilidad_deductivo_y_verbal,
            "identificacion_estructura_argumentativa" => $reporte->identificacion_estructura_argumentativa,
            "identificacion_de_suposicion" => $reporte->identificacion_de_suposicion,
            "identificacion_de_falacia" => $reporte->identificacion_de_falacia,
            "total_macrohabilidad_analisis_de_argumentos" => $reporte->total_macrohabilidad_analisis_de_argumentos,
            "toma_desiciones_informadas" => $reporte->toma_desiciones_informadas,
            "conciencia_situacion_acciones_razonables" => $reporte->conciencia_situacion_acciones_razonables,
            "pensamiento_estrategico" => $reporte->pensamiento_estrategico,
            "pensamiento_creativo" => $reporte->pensamiento_creativo,
            "macrohabilidad_toma_desiciones_y_resolucion_problemas" => $reporte->macrohabilidad_toma_desiciones_y_resolucion_problemas,
            "conocimiento_procedimental" => $reporte->conocimiento_procedimental,
            "depuracion" => $reporte->depuracion,
            "evaluacion" => $reporte->evaluacion,
            "monitoreo" => $reporte->monitoreo,
            "organizacion" => $reporte->organizacion,
            "planificacion" => $reporte->planificacion,
            "total_metacognicion" => $reporte->total_metacognicion,
            "tiempo_prueba" => $reporte->tiempo_prueba,
            "motivacion_intrinseca" => $reporte->motivacion_intrinseca,
            "motivacion_extrinseca" => $reporte->motivacion_extrinseca,
            "total_motivación" => $reporte->motivacion_extrinseca + $reporte->motivacion_intrinseca,
            "nivel_inductivo" => $reporte->nivel_inductivo,
            "nivel_abductivo" => $reporte->nivel_abductivo,
            "nivel_deductivo_y_verbal" => $reporte->nivel_deductivo_y_verbal,
            "nivel_analisis_de_argumentos" => $reporte->nivel_analisis_de_argumentos,
            "nivel_toma_desiciones_y_resolucion_problemas" => $reporte->nivel_toma_desiciones_y_resolucion_problemas,
            "nivel_total" => $reporte->nivel_total,
        ];
        $documentos_totales["metacognicion_motivacion"] = $metacognicion_motivacion;

        //dd($documentos_totales);
        return $documentos_totales;
    }

    /**
     * Buscar el descriptor del contexto correspondiente .
     */
    public function buscar_descriptor_contexto($contexto)
    {
        return $this->reportComputationService->contextDescriptor($contexto);
    }



    /**
     * Display a listing of the resource.
     */
    public function identificar_descriptor($id_pregunta, $calificacion)
    {

        $textoDescriptivo = Descriptivos::where('id_pregunta', $id_pregunta)
            ->where('calificacion', $calificacion)
            ->value('texto_descriptivo');

        // Devolvemos el texto descriptivo o un mensaje si no se encuentra
        return $textoDescriptivo;
    }

    /**
     * TERMINADO
     * Display a listing of the resource.
     */
    public function ver_respuestas_admin(Request $request)
    {
        $respuestas = $this->consultar_informe($request->id_usuario, $request->id_reporte);
        $subrespuestas = $this->consutar_subrespuestas($request->id_usuario, $request->id_reporte);
        $respuestasCalificables = count(array_filter($respuestas, function ($respuesta) {
            return ($respuesta['tipo_pregunta'] ?? null) !== 'abierta';
        }));
        $subrespuestasCalificables = count(array_filter($subrespuestas, function ($subrespuesta) {
            return ($subrespuesta['tipo_pregunta'] ?? null) !== 'abierta';
        }));

        $informe = [
            'respuestas' => $respuestas,
            'subrespuestas' => $subrespuestas
        ];


        return view('reporte.reporte_revisor', compact('informe', 'respuestasCalificables', 'subrespuestasCalificables'));
    }

    public function consutar_subrespuestas($id_usuario, $id_reporte)
    {
        $subrespuestas = subrespuestas::where('id_usuario', $id_usuario)
            ->where('id_reporte', $id_reporte)
            ->get()
            ->toArray();


            

        //consultar el texto de las subpreguntas asociadas a las subrespuestas
        foreach ($subrespuestas as $key => $subrespuesta) {
            $subpregunta = subpreguntas::where('id_subpregunta', $subrespuesta['id_subpregunta'])
                ->select('texto', 'tipo_pregunta')
                ->first();
            $subrespuestas[$key]['texto_subpregunta'] = $subpregunta?->texto;
            $subrespuestas[$key]['tipo_pregunta'] = $subpregunta?->tipo_pregunta;
        }

        return $subrespuestas;
    }
}
