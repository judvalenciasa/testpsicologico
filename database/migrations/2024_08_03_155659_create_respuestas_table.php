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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id('id_respuesta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_pregunta');
            $table->unsignedBigInteger('id_reporte');
            $table->string('respuesta', 650)->nullable();
            $table->integer('calificacion_respuesta');
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
            $table->foreign('id_reporte')->references('id_reporte')->on('reportes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};
