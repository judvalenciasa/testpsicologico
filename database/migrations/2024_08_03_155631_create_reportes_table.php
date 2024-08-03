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
            $table->date('fecha_calificacion');
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
