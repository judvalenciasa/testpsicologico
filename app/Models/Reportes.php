<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $primaryKey = 'id_reporte';


    protected $fillable = [
        'id_usuario',
        'calificacion_total',
        'fecha_calificacion',
        'calificacion_metacognicion',
        'documento_identificacion',
        'edad',
        'estrato',
        'nivel_escolaridad',
        'nivel_educativo_padre',
        'nivel_educativo_madre',
        'horas_lectura',
        'horas_redes_sociales',
        'horas_entretenimiento',
        'hora_sueno',
        'genero',
        'promedio_deporte',
        'promedio_arte',
        'grasas',
        'alimentos_saludables',
        'litro_agua',
        'induccion_general',
        'induccion_especifica',
        'total_macrohabilidad_inductiva',
        'comprobacion_hipotesis',
        'uso_probabilidad_incertidumbre',
        'total_macrohabilidad_abductiva',
        'identificacion_analogia',
        'identificacion_por_fallo_vaguedad',
        'total_macrohabilidad_deductivo_y_verbal',
        'identificacion_estructura_argumentativa',
        'identificacion_de_suposicion',
        'identificacion_de_falacia',
        'total_macrohabilidad_analisis_de_argumentos',
        'toma_desiciones_informadas',
        'conciencia_situacion_acciones_razonables',
        'pensamiento_estrategico',
        'pensamiento_creativo',
        'macrohabilidad_toma_desiciones_y_resolucion_problemas',
        'conocimiento_procedimental',
        'depuracion',
        'evaluacion',
        'monitoreo',
        'organizacion',
        'planificacion',
        'total_metacognicion',
        'tiempo_prueba',
        'motivacion_intrinseca',
        'motivacion_extrinseca',
        'nivel_inductivo',
        'nivel_abductivo',
        'nivel_deductivo_y_verbal',
        'nivel_analisis_de_argumentos',
        'nivel_toma_desiciones_y_resolucion_problemas',
        'nivel_total',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuestas::class, 'id_reporte');
    }

    public function subrespuestas()
    {
        return $this->hasMany(Subrespuestas::class, 'id_reporte', 'id_reporte');
    }
}
