<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id('id_informe');
            $table->unsignedBigInteger('id_usuario');
            $table->integer('calificacion_total');
            $table->integer('calificacion_metacognicion');
            $table->date('fecha_calificacion');
            
            $table->string('documento_identificacion')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('estrato')->nullable();
            $table->string('nivel_escolaridad')->nullable();
            $table->string('nivel_educativo_padre')->nullable();
            $table->string('nivel_educativo_madre')->nullable();
            $table->string('horas_lectura')->nullable(); 
            $table->string('horas_redes_sociales')->nullable(); 
            $table->string('horas_entretenimiento')->nullable(); 
            $table->string('hora_sueno')->nullable(); 
            $table->string('genero')->nullable(); 
            $table->string('promedio_deporte')->nullable();
            $table->string('promedio_arte')->nullable();
            $table->string('grasas')->nullable();
            $table->string('alimentos_saludables')->nullable();
            $table->string('litro_agua')->nullable();
            $table->integer('induccion_general')->nullable();
            $table->integer('induccion_especifica')->nullable();
            $table->integer('total_macrohabilidad_inductiva')->nullable();
            $table->integer('comprobacion_hipotesis')->nullable();
            $table->integer('uso_probabilidad_incertidumbre')->nullable();
            $table->integer('total_macrohabilidad_abductiva')->nullable();
            $table->integer('identificacion_analogia')->nullable();
            $table->integer('identificacion_por_fallo_vaguedad')->nullable();
            $table->integer('total_macrohabilidad_deductivo_y_verbal')->nullable();
            $table->integer('identificacion_estructura_argumentativa')->nullable();
            $table->integer('identificacion_de_suposicion')->nullable();
            $table->integer('identificacion_de_falacia')->nullable();
            $table->integer('total_macrohabilidad_analisis_de_argumentos')->nullable();
            $table->integer('toma_desiciones_informadas')->nullable();
            $table->integer('conciencia_situacion_acciones_razonables')->nullable();
            $table->integer('pensamiento_estrategico')->nullable();
            $table->integer('pensamiento_creativo')->nullable();
            $table->integer('macrohabilidad_toma_desiciones_y_resolucion_problemas')->nullable();
            $table->integer('conocimiento_procedimental')->nullable();
            $table->integer('depuracion')->nullable();
            $table->integer('evaluacion')->nullable();
            $table->integer('monitoreo')->nullable();
            $table->integer('organizacion')->nullable();
            $table->integer('planificacion')->nullable();
            $table->integer('total_metacognicion')->nullable();
            $table->integer('tiempo_prueba')->nullable();
            
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
