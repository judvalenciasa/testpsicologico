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
        Schema::create('criterios', function (Blueprint $table) {
            $table->id('id_criterio');
            $table->unsignedBigInteger('id_pregunta');
            $table->string('texto', 10000);
            $table->integer('valor_opcion')->nullable();
            $table->timestamps();
            
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterios');
    }
};
