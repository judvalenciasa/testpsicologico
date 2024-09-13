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
        Schema::create('descriptivos', function (Blueprint $table) {
            $table->id('id_descriptivo');
            $table->unsignedBigInteger('id_pregunta');
            $table->string('texto_descriptivo', 300);
            $table->integer('calificacion')->nullable();
            
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descriptivos');
    }
};
 
