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
        Schema::create('pines', function (Blueprint $table) {
            $table->id('id_pin');
            $table->string('pin', 20)->unique();
            $table->unsignedBigInteger('id_prueba');
            $table->date('creacion_fecha');
            $table->date('fecha_expiracion');
            $table->integer('intentos');
            $table->timestamps();
            
            $table->foreign('id_prueba')->references('id_prueba')->on('pruebas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pines');
    }
};
