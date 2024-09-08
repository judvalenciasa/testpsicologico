<?php

namespace App\Http\Controllers;

use App\Models\Reportes;
use App\Models\Respuestas;
use App\Models\Subhabilidad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ReportesController extends Controller
{

    // Mostrar los reportes de un usuario específico
    public function verReportes($id_usuario)
    {
        $user = User::findOrFail($id_usuario);
        $reportes = Reportes::where('id_usuario', $id_usuario)->get();

        return view('private.reportes_usuario', compact('user', 'reportes')); // Asegúrate de tener una vista admin/reportes_usuario
    }


    /**
     * Display a listing of the resource.
     */
    public function sumar_puntaje_total()
    {

        $total_puntaje = $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA") +
            $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE") +
            $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD") +
            $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA") +
            $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS") + $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES") + $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO") + $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO");

        return $total_puntaje;
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
     * Suma las categorías de las respuestas del request
     */
    private function sumar_por_categorias(Request $request)
    {
        // Inicializar los totales para cada categoría
        $categorias = [
            'conocimiento_procedimental' => 0,
            'planificacion' => 0,
            'organizacion' => 0,
            'monitoreo' => 0,
            'depuracion' => 0,
            'evaluacion' => 0,
        ];

        // Iterar sobre las respuestas del request
        foreach ($request->all() as $key => $value) {
            // Dividir la clave para obtener la categoría
            $parts = explode('-', $key);

            if (count($parts) > 1) {
                $categoria = $parts[0]; // Obtener el prefijo como categoría

                // Sumar el valor en la categoría correspondiente si existe
                if (array_key_exists($categoria, $categorias)) {
                    $categorias[$categoria] += (int) $value; // Sumar el valor como entero
                }
            }
        }

        return $categorias; // Devolver el array con las sumas por categoría
    }


    /**
     * Crea el reporte, con los siguientes parametros de ingreso
     * 
     */
    public function crear_reporte(Request $request)
    {

        $user = $request->user();
        $categorias = $this->sumar_por_categorias($request);

        //parsear categorias a entero

        $calificacion_metacognicion = array_sum(array_map('floatval', $categorias)) ?? 0;


        Reportes::create([

            'id_usuario' => $user->id_usuario,
            'calificacion_total' => $this->sumar_puntaje_total(),
            'calificacion_metacognicion' => $calificacion_metacognicion,
            'fecha_calificacion' =>  Carbon::now(),

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

            'conocimiento_procedimental' => $categorias['conocimiento_procedimental'],
            'depuracion' => $categorias['depuracion'],
            'evaluacion' => $categorias['evaluacion'],
            'monitoreo' => $categorias['monitoreo'],
            'organizacion' => $categorias['organizacion'],
            'planificacion' => $categorias['planificacion'],

        ]);

        // Crear el objeto respuesta para pasar a la vista
        $respuesta = [
            "Personales" => [
                [
                    "documento_identificacion" => $user->documento_identificacion,
                    "edad" => $user->edad,
                    "genero" => $user->genero,
                ]
            ],
            "Sociodemograficos" => [
                [
                    "estrato" => $user->estrato,
                    "nivel_educativo_padre" => $user->nivel_educativo_padre,
                    "nivel_educativo_madre" => $user->nivel_educativo_madre,
                ]
            ],
            "estilos_vida" => [
                [
                    "horas_lectura" => $user->horas_lectura,
                    "horas_redes_sociales" => $user->horas_redes_sociales,
                    "horas_entretenimiento" => $user->horas_entretenimiento,
                    "hora_sueno" => $user->hora_sueno,
                    "promedio_arte" => $user->promedio_arte,
                ]
            ],
            "saludable" => [
                [
                    "promedio_deporte" => $user->promedio_deporte,
                    "grasas" => $user->grasas,
                    "alimentos_saludables" => $user->alimentos_saludables,
                ]
            ],
            "macrohabilidad_inductiva" => [
                [
                    "induccion_general" => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL"),
                    "induccion_especifica" => $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),
                    "total" => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),
                ]
            ],
            "macrohabilidad_abductiva" => [
                [
                    "comprobacion_hipotesis" => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS"),
                    "uso_probabilidad_incertidumbre" => $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),
                    "total" => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),
                ]
            ],
            "macrohabilidad_deductivo_y_verbal" => [
                [
                    "identificacion_analogia" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA"),
                    "identificacion_por_fallo_vaguedad" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD"),
                    "total" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR ANALOGÍA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALLO POR VAGUEDAD"),
                ]
            ],
            "macrohabilidad_analisis_de_argumentos" => [
                [
                    "identificacion_estructura_argumentativa" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA"),
                    "identificacion_de_suposicion" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN"),
                    "identificacion_de_falacia" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA"),
                    "total" => $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE SUPOSICIÓN") + $this->buscar_total_subhabilidad("IDENTIFICACIÓN DE FALACIA"),
                ]
            ],
            "macrohabilidad_toma_desiciones_y_resolucion_problemas" => [
                [
                    "toma_desiciones_informadas" => $this->buscar_total_subhabilidad("TOMA DE DECISIONES INFORMADAS"),
                    "conciencia_situacion_acciones_razonables" => $this->buscar_total_subhabilidad("CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES"),
                    "pensamiento_estrategico" => $this->buscar_total_subhabilidad("PENSAMIENTO ESTRATÉGICO"),
                    "pensamiento_creativo" => $this->buscar_total_subhabilidad("PENSAMIENTO CREATIVO"),
                ],
                "metacognicion_conocimiento_procedimental" => [
                    [
                        "conocimiento_procedimental" => $categorias['conocimiento_procedimental'],
                        "depuracion" => $categorias['depuracion'],
                        "evaluacion" => $categorias['evaluacion'],
                        "monitoreo" => $categorias['monitoreo'],
                        "organizacion" => $categorias['organizacion'],
                        "planificacion" => $categorias['planificacion'],
                        "total" =>  $categorias['conocimiento_procedimental'] + $categorias['depuracion'] + $categorias['evaluacion'] + $categorias['monitoreo'] + $categorias['organizacion'] + $categorias['planificacion']
                    ]
                ],
            ],
        ];

        return view('reporte.index', compact('respuesta'));
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reportes $reportes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reportes $reportes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reportes $reportes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reportes $reportes)
    {
        //
    }
}
