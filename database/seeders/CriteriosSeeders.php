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
        DB::table('criterios')->insert([

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

                Gilberto dio por hecho que habría muchas mujeres inscritas en el torneo y que se cumpliría o superaría la cantidad solicitada tan solo con la primera hora del día uno de inscripciones, es muy posible que luego no se inscriban tantas mujeres, y por eso afirmó o estaba convencido de que las instalaciones serían muy buenas a partir de los recursos invertidos por el gobierno local; pero no se puede asegurar que las instalaciones serán las mejores sólo con esa observación.',
                'valor_opcion' => null
            ],

            //Item 4
            [
                'id_criterio' => 2,
                'id_pregunta' => 15,
                'texto' => 'Al puntuar este ítem, tenga en cuenta que el estudiante debió seleccionar el literal e) del anterior ítem, de lo contrario se asigna 0 puntos. A excepción de que responda de alguna de las siguientes maneras y se presuma que realizó mal la marcación anterior o no se fijó en dicha marcación, caso en el cual se procede a puntuar como prosigue.

                Hay varias combinaciones posibles:

                Ambas razones no están bien desarrolladas (La identificación de premisas verdaderas a partir de la observación y la experiencia que permiten llegar a una generalización correcta, y la independencia respecto de la ciencia o los sistemas de creencias culturales) = 0 puntos.
                Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
                Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos.
                Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos.
                Ambas razones bien desarrolladas = 4 puntos.

                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos de respuesta pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la inconsistencia de las razones en coherencia con el objetivo mencionado en el ítem anterior. 

                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.

                Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados.

                Hasta 1 punto por cada razón parcialmente desarrollada y 4 puntos por las dos razones bien desarrolladas (0 a 4 puntos posibles).

                Las explicaciones de 0 puntos incluyen: 

                Respuestas en las que no se desarrollan ninguna de las razones.
                Ejemplos de explicaciones de 0 puntos: 
                Se necesita tener dos dedos de frente para saber que el planeta no es plano.
                Definitivamente las teorías conspiracionistas están dando de qué hablar. 
                La ciencia, la teoría y los sistemas de creencias culturales no son determinantes en esta cuestión. 
                El planeta gira alrededor del sol y no el sol alrededor del planeta como se ha pensado. 

                Las respuestas de 1 punto incluyen: 
                Las premisas son comprobables o se pueden validar desde la observación y la experiencia. 
                A partir de esas premisas específicas concluyo que el Planeta Tierra es redondo.
                Las premisas no son producto de la ciencia, la teoría o los sistemas de creencias culturales. 

                Ejemplos de respuestas de 1 punto: 

                Estoy seguro(a) de que el planeta es redondo, y no necesito de la ciencia, la teoría o los sistemas de creencias culturales para estar convencido, basta con observar y pensar en las experiencias.
                Las observaciones y experiencias me permiten convencerme de que el Planeta Tierra es redondo, pero también es importante considerar los argumentos científicos, teóricos o de los sistemas de creencias culturales. 
                No son premisas fundadas precisamente en la ciencia, de la ciencia se puede desconfiar también como de los sistemas de creencias. 

                Las explicaciones de 2 puntos incluyen: 
                Las observaciones me permiten concluir que el Planeta es redondo y no plano. 

                La experiencia de la zona horaria permite comprobar que la tierra es esférica sin necesidad de la ciencia, la teoría o los sistemas de creencias culturales. 
                Las demás alternativas de respuesta incluían razones fundadas en la ciencia, en la teoría o en los sistemas culturales. 

                Ejemplos de explicaciones de 2 puntos:
                La experiencia nos dice que en otras partes del mundo el sol sale o se oculta a una hora distinta a la local, existen distintas zonas horarias, esto no es ciencia o teoría y sin embargo me permite concluir correctamente que la tierra es redonda.
                Las premisas seleccionadas no hacen parte de la ciencia, de la cual se desconfía, así como de ciertos gobiernos. 

                Ejemplos de explicaciones de 3 puntos
                Observar ciudades de otros continentes desde un punto alto con un telescopio es un imposible por más potente que sea el dispositivo, terminaremos viendo el firmamento o las estrellas, así que se trata de observaciones que no provienen de la ciencia. Algo similar ocurre con la puesta y salida del sol en otras partes del mundo. 
                La experiencia nos dice que en otras partes del mundo el sol sale o se oculta a una hora distinta a la local, existen distintas zonas horarias, y eso lo sé porque he hablado por teléfono o por internet con un familiar y no coinciden los horarios, me convenzo con ello de que el Planeta es redondo. Tendría que pedir prestado un telescopio y subir una montaña para ver si se ve o no una ciudad lejana.

                Ejemplos de explicaciones de 4 puntos. 
                Las premisas son evidenciables desde la experiencia o la observación, no se basan en sistemas de creencias culturales o en la ciencia; en todo caso me permiten confirmar que la tierra es esférica. 
                Las demás alternativas de respuesta se fundamentan o basan en la ciencia, en la teoría, o en los sistemas de creencias, mientras que las premisas de la alternativa seleccionada las puedo validar o comprobar observando desde un punto alto con un telescopio, nadie ve un continente que este separado por el mar, o reflexionando sobre las experiencias de la puesta y salida del sol o las zonas horarias en distintas partes del mundo. Ambas son razones válidas que me permiten concluir que el Planeta Tierra es redondo.',
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
