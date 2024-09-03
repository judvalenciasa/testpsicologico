<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Criterios')->insert([

            //Item 2
            [
                'id_criterio' => 1,
                'id_pregunta' => 13,
                'texto'=> 'Ambas razones no están bien desarrolladas (El hecho de que Gilberto se ha apresurado dando por hecho la inscripción del 50% de las mujeres y que no se sabe si el torneo contará con mejores instalaciones a partir de la observación inicial de Gilberto) = 0 puntos. Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto. Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos. Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos. Ambas razones bien desarrolladas = 4 puntos.',
                'valor_opcion'=> null
            ],

            //Item 4
            [
                'id_criterio' => 2,
                'id_pregunta' => 15,
                'texto'=> 'Ambas razones no están bien desarrolladas (La identificación de premisas verdaderas a partir de la observación y la experiencia que permiten llegar a una generalización correcta, y la independencia respecto de la ciencia o los sistemas de creencias culturales) = 0 puntos. Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto. Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos. Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos. Ambas razones bien desarrolladas = 4 puntos.',
                'valor_opcion'=> null
            ],

            //Item 6
            [
                'id_criterio' => 3,
                'id_pregunta' => 20,
                'texto'=> 'Ambas razones no están bien desarrolladas (La generalización apresurada de Mariana tanto del matrimonio infantil como del no cumplimiento de las normas en Asia) = 0 puntos. Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto. Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos. Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos. Ambas razones bien desarrolladas = 4 puntos.',
                'valor_opcion'=> null
            ],

            //Item 8
            [
                'id_criterio' => 4,
                'id_pregunta' => 17,
                'texto'=> 'La razón no está bien desarrollada (el hecho de importar o producir materia prima para la fabricación de plásticos biodegradables no garantiza que se logren esos resultados, se deben tener en cuenta otros factores para garantizar la producción diversificada, a bajos costos y en poco tiempo) = 0 puntos. La razón parcialmente desarrollada = 1 punto. La razón bien desarrollada = 2 puntos.',
                'valor_opcion'=> null
            ],

        ]);



        
    }
}
