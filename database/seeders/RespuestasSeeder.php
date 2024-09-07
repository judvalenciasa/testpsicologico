<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('respuestas')->insert([
        
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 12,
                'respuesta' => 'Prueba de respuesta item 1, Inducción General',
                'calificacion_respuesta' => 5,
            ],
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 13,
                'respuesta' => 'Prueba de respuesta item 2, Inducción general',
                'calificacion_respuesta' => 0,
            ],
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 19,
                'respuesta' => 'Prueba de respuesta 7, Inducción Específica',
                'calificacion_respuesta' => 5,
            ],
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 20,
                'respuesta' => 'Prueba de respuesta 8, Inducción Específica',
                'calificacion_respuesta' => 5,
            ],
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 29,
                'respuesta' => 'Prueba de respuesta 11, Comprobación de Hipótesis',
                'calificacion_respuesta' => 0,
            ],
            [
				'id_usuario' => 1,
	        	'id_pregunta' => 30,
                'respuesta' => 'Prueba de respuesta 12, Comprobación de Hipótesis',
                'calificacion_respuesta' => 5,
            ],
        ]);
        
    }
}
