<?php

namespace Tests\Feature;

use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserSeederTest extends TestCase
{
    public function test_user_seeder_inserta_el_mismo_payload_esperado(): void
    {
        $expectedInsertPayload = [[
            'id_pin' => 2,
            'password' => 'hash-fijo-para-test',
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
        ]];

        Hash::shouldReceive('make')
            ->once()
            ->with("20241114Puestaenmarcha")
            ->andReturn('hash-fijo-para-test');

        DB::shouldReceive('table')
            ->once()
            ->with('users')
            ->andReturnSelf();

        DB::shouldReceive('insert')
            ->once()
            ->with($expectedInsertPayload);

        (new UserSeeder())->run();
    }
}
