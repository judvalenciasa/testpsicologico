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
            $table->string('respuesta', 200);
            $table->integer('calificacion');
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
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
