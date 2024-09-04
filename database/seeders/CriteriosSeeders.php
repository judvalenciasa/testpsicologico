<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Criterios')->insert([

            //Item 2
            [
                'id_criterio' => 1,
                'id_pregunta' => 13,
                'texto' => 'Ambas razones no están bien desarrolladas (El hecho de que Gilberto se ha apresurado dando por hecho la inscripción del 50% de las mujeres y que no se sabe si el torneo contará con mejores instalaciones a partir de la observación inicial de Gilberto) = 0 puntos.
Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos.
Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos.
Ambas razones bien desarrolladas = 4 puntos.

Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos de respuesta pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la inconsistencia de las razones en coherencia con el objetivo mencionado en el ítem anterior. 

Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.

Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados.

Asignación de puntuación

Hasta 1 punto por cada razón parcialmente desarrollada y 4 puntos por las dos razones bien desarrolladas (0 a 4 puntos posibles).

Las explicaciones de 0 puntos incluyen: 
Respuestas en las que no se desarrollan ninguna de las razones. Respuestas irrelevantes.

Ejemplos de explicaciones de 0 puntos: 
Porque definitivamente a las mujeres no les llama la atención este tipo de eventos.

Las explicaciones de 1 punto incluyen esclarecimientos puntuales en los que se sugieren que se necesita contar con más información, que el proceso de inscripción no ha finalizado, pero no menciona específicamente el razonamiento inadecuado de Gilberto. 

Ejemplos de respuestas de 1 punto:

No puede basar una declaración en sólo la primera jornada de inscripción.

Tal vez todos los gamers hombres vienen a una hora diferente del día.

Las explicaciones de 2 puntos incluyen: 
La observación realizada no es suficiente para determinar que se vayan a inscribir la cantidad de mujeres solicitadas

Ejemplos de explicaciones de 2 puntos:
Con base en cuatro personas se puede hacer una declaración sobre el género y lo prometedor del evento a partir de la primera jornada de inscripción, y así prever en cierta medida cómo será el evento. 

Si bien en la primera hora de las tres jornadas de inscripción más mujeres estaban llenando los formularios, eso no garantiza que se cumpla con el 50% de su participación. Pero no se sabe qué determinará el gobierno local.

En realidad, no se sabe o no se puede afirmar cómo serán las instalaciones del torneo cómo lo expresó Gilberto en el medio de comunicación luego de la primera jornada de inscripciones. 

Ejemplos de explicaciones de 3 puntos:

Gilberto se apresuró a dar sus declaraciones basándose únicamente en que había más mujeres en la primera jornada de inscripción, puesto que con esa observación no se puede asegurar en todas las inscripciones haya la misma cantidad de mujeres o se cumpla con cantidad solicitada (50%). Las instalaciones tal vez sean como nunca. 



Ejemplo de explicaciones de 4 puntos. 

Gilberto dio por hecho que habría muchas mujeres inscritas en el torneo y que se cumpliría o superaría la cantidad solicitada tan solo con la primera hora del día uno de inscripciones, es muy posible que luego no se inscriban tantas mujeres, y por eso afirmó o estaba convencido de que las instalaciones serían muy buenas a partir de los recursos invertidos por el gobierno local; pero no se puede asegurar que las instalaciones serán las mejores sólo con esa observación. 
',
                'valor_opcion' => null
            ],

            //Item 4
            [
                'id_criterio' => 2,
                'id_pregunta' => 15,
                'texto' => 'Ambas razones no están bien desarrolladas (La identificación de premisas verdaderas a partir de la observación y la experiencia que permiten llegar a una generalización correcta, y la independencia respecto de la ciencia o los sistemas de creencias culturales) = 0 puntos. Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto. Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos. Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos. Ambas razones bien desarrolladas = 4 puntos.',
                'valor_opcion' => null
            ],

            //Item 6
            [
                'id_criterio' => 3,
                'id_pregunta' => 20,
                'texto' => 'Ambas razones no están bien desarrolladas (La generalización apresurada de Mariana tanto del matrimonio infantil como del no cumplimiento de las normas en Asia) = 0 puntos. Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto. Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos. Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos. Ambas razones bien desarrolladas = 4 puntos.',
                'valor_opcion' => null
            ],

            //Item 8
            [
                'id_criterio' => 4,
                'id_pregunta' => 17,
                'texto' => 'La razón no está bien desarrollada (el hecho de importar o producir materia prima para la fabricación de plásticos biodegradables no garantiza que se logren esos resultados, se deben tener en cuenta otros factores para garantizar la producción diversificada, a bajos costos y en poco tiempo) = 0 puntos. La razón parcialmente desarrollada = 1 punto. La razón bien desarrollada = 2 puntos.',
                'valor_opcion' => null
            ],

        ]);
    }
}
