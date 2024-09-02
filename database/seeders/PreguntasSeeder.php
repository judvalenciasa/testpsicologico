<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preguntas')->insert([
            // [
            //     'id_pregunta' => 1,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Edad',
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 2,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Estrato socioeconómico en el que vive según la metodología del Departamento Administrativo Nacional de Estadística (DANE)',	
            //     'tipo_pregunta' => 'cerrada'
            // ],

            // [
            //     'id_pregunta' => 3,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Cantidad de horas en promedio de lectura que dedica durante la semana',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 4,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Cantidad promedio de horas que dedica a estar en redes sociales durante la semana',
            //     'tipo_pregunta' => 'cerrada'	
            // ],
            // [
            //     'id_pregunta' => 5,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Cuál es la cantidad promedio de horas que dedica al entretenimiento con videojuegos en consolas o a través de internet',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 6,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Cuántas horas suele dormir en las noches',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 7,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Género',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 8,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Práctica algún deporte de manera recurrente',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            // [
            //     'id_pregunta' => 9,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'Practica algún arte como música, pintura o danza de manera recurrente',
            //     'tipo_pregunta' => 'cerrada'	
            // ],
            // [
            //     'id_pregunta' => 10,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'En su dieta están siempre presentes grasas saturadas como salsas, o papas y/o carnes fritas o procesadas',	
            //     'tipo_pregunta' => 'cerrada'
            // ],
            
            // [
            //     'id_pregunta' => 11,
            //     'id_prueba' => 1,
            //     'id_contexto' => null,
            //     'id_subhabilidad' => null,
            //     'id_categoria' => 1,
			// 	'texto' => 'En su dieta incluye alimentos saludables como carnes blancas, verduras/vegetales, frutas y frutos secos',	
            //     'tipo_pregunta' => 'cerrada'
            // ],

            //Item 1
            [
                'id_pregunta' => 12,
                'id_prueba' => 1,
                'id_contexto' => 1,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
				'texto' => 'Con base en lo anterior, ¿con qué escenario crees que se encontrará Gilberto en el torneo de gamers de este año?',	
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 2 _ Abierta
            [
                'id_pregunta' => 13,
                'id_prueba' => 1,
                'id_contexto' => 1,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
				'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',	
                'tipo_pregunta' => 'abierta'
            ],

            //Item 3
            [
                'id_pregunta' => 14,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
				'texto' => 'Basándote en la veracidad de los postulados a partir de la observación y experiencia, y no desde la ciencia o la teoría, cuál de las siguientes alternativas contiene dos premisas válidas para convencerte de que el planeta Tierra es una circunferencia.',	
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 4 _ Abierta
            [
                'id_pregunta' => 15,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
				'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',	
                'tipo_pregunta' => 'abierta'
            ],

            //Item 5
            [
                'id_pregunta' => 16,
                'id_prueba' => 1,
                'id_contexto' => 3,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
				'texto' => '¿En qué crees que falló Mariana para que la profesora tenga que darle algunas recomendaciones y bajarle un punto en la nota?',	
                'tipo_pregunta' => 'cerrada'
            ],
           
           
        ]);
    }
}
