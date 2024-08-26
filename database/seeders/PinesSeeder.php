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
                'pin' => 'codPr12',
                'id_prueba' => 1,
                'creacion_fecha'=> Carbon::now(),
                'fecha_expiracion'=> Carbon::now(),
                'intentos' => 3,
            ],
            [
                'pin' => 'codPr13',
                'id_prueba' => 1,
                'creacion_fecha'=> Carbon::now(),
                'fecha_expiracion'=> Carbon::now(),
                'intentos' => 3,
            ]
        ]);
    }
}
