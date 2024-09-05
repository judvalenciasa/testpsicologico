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
                'documento_identificacion' => "123456789",
                'edad' => 20,
                'estrato' => 3,
                'nivel_escolaridad' => "Tecnólogo",
                'nivel_educativo_padre' => "Tecnólogo",
                'nivel_educativo_madre' => "Tecnólogo",
                'horas_lectura' => "Entre 1 y 3 horas",
                'horas_redes_sociales' => "Menos de 1 hora",
                'horas_entretenimiento' => "Entre 1 y 3 horas",
                'hora_sueno' => "-Entre 4 y 6 horas",
                'genero' => "Masculino",
                'promedio_deporte' => 'Si',
                'promedio_arte' => 'No',
                'grasas' => 'No',
                'alimentos_saludables' => 'No',
                'litro_agua' => 'Si',
                'es_administrador' => 1
            ],
            [
                'id_pin' => 2,
                'password' => Hash::make(1234),
                'name' => 'Yorman Valencia',
                'email' => 'camilo@outlook.com',
                'documento_identificacion' => "1234567",
                'edad' => 20,
                'estrato' => 3,
                'nivel_escolaridad' => "Tecnólogo",
                'nivel_educativo_padre' => "Tecnólogo",
                'nivel_educativo_madre' => "Tecnólogo",
                'horas_lectura' => "Entre 1 y 3 horas",
                'horas_redes_sociales' => "Menos de 1 hora",
                'horas_entretenimiento' => "Entre 1 y 3 horas",
                'hora_sueno' => "Entre 4 y 6 horas",
                'genero' => "Masculino",
                'promedio_deporte' => 'Si',
                'promedio_arte' => 'No',
                'grasas' => 'No',
                'alimentos_saludables' => 'Si',
                'litro_agua' => 'Si',
                'es_administrador' => 1
            ],

        ]);
    }
}
