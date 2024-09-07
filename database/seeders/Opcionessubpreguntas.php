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
                'texto' => 'Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 2,
                'id_subpregunta' => 1,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 3,
                'id_subpregunta' => 1,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 2
            [
                'id_opcionessubpregunta' => 4,
                'id_subpregunta' => 2,
                'texto' => 'Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 5,
                'id_subpregunta' => 2,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 6,
                'id_subpregunta' => 2,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 3
            [
                'id_opcionessubpregunta' => 7,
                'id_subpregunta' => 3,
                'texto' => 'Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 8,
                'id_subpregunta' => 3,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 9,
                'id_subpregunta' => 3,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 31, subpregunta 4
            [
                'id_opcionessubpregunta' => 10,
                'id_subpregunta' => 4,
                'texto' => 'Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 11,
                'id_subpregunta' => 4,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 12,
                'id_subpregunta' => 4,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],
            //Item 31, subpregunta 5
            [
                'id_opcionessubpregunta' => 13,
                'id_subpregunta' => 5,
                'texto' => 'Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 14,
                'id_subpregunta' => 5,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 15,
                'id_subpregunta' => 5,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 1
            ],

            //Item 33, subpregunta 1
            [
                'id_opcionessubpregunta' => 16,
                'id_subpregunta' => 11,
                'texto' => 'Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 17,
                'id_subpregunta' => 11,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 18,
                'id_subpregunta' => 11,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 33, subpregunta 2
            [
                'id_opcionessubpregunta' => 19,
                'id_subpregunta' => 12,
                'texto' => 'Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 20,
                'id_subpregunta' => 12,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 21,
                'id_subpregunta' => 12,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 1
            ],

            //Item 33, subpregunta 3
            [
                'id_opcionessubpregunta' => 22,
                'id_subpregunta' => 13,
                'texto' => 'Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 23,
                'id_subpregunta' => 13,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 24,
                'id_subpregunta' => 13,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 33, subpregunta 4
            [
                'id_opcionessubpregunta' => 25,
                'id_subpregunta' => 14,
                'texto' => 'Razón',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 26,
                'id_subpregunta' => 14,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 27,
                'id_subpregunta' => 14,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 1
            ],
            //Item 33, subpregunta 5
            [
                'id_opcionessubpregunta' => 28,
                'id_subpregunta' => 15,
                'texto' => 'Razón',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 29,
                'id_subpregunta' => 15,
                'texto' => 'Conclusión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 30,
                'id_subpregunta' => 15,
                'texto' => 'Contrargumento ',
                'valor_opcion'=> 0
            ],

            //Item 35, subpregunta 1
            [
                'id_opcionessubpregunta' => 31,
                'id_subpregunta' => 21,
                'texto' => 'Opinión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 32,
                'id_subpregunta' => 21,
                'texto' => 'Hecho  ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 33,
                'id_subpregunta' => 21,
                'texto' => 'Argumento razonado ',
                'valor_opcion'=> 0
            ],

            //Item 35, subpregunta 2
            [
                'id_opcionessubpregunta' => 34,
                'id_subpregunta' => 22,
                'texto' => 'Opinión ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 35,
                'id_subpregunta' => 22,
                'texto' => 'Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 36,
                'id_subpregunta' => 22,
                'texto' => 'Argumento razonado ',
                'valor_opcion'=> 1
            ],

            //Item 35, subpregunta 3
            [
                'id_opcionessubpregunta' => 37,
                'id_subpregunta' => 23,
                'texto' => 'Opinión',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 38,
                'id_subpregunta' => 23,
                'texto' => 'Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 39,
                'id_subpregunta' => 23,
                'texto' => 'Argumento razonado ',
                'valor_opcion'=> 1
            ],

            //Item 35, subpregunta 4
            [
                'id_opcionessubpregunta' => 40,
                'id_subpregunta' => 24,
                'texto' => 'Opinión',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 41,
                'id_subpregunta' => 24,
                'texto' => 'Hecho ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 42,
                'id_subpregunta' => 24,
                'texto' => 'Argumento razonado ',
                'valor_opcion'=> 0
            ],
            //Item 35, subpregunta 5
            [
                'id_opcionessubpregunta' => 43,
                'id_subpregunta' => 25,
                'texto' => 'Opinión',
                'valor_opcion'=> 0
            ],
            [
                'id_opcionessubpregunta' => 44,
                'id_subpregunta' => 25,
                'texto' => 'Hecho ',
                'valor_opcion'=> 1
            ],
            [
                'id_opcionessubpregunta' => 45,
                'id_subpregunta' => 25,
                'texto' => 'Argumento razonado ',
                'valor_opcion'=> 0
            ],

        ]);
    }
}
