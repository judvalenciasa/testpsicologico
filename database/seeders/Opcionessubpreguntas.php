<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Opcionessubpreguntas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opcionessubpreguntas')->insert([

            //Item 31, subpregunta 1
            [
                'id_opcionessubpregunta' => 1,
                'id_subpregunta' => 1,
                'texto' => 'a) Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 2,
                'id_subpregunta' => 1,
                'texto' => 'b) Conclusión',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 3,
                'id_subpregunta' => 1,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 2
            [
                'id_opcionessubpregunta' => 4,
                'id_subpregunta' => 2,
                'texto' => 'a) Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 5,
                'id_subpregunta' => 2,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 6,
                'id_subpregunta' => 2,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 3
            [
                'id_opcionessubpregunta' => 7,
                'id_subpregunta' => 3,
                'texto' => 'a) Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 8,
                'id_subpregunta' => 3,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 9,
                'id_subpregunta' => 3,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 4
            [
                'id_opcionessubpregunta' => 10,
                'id_subpregunta' => 4,
                'texto' => 'a) Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 11,
                'id_subpregunta' => 4,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 12,
                'id_subpregunta' => 4,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],
            //Item 31, subpregunta 5
            [
                'id_opcionessubpregunta' => 13,
                'id_subpregunta' => 5,
                'texto' => 'a) Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 14,
                'id_subpregunta' => 5,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 15,
                'id_subpregunta' => 5,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 1
            ],

            //Item 33, subpregunta 1
            [
                'id_opcionessubpregunta' => 16,
                'id_subpregunta' => 11,
                'texto' => 'a) Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 17,
                'id_subpregunta' => 11,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 18,
                'id_subpregunta' => 11,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 33, subpregunta 2
            [
                'id_opcionessubpregunta' => 19,
                'id_subpregunta' => 12,
                'texto' => 'a) Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 20,
                'id_subpregunta' => 12,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 21,
                'id_subpregunta' => 12,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 1
            ],

            //Item 33, subpregunta 3
            [
                'id_opcionessubpregunta' => 22,
                'id_subpregunta' => 13,
                'texto' => 'a) Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 23,
                'id_subpregunta' => 13,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 24,
                'id_subpregunta' => 13,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 33, subpregunta 4
            [
                'id_opcionessubpregunta' => 25,
                'id_subpregunta' => 14,
                'texto' => 'a) Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 26,
                'id_subpregunta' => 14,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 27,
                'id_subpregunta' => 14,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 1
            ],
            //Item 33, subpregunta 5
            [
                'id_opcionessubpregunta' => 28,
                'id_subpregunta' => 15,
                'texto' => 'a) Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 29,
                'id_subpregunta' => 15,
                'texto' => 'b) Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 30,
                'id_subpregunta' => 15,
                'texto' => 'c) Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 35, subpregunta 1
            [
                'id_opcionessubpregunta' => 31,
                'id_subpregunta' => 21,
                'texto' => 'a) Opinión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 32,
                'id_subpregunta' => 21,
                'texto' => 'b) Hecho  ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 33,
                'id_subpregunta' => 21,
                'texto' => 'c) Argumento razonado ',
                'valor_opcion'=> 0
            ],

            //Item 35, subpregunta 2
            [
                'id_opcionessubpregunta' => 34,
                'id_subpregunta' => 22,
                'texto' => 'a) Opinión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 35,
                'id_subpregunta' => 22,
                'texto' => 'b) Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 36,
                'id_subpregunta' => 22,
                'texto' => 'c) Argumento razonado ',
                'valor_opcion'=> 1
            ],

            //Item 35, subpregunta 3
            [
                'id_opcionessubpregunta' => 37,
                'id_subpregunta' => 23,
                'texto' => 'a) Opinión',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 38,
                'id_subpregunta' => 23,
                'texto' => 'b) Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 39,
                'id_subpregunta' => 23,
                'texto' => 'c)  razonado ',
                'valor_opcion'=> 1
            ],

            //Item 35, subpregunta 4
            [
                'id_opcionessubpregunta' => 40,
                'id_subpregunta' => 24,
                'texto' => 'a) Opinión',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 41,
                'id_subpregunta' => 24,
                'texto' => 'b) Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 42,
                'id_subpregunta' => 24,
                'texto' => 'c) Argumento razonado ',
                'valor_opcion'=> 0
            ],
            //Item 35, subpregunta 5
            [
                'id_opcionessubpregunta' => 43,
                'id_subpregunta' => 25,
                'texto' => 'a) Opinión',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 44,
                'id_subpregunta' => 25,
                'texto' => 'b) Hecho ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 45,
                'id_subpregunta' => 25,
                'texto' => 'c) Argumento razonado ',
                'valor_opcion'=> 0
            ],

            //Item 45, subpregunta 1
            [
                'id_opcionessubpregunta' => 46,
                'id_subpregunta' => 31,
                'texto' => '1 = nada importante. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 47,
                'id_subpregunta' => 31,
                'texto' => '2 = de muy poca importancia.  ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 48,
                'id_subpregunta' => 31,
                'texto' => '3 = de cierta importancia.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 49,
                'id_subpregunta' => 31,
                'texto' => '4 = importante.   ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 50,
                'id_subpregunta' => 31,
                'texto' => '5 = muy importante',
                'valor_opcion'=> 0
            ],

            //Item 45, subpregunta 2
            [
                'id_opcionessubpregunta' => 51,
                'id_subpregunta' => 32,
                'texto' => '1 = nada importante ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 52,
                'id_subpregunta' => 32,
                'texto' => '2 = de muy poca importancia. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 53,
                'id_subpregunta' => 32,
                'texto' => '3 = de cierta importancia.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 54,
                'id_subpregunta' => 32,
                'texto' => '4 = importante.  ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 55,
                'id_subpregunta' => 32,
                'texto' => '5 = muy importante',
                'valor_opcion'=> 1
            ],

            //Item 45, subpregunta 3
            [
                'id_opcionessubpregunta' => 56,
                'id_subpregunta' => 33,
                'texto' => '1 = nada importante',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 57,
                'id_subpregunta' => 33,
                'texto' => '2 = de muy poca importancia. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 58,
                'id_subpregunta' => 33,
                'texto' => '3 = de cierta importancia.',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 59,
                'id_subpregunta' => 33,
                'texto' => '4 = importante.  ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 60,
                'id_subpregunta' => 33,
                'texto' => '5 = muy importante',
                'valor_opcion'=> 0
            ],

            //Item 45, subpregunta 4
            [
                'id_opcionessubpregunta' => 61,
                'id_subpregunta' => 34,
                'texto' => '1 = nada importante',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 62,
                'id_subpregunta' => 34,
                'texto' => '2 = de muy poca importancia. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 63,
                'id_subpregunta' => 34,
                'texto' => '3 = de cierta importancia.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 64,
                'id_subpregunta' => 34,
                'texto' => '4 = importante.  ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 65,
                'id_subpregunta' => 34,
                'texto' => '5 = muy importante',
                'valor_opcion'=> 0
            ],
            //Item 45, subpregunta 5
            [
                'id_opcionessubpregunta' => 66,
                'id_subpregunta' => 35,
                'texto' => '1 = nada importante',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 67,
                'id_subpregunta' => 35,
                'texto' => '2 = de muy poca importancia. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 68,
                'id_subpregunta' => 35,
                'texto' => '3 = de cierta importancia.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 69,
                'id_subpregunta' => 35,
                'texto' => '4 = importante.  ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 70,
                'id_subpregunta' => 35,
                'texto' => '5 = muy importante',
                'valor_opcion'=> 0
            ],

            //Item 53, subpregunta 1
            [
                'id_opcionessubpregunta' => 71,
                'id_subpregunta' => 36,
                'texto' => '1 = solución muy mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 72,
                'id_subpregunta' => 36,
                'texto' => '2 = solución mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 73,
                'id_subpregunta' => 36,
                'texto' => '3 = solución medianamente buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 74,
                'id_subpregunta' => 36,
                'texto' => '4 = solución muy buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 75,
                'id_subpregunta' => 36,
                'texto' => '5 = solución excelente.',
                'valor_opcion'=> 1
            ],

            //Item 53, subpregunta 2
            [
                'id_opcionessubpregunta' => 76,
                'id_subpregunta' => 37,
                'texto' => '1 = solución muy mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 77,
                'id_subpregunta' => 37,
                'texto' => '2 = solución mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 78,
                'id_subpregunta' => 37,
                'texto' => '3 = solución medianamente buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 79,
                'id_subpregunta' => 37,
                'texto' => '4 = solución muy buena.',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 80,
                'id_subpregunta' => 37,
                'texto' => '5 = solución excelente.',
                'valor_opcion'=> 0
            ],

            //Item 53, subpregunta 3
            [
                'id_opcionessubpregunta' => 81,
                'id_subpregunta' => 38,
                'texto' => '1 = solución muy mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 82,
                'id_subpregunta' => 38,
                'texto' => '2 = solución mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 83,
                'id_subpregunta' => 38,
                'texto' => '3 = solución medianamente buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 84,
                'id_subpregunta' => 38,
                'texto' => '4 = solución muy buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 85,
                'id_subpregunta' => 38,
                'texto' => '5 = solución excelente.',
                'valor_opcion'=> 1
            ],

            //Item 53, subpregunta 4
            [
                'id_opcionessubpregunta' => 86,
                'id_subpregunta' => 39,
                'texto' => '1 = solución muy mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 87,
                'id_subpregunta' => 39,
                'texto' => '2 = solución mala.',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 88,
                'id_subpregunta' => 39,
                'texto' => '3 = solución medianamente buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 89,
                'id_subpregunta' => 39,
                'texto' => '4 = solución muy buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 90,
                'id_subpregunta' => 39,
                'texto' => '5 = solución excelente.',
                'valor_opcion'=> 0
            ],
            //Item 53, subpregunta 5
            [
                'id_opcionessubpregunta' => 91,
                'id_subpregunta' => 40,
                'texto' => '1 = solución muy mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 92,
                'id_subpregunta' => 40,
                'texto' => '2 = solución mala.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 93,
                'id_subpregunta' => 40,
                'texto' => '3 = solución medianamente buena.',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 94,
                'id_subpregunta' => 40,
                'texto' => '4 = solución muy buena.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 95,
                'id_subpregunta' => 40,
                'texto' => '5 = solución excelente.',
                'valor_opcion'=> 0
            ],

        ]);
    }
}
