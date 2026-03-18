<?php

namespace Database\Seeders;

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
            $this->adminUserRecord(),
        ]);
    }

    private function adminUserRecord(): array
    {
        return [
            'id_pin' => 2,
            'password' => Hash::make("20241114Puestaenmarcha"),
            'name' => 'Juan Manuel Valencia',
            'email' => 'cognitivesparkmarista@gmail.com',
            'documento_identificacion' => "123456789",
            'edad' => 20,
            'genero' => "Masculino",
            'estrato' => 3,
            'nivel_escolaridad' => "Tecnólogo",
            'nivel_educativo_padre' => "Tecnólogo",
            'nivel_educativo_madre' => "Tecnólogo",
            'horas_lectura' => "Entre 1 y 3 horas",
            'horas_redes_sociales' => "Menos de 1 hora",
            'horas_entretenimiento' => "Entre 1 y 3 horas",
            'promedio_deporte' => 'Si',
            'promedio_arte' => 'No',
            'hora_sueno' => "Entre 4 y 6 horas",
            'grasas' => 'No',
            'alimentos_saludables' => 'No',
            'litro_agua' => 'Si',
            'es_administrador' => 1,
        ];
    }
}
