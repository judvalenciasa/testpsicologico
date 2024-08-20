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
            $table->rememberToken();
            $table->integer('edad')->nullable();
            $table->integer('estrato')->nullable();
            $table->integer('horas_lectura')->nullable();
            $table->integer('horas_redes_sociales')->nullable();
            $table->integer('horas_entretenimiento')->nullable();
            $table->integer('hora_sueno')->nullable();
            $table->boolean('genero')->nullable();
            $table->boolean('promedio_deporte')->nullable();
            $table->boolean('promedio_arte')->nullable();
            $table->boolean('grasas')->nullable();
            $table->boolean('alimentos_saludables')->nullable();
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
