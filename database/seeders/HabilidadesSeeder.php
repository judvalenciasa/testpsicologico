<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HabilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('habilidades')->insert([
        	[
				'id_habilidad' => 1,	
                'nombre' => 'RAZONAMIENTO INDUCTIVO'
            ],
            [
				'id_habilidad' => 2,	
                'nombre' => 'RAZONAMIENTO ABDUCTIVO'
            ],
            [
				'id_habilidad' => 3,	
                'nombre' => 'RAZONAMIENTO DEDUCTIVO Y VERBAL'
            ],
            [
				'id_habilidad' => 4,	
                'nombre' => 'ANALISIS DE ARGUMENTOS'
            ],
            [
				'id_habilidad' => 5,	
                'nombre' => 'TOMA DE DECISIONES Y RESOLUCIÓN DE PROBLEMAS '
            ],
        ]);
    }
}
