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
        	[
                'id_prueba' => 1,
				'texto' => '¿Cuál es su nombre?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es su edad en años cumplidos?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es su género?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es el estrato socioeconómico en el que vive según la metodología del Departamento Administrativo Nacional de Estadística (DANE)?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es el nivel de escolaridad de su Madre?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es el nivel de escolaridad de su Padre?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es la cantindad de horas en promedio de lectura que dedica durante la semana?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es la cantidad promedio de horas que dedica a estar en redes sociales durante la semana?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuál es la cantindad de horas en promedio de entretenimiento?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Estudia alguna lengua o idioma por fuera del colegio?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => 'Si respondió sí indique cual es el promedio de la intensidad horaria semanal',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Practica algún deporte de manera recurrente?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => 'Si respondió sí indique cual es el promedio de la intensidad horaria semanal',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Practica algún arte como música, pintura o danza de manera recurrente?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Si respondió sí indique cual es el promedio de la intensidad horaria semanal',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Cuántas horas suele dormir en las noches?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Considera que en sus alimentos están siempre presentes las grasas como salsas, papas o carnes fritas?',	
            ],
            [
                'id_prueba' => 1,
				'texto' => '¿Califique de 1 a 5 qué tanto le llama la atención de la idea de pensar criticamente o de desarrollar sus habilidades superiores del pensamiento. Donde 1 es nada y 5 mucho?',	
            ]
        ]);
    }
}
