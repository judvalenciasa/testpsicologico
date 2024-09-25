<?php

namespace App\Http\Controllers;

use App\Models\Descriptivos;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\Subhabilidad;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reportes;

class ReportesController extends Controller
{


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

                'induccion_general' => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL"),

                'induccion_especifica' => $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),

                'total_macrohabilidad_inductiva' => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),
                'comprobacion_hipotesis' => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS"),

                'uso_probabilidad_incertidumbre' => $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),

                'total_macrohabilidad_abductiva' => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),

                'identificacion_analogia' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA"),

                'identificacion_por_fallo_vaguedad' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD"),

                'total_macrohabilidad_deductivo_y_verbal' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD"),

                'identificacion_estructura_argumentativa' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA"),

                'identificacion_de_suposicion' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN"),

                'identificacion_de_falacia' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA"),

                'total_macrohabilidad_analisis_de_argumentos' => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA"),

                'toma_desiciones_informadas' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS"),

                'conciencia_situacion_acciones_razonables' => $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES"),
                'pensamiento_estrategico' => $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO"),

                'pensamiento_creativo' => $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO"),

                'macrohabilidad_toma_desiciones_y_resolucion_problemas' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO"),

                'calificacion_total' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD") + $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE") + $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),

                'conocimiento_procedimental' => $categorias['conocimiento_procedimental'],

                'nivel_inductivo' => $this->calcularNivel($this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"), 'inductivo'),

                'nivel_abductivo' => $this->calcularNivel($this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"), 'abductivo'),

                'nivel_deductivo_y_verbal' => $this->calcularNivel($this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD"), 'deductivo'),


                'nivel_analisis_de_argumentos' => $this->calcularNivel($this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA"), 'analisis_argumentos'),

                'nivel_toma_desiciones_y_resolucion_problemas' => $this->calcularNivel($this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO"), 'toma_decisiones'),

                'nivel_total' => $this->calcularNivel($this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD") + $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE") + $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"), 'total'),

                'depuracion' => $categorias['depuracion'],
                'evaluacion' => $categorias['evaluacion'],
                'monitoreo' => $categorias['monitoreo'],
                'organizacion' => $categorias['organizacion'],
                'planificacion' => $categorias['planificacion'],
                'tiempo_prueba' => $request->tiempo_prueba,
            ]);

        }

    }


    /**
     * Muestra el reporte en la vista de un usuario
     * 
     */
    public function ver_reporte_usuario(Request $request)
    {

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
        $categorias = [
            'conocimiento_procedimental' => 0,
            'planificacion' => 0,
            'organizacion' => 0,
            'monitoreo' => 0,
            'depuracion' => 0,
            'evaluacion' => 0,
        ];
        foreach ($request->all() as $key => $value) {
            $parts = explode('-', $key);

            if (count($parts) > 1) {
                $categoria = $parts[0];
                if (array_key_exists($categoria, $categorias)) {
                    $categorias[$categoria] += (int) $value;
                }
            }
        }

        return $categorias;
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

        switch ($tipo_habilidad) {
            case 'inductivo':
                switch (true) {
                    case ($puntaje <= 4):
                        return 'Muy Bajo';
                    case ($puntaje <= 8):
                        return 'Bajo';
                    case ($puntaje <= 12):
                        return 'Intermedio';
                    case ($puntaje <= 16):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            case 'abductivo':
                switch (true) {
                    case ($puntaje <= 3):
                        return 'Muy Bajo';
                    case ($puntaje <= 6):
                        return 'Bajo';
                    case ($puntaje <= 9):
                        return 'Intermedio';
                    case ($puntaje <= 12):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            case 'deductivo':
                switch (true) {
                    case ($puntaje <= 3):
                        return 'Muy Bajo';
                    case ($puntaje <= 6):
                        return 'Bajo';
                    case ($puntaje <= 9):
                        return 'Intermedio';
                    case ($puntaje <= 12):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            case 'analisis_argumentos':
                switch (true) {
                    case ($puntaje <= 8):
                        return 'Muy Bajo';
                    case ($puntaje <= 17):
                        return 'Bajo';
                    case ($puntaje <= 25):
                        return 'Intermedio';
                    case ($puntaje <= 33):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            case 'toma_decisiones':
                switch (true) {
                    case ($puntaje <= 13):
                        return 'Muy Bajo';
                    case ($puntaje <= 26):
                        return 'Bajo';
                    case ($puntaje <= 40):
                        return 'Intermedio';
                    case ($puntaje <= 53):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            case 'total':
                switch (true) {
                    case ($puntaje <= 20):
                        return 'Muy Bajo';
                    case ($puntaje <= 40):
                        return 'Bajo';
                    case ($puntaje <= 60):
                        return 'Intermedio';
                    case ($puntaje <= 80):
                        return 'Alto';
                    default:
                        return 'Muy Alto';
                }
            default:
                return 'Nivel desconocido';
        }
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
    public function buscar_total_subhabilidad($nombre_habilidad)
    {

        $id_subhabilidad = Subhabilidad::where('nombre', $nombre_habilidad)
            ->pluck('id_subhabilidad')
            ->first();


        if ($id_subhabilidad) {
            $total_Calificacion_induccion_general = Respuestas::join('preguntas', 'respuestas.id_pregunta', '=', 'preguntas.id_pregunta')
                ->where('preguntas.id_subhabilidad', $id_subhabilidad)
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
        if ($contexto == 1) {
            return "en contextos de entretenimiento y diversión ";
        }
        if ($contexto == 2) {
            return "en contextos culturales, científicos y de percepción del mundo";
        }
        if ($contexto == 3) {
            return "en contextos culturales";
        }
        if ($contexto == 4) {
            return "en contextos económico-ambientales";
        }
        if ($contexto == 5) {
            return "en contextos ambientales y sociales.";
        }
        if ($contexto == 6) {
            return "en contextos familiares, de salud mental, y tecnológicos.";
        }
        if ($contexto == 7) {
            return "en contextos políticos y culturales";
        }
        if ($contexto == 8) {
            return "en contextos de relaciones interpersonales, educativos y del proyecto de vida.";
        }
        if ($contexto == 9) {
            return "en contextos económicos, educativos y de proyección de vida.";
        }
        if ($contexto == 10) {
            return "en contextosfuturibles, tecnológicos, laborales y económicos.";
        }
        if ($contexto == 11) {
            return "en contextos educativos, e institucionales.";
        }
        if ($contexto == 12) {
            return "en contextos culturales, sociales y de participación comunitaria.";
        }
        if ($contexto == 13) {
            return "en contextos educativos, institucionales, de participación en los asuntos colectivos y de vínculos emocionales.";
        }
        if ($contexto == 14) {
            return "en contextos ambientales de riesgos de desastres y de interacción institucional con el ámbito social- comunitario.";
        }
        if ($contexto == 15) {
            return "en contextos de carácter político, social y de salud reproductiva.";
        }
        if ($contexto == 16) {
            return "en contextos culturales y sociales que movilizan los sentidos, la imaginación y el pensamiento.";
        }
        if ($contexto == 17) {
            return "en contextos de política pública sostenible relacionada con la descontaminación de cuerpos de agua.";
        }
        if ($contexto == 18) {
            return "en contextos de participación social comunitaria, integridad física y seguridad.";
        }
        if ($contexto == 19) {
            return "en contextos de era digital y tecnológica en los que tienen lugar nuevas interacciones sociales.";
        }
        if ($contexto == 20) {
            return "en contextos de fenómenos ambientales, culturales y de propuestas de emprendimiento.";
        }
        if ($contexto == 21) {
            return "de relaciones sociales y vínculos emocionales.";
        }
        if ($contexto == 22) {
            return "en contextos de participación ambiental y calidad de vida.";
        }
        if ($contexto == 23) {
            return "en contextos educativos, económicos y de proyección internacional.";
        }
        if ($contexto == 24) {
            return "en contextos políticos de protección de DD.HH.";
        }
        if ($contexto == 25) {
            return "en contextos deportivos, de salud y relaciones interpersonales.";
        }
        if ($contexto == 26) {
            return "En contextos en los que la era tecnológica y digital ofrece facilidades, pero también pone en riesgo la seguridad de las personas";
        }
        if ($contexto == 27) {
            return "En contextos educativos y de responsabilidades académicas.";
        }
        if ($contexto == 28) {
            return "En contextos de conservación ecosistémica o vida natural ante amenazas propias de la urbanización.";
        }
        if ($contexto == 29) {
            return "En contextos culturales de competitividad y situaciones adversas";
        }
        if ($contexto == 30) {
            return "En contextos sociales y ambientales de búsqueda de calidad de vida alrededor de la salud y el aire.";
        }
        return "no hay descripcion para este contexto";
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
        $informe = $this->consultar_informe($request->id_usuario, $request->id_reporte);
        return view('reporte.reporte_revisor', compact('informe'));
    }
}
