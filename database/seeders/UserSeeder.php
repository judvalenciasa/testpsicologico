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
                'horas_lectura' => "1-10",
                'horas_redes_sociales' => ">10",
                'horas_entretenimiento' => "1-10",
                'hora_sueno' => "4-6",
                'genero' => "Masculino",
                'promedio_deporte' => true,
                'promedio_arte' => false,
                'grasas' => false,
                'alimentos_saludables' => true,
                'es_administrador' => 1
            ],
            [
                'id_pin' => 2,
                'password' => Hash::make(1234),
                'name' => 'Juan Perez',
                'email' => 'jua@gmail.com',
                'edad' => 20,
                'estrato' => 3,
                'horas_lectura' => "1-10",
                'horas_redes_sociales' => ">10",
                'horas_entretenimiento' => "1-10",
                'hora_sueno' => "4-6",
                'genero' => "Masculino",
                'promedio_deporte' => true,
                'promedio_arte' => false,
                'grasas' => false,
                'alimentos_saludables' => true,
                'es_administrador' => 0
            ],

        ]);
    }
}
