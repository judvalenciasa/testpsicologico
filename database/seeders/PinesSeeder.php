<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pines')->insert([
            [
                'id_pin' => 1,
                'pin' => 'codPr12',
                'id_prueba' => 1,
                'creacion_fecha' => Carbon::now(),
                'fecha_expiracion' => Carbon::now(),
                'intentos' => 0,
                'estado' => true,
            ],
            [
                'id_pin' => 2,
                'pin' => 'codPr13',
                'id_prueba' => 1,
                'creacion_fecha' => Carbon::now(),
                'fecha_expiracion' => Carbon::now(),
                'intentos' => 0,
                'estado' => true,

            ],
            [
                'id_pin' => 3,
                'pin' => 'codPr14',
                'id_prueba' => 1,
                'creacion_fecha' => Carbon::now(),
                'fecha_expiracion' => Carbon::now(),
                'intentos' => 0,
                'estado' => true,

            ]
        ]);
    }
}
