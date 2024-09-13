<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('descriptivos')->insert([
            //descriptivos item_1
            [
                'id_descriptivo' => 1,
                'id_pregunta' => 12,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 2,
                'id_pregunta' => 12,
                'texto_descriptivo' => 'Reconoce afirmaciones apresuradas a partir de observaciones particulares conducentes a realizar generalizaciones que carecen de validez;',
                'calificacion' => 1
            ],
            //descriptivos item_2
            [
                'id_descriptivo' => 3,
                'id_pregunta' => 13,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 4,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'Y lo explica parcialmente.',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 5,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'Y lo explica con cierta precisión.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 6,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 7,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 4
            ],
            //descriptivos item_3
            [
                'id_descriptivo' => 8,
                'id_pregunta' => 14,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 9,
                'id_pregunta' => 14,
                'texto_descriptivo' => 'Identifica conclusiones válidas a partir de observaciones empíricas contrastándolas con sistemas de creencias o del conocimiento ',
                'calificacion' => 1
            ],

            //descriptivos item_4
            [
                'id_descriptivo' => 10,
                'id_pregunta' => 15,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 11,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'Y lo explica parcialmente.',
                'calificacion' => 1
            ],

            [
                'id_descriptivo' => 12,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'Y lo explica con cierta precisión.',
                'calificacion'  => 2 
            ],
            [
                'id_descriptivo' => 13,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'y las explica detalladamente.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 14,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'y las explica detalladamente.',
                'calificacion' => 4
            ],
            //descriptivos item_5
            [
                'id_descriptivo' => 15,
                'id_pregunta' => 16,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 16,
                'id_pregunta' => 16,
                'texto_descriptivo' => 'Identifica fallos en las generalizaciones a partir de observaciones particulares',
                'calificacion' => 1
            ],

            //descriptivos item_6
            [
                'id_descriptivo' => 17,
                'id_pregunta' => 17,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 18,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'Y lo explica parcialmente.',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 19,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'Y lo explica con cierta precisión.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 20,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 21,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 4
            ],

            //descriptivos item_7
            [
                'id_descriptivo' => 22,
                'id_pregunta' => 19,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 23,
                'id_pregunta' => 19,
                'texto_descriptivo' => 'Reconoce que la información dada no es exclusiva en la incidencia de determinados resultados, y que existen otros factores distintos a los contenidos en la información que se ven involucrados;',
                'calificacion' => 1
            ],

            //descriptivos item_8
            [
                'id_descriptivo' => 24,
                'id_pregunta' => 20,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 25,
                'id_pregunta' => 20,
                'texto_descriptivo' => 'Y lo explica parcialmente.',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 26,
                'id_pregunta' => 20,
                'texto_descriptivo' => 'y lo explica en detalle.',
                'calificacion' => 2
            ],

            //descriptivos item_9
            [
                'id_descriptivo' => 27,
                'id_pregunta' => 24,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 28,
                'id_pregunta' => 24,
                'texto_descriptivo' => 'Reconoce generalizaciones apresuradas que carecen de validez ante la falta de comprobación de las premisas;',
                'calificacion' => 1
            ],

            //descriptivos item_10
            [
                'id_descriptivo' => 29,
                'id_pregunta' => 25,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 30,
                'id_pregunta' => 25,
                'texto_descriptivo' => 'Y lo explica parcialmente.',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 31,
                'id_pregunta' => 29,
                'texto_descriptivo' => 'y lo explica en detalle',
                'calificacion' => 2
            ],


        ]);
    }
}
