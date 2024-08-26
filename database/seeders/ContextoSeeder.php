<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContextoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Contextos')->insert([
        	[
                'texto' => 'Gilberto es un joven que no se pierde participación en un torneo de videojuegos que se lleva a cabo en su ciudad en los últimos 5 años. Recientemente se dio a conocer a los participantes usuales que el gobierno local destinará recursos económicos para que el certamen de este año cuente con mejores instalaciones y equipos de última generación, bajo la condición de contar con la participación de mujeres en al menos un 50%. En la primera hora de las tres jornadas diarias de inscripción, que se llevarán a cabo durante una semana meses antes del evento, Gilberto observó que coincidió con cuatro participantes al momento de llenar los formularios y que tres de esos eran mujeres. Basado en esta observación Gilberto declara en uno de los medios de comunicación que este año las consolas, pantallas, sonido, asientos e instalaciones en general serán mejores que las de los anteriores eventos.'
            ],
            [
                'texto' => 'En una de esas conversaciones familiares que se dan una tarde de vacaciones un primo tuyo expresa que la humanidad está siendo engañada desde hace siglos y que el planeta Tierra en realidad es plano y no redondo; según él esto se debe a que ciertos gobiernos y la ciencia operan articuladamente con la finalidad de dominar a gran parte de la humanidad. Algunos de los familiares hablan al respecto defendiendo ambas posturas.'
            ],
            [
                'texto' => 'Mariana debió hacer una exposición en una de las clases de su colegio en la que presentó las principales características culturales del continente asiático. Una vez se adentra a desarrollar la exposición comienza a leer las diapositivas afirmando que en países como India, Pakistán, Nepal y Bangladesh es común el matrimonio infantil debido a factores socioeconómicos, culturales y al difícil cumplimiento de las normas. Al finalizar la exposición Mariana concluye que en Asia es normal que los niños contraigan matrimonio y que en el continente no se cumplen las leyes. La profesora felicita a Mariana por su compromiso con la exposición, no obstante, le indica en privado que debe hacerle algunas recomendaciones y bajarle un punto en la nota. Mariana responde con asombro que no entiende el porqué de la decisión de la maestra. '
            ]
        ]);
    }
}
