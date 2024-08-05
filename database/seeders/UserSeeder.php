<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_pin' => 1,
                'password' => Hash::make(1234),
                'name' => 'Yorman Valencia',
                'email' => 'yormanvale@outlook.com',
                'edad' => 20,
                'genero' => 'Masculino',
                'estrato' => 3,
                'escolaridad_madre' => 'Tecnico',
                'escolaridad_padre' => 'Tecnico',
                'horas_lectura' => 2,
                'horas_redes_sociales' => 3,
                'horas_entretenimiento' => 4,
                'promedio_segundo_idioma' => 4,
                'promedio_deporte' => 4,
                'promedio_arte' => 4,
                'hora_sueno' => 8,
                'grasas' => false,
                'pensamiento_critico' => 4,
                'es_administrador' => 1
            ],
        ]);
    }
}
