<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriasSeeder::class,
            ContextoSeeder::class,
            HabilidadesSeeder::class,
            ItemsSeeder::class,
            PruebasSeeder::class,
            SubhabilidadSeeder::class,
            PreguntasSeeder::class,
            OpcionesSeeder::class,
            PinesSeeder::class,
            ReportesSeeder::class,
            UserSeeder::class,
            RespuestasSeeder::class,
            DescriptivosSeeder::class,
            CriteriosSeeders::class,
            SubpreguntasSeeder::class,
            Opcionessubpreguntas::class,
            subcriteriosSeeders::class,
            EstudiantesRespuestasSeeder::class,
        ]);
    }
}
