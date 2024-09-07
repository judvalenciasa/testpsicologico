<?php

namespace App\Http\Controllers;

use App\Models\Reportes;
use App\Models\Respuestas;
use App\Models\Subhabilidad;
use Illuminate\Http\Request;
use Log;

class ReportesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function buscar_total_subhabilidad($nombre_habilidad){

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
     * Crea el reporte, con los siguientes parametros de ingreso
     * 
     */
    public function crear_reporte(Request $request)
    {
        //obtener el user api ejemplo en elcontro
        $user = $request->user();

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
                    "estrato" => $user->estrato, // Supongamos que el usuario tiene una propiedad 'estrato'
                    "nivel_educativo_padre" => $user->nivel_educativo_padre, // Supongamos que el usuario tiene una propiedad 'escolaridad'
                    "nivel_educativo_madre" => $user->nivel_educativo_madre,
                ]
            ],
            "estilos_vida" => [
                [
                    "horas_lectura" => $user->horas_lectura, // Supongamos que el usuario tiene una propiedad 'estrato'
                    "horas_redes_sociales" => $user->horas_redes_sociales, // Supongamos que el usuario tiene una propiedad 'escolaridad'
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

            "macrohabilidad inductiva" => [
                [
                    "induccion_general" => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL"),
                    "induccion_especifica" => $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),
                    "total" => $this->buscar_total_subhabilidad("INDUCCIÓN GENERAL") + $this->buscar_total_subhabilidad("INDUCCIÓN ESPECÍFICA"),
                ]
            ],

            "macrohabilidad abductiva" => [
                [
                    "comprobacion_hpótesis" => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS"),
                    "uso_probabilidad_incertidumbre" => $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),
                    "total" => $this->buscar_total_subhabilidad("COMPROBACIÓN DE HIPÓTESIS") + $this->buscar_total_subhabilidad("USO DE PROBABILIDAD E INCERTIDUMBRE"),
                ]
            ],



        ];

        return $respuesta;
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
