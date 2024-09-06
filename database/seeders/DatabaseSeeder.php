<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriasSeeder::class);
        $this->call(ContextoSeeder::class);
        $this->call(HabilidadesSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(PruebasSeeder::class);
        $this->call(SubhabilidadSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(OpcionesSeeder::class);
        $this->call(PinesSeeder::class);
        
        $this->call(ReportesSeeder::class);
        $this->call(RespuestasSeeder::class);
        
        $this->call(UserSeeder::class);
        $this->call(CriteriosSeeders::class);

        $this->call(SubpreguntasSeeder::class);
        $this->call(OpcionesSeeder::class);

    }
}
