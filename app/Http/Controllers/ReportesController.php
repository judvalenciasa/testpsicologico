<?php

namespace App\Http\Controllers;

use App\Models\Descriptivos;
use App\Models\Preguntas;
use App\Models\Reportes;
use App\Models\Respuestas;
use App\Models\Subhabilidad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

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
                'total_macrohabilidad_toma_desiciones_y_resolucion_problemas' => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO"),
                'conocimiento_procedimental' => $categorias['conocimiento_procedimental'],
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
        $informe_final = $this->crear_informe_descriptivo($consulta_informe, $categorias);


        
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
                'total_metacognicion',
                'tiempo_prueba'
            )
            ->first()
            ->toArray();
        
        $consulta_informe = $this->consultar_informe(id_usuario: $request->id_usuario, id_reporte: $request->id_reporte);
        $informe_final = $this->crear_informe_descriptivo($consulta_informe, $categorias);

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
    public function crear_informe_descriptivo($consulta_informe, $categorias)
    {
        $documentos_totales = [];
        $indice = 1; // Empezar el índice en 1
        foreach ($consulta_informe as $pregunta) {
            $nombre_pregunta = "Item " . $indice; // Usar el índice en lugar del ID de la pregunta

            $documento = [
                $nombre_pregunta => [
                    "Contexto y habilidad" => $pregunta['habilidad'],
                    "Ejercicio mental/subhabilidad" => $pregunta['subhabilidad'],
                    "puntuación" => $pregunta['calificacion'],
                    "descriptivo" => $this->identificar_descriptor($pregunta['id_pregunta'], $pregunta['calificacion']),
                ],
            ];
            $documentos_totales[$nombre_pregunta] = $documento;
            $indice++; // Incrementar el índice
        }

        $documentos_totales["metacognicion_conocimiento_procedimental"] = [
            "metacognicion_conocimiento_procedimental" => [
                [
                    "conocimiento_procedimental" => $categorias['conocimiento_procedimental'],
                    "depuracion" => $categorias['depuracion'],
                    "evaluacion" => $categorias['evaluacion'],
                    "monitoreo" => $categorias['monitoreo'],
                    "organizacion" => $categorias['organizacion'],
                    "planificacion" => $categorias['planificacion'],
                    "total_conocimiento_procedimental" => $categorias['conocimiento_procedimental'] + $categorias['depuracion'] + $categorias['evaluacion'] + $categorias['monitoreo'] + $categorias['organizacion'] + $categorias['planificacion']
                ]
            ]
        ];

        return $documentos_totales;
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
