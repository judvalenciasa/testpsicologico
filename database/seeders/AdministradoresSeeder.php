<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administradores')->insert([
        	[
				'nombre' => 'Juan Manuel',
	        	'correo' => 'juanmanuel@gmail.com',
	        	'contrasena' => '123456789',
            ],
        ]);
    }
}
