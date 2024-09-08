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
        Schema::create('subcriterios', function (Blueprint $table) {
            $table->id('id_subcriterio');
            $table->unsignedBigInteger('id_subpregunta');
            $table->string('texto', 10000);
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
        Schema::dropIfExists('subcriterios');
    }
};
