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
        $this->call(AdministradoresSeeder::class);
        $this->call(PruebasSeeder::class);
        $this->call(PinesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ReportesSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(OpcionesSeeder::class);
        $this->call(RespuestasSeeder::class);
    }
}
