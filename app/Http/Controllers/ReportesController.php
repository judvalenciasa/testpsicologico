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



    /*
'conocimiento_procedimental-1' => '4',
  'planificacion-1' => '3',
  'planificacion-2' => '3',
  'planificacion-3' => '5',
  'planificacion-4' => '5',
  'planificacion-5' => '2',
  'organizacion-7' => '2',
  'organizacion-8' => '3',
  'organizacion-9' => '5',
  'organizacion-10' => '4',
  'organizacion-11' => '4',
  'monitoreo-12' => '4',
  'monitoreo-13' => '2',
  'monitoreo-14' => '5',
  'monitoreo-15' => '2',
  'monitoreo-16' => '3',
  'depuracion-17' => '4',
  'depuracion-18' => '4',
  'depuracion-19' => '5',
  'depuracion-20' => '1',
  'depuracion-21' => '2',
  'evaluacion-22' => '3',
  'evaluacion-23' => '4',
  'evaluacion-24' => '1',
  'evaluacion-25' => '1',
  'evaluacion-26' => '5',
    */

    /**
     * Crea el reporte, con los siguientes parametros de ingreso
     * 
     */
    public function crear_reporte(Request $request)
    {
        //obtener el user api ejemplo en elcontro
        $user = $request->user();

     
        return view('reporte.index', compact());
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
