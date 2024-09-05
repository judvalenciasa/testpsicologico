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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id('id_pregunta');
            $table->unsignedBigInteger('id_prueba')->nullable(true);
            $table->unsignedBigInteger('id_contexto')->nullable(true);
            $table->unsignedBigInteger('id_subhabilidad')->nullable(true);
            $table->unsignedBigInteger('id_categoria')->nullable(true);
            $table->string('texto', 500);
            $table->string('tipo_pregunta', 10)->nullable();
            $table->timestamps();
            
            $table->foreign('id_prueba')->references('id_prueba')->on('pruebas');
            $table->foreign('id_contexto')->references('id_contexto')->on('contextos');
            $table->foreign('id_subhabilidad')->references('id_subhabilidad')->on('subhabilidads');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
