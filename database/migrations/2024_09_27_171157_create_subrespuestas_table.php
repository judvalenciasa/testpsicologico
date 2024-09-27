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
        Schema::create('subrespuestas', function (Blueprint $table) {
            $table->id('id_subrespuesta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_subpregunta');
            $table->unsignedBigInteger('id_reporte');
            $table->string('respuesta', 650)->nullable();
            $table->integer(column: 'calificacion_respuesta');
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_subpregunta')->references('id_subpregunta')->on('subpreguntas');
            $table->foreign('id_reporte')->references('id_reporte')->on('reportes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subrespuestas');
    }
};
