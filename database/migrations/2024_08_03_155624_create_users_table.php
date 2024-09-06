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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->unsignedBigInteger('id_pin')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->string('documento_identificacion')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('estrato')->nullable();
            $table->string('nivel_escolaridad')->nullable();
            $table->string('nivel_educativo_padre')->nullable();
            $table->string('nivel_educativo_madre')->nullable();
            $table->string('horas_lectura')->nullable(); 
            $table->string('horas_redes_sociales')->nullable(); 
            $table->string('horas_entretenimiento')->nullable(); 
            $table->string('hora_sueno')->nullable(); 
            $table->string('genero')->nullable(); 
            $table->string('promedio_deporte')->nullable();
            $table->string('promedio_arte')->nullable();
            $table->string('grasas')->nullable();
            $table->string('alimentos_saludables')->nullable();
            $table->string('litro_agua')->nullable();
            $table->boolean('es_administrador');

            $table->foreign('id_pin')->references('id_pin')->on('pines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
