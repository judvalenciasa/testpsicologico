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
        Schema::create('subhabilidads', function (Blueprint $table) {
            
            $table->id('id_subhabilidad');
            $table->unsignedBigInteger('id_habilidad');
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('id_habilidad')->references('id_habilidad')->on('habilidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subhabilidads');
    }
};
