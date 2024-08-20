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
                'estrato' => 3,
                'horas_lectura' => 2,
                'horas_redes_sociales' => 3,
                'horas_entretenimiento' => 4,
                'hora_sueno' => 8,
                'genero' => 1,
                'promedio_deporte' => 1,
                'promedio_arte' => 0,
                'grasas' => 1,
                'alimentos_saludables' => 1,
                'es_administrador' => 1
            ],
        ]);
    }
}
