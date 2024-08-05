<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opciones')->insert([
        	[
				'id_pregunta' => 2,	
                'text' => '15'
            ],
            [
				'id_pregunta' => 2,	
                'text' => '16'
            ],
            [
				'id_pregunta' => 2,	
                'text' => '17'
            ],
            [
				'id_pregunta' => 2,	
                'text' => '18'
            ],
            [
				'id_pregunta' => 3,	
                'text' => 'Masculino'
            ],
            [
				'id_pregunta' => 3,	
                'text' => 'Femenino'
            ],
        ]);
    
    }
}
