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
        Schema::create('opcionessubpreguntas', function (Blueprint $table) {
            $table->id('id_opcionessubpregunta');
            $table->unsignedBigInteger('id_subpregunta');
            $table->string('texto', 5000);
            $table->integer('valor_opcion')->nullable();
            $table->timestamps();
            
            $table->foreign('id_subpregunta')->references('id_subpregunta')->on('subpreguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcionessubpreguntas');
    }
};
