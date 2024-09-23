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
        Schema::create('subpreguntas', function (Blueprint $table) {
            $table->id('id_subpregunta');
            $table->unsignedBigInteger('id_pregunta')->nullable(true);
            $table->string('texto', 500);
            $table->string('valor_opcion', 10)->nullable();     
            $table->string('tipo_pregunta', 50)->nullable();

            
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subpreguntas');
    }
};
