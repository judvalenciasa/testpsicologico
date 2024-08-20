<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Categorias')->insert([
        	[
				'id_categoria' => 1,	
                'nombre' => 'caracterización'
            ],
            [
				'id_categoria' => 2,	
                'nombre' => 'test psicologico'
            ],
        ]);
    }
}
