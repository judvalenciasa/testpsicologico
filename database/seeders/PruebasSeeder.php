<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pruebas')->insert([
        	[
				'titulo' => 'Prueba psicotécnica',
	        	'descripcion' => 'Pruebas para el desarrollo psicotécnico'
            ],
        ]);
    }
}
