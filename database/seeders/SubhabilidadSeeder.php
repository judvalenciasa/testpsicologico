<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubhabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subhabilidads')->insert([
            [
                'id_subhabilidad' => 1,
                'id_habilidad' => 1,
                'nombre' => 'INDUCCIÓN GENERAL'
            ],
            [
                'id_subhabilidad' => 2,
                'id_habilidad' => 1,
                'nombre' => 'INDUCCIÓN ESPECÍFICA'
            ],
            [
                'id_subhabilidad' => 3,
                'id_habilidad' => 2,
                'nombre' => 'COMPROBACIÓN DE HIPÓTESIS'
            ],
            [
                'id_subhabilidad' => 4,
                'id_habilidad' => 2,
                'nombre' => 'USO DE PROBABILIDAD E INCERTIDUMBRE'
            ],
            [
                'id_subhabilidad' => 5,
                'id_habilidad' => 3,
                'nombre' => 'IDENTIFICACIÓN DE FALLO POR ANALOGÍA'
            ],
            [
                'id_subhabilidad' => 6,
                'id_habilidad' => 3,
                'nombre' => 'IDENTIFICACIÓN DE FALLO POR VAGUEDAD'
            ],
            [
                'id_subhabilidad' => 7,
                'id_habilidad' => 4,
                'nombre' => 'IDENTIFICACIÓN DE ESTRUCTURA ARGUMENTATIVA'
            ],
            [
                'id_subhabilidad' => 8,
                'id_habilidad' => 4,
                'nombre' => 'IDENTIFICACIÓN DE SUPOSICIÓN'
            ],
            [
                'id_subhabilidad' => 9,
                'id_habilidad' => 4,
                'nombre' => 'IDENTIFICACIÓN DE FALACIA'
            ],
            [
                'id_subhabilidad' => 10,
                'id_habilidad' => 5,
                'nombre' => 'TOMA DE DECISIONES INFORMADAS'
            ],
            [
                'id_subhabilidad' => 11,
                'id_habilidad' => 5,
                'nombre' => 'CONCIENCIA DE SITUACIÓN Y ACCIONES RAZONABLES'
            ],
            [
                'id_subhabilidad' => 12,
                'id_habilidad' => 5,
                'nombre' => 'PENSAMIENTO ESTRATÉGICO'
            ],
            [
                'id_subhabilidad' => 13,
                'id_habilidad' => 5,
                'nombre' => 'PENSAMIENTO CREATIVO'
            ],
        ]);
    }
}
