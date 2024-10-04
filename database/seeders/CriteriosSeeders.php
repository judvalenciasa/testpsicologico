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
                'id_pregunta' => 17,
                'texto' => 'Ambas razones no están bien desarrolladas (La generalización apresurada de Mariana tanto del matrimonio infantil como del no cumplimiento de las normas en Asia) = 0 puntos.
                Una razón parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
                Una razón bien desarrollada, o dos parcialmente desarrolladas = 2 puntos.
                Una razón bien desarrollada y otra parcialmente desarrollada = 3 puntos.
                Ambas razones bien desarrolladas = 4 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se expliquen los fallos de Mariana respecto de las razones dadas. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados. 
                
                Hasta 1 punto por cada razón parcialmente desarrollada y 4 puntos por las dos razones bien desarrolladas (0 a 4 puntos posibles).
                Las explicaciones de 0 puntos incluyen: 
                Respuestas en las que no se desarrollan ninguna de las razones. 
                Ejemplos de explicaciones de 0 puntos: 
                Mariana debió pensar mejor lo que quería expresar, muchas veces nos apresuramos a decir cosas que tal vez nos cuesten la nota. 
                Me parece absurdo que los niños se casen teniendo toda una vida por delante, deberían estar jugando. 

                Ejemplos de explicaciones de 1 punto: 
                Mariana se apresuró generalizando pues no estoy seguro(a) de que eso ocurra en todas partes de Asia. 
                La anarquía es algo que sucede esporádicamente, las leyes que regulan el matrimonio infantil son claras. 
                Creo que hay uno o dos países en Asia en los que todo funciona muy bien. China es una potencia mundial. 

                Las explicaciones de 2 puntos incluyen: 
                La generalización fue apresurada, las observaciones particulares no siempre conducen a una generalización correcta.
                Se incurrió en una generalización del matrimonio infantil al afirmar que es común o normal en todo Asia, como si en los demás países fuese igual. 
                Se incurrió en una generalización del incumplimiento de las leyes en el continente, sin tener en cuenta que no todas las leyes se incumplen en esos países y en el continente. 

                Ejemplos de explicaciones de 2 puntos:
                No creo que en todos los países de Asia funcione igual. Las leyes hay que cumplirlas. 
                Mariana incurrió en una generalización al creer que los 4 países que mencionó son la regla general para todos los países de Asia respecto del matrimonio infantil. 
                Mariana concluyó algo que no es cierto para todo el continente, si no se cumplieran las leyes, al menos por la mayoría de los habitantes, todo sería un caos. 

                Ejemplos de explicaciones de 3 puntos:
                Existen muchos más países en Asia en los que no es común o normal el matrimonio infantil. Las normas se hicieron para cumplirlas, aunque algunos las violen.
                Existen otras condiciones en las que las personas se casan cuando son mayores de edad. La generalidad no es que todas las leyes se incumplen en esos 4 países y menos en todos los países de Asia. 
                Posiblemente no se cumplan las leyes que regulan el matrimonio infantil en algunos países de Asia, pero eso no significa que no se cumplan otras leyes en esos y en otros países. Mariana debió expresarlo de otra manera.

                Ejemplo de explicaciones de 4 puntos. 
                No en todos los países de Asia es normal el matrimonio infantil, de hecho, la generalidad no es que todas las leyes se incumplen en esos 4 países y menos en todos los países de Asia. 
                Mariana está generalizando a partir de situaciones particulares de esos 4 países como que el matrimonio infantil sea normal, pero no aplica para todo el continente; también generalizó apresuradamente respecto de las leyes, es posible que algunas personas no cumplan algunas leyes, pero la generalidad es que las leyes se cumplen y no todo el continente incumple las leyes. 
                ',
                'valor_opcion' => null
            ],

            //Item 8
            [
                'id_criterio' => 4,
                'id_pregunta' => 20,
                'texto' => 'La razón no está bien desarrollada (el hecho de importar o producir materia prima para la fabricación de plásticos biodegradables no garantiza que se logren esos resultados, se deben tener en cuenta otros factores para garantizar la producción diversificada, a bajos costos y en poco tiempo) = 0 puntos.
                La razón parcialmente desarrollada = 1 punto.
                La razón bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Hasta 1 punto por la explicación parcialmente desarrollada y 2 puntos por la razón bien desarrollada (0 a 2 puntos posibles).

                Explicaciones de 0 puntos: respuestas en las que no se desarrolla la razón. 
                Ejemplos de explicaciones de 0 puntos:
                La materia prima a partir de almidones de la yuca o el maíz es necesaria para la fabricación de plásticos biodegradables. 
                Lograr resultados similares a los de las demás empresas requiere de una muy buena gerencia.
                Existen otras formas de fabricar plásticos biodegradables menos complicadas.
                Los plásticos biodegradables son una necesidad urgente. 

                Las explicaciones de 1 punto incluyen: 
                Ejemplos de explicaciones de 1 punto
                Las importaciones son importantes, pero no son determinantes para los fines esperados.
                Producir la materia prima es rentable, pero la empresa aspira a cumplir con varios objetivos que requieren de otros procesos. 
                Producir la materia prima no necesariamente garantiza bajos costos o tiempos, importarla puede ser una buena opción, pero no creo que se pueda garantizar lo que la empresa quiere lograr. 
                No se puede garantizar que la empresa logre resultados similares a los de las otras empresas, no se sabe de dónde importan la materia prima o cómo la producen. 
                La importación o producción de la materia prima dependen de muchos factores, la fabricación de estos plásticos no es sencilla bajo esas condiciones. 

                Ejemplos de explicaciones de 2 puntos:
                Importar la materia prima puede funcionar para reducir los tiempos de producción, producir la materia prima en el país puede ayudar a reducir los costos, pero lograr diversificar los productos requiere de diseño o maquinaria especializada. En todo caso, las empresas requieren distintos procesos y los aspectos relativos a la obtención de la materia prima no garantizan reducir costos y tiempos y ofrecer distintos diseños en el mercado. 
                Las otras empresas del sector pueden estar empleando maquinaria especializada o cualquier otro tipo de procesos y gestiones que contribuyen a lograr esos resultados. Si bien es factible que al importar o producir la materia prima se puedan lograr esos resultados, se requiere analizar otros procesos para que la empresa obtenga resultados similares a los de las otras empresas.
                El precio del dólar puede ser un factor que afecte la importación de la materia prima y la producción de la materia prima puede tardar mucho tiempo. Es necesario saber si la empresa cuenta con la maquinaria y/o la mano de obra necesaria para garantizar que se logren resultados similares a los de las otras empresas.
                La información con la que cuenta la empresa no es suficiente para garantizar resultados similares a los de las otras empresas, es necesario analizar más detalles, inclusive los normativos de cada país. 
                Aunque la empresa implemente esas estrategias debe tener en la cuenta otras variables o factores de orden económico, laboral, técnico, de diseño, tecnologías o desarrollos investigativos/científicos para lograr resultados similares a los de las otras empresas. 
                ',
                'valor_opcion' => null
            ],

            //Item 10
            [
                'id_criterio' => 5,
                'id_pregunta' => 25,
                'texto' => 'La razón no está bien desarrollada (el experto delegado no puede asegurar que los estudiantes del siguiente colegio que debe visitar no emitan más de 1 tonelada de CO₂ al año, basándose en que en los demás no se supera ese promedio) = 0 puntos.
                La razón parcialmente desarrollada = 1 punto.
                La razón bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Hasta 1 punto por la explicación parcialmente desarrollada y 2 puntos por la razón bien desarrollada (0 a 2 puntos posibles).
                Explicaciones de 0 puntos: respuestas en las que no se desarrolla la razón. 
                Ejemplos de explicaciones de 0 puntos:
                El experto delegado debe cumplir con lo que se le encomendó.
                Cómo es posible que un mundo con el calentamiento global que tenemos y sólo se emita 1 tonelada de CO₂ al año. 
                Hasta no ver no creer.

                Las explicaciones de 1 punto incluyen: 
                Respuestas que desarrollen parcialmente el razonamiento inapropiado del delegado.
                Ejemplos de explicaciones de 1 punto
                El experto debe realizar el promedio de la huella de carbono en el siguiente colegio para que el estudio sea confiable.
                Es posible que los adolescentes de los colegios anteriores contaminen menos que la tonelada de CO₂, pero no se sabe a ciencia cierta qué sucederá.
                Es mejor asegurarse de la emisión de los adolescentes de todos los colegios.  

                Las explicaciones de 2 puntos incluyen: 
                La razón bien desarrollada identificando el error en el que cae el experto al apresurarse en su decisión.  

                Ejemplos de explicaciones de 2 puntos:
                El experto no puede asegurar que el siguiente colegio contamine en iguales proporciones que como las demás, es una probabilidad, pero para determinar si los adolescentes contaminan menos de una (1) tonelada de CO₂ al año como en los demás colegios debe asegurarse realizando el promedio o estudio completo en los colegios asignados. 
                El experto no puede determinar que los adolescentes del siguiente colegio contaminan igual que los adolescentes de los demás colegios en los que ha realizado el promedio porque ha hecho esas observaciones, puede intuirlo, o imaginarlo, pero es posible que esos estudiantes contaminen mucho más por habitar el territorio en otras condiciones o por cualquier factor adicional o conjunto de circunstancias. Debe asegurarse promediando la huella de carbono de los adolescentes del siguiente colegio. 
                ',
                'valor_opcion' => null
            ],

            //Item 12
            [
                'id_criterio' => 6,
                'id_pregunta' => 30,
                'texto' => 'La diferenciación entre correlación y causa y efecto no está bien desarrollada (El uso frecuente de esas redes sociales y el aumento en la depresión están correlacionadas, pero puede ser un factor y no la causa de la depresión) = 0 puntos.
                La diferenciación parcialmente desarrollada = 1 punto.
                La diferenciación bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo del ítem. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos incluyen:
                Usar estas redes sociales es malo y presenta riesgos para la salud mental.
                Respuestas irrelevantes, como descartar cualquier posible correlación.
                Ejemplos de explicaciones de 0 puntos:
                Cualquier cosa que pueda mejorar la salud mental de cualquier adolescente es una buena idea. Si, además de evitar la depresión, podemos mejorar la forma de socializar, entonces eso es un logro en el que todos ganan.
                Usar redes sociales hace que los adolescentes no sientan bienestar. Porque usar redes sociales causa enfermedades mentales y distancia a los adolescentes de la realidad.
                Es posible que usar redes sociales en sí no cause estrés o depresión. Sin embargo, cualquier niño o adolescente que pueda salirse con la suya usando redes sociales a una edad temprana probablemente no ha sido sometido a una disciplina rigurosa, y debería estarlo. Disciplina = bienestar emocional y mental. Dejar de usar Instagram y Facebook = mostrar más interés en el bienestar de los adolescentes.
                Usar Instagram y Facebook es malo.
                No creo que usar Instagram y/o Facebook y la salud mental tengan que ver lo uno con lo otro.

                Las explicaciones de 1 punto incluyen:
                Un tercer factor podría ser importante, pero no es necesario.
                Ejemplos de explicaciones de 1 punto:
                Probablemente en el estudio no se tomó nota de la incidencia de estas redes sociales en población de bajos recursos económicos o que habita en zonas rurales. Si una persona habita en zonas rurales o distantes es posible que las redes sociales faciliten su comunicación con los demás y esto evite la depresión. Es necesario tener en cuenta más factores que los mencionados anteriormente.
                Debido a que tal vez la hija adolescente está deprimida porque no logra socializar, habría que crear un estudio en el que la depresión y el uso de Instagram y Facebook fueran las únicas variables de su depresión. 

                Algo más además del uso de redes sociales podría causar depresión de la hija.
                La depresión depende de otras cosas, como el rechazo de los compañeros o estar insatisfecho con sigo mismo.
                Una persona que está deprimida no siempre usa redes sociales. Algunas personas usan redes sociales y viven felices.
                Tal vez esto sea cierto, pero hay más cosas en las que pensar cuando se trata de adolescentes, como el acoso escolar o entre pares.

                Las explicaciones de 2 puntos incluyen:
                Las variables están correlacionadas, pero la correlación no implica causalidad. Una respuesta de 2 puntos demuestra que el estudiante reconoce que, aunque el uso de Instagram y Facebook y el aumento de la depresión pueden mostrar una correlación, esto no significa que necesariamente el uso de esas redes sociales cause depresión.

                Ejemplos de explicaciones de 2 puntos:
                Puede haber una correlación entre las variables, pero una correlación no significa causalidad. En este caso, parece más probable que una tercera variable (es decir; rasgos hereditarios, traumas de la primera infancia, patrones aprendidos de pensamiento negativo, el consumo de drogas o el alcoholismo, o situaciones estresantes en la vida) sea más probable que cause directamente depresión de la hija.
                Con base en esta información, no estoy convencido de que el uso de redes sociales como Instagram y Facebook resulte en depresión de la hija. Lo único que esto me dice es que hay una correlación entre los dos, no que A causó B. Por lo que sé, podría ser que las redes sociales sean un mecanismo de socialización o comunicación entre las personas, podrían ayudarles a las personas a establecer contacto con otras personas o a comunicar sus emprendimientos y/o recibir dinero a través de la generación de contenido, estas deben usarse de manera responsable y moderada. Pero el padre se centró sólo en un factor como las redes sociales. 
                ',
                'valor_opcion' => null
            ],

            //Item 14
            [
                'id_criterio' => 7,
                'id_pregunta' => 35,
                'texto' => 'La comprensión no bien desarrollada (sobre la información relevante acerca de los estudios realizados por la institución como para comprobar la hipótesis de que esa clase de música está generando degradación en la sociedad) = 0 puntos.
                La comprensión parcialmente desarrollada = 1 punto.
                La comprensión bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos son las siguientes:

                Respuestas irrelevantes.

                Ejemplos de explicaciones de 0 puntos:

                Las canciones o género musical inciden en el comportamiento de los adolescentes porque sus letras incitan a la violencia, al consumo de drogas o al sexo mal manejado.
                Si es culpa del Consejo Nacional Musical que los adolescentes se comporten de esta manera por no haber regulado la circulación de estas canciones o su producción musical desde hace tiempo.
                Qué nos puede garantizar que el adolescente tenga una vida sana como la gran mayoría de los ciudadanos después de haber escuchado este tipo de canciones constantemente.

                El tipo de personalidad que es menos probable que se comporte de esta manera.
                A los miembros del Consejo Nacional de Música les gusta estas canciones.
                Desde mi experiencia he notado que ese tipo de conclusiones no tiene fundamento.



                Ejemplos de explicaciones de 1 punto
                Porque se necesita saber qué tanto se están viendo afectados los jóvenes con esta música, para votar bien. 
                Porque las cifras son importantes, es necesario saber qué está pasando con la juventud desde datos concretos.  
                Decir que la sociedad está degradada es de grandes responsabilidades, se deben tener datos confiables. 
                Porque se trata de los estudios realizados por la institución, hasta el momento el Consejo Nacional de Música no tiene mucho que ver.


                Ejemplos de explicaciones de 2 puntos

                Se necesitan datos para establecer comparaciones entre los jóvenes que cambian su comportamiento y los que no lo hacen con respecto a la música en cuestión. Los estudios deben de tener al menos este tipo de datos para convencerme de cómo votar. 
                Es importante contar con el promedio de adolescentes a nivel nacional que escuchan este género musical o determinadas canciones con letras musicales cuestionables y tienen comportamientos inclinados a la drogadicción, la violencia o el sexo mal manejado. 
                Necesito saber cómo se comparan las cifras de adolescentes que escuchan este género musical y estas canciones y que cambian su comportamiento en relación con la violencia, el sexo mal manejado o el consumo de drogas con los adolescentes que tienen este tipo de comportamientos y no escuchan este género o determinadas canciones cuestionables por su contenido explícito.
                Cómo se determina si las canciones con contenido explícito inciden en el comportamiento violento, el consumo de drogas o el sexo mal manejado de los adolescentes de acuerdo con la frecuencia en que se escuchan. 
                Es importante verificar que las conductas agresivas, el consumo de sustancias psicoactivas o el sexo mal manejado en los adolescentes sea causado en parte por la escucha constante de un género musical o determinadas canciones con contenido explícito.
                Debería saber qué determina que una canción atenta contra el buen comportamiento de los adolescentes, especialmente si contiene mensajes explícitos relativos al sexo, la violencia o las drogas.
                ',
                'valor_opcion' => null
            ],

            //Item 16
            [
                'id_criterio' => 8,
                'id_pregunta' => 40,
                'texto' => 'La explicación con que demuestra una conciencia de que la información objetiva es necesaria para tomar una decisión razonable, no bien desarrollada = 0 puntos.
                La explicación parcialmente desarrollada = 1 punto.
                La explicación bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Explicaciones de 0 puntos.

                Consideraciones irrelevantes 

                Ejemplos de respuestas de 0 puntos:
                Porque se requiere saber qué tan bueno es cada programa de estudios universitarios en comparación con los demás similares en otras universidades.
                El porcentaje de graduados empleados es importante
                Es posible que las empresas en realidad requieran a los profesionales de esas universidades.
                Se necesita saber cuál es el mejor programa

                Las respuestas de 1 punto incluyen lo siguiente:

                Respuestas que se acercan a las respuestas de 2 puntos, pero que no se expresan con claridad.

                Ejemplos de respuestas de 1 punto: 

                Necesito saber muy bien por qué uno de los programas de estudios es mejor que el otro  
                Es importante analizar las posibilidades de que la amiga no obtenga un empleo rápidamente al graduarse
                No se sabe cuánto tiempo pasará antes de que la amiga vea resultados, pero necesitamos reducir la incertidumbre y tener claridades o probabilidades de que pueda emplearse al graduarse 
                Los datos hablan por sí solos, las estadísticas, promedios o porcentajes de recién graduados empleados es lo que mi amiga necesita.
                Si muchas empresas requieren de estos profesionales, las cosas van por buen camino.


                Ejemplos de explicaciones de 2 puntos:

                Contar con información precisa como el porcentaje de graduados de esa carrera que se emplean antes o al finalizarla es lo que nos puede ayudar tomar una buena decisión o aconsejar bien a mi amiga, todavía más confiable si se comprueba que las empresas requieren a los profesionales de la(s) carrera(s) de una de estas universidades. 
                De las opciones la que más certeza genera es la b, que indica que se puede analizar el número, porcentaje o cantidad de egresados que se emplean al graduarse, y emplearse al graduarse es lo que necesita la amiga, entonces, el programa universitario que tenga las mejores cifras es el que puede recomendarse, también es relevante la información de la cantidad de empresas o de posibilidades concretas de trabajo que resultan por la demanda o requerimiento de estos profesionales recién egresados.
                Lo que importa para aconsejar a mi amiga acerca de uno de los dos programas es la objetividad de la información, que demuestren con cifras y con casos concretos las altas posibilidades que tiene de emplearse al finalizar la carrera; así podrá saberse cuáles son las ventajes y desventajas de cada programa, si alguno de los dos es mucho mejor que el otro o si los dos son muy buenos. 
                ',
                'valor_opcion' => null
            ],

            //Item 18
            [
                'id_criterio' => 9,
                'id_pregunta' => 45,
                'texto' => 'Comprensión de la probabilidad de ser admitido y convertirse en un astronauta de la NASA a partir de la cifra de latinos admitidos, no bien desarrollada = 0 puntos.
                La comprensión parcialmente desarrollada = 1 punto.
                La comprensión bien desarrollada = 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos son las siguientes:

                Respuestas irrelevantes.

                Ejemplos de explicaciones de 0 puntos:

                Es difícil, y creo que es más fácil conocer a alguien e ingresar de esa manera, que hacerlo realmente trabajando para ingresar, es triste, pero es cierto.
                Siento que el 85% de las personas que trabajan duro para aprender de astronomía lo lograrán. Pero a veces se trata de a quién la suerte o los contactos, no de lo duro que trabajas.
                Porque ya tiene algo de conocimientos y es capaz de trabajar duro en sus cosas. Él tiene tantas posibilidades como todos, según lo que se dice de él en la historia.
                En esta profesión mucho tiene que ver con que seas capaz de tomar riesgos y tal vez tener cierta influencia. Algunos de ellos son aceptados por accidente y otros trabajaron años sin lograrlo. Está dispuesto a trabajar duro y si le gusta, esos son factores importantes.
                Hay un 50/50 en cada oportunidad de vida. Funciona igual para todos nosotros.


                Las explicaciones de 1 punto incluyen lo siguiente:

                Hay una gran cantidad de personas que están tratando de convertirse en astronautas. 

                Ejemplos de respuestas de 1 punto:

                Parece que ha investigado y tiene mucha motivación y disciplina para trabajar en su objetivo, sin embargo, también es posible que haya otras personas en el mundo que tengan muchas de las mismas características, capacidad y motivación que él.
                Numéricamente, tiene una baja probabilidad de ser "admitido" a pesar de su dedicación, disciplina y esfuerzo.
                Hay demasiada gente tratando de llegar a la NASA. Las posibilidades son escasas.
                No hay evidencia de que las personas que estudien de manera autodidacta puedan llegar a convertirse en astronautas de esa manera, hay pruebas de que hispanos o latinos pueden ingresar a la nasa, Jesús David también puede hacerlo. Tiene posibilidades, pero pocas. 
                Creo que el hecho de que quiera ser astronauta, vivir en la Florida y ser disciplinado no significa que se convertirá en astronauta. Para convertirte en astronauta tienes mayores probabilidades si no eres latino, así tengas talento.
                Según la descripción, tiene poco que la diferencie de la gran mayoría de los "solicitantes", y carece notablemente de conexiones o influencia familiar.

                Las explicaciones de 2 puntos incluyen lo siguiente:

                Ejemplos de explicaciones de 2 puntos:

                Porque probablemente hubo una cantidad asombrosamente grande de personas que lo intentaron de esta manera, pero nunca lo lograron. Y el número de personas latinas o hispanas que lograron ingresar es una cantidad muy pequeña, y si sólo 17 de cada 100 personas de ese grupo lo logró, eso hace que sea una posibilidad aún menor.
                Si bien el porcentaje de hispanos o latinos que han ingresado a la NASA han tenido que prepararse en estas áreas del conocimiento, lo más probable es que un alto porcentaje de estas personas o en su totalidad haya culminado sus estudios en una universidad reconocida. Además, la posibilidad de que un latinoamericano se convierta en astronauta de la NASA no es alta, sin importar la dedicación y conocimientos de la persona e.
                Jesús David puede tener algunos talentos y buenas cualidades, pero también las tendrán otras personas contra las que compite. Si se tiene en cuenta que sólo el 17 de cada 100 personas entre hispanos o latinos ingresan a la nasa, esto no significa que este porcentaje sea solo para latinos, tampoco que esta cantidad de personas se desempeñe como astronautas. 
                ',
                'valor_opcion' => null
            ],

            //Item 20
            [
                'id_criterio' => 10,
                'id_pregunta' => 50,
                'texto' => 'La identificación del supuesto (del dominio de la IA sobre las industrias) y lo cuestionable del argumento en el artículo (la sustitución de los empleos afirmando que nos quedaremos sin empleo), no bien desarrolladas = 0 puntos.
                La identificación del supuesto y lo cuestionable del argumento parcialmente desarrollados = 1 punto.
                La identificación del supuesto y lo cuestionable del argumento bien desarrollados= 2
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos incluyen lo siguiente:

                Explicaciones irrelevantes y opiniones o respuestas que rechazan claramente la idea de que se pueden hacer proyecciones.

                Ejemplos de respuestas de 0 puntos:

                Más tecnología, menos empleo en 80 años.

                ¿Qué tan importantes son estos empleos?

                Nadie puede saber lo que va a pasar.

                Las explicaciones de 1 punto contienen

                Introducción a factores que cambiarían el aumento o disminución en la tasa de empleo, pero no se indica explícitamente. 
                Cuestionar la exactitud de la información proporcionada.

                Ejemplos de respuestas de 1 punto:

                ¿Cómo se obtuvo esta información? ¿Cuál es la fuente de la información?
                Otras cosas afectarán el desempleo y cambiarán las dinámicas de las industrias. Es posible que actualmente las mayores tasas de empleo estén en esas industrias. 
                No se puede predecir el nivel de empleo en esas industrias sólo de acuerdo con lo que está sucediendo en este momento. No muestra cómo obtuvieron el cálculo.
                No necesariamente se quedará la humanidad sin empleo, es apresurado afirmarlo. 
                Las explicaciones de 2 puntos incluyen lo siguiente:

                El artículo asume que el desempleo seguirá creciendo al mismo ritmo.
                Determinadas industrias no presentan todas las industrias o fuentes de empleo.
                Los niveles en la tasa de desempleo no continuarán igual.
                No abordó los cambios probables en los próximos 80 años.
                No contempla el aprovechamiento del ser humano sobre IA y/o las máquinas. 

                Ejemplos de explicaciones de 2 puntos:

                La empleabilidad en estas industrias puede cambiar con eventos inesperados. La inteligencia artificial puede generar otros empleos o pueden surgir otras industrias con nuevos empleos. 
                El artículo no tiene en cuenta que las empresas de estas industrias pueden tener sus propias políticas de empleabilidad o que el desempleo puede aumentar en el mundo, pero no necesariamente en esas industrias. La regulación de la Inteligencia Artificial puede incidir de alguna manera.
                Los niveles de desempleo en el mundo no dependen necesariamente del desarrollo de la inteligencia artificial. El ser humano podría estar desempeñando otras funciones relacionadas con el aprovechamiento de los avances tecnológicos en esas industrias. 
                Podría haber más empresas en esas industrias y demandas en el mercado que las que hay ahora. No sabemos con certeza si tendremos los mismos números en el futuro.
                Existe la posibilidad de que aumente el desempleo, como puede que disminuya y haya muy buena oferta de empleo en el futuro con esas industrias aprovechando al máximo la IA.  
                La inteligencia artificial puede generar otros empleos o contribuir a realizar más y mejores actividades en los empleos de esas industrias; incluso si se acaba el empleo en esas industrias no se acabará en toda la humanidad.
                ',
                'valor_opcion' => null
            ],

            //Item 22
            [
                'id_criterio' => 11,
                'id_pregunta' => 55,
                'texto' => 'La identificación de la comparación inapropiada del rector, no bien desarrollada = 0 puntos.
                La identificación de la comparación inapropiada del rector parcialmente desarrollada = 1 punto.
                La identificación de la comparación inapropiada del rector bien desarrollada= 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las respuestas de 0 puntos incluyen lo siguiente:

                Respuestas irrelevantes, como el hecho de que los estudiantes pueden aprender esto en casa.

                Ejemplos de respuestas de 0 puntos:

                Están aprendiendo porque sus habilidades se están perfeccionando.

                Es posible que algunos estudiantes no puedan acceder a estos juegos en casa y, por lo tanto, se sientan seguros aprendiendo mientras se juega en clase.

                El aprendizaje a través del juego es una actividad motivacional que no se puede practicar por sí solo, debe ser dirigida.

                Los estudiantes deben divertirse para que quieran ir al colegio. 

                Definitivamente el rector tiene la razón, los juegos no enseñan nada.


                Las respuestas de 1 punto incluyen lo siguiente:

                Cualquier cosa que mencione el punto de vista del estudiante y sus creencias sobre las formas de aprendizaje en el aula de clase.

                Respuestas que se acercan a las respuestas de 2 puntos, pero que no se expresan con claridad.

                Ejemplos de explicaciones de 1 punto:

                Permitir que un profesor enseñe por medio de juegos puede ayudar a estimular la memoria de los estudiantes y aprender cosas importantes.
                Al emplear juegos didácticos el profesor está ayudando a los estudiantes a desarrollar su memoria a largo plazo. 
                Si como estudiantes nos entretenemos o divertirnos al aprender, ¿no es esa la parte más importante de la educación de un niño?
                No se puede enseñar al estudiante por medio de la ludificación hasta que se establezca el desarrollo de sus condiciones iniciales de aprendizaje.
                El maestro es el que enseña y califica y conoce a los estudiantes. Posiblemente el rector no tiene conocimiento didácticos o pedagógicos.


                Las explicaciones de 2 puntos incluyen lo siguiente:

                El rector está realizando comparaciones innecesarias o impertinentes, otras cosas se logran con el juego en el aula.
                El rector ha asumido que aprender a través de ciertos juegos no es una opción, está descalificando el trabajo de los maestros. 

                Ejemplos de explicaciones de 2 puntos:

                La forma tradicional de enseñar no implica que no existan nuevas alternativas para el aprendizaje, existen muchos juegos con los que se puede aprender, generar motivación, concentración, recordación o interés en los estudiantes, eso también es aprendizaje. 
                El rector confunde el juego con la didáctica, o está invalidando las formas de enseñanza de los profesores. El rector parece estar expresando opiniones, en lugar de razonamientos lógicos. 
                Los juegos sí pueden enseñar, los profesores podrían estar haciendo bien su trabajo, pero con las comparaciones del rector se entiende que para él esos juegos son una pérdida de tiempo. Los maestros tienen sus ideas sobre cómo enseñar de manera didáctica y el rector puede estar sesgado.
                El hecho de que los estudiantes utilicemos el juego no significa que no aprendemos de las materias que nos enseñan; ciertos juegos tienen sus enseñanzas. El rector realiza comparaciones que no vienen al caso.
                ',
                'valor_opcion' => null
            ],

            //Item 24
            [
                'id_criterio' => 12,
                'id_pregunta' => 60,
                'texto' => 'La identificación de la falsa analogía del gobernador, no bien desarrollada = 0 puntos.
                La identificación de la comparación inapropiada del rector parcialmente desarrollada = 1 punto.
                La identificación de la comparación inapropiada del rector bien desarrollada= 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos incluyen lo siguiente:

                Etiquetar al gobernador como "malo" o son irrelevantes para el tema de la comparación inapropiada.
                Ejemplos de respuestas de 0 puntos:

                El impacto personal y la experiencia personal con el deporte hacen que su información sea importante.
                No sabe lo que experimentan las personas que practican el deporte.
                No es justo porque el Consejo Directivo debería tener la opinión de alguien sobre la nueva reglamentación.

                Las explicaciones de 1 punto incluyen lo siguiente:
                
                El gobernador está pensando en los deportistas como si no conocieran el deporte, subestimándolos y desconociendo su experiencia y conocimientos al respecto.


                Ejemplos de explicaciones de 1 punto:


                Incluir un deportista beneficiará mejor la práctica del deporte con el cambio de las reglas de juego, es quién conoce mejor las reglas que deben cambiarse, pero un deportista que lo practique por un tiempo y que busca mejorar el deporte.
                Tiene razón, pero también la tiene el grupo de pobladores. Al incluir a los deportistas en el Consejo Directivo, se puede encontrar mejor las necesidades del deporte. Sin embargo, los deportistas también tienen la oportunidad de aprovecharse de su influencia.
                El gobernador no permitió que los deportistas expresaran sus puntos de vista. Piensa que su lado es mejor, haciendo que parezca que los que practican el deporte no son buenos para ello, y no es pertinente que los compare con estudiantes de colegio.
                El gobernador está pensando que las personas que practican este deporte son más incompetentes que él. Él los está subestimando.
                Es cierto que las personas que practican el deporte pueden aprovecharse, pero también pueden tener algunas buenas ideas.

                Las explicaciones puntuales son las siguientes:

                El gobernador está insinuando que los deportistas que practican este deporte ancestral no tienen la madurez, la experiencia o el conocimiento suficiente para aportar a las nuevas reglas de juego. Los deportistas son capaces de pensar lógicamente.


                Ejemplos de explicaciones de 2 puntos:

                Las personas que practican este deporte ancestral conocen la dinámica o lógica del juego, no están en las mismas condiciones de los estudiantes de un colegio. Pueden hacer juicios sensatos, tomar decisiones lógicas. Su declaración es en realidad poco pertinente. Sin embargo, dándole el beneficio de la duda, los estudiantes de un colegio se encuentran en formación y no están en condiciones de establecer las reglas de su institución educativa. 
                El gobernador está comparando de forma inadecuada a los pobladores, es una falsa analogía. No es pertinente comparar a estos deportistas con estudiantes de un colegio. El primer grupo tiene la capacidad de aportar a las nuevas reglas de juego y sería útil para ellos, son quienes saben lo que realmente necesitan en la competencia, deberían poder participar en la reglamentación del deporte.
                Los estudiantes de colegio no están en capacidad, en edad y en condiciones de establecer las reglas de su institución educativa. Los deportistas que practican el deporte no son estudiantes de colegio, al menos no los que hacen parte oficial de este. Probablemente los deportistas sepan que necesitan mejorar. Entonces el gobernador no está siendo objetivo. 
                Los deportistas son quienes conocen a profundidad el juego como tal, no necesariamente los estudiantes de colegio. Los deportistas pueden aportar al desarrollo reglamentario del deporte.
                ',
                'valor_opcion' => null
            ],

            //Item 26
            [
                'id_criterio' => 13,
                'id_pregunta' => 65,
                'texto' => 'La identificación de la conversión ilegal debido a la vaguedad en el manual de convivencia, no bien desarrollada = 0 puntos.
                La identificación de la conversión ilegal debido a la vaguedad en el manual de convivencia, parcialmente desarrollada = 1 punto.
                La identificación de la conversión ilegal debido a la vaguedad en el manual de convivencia, bien desarrollados= 2 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                Explicaciones de 0 puntos incluyen:
                Explicaciones irrelevantes en las que no se desarrolla el objetivo del ítem anterior. 

                Ejemplos de explicaciones de 0 puntos:

                Deberían cambiar el manual de convivencia porque son evidentes los problemas. 
                Los estudiantes tienen la posibilidad de participar en las decisiones del colegio. 
                No es casualidad que esto pase si las cosas no se dejan claras desde un principio. 
                Las muestras de afecto requieren de límites que incluso pueden pensar los mismos estudiantes. 

                Ejemplos de explicaciones de 1 punto. 

                El manual de convivencia no es claro sobre las muestras de afecto, lo que lleva a interpretaciones erróneas. El coordinador sancionó a los estudiantes por tomarse de la mano, lo cual no es justo.
                Los docentes y coordinadores pueden confundirse fácilmente en sus decisiones si no están claras las reglas de juego. 
                El manual de convivencia está dejando lugar a malentendidos. 


                Ejemplos de explicaciones de 2 puntos.

                El manual de convivencia sobre las muestras de afecto lleva a confusión y a la aplicación inconsistente de las normas. Por ejemplo, no se especifica qué se considera una muestra de afecto inapropiada, lo que permitió que el coordinador sancionara injustamente a los estudiantes por tomarse de la mano, malinterpretando que cualquier muestra de afecto es sancionable. Es necesario ajustar el manual de convivencia para definir claramente las muestras de afecto permitidas y prohibidas, asegurando que todos comprendan las expectativas y se apliquen las normas de manera justa. 
                En el manual de convivencia no se especificó qué clase de muestras de afectos eran prohibidas, si las de contacto físico, los abrazos, o las caricias, en fin. El hecho es que la decisión del coordinador no es justificable y no se debe sancionar a los estudiantes.
                Las reglas establecidas en el manuel de convivencia no quedaron claras, esto se presta para confusiones como la que tuvo el coordinador académico pretendiendo sancionar a los estudiantes ¿A qué tipo de muestras de afecto se referían? 
                Seguramente el agente externo no dejó claro en el manual de convivencia cuáles eran las muestras de afecto prohibidas, así es muy fácil cometer equivocaciones, parece que el coordinador académico no se percató de la falta de claridad en el manual y no se debía sancionar debido al vacío reglamentario. 
                ',
                'valor_opcion' => null
            ],

            //Item 28
            [
                'id_criterio' => 14,
                'id_pregunta' => 70,
                'texto' => 'La identificación de la vaguedad en la expresión “a excepción de aquellas familias que no se encuentren en vulnerabilidad”, no bien desarrollada = 0 puntos.
                La identificación de la vaguedad parcialmente desarrollada = 1 punto.
                La identificación de la vaguedad bien desarrollada= 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos incluyen lo siguiente: 

                Respuestas en las que no se identifica la vaguedad o la conversión ilegal del director de la Unidad de Gestión del Riesgo. 

                Ejemplos de explicaciones de 0 puntos:
                
                Porque las personas necesitan saber qué hacer de manera urgente, estar en riesgo ante un desastre no es cualquier cosa.
                Perder la vivienda, las cosas o el vínculo con el territorio es algo que no comprenden las autoridades ambientales. 
                Porque estar en vulnerabilidad implica que se debe evacuar de inmediato. 
                Las explicaciones puntuales de 1 punto incluyen lo siguiente:

                Reconocer que el director de la Unidad de Gestión del Riesgo no ha actuado de la mejor manera. 

                Ejemplos de explicaciones de 1 punto:

                Porque el director de la Unidad de Gestión del Riesgo está llegando a conclusiones carentes de información o sin sentido. 
                Se necesita saber qué es lo que pretende en realidad la Unida de Gestión del Riesgo. 
                La información no es suficiente, las comunidades necesitan que les informe y los atiendan de la mejor manera y con prontitud. 
                Porque para saber cómo actuar se necesita tener claridad sobre las directrices. 


                Ejemplos de explicaciones de 2 puntos:


                Definitivamente el director de la Unidad de Gestión del Riesgo no supo brindar la información pues faltó claridad, cómo así que a excepción de las familias que no se encuentren en vulnerabilidad, qué es vulnerabilidad, a qué se refiere y en qué sentido, cómo determina una familia si está en vulnerabilidad o no, tiene que ver con la localización de la vivienda o con lo económico, lo social etc.  

                El director de la Unidad de Gestión del Riesgo no explicó qué es estar en vulnerabilidad, ¿tiene que ver con la amenaza o el riesgo? Estos son conceptos que deben ser entregados con claridad a las personas afectadas. No se pueden dar órdenes si no son claras, las personas están muy confundidas y con razón. 


                Si no se explica qué es estar en vulnerabilidad, cómo van a saber las personas qué deben hacer, lo lógico es que se llegué a dar una orden con todos los elementos de fondo entregados a la comunidad con claridad, y más tratándose de una situación de estas en las que no es fácil actuar y reina la preocupación y confusión. 

                La Unidad de Gestión del riesgo debe corregir su error e informar en detalle quienes están en vulnerabilidad y por qué, posteriormente o al mismo tiempo se van tomando otras decisiones o asistiendo técnicamente a la comunidad en lo relacionado con el riesgo y la amenaza. La cuestión es que, sin información precisa en una situación como esta, todo es más confuso de lo normal. 
                ',
                'valor_opcion' => null
            ],

            //Item 30
            [
                'id_criterio' => 15,
                'id_pregunta' => 75,
                'texto' => 'La identificación de la carencia de información detallada en las premisas del gobierno (vaguedad), y la conclusión inadecuada como es la formulación de la política pública sustentada en que el a mayor crecimiento poblacional menor estancamiento de la economía (conversión ilegal), no bien desarrolladas = 0 puntos.
                La identificación de la vaguedad de las premisas o la identificación de la conclusión inadecuada, bien desarrolladas= 1 punto.
                La identificación de las premisas y de la conclusión inadecuada, bien desarrolladas = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Las explicaciones de 0 puntos incluyen: 

                Opiniones irrelevantes que no tienen en cuanta los vacíos en las premisas del gobierno, ni el error de conversión ilegal en la conclusión del gobierno.  

                Ejemplos de explicaciones de 0 puntos

                Los gobiernos acostumbran a hacer este tipo de cosas con la población, no comunican bien sus intereses y desconocen el funcionamiento de la economía. 

                El uso de anticonceptivos se relaciona con el crecimiento de la población, pero no con el estancamiento de la economía. 
                Quedan dudas sobre la investigación realizada, no parece de alto nivel. 
                El gobierno no tiene en cuenta que la economía tiene unos ciclos.
                A mayor crecimiento poblacional, menor estancamiento de la economía


                Las explicaciones de 1 punto incluyen:

                El desarrollo parcial de la identificación de alguno de los dos fallos (vaguedad y/o de conversión ilegal).
                Ejemplos de explicaciones de 1 punto:
                Es posible que a mayor uso de preservativos la población se enferme menos y que a mayor uso de anticonceptivos menor cantidad de nacimientos, pero eso no determina el crecimiento o estancamiento de la economía. 
                La información de la investigación no es suficiente, se requiere saber por qué se concluye que la economía se ve afectada por el menor número de nacimientos. 
                No creo que el decrecimiento poblacional incida en crecimiento o estancamiento de la economía. 
                Es muy apresurado y riesgoso asegurar que el crecimiento de la población redunda en crecimiento de la economía.
                Es irracional tratar de hacer crecer la economía por el sólo hecho de tener mayores nacimientos o un incremento en la población. 
                Creo que el gobierno está siendo muy simplista al pensar que la economía se va a estancar sólo por el uso de anticonceptivos. Hay muchas otras cosas que también afectan la economía.
                El gobierno debería haber dado más detalles sobre cómo llegaron a la conclusión de que los anticonceptivos afectan tanto la economía. Sin esa información, no es posible entender completamente la decisión.
                Las explicaciones de dos puntos incluyen: 

                La identificación de la falta de información de la investigación que concluye que la economía decrece con el decrecimiento poblacional y el argumento del gobierno acerca de hacer crecer la economía con el aumento de la población. 

                Ejemplos de explicaciones de 2 puntos. 
                
                Las demás opciones son válidas, pero la irracionalidad del gobierno radica en que los resultados de la investigación carecen de información detallada y que un mayor crecimiento de la población no es sinónimo de crecimiento en la economía, pues existen o se deben relacionar otros factores, entonces no puede pretender incrementar la economía incrementando la población. 
                No creo que la población decrezca sólo por el uso de anticonceptivos, y tampoco que la economía no crezca por el decrecimiento de la población, por lo tanto, la decisión del gobierno es irracional en la medida en que el crecimiento de la población no garantiza el crecimiento de la economía o el decrecimiento de la población no garantiza el decrecimiento de la economía. 
                El argumento del gobierno es defectuoso porque no proporciona suficiente información sobre por qué el uso de anticonceptivos lleva a un estancamiento económico. Además, su conclusión de que aumentar la población mejorará la economía no es válida porque hay muchos otros factores que influyen en el crecimiento económico.
                El razonamiento del gobierno falla porque no considera otros factores económicos importantes y simplemente asume que más personas significa mejor economía. Sin embargo, esto no siempre es cierto, y su argumento no está bien fundamentado porque no explica cómo exactamente los anticonceptivos afectan la economía.
                ',
                'valor_opcion' => null
            ],

            //Item 38
            [
                'id_criterio' => 16,
                'id_pregunta' => 86,
                'texto' => 'La identificación de la afirmación implícita carente de evidencia, no bien desarrolladas = 0 puntos.
                La identificación de la afirmación implícita carente de evidencia, parcialmente desarrollada= 1 punto.
                La identificación de la afirmación implícita carente de evidencia, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                (De 0 a 2 puntos posibles)


                Ejemplos de explicaciones de 0 puntos:

                Parece que están tratando de asegurarse de que la plataforma se destaque en el país.

                Los influenciadores están haciendo un buen trabajo, ofreciendo nuevas alternativas y permitiendo que las personas disfruten de una buena plataforma.
                Se nota que están haciendo lo mejor que pueden para impulsar esta plataforma.
                Si la red social se populariza, los creadores están haciendo bien su trabajo.
                La aceptación de la plataforma se debe al trabajo innovador de los influenciadores.

                Las explicaciones de 1 punto indican la falta de información, e incluyen lo siguiente:

                Respuestas que se acercan a las respuestas de 2 puntos, pero que no se expresan con claridad.

                Ejemplos de explicaciones de 1 punto:

                ¿Qué es un buen trabajo al innovar? Además, los influenciadores pudieron haber trabajado mejor en otros aspectos la captación de seguidores por publicidad o las opciones para compartir contenido están generando la aceptación de esta plataforma en el país.
                Sólo afirma que los influenciadores están haciendo un buen trabajo al innovar, pero no dice lo que están haciendo con la innovación. No se trata de decir exactamente lo que están haciendo para mejorar.
                No hay detalles que expliquen el tipo de trabajo que están haciendo y si impacta en la aceptación de la plataforma.
                

                Las explicaciones de 2 puntos contienen:

                Indicaciones acerca de que no se puede llegar a ninguna conclusión sobre el desempeño de los influenciadores de la plataforma digital sin información adicional. Hay más factores que intervienen en la aceptación a nivel nacional que sólo el trabajo innovador de los influenciadores en la plataforma o red social. 
                Ejemplos de explicaciones de 2 puntos:

                La plataforma podría tener una gran aceptación en el país incluso si los influenciadores no están haciendo un buen trabajo al innovar.
                Es probable que los influenciadores estén haciendo un buen trabajo debido a la cantidad de usuarios, pero no se pueden sacar conclusiones a partir de la información dada.
                Un tercer factor podría estar generando la aceptación de la plataforma en el país.
                No es que solamente los influenciadores estén incidiendo en la aceptación de la plataforma y en el incremento sin precedentes de usuarios e influencers de la plataforma, la plataforma puede ser muy buena como tal.
                La plataforma podría tener una gran aceptación en el país incluso si los influenciadores no están haciendo un buen trabajo ni innovando.
                ',
                'valor_opcion' => null
            ],

            //Item 40
            [
                'id_criterio' => 17,
                'id_pregunta' => 88,
                'texto' => 'La identificación de la suposición apresurada de Rafael, no bien desarrollada = 0 puntos.
                La identificación de la suposición apresurada de Rafael, parcialmente desarrollada= 1 punto.
                La identificación suposición apresurada de Rafael, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                De 0 a 2 puntos posibles

                Ejemplos de explicaciones de 0 puntos

                Rafael está suponiendo algo.
                No sabemos si las aletas de tiburón son realmente rentables.
                Rafael podría estar equivocado sobre los beneficios de las aletas de tiburón.

                Ejemplos de explicaciones de 1 punto:
                Rafael está suponiendo que las aletas de tiburón tienen propiedades rejuvenecedoras, pero no hay evidencia concreta de ello.

                La suposición de Rafael sobre los beneficios cosméticos de las aletas de tiburón no está probada, por lo que podría ser una idea apresurada.

                Rafael cree que las aletas de tiburón ayudan al rejuvenecimiento, pero no hay pruebas suficientes para respaldar esa afirmación.

                Ejemplos de explicaciones de 2 puntos
                Rafael está haciendo una suposición apresurada al afirmar que las aletas de tiburón tienen propiedades rejuvenecedoras sin tener evidencia científica que respalde esa afirmación. Es importante cuestionar esta suposición antes de proponer la creación de un producto cosmético basado en esta premisa.

                La conclusión de Rafael se basa en la suposición no verificada de que las aletas de tiburón realmente aportan al rejuvenecimiento. Esta suposición apresurada debe ser cuestionada y respaldada con estudios científicos antes de considerar el desarrollo de un nuevo producto cosmético.

                Rafael está asumiendo sin pruebas concretas que las aletas de tiburón tienen beneficios rejuvenecedores. Esta suposición es apresurada porque no se ha demostrado científicamente que las aletas de tiburón tengan tales propiedades. Es crucial tener una base científica sólida antes de invertir en la creación de un producto cosmético.
                ',
                'valor_opcion' => null
            ],

            //Item 42
            [
                'id_criterio' => 18,
                'id_pregunta' => 90,
                'texto' => 'La identificación de la falacia de la joven, no bien desarrollada = 0 puntos.
                La identificación de la falacia de la joven, parcialmente desarrollada= 1 punto.
                La identificación de la falacia de la joven, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                (De 0 a 2 puntos posibles)

                Ejemplos de explicaciones de 0 puntos:

                Seleccioné esa alternativa porque me gusta cómo suena.
                A mi modo de ver, salir con uno es lo mismo que salir con todos.
                Seleccioné esa alternativa porque las amigas deben apoyarse siempre.
                Creo que es una buena opción, pero no estoy seguro de por qué.
                Elegí esa respuesta porque me gusta la letra b).

                Ejemplos de explicaciones de 1 punto:
                Seleccioné esa alternativa porque la joven está equivocada.
                Según observo, la joven no tiene razón al pensar que debe salir con todos.
                Concluí que la joven hace una suposición incorrecta.
                Elegí esa opción porque creo que la joven debería pensar mejor las cosas.
                Seleccioné esa respuesta porque la joven está haciendo una generalización.


                Opciones de explicaciones de 2 puntos:
                Seleccioné esa alternativa porque salir con una persona no significa que tenga que salir con todas las demás. Es un error pensar así.

                De acuerdo con mi análisis, la joven está pensando que, si acepta a uno, tendrá que aceptar a todos, lo cual no es cierto. Cada decisión es independiente.
                Infiero que la joven está equivocada al pensar que una acción llevará inevitablemente a otra similar. Aceptar una cita no significa aceptar todas las demás.
                Seleccioné esa alternativa porque la joven cree que, si sale con uno, tendrá que salir con todos, lo cual no es cierto. Puede decidir con quién quiere salir sin comprometerse con los demás.
                Puedo concluir que la joven está haciendo una suposición incorrecta al pensar que aceptar una salida con uno la obligaría a salir con todos. Cada salida es una decisión separada.
                De 0 a 2 puntos posibles

                Ejemplos de explicaciones de 0 puntos.

                Seleccioné esa alternativa porque me gusta cómo suena.

                A mi modo de ver, construir un parque lleva a más construcción.

                Seleccioné esa alternativa porque los vecinos deben apoyarse siempre.

                Creo que es una buena opción, pero no estoy seguro de por qué.

                Elegí esa respuesta porque me gusta la letra b).

                Ejemplos de explicaciones de 1 punto:
                •	Seleccioné esa alternativa porque la joven está equivocada.
                •	Según observo, la joven no tiene razón al pensar que debe salir con todos.
                •	Concluí que la joven hace una suposición incorrecta.
                •	Elegí esa opción porque creo que la joven debería pensar mejor las cosas.
                •	Seleccioné esa respuesta porque la joven está haciendo una generalización.


                Opciones de explicaciones de 2 puntos:
                •	Seleccioné esa alternativa porque salir con una persona no significa que tenga que salir con todas las demás. Es un error pensar así.

                •	De acuerdo con mi análisis, la joven está pensando que, si acepta a uno, tendrá que aceptar a todos, lo cual no es cierto. Cada decisión es independiente.
                •	Infiero que la joven está equivocada al pensar que una acción llevará inevitablemente a otra similar. Aceptar una cita no significa aceptar todas las demás.
                •	Seleccioné esa alternativa porque la joven cree que, si sale con uno, tendrá que salir con todos, lo cual no es cierto. Puede decidir con quién quiere salir sin comprometerse con los demás.
                •	Puedo concluir que la joven está haciendo una suposición incorrecta al pensar que aceptar una salida con uno la obligaría a salir con todos. Cada salida es una decisión separada.
                ',
                'valor_opcion' => null
            ],

            //Item 44
            [
                'id_criterio' => 19,
                'id_pregunta' => 92,
                'texto' => 'La identificación de la falacia de la madre, no bien desarrollada = 0 puntos.
                La identificación de la falacia de la madre, parcialmente desarrollada= 1 punto.
                La identificación de la falacia de la madre, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                De 0 a 2 puntos posibles

                Ejemplos de explicaciones de 0 puntos.

                •	Seleccioné esa alternativa porque me gusta cómo suena.

                •	A mi modo de ver, construir un parque lleva a más construcción.

                •	Seleccioné esa alternativa porque los vecinos deben apoyarse siempre.

                •	Creo que es una buena opción, pero no estoy seguro de por qué.

                •	Elegí esa respuesta porque me gusta la letra b).

                Ejemplos de explicaciones de 1 punto 

                •	Seleccioné esa alternativa porque la madre está equivocada.
                •	Según observo, la madre no tiene razón al pensar que un parque llevará a más construcción.
                •	Concluí que la madre hace una suposición incorrecta.
                •	Elegí esa opción porque creo que la madre debería pensar mejor las cosas.
                •	Seleccioné esa respuesta porque la madre está haciendo una generalización.
                •	Reconoce un error lógico, pero no especifica la falacia de pendiente resbaladiza.

                Ejemplos de explicaciones de 2 puntos 

                •	Seleccioné esa alternativa porque construir un parque no significa que debamos construir más parques. Es un error pensar que una cosa llevará inevitablemente a la otra."
                •	De acuerdo con mi análisis la madre está pensando que si construimos un parque, pronto habrá muchos más y la zona se urbanizará, lo cual no es cierto. Cada decisión es independiente.
                •	Infiero que la madre está equivocada al pensar que una acción llevará inevitablemente a otra similar. Construir un parque no significa que tengamos que construir muchos más.

                •	Seleccioné esa alternativa porque la madre cree que si construimos un parque, pronto habrá muchos más y el vecindario se urbanizará, lo cual no es cierto. Podemos decidir construir solo este parque.
                •	Puedo concluir que la madre está haciendo una suposición incorrecta al pensar que construir un parque llevará inevitablemente a más construcción. Cada decisión de construir debe ser evaluada por separado.
                ',
                'valor_opcion' => null
            ],

            //Item 46
            [
                'id_criterio' => 20,
                'id_pregunta' => 94,
                'texto' => 'La identificación de la identifica la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, no bien desarrollada = 0 puntos.
                La identificación de la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, parcialmente desarrollada= 1 punto.
                La identificación de la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                Ejemplos de explicaciones de 0 puntos:
                •	Seleccioné esa alternativa porque la experiencia de otros en el extranjero es muy importante.
                •	A mi modo de ver, todas las opciones son igualmente importantes.
                •	Elegí esa opción porque es interesante conocer la cultura y gastronomía del país.
                •	Seleccioné esa opción porque quiero saber sobre las estaciones y zona horaria.
                •	Creo que Pepito debería considerar todas las opciones antes de decidir.
                Ejemplos de explicaciones de 1 punto:
                •	Seleccioné esa alternativa porque la comunicación de la universidad es importante, pero también otras cosas.
                •	Concluí que la comunicación de la universidad es importante, pero también lo es la experiencia de otros.
                •	Según observo, Pepito debe confiar en la comunicación de la universidad, pero también en la cultura del país.
                •	Elegí esa opción porque Pepito necesita verificar la oferta, pero también otros aspectos.
                •	Seleccioné la comunicación confiable porque es importante, aunque no lo único.
                Ejemplos de respuestas de 2 puntos:
                •	Seleccioné la confiabilidad de la comunicación porque es crucial verificar que la oferta de la universidad es legítima antes de transferir el dinero.
                •	De acuerdo con mi análisis, es vital confirmar la veracidad de la oferta mediante la confiabilidad de la comunicación recibida para evitar fraudes.
                •	Infiero que Pepito debe confirmar que la oferta es real revisando la confiabilidad de la comunicación para tomar una decisión informada y segura.
                •	Seleccioné la confiabilidad de la comunicación porque es fundamental asegurarse de que la beca es genuina antes de transferir cualquier dinero.
                •	Puedo concluir que la verificación de la confiabilidad de la comunicación es necesaria para asegurarse de que la oferta es real y evitar riesgos financieros.
                ',
                'valor_opcion' => null
            ],

            //Item 48
            [
                'id_criterio' => 21,
                'id_pregunta' => 96,
                'texto' => 'La identificación de la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada, no bien desarrollada = 0 puntos.
                La identificación de la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada, parcialmente desarrollada= 1 punto.
                La identificación de la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada, bien desarrollada = 2 puntos
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                (De 0 a 2 puntos posibles)
                Ejemplos de explicaciones de 0 puntos:
                •	Seleccioné esa alternativa porque me gusta cómo suena.
                •	A mi modo de ver, la opinión de sus amigos es suficiente.
                •	Elegí esa opción porque me parece interesante.
                •	Seleccioné esa opción porque quiero saber más sobre el tema.
                •	Creo que Margarita debería considerar todas las opciones antes de decidir.
                Ejemplos de explicaciones de 1 punto.
                •	Seleccioné esa alternativa porque la evaluación de derechos humanos es importante, pero también otras cosas.
                •	Concluí que la evaluación de derechos humanos es importante, pero también lo son las opiniones de los medios.
                •	Según observo, Pepita debe confiar en la evaluación de derechos humanos, pero también en la reputación de los políticos.
                •	Identifica la evaluación, pero no enfatiza su necesidad crucial.
                •	Elegí esa opción porque Pepita necesita una evaluación detallada, pero también otros aspectos.
                •	Seleccioné la evaluación de derechos humanos porque es importante, aunque no lo único.
                Ejemplos de explicaciones de 2 puntos.
                •	Seleccioné la evaluación de organizaciones de derechos humanos porque es crucial verificar que el proyecto de ley realmente beneficiará a los ciudadanos más vulnerables.
                •	De acuerdo con mi análisis, es vital confirmar que el proyecto de ley ha sido evaluado positivamente por organizaciones de derechos humanos para asegurar su legitimidad.
                •	Infiero que Pepita debe confirmar que el proyecto de ley tiene el respaldo de organizaciones de derechos humanos para tomar una decisión informada y segura.
                •	Seleccioné la evaluación de derechos humanos porque es fundamental asegurarse de que el proyecto de ley tenga un impacto positivo antes de apoyarlo públicamente.
                Puedo concluir que la evaluación de derechos humanos es necesaria para asegurarse de que el proyecto de ley es legítimo y evitar apoyar una iniciativa perjudicial.
                ',
                'valor_opcion' => null
            ],

            //Item 50
            [
                'id_criterio' => 22,
                'id_pregunta' => 98,
                'texto' => 'Ambas descripciones no están bien desarrolladas (el carácter problémico de la situación, y un buen manejo eligiendo acciones adecuadas) = 0 puntos.
                Una descripción parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
                Una descripción bien desarrollada, o dos parcialmente desarrolladas = 2 puntos.
                Una descripción bien desarrollada y otra parcialmente desarrollada = 3 puntos.
                Ambas descripciones bien desarrolladas = 4 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos de respuesta pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la inconsistencia de las razones en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados. 
                
                Hasta 1 punto por cada descripción parcialmente desarrollada y 4 puntos por las dos descripciones bien desarrolladas (0 a 4 puntos posibles).
                Ejemplos de explicaciones de 0 puntos:
                •	Elegí decirle al entrenador, pero realmente no pienso que sea un gran problema. Mi amigo debe poder hacer lo que quiera.
                •	Es mejor hablar con el entrenador porque era la opción más fácil, pero no creo que sea algo serio.
                •	Pienso que debía decirle al entrenador, pero solo porque era lo que se esperaba que hiciera, no porque me preocupara mucho.
                •	Opté por contarle al entrenador, pero creo que lo más importante es que cada uno maneje sus propios problemas.
                •	Le dije al entrenador porque es lo que se supone que debo hacer, pero no entiendo por qué es un problema.
                Ejemplos de explicaciones de 1 punto:.
                •	Mi amigo podría estar en problemas si lo descubren, por eso le dije al entrenador, pero no creo que sea justo involucrarlo sin avisarle.
                •	Entiendo que podría haber problemas con las pruebas antidopaje, por lo que le hablé al entrenador, pero preferiría que mi amigo se enfrentara a esto solo.
                •	Sé que el uso de sustancias es malo, por eso pensé en el entrenador, pero tal vez no debería haberlo hecho sin antes hablar más con mi amigo.
                •	Creo que podría perjudicar al equipo, así que informé al entrenador, pero me siento mal por no haber intentado más con mi amigo.
                •	Lo que hace mi amigo está mal, por eso le dije al entrenador, pero ahora creo que debería haberlo ayudado más personalmente.
                •	No veo el gran problema, pero sé que es lo que debería hacerse, así que fui al entrenador.
                •	Aunque no creo que las sustancias sean tan dañinas, opté por hablar con el entrenador para no meterme en problemas.
                •	Mi amigo puede tomar sus propias decisiones, pero decidí hablar con el entrenador para seguir las reglas.
                •	No creo que sea un problema tan grande, pero hablar con el entrenador parecía lo correcto.
                •	Opté por el entrenador solo porque es lo que otros esperarían de mí, aunque no veo el problema.
                Ejemplos de explicaciones de 2 puntos:
                •	Creo que es posible que haya problemas en las pruebas antidopaje, así que lo mejor que se puede hacer es avisarle al entrenador, pero se deberían pensar mejor las cosas.
                •	Hay riesgos para el equipo, así que es mejor avisarle al entrenador, pero quizás debería haber intentado más con mi amigo primero.
                •	Elegí hablar con el entrenador porque no quiero problemas en las competencias, pero no sé si era lo correcto.
                •	Sé que podría ser malo para todos, así que le digo al entrenador, pero tal vez no deba involucrarlo sin intentar más con mi amigo.
                •	Hay riesgos para mi amigo, así que hablaré con el entrenador, pero no estoy seguro si es la mejor opción.
                •	Entiendo que hay riesgos serios, pero pienso que es mejor que el entrenador se encargue y no yo.
                •	Sé que mi amigo podría tener problemas graves, pero no quiero involucrarme más allá de informarle al entrenador.
                •	Mi amigo está en peligro de descalificación, pero no quiero complicarme y por eso lo dejo en manos del entrenador.
                •	Entiendo los riesgos, pero no quería involucrarme, así que recurro al entrenador.
                •	Sé que esto puede salir mal, así que decido hablar con el entrenador, pero no sé si debería hacer más.
                Ejemplos de explicaciones de 3 puntos:
                •	Mi amigo está en una mala situación, así que informo al entrenador para que intervenga, pero tal vez debería insistir más.
                •	Sé que podría haber consecuencias serias, así que elijo informar al entrenador, pero creo que debo hablar más con mi amigo primero.
                •	La situación es peligrosa para mi amigo y el equipo, así que es mejor hablar con el entrenador, pero siento que debería intentarlo más por mi cuenta.
                •	Informar al entrenador parecía la mejor opción debido a los riesgos, pero tal vez debo esforzarme más para que mi amigo comprenda.
                •	Elijo hablar con el entrenador porque la situación es preocupante, pero quizás no di suficiente apoyo a mi amigo antes de eso.
                Ejemplos de explicaciones de 4 puntos:
                •	Mi amigo está en riesgo de ser descalificado y perjudicar su salud. He intentado hablar con él, pero no responde. Creo que lo más responsable es hablar con el entrenador para que pueda recibir la ayuda que necesita antes de las competencias.
                •	El uso de sustancias representa un riesgo serio para mi amigo y el equipo. Intenté convencerlo de dejar las sustancias, pero como no escuchó, decido hablar con el entrenador para asegurarme de que reciba la ayuda necesaria.
                •	Mi amigo está en una situación peligrosa para su salud y el equipo. Como no respondió a mis intentos de ayudarlo, opto por hablar con el entrenador, quien puede ofrecerle el apoyo adecuado.
                •	Entiendo que el uso de sustancias puede tener consecuencias serias, así que después de intentar hablar con mi amigo, debo hablar con el entrenador para que pueda intervenir y brindarle la ayuda que necesita.
                •	La situación de mi amigo es crítica tanto para su salud como para las competencias. Hablaré con el entrenador porque es importante que él reciba la orientación y el apoyo necesarios para enfrentar este problema adecuadamente.
                ',
                'valor_opcion' => null
            ],

            //Item 52
            [
                'id_criterio' => 23,
                'id_pregunta' => 100,
                'texto' => 'Ambas descripciones no están bien desarrolladas (el carácter problémico de la situación, y un buen manejo eligiendo acciones adecuadas) = 0 puntos.
                Una descripción parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
                Una descripción bien desarrollada, o dos parcialmente desarrolladas = 2 puntos.
                Una descripción bien desarrollada y otra parcialmente desarrollada = 3 puntos.
                Ambas descripciones bien desarrolladas = 4 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos de respuesta pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la inconsistencia de las razones en coherencia con el objetivo mencionado en el ítem anterior. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados. 
                Hasta 1 punto por cada descripción parcialmente desarrollada y 4 puntos por las dos descripciones bien desarrolladas (0 a 4 puntos posibles).
                Ejemplos de explicaciones de 0 puntos:
                •	Le diría a las autoridades porque me lo dijeron, pero no pienso que sea un problema grande. La ubicación no importa tanto.
                •	Informaría a las autoridades porque se espera que lo haga, pero no creo que la seguridad personal sea importante en esta situación. No quiero perjudicar a mi madre.
                •	Elijo hablar con las autoridades solo porque es lo que debía hacer, pero no entiendo el riesgo. Tampoco es necesario decirle a mi madre. 
                •	Decido informar porque era la opción más fácil, pero creo que mi amigo está exagerando el problema.
                •	Dije a las autoridades porque pensé que debía hacerlo, aunque no pienso que sea algo serio.
                Ejemplos de explicaciones 1 punto:
                •	El acceso a la ubicación podría ser un problema, por eso es mejor hablar con alguien de la familia, pero tal vez no sea mi lugar involucrarme.
                •	Entiendo que la seguridad de mi amigo podría estar en riesgo, así que debo informar a mi madre.
                •	Puede ser malo si alguien accede a la ubicación, por eso elijo informar a las autoridades.
                •	No veo por qué es un problema, pero prefiero avisar a los que saben.
                •	No entiendo por qué la ubicación es importante, pero decidí que debía hablar con las autoridades.
                •	No pienso que haya un riesgo real, pero lo importante es dar aviso mi madre que puede saber lo que pasa.
                Ejemplos de explicaciones 2 puntos:
                •	Creo que hay un riesgo con la ubicación, por eso es mejor informar a mi madre y a las autoridades, pero debería haberlo pensado mejor antes.

                •	Entiendo que la ubicación podría estar expuesta con tanta delincuencia al acecho, se debe informar a mi madre o hablar con las autoridades, pero no estoy seguro si es lo mejor.
                •	Mi amigo está en riesgo, pero es él quien debe avisar a las autoridades para que lo manejen.
                •	Sé que esto puede salir mal, así que es mejor hablar inmediatamente.
                Ejemplos de explicaciones 3 puntos:
                •	Entiendo que la ubicación puede ser expuesta y así extorsionar o robar a las personas, así que se debe comunicar a las autoridades, pero tal vez se deba hablar más con mi amigo.
                •	La situación es peligrosa para la seguridad, así que prefiero informar a las autoridades, pero quizás se deba hacer alguna otra cosa.
                •	La ubicación de mi amigo y de todos los usurarios está en riesgo, así que decido mejor informar antes de que la situación empeore.  
                •	Opto por informar a las autoridades y a mi madre debido al riesgo, pero tal vez no debí involucrarme tanto sin más detalles.

                Ejemplos de explicaciones de 4 puntos:
                •	El acceso no autorizado es un riesgo grave para la seguridad. Hablar con las autoridades y con mi madre es importante para que puedan tomar medidas inmediatas y proteger la integridad física de los usuarios. Primero hablar con mi madre. 
                •	Entiendo que hay un riesgo potencial para la seguridad personal, así que informar a las autoridades es importante para asegurarme de que mi amigo y otros usuarios estén protegidos. Pero lo primero es hablar con mi madre y que mi amigo le cuente en detalle. 

                •	Mi amigo está en una situación vulnerable debido al problema técnico, así que si se comunica a las autoridades ellos pueden resolverlo antes de que afecte a más personas, pero mi madre debe saber qué personas de la empresa pueden manejar bien la situación.
                •	La seguridad personal es crucial, así que se tiene que dar aviso a las autoridades para que puedan investigar y tomar medidas para proteger la integridad física de los usuarios y de paso la de mi amigo. Pero mi madre es quien debe informar a las autoridades, tal vez primero al área de seguridad de la empresa. 
                •	El problema técnico pone en riesgo la seguridad de los usuarios, así que se debe optar por informar a las autoridades para que puedan actuar y garantizar la seguridad de todos, que identifiquen a los responsables, pero mi madre debe saber esto antes de comunicarlo a cualquier otra persona. 
                ',
                'valor_opcion' => null
            ],

            //Item 54
            [
                'id_criterio' => 24,
                'id_pregunta' => 102,
                'texto' => 'Puntuación respecto de la lista de palabras: Se asignan 2 puntos si el examinando seleccionó dos palabras de la lista; se asigna 1 punto si seleccionó sólo una palabra de la lista; 0 puntos si no seleccionó ninguna palabra de la lista. 

                Puntuación respecto de la ruta de solución: 2 puntos si la ruta de solución consiste en: 
               a) Solicitar tiempo adicional al profesor o hacer la presentación de manera virtual en otra oportunidad.
               b) Asistir a la biblioteca o consultar en internet algunos puntos específicos para la presentación.
               c) Realizar una llamada a un familiar o solicitarle a alguien en casa que envíe fotos del manual o de una copia que tenga en físico o en digital. 
               d) Realizar un diseño o bosquejo a partir de la información que recuerda o con diagramas.
               e) Realizar la presentación de manera visual sin el manual y explicando cómo construyó y cómo funciona el prototipo de manera simplificada.  
               
               Nota: cualquier alternativa de solución planteada que ponga en riesgo la responsabilidad de hacer una buena presentación o en la que no se demuestre esfuerzo por hacer una buena presentación encontrando una solución práctica, recibe 0 puntos en la calificación de ruta de solución. Son soluciones viables o concretas que no reciben 1 punto. 
               
               Los verbos pueden cambiar su conjugación. 
               
               De 0 a 5 puntos posibles
               Ejemplos de 0 puntos respecto de la ruta de solución

                •	Explico cualquier cosa que me venga a la mente, puede ser algo realmente tonto que ni siquiera se relacione con la tabla táctil, pero puede ayudar.

                •	Comunico cualquier dato de la tabla de dibujo que me llegue a la mente.

                •	Pido ayuda.

                •	Invento cualquier cosa.

                •	Sustentaría lo primero que se me venga a la cabeza.

                •	Invento algo, nunca dejaría de sustentar, al menos lo intento. Le pregunto a un compañero si me puede compartir información de su prototipo.

                •	No sustentaría. 


                Ejemplos de 2 puntos respecto de la ruta de solución

                •	Omitir el problema y tratar de recordar la estructura del manual. Tomarse un tiempo y guardar la calma para encontrar alternativas de solución. 
                •	Si desarrollé el prototipo con juicio, trataría de recuperar la memoria a largo plazo relajándome y concentrándome. Hago un ejercicio previo de sustentación sin el manual de programación.
                •	Reviso en mis apuntes si tengo los puntos principales del manual. Realizaría una llamada a casa para ver si me pueden enviar una copia del manual.
                •	Trataría de escribir un nuevo manual a partir de los conceptos principales de del proceso que llevé a cabo para construir el prototipo. Encontraría otros aspectos relevantes del prototipo para presentar en la sustentación.  
                •	Haría una lluvia de ideas incluso sobre soluciones ridículas para tratar de despertar algo en mi mente. 
                •	Explico el prototipo o la tabla de dibujo desde lo que aprendí haciéndolo ya que me esforcé mucho en el proceso. 
                •	Primero buscaría en mi mochila y luego contactaría al profesor para informar la situación. Intentaría rehacer de memoria parte del manual y explicaría visualmente el proyecto usando diagramas. 
                •	Si fuera necesario, pediría tiempo extra para consultar recursos en Internet y en la biblioteca. Colaborar con compañeros para obtener estrategias adicionales y simplificar la presentación improvisando sería útil.
                ',
                'valor_opcion' => null
            ],

            //Item 56
            [
                'id_criterio' => 25,
                'id_pregunta' => 104,
                'texto' => 'La elección de una ruta de soluciones adecuada y la evaluación de las acciones que allí se emprenden, no bien desarrolladas = 0 puntos.
                Una parcialmente desarrollada, la otra no bien desarrollada = 1 punto.
                Una bien desarrollada, o las dos parcialmente desarrolladas = 2 puntos.
                Una bien desarrollada y otra parcialmente desarrollada = 3 puntos.
                Ambas (elección y evaluación) bien desarrolladas = 4 puntos.
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se expliquen los fallos de Mariana respecto de las razones dadas. 
                
                Las respuestas pueden estar precedidas de expresiones como: seleccioné esa alternativa porque; a mi modo de ver; según observo; porque concluí que; infiero que; de acuerdo con; puedo concluir que; etc.
                
                Las razones de los siguientes ejemplos de respuesta pueden estar en cualquier orden, o se pueden intercambiar entre los ejemplos dados. 
                De 0 a 4 puntos posibles

                Ejemplos de explicaciones de 0 puntos: 
                •	No estoy seguro de qué hacer en esta situación. Supongo que cualquier opción podría funcionar, pero no tengo un plan claro ni razones para elegir conscientemente.
                •	Elegí al azar porque todas las opciones me parecían iguales y no sabía cómo decidir cuál era mejor.
                •	No entendí bien el problema, así que solo seleccioné una opción sin pensar mucho en las soluciones.
                •	No tengo una idea clara de qué pasos seguir, simplemente pensé que todas las soluciones podrían ser lo mismo.
                •	Elegí una opción, pero no evalué otras alternativas ni pensé en cómo podría implementarse la solución.
                Ejemplos de explicaciones de 1 punto:
                La explicación muestra comprensión muy limitada de la situación y no evalúa adecuadamente las alternativas.
                •	Elegí la opción A porque parece la más completa, pero no estoy seguro de cómo la evaluación adicional afectará al hábitat de las aves.
                •	Creo que la opción A es buena porque involucra una evaluación, pero no estoy claro sobre cómo eso realmente ayudará a las aves.
                •	La opción A me pareció correcta porque se menciona una evaluación, pero no entiendo bien el impacto de cambiar la ubicación de la construcción.
                •	Elegí la opción A porque sugiere hacer algo más, aunque no sé si esa acción será efectiva para las aves.
                •	No estoy seguro de cómo la opción A ayuda exactamente, pero pensé que era la mejor opción porque menciona hacer algo con la evaluación.
                Ejemplos de explicaciones de 2 puntos:
                •	La explicación muestra una comprensión parcial del problema y evalúa parcialmente la opción seleccionada.
                •	Elegí la opción A porque hacer una evaluación más detallada puede revelar problemas, pero no estoy seguro de cómo la reubicación ayudaría realmente."
                •	La opción A parece buena porque pide una evaluación, pero la reubicación de la construcción podría no ser suficiente para proteger a las aves.
                •	Elegí la opción A porque la evaluación detallada puede ser útil, pero cambiar la ubicación puede no ser una solución completa para el hábitat.
                •	La opción A me parece que aborda el problema porque involucra una evaluación y una reubicación, pero no sé si eso es suficiente para proteger a las aves.
                •	Elegí la opción A porque la evaluación adicional parece importante, pero la reubicación no garantiza la protección total del hábitat.
                Ejemplos de explicaciones de 3 puntos:
                La explicación muestra una comprensión adecuada del problema y evalúa bien la opción seleccionada, pero con algunos detalles faltantes.
                •	Elegí la opción A porque una evaluación más detallada puede identificar los problemas específicos del hábitat, y la reubicación puede reducir el daño. Esto aborda tanto el problema inmediato como la necesidad de soluciones prácticas, pero el éxito dependerá de la implementación efectiva de estas medidas.

                •	La opción A es adecuada porque permite una evaluación exhaustiva del impacto ambiental y sugiere la reubicación para minimizar el daño. Sin embargo, es importante seguir de cerca la implementación de estas medidas para asegurar su efectividad.

                •	La opción A es la mejor porque combina una evaluación detallada y la reubicación del proyecto. Esto debería ayudar a proteger el hábitat de las aves, pero se necesita asegurar que estas medidas se lleven a cabo adecuadamente para ser efectivas.

                •	Elegí la opción A porque aborda el problema de forma integral. La evaluación ayudará a identificar impactos específicos y la reubicación debería minimizar el daño. Aun así, la efectividad dependerá de la ejecución y el seguimiento de estas acciones.
                •	La opción A ofrece una solución completa al pedir una evaluación detallada y reubicar la construcción. Esto debería reducir el impacto en el hábitat, pero es crucial garantizar que la reubicación sea adecuada para la preservación de las aves.
                Ejemplos de explicaciones de 4 puntos:
                La explicación muestra una comprensión completa del problema y una evaluación detallada de la opción seleccionada.
                •	Elegí la opción A porque propone una evaluación exhaustiva del impacto ambiental, que identificará problemas específicos del hábitat de las aves. Además, la reubicación del proyecto a una zona menos sensible protegerá el ecosistema y reducirá el daño a largo plazo. Esta opción aborda ambos aspectos de manera efectiva, a diferencia de otras alternativas que son menos detalladas o no ofrecen soluciones prácticas.

                •	La opción A es la mejor porque solicita una evaluación detallada del impacto ambiental, lo que permitirá identificar y mitigar los efectos específicos sobre el hábitat de las aves. La reubicación del proyecto a una zona menos sensible ecológicamente es una solución proactiva para reducir el impacto. Esta opción considera tanto la evaluación como la implementación de medidas de mitigación, lo que la hace integral y efectiva en comparación con otras alternativas.

                •	Elegí la opción A porque combina una evaluación detallada del impacto ambiental y la reubicación del proyecto. La evaluación detallada garantizará que se identifiquen y aborden los problemas específicos del hábitat, mientras que la reubicación minimizará el daño a las aves y al ecosistema. Esta opción es completa y aborda de manera efectiva la protección del hábitat en comparación con otras opciones que no proporcionan soluciones tan exhaustivas.

                •	La opción A es óptima porque asegura una evaluación completa del impacto ambiental, lo que permitirá ajustar el plan según los problemas identificados en el hábitat de las aves. Además, la reubicación del proyecto reducirá significativamente el daño al ecosistema. Esta combinación de evaluación y mitigación ofrece una solución bien fundamentada y efectiva en comparación con otras alternativas que no son tan completas.

                •	Opté por la opción A porque pide una evaluación exhaustiva del impacto y sugiere reubicar el proyecto para proteger el hábitat de las aves. Esta opción aborda el problema de manera integral al considerar tanto la identificación de problemas como la implementación de soluciones prácticas. Comparada con otras opciones, que son menos específicas o no abordan adecuadamente el impacto, la opción A proporciona una estrategia efectiva y bien fundamentada para la preservación ambiental.
                ',
                'valor_opcion' => null
            ],

            //Item 58
            [
                'id_criterio' => 26,
                'id_pregunta' => 114,
                'texto' => 'Las alternativas de solución no son distintas a las dadas en el anterior ítem = 0 puntos.
                Las alternativas de solución son distintas a las del ítem anterior, pero sólo atiende un problema = 1 punto 
                Las alternativas son distintas a las alternativas de solución del ítem anterior, pero responden parcialmente a los dos problemas presentados = 2 puntos
                Las alternativas son distintas a las anteriores, pero una responde parcialmente a uno de los problemas y la otra responde bien = 3 puntos   
                Las alternativas son distintas a las anteriores, y las dos responden bien a los dos problemas presentados = 4 puntos.  
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo de es ítem
                De 0 a 4 puntos posibles

                Ejemplos de creaciones de 0 puntos: 
                •	Decorar la habitación con mensajes alusivos al triunfo para motivar a mis compañeros.
                •	Investigar los casos de éxito de algunas agrupaciones que atravesaron por situaciones similares y lograron triunfar.
                •	Descartar la participación en el certamen de cualquiera que se queje de la situación.
                •	Dialogar con el grupo, encontrar los motivos por los cuales pueden ganar y las formas de contrarrestar el virus y el agotamiento.
                •	Limitar las salidas en la noche y poner música relajante para mejorar el ánimo y la salud de mis compañeros.
                •	Solicitar todo tipo de medicamentos, inyecciones, remedios caseros y vitaminas que fortalezcan el sistema inmune.
                •	Trabajar la mente de los compañeros con discursos fuertes que los haga reaccionar y mejorar su desempeño.
                •	Pedir al Maestro que reemplace a los miembros de la banda que están enfermos.
                •	Solicitar el doble de ensayos musicales y pedir bebidas energizantes para mantener a todos en forma.
                •	Identificar las cualidades de la banda sinfónica y reflexionarlas con tus compañeros, motivándolos al triunfo.
                •	Decir a los compañeros que están más desanimados que no contagien de ese ánimo a los demás.
                •	Resaltar la identidad de la banda y solicitar que se toquen las piezas musicales que caracterizan a la banda para convencer al jurado.
                •	Pedir al Maestro que nos dé más tiempo para ensayar y recuperarnos.
                •	Decidir entre todos si debemos seguir en la competencia o retirarnos.
                Ejemplos de creaciones de 1 punto
                •	Daría charlas motivacionales antes de cada ensayo y distribuiría máscaras faciales para prevenir el contagio del virus.
                •	Animaría a los compañeros con palabras de aliento y buscaría remedios naturales para fortalecer sus sistemas inmunológicos.
                •	Propondría hacer descansos más frecuentes durante los ensayos para reducir el cansancio y animar a mis compañeros con historias de éxito.
                •	Solicitaría a los padres que proporcionen comidas energéticas para los miembros de la banda y organizaría actividades recreativas para elevar el ánimo.
                •	Crearía un horario de ensayos más flexible y buscaría la ayuda de un entrenador de respiración para aliviar los síntomas del virus.
                •	Repetiría los ejercicios vocales y respiratorios que realizamos en ensayos anteriores y animaría a mis compañeros con palabras motivadoras.
                Ejemplos de creaciones de 2 puntos
                •	Distribuiría folletos con mensajes motivadores y crearía un calendario de actividades de descanso para evitar el agotamiento.
                •	Organizaría actividades de esparcimiento para los compañeros y proporcionaría remedios naturales para aliviar los síntomas del virus.
                •	Programaría descansos más largos durante los ensayos y proporcionaría agua y frutas para mantener la hidratación.
                Ejemplos de creaciones de 3 puntos
                •	Implementaría un sistema de recompensas internas para motivar a mis compañeros, mientras garantizo que tengan acceso a vitaminas y descanso adecuado.
                •	Buscaría la colaboración de otras bandas para intercambiar miembros temporalmente y llenar las ausencias. También propondría sesiones de terapia grupal para levantar el ánimo.
                •	Voy a reducir el repertorio y simplificar las piezas para adaptarnos a la ausencia de los miembros enfermos.
                Ejemplos de creaciones de 4 puntos
                •	Organizaría una sesión de ejercicios de respiración y yoga para mejorar la salud respiratoria y relajar el cuerpo. Además, planearía actividades divertidas y motivadoras después de cada ensayo para levantar el ánimo del grupo.
                •	Crearía un programa de alimentación saludable con vitaminas y líquidos adecuados. También establecería momentos de descanso y relajación para combatir el agotamiento y levantar el ánimo.
                •	Solicitaría apoyo de profesionales de la salud para realizar chequeos médicos rápidos y proporcionar cuidados básicos. Además, organizaría sesiones de coaching motivacional para mantener el espíritu de lucha del grupo.
                ',
                'valor_opcion' => null
            ],

            //Item 60
            [
                'id_criterio' => 27,
                'id_pregunta' => 121,
                'texto' => 'La creación no contiene alternativas de solución distintas a las dadas en el anterior ítem, o no son soluciones directas = 0 puntos.
                La creación es distinta a las alternativas de solución del ítem anterior, pero sólo atiende un problema = 1 punto 
                La creación es distinta a las alternativas de solución del ítem anterior, pero las alternativas responden parcialmente a los dos problemas presentados = 2 puntos
                Las alternativas son distintas a las anteriores, pero una responde parcialmente a uno de los problemas y la otra responde bien = 3 puntos   
                Las alternativas son distintas a las anteriores, y las dos son coherentes respondiendo bien a los dos problemas presentados = 4 puntos.  
                
                Se asignan las anteriores puntuaciones a explicaciones que no se encuentren en los siguientes ejemplos pero que argumenten su pertinencia, también a aquellas en las que se desclasifiquen las demás alternativas de respuesta por ser impertinentes o improcedentes siempre y cuando se explique la razón dada en coherencia con el objetivo de es ítem.
                De 0 a 4 puntos posibles
                Ejemplos de creaciones de 0 Puntos
                •	Las respuestas que no presentan alternativas distintas a las dadas en el ítem anterior o que no se corresponden con una solución directa a los problemas plateados.
                •	Implementar un sistema de transporte público eléctrico y bicicletas compartidas para reducir las emisiones de vehículos y mejorar el acceso a la salud mediante transporte eficiente.
                •	Elegir políticos que resuelvan estas problemáticas. 
                •	Votar por los mejores proyectos sociales y ambientales.
                •	Establecer un programa de monitoreo del aire y reforestación en áreas urbanas para mejorar la calidad del aire y ofrecer clínicas móviles en comunidades rurales para atención médica básica.
                •	Lanzar una campaña en redes sociales sobre la importancia de una vida saludable y colocar carteles informativos sobre los peligros de la contaminación del aire en lugares públicos.
                •	Distribuir mascarillas en zonas de alta contaminación y proveer capacitación básica en primeros auxilios a voluntarios comunitarios.
                Ejemplos de creaciones de 1 Punto
                •	Proponer una reducción en el horario laboral de los trabajadores de la salud para evitar el agotamiento y establecer un programa de monitoreo del aire. 
                •	Mejorar la planta física de los hospitales y que sean sostenibles.
                •	Fomentar el uso de energías renovables mediante subsidios para paneles solares en hogares para reducir la contaminación del aire.
                •	Repartir folletos sobre higiene personal en mercados locales para educar sobre prácticas saludables. 

                Ejemplos de creaciones de 2 Puntos
                •	Establecer clínicas móviles en zonas afectadas por la contaminación del aire y organizar talleres sobre cómo reducir la exposición a contaminantes. 
                •	Implementar un sistema de transporte público eléctrico y ofrecer subsidios para servicios médicos en comunidades con alta contaminación. 
                •	Repartir mascarillas en zonas de alta contaminación y realizar campañas educativas sobre el impacto de la contaminación en la salud.
                •	Proponer una reducción en el horario laboral para trabajadores de la salud y construir espacios verdes en áreas urbanas para mejorar la calidad del aire. 

                Ejemplos de creaciones de 3 Puntos
                •	Las respuestas que abordan bien uno de los problemas y ofrecen un enfoque parcial en el otro.
                •	Crear centros de salud comunitarios con sistemas de filtración de aire integrados para ofrecer atención médica y mejorar la calidad del aire local. 

                •	Aumentar los horarios de atención médica y controlar las quemas. 
                •	Implementar un sistema de transporte público eléctrico y ofrecer educación sobre prevención de enfermedades relacionadas con la contaminación del aire en clínicas. 
                •	Construir hospitales con sistemas avanzados de purificación de aire en zonas de alta contaminación y proporcionar formación en salud pública para residentes locales. 

                Ejemplos de creaciones de 4 Puntos
                •	Las respuestas que abordan de manera coherente y efectiva ambos problemas presentados.
                •	Establecer centros de salud con tecnología de purificación del aire y servicios médicos integrales en áreas urbanas y rurales, con programas educativos sobre la calidad del aire y salud preventiva. 
                •	Desarrollar un programa integral que incluya atención médica priorizada para población de bajos recursos y de zonas alejadas y campañas de concienciación sobre la reducción de emisiones para mejorar el acceso a la salud y la calidad del aire. 
                •	Crear un proyecto de revitalización urbana que incluya hospitales con sistemas de filtración de aire y un sistema de transporte público eléctrico para reducir la contaminación y mejorar el acceso a la atención médica.
                •	Implementar un programa de salud comunitaria con centros de atención que utilicen tecnologías de purificación del aire y subsidios para energías renovables en zonas con alta contaminación. 
                •	Mejorar la atención en salud a través de la telemedicina y sancionar severamente a los vehículos que presentan altas emisiones. 
                Capacitar al personal del hospital o contratar más personal y crear incentivos o mejorar las regulaciones para las empresas que emiten gases y contaminan el aire. 
                ',
                'valor_opcion' => null
            ],

        ]);
    }
}
