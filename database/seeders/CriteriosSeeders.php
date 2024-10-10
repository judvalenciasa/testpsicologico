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
                'texto' => 'Nota 1: El objetivo de este ítem (2) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e: Un espacio como el que normalmente se utiliza con equipos que podrían ser como los habituales o tal vez mucho mejor de los que se utilizan con normalidad.) del anterior ítem (1), comprendiendo que Gilberto se ha apresurado al dar por hecho la inscripción del 50% de mujeres o que no se puede asegurar que el torneo contará con mejores instalaciones basado solo en su observación inicial. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (2), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (2).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (2) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (1); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (1); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que Gilberto se ha apresurado al dar por hecho la inscripción del 50% de mujeres o que no se puede asegurar que el torneo contará con mejores instalaciones basado solo en su observación inicial.   
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (2).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia y descarte (directa o indirecta) de alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (1), estas fueron:
                a) Más mujeres participando en el evento que en todos los torneos anuales en los que ha estado.
                b) Salones amplios, sonido envolvente y personalizado, pantallas que pueden ecualizarse, resolución 3D, sillas con todas las comodidades y opciones de adaptación al tamaño del participante.
                c) Problemas de logística para determinar si hubo ventajas o desventajas en las competencias y por tanto en las premiaciones. 
                d) Un equipo grande del gobierno local grabando el escenario y publicando en todos los medios sus aportes para luego obtener votaciones en las próximas elecciones.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (2). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (2). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (1)):
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no identifica correctamente el error en el razonamiento de Gilberto.
                •	Ejemplos:
                o	"Porque definitivamente a las mujeres no les llama la atención este tipo de eventos."
                o	"Porque los políticos no cumplen lo que prometen."
                o	"No tiene sentido, seguro que no va a funcionar."
                o	"Los eventos siempre salen mal, así que no tiene caso pensar que será diferente."
                o	"Es imposible que los políticos inviertan en algo útil, siempre mienten."
                o	"Es una tontería preocuparse por quién se inscribe, el torneo va a salir mal como siempre."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante menciona algún aspecto del error de Gilberto, de manera superficial o vaga, sin profundizar.
                •	Ejemplos:
                o	"No puede basar una declaración en solo la primera jornada de inscripción."
                o	"Tal vez todos los gamers hombres vienen a otra hora del día."
                o	"Ese caso no es relevante y no es un hecho, es solo un solo evento."
                o	"Es probable que las cosas cambien en los siguientes días de inscripción."
                o	"Gilberto no puede estar seguro solo por ver algunas mujeres en la primera inscripción."
                o	"Es demasiado pronto para decir si el torneo tendrá mejores instalaciones o no."
                o	"Él solo vio una parte, pero todavía no se sabe si las mujeres se inscribirán en más cantidad."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante identifica bien un error de Gilberto, pero no cubre todos los aspectos del error.
                •	Ejemplos:
                o	"Cuatro personas no son representativas de la cantidad de mujeres que se inscribirán. Gilberto estaba confundido en sus declaraciones."
                o	"No se puede saber si las instalaciones serán mejores solo porque Gilberto vio a más mujeres inscribiéndose en la primera jornada."
                o	"Gilberto no debería sacar conclusiones basadas en lo que vio en la primera hora de inscripción, es posible que no se cumpla con el 50% de mujeres."
                o	"Aunque Gilberto vio a tres mujeres inscribirse, eso no significa que las instalaciones serán mejores. Es necesario esperar a ver si se cumple con el 50%."
                o	"No es posible hacer afirmaciones sobre las instalaciones basadas en solo la primera jornada. Gilberto no tiene suficiente información para asegurar que las cosas serán mejores."
                o	"Aunque más mujeres se inscribieron al principio, eso no significa que se cumplirá con el 50%, y por eso Gilberto no debería haber hecho esa afirmación."
                Explicaciones de 3 puntos:
                •	Criterio: El estudiante identifica claramente un error en el razonamiento de Gilberto, pero no explica bien ambos aspectos (participación femenina e instalaciones)
                •	Ejemplos:
                o	"Gilberto se apresuró a dar sus declaraciones basándose en que había más mujeres en la primera jornada de inscripción. No se puede asegurar que en el resto de las inscripciones haya la misma cantidad de mujeres o que se cumpla con el 50%."
                o	"Gilberto no puede garantizar que las instalaciones serán mejores solo porque observó a más mujeres en una jornada. Es importante esperar a que termine el proceso de inscripción."
                o	"Es cierto que Gilberto vio a más mujeres, pero no puede dar por hecho que las consolas y las pantallas serán mejores solo con esa información. Todavía faltan muchas inscripciones por hacer."
                Explicaciones de 4 puntos:
                •	Criterio: El estudiante reconoce de forma clara el error en las suposiciones de Gilberto sobre las inscripciones y la incertidumbre respecto a las instalaciones.
                •	Ejemplos:
                o	"Gilberto dio por hecho que habría muchas mujeres inscritas solo porque vio algunas en la primera hora de inscripciones. Es probable que luego no se inscriban tantas, por lo que no puede asegurar que las instalaciones serán mejores solo con esa observación."
                o	"El hecho de que Gilberto vio a más mujeres inscribirse en la primera hora no garantiza que se cumpla con el 50% de participación femenina. Sin esa confirmación, no se puede asegurar que el gobierno invertirá en mejorar las instalaciones del torneo."
                o	"Gilberto hizo una declaración basada en una observación muy limitada. No se sabe si el 50% de mujeres se inscribirá, y sin esa cifra, no se puede confirmar que el gobierno local invierta en mejorar las instalaciones. Por eso, no debería haber afirmado que las consolas y el equipo serán mejores."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA Y DESCARTE DIRECTA O INDIRECTA DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (1)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica correctamente el error en el razonamiento de Gilberto ni descarta las alternativas incorrectas, o su explicación es irrelevante.
                •	Referencia directa: “Elegí esta opción porque no importa cuántas mujeres participen, lo que importa son las instalaciones, como se menciona en la opción b.”
                •	Referencia indirecta: “El número de mujeres inscritas no tiene importancia, lo que realmente importa es que el evento salga bien, así que me enfoqué más en el equipo.”
                •	Referencia directa: “Escogí esta opción porque el gobierno siempre está involucrado en eventos, como dice la opción d, así que es probable que mejoren las instalaciones.”
                •	Referencia indirecta: “No creo que el número de participantes cambie nada, ya que el gobierno siempre termina involucrándose en eventos como estos para mejorar la infraestructura.”
                •	Referencia directa: “No creo que sea relevante si las mujeres participan o no, lo importante es que haya gente, como en la opción a.”
                •	Referencia indirecta: “Las inscripciones no son lo importante. Lo esencial es que haya buena participación general, sin importar cuántas mujeres se inscriban.”
                
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona vagamente un aspecto del error de Gilberto o descarta una alternativa incorrecta sin explicarla bien.
                •	Referencia directa: “Gilberto se apresuró en su juicio. No es seguro que habrá tantas mujeres, aunque la opción a diga que hay más mujeres participando.”
                •	Referencia indirecta: “Gilberto se adelantó al pensar que más mujeres van a inscribirse basándose solo en las primeras inscripciones. Es un error.”
                •	Referencia directa: “Gilberto no puede decir que las instalaciones van a mejorar solo porque vio algo, como en la opción b.”
                •	Referencia indirecta: “Es difícil pensar que las instalaciones mejorarán solo por ver algunos avances en la organización. Hay más cosas que se deben considerar.”
                •	Referencia directa: “Aunque vio a más mujeres inscribirse, no puede estar seguro de lo que va a pasar, como lo que dice en la opción d del gobierno grabando.”
                •	Referencia indirecta: “No se puede garantizar nada con solo ver algunas inscripciones. La intervención del gobierno no garantiza que las instalaciones serán mejores.”
                
                Explicaciones de 2 puntos:
                Criterio: El estudiante menciona correctamente uno de los errores de Gilberto y descarta una o varias alternativas incorrectas, pero no cubre ambos aspectos por completo.
                •	Referencia directa: “Gilberto no puede asumir que el torneo tendrá mejores instalaciones solo por lo que vio, como en la opción b, que menciona consolas y pantallas. Eso no se puede saber aún.”
                •	Referencia indirecta: “No podemos concluir que habrá mejores instalaciones solo por ver mejoras técnicas en algunos aspectos. Todavía es incierto si mejorarán el equipo.”
                •	Referencia directa: “Aunque Gilberto vio a más mujeres inscribirse, no significa que va a haber el 50%. Además, lo que menciona la opción d sobre el gobierno grabando no garantiza nada sobre el torneo.”
                •	Referencia indirecta: “Aunque vio más mujeres inscribirse, eso no asegura que llegarán al 50%. Tampoco que el gobierno esté grabando garantiza mejoras en las instalaciones.”
                •	Referencia directa: “Gilberto no debería apresurarse, solo porque vio a más mujeres no significa que se cumpla con el 50%. Las instalaciones que menciona la opción b no tienen relación con las inscripciones.”
                •	Referencia indirecta: “Es un error pensar que solo porque hay más mujeres inscritas se va a cumplir el 50%. Y el equipo que se menciona no depende directamente de eso.”
                
                Explicaciones de 3 puntos:
                Criterio: El estudiante explica bien uno de los problemas de Gilberto y descarta adecuadamente una o varias alternativas incorrectas, pero no cubre ambos aspectos de manera completa.
                •	Referencia directa: “Gilberto se apresuró al decir que habrá muchas mujeres en el torneo. No puede basarse solo en una observación limitada, como en la opción a, que dice que hay más mujeres participando. Tampoco puede asumir que el gobierno va a mejorar las instalaciones, como en la opción d.”
                •	Referencia indirecta: “Es un error apresurarse a decir que habrá más mujeres en el torneo. Además, el hecho de que el gobierno grabe no garantiza que inviertan en mejoras.”
                •	Referencia directa: “Gilberto vio solo una pequeña parte del proceso de inscripción. No puede asumir que el 50% serán mujeres. Además, la opción b sobre consolas y pantallas mejores no tiene relación con las mujeres que se inscriben.”
                •	Referencia indirecta: “No puede asegurarse que el 50% de las inscripciones serán de mujeres solo con una pequeña observación, y las mejoras en el equipo no están relacionadas con eso.”
                •	Referencia directa: “Aunque Gilberto vio a algunas mujeres inscribirse, no significa que se va a cumplir el 50%. Tampoco es seguro que el gobierno vaya a invertir en el torneo, como dice la opción d.”
                •	Referencia indirecta: “Aunque Gilberto vio más mujeres inscribirse, eso no asegura el 50%, ni que el gobierno vaya a invertir en mejores instalaciones.”
                
                Explicaciones de 4 puntos:
                Criterio: El estudiante identifica claramente ambos errores en el razonamiento de Gilberto y descarta de manera adecuada una o varias alternativas incorrectas.
                •	Referencia directa: “Gilberto no puede dar por hecho que habrá el 50% de mujeres participando solo porque vio a algunas en la primera jornada. La opción a menciona que hay más mujeres participando, pero no es suficiente para sacar esa conclusión. Además, no se puede asegurar que las instalaciones serán mejores, como dice la opción b, porque eso depende de más factores que aún no están claros.”
                •	Referencia indirecta: “No se puede concluir que habrá 50% de participación femenina solo por ver algunas inscripciones. Además, las mejoras en las instalaciones aún no están aseguradas.”
                •	Referencia directa: “La observación de Gilberto no es suficiente para concluir que el 50% de las inscripciones serán de mujeres. La opción d habla de un equipo del gobierno grabando el evento, pero eso no garantiza que habrá mejores instalaciones. Hay que esperar a que más mujeres se inscriban y ver qué sucede.”
                •	Referencia indirecta: “Es apresurado asumir que el 50% de las inscripciones serán de mujeres. Y la intervención del gobierno no garantiza mejores condiciones en las instalaciones.”
                •	Referencia directa: “Gilberto se apresuró al decir que habría muchas mujeres participando. Solo porque vio a algunas no significa que se cumplirá el 50%. Además, no puede asegurar que las instalaciones serán mejores, como dice la opción b, ya que aún no hay información suficiente para confirmar eso.”
                •	Referencia indirecta: “No es suficiente ver algunas inscripciones para decir que el 50% serán mujeres. Tampoco podemos estar seguros de las mejoras en el equipo solo con esa información.”',
                'valor_opcion' => null
            ],

            //Item 4
            [
                'id_criterio' => 2,
                'id_pregunta' => 15,
                'texto' => 'Nota 1: El objetivo de este ítem (4) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e: Si nos ubicamos en un lugar alto visualizamos nuestro alrededor, pero en cierto punto la vista se pierde en el firmamento y ni con un telescopio potente observaríamos ciudades de otros continentes debido a la curvatura del Plantea. La hora en la que sale y se pone el sol es distinta en cada lugar del mundo.) del anterior ítem (3), identificando premisas justificables a partir de la observación y la experiencia que permiten concluir que el Planeta Tierra es una circunferencia.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (4), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (4).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (4) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de alternativas incorrectas proporcionadas al estudiante en el anterior ítem (3); y el segundo escenario es explicación que incluye referencia y descarte directa o indirecta de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (3); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante identifica premisas justificables a partir de la observación y la experiencia que permiten concluir que el Planeta Tierra es una circunferencia.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (4).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (3), estas fueron:
                a)	En cartografía siempre se nos ha mostrado a través de los mapamundis que el Planeta Tierra es una esfera, eso indica que la representación gráfica es infalible. Distintos textos sagrados de algunas de las religiones del mundo han determinado históricamente que la Tierra es redonda.
                b)	Si la tierra fuera plana, cómo se explica que el agua de los mares no se derrama en algún punto, bien sea en el Norte, Sur, Oeste o Este. Los miles de satélites que actualmente orbitan alrededor del planeta han tomado imágenes en las que se observa que el planeta Tierra es redondo. 
                c)	Por más que se quisiera, la luz del sol no puede reflejar la misma sombra al mismo tiempo sobre distintos objetos distribuidos a distancias significativas en el espacio terrestre. La rotación es otra evidencia que no deja dudas respecto de la circunferencia del Planeta Tierra.
                d)	Los pilotos de aerolíneas comerciales afirman que los aviones no viajan en línea recta en aquellos vuelos de largas horas. Además, la Física nos dice que si el Planeta tierra fuera plano la gravedad funcionaría con atracciones desordenadas y no de manera uniforme hacia el centro de la masa.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia y descarte directa e indirecta de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo del este ítem (4). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (4). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA A LAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (3)):
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no identifica correctamente las premisas válidas a partir de la observación y experiencia o hace comentarios irrelevantes.
                •	Ejemplos:
                o	"Se necesita tener dos dedos de frente para saber que el planeta no es plano."
                o	"Definitivamente las teorías conspiracionistas están dando de qué hablar."
                o	"La ciencia, la teoría y los sistemas de creencias culturales no son determinantes en esta cuestión."
                o	"El planeta gira alrededor del sol y no el sol alrededor del planeta como se ha pensado."
                o	"Es obvio que la Tierra es redonda, solo los que creen en conspiraciones dicen lo contrario."
                o	"Eso de que la Tierra es plana no tiene ni pies ni cabeza, todos sabemos que es redonda."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante menciona algún aspecto de las premisas observables, de manera superficial o vaga, sin profundizar.
                •	Ejemplos:
                o	"Las premisas son comprobables o se pueden validar desde la observación y la experiencia."
                o	"A partir de esas premisas específicas concluyo que el Planeta Tierra es redondo."
                o	"Las premisas no son producto de la ciencia, la teoría o los sistemas de creencias culturales."
                o	"Estoy seguro(a) de que el planeta es redondo, y no necesito de la ciencia, la teoría o los sistemas de creencias culturales para estar convencido, basta con observar y pensar en las experiencias."
                o	"Las observaciones y experiencias me permiten convencerme de que el Planeta Tierra es redondo, pero también es importante considerar los argumentos científicos, teóricos o de los sistemas de creencias culturales."
                o	"No son premisas fundadas precisamente en la ciencia, de la ciencia se puede desconfiar también como de los sistemas de creencias."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante menciona observaciones o experiencias que justifican la idea de que la Tierra es redonda, pero no profundiza en ambas.
                •	Ejemplos:
                o	"Las observaciones me permiten concluir que el Planeta es redondo y no plano."
                o	"La experiencia de la zona horaria permite comprobar que la Tierra es esférica sin necesidad de la ciencia, la teoría o los sistemas de creencias culturales."
                o	"Las demás alternativas de respuesta incluían razones fundadas en la ciencia, en la teoría o en los sistemas culturales."
                o	"La experiencia nos dice que en otras partes del mundo el sol sale o se oculta a una hora distinta a la local. Esto no es ciencia o teoría y, sin embargo, me permite concluir correctamente que la Tierra es redonda."
                o	"Saber que no puedo ver otra ciudad de un continente lejano es una prueba fehaciente de que la Tierra es una esfera. No estoy seguro de cómo funcione la salida del sol en otras partes del mundo, tal vez salga al mismo tiempo que aquí."
                o	"Las premisas seleccionadas no hacen parte de la ciencia, de la cual se desconfía, así como de ciertos gobiernos."
                Explicaciones de 3 puntos:
                •	Criterio: El estudiante explica de manera detallada una de las premisas, pero no ambas de manera completa.
                •	Ejemplos:
                o	"Observar ciudades de otros continentes desde un punto alto con un telescopio es un imposible por más potente que sea el dispositivo. Terminamos viendo el firmamento o las estrellas, así que se trata de observaciones que no provienen de la ciencia. Algo similar ocurre con la puesta y salida del sol en otras partes del mundo."
                o	"La experiencia nos dice que en otras partes del mundo el sol sale o se oculta a una hora distinta a la local. Existen distintas zonas horarias, y eso lo sé porque he hablado por teléfono o por internet con un familiar y no coinciden los horarios. Me convenzo con ello de que el Planeta es redondo. Tendría que pedir prestado un telescopio y subir una montaña para ver si se ve o no una ciudad lejana."
                o	"La experiencia de ver el horizonte desaparecer y las zonas horarias me convencen de que la Tierra no es plana. No se necesitan teorías complicadas para entender esto."
                Explicaciones de 4 puntos:
                •	Criterio: El estudiante reconoce de forma clara y lógica las premisas observables y experiencias que justifican la idea de que la Tierra es redonda, sin recurrir a ciencia, teoría o sistemas de creencias.
                •	Ejemplos:
                o	"Las premisas son evidenciables desde la experiencia o la observación, no se basan en sistemas de creencias culturales o en la ciencia. En todo caso, me permiten confirmar que la Tierra es esférica."
                o	"Las demás alternativas de respuesta se fundamentan o basan en la ciencia, en la teoría o en los sistemas de creencias, mientras que las premisas de la alternativa seleccionada las puedo validar o comprobar observando desde un punto alto con un telescopio. Nadie ve un continente que esté separado por el mar, o reflexionando sobre las experiencias de la puesta y salida del sol o las zonas horarias en distintas partes del mundo. Ambas son razones válidas que me permiten concluir que el Planeta Tierra es redondo."
                o	"El hecho de que al mirar desde un lugar alto no se puede ver otro continente y que las zonas horarias varían me demuestra, sin depender de la ciencia, que la Tierra es redonda. Estas son observaciones que cualquiera puede comprobar y no dependen de teorías científicas."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA Y DESCARTE DIRECTA O INDIRECTA DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (3)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia a las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica correctamente las premisas justificables a partir de la observación y la experiencia, ni descarta adecuadamente las alternativas incorrectas, o su explicación es irrelevante.
                •	Referencia directa: “Elegí esta opción porque no importa si los textos sagrados dicen que la Tierra es redonda, como se menciona en la opción a), todos creen lo que quieren."
                •	Referencia indirecta: “No importa cuántas imágenes de satélites se muestren, siempre habrá gente que no las cree, como sugieren algunas teorías.”
                •	Referencia directa: “Seleccioné esta opción porque los satélites muestran imágenes editadas, como en la opción b), y no se puede confiar en eso.”
                •	Referencia indirecta: “Las sombras pueden cambiar por muchas razones, así que no tiene sentido basarse en ellas para determinar la forma de la Tierra.”
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona vagamente una premisa justificable, pero no descarta de manera clara las alternativas incorrectas o se enfoca demasiado en una de ellas sin explicarla completamente.
                •	Referencia directa: “Elegí esta opción porque las observaciones directas son más confiables que los textos religiosos, como se menciona en la opción a), pero no estoy seguro.”
                •	Referencia indirecta: “Aunque algunos pilotos afirman cosas sobre los vuelos, lo que realmente importa es cómo se comporta el sol y las sombras.”
                •	Referencia directa: “La opción b) menciona imágenes satelitales, pero no son necesarias para probar que la Tierra es redonda, solo basta observar el horizonte.”
                •	Referencia indirecta: “Es difícil confiar completamente en la física si no podemos ver directamente la curvatura del planeta.”
                Explicaciones de 2 puntos:
                Criterio: El estudiante menciona correctamente una de las premisas justificables y descarta una o varias alternativas incorrectas, pero no cubre todos los aspectos necesarios para una explicación completa.
                •	Referencia directa: “Elegí esta opción porque puedo observar cómo el horizonte desaparece gradualmente, lo que me demuestra que la Tierra es redonda, algo que no necesito confirmar con satélites, como se menciona en la opción b).”
                •	Referencia indirecta: “Aunque algunos creen que las sombras demuestran la rotación, lo que realmente evidencia que la Tierra es redonda es cómo desaparece el horizonte desde lugares altos.”
                •	Referencia directa: “La opción a) menciona textos sagrados que dicen que la Tierra es redonda, pero la realidad es que observar el horizonte es mucho más confiable.”
                •	Referencia indirecta: “No necesitamos depender de las opiniones de los pilotos para saber que la Tierra es redonda; simplemente observando el horizonte es suficiente.”
                Explicaciones de 3 puntos:
                Criterio: El estudiante explica una de las premisas justificables de manera detallada y descarta adecuadamente una o varias alternativas incorrectas, pero no cubre ambos aspectos de la explicación por completo.
                •	Referencia directa: “La opción b) menciona que los satélites confirman que la Tierra es redonda, pero no necesitamos eso. Al observar cómo el horizonte desaparece y cómo cambia la hora en diferentes partes del mundo, es fácil concluir que la Tierra es redonda."
                •	Referencia indirecta: “Aunque algunos textos religiosos afirman que la Tierra es redonda, lo más convincente es ver cómo el sol se comporta en distintos lugares del mundo.”
                •	Referencia directa: “Aunque la opción c) menciona las sombras generadas por la luz del sol, basta con observar el horizonte y notar que no se pueden ver otros continentes para darse cuenta de que la Tierra no es plana."
                •	Referencia indirecta: “Los aviones no viajan en línea recta, pero lo que realmente demuestra la curvatura de la Tierra es que no podemos ver ciudades de otros continentes desde un punto alto."
                Explicaciones de 4 puntos:
                Criterio: El estudiante explica de manera clara y completa ambas premisas justificables y descarta correctamente una o varias alternativas incorrectas.
                •	Referencia directa: “La opción b) menciona los satélites que muestran que la Tierra es redonda, pero podemos llegar a la misma conclusión observando cómo el horizonte desaparece cuando miramos desde un lugar elevado. Además, al notar cómo el sol sale en diferentes momentos del día en diferentes lugares, es claro que la Tierra es redonda."
                •	Referencia indirecta: “Aunque algunos textos religiosos afirman que la Tierra es redonda, lo más confiable es observar cómo el horizonte desaparece desde un lugar alto y cómo cambia la salida del sol en distintas partes del mundo."
                •	Referencia directa: “Los textos religiosos mencionados en la opción a) no son necesarios para confirmar que la Tierra es redonda. Simplemente observando el horizonte y viendo cómo el sol sale en momentos diferentes en el mundo es suficiente para llegar a esa conclusión."
                •	Referencia indirecta: “aunque se piense que los aviones no viajan en línea recta, lo más convincente es observar que desde un lugar alto no podemos ver otros continentes, y que la hora varia conforme a la posición del sol en otros lugares del mundo, lo que confirma la curvatura del planeta."',
                'valor_opcion' => null
            ],

            //Item 6
            [
                'id_criterio' => 3,
                'id_pregunta' => 17,
                'texto' => 'Nota 1: El objetivo de este ítem (6) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal a: Mariana se apresuró en las generalizaciones, de modo que concluye de manera general sin tener en la cuenta que no en todas las culturas y países del continente se aprueba el matrimonio infantil ni se quebrantan las leyes.) del anterior ítem (ítem 5), comprendiendo que Mariana incurrió en generalizaciones apresuradas sobre el matrimonio infantil y el incumplimiento de las normas en Asia. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (6), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (6).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (6), tienes dos posibles escenarios: el primero es una explicación que no incluye referencia a las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (5); y el segundo escenario es una explicación que incluye la referencia (directa o indirecta) y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (5). En ambos escenarios, la puntuación se asignará en función de evaluar si el estudiante comprende y explica correctamente que Mariana incurrió en generalizaciones apresuradas sobre el matrimonio infantil y el incumplimiento de las normas en Asia.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (6).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (5), estas fueron:
                
                b)	 Mariana no explicó nada acerca de la vestimenta, los sistemas políticos, la gastronomía (tipo de comida) o la música del continente asiático, y esos son aspectos importantes de la cultura. 
                
                c)	Mariana se dedicó a leer las diapositivas y en una exposición no se deben leer las diapositivas al pie de la letra, sino explicarlas para dar a conocer la comprensión que se tiene del tema. 
                
                d)	No es cierto que en esos países sea común el matrimonio infantil debido a factores socioeconómicos, sino que se debe a cuestiones culturales o al sistema de creencias y para ellos es normal que esto suceda.
                
                e)	Estas no son las principales características culturales de Asia que debió exponer Mariana, debió hablar de la diversidad de lenguas y religiones como el budismo, hinduismo, islamismo, confucianismo y taoísmo, también de la arquitectura. 
                
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (6). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo de este ítem (6) y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (6). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA A LAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (5)):
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no identifica correctamente el error de Mariana o hace comentarios irrelevantes.
                •	Ejemplos:
                o	"Mariana debió pensar mejor lo que quería expresar, muchas veces nos apresuramos a decir cosas que tal vez nos cuesten la nota."
                o	"Me parece absurdo que los niños se casen teniendo toda una vida por delante, deberían estar jugando."
                o	"Mariana solo estaba leyendo lo que decía en sus diapositivas, no creo que haya hecho algo mal."
                o	"Es su opinión, pero no estoy seguro de qué hizo mal."
                o	"La profesora solo quería ser estricta con la nota."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante menciona algún aspecto del error de Mariana, de manera superficial o vaga, sin profundizar.
                •	Ejemplos:
                o	"Mariana se apresuró generalizando pues no estoy seguro(a) de que eso ocurra en todas partes de Asia."
                o	"La anarquía es algo que sucede esporádicamente, las leyes que regulan el matrimonio infantil son claras."
                o	"Creo que hay uno o dos países en Asia en los que todo funciona muy bien. China es una potencia mundial."
                o	"Mariana no tuvo en cuenta que no en todos los países se casan niños, pero no estuvo tan mal."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante menciona las generalizaciones de Mariana, pero no cubre todos los aspectos del error.
                •	Ejemplos:
                o	"La generalización fue apresurada, las observaciones particulares no siempre conducen a una generalización correcta."
                o	"Se incurrió en una generalización del matrimonio infantil al afirmar que es común o normal en todo Asia, como si en los demás países fuese igual."
                o	"Se incurrió en una generalización del incumplimiento de las leyes en el continente, sin tener en cuenta que no todas las leyes se incumplen en esos países y en el continente."
                o	"Mariana concluyó algo que no es cierto para todo el continente. Si no se cumplieran las leyes, al menos por la mayoría de los habitantes, todo sería un caos."
                Explicaciones de 3 puntos:
                •	Criterio: El estudiante explica de manera detallada una de las generalizaciones, pero no ambas de manera completa.
                •	Ejemplos:
                o	"Existen muchos más países en Asia en los que no es común o normal el matrimonio infantil. Las normas se hicieron para cumplirlas, aunque algunos las violen."
                o	"Existen otras condiciones en las que las personas se casan cuando son mayores de edad. La generalidad no es que todas las leyes se incumplen en esos 4 países y menos en todos los países de Asia."
                o	"Posiblemente no se cumplan las leyes que regulan el matrimonio infantil en algunos países de Asia, pero eso no significa que no se cumplan otras leyes en esos y en otros países. Mariana debió expresarlo de otra manera."
                Explicaciones de 4 puntos:
                •	Criterio: El estudiante identifica y explica claramente las generalizaciones apresuradas de Mariana sobre el matrimonio infantil y el incumplimiento de las normas en Asia.
                •	Ejemplos:
                o	"No en todos los países de Asia es normal el matrimonio infantil. De hecho, la generalidad no es que todas las leyes se incumplen en esos 4 países y menos en todos los países de Asia."
                o	"Mariana está generalizando a partir de situaciones particulares de esos 4 países, como que el matrimonio infantil sea normal, pero no aplica para todo el continente. También generalizó apresuradamente respecto de las leyes: es posible que algunas personas no cumplan algunas leyes, pero la generalidad es que las leyes se cumplen, y no todo el continente incumple las leyes."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (5)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                Ejemplos de respuestas con referencia a alternativas incorrectas:
                0 puntos:
                •	Criterio: El estudiante no identifica correctamente el error de Mariana o hace comentarios irrelevantes, aunque mencione o descarte alternativas incorrectas de manera inadecuada.
                •	Ejemplos:
                o	"Elegí esta opción porque las leyes en Asia no son importantes, igual nadie las sigue, como dicen en la opción d)."
                o	"No importa si Mariana habló de matrimonios infantiles o no, lo importante es que no mencionó lo de las lenguas y religiones, como dice la opción e)."
                o	"Creo que lo importante es que Mariana no explicó bien lo de la vestimenta y la música, como menciona la opción b), no el matrimonio infantil."
                1 punto:
                •	Criterio: El estudiante menciona algún aspecto del error de Mariana de forma superficial y descarta una o más alternativas incorrectas, pero lo hace sin mucha profundidad ni relación con el objetivo del ítem.
                •	Ejemplos:
                o	"Mariana se equivocó al decir que en toda Asia el matrimonio infantil es normal, pero al menos no se centró en cosas menos importantes como la música y la comida, como dice la opción b)."
                o	"Es verdad que Mariana se equivocó, pero no me parece que el problema sea que leyó las diapositivas, como dice la opción c), porque eso es un error menor."
                o	"Mariana no debió generalizar lo del matrimonio infantil, pero no es tan relevante lo que no mencionó sobre las lenguas y religiones, como dice la opción e)."
                2 puntos:
                •	Criterio: El estudiante menciona las generalizaciones apresuradas de Mariana, y descarta una o más alternativas incorrectas de manera parcial, pero sin cubrir todos los aspectos del error.
                •	Ejemplos:
                o	"Mariana generalizó sobre el matrimonio infantil en toda Asia, lo cual no es cierto, y tampoco es tan importante que no haya hablado sobre la vestimenta y la música, como dice la opción b), porque eso no es lo que define un error en su exposición."
                o	"Es cierto que Mariana hizo una generalización apresurada sobre el matrimonio infantil, pero no creo que sea relevante que haya leído las diapositivas, como dice la opción c), porque el problema real fue la información incorrecta."
                o	"No todos los países de Asia incumplen las leyes, como Mariana dijo, y tampoco es cierto que la diversidad de lenguas y religiones sea el principal problema de su exposición, como dice la opción e)."
                3 puntos:
                •	Criterio: El estudiante explica de manera detallada uno de los errores de Mariana y descarta correctamente una o más alternativas incorrectas, aunque no cubra ambos aspectos completamente.
                •	Ejemplos:
                o	"Mariana generalizó al decir que en toda Asia el matrimonio infantil es normal, lo cual no es cierto, ya que es solo en algunos países. Tampoco era tan importante que explicara sobre la música y la vestimenta, como menciona la opción b), porque eso no era lo principal en su exposición."
                o	"Mariana cometió el error de generalizar sobre el incumplimiento de las leyes en Asia, pero no creo que sea relevante si leyó o no las diapositivas, como menciona la opción c). Lo que importa es que su información fue incorrecta."
                o	"Mariana debió ser más cuidadosa con las generalizaciones sobre el matrimonio infantil en Asia. Además, lo de las lenguas y religiones, como menciona la opción e), no es lo que define si su exposición fue correcta o no."
                4 puntos:
                •	Criterio: El estudiante identifica y explica claramente ambos errores de Mariana y descarta una o más alternativas incorrectas de manera adecuada y bien contextualizada.
                •	Ejemplos:
                o	"Mariana hizo una generalización apresurada al decir que el matrimonio infantil es común en toda Asia, lo cual es falso, ya que solo ocurre en algunos países específicos. Además, su error no fue no hablar de la música y la vestimenta, porque eso no afecta la precisión de la información que proporcionó."
                o	"No es cierto que en toda Asia las leyes se incumplen, como Mariana sugirió. Tampoco es relevante que haya leído las diapositivas al pie de la letra, como menciona la opción c), ya que el problema principal fue su información incorrecta sobre el matrimonio infantil y las leyes."
                o	"Mariana hizo una generalización incorrecta al decir que el matrimonio infantil es normal en toda Asia, y también al afirmar que las leyes no se cumplen. Además, no creo que el problema principal de su exposición haya sido que no mencionara las lenguas y religiones porque eso no es lo que causó el error."',
                'valor_opcion' => null
            ],

            //Item 8
            [
                'id_criterio' => 4,
                'id_pregunta' => 20,
                'texto' => 'Nota 1: El objetivo de este ítem (8) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal b) del anterior ítem (7), comprendiendo que aunque importar o producir la materia prima biodegradable es importante, no garantiza por sí solo que se logren los mismos resultados que otras empresas, ya que hay muchos otros factores que influyen. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (8), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (8)
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (8) tienes dos posibles escenarios: el primero es explicación que no incluye referencia a las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (7); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (7); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que, aunque importar o producir la materia prima biodegradable es importante, no garantiza por sí solo que se logren los mismos resultados que otras empresas, ya que hay muchos otros factores que influyen.   
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (8).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (7), estas fueron:
                a)	No. Importar almidones de yuca o maíz para la fabricación de empaques plásticos biodegradables no es tan buen negocio teniendo en cuenta que esos productos se cosechan en abundancia en nuestro país. 
                c)	Sí. Los procesos fisicoquímicos a los que se somete el maíz en países asiáticos garantizan calidad y reducción de costos, de manera que si se importan la empresa ofrecerá productos a excelentes precios. 
                d)	No. Con la situación actual de la economía es difícil ofrecer empaques plásticos a excelentes precios, debido a que los precios del mercado no son estables y posiblemente se llegue a producir pérdidas en insumos demasiado costosos. 
                e)	Sí. Al producir el almidón de yuca en la empresa e importar el almidón del maíz se garantiza un equilibrio en los costos de producción, por tanto, se diversifican los productos y se fabrican en poco tiempo.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia(directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (8). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (8). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE LAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (7)):
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no menciona otros factores que afectan los resultados de la empresa, o hace comentarios irrelevantes.
                •	Ejemplos:
                o	"La materia prima a partir de almidones de la yuca o el maíz es necesaria para la fabricación de plásticos biodegradables."
                o	"Lograr resultados similares a los de las demás empresas requiere de una muy buena gerencia."
                o	"Existen otras formas de fabricar plásticos biodegradables menos complicadas."
                o	"Los plásticos biodegradables son una necesidad urgente."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante menciona que hay otros factores, pero no explica en detalle cuáles son ni cómo afectan el proceso.
                •	Ejemplos:
                o	"Las importaciones son importantes, pero no son determinantes para los fines esperados."
                o	"Producir la materia prima es rentable, pero la empresa aspira a cumplir con varios objetivos que requieren de otros procesos."
                o	"Producir la materia prima no necesariamente garantiza bajos costos o tiempos, importarla puede ser una buena opción, pero no creo que se pueda garantizar lo que la empresa quiere lograr."
                o	"No se puede garantizar que la empresa logre resultados similares a los de las otras empresas, no se sabe de dónde importan la materia prima o cómo la producen."
                o	"La importación o producción de la materia prima dependen de muchos factores, la fabricación de estos plásticos no es sencilla bajo esas condiciones."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante menciona varios factores que influyen en los resultados de la empresa y explica cómo estos pueden afectar la producción y la competitividad.
                •	Ejemplos:
                o	"Importar la materia prima puede funcionar para reducir los tiempos de producción, producir la materia prima en el país puede ayudar a reducir los costos, pero lograr diversificar los productos requiere de diseño o maquinaria especializada. En todo caso, las empresas requieren distintos procesos y los aspectos relativos a la obtención de la materia prima no garantizan reducir costos y tiempos y ofrecer distintos diseños en el mercado."
                o	"Las otras empresas del sector pueden estar empleando maquinaria especializada o cualquier otro tipo de procesos y gestiones que contribuyen a lograr esos resultados. Si bien es factible que al importar o producir la materia prima se puedan lograr esos resultados, se requiere analizar otros procesos para que la empresa obtenga resultados similares a los de las otras empresas."
                o	"El precio del dólar puede ser un factor que afecte la importación de la materia prima, y la producción de la materia prima puede tardar mucho tiempo. Es necesario saber si la empresa cuenta con la maquinaria y/o la mano de obra necesaria para garantizar que se logren resultados similares a los de las otras empresas."
                o	"La información con la que cuenta la empresa no es suficiente para garantizar resultados similares a los de las otras empresas. Es necesario analizar más detalles, inclusive los normativos de cada país."
                o	"Aunque la empresa implemente esas estrategias, debe tener en cuenta otras variables o factores de orden económico, laboral, técnico, de diseño, tecnologías o desarrollos investigativos/científicos para lograr resultados similares a los de las otras empresas."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE LAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (7)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no menciona otros factores que afectan los resultados de la empresa, no descarta adecuadamente las alternativas incorrectas o hace comentarios irrelevantes.
                •	Ejemplos:
                o	"La opción a) dice que la yuca y el maíz se cosechan aquí, así que todo debería funcionar bien solo con eso."
                o	"La empresa debe importar el almidón de maíz como dice la opción c), así se asegura que va a producir productos baratos y de buena calidad."
                o	"Si siguen las recomendaciones sobre la economía, la empresa no tendrá problemas. No es necesario preocuparse por otros factores."
                o	"Importar almidón de maíz garantiza éxito. La opción e) habla de un equilibrio en costos que es lo único que necesitan."
                o	"Al importar el maíz, como dice la opción c), ya se tiene todo bajo control, no hace falta preocuparse por otras cosas."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante menciona vagamente otros factores sin explicarlos en detalle o descarta de forma superficial una o varias alternativas incorrectas.
                •	Ejemplos:
                o	"La opción a) dice que no es buen negocio importar lo que se cosecha aquí, pero eso no garantiza el éxito porque la empresa también debe tener buenos procesos."
                o	"Importar la materia prima como sugiere la opción c) ayuda, pero no asegura que se logren buenos resultados porque hay otros factores importantes."
                o	"Aunque la opción e) hable de un equilibrio en costos, eso no asegura los mismos resultados que otras empresas. Hacen falta otras cosas, pero no sé cuáles."
                o	"A pesar de la inestabilidad de los precios, la producción también depende de tener una buena estrategia, no solo de los precios de la materia prima."
                o	"No basta con cosechar la yuca y el maíz en nuestro país, como dice la opción a), también necesitamos tener procesos eficientes."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante menciona claramente varios factores que influyen en los resultados de la empresa y descarta de manera adecuada una o varias alternativas incorrectas, explicando por qué no son suficientes para alcanzar el éxito.
                •	Ejemplos:
                o	"Aunque se mencione que importar de Asia reduce costos, no garantiza el éxito porque las otras empresas pueden estar usando tecnología más avanzada o teniendo mejores procesos de producción."
                o	"La opción a) sugiere que no es buen negocio importar lo que se cosecha aquí, pero incluso produciendo la materia prima localmente no asegura que se logren los mismos resultados que otras empresas, ya que influyen muchos otros factores como el tipo de maquinaria y la mano de obra especializada."
                o	"Pese a la información sobre los problemas de la economía, incluso con precios estables, la empresa necesitaría tener un buen control de los procesos, diseño de productos y eficiencia en la producción para competir con otras."
                o	"Aunque la opción e) hable de diversificar productos al producir y al importar, eso no garantiza que la empresa logre resultados iguales a otras. Se necesita analizar factores como la calidad de la producción, la maquinaria y los costos de distribución."
                o	"El hecho de producir la materia prima no es suficiente. La empresa también debe tener buena tecnología y una estrategia eficiente para alcanzar resultados similares a los de otras empresas del sector."
                o	"La opción c) dice que importar garantiza precios bajos, pero eso no es suficiente para asegurar que la empresa tendrá el mismo éxito que otras. También se necesitan otros factores, como buenos canales de distribución y procesos de producción eficientes."
                o	"Aunque se hable de un equilibrio en los costos, eso por sí solo no garantiza que la empresa logre competir con otras. Deben tomar en cuenta los factores técnicos y económicos adicionales, como la tecnología empleada y los precios de exportación."',
                'valor_opcion' => null
            ],

            //Item 10
            [
                'id_criterio' => 5,
                'id_pregunta' => 25,
                'texto' => 'Nota 1: El objetivo de este ítem (10) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal d) del anterior ítem (9), comprendiendo que varias observaciones específicas no garantizan iguales características o resultados para una situación posterior. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (10), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (10) 
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (10) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (9); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (9); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que varias observaciones específicas no garantizan iguales características o resultados para una situación posterior.   
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (10).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (9), estas fueron:
                a) Que la experiencia no se improvisa y que tal como había previsto en conversaciones anteriores a la visita de los colegios, los jóvenes no emiten tanto CO₂ al año como lo hacen los adultos, incluso si los adolescentes se encuentran en el colegio y los adultos laborando. 
                b) Que por más que piense o intuya los resultados de los promedios del próximo colegio, las ordenes son claras y deben cumplirse, especialmente si se trata de un experto que trabaja para un organismo multilateral que viene desarrollando estudios de altas responsabilidades. 
                c) Que no importa si no realiza el promedio en el siguiente colegio, es más importante ser eficientes, ahorrar gastos de viáticos, no caer en sobrecostos y continuar contaminando con sus desplazamientos cuando se sabe cuál es la tendencia de emisiones de CO₂ de los adolescentes
                e) Que realice nuevamente los promedios anteriores, pues no es posible que en una ciudad en donde existen tantos desplazamientos al día en vehículos propulsados por motores de combustibles fósiles los adolescentes no superen 1 tonelada de CO₂ emitida al año.      
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (10). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (10). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (9)):
                
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no identifica claramente el error de razonamiento del experto.
                •	Ejemplos de explicaciones de 0 puntos:
                o	"El experto delegado debe cumplir con lo que se le encomendó."
                o	"Cómo es posible que en un mundo con calentamiento global solo se emita 1 tonelada de CO₂ al año."
                o	"Hasta no ver no creer."
                o	"No tiene sentido que vuelva a hacer el cálculo si ya sabe que va a ser lo mismo."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante reconoce de manera general el problema, pero no lo explica de forma completa.
                •	Ejemplos de explicaciones de 1 punto:
                o	"El experto debe realizar el promedio de la huella de carbono en el siguiente colegio para que el estudio sea confiable."
                o	"Es posible que los adolescentes de los colegios anteriores contaminen menos, pero no se sabe qué sucederá."
                o	"Es mejor asegurarse de la emisión de los adolescentes de todos los colegios."
                o	"El experto tiene que medir a todos para estar seguro del resultado."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante identifica el error del experto y explica de manera lógica por qué no puede sacar conclusiones sin verificar el próximo colegio.
                •	Ejemplos de explicaciones de 2 puntos:
                o	"El experto no puede asegurar que el siguiente colegio contamine igual que los demás, aunque lo parezca. Necesita verificarlo para confirmar que emiten menos de 1 tonelada de CO₂ al año."
                o	"Aunque el experto observe que en otros colegios la emisión es baja, no puede estar seguro de que en el siguiente colegio sea igual. Es necesario medir la huella de carbono en todos los colegios para evitar errores."
                o	"El experto no puede concluir que todos los colegios tienen las mismas emisiones basándose solo en los anteriores, debe realizar el promedio en el siguiente colegio para estar seguro."
                o	"El experto puede creer que los resultados serán similares, pero para estar seguro debe medir las emisiones en el siguiente colegio porque las condiciones pueden ser diferentes."
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (9)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de alternativas incorrectas. 
                Explicaciones de 0 puntos:
                •	Criterio: El estudiante no identifica claramente el error de razonamiento del experto ni descarta adecuadamente las alternativas incorrectas.
                •	Ejemplos:
                o	"Lo importante es ser eficientes y no preocuparse por hacer nuevos promedios si ya se tiene una tendencia clara."
                o	"El experto no necesita volver a calcular, ya sabe que la tendencia es la misma en todos los colegios, como menciona la opción a)."
                o	"Volver a hacer promedios sería una pérdida de tiempo porque ya está claro que los adolescentes emiten menos CO₂."
                o	"No tiene sentido hacer más mediciones, como dice la opción b), es mejor cumplir con las órdenes y seguir con el estudio sin repetir lo mismo."
                Explicaciones de 1 punto:
                •	Criterio: El estudiante reconoce de manera general el problema, pero no lo explica de forma completa o el descarte de las alternativas incorrectas es superficial.
                •	Ejemplos:
                o	"El experto no debería asumir que los resultados serán iguales solo porque otros colegios tienen emisiones bajas."
                o	"Aunque la opción c) dice que se debería ser más eficiente, lo importante es que el experto mida a todos los colegios para asegurarse de que los resultados son correctos."
                o	" aunque se mencione en las opciones que debería repetir los promedios anteriores, eso no garantiza que todos los colegios tengan las mismas emisiones."
                o	"La opción b) dice que el experto debe cumplir con las órdenes, pero eso no asegura que todos los colegios emitan la misma cantidad de CO₂. Es mejor medir cada uno para estar seguro."
                Explicaciones de 2 puntos:
                •	Criterio: El estudiante identifica el error del experto y explica de manera lógica por qué no puede sacar conclusiones sin verificar el próximo colegio, descartando adecuadamente una o varias alternativas incorrectas.
                •	Ejemplos:
                o	"Aunque se mencionó que se debe ahorrar gastos de viáticos, eso no justifica no realizar la medición en el siguiente colegio. El experto necesita verificar las emisiones para asegurarse de que no está pasando por alto algo importante."
                o	"La opción e) sugiere que el experto debería repetir los promedios anteriores, pero eso no garantiza que los resultados sean iguales en el próximo colegio. El experto no puede asumir que las condiciones serán las mismas sin hacer las mediciones."
                o	" Se dijo que los adolescentes contaminan menos, pero eso no significa que todos los colegios sean iguales. El experto debe medir las emisiones en cada colegio para asegurarse de que los resultados sean precisos."
                o	"Aunque la opción b) sugiere que el experto debe seguir las órdenes, eso no garantiza que las emisiones de CO₂ sean las mismas en todos los colegios. Es importante medir en cada colegio para tener certeza de los resultados."
                o	"El experto no puede asumir que la tendencia seguirá siendo la misma. Debe medir las emisiones en cada colegio para evitar conclusiones apresuradas y asegurar que los datos sean correctos."',
                'valor_opcion' => null
            ],

            //Item 12
            [
                'id_criterio' => 6,
                'id_pregunta' => 30,
                'texto' => 'Nota 1: El objetivo de este ítem (12) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal c) del anterior ítem (11), comprendiendo que correlación no implica causalidad.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (12), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (12)
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (12) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (11); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y el descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (11); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que correlación no implica causalidad. 
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (12).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (11), estas fueron:
                a)	Si fuera el papá de la chica también prohibiría el uso en casa de Instagram y Facebook, porque la investigación encontraba que cuando se incrementa el uso de estas redes sociales la depresión aumenta, lo cual resulta preocupante para un padre de familia. 
                b)	Lo más seguro es que la hija se aliviará al evitar que use Instagram y Facebook, y en ese sentido no puede ser que si el papá incrementa los permisos para el uso de esas redes sociales en casa la depresión de su hija disminuya, sino todo lo contrario. 
                d)	Probablemente, el evitar que los adolescentes usen Instagram y Facebook no influya en el aumento de la depresión, porque el estudio fue realizado por padres y profesores, de manera que es probable que estén en contra de que los adolescentes usen esas redes sociales.
                e)	Un uso prudente de las redes sociales puede ayudar a que la hija se recupere de la depresión, es cuestión de contenido y frecuencia en que se usan. Entonces, el padre puede regular o sugerir los contenidos que su hija puede o debe ver en esas redes sociales.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (12). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (12). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (11)):
                Explicaciones de 0 puntos:
                El estudiante no desarrolla bien la diferencia entre correlación y causalidad, o la respuesta no está relacionada con el tema del ítem.
                Ejemplos de explicaciones de 0 puntos:
                •	"Usar redes sociales siempre es malo para la salud mental."
                •	"Prohibir las redes sociales solucionará la depresión de su hija."
                •	"Las redes sociales causan enfermedades mentales, eso es claro."
                •	"La hija debería dejar de usar Instagram y Facebook para sentirse mejor."
                •	"Las redes sociales son la razón de todo, por lo tanto, deben eliminarse."
                Explicaciones de 1 punto:
                El estudiante reconoce parcialmente el problema de la correlación, pero no lo explica completamente. Muestra cierto entendimiento, pero de manera incompleta.
                Ejemplos de explicaciones de 1 punto:
                •	"Quizás las redes sociales no son la única causa de la depresión."
                •	"Podría haber otros factores que influyen en la depresión de la hija, no solo las redes sociales."
                •	"Las redes sociales pueden contribuir a la depresión, pero no son la única razón."
                •	"Es posible que haya algo más que esté causando la depresión, no solo el uso de redes sociales."
                •	"La depresión de la hija puede ser causada por muchas cosas, no solo las redes sociales, pero prohibirlas podría ayudar."
                Explicaciones de 2 puntos:
                El estudiante identifica claramente la diferencia entre correlación y causalidad, explicando por qué el uso de redes sociales puede estar relacionado con la depresión, pero no necesariamente ser la causa directa.
                Ejemplos de explicaciones de 2 puntos:
                •	"El uso de redes sociales puede estar correlacionado con la depresión, pero eso no significa que sea la causa directa de la depresión de su hija. Hay muchos otros factores que pueden influir."
                •	"Aunque el estudio muestra que hay una relación entre redes sociales y depresión, eso no significa que las redes sociales causen la depresión. Puede haber otros factores, como el estrés, problemas familiares o incluso la genética."
                •	"Las redes sociales pueden estar relacionadas con la depresión, pero la correlación no implica causalidad. Es posible que otros factores, como la presión social o el acoso escolar, estén afectando a la hija."
                •	"El hecho de que muchas personas que usan redes sociales estén deprimidas no significa que las redes sociales causen la depresión. Puede haber otros factores como la ansiedad o problemas personales que también influyen."
                •	"Las redes sociales pueden estar correlacionadas con la depresión, pero no son necesariamente la causa de la misma. Hay muchas otras variables en juego, como la falta de apoyo emocional o la sobrecarga académica."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (11)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no comprende la diferencia entre correlación y causalidad, o se enfoca en una alternativa incorrecta sin refutarla adecuadamente.
                Ejemplos de explicaciones de 0 puntos:
                •	"El papá tiene razón, porque si la hija deja de usar Instagram y Facebook, la depresión se va a curar. Como dice la opción b), es lo mejor que puede hacer."
                •	"El papá debe hacer lo que sugieren los estudios, como se muestra que las redes sociales son la causa de la depresión."
                •	"La opción d) tiene razón al decir que los estudios no deberían confiar tanto en redes sociales, pues seguramente esos estudios son hechos por gente que quiere que las redes se vean mal."
                •	"La hija se va a aliviar cuando el papá la obligue a dejar las redes sociales, así que la una de las opciones tiene razón en que solo debe regular el contenido."
                •	"No hay duda de que el papá debería seguir lo que dice la opción a) porque está claro que si aumenta el uso de las redes, la depresión también aumentará."
                Explicaciones de 1 punto:
                Criterio: El estudiante reconoce parcialmente el problema de la correlación, pero no descarta de manera adecuada las alternativas incorrectas ni desarrolla completamente el concepto de causalidad.
                Ejemplos de explicaciones de 1 punto:
                •	"El papá podría estar preocupado con razón, como en la opción a), pero eso no significa que solo las redes sociales sean la causa de la depresión."
                •	"Es posible que las redes sociales contribuyan a la depresión, pero eso no significa que sea la única causa."
                •	"Aunque el papá piense que las redes sociales son malas, como en la opción e), eso no asegura que eliminarlas sea lo único que puede mejorar la salud mental de su hija."
                •	"Una de las opciones dice que el uso de redes sociales puede aumentar la depresión, pero eso no significa que sean la única causa de su malestar."
                •	"Podría haber más factores involucrados, como dice la opción d), pero el estudio fue hecho por personas que tienen sus prejuicios, y no es seguro que las redes sociales sean el problema central."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente la diferencia entre correlación y causalidad, y además descarta adecuadamente una o varias de las alternativas incorrectas proporcionadas en el ítem anterior.
                Ejemplos de explicaciones de 2 puntos:
                •	"Aunque la opción a) dice que el aumento del uso de redes está relacionado con más depresión, eso no significa que las redes sociales sean la causa directa. Hay otros factores que el estudio no tomó en cuenta."
                •	"Una de las opciones sugiere que prohibir las redes sociales resolverá el problema, pero esto confunde correlación con causalidad. Las redes sociales pueden estar correlacionadas con la depresión, pero no necesariamente causarla."
                •	"La opción d) parece sugerir que el estudio está sesgado porque fue hecho por padres y profesores, pero esto no refuta la relación observada entre redes sociales y depresión. Aun así, no se puede concluir que las redes causan la depresión."
                •	"Aunque se sugirió que regular el contenido ayudará, eso no aborda la verdadera complejidad del problema. Correlación no implica causalidad, y simplemente ajustar el contenido no garantiza que se resuelva la depresión."
                •	"El estudio mostró una correlación, como dice la opción a), pero eso no significa que las redes sociales causen depresión. Hay otros factores como el ambiente familiar o los problemas personales que podrían ser las verdaderas causas."',
                'valor_opcion' => null
            ],

            //Item 14
            [
                'id_criterio' => 7,
                'id_pregunta' => 35,
                'texto' => 'Nota1: El objetivo de este ítem (14) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal a) del anterior ítem (13), comprendiendo la relevancia de la información proporcionada en los estudios realizados por la institución para justificar su decisión de voto respecto a las sanciones y prohibiciones en la música.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (14), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (14)
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (14) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (13); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (13); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la relevancia de la información proporcionada en los estudios realizados por la institución para justificar su decisión de voto respecto a las sanciones y prohibiciones en la música.
                Nota 4: El hecho de que la explicación incluya o no referencias (directa o indirecta) y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (14).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (13), estas fueron:
                b)	Necesitaría saber si alguno de los miembros del Consejo Nacional de Música conoce las implicaciones de esta música en el comportamiento de los jóvenes, es decir, sin inciden en las conductas de los jóvenes en cuanto a la violencia o el sexo; y si es probable que esas decisiones afecten la libertad de expresión.  
                c)	Si los miembros del Consejo Nacional de Música son designados o nombrados por personas que ostentan cargos políticos en el territorio nacional o si tienen familiares que produzcan este tipo de música; y, cuál es la opinión de los padres de familia sobre la situación en cuestión. 
                d)	Si los jóvenes que escuchan esta música son delincuentes en potencia, es decir, que tengan antecedentes penales o estén propensos a cometer delitos; y, si el Consejo Nacional de Música está conformado por personas que tengan determinadas inclinaciones ideológicas históricas como las de los liberales o conservadores. 
                e)	Sería importante conocer la cantidad de empleos directos e indirectos que se verían afectados con ese tipo de sanciones, como, por ejemplo, las labores que desempeñan los ingenieros de sonido y las personas que realizan montajes para conciertos; y, si se trata de la música de mi gusto o del gusto de mis amigos. 
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (14). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (14). 
                 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (13)):
                Explicaciones de 0 puntos:
                El estudiante no desarrolla bien la comprensión sobre la información relevante de los estudios o da respuestas irrelevantes.
                Ejemplos de explicaciones de 0 puntos:
                •	"Las canciones o género musical inciden en el comportamiento porque incitan a la violencia y al sexo mal manejado."
                •	"Es culpa del Consejo Nacional Musical por no haber regulado estas canciones antes."
                •	"Los adolescentes que escuchan esa música ya están perdidos, no se puede hacer mucho."
                •	"El problema es que las canciones influyen en el comportamiento, y eso ya es un hecho."
                Explicaciones de 1 punto:
                El estudiante muestra cierta comprensión sobre la importancia de los estudios para fundamentar la decisión, pero no desarrolla completamente la idea.
                Ejemplos de explicaciones de 1 punto:
                •	"Es necesario saber qué tan afectados están los jóvenes con esta música para tomar una decisión correcta."
                •	"Las cifras son importantes para saber qué pasa con los jóvenes que escuchan este tipo de música."
                •	"Se necesita más información confiable sobre el impacto de esta música en los jóvenes antes de votar."
                •	"Deberíamos saber cuántos adolescentes realmente cambian su comportamiento por la música."
                Explicaciones de 2 puntos:
                El estudiante reconoce claramente que se necesitan datos comparativos entre los adolescentes que escuchan esta música y tienen comportamientos problemáticos y aquellos que no los tienen. También muestra que los estudios deben contener información estadística para justificar cualquier cambio en la ley.
                Ejemplos de explicaciones de 2 puntos:
                •	"Es necesario contar con datos que comparen a los adolescentes que escuchan esta música y tienen problemas de comportamiento con aquellos que no los tienen, para tomar una decisión informada."
                •	"Se deben tener estadísticas sobre los adolescentes que escuchan este género musical y si hay un aumento en problemas como el consumo de drogas o la violencia, comparado con los que no escuchan esa música."
                •	"Es importante saber si realmente hay más adolescentes que cambian su comportamiento por escuchar esta música. Los estudios deben mostrar cuántos adolescentes son afectados negativamente para justificar cualquier cambio en la ley."
                •	"La información relevante debe incluir datos que indiquen qué porcentaje de adolescentes que escuchan esta música presentan comportamientos violentos o consumo de drogas y compararlos con los que no tienen esos problemas."
                •	"Si los estudios muestran que un gran porcentaje de jóvenes que escuchan esta música no tienen problemas de violencia o drogas, no tiene sentido hacer cambios en la ley sin esa información clara."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (13)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no desarrolla bien la comprensión sobre la relevancia de la información proporcionada por los estudios y se enfoca en información incorrecta o irrelevante, ya sea de manera directa o indirecta.
                Ejemplos de explicaciones de 0 puntos:
                •	"Lo más importante sería saber si los miembros del Consejo tienen inclinaciones políticas, como dice la opción d. Eso nos diría más sobre la intención de las sanciones que los estudios sobre el comportamiento de los jóvenes."
                •	"La cantidad de empleos en la industria de la música es más importante que los estudios sobre los jóvenes. Si los conciertos se ven afectados, no tiene sentido sancionar la música."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona aspectos relacionados con la importancia de los estudios, pero no explica completamente por qué estos son más relevantes que otros factores, dejando la explicación incompleta.
                Ejemplos de explicaciones de 1 punto:
                •	"Es cierto que debemos considerar cómo la música afecta a los jóvenes, pero también sería útil saber si el Consejo está compuesto por personas influidas por la política, como sugiere la opción d."
                •	"No basta con saber qué porcentaje de jóvenes tiene problemas de comportamiento, también es importante tener en cuenta si los padres de familia están preocupados, como lo menciona una de las alternativas."
                Explicaciones de 2 puntos:
                Criterio: El estudiante comprende y explica adecuadamente la importancia de los estudios en la toma de decisiones, descartando una o más alternativas incorrectas de manera clara, directa o indirecta, justificando por qué no son tan relevantes como los estudios.
                Ejemplos de explicaciones de 2 puntos:
                •	"Los estudios son la información más relevante porque muestran el impacto real de la música en el comportamiento de los jóvenes. No importa tanto si los miembros del Consejo tienen inclinaciones ideológicas, como menciona la opción d, porque eso no influye en el comportamiento de los adolescentes."
                •	"Es crucial saber si realmente hay un cambio en el comportamiento de los jóvenes que escuchan esta música, y los estudios lo muestran. Preocuparse por la libertad de expresión de los padres o por la opinión del Consejo no es tan relevante en este caso."
                •	"Los estudios son la clave para decidir si la música tiene un efecto negativo. El impacto en los empleos de ingenieros de sonido o de montajes para conciertos, como se menciona en la opción e, no justifica un cambio en la ley."
                •	"Para justificar un cambio en la ley necesitamos ver las estadísticas claras que comparen a los jóvenes que escuchan esta música con aquellos que no. No importa tanto si el Consejo tiene algún tipo de influencia política, como se sugiere en alguna de las opciones."',
                'valor_opcion' => null
            ],

            //Item 16
            [
                'id_criterio' => 8,
                'id_pregunta' => 40,
                'texto' => 'Nota 1: El objetivo de este ítem (16) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal b) del anterior ítem (15), comprendiendo la importancia de utilizar información objetiva y cuantificable, en lugar de opiniones o percepciones generales, para tomar una decisión razonada sobre cuál programa recomendar a la amiga. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (16), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (16)
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (16) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (15); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (15); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la importancia de utilizar información objetiva y cuantificable, en lugar de opiniones o percepciones generales, para tomar una decisión razonada sobre cuál programa recomendar a la amiga.  
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (16).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (15), estas fueron:
                a)	Qué tipo de capacitación o actualización de conocimientos recibe el personal docente de su universidad y, si anuncian su programa universitario en los medios locales de comunicación.
                c)	Si el programa universitario está respaldado por un personaje público de la ciudad o del país y, si el programa universitario goza de reconocimiento a nivel nacional e internacional en cuanto a la calidad de su propuesta académica.  
                d)	Cuántos estudiantes abandonan el programa universitario antes de completarlo y, si los estudiantes que se gradúan tienen la posibilidad de potencializar sus capacidades en las empresas en las que ingresan a trabajar.  
                e)	Si las empresas a las que ingresan a trabajar los egresados tienen programas de becas para estudios de posgrado o especialización y, si las empresas a las que ingresan a trabajar los egresados ofrecen buenos salarios a su personal.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (16). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (16). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (15)):
                
                Explicaciones de 0 puntos:
                El estudiante no comprende la necesidad de contar con información objetiva o da respuestas irrelevantes.
                Ejemplos de explicaciones de 0 puntos:
                •	"Es importante saber qué tan bueno es el programa en comparación con otros de otras universidades."
                •	"El porcentaje de graduados empleados es importante, pero no lo es todo."
                •	"Se necesita saber cuál es el mejor programa en general."
                •	"Ambos programas parecen buenos, así que no importa cuál elija."
                Explicaciones de 1 punto:
                El estudiante muestra cierta comprensión sobre la necesidad de información objetiva para la toma de decisiones, pero no lo explica completamente o se enfoca en aspectos secundarios.
                Ejemplos de explicaciones de 1 punto:
                •	"Es importante analizar las posibilidades de que la amiga no consiga empleo rápidamente, pero necesitamos más información."
                •	"Necesitamos reducir la incertidumbre y tener claridad sobre las probabilidades de empleo después de la graduación."
                •	"Los datos son importantes, como el porcentaje de graduados empleados, pero también hay otros factores."
                •	"Si muchas empresas requieren estos profesionales, podría ser un buen programa, pero falta más información."
                Explicaciones de 2 puntos:
                El estudiante reconoce claramente que la información cuantificable sobre las tasas de empleo de los egresados es clave para tomar una decisión informada y que esta información debe ser respaldada por datos verificables.
                Ejemplos de explicaciones de 2 puntos:
                •	"Lo más importante para aconsejar bien a mi amiga es saber cuántos graduados de ese programa consiguen empleo rápidamente, porque eso asegura que podrá pagar su financiación."
                •	"Para tomar una decisión acertada, necesitamos datos concretos como el porcentaje de egresados que se emplean al graduarse. Si el programa tiene buenas cifras de empleabilidad, es una opción recomendable."
                •	"Recomendaría a mi amiga el programa que pueda demostrar con estadísticas que sus egresados tienen altas tasas de empleo, porque eso garantiza una salida laboral rápida."
                •	"El programa que se pueda probar con cifras que tiene una alta demanda de profesionales en el mercado laboral es el que recomendaría, ya que eso asegura que mi amiga tendrá más oportunidades de empleo al graduarse."
                •	"Elegí esa alternativa porque las estadísticas sobre la empleabilidad de los egresados son una prueba sólida de que ese programa puede garantizar empleo y ayudar a mi amiga a tomar una decisión segura."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (15)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no comprende la importancia de contar con información objetiva y cuantificable, o se enfoca en aspectos irrelevantes, ya sea de manera directa o indirecta.
                Ejemplos de explicaciones de 0 puntos:
                •	"Saber si las empresas ofrecen becas, como en la opción e, podría ser útil, pero no garantiza que el programa sea bueno."
                •	"El hecho de que el programa tenga respaldo de un personaje público, como se menciona en una de las opciones, podría hacer que sea más conocido, pero no nos dice nada sobre las tasas de empleo."
                •	"Lo importante sería ver si anuncian el programa en los medios locales, como dice la opción a, ya que eso lo haría más popular."
                •	"Aunque podríamos considerar cuántos estudiantes abandonan el programa, como en la opción d, eso no es suficiente para tomar una decisión sobre el futuro empleo de mi amiga."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona algunos aspectos relevantes sobre la necesidad de información objetiva, pero no lo explica de forma completa, y se enfoca también en factores secundarios.
                Ejemplos de explicaciones de 1 punto:
                •	"Saber cuántos estudiantes abandonan el programa, como dice la opción d, es útil, pero también necesitamos datos sobre la empleabilidad de los graduados para que mi amiga pueda estar segura."
                •	"El hecho de que los programas sean conocidos a nivel internacional, como se menciona en la opción c, es importante, pero sin datos claros sobre cuántos egresados encuentran empleo, no podemos hacer una recomendación sólida."
                •	"Aunque podríamos tener en cuenta qué opinan los padres, como sugiere una de las alternativas, no es tan relevante como saber cuántos egresados tienen trabajo después de graduarse."
                •	"Saber si el personal docente está capacitado es interesante, pero no tan importante como las tasas de empleo de los egresados."
                Explicaciones de 2 puntos:
                Criterio: El estudiante comprende claramente que la información cuantificable, como las tasas de empleo, es clave para tomar una decisión y justifica por qué otras alternativas no son tan relevantes, ya sea de manera directa o indirecta.
                Ejemplos de explicaciones de 2 puntos:
                •	"Las cifras de cuántos egresados consiguen empleo al terminar el programa son esenciales para mi amiga. No importa tanto si el programa está respaldado por una figura pública, como en la opción c, porque eso no garantiza un buen futuro laboral."
                •	"Elegí esa opción porque los datos sobre la tasa de empleo son mucho más útiles para tomar una decisión que conocer si las empresas ofrecen becas de posgrado. Mi amiga necesita saber si podrá conseguir empleo rápido, no si las empresas ofrecen más estudios."
                •	"Las tasas de empleo son lo más importante para decidir qué programa recomendarle a mi amiga. No importa tanto saber si los docentes están actualizados o si el programa se anuncia en los medios, como dice la opción a, porque eso no asegura un buen trabajo."
                •	"Es mucho más útil tener datos concretos sobre cuántos egresados encuentran empleo, en lugar de considerar la posibilidad de que los estudiantes abandonen el programa. Lo que le interesa a mi amiga es encontrar trabajo, no si los demás se retiran del programa."
                •	"Los datos sobre la empleabilidad de los egresados son lo que realmente importa para ayudar a mi amiga a decidir. No es tan relevante saber si las empresas tienen programas de becas o si los estudiantes que se gradúan pueden potencializar sus capacidades, como dicen otras opciones."',
                'valor_opcion' => null
            ],

            //Item 18
            [
                'id_criterio' => 9,
                'id_pregunta' => 45,
                'texto' => 'Nota 1: El objetivo de este ítem (18) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal a) del anterior ítem (17), comprendiendo la probabilidad de que Jesús David, un joven latinoamericano, sea admitido y se convierta en astronauta de la NASA, basándose en la información proporcionada, particularmente en la baja proporción de latinos admitidos.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (18), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (18)
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (18) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (17); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (17); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la probabilidad de que Jesús David, un joven latinoamericano, sea admitido y se convierta en astronauta de la NASA, basándose en la información proporcionada, particularmente en la baja proporción de latinos admitidos. 
                Nota 4: El hecho de que la explicación incluya o no referencia y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (18).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (17), estas fueron:
                b)	La probabilidad de que Jesús David se convierta en astronauta de la NASA es baja.
                c)	La probabilidad de que Jesús David se convierta en astronauta de la NASA es media.
                d)	La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.
                e)	La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (18). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (18). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (17)):
                Formas de puntuar la explicación:
                Explicaciones de 0 puntos:
                Criterio: La comprensión no está bien desarrollada. El estudiante no identifica claramente la baja probabilidad de que Jesús David logre su objetivo, o la respuesta es irrelevante.
                Ejemplos de respuestas de 0 puntos:
                •	"Jesús David tiene muchas posibilidades porque está muy motivado."
                •	"Todo es cuestión de suerte y contactos, no de dedicación."
                •	"Es difícil, pero si sigue soñando en grande lo conseguirá."
                •	"Jesús David ya tiene conocimientos, por lo que tiene tantas posibilidades como los demás."
                •	"Hay un 50/50 de que lo consiga."
                Explicaciones de 1 punto:
                Criterio: La comprensión está parcialmente desarrollada. El estudiante reconoce que la probabilidad es baja, pero no explica de manera completa el contexto que lo justifica.
                Ejemplos de respuestas de 1 punto:
                •	"Hay muchas personas como él queriendo entrar a la NASA, lo que reduce sus probabilidades."
                •	"Aunque Jesús David es inteligente y disciplinado, hay muchos otros competidores con las mismas habilidades."
                •	"Hay demasiados aspirantes, por lo que es difícil que todos logren entrar."
                •	"Aunque tiene dedicación, la probabilidad es baja porque solo 17 de cada 100 personas son latinos."
                •	"A pesar de su esfuerzo, las probabilidades son bajas por la gran competencia."
                Explicaciones de 2 puntos:
                Criterio: La comprensión está bien desarrollada. El estudiante identifica claramente que, aunque Jesús David está bien preparado, la probabilidad de que logre su objetivo es baja debido a la pequeña proporción de latinos admitidos en la NASA.
                Ejemplos de respuestas de 2 puntos:
                •	"Jesús David tiene pocas probabilidades de ser admitido porque solo 17 de cada 100 personas en la NASA son latinas, y no todas estas personas son astronautas."
                •	"Aunque Jesús David tiene muchas habilidades y se ha preparado, la probabilidad de ser admitido en la NASA es baja, ya que solo una pequeña parte del personal de la NASA es latino."
                •	"El número de latinos que trabajan en la NASA es bajo, por lo que, aunque Jesús David se ha preparado bien, sus probabilidades son limitadas."
                •	"Las probabilidades de que Jesús David logre su sueño son muy bajas porque solo 17 de cada 100 personas en la NASA son latinos, y esto no garantiza que sea astronauta."
                •	"Jesús David tiene pocas probabilidades porque la competencia es alta y solo un pequeño porcentaje de latinos logra ser admitido en la NASA, y menos aún como astronauta."
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (17)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos: Criterio: El estudiante no identifica la baja probabilidad de manera adecuada y su explicación no descarta correctamente las alternativas incorrectas.
                •	"Jesús David tiene muchas posibilidades, por lo que la opción de alta probabilidad es correcta." 
                •	"Puede que no lo consiga, pero su sueño es más importante." 
                •	"La NASA elige a muchas personas talentosas, así que sus probabilidades son medias." 
                Explicaciones de 1 punto: Criterio: El estudiante reconoce parcialmente la baja probabilidad, pero no profundiza en las razones o en el descarte adecuado de las alternativas incorrectas.
                •	"A Jesús David le va a costar, pero sus probabilidades no son tan altas como algunos piensan." 
                •	"Las probabilidades no son altas, pero no significa que no lo logre. No es tan fácil como parece, pero tampoco imposible." 
                •	"Aunque tiene talento, no es fácil entrar a la NASA. No es que no pueda, pero las probabilidades son bajas."
                Explicaciones de 2 puntos: Criterio: El estudiante identifica correctamente la baja probabilidad, explica por qué esta es la respuesta correcta, y descarta claramente una o varias alternativas incorrectas.
                •	"Aunque Jesús David ha trabajado duro, solo 17 de cada 100 personas en la NASA son latinas, lo que significa que la probabilidad es baja, no media como se menciona en la opción c." 
                •	"Las probabilidades de que un latino sea astronauta son muy bajas, como indica la información. Esto descarta la opción d, que dice que las probabilidades son altas." 
                •	"Solo una pequeña parte de los empleados de la NASA son latinos, y eso significa que las probabilidades de Jesús David no son ni medias ni altas, como sugieren en otras opciones ." 
                •	"Jesús David tiene pocas probabilidades debido a la baja proporción de latinos admitidos, lo que descarta tanto la opción c como la d, que mencionan probabilidades más altas de lo que realmente tiene."',
                'valor_opcion' => null
            ],

            //Item 20
            [
                'id_criterio' => 10,
                'id_pregunta' => 50,
                'texto' => 'Nota 1: El objetivo de este ítem (20) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal c) del anterior ítem (19) identifica el supuesto en la publicación (de que la IA dominará todas las industrias mencionadas y dejará sin empleo a los humanos) y lo cuestionable de la predicción sobre el desempleo. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (20), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (20).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (20) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (19); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (19); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante identifica el supuesto en la publicación (de que la IA dominará todas las industrias mencionadas y dejará sin empleo a los humanos) y lo cuestionable de la predicción sobre el desempleo.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (20).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (19), estas fueron:
                a)	Las estimaciones sobre los niveles de desarrollo de la Inteligencia artificial son probablemente demasiado altas. Parece que en la publicación electrónica están confundiendo Inteligencia Artificial con robótica, lo cual es un desacierto. 
                b)	Las estimaciones sobre los niveles de desempleo actual son probablemente demasiado altas. No sabemos cómo se comportarán las necesidades de empleo con respecto a las alternativas u opciones disponibles para trabajar. 
                d)	El artículo probablemente fue escrito por alguien que no está seguro de si habrá crecimiento o decrecimiento poblacional, parece que la población mundial está disminuyendo entonces no es lógico pensar que todos nos quedaremos sin empleo.
                e)	Esta predicción asume que no habrá posibilidad de que la inteligencia artificial genere nuevos empleos, las reglas están para hacerse de modo que pueden crearse algunas reglamentaciones en los próximos 80 años que regulen el asunto.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (20). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (20). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (19)):
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica el supuesto ni lo cuestionable del argumento en la publicación, o la respuesta es irrelevante.
                Ejemplos de respuestas de 0 puntos:
                •	"La tecnología siempre nos quitará empleos, eso es inevitable."
                •	"Si hay más máquinas, es lógico que habrá menos empleo."
                •	"No podemos saber lo que pasará en el futuro, así que es imposible predecir."
                •	"Todo será controlado por máquinas en algún momento, así que es mejor prepararse."
                Explicaciones de 1 punto:
                Criterio: El estudiante reconoce parcialmente el problema, pero no lo explica de forma completa o clara.
                Ejemplos de respuestas de 1 punto:
                •	"No se puede asegurar que todo el mundo se quedará sin empleo solo porque crezca la IA."
                •	"Es muy difícil hacer predicciones tan a largo plazo, pero puede que la IA no afecte todas las industrias."
                •	"El artículo no tiene en cuenta que pueden pasar muchas cosas en los próximos 80 años."
                •	"Decir que todos se quedarán sin empleo parece exagerado, pero es posible que la IA cambie muchas industrias."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente el supuesto de la publicación (que la IA dominará las industrias mencionadas) y lo cuestiona de manera lógica, señalando la falta de precisión o generalización en la predicción.
                Ejemplos de respuestas de 2 puntos:
                •	"El artículo supone que la IA crecerá de forma continua y que afectará todas las industrias mencionadas, pero no considera que nuevas tecnologías también pueden crear empleos y cambiar las dinámicas del mercado."
                •	"Decir que en 80 años nos quedaremos sin empleo es apresurado, ya que no todas las industrias funcionan igual, y además pueden surgir nuevos empleos en áreas que aún no conocemos."
                •	"La publicación asume que la tasa de desempleo seguirá creciendo al mismo ritmo, pero no menciona cómo la IA podría generar nuevas oportunidades de empleo o cómo las industrias pueden adaptarse."
                •	"El artículo solo menciona algunas industrias, pero no todas. Es posible que muchas industrias se adapten o que aparezcan nuevas oportunidades de empleo con el desarrollo de la IA."
                •	"No es razonable pensar que todos se quedarán sin empleo solo porque la IA se desarrolle. Otras industrias pueden crecer o surgir, y la IA también puede generar nuevos empleos que no existen hoy."
                •	"El artículo generaliza al decir que todos los trabajos serán reemplazados por máquinas, pero no toma en cuenta que la IA podría ser usada por los humanos para mejorar la eficiencia y crear más empleos en otros sectores."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta)  Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (19)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica el supuesto ni lo cuestionable del argumento en la publicación, o la respuesta es irrelevante.
                •	"La tecnología siempre nos quitará empleos, eso es inevitable."
                •	"Si hay más máquinas, es lógico que habrá menos empleo."
                •	"No podemos saber lo que pasará en el futuro, así que es imposible predecir."
                •	"Todo será controlado por máquinas en algún momento, así que es mejor prepararse."
                Explicaciones de 1 punto:
                Criterio: El estudiante reconoce parcialmente el problema, pero no lo explica de forma completa o clara.
                •	"No se puede asegurar que todo el mundo se quedará sin empleo solo porque crezca la IA, aunque la opción b menciona que no conocemos las opciones futuras de empleo, eso no elimina la posibilidad de nuevos trabajos."
                •	"Es muy difícil hacer predicciones tan a largo plazo. Aunque se diga que la población disminuirá, eso no tiene relación directa con el impacto que la IA pueda tener en el empleo."
                •	"Decir que todos se quedarán sin empleo parece exagerado, pero como sugiere la opción e, nuevas reglamentaciones podrían cambiar la situación. Sin embargo, no se menciona que la IA podría crear nuevos empleos."
                •	"El artículo parece basarse en suposiciones. Como señala la opción a, la confusión entre IA y robótica no explica todos los aspectos del desempleo."
                •	"Es difícil predecir lo que sucederá, ya que el futuro del empleo depende de muchos factores, no solo de la IA."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente el supuesto de la publicación (que la IA dominará las industrias mencionadas) y lo cuestiona de manera lógica, señalando la falta de precisión o generalización en la predicción.
                •	"El artículo asume que la IA controlará todas las industrias y llevará al desempleo masivo. Aunque la opción b habla de las incertidumbres sobre el empleo, no aborda cómo podrían surgir nuevas oportunidades en lugar de simplemente desaparecer."
                •	"La publicación menciona que la IA dominará todas las industrias, pero, aunque en una de las opciones se sugiere que la población disminuirá, no explica por qué eso afectaría necesariamente el desempleo causado por la IA. El problema real es que no se considera cómo las tecnologías emergentes pueden cambiar el panorama laboral."
                •	"El artículo hace una predicción exagerada al decir que todos perderán su empleo debido a la IA. La opción e menciona que las regulaciones podrían ayudar, pero no se menciona que muchas industrias podrían adaptarse o que nuevas industrias podrían surgir."
                •	"Decir que todos quedarán sin empleo es una generalización. Aunque se menciona la confusión entre IA y robótica, el verdadero problema es que no se considera la posibilidad de que la IA también genere nuevos empleos, algo que podría cambiar completamente la situación."
                •	"El artículo parece asumir que la IA crecerá sin control y que todas las industrias serán reemplazadas. Sin embargo, como señala la opción e, las leyes y reglamentaciones podrían cambiar esto. Además, no todas las industrias serán igual de afectadas por la IA, y podrían surgir nuevos sectores laborales."
                •	"Es exagerado pensar que la IA eliminará todos los trabajos. Si bien la tecnología avanzará, nuevas oportunidades laborales surgirán, lo que muestra que la publicación tiene una visión limitada."
                •	"La predicción no considera cómo la tecnología ha creado empleos antes y lo volverá a hacer. Este tipo de predicciones suelen centrarse en el miedo al cambio en lugar de analizar todos los efectos posibles."',
                'valor_opcion' => null
            ],

            //Item 22
            [
                'id_criterio' => 11,
                'id_pregunta' => 55,
                'texto' => 'Nota 1: El objetivo de este ítem (22) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e) del anterior ítem (21), comprendiendo que el rector está realizando una comparación inapropiada al suponer que los juegos en clase son meramente recreativos y no tienen valor educativo. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (22), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (22).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (22) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (21); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (21); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que el rector está realizando una comparación inapropiada al suponer que los juegos en clase son meramente recreativos y no tienen valor educativo.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (22).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (21), estas fueron:
                a)	Al rector no le importan los sentimientos de los estudiantes o los intereses que ellos tienen respecto del aprendizaje.  
                b)	Algunos niños no pueden jugar muy bien con ese tipo de presiones, es mejor replantear la manera en que se asume la educación. 
                c)	Ya se sabe por qué los maestros no suelen utilizar materiales didácticos como juegos durante el año escolar.
                d)	Los niños que desarrollan un amor por el aprendizaje tienen menos probabilidades de faltar a clase que los que no lo hacen.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia  (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (22). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (22). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (21)):
                De 0 a 2 puntos posibles
                Explicaciones de 0 puntos:
                Criterio: Respuestas irrelevantes o que no identifican claramente el error en la comparación del rector.
                •	Ejemplos de respuestas de 0 puntos:
                o	"Están aprendiendo porque sus habilidades se están perfeccionando."
                o	"Es posible que algunos estudiantes no puedan acceder a estos juegos en casa y, por lo tanto, se sientan seguros aprendiendo mientras se juega en clase."
                o	"El aprendizaje a través del juego es una actividad motivacional que no se puede practicar por sí solo, debe ser dirigida."
                o	"Los estudiantes deben divertirse para que quieran ir al colegio."
                o	"Definitivamente el rector tiene la razón, los juegos no enseñan nada."
                Explicaciones de 1 punto:
                Criterio: Respuestas que mencionan el punto de vista del estudiante sobre el aprendizaje a través de los juegos, pero no explican completamente el error en la comparación del rector.
                •	Ejemplos de respuestas de 1 punto:
                o	"Permitir que un profesor enseñe por medio de juegos puede ayudar a estimular la memoria de los estudiantes y aprender cosas importantes."
                o	"Al emplear juegos didácticos el profesor está ayudando a los estudiantes a desarrollar su memoria a largo plazo."
                o	"Si como estudiantes nos entretenemos o divertirnos al aprender, ¿no es esa la parte más importante de la educación de un niño?"
                o	"No se puede enseñar al estudiante por medio de la ludificación hasta que se establezca el desarrollo de sus condiciones iniciales de aprendizaje."
                o	"El maestro es el que enseña y califica y conoce a los estudiantes. Posiblemente el rector no tiene conocimientos didácticos o pedagógicos."
                Explicaciones de 2 puntos:
                Criterio: Respuestas que identifican claramente el error en la comparación del rector al confundir los juegos didácticos con actividades recreativas sin valor educativo.
                •	Ejemplos de respuestas de 2 puntos:
                o	"La forma tradicional de enseñar no implica que no existan nuevas alternativas para el aprendizaje, existen muchos juegos con los que se puede aprender, generar motivación, concentración, recordación o interés en los estudiantes, eso también es aprendizaje."
                o	"El rector confunde el juego con la didáctica, o está invalidando las formas de enseñanza de los profesores. El rector parece estar expresando opiniones, en lugar de razonamientos lógicos."
                o	"Los juegos sí pueden enseñar, los profesores podrían estar haciendo bien su trabajo, pero con las comparaciones del rector se entiende que para él esos juegos son una pérdida de tiempo. Los maestros tienen sus ideas sobre cómo enseñar de manera didáctica y el rector puede estar sesgado."
                o	"El hecho de que los estudiantes utilicemos el juego no significa que no aprendemos de las materias que nos enseñan; ciertos juegos tienen sus enseñanzas. El rector realiza comparaciones que no vienen al caso."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (21)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: Respuestas irrelevantes o que no identifican claramente el error en la comparación del rector.
                •	Ejemplos de respuestas de 0 puntos:
                o	"El rector tiene razón, como dicen en la opción b), algunos niños no pueden manejar la presión de los juegos, así que no deberían ser usados en clase."
                o	Parece que al rector no le importan los sentimientos de los estudiantes, pero eso no tiene nada que ver con la enseñanza mediante juegos."
                o	"Los maestros no usan juegos porque no son útiles para aprender, y el rector está en lo correcto."
                o	"Como en la opción d), los estudiantes deberían enfocarse en aprender, no en divertirse, los juegos no son necesarios."
                Explicaciones de 1 punto:
                Criterio: Respuestas que mencionan el punto de vista del estudiante sobre el aprendizaje a través de los juegos, pero no explican completamente el error en la comparación del rector.
                •	Ejemplos de respuestas de 1 punto:
                o	"Puede que el rector esté preocupado por la educación, los juegos también pueden ayudar a los estudiantes a disfrutar del aprendizaje, aunque el rector no lo vea así."
                o	"El rector piensa que los juegos son solo recreación, como sugiere la opción c), pero en realidad pueden tener un propósito más allá de solo diversión."
                o	"Aunque algunos estudiantes puedan sentirse presionados con los juegos, eso no significa que no puedan aprender algo útil de ellos."
                o	"El rector se equivoca al pensar que los juegos no tienen valor educativo, como lo plantea la opción a), los estudiantes también aprenden jugando."
                Explicaciones de 2 puntos:
                Criterio: Respuestas que identifican claramente el error en la comparación del rector al confundir los juegos didácticos con actividades recreativas sin valor educativo, descartando alternativas incorrectas.
                •	Ejemplos de respuestas de 2 puntos:
                o	"El rector está haciendo una comparación inapropiada, como en la opción a), al pensar que los juegos no tienen valor educativo. No se trata solo de entretener a los estudiantes, los juegos ayudan a reforzar lo que aprenden en clase."
                o	"El rector confunde los juegos didácticos con algo recreativo, pero estos juegos tienen un propósito en la enseñanza que no debe ignorarse."
                o	"Al decir que los juegos no son útiles, como en la opción b), el rector está ignorando su valor educativo. No es una cuestión de presión o recreación, sino de aplicar lo aprendido de manera divertida."
                o	"El rector está mal al pensar que los juegos solo son recreativos. Estos juegos permiten a los estudiantes aprender de una manera interactiva y significativa, el problema de comparaciones inapropiadas o falsa analogía"',
                'valor_opcion' => null
            ],

            //Item 24
            [
                'id_criterio' => 12,
                'id_pregunta' => 60,
                'texto' => 'Nota 1: El objetivo de este ítem (24) es evaluar si el estudiante explica adecuadamente por qué seleccionó alguna de las alternativas correctas (1 = Razonamiento extremadamente pobre; 2 = Razonamiento muy pobre, 3 = Razonamiento pobre; 4 = Ni buen ni mal razonamiento)  del anterior ítem (23), comprendiendo que el gobernador está realizando una falsa analogía al comparar a los deportistas con los estudiantes de colegio, implicando incorrectamente que ambos grupos tienen el mismo nivel de conocimiento y experiencia para tomar decisiones en sus respectivos ámbitos
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (24), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (24).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (24) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (23); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (23); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que el gobernador está realizando una falsa analogía al comparar a los deportistas con los estudiantes de colegio, implicando incorrectamente que ambos grupos tienen el mismo nivel de conocimiento y experiencia para tomar decisiones en sus respectivos ámbitos.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (24).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (23), estas fueron:
                5 = Buen razonamiento,
                6 = Muy buen razonamiento, 
                7 = Excelente razonamiento.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (24). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (24). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (23)):
                Ejemplos:
                •	Explicaciones de 0 puntos;
                Criterio: Respuestas irrelevantes o que etiquetan al gobernador sin analizar la comparación:
                o	"El gobernador no sabe lo que hacen los deportistas."
                o	"No es justo que no escuche a los deportistas."
                o	"El Consejo Directivo necesita opiniones de todas las personas."
                o	"El gobernador debería dejar que los deportistas tomen sus propias decisiones, es lo justo."
                o	"No entiendo por qué los estudiantes no pueden hacer lo mismo que los deportistas."
                o	"Los deportistas son quienes conocen mejor el deporte, no veo por qué el gobernador no lo entiende."
                o	"El gobernador está en contra de las nuevas ideas y eso no es correcto."
                o	"Es injusto que el gobernador tenga tanto poder sobre las reglas del deporte.
                •	Explicaciones de 1 punto
                Criterio: Respuestas que mencionan el error en la comparación pero no profundizan en la diferencia lógica:
                o	"El gobernador debería haber escuchado a los deportistas porque ellos conocen mejor el deporte."
                o	"Comparar a los deportistas con estudiantes es un error, pero tal vez ellos pueden aportar algo útil."
                o	"El gobernador no está tomando en cuenta lo que los deportistas tienen para decir, y eso es importante."
                o	"El gobernador no puede comparar a los deportistas con estudiantes porque son cosas diferentes."
                o	"Los deportistas deberían participar porque conocen el deporte, no se puede comparar con estudiantes de un colegio."
                o	"No me parece que el gobernador esté haciendo una buena comparación, los deportistas son profesionales."
                o	"El gobernador está haciendo una comparación que no tiene nada que ver, pero no explica por qué."
                o	"Comparar a los deportistas con estudiantes no tiene sentido, ya que ambos tienen conocimientos diferentes."
                
                •	Explicaciones de 2 puntos
                Criterio: Respuestas que explican claramente la diferencia entre los deportistas y los estudiantes, señalando la falsa analogía:
                o	"El gobernador hace una comparación inapropiada al comparar a los deportistas con estudiantes de colegio. Los deportistas conocen el deporte y pueden aportar a las nuevas reglas, mientras que los estudiantes no tienen la experiencia necesaria para crear las reglas de su colegio."
                o	"Comparar a los deportistas con estudiantes es una falsa analogía. Los deportistas entienden la lógica del juego y pueden hacer aportes valiosos a la reglamentación, a diferencia de los estudiantes, que no están en una posición de definir las reglas de su colegio."
                o	"El gobernador está comparando dos cosas muy diferentes: los deportistas tienen experiencia en el deporte y saben qué cambios se necesitan, mientras que los estudiantes de colegio no tienen la madurez o el conocimiento suficiente para definir reglas en su institución."
                o	"La comparación que hace el gobernador es inapropiada porque los deportistas tienen experiencia en el deporte y saben lo que se necesita para mejorarlo, mientras que los estudiantes de un colegio no tienen la misma experiencia para decidir sobre las reglas de una institución educativa."
                o	"El gobernador está utilizando una falsa analogía. Los deportistas tienen conocimiento sobre las reglas del deporte y son los más capacitados para opinar sobre ellas, mientras que los estudiantes de un colegio no tienen el mismo nivel de experiencia para decidir sobre las normas escolares."
                o	"Es una falsa analogía porque los deportistas tienen una comprensión profunda de su deporte y pueden contribuir a la reglamentación, mientras que los estudiantes de un colegio no tienen el mismo nivel de experiencia para crear las reglas de una institución educativa."
                o	"El gobernador está comparando situaciones diferentes: los deportistas tienen un conocimiento práctico del deporte que los estudiantes no tienen sobre las reglas de un colegio. Es una comparación inadecuada porque los deportistas están calificados para opinar sobre la reglamentación."
                o	"El gobernador asume erróneamente que los deportistas son como estudiantes de un colegio, cuando en realidad son expertos en su disciplina. Su experiencia les da un conocimiento valioso que los estudiantes no tienen sobre sus instituciones."
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (23)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente la falsa analogía del gobernador ni el problema en la comparación, o su respuesta es irrelevante, aunque se refiera a alguna alternativa incorrecta.
                •	"Comparar a los deportistas con estudiantes no tiene nada que ver, y la opción 5 sobre buen razonamiento está equivocada porque el gobernador tiene razón en querer evitar problemas."
                •	"El gobernador no debería tomar decisiones por todos, pero tampoco importa mucho porque, como dice la opción 7, su razonamiento es excelente."
                •	"No me parece bien lo que hace el gobernador, pero la opción 6 tiene razón en decir que es buen razonamiento porque así se evitan conflictos."
                •	"La comparación del gobernador no es justa, pero la opción 5 de buen razonamiento es válida ya que los estudiantes y deportistas no pueden decidir por sí mismos."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona el error en la comparación realizada por el gobernador pero no profundiza en la falsa analogía, y descarta incorrectamente una o varias alternativas.
                •	"El gobernador se equivoca al comparar a los deportistas con los estudiantes, ya que no tienen la misma experiencia. Pero una de las opciones, que habla de buen razonamiento, tampoco aplica bien porque no explica la diferencia entre ellos."
                •	"Comparar deportistas con estudiantes no es válido porque ambos son diferentes. Aunque la opción 7 dice que es excelente razonamiento, no me parece que sea correcto."
                •	"El gobernador no debería hacer esa comparación porque los deportistas saben más sobre su disciplina. La opción 6, que menciona buen razonamiento, está fuera de lugar porque no tiene en cuenta la diferencia entre deportistas y estudiantes."
                •	"La comparación que hace el gobernador no tiene sentido porque los deportistas tienen conocimientos específicos que los estudiantes no tienen. Pero una de las opciones, que habla de buen razonamiento, está equivocada porque no considera esa diferencia."
                Explicaciones de 2 puntos:
                Criterio: El estudiante explica claramente la falsa analogía del gobernador al comparar a los deportistas con los estudiantes y descarta correctamente una o varias alternativas incorrectas.
                •	"El gobernador comete una falsa analogía al comparar a los deportistas con los estudiantes. Los deportistas tienen conocimientos y experiencia en su campo, lo que les permite tomar decisiones sobre las reglas, mientras que los estudiantes no tienen esa capacidad en el contexto escolar. Por eso la opción 6 de buen razonamiento no es válida aquí, ya que el razonamiento del gobernador es defectuoso."
                •	"El gobernador está haciendo una comparación inapropiada entre deportistas y estudiantes. Los deportistas tienen experiencia y conocimientos que los estudiantes no poseen, lo que les da una mayor capacidad para participar en decisiones sobre su disciplina. La opción 5, que habla de buen razonamiento, es incorrecta porque no considera esta diferencia esencial."
                •	"Comparar a los deportistas con los estudiantes es una falsa analogía porque los deportistas tienen experiencia en su disciplina y pueden contribuir con decisiones, mientras que los estudiantes no tienen ese nivel de conocimiento. Por eso, la opción 7 de excelente razonamiento es incorrecta, ya que el razonamiento del gobernador es pobre."
                •	"El gobernador está comparando a los deportistas con los estudiantes de manera inapropiada. Los deportistas saben qué reglas se deben cambiar porque tienen experiencia, mientras que los estudiantes no tienen la capacidad para definir las normas escolares. Decir que es buen razonamiento, no es acertado porque no se justifica al comparar dos grupos tan distintos."
                •	"El razonamiento del gobernador es un claro ejemplo de una falsa analogía, ya que los deportistas tienen un conocimiento y experiencia en su deporte que los estudiantes no tienen sobre su entorno escolar. Por eso, la opción 5, que dice que su razonamiento es bueno, no es correcta."',
                'valor_opcion' => null
            ],

            //Item 26
            [
                'id_criterio' => 13,
                'id_pregunta' => 65,
                'texto' => 'Nota 1: El objetivo de este ítem es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal c) del anterior ítem (25), comprendiendo el error del coordinador de disciplina en cuanto a conversión ilegal debido a la vaguedad en el manual de convivencia, lo cual genera confusión en su aplicación. 
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (26), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (26).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (26) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (25); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y el descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (25); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende el error del coordinador de disciplina en cuanto a conversión ilegal debido a la vaguedad en el manual de convivencia, lo cual genera confusión en su aplicación.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (26).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (25), estas fueron:
                a)	Prohibir totalmente todas las interacciones físicas entre los estudiantes para evitar cualquier muestra de afecto en las instalaciones del colegio como, por ejemplo, pasillos y aulas de clase.
                b)	Iniciar un programa de vigilancia intensiva para monitorear y sancionar cualquier muestra de afecto entre los estudiantes, bien sea a través de cámaras de vigilancia o delegando personal administrativo.
                d)	Permitir todas las muestras de afecto sin restricciones para promover la libertad y la expresión personal entre los estudiantes, esto garantiza que la expresión de las emociones y el amor sea un derecho para todos.
                e)	Eliminar todas las sanciones relacionadas con las muestras de afecto y confiar en que los estudiantes actuarán de manera apropiada, pues se supone que se enseña ética del cuidado de sí y de los demás.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia  (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (26). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (26). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (25)):
                •	Explicaciones de 0 puntos:
                Criterio: Las respuestas no desarrollan de manera clara el problema de la vaguedad en el manual de convivencia o son irrelevantes para el objetivo del ítem.
                Ejemplos de explicaciones de 0 puntos:
                •	Deberían cambiar el manual de convivencia porque son evidentes los problemas.
                •	Los estudiantes tienen la posibilidad de participar en las decisiones del colegio.
                •	No es casualidad que esto pase si las cosas no se dejan claras desde un principio.
                •	Las muestras de afecto requieren de límites que incluso pueden pensar los mismos estudiantes.
                •	Explicaciones de 1 punto:
                Criterio: Las respuestas abordan parcialmente la vaguedad en el manual, pero no explican completamente el problema.
                Ejemplos de explicaciones de 1 punto:
                •	El manual de convivencia no es claro sobre las muestras de afecto, lo que lleva a interpretaciones erróneas. El coordinador sancionó a los estudiantes por tomarse de la mano, lo cual no es justo.
                •	Los docentes y coordinadores pueden confundirse fácilmente en sus decisiones si no están claras las reglas de juego.
                •	El manual de convivencia está dejando lugar a malentendidos.
                •	Explicaciones de 2 puntos:
                Criterio: Las respuestas identifican claramente la vaguedad en el manual de convivencia y la conversión ilegal en la decisión del coordinador, además de explicar el problema con un razonamiento completo.
                Ejemplos de explicaciones de 2 puntos:
                •	El manual de convivencia sobre las muestras de afecto lleva a confusión y a la aplicación inconsistente de las normas. Por ejemplo, no se especifica qué se considera una muestra de afecto inapropiada, lo que permitió que el coordinador sancionara injustamente a los estudiantes por tomarse de la mano, malinterpretando que cualquier muestra de afecto es sancionable. Es necesario ajustar el manual de convivencia para definir claramente las muestras de afecto permitidas y prohibidas, asegurando que todos comprendan las expectativas y se apliquen las normas de manera justa.
                •	En el manual de convivencia no se especificó qué clase de muestras de afecto estaban prohibidas, como los abrazos o caricias. El coordinador interpretó erróneamente la regla y sancionó a los estudiantes injustamente por tomarse de la mano. Se debe ajustar el manual para evitar malentendidos futuros.
                •	Las reglas establecidas en el manual de convivencia no quedaron claras, lo que genera confusiones como la que tuvo el coordinador académico, quien sancionó a los estudiantes por tomarse de la mano. Se debe aclarar qué tipos de muestras de afecto están prohibidas.
                •	El agente externo no dejó claro en el manual de convivencia qué muestras de afecto estaban prohibidas, y esto provocó que el coordinador sancionara a los estudiantes por un malentendido. Es necesario especificar en el manual qué tipo de muestras están permitidas y cuáles no.
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (25)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente el problema de la vaguedad en el manual ni el error del coordinador, o su respuesta es irrelevante, aunque se refiera a alguna alternativa incorrecta.
                Ejemplos de explicaciones de 0 puntos:
                •	"Prohibir todas las interacciones físicas, como dice la opción a, es una exageración, pero no veo ningún problema con la decisión del coordinador de disciplina."
                •	"Eliminar todas las sanciones relacionadas con muestras de afecto no funcionaría, ya que los estudiantes aún necesitan límites para comportarse adecuadamente en la escuela."
                •	"El programa de vigilancia intensiva sería una buena forma de controlar a los estudiantes, aunque no creo que el problema tenga que ver con la claridad del manual."
                •	"Permitir todas las muestras de afecto no resolvería nada, ya que solo generaría más confusión entre los estudiantes y los profesores."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona el problema en la vaguedad del manual, pero no explica completamente el error del coordinador, y descarta incorrectamente una o varias alternativas.
                Ejemplos de explicaciones de 1 punto:
                •	"Permitir todas las muestras de afecto es demasiado liberal, pero el manual necesita ser más claro sobre qué muestras de afecto son aceptables."
                •	"El problema es que los docentes y el coordinador no tienen suficientes reglas claras para basar sus decisiones, pero prohibir todas las interacciones no es la solución."
                •	"Eliminar todas las sanciones no es una buena idea porque los estudiantes pueden actuar de manera inapropiada si no hay reglas claras."
                •	"Iniciar un programa de vigilancia intensiva sería innecesario, porque el verdadero problema es que el manual de convivencia no especifica qué tipos de conducta son inaceptables."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente el problema de la vaguedad en el manual y el error del coordinador, y descarta correctamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos:
                •	"El coordinador de disciplina sancionó a los estudiantes injustamente porque el manual no especifica qué interacciones físicas están prohibidas. Prohibir todas las interacciones no resuelve el problema de la ambigüedad en el manual."
                •	"El problema radica en la falta de claridad del manual de convivencia, lo que permitió que el coordinador malinterpretara las reglas y sancionara sin justificación. Deberían aclararse las reglas en lugar de eliminar las sanciones por completo."
                •	"El manual de convivencia es vago sobre las muestras de afecto, lo que llevó al coordinador a cometer un error. La opción b de vigilancia intensiva no ayuda porque no resuelve la falta de claridad en las normas."
                •	"Es necesario ajustar el manual para evitar confusiones, ya que las reglas actuales no son claras. Permitir todas las muestras de afecto sin ninguna regulación tampoco sería una solución adecuada."',
                'valor_opcion' => null
            ],

            //Item 28
            [
                'id_criterio' => 14,
                'id_pregunta' => 70,
                'texto' => 'Nota: El objetivo de este ítem (28) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e) del anterior ítem (27), comprendiendo la conversión ilegal por vaguedad que se da con la afirmación “a excepción de aquellos que no se encuentren en vulnerabilidad”, pues la información suministrada por el director de la Unidad de Gestión del Riesgo es demasiado vaga para ser utilizada en las diferentes situaciones en que se encuentran las comunidades.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (28), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (28).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (28) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (27); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (27); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la conversión ilegal por vaguedad que se da con la afirmación “a excepción de aquellos que no se encuentren en vulnerabilidad”, pues la información suministrada por el director de la Unidad de Gestión del Riesgo es demasiado vaga para ser utilizada en las diferentes situaciones en que se encuentran las comunidades.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (28).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (27), estas fueron:
                a)	No determinó las zonas de desalojo por días o semanas de acuerdo con el número de personas que integran las familias. 
                b)	No expresó cómo reubicaría a las familias en campamentos temporales en los que se les pueda garantizar un tiempo prudente de tranquilidad.
                c)	No ha determinado espacios adecuados del territorio en los que pueden establecerse y que no les represente estar en vulnerabilidad.
                d)	No ha enviado comunicaciones a las comunidades indicando cómo pueden conserven la calma y actuar ante la temporada de lluvias.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (28). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (28). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (27)):
                •	Explicaciones de 0 puntos 
                Criterio: Respuestas en las que no se identifica la vaguedad o la conversión ilegal del director de la Unidad de Gestión del Riesgo.
                Ejemplos de explicaciones de 0 puntos:
                o	Porque las personas necesitan saber qué hacer de manera urgente, estar en riesgo ante un desastre no es cualquier cosa.
                o	Perder la vivienda, las cosas o el vínculo con el territorio es algo que no comprenden las autoridades ambientales.
                o	Porque estar en vulnerabilidad implica que se debe evacuar de inmediato.
                •	Explicaciones de 1 punto
                Criterio: Reconocer que el director de la Unidad de Gestión del Riesgo no ha actuado de la mejor manera, pero no desarrollan completamente la comprensión sobre la vaguedad.
                Ejemplos de explicaciones de 1 punto:
                o	Porque el director de la Unidad de Gestión del Riesgo está llegando a conclusiones carentes de información o sin sentido.
                o	Se necesita saber qué es lo que pretende en realidad la Unidad de Gestión del Riesgo.
                o	La información no es suficiente; las comunidades necesitan que se les informe y atiendan de la mejor manera y con prontitud.
                o	Porque para saber cómo actuar, se necesita tener claridad sobre las directrices.
                •	Explicaciones de 2 puntos
                •	Criterio: La comprensión clara de la vaguedad en la afirmación del director, explicando cómo afecta la capacidad de las comunidades para actuar de acuerdo con la información recibida.
                Ejemplos de explicaciones de 2 puntos:
                o	Definitivamente el director de la Unidad de Gestión del Riesgo no supo brindar la información pues faltó claridad, ¿qué significa "vulnerabilidad"? ¿A qué se refiere y en qué sentido? ¿Cómo determina una familia si está en vulnerabilidad o no? Tiene que ver con la localización de la vivienda, lo económico, lo social, etc.
                o	El director de la Unidad de Gestión del Riesgo no explicó qué es estar en vulnerabilidad. ¿Tiene que ver con la amenaza o el riesgo? Estos son conceptos que deben ser entregados con claridad a las personas afectadas. No se pueden dar órdenes si no son claras; las personas están muy confundidas y con razón.
                o	Si no se explica qué es estar en vulnerabilidad, ¿cómo van a saber las personas qué deben hacer? Lo lógico es que se dé una orden con todos los elementos explicados a la comunidad de manera clara. En una situación como esta, no es fácil actuar y reina la preocupación y confusión.
                o	La Unidad de Gestión del Riesgo debe corregir su error e informar en detalle quiénes están en vulnerabilidad y por qué. Posteriormente, o al mismo tiempo, se deben tomar otras decisiones o asistir técnicamente a la comunidad en lo relacionado con el riesgo y la amenaza. Sin información precisa, todo es más confuso de lo normal.
                o	El director debería haber explicado qué significa estar en "vulnerabilidad", ya que es un término vago. Sin esta aclaración, es difícil para las familias saber si están en riesgo o no, lo que aumenta la confusión en un momento en el que necesitan información clara para saber cómo actuar.
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA  (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (27)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente la vaguedad en la afirmación del director ni el problema de conversión ilegal, o su respuesta es irrelevante, aunque se refiera a alguna alternativa incorrecta.
                Ejemplos de explicaciones de 0 puntos:
                •	"La opción b menciona campamentos temporales, pero eso no tiene que ver con el problema de la vaguedad en la información que dio el director. No creo que esa sea una solución válida."
                •	"Eliminar las sanciones no haría que la gente esté más preparada para la situación, pero tampoco es algo que ayude a que entiendan su vulnerabilidad."
                •	"La opción c sobre encontrar espacios adecuados tampoco es una respuesta clara a la falta de información sobre qué significa estar en vulnerabilidad. No aporta nada útil."
                •	"El problema no es solo la falta de espacios, sino que la información dada es tan vaga que la gente no sabe si realmente están en peligro o no."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona que el director no ha dado suficiente información, pero no desarrolla completamente el problema de la vaguedad, y descarta incorrectamente una o varias alternativas.
                Ejemplos de explicaciones de 1 punto:
                •	"El director no ha dejado claras las directrices, como se menciona en la opción d, pero tampoco ha definido qué es vulnerabilidad, lo que genera confusión entre las comunidades."
                •	"No se trata solo de enviar comunicaciones a las comunidades. Si no se aclara qué significa estar en vulnerabilidad, no sirve de nada lo que les digan."
                •	"La opción a menciona las zonas de desalojo, pero el verdadero problema es que la afirmación sobre la vulnerabilidad es muy vaga y no ayuda a la gente a entender si deben desalojar o no."
                •	"Las familias no pueden actuar correctamente si no se les explica bien en qué situación se encuentran. Necesitan saber más allá de simples órdenes de desalojo."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente la vaguedad en la afirmación del director y el problema de conversión ilegal, además de descartar correctamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos:
                •	"El director cometió un error al usar el término "vulnerabilidad" sin explicarlo. No queda claro si se refiere a lo social, lo económico o la ubicación de las viviendas. La opción c de no determinar espacios adecuados tampoco resuelve esta falta de claridad."
                •	"El problema principal es que la afirmación sobre la vulnerabilidad es muy vaga, y las comunidades no pueden saber si están en riesgo o no sin una explicación clara. Las órdenes no sirven si no se les da información precisa."
                •	"La opción b menciona campamentos temporales, pero eso no ayuda a las familias a entender si están en vulnerabilidad. El director necesita aclarar qué significa estar en riesgo, y solo entonces podrán saber si los campamentos son una solución adecuada."
                •	"Las órdenes deben ser claras para que las comunidades puedan actuar de manera correcta. No es suficiente con mencionar las zonas de desalojo o los campamentos si no se explica bien qué significa estar en vulnerabilidad."',
                'valor_opcion' => null
            ],

            //Item 30
            [
                'id_criterio' => 15,
                'id_pregunta' => 75,
                'texto' => 'Nota 1: El objetivo de este ítem (30) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal a) del anterior ítem (29), comprendiendo que las premisas del gobierno (a mayor uso de preservativos y tratamientos anticonceptivos, mayor cantidad de población saludable, pero menor crecimiento de la economía; y que el uso de anticonceptivos y el consecuente decrecimiento poblacional están generando un estancamiento económico) carecen de información detallada y presentan vacíos (conversión ilegal por vaguedad). Además, se debe identificar que la conclusión del gobierno (a mayor crecimiento poblacional, menor estancamiento económico) es inadecuada debido a una conversión ilegal del razonamiento.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (30), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (30).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (30) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (29); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (29); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que las premisas del gobierno (a mayor uso de preservativos y tratamientos anticonceptivos, mayor cantidad de población saludable, pero menor crecimiento de la economía; y que el uso de anticonceptivos y el consecuente decrecimiento poblacional están generando un estancamiento económico) carecen de información detallada y presentan vacíos (conversión ilegal por vaguedad). Además, se debe identificar que la conclusión del gobierno (a mayor crecimiento poblacional, menor estancamiento económico) es inadecuada debido a una conversión ilegal del razonamiento.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (30).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (29), estas fueron:
                b)	Es entendible a que mayor uso de anticonceptivos menor crecimiento poblacional y menores flujos de dinero, entre más personas estén consumiendo bienes y servicios mayores dinámicas económicas se generan en el territorio, lo cuestionable es cómo serán los incentivos económicos que se dará a las parejas, y si esto influye en la decisión de tener hijos, siendo que las parejas pueden priorizar el dinero y luego no ser lo suficientemente responsables con los hijos que se traen al mundo.
                c)	Cómo es que van a desincentivar el uso de anticonceptivos con tantas problemáticas económicas y sociales que se presentan en la actualidad, por el contrario, lo que se requiere es fomentar la sexualidad responsable y que las personas no traigan hijos al mundo a sufrir. 
                d)	No es posible que el uso de preservativos se relacione con la salud de los habitantes directamente, es cierto que si se usan los preservativos las personas evitan adquirir enfermedades de transmisión sexual, lo cual genera menores costos para el Estado, pero el aumento en las condiciones de salud de los ciudadanos depende de otros factores como una excelente prestación de ese servicio social o los hábitos de vida saludable de las personas. 
                e)	Entre más personas estén cuidando su salud reproductiva mayores niveles de bienestar a nivel social; el gobierno no debe formular una política pública que atente contra el trabajo de tantos años de otros gobiernos que ha buscado garantizar la responsabilidad sexual y reproductiva, de una sociedad que lo ha ido en entendiendo con el paso del tiempo.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (30). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (30). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (29)):
                
                Explicaciones de 0 puntos:
                Criterio: Opiniones irrelevantes que no toman en cuenta los vacíos en las premisas del gobierno ni el error de conversión ilegal en su conclusión.
                Ejemplos de explicaciones de 0 puntos:
                •	Los gobiernos acostumbran a hacer este tipo de cosas con la población, no comunican bien sus intereses y desconocen el funcionamiento de la economía.
                •	El uso de anticonceptivos se relaciona con el crecimiento de la población, pero no con el estancamiento de la economía.
                •	Quedan dudas sobre la investigación realizada, no parece de alto nivel.
                •	El gobierno no tiene en cuenta que la economía tiene unos ciclos.
                •	A mayor crecimiento poblacional, menor estancamiento de la economía.
                
                Explicaciones de 1 punto:
                Criterio: El desarrollo parcial de la comprensión de alguno de los dos fallos (vaguedad y/o conversión ilegal).
                Ejemplos de explicaciones de 1 punto:
                •	Es posible que a mayor uso de preservativos la población se enferme menos y que a mayor uso de anticonceptivos menor cantidad de nacimientos, pero eso no determina el crecimiento o estancamiento de la economía.
                •	La información de la investigación no es suficiente; se requiere saber por qué se concluye que la economía se ve afectada por el menor número de nacimientos.
                •	No creo que el decrecimiento poblacional incida en el crecimiento o estancamiento de la economía.
                •	Es muy apresurado y riesgoso asegurar que el crecimiento de la población redunda en el crecimiento de la economía.
                •	Es irracional tratar de hacer crecer la economía por el solo hecho de tener mayores nacimientos o un incremento en la población.
                •	Creo que el gobierno está siendo muy simplista al pensar que la economía se va a estancar solo por el uso de anticonceptivos. Hay muchas otras cosas que también afectan la economía.
                •	El gobierno debería haber dado más detalles sobre cómo llegaron a la conclusión de que los anticonceptivos afectan tanto la economía. Sin esa información, no es posible entender completamente la decisión.
                
                Explicaciones de 2 puntos:
                Criterio: La comprensión clara de la falta de información en la investigación y el error en la conclusión del gobierno.
                Ejemplos de explicaciones de 2 puntos:
                •	Las demás opciones son válidas, pero la irracionalidad del gobierno radica en que los resultados de la investigación carecen de información detallada y que un mayor crecimiento de la población no es sinónimo de crecimiento en la economía, pues existen o se deben relacionar otros factores. Entonces, no se puede pretender incrementar la economía incrementando la población.
                •	No creo que la población decrezca solo por el uso de anticonceptivos, y tampoco que la economía no crezca por el decrecimiento de la población. Por lo tanto, la decisión del gobierno es irracional en la medida en que el crecimiento de la población no garantiza el crecimiento de la economía o el decrecimiento de la población no garantiza el decrecimiento de la economía.
                •	El argumento del gobierno es defectuoso porque no proporciona suficiente información sobre por qué el uso de anticonceptivos lleva a un estancamiento económico. Además, su conclusión de que aumentar la población mejorará la economía no es válida porque hay muchos otros factores que influyen en el crecimiento económico.
                •	El razonamiento del gobierno falla porque no considera otros factores económicos importantes y simplemente asume que más personas significa mejor economía. Sin embargo, esto no siempre es cierto, y su argumento no está bien fundamentado porque no explica cómo exactamente los anticonceptivos afectan la economía.
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (29)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: Opiniones irrelevantes que no toman en cuenta los vacíos en las premisas del gobierno ni el error de conversión ilegal en su conclusión.
                Ejemplos de respuestas de 0 puntos:
                •	"El uso de anticonceptivos no afecta directamente la economía, y la opción b, que habla de cómo se incentiva a las parejas, no tiene sentido en este contexto."
                •	"El gobierno se equivoca al no explicar cómo exactamente los anticonceptivos afectan la economía. Simplemente asumir que más nacimientos resolverán el problema es erróneo, como lo menciona otra opción."
                •	"El gobierno debería enfocarse en otras cosas. La opción d, que habla de cómo el uso de preservativos se relaciona con la salud, no tiene nada que ver con el estancamiento económico."
                •	"Decir que los anticonceptivos afectan la economía no tiene sentido, y algunas opciones no aclaran este punto en absoluto."
                •	"El crecimiento poblacional no garantiza una mejora económica, pero la opción e, que menciona la salud reproductiva, no aborda el tema central del estancamiento económico."
                •	"El gobierno está ignorando otros factores más importantes. No se puede afirmar que el uso de anticonceptivos tiene tanto impacto en la economía, como parece sugerir una de las alternativas."
                Explicaciones de 1 punto:
                Criterio: El desarrollo parcial de la comprensión de alguno de los dos fallos (vaguedad y/o conversión ilegal).
                Ejemplos de respuestas de 1 punto:
                •	"El gobierno necesita más datos antes de afirmar que los anticonceptivos afectan tanto la economía. La opción c, que sugiere que es mejor fomentar la sexualidad responsable, parece más relevante, pero no explica el problema de la conversión ilegal."
                •	"Es difícil comprender cómo el gobierno llegó a esa conclusión sin más detalles. No es suficiente decir que más nacimientos ayudarán a la economía, como parece sugerir alguna de las otras opciones."
                •	"El gobierno no ha explicado por qué el crecimiento poblacional mejoraría la economía. La opción b, que menciona los incentivos económicos, no aclara la falta de información."
                •	"La economía no depende únicamente de la población. Aumentar la población no garantiza un crecimiento, y algunas opciones no resuelven este problema de manera adecuada."
                •	"Es cierto que más nacimientos pueden generar más consumo, pero la opción c, que habla de fomentar la sexualidad responsable, no aborda el problema de la vaguedad en las premisas del gobierno."
                •	"El gobierno debería dar más detalles sobre cómo el uso de anticonceptivos afecta la economía. Las otras alternativas no explican adecuadamente el problema económico."
                Explicaciones de 2 puntos:
                Criterio: La comprensión clara de la falta de información en la investigación y el error en la conclusión del gobierno.
                Ejemplos de respuestas de 2 puntos:
                •	"El gobierno está haciendo una conversión ilegal al concluir que más población necesariamente significa crecimiento económico. Opción d, que menciona la relación entre la salud y el uso de anticonceptivos, es irrelevante porque no aborda el problema central de la vaguedad en la investigación."
                •	"Es incorrecto pensar que más nacimientos resolverán el problema económico, especialmente sin explicar cómo los anticonceptivos están afectando la economía. La falta de claridad en el estudio es evidente, y algunas de las otras alternativas no abordan este punto."
                •	"El razonamiento del gobierno es erróneo porque no tiene suficiente información para concluir que la economía se estancará por el uso de anticonceptivos. La opción e, que se enfoca en el bienestar social, se desvía del problema económico y no toca el punto crucial del argumento defectuoso del gobierno."
                •	"El gobierno necesita ofrecer más información sobre cómo los anticonceptivos afectan el crecimiento económico. Simplemente aumentar la población no es la solución, como parecen sugerir las otras opciones."
                •	Referencia directa: "El gobierno no ha proporcionado suficientes datos para respaldar su afirmación de que los anticonceptivos están frenando la economía. La opción d, que habla de la relación entre preservativos y salud, no tiene relevancia en este contexto porque no aborda el impacto en la economía."
                •	"El gobierno está ignorando muchos factores que influyen en la economía, no solo el uso de anticonceptivos. Algunas de las opciones no resuelven la falta de claridad en la conclusión."
                •	"El problema con el argumento del gobierno es que no ofrece detalles suficientes sobre por qué más población mejoraría la economía. La opción e, que menciona el bienestar social, no toca los vacíos de información que están presentes en la investigación."
                •	"No es correcto asumir que más nacimientos resolverán el estancamiento económico sin analizar otros factores. Las otras opciones tampoco abordan completamente esta falta de información."
                •	"El gobierno está cometiendo un error al pensar que más nacimientos necesariamente mejorarán la economía. Opción b, que menciona los incentivos para las parejas, no aborda la conversión ilegal en el razonamiento del gobierno."
                •	"La falta de información detallada en el estudio del gobierno crea confusión sobre cómo los anticonceptivos afectan la economía. Algunas de las opciones no tratan correctamente esta conversión ilegal."',
                'valor_opcion' => null
            ],

            //Item 38
            [
                'id_criterio' => 16,
                'id_pregunta' => 86,
                'texto' => 'Nota 1: El objetivo de este ítem (38) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal c) del anterior ítem (37), comprendiendo que basándose en la observación de que la plataforma presenta niveles elevados de usuarios sin precedentes en el país, no es posible llegar a una conclusión definitiva sobre si los influenciadores están haciendo muy bien su trabajo al innovar. Esto se debe a que pueden existir otros factores que contribuyan al aumento de usuarios, y las premisas carecen de información detallada, presentando vacíos o falta de evidencia suficiente.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (38), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (38).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (38) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (37); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (37); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende que basándose en la observación de que la plataforma presenta niveles elevados de usuarios sin precedentes en el país, no es posible llegar a una conclusión definitiva sobre si los influenciadores están haciendo muy bien su trabajo al innovar. Esto se debe a que pueden existir otros factores que contribuyan al aumento de usuarios, y las premisas carecen de información detallada, presentando vacíos o falta de evidencia suficiente.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (38).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (37), estas fueron:
                a)	Los creadores de la red social deben estar haciendo un buen trabajo al innovar porque el gurú de las tecnologías y plataformas digitales así lo sugirió. 
                b)	Los creadores de la red social deben estar haciendo un mal trabajo, puesto que en según mis observaciones el contenido es pésimo.  
                d)	La cantidad de usuarios y de influencers no se relaciona con otros factores que determinen el nivel de aceptación de la red social. 
                e)	La cantidad de usuarios no está relacionada con el tipo de trabajo que están haciendo los creadores de la red social.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia  (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (38). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (38). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (37)):
                Explicaciones de 0 puntos:
                Criterio: explicaciones irrelevantes que no toman en cuenta la falta de evidencia suficiente para llegar a una conclusión definitiva, ni consideran otros factores que podrían influir en la aceptación de la plataforma.
                Ejemplos de explicaciones de 0 puntos:
                •	Los influenciadores están haciendo un excelente trabajo al innovar, por eso la plataforma es tan popular."
                •	La plataforma es un éxito porque la gente la encuentra divertida y fácil de usar.
                •	Seleccioné esa opción porque me gusta cómo los influenciadores crean contenido."
                •	Es obvio que si hay muchos usuarios, es porque están innovando bien.
                Explicaciones de 1 punto:
                Criterio: El desarrollo parcial de la identificación de la falta de información o evidencia para llegar a una conclusión definitiva, pero sin profundizar o explicar claramente cómo otros factores pueden influir.
                Ejemplos de explicaciones de 1 punto:
                •	No podemos estar seguros de que los influenciadores estén innovando bien solo porque hay más usuarios.
                •	Seleccioné esa opción porque hace falta más información para saber si están haciendo un buen trabajo
                •	"Puede que la plataforma sea popular por otras razones y no solo por los influenciadores.
                •	No hay suficiente evidencia para decir que los influenciadores son la causa del éxito.
                Explicaciones de 2 puntos:
                Criterio: La identificación clara de que no se puede llegar a una conclusión definitiva sobre el desempeño de los influenciadores debido a la falta de evidencia suficiente, y la consideración de que otros factores podrían estar contribuyendo al aumento de usuarios en la plataforma.
                Ejemplos de explicaciones de 2 puntos:
                •	Seleccioné esa alternativa porque, aunque la plataforma tiene muchos usuarios, no podemos concluir que esto se deba al buen trabajo de los influenciadores al innovar. Pueden existir otros factores como campañas de marketing, tendencias globales o funcionalidades atractivas de la plataforma que contribuyen a su éxito.
                •	Concluí que no hay una respuesta definitiva porque el aumento de usuarios podría deberse a diversas razones, no necesariamente al trabajo innovador de los influenciadores. Por ejemplo, la plataforma podría haber implementado nuevas características o promociones que atraen a más personas.
                •	No es posible afirmar que los influenciadores están innovando bien solo por el incremento de usuarios. Factores como la publicidad de la plataforma, alianzas estratégicas o incluso eventos sociales pueden influir en su popularidad, por lo que necesitamos más información para llegar a una conclusión.
                •	Porque, basándome en la sugerencia del gurú, aunque hay muchos usuarios, esto no garantiza que los influenciadores estén innovando efectivamente. La aceptación de la plataforma puede estar influenciada por elementos externos como necesidades del mercado, migración de usuarios desde otras plataformas o modas pasajeras.
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA  (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (37)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente la falta de evidencia suficiente o los vacíos en las premisas, ni explica otros posibles factores que podrían influir en el éxito de la plataforma, aunque se refiera a alguna alternativa incorrecta.
                Ejemplos de explicaciones de 0 puntos:
                o	"La opción a menciona lo que dijo un gurú de la tecnología, pero eso no explica si los influenciadores realmente están innovando. No creo que esa sea la respuesta correcta." 
                o	"Es interesante que haya tantas personas usando la plataforma, pero no estoy seguro de que sea solo por los influenciadores." 
                o	"Seleccioné esa opción porque el contenido de la plataforma parece ser pésimo, como dice la opción b, pero no estoy seguro de qué más podría influir en el éxito de la plataforma." 
                o	"El número de usuarios es alto, pero eso no significa que los influenciadores estén haciendo algo especial." 
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona que no hay suficiente evidencia para concluir que los influenciadores están innovando, pero no desarrolla completamente el problema, y descarta incorrectamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 1 puntos:
                o	"Aunque la plataforma tiene muchos usuarios, como sugiere la opción a, no podemos concluir que esto se deba al trabajo de los influenciadores, ya que no hay pruebas claras." 
                o	"Es posible que los influenciadores estén haciendo un buen trabajo, pero tampoco hay pruebas suficientes para afirmarlo, y el crecimiento de usuarios puede deberse a otros factores." 
                o	"Aunque el contenido de la plataforma no es el mejor, como menciona la opción b, eso no nos dice si los influenciadores están innovando realmente."
                o	"Es posible que el éxito de la plataforma no tenga nada que ver con los influenciadores, pero tampoco se puede afirmar con certeza." 
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente la falta de evidencia suficiente y los vacíos en las premisas, además de explicar que otros factores podrían estar contribuyendo al éxito de la plataforma. Descartan correctamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos:
                o	"Seleccioné la opción c porque no podemos concluir que los influenciadores estén haciendo un buen trabajo solo porque la plataforma tiene muchos usuarios. La opción a menciona la opinión de un gurú de la tecnología, pero eso no es suficiente evidencia para afirmar que los influenciadores están innovando." 
                o	"Aunque la plataforma tiene muchos usuarios, no hay pruebas claras de que sea gracias a los influenciadores. Pueden haber otros factores, como las campañas de marketing o tendencias que aumentan el uso de la plataforma." 
                o	"Aunque la opción b sugiere que el contenido es malo, eso no es suficiente para concluir si los influenciadores están innovando o no. Sin pruebas claras, no podemos hacer suposiciones apresuradas sobre el éxito de la plataforma." 
                o	"El éxito de la plataforma puede depender de muchos factores, no solo de los influenciadores. La falta de evidencia sobre su impacto hace difícil llegar a una conclusión clara."',
                'valor_opcion' => null
            ],

            //Item 40
            [
                'id_criterio' => 17,
                'id_pregunta' => 88,
                'texto' => 'Nota 1: El objetivo de este ítem (40) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e: Indistintamente de las preocupaciones medioambientales, Rafa está suponiendo que las aletas de tiburón en realidad aportan al rejuvenecimiento, pero no estamos seguros de que así sea, se necesita evidencia científica) del anterior ítem (39), comprendiendo la suposición apresurada de Rafael, quien propone la creación de un producto cosmético a partir de las propiedades de la aleta de tiburón sin tener evidencia científica que respalde dichas propiedades rejuvenecedoras. Se espera que el estudiante identifique que se necesita información científica o adicional antes de llegar a esa conclusión.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (40), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (40).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (40) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (39); y el segundo escenario es explicación que incluye la referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (39); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la suposición apresurada de Rafael, quien propone la creación de un producto cosmético a partir de las propiedades de la aleta de tiburón sin tener evidencia científica que respalde dichas propiedades rejuvenecedoras. Se espera que el estudiante identifique que se necesita información científica o adicional antes de llegar a esa conclusión.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (40).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (39), estas fueron:
                a)	Se ha mencionado en la charla que ingerir este plato ayuda a las personas a tener una piel más sana y a detener el envejecimiento, pero, no sé si sea más importante la apariencia física o los aportes de estos animales al ecosistema.
                b)	Definitivamente las culturas son muy diversas y, desafortunadamente, algunas de ellas desestiman el daño ocasionado al ecosistema, para estas culturas prima el hecho de satisfacer sus placeres o garantizar ganancias económicas. 
                c)	Si este plato representa grandes aportes a ese sector de la economía hace parte de la cultura ancestral y puede generar empleos directos e indirectos, pero sería mejor hacer algo para que los tiburones se reproduzcan masivamente. 
                d)	Es preocupante el asunto de la extinción de estos animales, pero indudablemente Rafa es un chico listo, tiene razón y más si se piensa en que este plato es muy consumido en China.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (40). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (40). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (39)):
                
                •	Explicaciones de 0 puntos:
                o	Criterio: La respuesta no aborda la suposición apresurada de Rafael o no está relacionada con la situación planteada.
                o	Ejemplos de explicaciones de 0 puntos:
                •	"Rafael está suponiendo algo."
                •	"No sabemos si las aletas de tiburón son realmente rentables."
                •	"Rafael podría estar equivocado sobre los beneficios de las aletas de tiburón."
                •	"Deberíamos enfocarnos en productos que no afecten al medio ambiente."
                •	"Es una buena idea aprovechar las propiedades de las aletas de tiburón."
                •	"No estoy de acuerdo con Rafael porque debemos proteger a los tiburones."
                •	"Las aletas de tiburón son costosas y no podemos usarlas así."
                •	"Es mejor buscar alternativas más sostenibles."
                •	"Seleccioné esa alternativa porque me gusta cómo suena."
                •	Explicaciones de 1 punto:
                o	Criterio: La comprensión de la suposición apresurada está parcialmente desarrollada. El estudiante reconoce que Rafael está haciendo una suposición sin evidencia, pero no profundiza en la explicación o no menciona la necesidad de evidencia científica.
                o	Ejemplos de explicaciones de 1 punto:
                •	"Rafael está suponiendo que las aletas de tiburón tienen propiedades rejuvenecedoras, pero no hay evidencia concreta de ello."
                •	"La suposición de Rafael sobre los beneficios cosméticos de las aletas de tiburón no está probada."
                •	"Rafael cree que las aletas de tiburón ayudan al rejuvenecimiento, pero no hay pruebas suficientes para respaldar esa afirmación."
                •	"No estamos seguros de que las aletas de tiburón tengan esas propiedades, necesitamos más información."
                •	"Es posible que las aletas no tengan efectos rejuvenecedores, por lo que deberíamos investigarlo primero."
                •	"Rafael está basando su idea en algo que no está comprobado científicamente."
                •	"Creo que las propiedades de las aletas de tiburón son más mito que realidad."
                •	"Sin pruebas, no podemos estar seguros de los beneficios que menciona Rafael."
                •	"Seleccioné esa alternativa porque Rafael está haciendo una suposición sin confirmar."
                •	Explicaciones de 2 puntos:
                o	Criterio: La comprensión de la suposición apresurada está bien desarrollada. El estudiante explica claramente que Rafael está haciendo una suposición sin evidencia científica y enfatiza la necesidad de obtener información científica o adicional antes de proceder. Demuestra análisis crítico y una comprensión profunda del problema.
                o	Ejemplos de explicaciones de 2 puntos:
                •	"Rafael está haciendo una suposición apresurada al afirmar que las aletas de tiburón tienen propiedades rejuvenecedoras sin tener evidencia científica que lo respalde. Es importante verificar esta información con estudios antes de desarrollar un producto cosmético."
                •	"La conclusión de Rafael se basa en la suposición no comprobada de que las aletas de tiburón aportan al rejuvenecimiento. Necesitamos evidencia científica para confirmar esto antes de invertir en la creación de un nuevo producto."
                •	"Rafael está asumiendo sin pruebas que las aletas de tiburón tienen beneficios rejuvenecedores. Sin estudios científicos que lo demuestren, sería irresponsable avanzar con su propuesta."
                •	"Seleccioné esa alternativa porque, aunque se dice que las aletas tienen propiedades beneficiosas, no hay evidencia científica que lo confirme. Antes de crear un producto, debemos asegurarnos de que esas propiedades existen."
                •	"Infiero que necesitamos evidencia científica para respaldar la idea de Rafael, ya que actualmente está basándose en una creencia no comprobada sobre las propiedades rejuvenecedoras de las aletas de tiburón."
                •	"Es importante cuestionar la suposición de Rafael porque sin pruebas científicas, podríamos invertir recursos en un producto ineficaz y además contribuir a la problemática ambiental asociada con la caza de tiburones."
                •	"Concluí que necesitamos investigar científicamente si las aletas de tiburón realmente tienen propiedades rejuvenecedoras. Sin esta evidencia, no es prudente desarrollar un producto cosmético basado en una suposición."
                •	"De acuerdo con la falta de evidencia científica sobre los beneficios rejuvenecedores de las aletas de tiburón, es necesario cuestionar la propuesta de Rafael y buscar información respaldada antes de proceder."
                •	"Porque sin estudios científicos que avalen las propiedades que Rafael menciona, su conclusión es una suposición apresurada. Debemos basar nuestras decisiones en datos verificables para evitar errores."
                •	"Rafael está cometiendo una falacia al asumir que las aletas tienen propiedades rejuvenecedoras sin evidencia científica. Necesitamos investigaciones que respalden esa afirmación antes de actuar."
                •	"La idea de Rafael carece de fundamento científico, y sin pruebas que confirmen las propiedades de las aletas de tiburón, no es razonable avanzar con su propuesta."
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (39)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente la suposición apresurada de Rafael ni el problema de falta de evidencia científica, o su respuesta es irrelevante, aunque se refiera a alguna alternativa incorrecta.
                Ejemplos de explicaciones de 0 puntos:
                o	"La opción a habla de que las aletas de tiburón mejoran la piel, pero eso no responde al problema de la falta de pruebas científicas. No estoy seguro de que esa sea una respuesta válida."
                o	"Es preocupante que se utilicen animales como los tiburones en productos cosméticos, pero no creo que esa sea la principal preocupación aquí." 
                o	"Creo que Rafa tiene razón, pero la opción b también menciona un punto válido sobre las ganancias económicas, aunque eso no tiene mucho que ver con lo que está proponiendo Rafael." 
                o	"Es difícil saber si las aletas de tiburón son tan beneficiosas como se dice, pero la economía también es importante." 
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona que Rafael está haciendo una suposición sin evidencia científica, pero no desarrolla completamente el problema, y descarta incorrectamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 1 punto:
                o	"Rafael está suponiendo que las aletas rejuvenecen, pero la opción c menciona el empleo y la cultura, lo cual es interesante, pero no cambia el hecho de que no hay pruebas que respalden lo que Rafa dice."
                o	"Rafa cree que las aletas rejuvenecen, pero no hay pruebas suficientes. Aunque las ganancias económicas son importantes, eso no justifica su propuesta." 
                o	"Rafa está proponiendo un producto sin pruebas científicas, pero la opción d menciona China y la popularidad de este plato. Sin embargo, la popularidad no es suficiente para respaldar las propiedades rejuvenecedoras." 
                o	"Es posible que Rafa tenga una buena idea, pero sin pruebas científicas, no podemos confiar en sus suposiciones. Además, las preocupaciones culturales no son lo más relevante en este caso." 
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente la suposición apresurada de Rafael y el problema de falta de evidencia científica, además de descartar correctamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos:
                o	"Seleccioné la opción e porque Rafa está asumiendo que las aletas de tiburón rejuvenecen sin tener pruebas científicas. La opción a, que menciona beneficios para la piel, no es válida porque no hay evidencia que lo respalde científicamente." 
                o	"Rafa cree que las aletas de tiburón rejuvenecen, pero sin pruebas científicas, no podemos confiar en esa suposición. Las creencias populares o el valor económico de las aletas no justifican esta propuesta sin evidencia." 
                o	"Rafael está haciendo una suposición apresurada sin pruebas científicas. La opción c menciona la cultura y los empleos, pero eso no resuelve el problema principal: la falta de evidencia científica sobre las propiedades rejuvenecedoras de las aletas." 
                o	"Aunque Rafa propone que las aletas rejuvenecen, no hay pruebas científicas que lo respalden. Las preocupaciones sobre la extinción de los tiburones o su popularidad en China no tienen relación con la falta de evidencia sobre sus propiedades."',
                'valor_opcion' => null
            ],

            //Item 42
            [
                'id_criterio' => 18,
                'id_pregunta' => 90,
                'texto' => 'Nota 1: El objetivo de este ítem es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal b: El hecho de aceptar salir con uno de ellos no implica que deba aceptar salir con los demás, analiza mejor las cosas) del anterior ítem (41), comprendiendo el razonamiento inadecuado de la joven, quien piensa que aceptar salir con uno de los pretendientes implica tener que salir con todos los demás. Se espera que el estudiante identifique que esta suposición es errónea y que cada decisión de salir con alguien es independiente.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (42), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (42).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (42) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (41); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (41); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende el razonamiento inadecuado de la joven, quien piensa que aceptar salir con uno de los pretendientes implica tener que salir con todos los demás. Se espera que el estudiante identifique que esta suposición es errónea y que cada decisión de salir con alguien es independiente.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (42).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (41), estas fueron:
                a)	Respetamos tu forma de ver las cosas, las amigas están para apoyarse entre sí bien sea en lo emociona o sentimental. 
                c)	Algunas personas quieren salir con alguien y no encuentran la oportunidad, otras encuentran la oportunidad y no lo hacen.
                d)	El hecho se salir con alguno implica un compromiso con los demás, pues debe ser coherente en sus acciones. 
                e)	La vida pasa y las cosas cambian, las oportunidades no deben desaprovecharse, la juventud debe vivirse con toda la responsabilidad que amerita.  
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (42). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (42). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (41)):
                Formas de puntuar la explicación:
                •	Explicaciones de 0 puntos:
                o	Criterio: La respuesta no aborda el razonamiento erróneo de la joven o no está relacionada con la situación planteada. 
                o	Ejemplos de explicaciones de 0 puntos:
                •	"Seleccioné esa alternativa porque me gusta cómo suena."
                •	"A mi modo de ver, salir con uno es lo mismo que salir con todos."
                •	"Seleccioné esa alternativa porque las amigas deben apoyarse siempre."
                •	"Creo que es una buena opción, pero no estoy seguro de por qué."
                •	"Elegí esa respuesta porque me gusta la letra b)."
                •	"La joven puede salir con quien quiera, no importa."
                •	"Es su decisión y nadie debe juzgarla."
                •	"No me interesa lo que decida la joven."
                •	Explicaciones de 1 punto:
                o	Criterio: La identificación del razonamiento erróneo de la joven está parcialmente desarrollada. El estudiante reconoce que la joven está equivocada, pero no profundiza en la explicación o no especifica por qué su razonamiento es incorrecto.
                o	Ejemplos de explicaciones de 1 punto:
                •	"Seleccioné esa alternativa porque la joven está equivocada."
                •	"Según observo, la joven no tiene razón al pensar que debe salir con todos."
                •	"Concluí que la joven hace una suposición incorrecta."
                •	"Elegí esa opción porque creo que la joven debería pensar mejor las cosas."
                •	"Seleccioné esa respuesta porque la joven está haciendo una generalización."
                •	"A mi modo de ver, ella no tiene que salir con todos si no quiere."
                •	"La joven está confundida al pensar que debe aceptar a todos."
                •	"Ella debería entender que puede elegir con quién salir."
                •	Explicaciones de 2 puntos:
                o	Criterio: La comprensión del razonamiento erróneo de la joven está bien desarrollada. El estudiante explica claramente por qué la suposición de la joven es incorrecta, demostrando análisis crítico y una comprensión profunda del problema.
                o	Ejemplos de explicaciones de 2 puntos:
                •	"Seleccioné esa alternativa porque salir con una persona no significa que tenga que salir con todas las demás. Es un error pensar así."
                •	"De acuerdo con mi análisis, la joven está pensando que, si acepta a uno, tendrá que aceptar a todos, lo cual no es cierto. Cada decisión es independiente."
                •	"Infiero que la joven está equivocada al pensar que una acción llevará inevitablemente a otras similares. Aceptar una cita no significa aceptar todas las demás."
                •	"Seleccioné esa alternativa porque la joven cree que, si sale con uno, tendrá que salir con todos, lo cual no es cierto. Puede decidir con quién quiere salir sin comprometerse con los demás."
                •	"Puedo concluir que la joven está haciendo una suposición incorrecta al pensar que aceptar una salida con uno la obligaría a salir con todos. Cada salida es una decisión separada."
                •	"La joven está cometiendo una falacia de pendiente resbaladiza al pensar que salir con uno implica necesariamente salir con todos. Esto es un razonamiento erróneo."
                •	"Ella está aplicando un razonamiento equivocado al creer que aceptar a uno significa aceptar a todos. Sus amigas pueden ayudarle a ver que puede elegir libremente."
                •	"Porque concluí que su miedo a tener que salir con todos es infundado. Salir con uno no la compromete a salir con los demás, y puede establecer límites."
                •	"De acuerdo con esto, las amigas pueden explicarle que cada invitación es independiente y que aceptar una no implica aceptar las demás. Su razonamiento es incorrecto."
                •	"La joven está utilizando una falacia lógica al suponer que una acción llevará inevitablemente a otra. Aceptar salir con alguien no la obliga a nada más."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECTA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (41)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: El estudiante no identifica claramente el razonamiento erróneo de la joven ni aborda el problema de manera adecuada, aunque haga referencia a alguna alternativa incorrecta.
                Ejemplos de explicaciones de 0 puntos:
                •	"La opción d menciona que salir con uno implica un compromiso con los demás, pero eso no tiene sentido, y la joven debería poder decidir con quién quiere salir sin comprometerse."
                •	"La joven no tiene que pensar en compromisos con los demás. Las decisiones de salir con alguien no tienen que ver con lo que piensen los otros, y eso no está bien explicado."
                •	"Elegí la opción c, pero no creo que el hecho de que unas personas no puedan salir con alguien afecte la decisión de la joven. Eso no resuelve su problema de tener que decidir sobre varios pretendientes."
                •	"La joven puede tomar sus propias decisiones y no debería preocuparse por lo que hagan o no hagan otras personas. El problema es que no está pensando correctamente al querer salir con todos los que la invitan."
                Explicaciones de 1 punto:
                Criterio: El estudiante menciona que la joven está equivocada en su razonamiento, pero no profundiza en el análisis, y descarta incorrectamente una o varias alternativas.
                Ejemplos de explicaciones de 1 punto:
                •	"La joven no tiene que salir con todos, y la opción d sobre compromiso está equivocada. Pero tampoco es muy claro por qué se siente obligada."
                •	"Ella debería poder elegir sin sentir presión de salir con todos. Lo que importa es que no necesita comprometerse con nadie si no quiere."
                •	"La opción e habla sobre aprovechar la juventud, pero eso no explica bien por qué la joven piensa que debe salir con todos los demás."
                •	"Salir con alguien no implica un compromiso con otras personas. Ella debería saber que puede decidir libremente."
                Explicaciones de 2 puntos:
                Criterio: El estudiante identifica claramente el razonamiento erróneo de la joven y descarta correctamente una o varias alternativas incorrectas, explicando de manera clara por qué la suposición de la joven es incorrecta.
                Ejemplos de explicaciones de 2 puntos:
                •	"La opción a menciona apoyo entre amigas, pero eso no ayuda a resolver el problema principal. La joven cree que salir con uno implica tener que salir con los demás, lo cual es falso. Puede decidir por sí misma."
                •	"El problema es que la joven está cometiendo un error al pensar que una decisión la obliga a aceptar a todos los pretendientes. Cada decisión es independiente y no tiene que ver con los demás."
                •	"La opción c sobre oportunidades perdidas no tiene sentido aquí. La joven cree erróneamente que salir con uno la obliga a salir con todos, cuando en realidad puede tomar cada decisión de forma independiente."
                •	"La joven está asumiendo que debe salir con todos los pretendientes, lo cual es un error. Salir con una persona no significa tener que comprometerse con los demás."',
                'valor_opcion' => null
            ],

            //Item 44
            [
                'id_criterio' => 19,
                'id_pregunta' => 92,
                'texto' => 'Nota 1: El objetivo de este ítem (44) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal d: El hecho de construir un parque no significa que nos comprometamos a construir más. Se trata de decisiones independientes.) del anterior ítem (43), comprendiendo el razonamiento inadecuado (falacia) de la madre, quien piensa que permitir la construcción de un parque ecológico implica que se permitirá la construcción de muchos otros parques y que eventualmente la zona se convertirá en un área urbana congestionada, destruyendo el vecindario tranquilo y afectando la vida de sus hijos. Se espera que el estudiante identifique que esta suposición es errónea y que cada decisión de construcción es independiente.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (44), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (44).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (44) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (43); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (43); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende el razonamiento inadecuado (falacia) de la madre, quien piensa que permitir la construcción de un parque ecológico implica que se permitirá la construcción de muchos otros parques y que eventualmente la zona se convertirá en un área urbana congestionada, destruyendo el vecindario tranquilo y afectando la vida de sus hijos. Se espera que el estudiante identifique que esta suposición es errónea y que cada decisión de construcción es independiente.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (44).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (43), estas fueron:
                a)	Respetamos tu preocupación, pero es importante considerar los beneficios que el parque podría traer.
                b)	La construcción de un solo parque no afectará la tranquilidad de la zona, podemos discutirlo más en profundidad antes de decidir
                c)	Algunas personas quieren más espacios verdes y otras prefieren mantener las cosas como están.
                e)	La vida sigue y las comunidades cambian, no debemos desaprovechar las oportunidades de mejora, siempre que lo hagamos con responsabilidad.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (44). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (44). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (43)):
                Formas de puntuar la explicación:
                •	Explicaciones de 0 puntos:
                o	Criterio: La respuesta no aborda el razonamiento erróneo de la madre o no está relacionada con la situación planteada. 
                o	Ejemplos de explicaciones de 0 puntos:
                •	"Seleccioné esa alternativa porque me gusta cómo suena."
                •	"A mi modo de ver, construir un parque lleva a más construcción."
                •	"Seleccioné esa alternativa porque los vecinos deben apoyarse siempre."
                •	"Creo que es una buena opción, pero no estoy seguro de por qué."
                •	"Elegí esa respuesta porque me gusta la letra d)."
                •	"La madre tiene razón, debemos evitar construir más cosas."
                •	"Es importante proteger nuestro vecindario de cualquier construcción."
                •	"No me interesa lo que decidan los vecinos."
                •	"Los parques son malos para la comunidad."
                •	Explicaciones de 1 punto:
                o	Criterio: La identificación del razonamiento erróneo de la madre está parcialmente desarrollada. El estudiante reconoce que la madre está equivocada, pero no profundiza en la explicación o no especifica claramente por qué su razonamiento es incorrecto.
                o	Ejemplos de explicaciones de 1 punto:
                •	"Seleccioné esa alternativa porque la madre está equivocada."
                •	"Según observo, la madre no tiene razón al pensar que un parque llevará a más construcción."
                •	"Concluí que la madre hace una suposición incorrecta."
                •	"Elegí esa opción porque creo que la madre debería pensar mejor las cosas."
                •	"Seleccioné esa respuesta porque la madre está haciendo una generalización."
                •	"La madre está confundida al pensar que construir un parque afectará el vecindario."
                •	"Ella debería entender que un parque es bueno para la comunidad."
                •	"No estoy de acuerdo con la madre, su razonamiento no es correcto."
                •	"La madre está exagerando la situación."
                •	Explicaciones de 2 puntos:
                o	Criterio: La identificación del razonamiento erróneo de la madre está bien desarrollada. El estudiante explica claramente por qué la suposición de la madre es incorrecta, demostrando análisis crítico y una comprensión profunda del problema.
                o	Ejemplos de explicaciones de 2 puntos:
                •	"Seleccioné esa alternativa porque construir un parque no significa que debamos construir más parques. Es un error pensar que una cosa llevará inevitablemente a la otra."
                •	"De acuerdo con mi análisis, la madre está pensando que si construimos un parque, pronto habrá muchos más y la zona se urbanizará, lo cual no es cierto. Cada decisión es independiente."
                •	"Infiero que la madre está equivocada al pensar que una acción llevará inevitablemente a otra similar. Construir un parque no significa que tengamos que construir muchos más."
                •	"Seleccioné esa alternativa porque la madre cree que si construimos un parque, pronto habrá muchos más y el vecindario se volverá congestionado, lo cual no es cierto. Podemos decidir construir solo este parque."
                •	"Puedo concluir que la madre está haciendo una suposición incorrecta al pensar que construir un parque llevará inevitablemente a más construcción. Cada decisión de construir debe ser evaluada por separado."
                •	"La madre está cometiendo una falacia de pendiente resbaladiza al pensar que permitir un parque ecológico conducirá a la urbanización total de la zona. Esto es un razonamiento erróneo."
                •	"Ella está aplicando un razonamiento equivocado al creer que construir un parque llevará a la destrucción del vecindario. Podemos controlar el desarrollo futuro."
                •	"Porque concluí que su miedo a que se construyan más parques y se congestione la zona es infundado. Cada proyecto debe ser aprobado individualmente."
                •	"De acuerdo con esto, los vecinos pueden explicarle que apoyar este parque no implica comprometerse a futuras construcciones. Su razonamiento es incorrecto."
                •	"La madre está suponiendo que una acción llevará inevitablemente a otras no deseadas, lo cual es una falacia lógica. Construir el parque ecológico no significa que perderemos el control sobre el desarrollo de nuestra comunidad."
                •	"La preocupación de la madre se basa en un razonamiento erróneo, ya que la construcción de este parque no garantiza que se construirán más y que el área se urbanizará en exceso."
                •	"La madre está usando una falacia al pensar que un parque llevará a la urbanización completa. Podemos construir este parque y aún mantener el vecindario tranquilo."
                •	"Infiero que la madre está cometiendo un error al creer que apoyar este parque implica aceptar futuras construcciones indeseadas. Cada proyecto es independiente y se puede evaluar en su momento."
                
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (DIRECTA O INDIRECRA) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (43)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: Respuestas que no abordan el razonamiento erróneo de la madre ni el tema central de la construcción del parque. Son irrelevantes o superficiales, y aunque mencionen una alternativa incorrecta, no conectan adecuadamente con el error de fondo.
                Ejemplos de explicaciones de 0 puntos:
                •	“La opción b menciona la tranquilidad de la zona, pero la madre debería preocuparse más por la seguridad del parque que por si vendrán más construcciones.”
                •	“Construir más cosas no siempre es malo, pero lo importante es que los parques pueden mejorar la calidad de vida.”
                •	“La opción e habla sobre cómo cambian las comunidades, pero eso no responde a la preocupación de la madre sobre el vecindario. Lo que importa es que el parque esté bien diseñado.”
                •	“La madre debería dejar de preocuparse por el parque, es solo un espacio verde más que puede ser bueno para todos.”
                Explicaciones de 1 punto:
                Criterio: Reconocen el error en el razonamiento de la madre, pero no profundizan en la explicación o no especifican claramente por qué su razonamiento es incorrecto. Descartan de manera parcial o superficial una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 1 punto:
                •	“La opción a habla de respetar las preocupaciones, pero el verdadero error de la madre es pensar que construir un parque llevará a más construcciones, y eso no está bien fundamentado.”
                •	“La madre está equivocada, pero no necesariamente habrá más parques si construyen este. Las decisiones sobre parques no son automáticas.”
                •	“La opción c sobre las preferencias de los vecinos no responde a que la madre piensa que se construirá más. Ella está mal al pensar que este parque llevará a más construcción.”
                •	“Es claro que la madre está equivocada, pero ella no debería preocuparse tanto. Un parque no garantiza que se construyan más, y podemos analizar cada caso por separado.”
                Explicaciones de 2 puntos:
                Criterio: Identifican claramente el error en el razonamiento de la madre y explican por qué cada decisión de construcción es independiente, descartando correctamente una o varias alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos:
                •	 “La madre está equivocada al pensar que construir un parque llevará a más. La opción b sobre discutir la tranquilidad de la zona no resuelve el verdadero problema: construir un parque no significa que habrá más parques en el futuro.”
                •	“Construir un parque no significa que vendrán más, la madre está errando al pensar que esto afectará el vecindario. Cada decisión de construcción debe ser independiente.”
                •	 “La opción e sobre cómo cambian las comunidades no aborda el error de la madre. Ella debería entender que la construcción de un solo parque no garantiza la urbanización del vecindario.”
                •	“Es un error pensar que este parque llevará a más construcción. La madre debería entender que cada decisión es individual y no afectará al vecindario de la forma que ella teme.”',
                'valor_opcion' => null
            ],

            //Item 46
            [
                'id_criterio' => 20,
                'id_pregunta' => 94,
                'texto' => 'Nota 1: El objetivo de este ítem (46) es evaluar la capacidad del estudiante para explicar adecuadamente por qué seleccionó la alternativa correcta (literal b: La confiabilidad de la comunicación que ha recibido por parte de la universidad) del anterior ítem (45), considerando que es información muy importante que necesita Pepito para tomar una decisión acerca de la beca. Se espera que el estudiante:
                    •	Identifique la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, reconociendo el riesgo de transferir dinero sin estar seguro de la legitimidad de la oferta.
                    •	Justifique por qué la alternativa seleccionada es la más importante, relacionándola con la protección contra posibles fraudes y asegurando una decisión informada y segura.
                    Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (46), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (46).
                    Nota 3: Al asignar la puntuación a la respuesta de este ítem (46) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (45); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (45); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante explica adecuadamente por qué considera que La confiabilidad de la comunicación que ha recibido Pepito por parte de la universidad es información muy importante que necesita Pepito para tomar una decisión acerca de la beca. Se espera que el estudiante: • Identifique la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, reconociendo el riesgo de transferir dinero sin estar seguro de la legitimidad de la oferta. • Justifique por qué la alternativa seleccionada es la más importante, relacionándola con la protección contra posibles fraudes y asegurando una decisión informada y segura.
                    Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (46).
                    Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (45), estas fueron:
                    a)	La experiencia de un familiar o amigo que ha estudiado en el extranjero.
                    c)	La cultura y gastronomía del país al que llegará a estudiar. 
                    d)	El plan de estudios, la ubicación de la Universidad y de lugar en el que residirá.
                    e)	La zona horaria del país y los climas o las estaciones del año.
                    Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                    Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (46). 
                    Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (46). 
                    
                    Formas de puntuar la explicación:
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (45)):
                    La puntuación se asignará en función de cómo el estudiante desarrolla la justificación de su elección de la alternativa más importante:
                    •	Explicaciones de 0 puntos:
                    o	Criterio: La explicación no identifica adecuadamente la necesidad de verificar la confiabilidad del ofrecimiento de la universidad ni justifica por qué la alternativa seleccionada es la más importante.
                    o	Ejemplos de explicaciones de 0 puntos:
                    •	"Seleccioné esa alternativa porque la experiencia de otros en el extranjero es muy importante."
                    •	"A mi modo de ver, todas las opciones son igualmente importantes."
                    •	"Elegí esa opción porque es interesante conocer la cultura y gastronomía del país."
                    •	"Seleccioné esa opción porque quiero saber sobre las estaciones y zona horaria."
                    •	"Creo que Pepito debería considerar todas las opciones antes de decidir."
                    •	Explicaciones 1 punto:
                    o	Criterio: La explicación muestra una identificación parcial de la necesidad de verificar la confiabilidad del ofrecimiento de la universidad y justifica la elección de la alternativa seleccionada de manera superficial.
                    o	Ejemplos de explicaciones de 1 punto:
                    •	"Seleccioné esa alternativa porque la comunicación de la universidad es importante, pero también otras cosas."
                    •	"Concluí que la comunicación de la universidad es importante, pero también lo es la experiencia de otros."
                    •	"Según observo, Pepito debe confiar en la comunicación de la universidad, pero también en la cultura del país."
                    •	"Elegí esa opción porque Pepito necesita verificar la oferta, pero también otros aspectos."
                    •	"Seleccioné la comunicación confiable porque es importante, aunque no lo único."
                    •	Explicaciones 2 puntos:
                    o	Criterio: La explicación identifica claramente la necesidad de verificar la confiabilidad del ofrecimiento de la universidad y justifica adecuadamente por qué la alternativa seleccionada es la más importante.
                    o	Ejemplos de explicaciones de 2 puntos:
                    •	"Seleccioné la confiabilidad de la comunicación porque es crucial verificar que la oferta de la universidad es legítima antes de transferir el dinero."
                    •	"De acuerdo con mi análisis, es vital confirmar la veracidad de la oferta mediante la confiabilidad de la comunicación recibida para evitar fraudes."
                    •	"Infiero que Pepito debe confirmar que la oferta es real revisando la confiabilidad de la comunicación para tomar una decisión informada y segura."
                    •	"Seleccioné la confiabilidad de la comunicación porque es fundamental asegurarse de que la beca es genuina antes de transferir cualquier dinero."
                    •	"Puedo concluir que la verificación de la confiabilidad de la comunicación es necesaria para asegurarse de que la oferta es real y evitar riesgos financieros."
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA Y DESCARTE DIRECTA O INDIRECTA DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (45)):
                    Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                    Explicaciones de 0 puntos:
                    Criterio: Respuestas que no identifican adecuadamente la necesidad de verificar la confiabilidad del ofrecimiento de la universidad ni justifican por qué la alternativa seleccionada es la más importante. Mencionan una alternativa incorrecta, pero no conectan de manera adecuada con el objetivo del ítem ni con los riesgos asociados a la oferta.
                    Ejemplos de explicaciones de 0 puntos:
                    •	“La opción d es importante porque la ubicación de la universidad también influye en la decisión, aunque la comunicación también lo sea.”
                    •	“La cultura y la gastronomía del país (alternativa c) son cosas que Pepito debe conocer antes de tomar una decisión sobre la beca.”
                    •	“Elegí la opción b porque Pepito necesita saber sobre la oferta, pero también debería pensar en cómo afectará el clima (alternativa e) a su vida allí.”
                    •	“La universidad puede ofrecer la beca, pero Pepito también debe considerar la experiencia de amigos en el extranjero (alternativa a), ya que eso también le puede ayudar.”
                    Explicaciones de 1 punto:
                    Criterio: Reconocen de manera superficial la necesidad de verificar la confiabilidad del ofrecimiento de la universidad, pero no profundizan en la justificación. Descartan de manera parcial o superficial una o varias alternativas incorrectas, sin demostrar un razonamiento claro o completo.
                    Ejemplos de explicaciones de 1 punto:
                    •	“Pepito debe verificar que la comunicación de la universidad es confiable, pero también es relevante la experiencia de su amigo (alternativa a), ya que eso le dará más confianza.”
                    •	“Elegí la opción b porque es importante que Pepito se asegure de la oferta, pero también debe considerar el plan de estudios y la ubicación de la universidad (alternativa d), ya que son importantes.”
                    •	“Pepito debería verificar la comunicación que recibió, pero también es necesario que tenga en cuenta otros aspectos como la cultura y gastronomía (alternativa c) para estar seguro de su decisión.”
                    •	“La comunicación es importante, pero Pepito también debería tener en cuenta la experiencia de otros que ya han estudiado en el extranjero, como lo decía la alternativa a, ya que eso le dará una visión más completa.”
                    Explicaciones de 2 puntos:
                    Criterio: Identifican claramente la necesidad de verificar la confiabilidad del ofrecimiento de la universidad y justifican adecuadamente por qué la alternativa seleccionada es la más importante. Descartan correctamente una o varias alternativas incorrectas, explicando por qué no son prioritarias en la toma de decisiones.
                    Ejemplos de explicaciones de 2 puntos:
                    •	“Seleccioné la confiabilidad de la comunicación de la universidad porque Pepito necesita asegurarse de que la oferta es legítima antes de enviar dinero. La cultura y gastronomía del país son detalles interesantes, pero no le ayudan a verificar si la oferta es verdadera o no.”
                    •	“Pepito debe confirmar que la oferta de la universidad es real verificando la confiabilidad de la comunicación. Aunque la experiencia de otros, como se mencionó en la alternativa a, puede ser útil, esto no garantiza que la oferta que recibió Pepito sea genuina.”
                    •	“Elegí la confiabilidad de la comunicación porque es importante que Pepito se asegure de que la oferta es legítima antes de transferir dinero. Aunque el plan de estudios y la ubicación son relevantes, no son más importantes que confirmar si la beca es real.”
                    •	“Es fundamental que Pepito verifique la confiabilidad de la oferta para evitar ser víctima de fraude. De acuerdo con la alternativa e,  La zona horaria y el clima no son cruciales para la decisión de enviar dinero, lo más importante es asegurarse de que la oferta es verdadera.”',
                'valor_opcion' => null
            ],

            //Item 48
            [
                'id_criterio' => 21,
                'id_pregunta' => 96,
                'texto' => 'Nota 1: el objetivo de este ítem (48) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal e: Apoyaré el proyecto porque las organizaciones de Derechos Humanos lo respaldan después de una evaluación detallada.) del anterior ítem (47), comprendiendo la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada sobre un proyecto de ley. Se espera que el estudiante identifique que Margarita decide apoyar el proyecto porque organizaciones de derechos humanos lo respaldan tras una evaluación detallada, lo que le da confianza en que el proyecto es legítimo y beneficioso.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (48), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 2 puntos a la explicación dada en la respuesta abierta de este ítem (48).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (48) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (47); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (47); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada sobre un proyecto de ley. Se espera que el estudiante identifique que Margarita decide apoyar el proyecto porque organizaciones de derechos humanos lo respaldan tras una evaluación detallada, lo que le da confianza en que el proyecto es legítimo y beneficioso.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (48).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (47), estas fueron:
                a)	Voy a apoyar el proyecto porque todos mis amigos y compañeros de clase lo apoyan.
                b)	Voy a esperar más cobertura mediática para decidir si apoyar el proyecto.
                c)	Apoyaré el proyecto si los políticos que lo impulsan tienen una buena reputación.
                d)	No apoyaré el proyecto hasta que esté segura de que no tendrá consecuencias económicas negativas.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (48). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (48). 
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (47)):
                Formas de puntuar la explicación:
                •	Explicaciones de 0 puntos:
                o	Criterio: La respuesta no identifica la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada, o está mal desarrollada o no relacionada con la situación planteada. 
                o	Ejemplos de explicaciones de 0 puntos:
                •	"Seleccioné esa alternativa porque me gusta cómo suena."
                •	"A mi modo de ver, la opinión de sus amigos es suficiente."
                •	"Elegí esa opción porque me parece interesante."
                •	"Seleccioné esa opción porque quiero saber más sobre el tema."
                •	"Creo que Margarita debería considerar todas las opciones antes de decidir."
                •	"Margarita debe confiar en lo que dicen los rumores."
                •	"No sé por qué la seleccioné, solo me pareció bien."
                •	"Margarita puede decidir sin consultar a nadie más."
                •	Explicaciones de 1 punto:
                o	Criterio: La identificación de la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada está parcialmente desarrollada. El estudiante menciona la importancia de la evaluación de organizaciones de derechos humanos, pero no enfatiza su relevancia crucial o incluye otros aspectos que distraen del punto principal.
                o	Ejemplos de explicaciones de 1 punto:
                •	"Seleccioné esa alternativa porque la evaluación de derechos humanos es importante, pero también otras cosas."
                •	"Concluí que la evaluación de derechos humanos es importante, pero también lo son las opiniones de los medios."
                •	"Según observo, Margarita debe confiar en la evaluación de derechos humanos, pero también en la reputación de los políticos."
                •	"Elegí esa opción porque Margarita necesita una evaluación detallada, pero también otros aspectos."
                •	"Seleccioné la evaluación de derechos humanos porque es importante, aunque no lo único."
                •	"Margarita debería considerar lo que dicen las organizaciones de derechos humanos, pero también escuchar a sus amigos."
                •	"Identifica la evaluación, pero no enfatiza su necesidad crucial."
                •	"Es bueno que las organizaciones apoyen, pero Margarita debe investigar más."
                •	Explicaciones de 2 puntos:
                o	Criterio: La identificación de la necesidad de obtener información de una fuente creíble y relevante para tomar una decisión informada está bien desarrollada. El estudiante explica claramente que Margarita decide apoyar el proyecto porque organizaciones de derechos humanos, que son fuentes confiables, lo han evaluado detalladamente y lo respaldan, lo que le da confianza en su legitimidad y beneficios.
                o	Ejemplos de explicaciones de 2 puntos:
                •	"Seleccioné la evaluación de organizaciones de derechos humanos porque es crucial verificar que el proyecto de ley realmente beneficiará a los ciudadanos más vulnerables."
                •	"De acuerdo con mi análisis, es vital confirmar que el proyecto de ley ha sido evaluado positivamente por organizaciones de derechos humanos para asegurar su legitimidad."
                •	"Infiero que Margarita debe confirmar que el proyecto de ley tiene el respaldo de organizaciones de derechos humanos para tomar una decisión informada y segura."
                •	"Seleccioné la evaluación de derechos humanos porque es fundamental asegurarse de que el proyecto de ley tenga un impacto positivo antes de apoyarlo públicamente."
                •	"Puedo concluir que la evaluación de derechos humanos es necesaria para asegurarse de que el proyecto de ley es legítimo y evitar apoyar una iniciativa perjudicial."
                •	"Margarita decide apoyar el proyecto porque confía en las organizaciones de derechos humanos, que tras una evaluación detallada lo respaldan, indicando que es beneficioso."
                •	"Porque las organizaciones de derechos humanos son fuentes creíbles y, si ellas apoyan el proyecto tras evaluarlo, Margarita puede estar segura de que es una buena iniciativa."
                •	"Margarita debe basar su decisión en información confiable; al saber que las organizaciones de derechos humanos lo respaldan, tiene razones para apoyarlo."
                •	"La evaluación detallada de las organizaciones de derechos humanos le da a Margarita la confianza necesaria para apoyar el proyecto, sabiendo que es legítimo y positivo."
                •	"Es importante obtener información de fuentes confiables, y al tener el respaldo de organizaciones de derechos humanos, Margarita puede tomar una decisión informada."
                •	"De acuerdo con esto, Margarita puede confiar en el proyecto porque ha sido evaluado y respaldado por entidades expertas en derechos humanos."
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta)  Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (47)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: La respuesta no aborda correctamente la necesidad de obtener información de una fuente creíble y relevante, o es irrelevante para la situación planteada, aunque se mencione o descarte una alternativa incorrecta. 
                Ejemplos de explicaciones de 0 puntos: 
                •	“La opción a menciona que Margarita debe seguir a sus amigos, pero esa no es una razón válida para tomar una decisión sobre un proyecto de ley. Sin embargo, no creo que deba basarse solo en los derechos humanos.”
                •	 “Apoyar un proyecto solo porque mucha gente lo hace no es una buena idea, pero tampoco creo que los derechos humanos sean tan importantes aquí.”
                •	“En la opción d, esperar por las consecuencias económicas podría parecer razonable, pero no tiene nada que ver con el verdadero problema de por qué Margarita debería basar su decisión en fuentes confiables.”
                •	“Es importante que Margarita espere más información, pero no necesariamente de los derechos humanos. La economía y otros factores también cuentan.”
                Explicaciones de 1 punto:
                Criterio: La respuesta menciona la importancia de obtener información de una fuente creíble y relevante, pero no enfatiza claramente su relevancia crucial, o incluye elementos que distraen del tema principal. Se descartan parcialmente alternativas incorrectas, pero de manera incompleta o superficial.
                Ejemplos de explicaciones de 1 punto: 
                •	 “La opción c sobre la reputación de los políticos es importante, pero el respaldo de organizaciones de derechos humanos es más relevante para decidir si apoyar el proyecto.”
                •	“Margarita debería confiar en los políticos solo si tienen una buena reputación, pero también necesita el respaldo de organizaciones confiables para tomar una decisión.”
                •	“La opción b menciona esperar más cobertura mediática, pero esa no es la fuente más confiable para decidir sobre un proyecto. Margarita necesita asegurarse de que los derechos humanos lo respaldan.”
                •	“Margarita debe escuchar a la prensa y sus amigos, pero también debería considerar lo que dicen las organizaciones de derechos humanos antes de tomar su decisión.”
                Explicaciones de 2 puntos:
                Criterio: La respuesta identifica claramente la necesidad de obtener información de una fuente creíble y relevante, y explica correctamente por qué Margarita debe basar su decisión en el respaldo de organizaciones de derechos humanos. Se descartan correctamente alternativas incorrectas.
                Ejemplos de explicaciones de 2 puntos: 
                •	 “La opción d sobre las consecuencias económicas no es suficiente para tomar una decisión. Margarita debe confiar en el respaldo de organizaciones de derechos humanos que han evaluado el proyecto y lo consideran legítimo.”
                •	“Margarita puede estar tranquila sabiendo que las organizaciones de derechos humanos han hecho una evaluación detallada. Su decisión no debe depender solo de la economía, sino de fuentes confiables como los derechos humanos.”
                •	“La opción a menciona que Margarita debería seguir a sus amigos, pero eso no es relevante. El respaldo de organizaciones de derechos humanos es lo que le da confianza para apoyar el proyecto.”
                •	“Margarita puede escuchar lo que dicen sus amigos, pero debe basarse en información confiable. Las organizaciones de derechos humanos han evaluado el proyecto y eso es lo que realmente importa.”
                •	“La opción c sobre la reputación de los políticos no es una razón suficiente. Margarita debería confiar en las organizaciones de derechos humanos, que han evaluado el proyecto de forma detallada y lo respaldan.”
                •	 “Es importante que Margarita base su decisión en algo más sólido que la reputación de los políticos. Las organizaciones de derechos humanos son una fuente creíble que ya ha evaluado el proyecto.”
                ',
                'valor_opcion' => null
            ],

            //Item 50
            [
                'id_criterio' => 22,
                'id_pregunta' => 98,
                'texto' => 'Nota 1: El objetivo de este ítem (50) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal a: Ambos estamos en riesgo de sanciones si se descubre el consumo de sustancias. Lo mejor es hablar directamente con nuestro entrenador sobre lo que está sucediendo para que él pueda intervenir y ayudar a mi amigo.) del anterior ítem (49), demostrando comprensión de la situación problemática y resolviéndola de la mejor manera posible al elegir acciones adecuadas.
                Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (49), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (50).
                Nota 3: Al asignar la puntuación a la respuesta de este ítem (50) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (49); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (49); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante demuestra comprensión de la situación problemática y resolviéndola de la mejor manera posible al elegir acciones adecuadas.
                Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (50).
                Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (49), estas fueron:
                b)	La situación es que se trata de lealtad y compañerismo. De ninguna manera hablaría con su familia, lo mejor es convencerlo de que deje de consumir sustancias por su cuenta antes de que comiencen las competencias.
                c)	La situación es un problema personal de mi amigo que no me afecta directamente. Lo mejor es concentrarme en mi propio entrenamiento y dejar que mi amigo maneje sus propios asuntos.
                d)	La situación es que mi amigo podría afectar negativamente al equipo durante las justas nacionales. Lo mejor es hablar con otros compañeros para ver si podemos convencerlo juntos de dejar las sustancias.
                e)	La situación es que no se sabe qué tipo de sustancias consume y si podrían mejorar su rendimiento en las competencias. Lo mejor es no involucrarme y esperar a ver si se detecta algo en las pruebas antidopaje.
                Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia  (directa o indirecta) y descarte de las alternativas incorrectas.
                Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (50). 
                Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (50). 
                
                Formas de puntuar la explicación:
                EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (49)):
                Formas de puntuar la explicación:
                •	Explicaciones de 0 puntos:
                o	Criterio: Ambas descripciones (del carácter problemático de la situación y de la acción adecuada) no están bien desarrolladas. La respuesta no demuestra comprensión del problema o no propone una acción adecuada. 
                o	Ejemplos de explicaciones de 0 puntos:
                •	"Elegí decirle al entrenador, pero realmente no pienso que sea un gran problema. Mi amigo debe poder hacer lo que quiera."
                •	"Es mejor hablar con el entrenador porque era la opción más fácil, pero no creo que sea algo serio."
                •	"Pienso que debía decirle al entrenador, pero solo porque era lo que se esperaba que hiciera, no porque me preocupara mucho."
                •	"Opté por contarle al entrenador, pero creo que lo más importante es que cada uno maneje sus propios problemas."
                •	"Le dije al entrenador porque es lo que se supone que debo hacer, pero no entiendo por qué es un problema."
                •	"No creo que sea un asunto importante, pero hablé con el entrenador de todas formas."
                •	"Mi amigo puede hacer lo que quiera, pero decidí decirle al entrenador sin motivo."
                •	"No me interesa lo que pase, pero hablar con el entrenador parecía adecuado."
                •	Explicaciones de 1 punto:
                o	Criterio: Una descripción está parcialmente desarrollada, la otra no está bien desarrollada. La respuesta muestra alguna comprensión, pero es insuficiente.
                o	Ejemplos de explicaciones de 1 punto:
                •	"Mi amigo podría estar en problemas si lo descubren, por eso le dije al entrenador, pero no creo que sea justo involucrarlo sin avisarle."
                •	"Entiendo que podría haber problemas con las pruebas antidopaje, por lo que le hablé al entrenador, pero preferiría que mi amigo se enfrentara a esto solo."
                •	"Sé que el uso de sustancias es malo, por eso pensé en el entrenador, pero tal vez no debería haberlo hecho sin antes hablar más con mi amigo."
                •	"Creo que podría perjudicar al equipo, así que informé al entrenador, pero me siento mal por no haber intentado más con mi amigo."
                •	"Lo que hace mi amigo está mal, por eso le dije al entrenador, pero ahora creo que debería haberlo ayudado más personalmente."
                •	Explicaciones de 2 puntos:
                o	Criterio: Una descripción está bien desarrollada, o ambas están parcialmente desarrolladas. La respuesta muestra comprensión del problema y propone una acción, pero puede faltar profundidad en alguna parte.
                o	Ejemplos de explicaciones de 2 puntos:
                •	"Creo que es posible que haya problemas en las pruebas antidopaje, así que lo mejor que se puede hacer es avisarle al entrenador, pero se deberían pensar mejor las cosas."
                •	"Hay riesgos para el equipo, así que es mejor avisarle al entrenador, pero quizás debería haber intentado más con mi amigo primero."
                •	"Elegí hablar con el entrenador porque no quiero problemas en las competencias, pero no sé si era lo correcto."
                •	"Sé que podría ser malo para todos, así que le digo al entrenador, pero tal vez no deba involucrarlo sin intentar más con mi amigo."
                •	"Hay riesgos para mi amigo, así que hablaré con el entrenador, pero no estoy seguro si es la mejor opción."
                •	"Entiendo que hay riesgos serios, pero pienso que es mejor que el entrenador se encargue y no yo."
                •	"Sé que mi amigo podría tener problemas graves, pero no quiero involucrarme más allá de informarle al entrenador."
                •	"Mi amigo está en peligro de descalificación, pero no quiero complicarme y por eso lo dejo en manos del entrenador."
                •	"Entiendo los riesgos, pero no quería involucrarme, así que recurro al entrenador."
                •	"Sé que esto puede salir mal, así que decido hablar con el entrenador, pero no sé si debería hacer más."
                •	Explicaciones de 3 puntos:
                o	Criterio: Una descripción está bien desarrollada y la otra está parcialmente desarrollada. La respuesta muestra buena comprensión del problema y propone una acción adecuada, aunque puede mejorar en algún aspecto.
                o	Ejemplos de explicaciones de 3 puntos:
                •	"Mi amigo está en una mala situación, así que informo al entrenador para que intervenga, pero tal vez debería insistir más."
                •	"Sé que podría haber consecuencias serias, así que elijo informar al entrenador, pero creo que debo hablar más con mi amigo primero."
                •	"La situación es peligrosa para mi amigo y el equipo, así que es mejor hablar con el entrenador, pero siento que debería intentarlo más por mi cuenta."
                •	"Informar al entrenador parecía la mejor opción debido a los riesgos, pero tal vez debo esforzarme más para que mi amigo comprenda."
                •	"Elijo hablar con el entrenador porque la situación es preocupante, pero quizás no di suficiente apoyo a mi amigo antes de eso."
                •	"Mi amigo está en riesgo y decidí hablar con el entrenador para ayudarlo, aunque quizá debí haber hablado más con él directamente."
                •	"Entiendo que esto afecta al equipo, así que informé al entrenador, pero también debería seguir apoyando a mi amigo."
                •	"La mejor acción es hablar con el entrenador, pero también debo continuar intentando que mi amigo vea el peligro."
                •	Explicaciones de 4 puntos:
                o	Criterio: Ambas descripciones están bien desarrolladas. La respuesta muestra una comprensión profunda del problema y propone una acción adecuada y responsable.
                o	Ejemplos de explicaciones de 4 puntos:
                •	"Mi amigo está en riesgo de ser descalificado y perjudicar su salud. He intentado hablar con él, pero no responde. Creo que lo más responsable es hablar con el entrenador para que pueda recibir la ayuda que necesita antes de las competencias."
                •	"El uso de sustancias representa un riesgo serio para mi amigo y el equipo. Intenté convencerlo de dejar las sustancias, pero como no escuchó, decido hablar con el entrenador para asegurarme de que reciba la ayuda necesaria."
                •	"Mi amigo está en una situación peligrosa para su salud y el equipo. Como no respondió a mis intentos de ayudarlo, opto por hablar con el entrenador, quien puede ofrecerle el apoyo adecuado."
                •	"Entiendo que el uso de sustancias puede tener consecuencias serias, así que después de intentar hablar con mi amigo, debo hablar con el entrenador para que pueda intervenir y brindarle la ayuda que necesita."
                •	"La situación de mi amigo es crítica tanto para su salud como para las competencias. Hablaré con el entrenador porque es importante que él reciba la orientación y el apoyo necesarios para enfrentar este problema adecuadamente."
                •	"Dado que ambos estamos en riesgo de sanciones y he intentado sin éxito que mi amigo deje de consumir sustancias prohibidas, considero necesario informar al entrenador para proteger su bienestar y el del equipo."
                •	"Mi amigo está violando las normas antidopaje, lo que pone en peligro su carrera y la nuestra. Tras intentar ayudarlo personalmente, hablar con el entrenador es la mejor acción para que reciba ayuda profesional."
                •	"Al reconocer que el consumo de sustancias psicoactivas es una infracción grave y afecta su salud, decido informar al entrenador para que pueda intervenir y ofrecerle el apoyo necesario."
                •	"Comprendo que esta situación es problemática para todos; mi amigo podría ser descalificado y afectar al equipo. Por eso, tras intentar ayudarlo, informo al entrenador para manejar adecuadamente el problema."
                •	"Es esencial actuar responsablemente; el consumo de dopaje es perjudicial. Al no lograr que mi amigo recapacite, hablar con el entrenador es la mejor opción para protegerlo y salvaguardar la integridad del deporte."
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA  (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (49)):
                Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                Explicaciones de 0 puntos:
                Criterio: Ambas descripciones (del carácter problemático de la situación y de la acción adecuada) no están bien desarrolladas. La respuesta no demuestra comprensión del problema ni propone una acción adecuada, aunque se mencionen o descarten alternativas incorrectas.
                Ejemplos de explicaciones de 0 puntos:
                •	"La opción c menciona que es un problema personal, pero eso no tiene nada que ver conmigo. No creo que deba hacer nada al respecto, así que simplemente elegí hablar con el entrenador."
                •	"Mi amigo puede manejar sus problemas solo. No es mi responsabilidad, así que hablar con el entrenador no me parece relevante."
                •	"La opción d habla de cómo el equipo puede verse afectado, pero no me interesa mucho. Decidí decirle al entrenador porque parecía lo más fácil."
                •	"No creo que sea un problema tan serio como para involucrarme. Mi amigo debería arreglarlo solo."
                Explicaciones de 1 punto:
                Criterio: Una descripción está parcialmente desarrollada, la otra no está bien desarrollada. La respuesta muestra alguna comprensión, pero es insuficiente. Se menciona el riesgo o la acción correcta, pero no se profundiza en el análisis ni en la relevancia de la decisión.
                Ejemplos de explicaciones de 1 punto:
                •	"La opción b habla de lealtad y compañerismo, pero creo que lo correcto es avisar al entrenador para evitar problemas mayores."
                •	"Es importante apoyar a los amigos, pero también hay que ser responsables. Por eso decidí contarle al entrenador, aunque no estoy seguro si es lo mejor."
                •	"La opción e sugiere esperar las pruebas antidopaje, pero creo que es mejor avisar al entrenador antes de que ocurra algo grave."
                •	"Aunque podría esperar a que las pruebas de dopaje confirmen algo, prefiero avisar al entrenador para no arriesgarme más."
                Explicaciones de 2 puntos:
                Criterio: Una descripción está bien desarrollada, o ambas están parcialmente desarrolladas. La respuesta muestra comprensión del problema y propone una acción, pero puede faltar profundidad en algún aspecto. Se mencionan y descartan alternativas incorrectas de manera más clara.
                Ejemplos de explicaciones de 2 puntos:
                •	"La opción c dice que no me afecta directamente, pero eso no es cierto. Si mi amigo sigue consumiendo, ambos podríamos ser sancionados, así que es mejor contarle al entrenador."
                •	"Aunque podría pensar que no me afecta, la verdad es que los dos estamos en riesgo de ser castigados. Por eso decidí contarle al entrenador."
                •	"En la opción b, sugiere que la lealtad es lo más importante, pero en realidad, lo más leal que puedo hacer es contarle al entrenador para proteger a mi amigo."
                •	"Es leal apoyar a un amigo, pero la mejor manera de hacerlo es ayudándolo a superar el problema, y por eso elegí hablar con el entrenador."
                Explicaciones de 3 puntos:
                Criterio: Una descripción está bien desarrollada y la otra está parcialmente desarrollada. La respuesta muestra buena comprensión del problema y propone una acción adecuada, aunque puede mejorar en algún aspecto. Se descartan alternativas incorrectas de manera efectiva.
                Ejemplos de explicaciones de 3 puntos:
                
                •	"La opción d dice que deberíamos hablar con otros compañeros, pero involucrar a más personas puede empeorar la situación. Es mejor hablar directamente con el entrenador para que lo ayude."
                •	"Involucrar a otros compañeros podría empeorar las cosas. Prefiero ir directamente al entrenador para asegurarme de que mi amigo reciba la ayuda que necesita."
                •	"La opción e dice que lo mejor es esperar, pero eso no es una solución. Si no actuamos ahora, el problema podría empeorar, así que decidí hablar con el entrenador."
                •	"Esperar no es la solución. Si no actuamos rápido, las consecuencias podrían ser graves, así que hablar con el entrenador es la mejor opción."
                
                Explicaciones de 4 puntos:
                Criterio: Ambas descripciones están bien desarrolladas. La respuesta muestra una comprensión profunda del problema y propone una acción adecuada y responsable, descartando alternativas incorrectas de manera clara.
                Ejemplos de explicaciones de 4 puntos:
                •	"La opción c dice que es un problema personal de mi amigo, pero no es así. Si ambos somos sancionados, me afecta también. Por eso decidí hablar con el entrenador, para que pueda ayudarlo antes de que sea demasiado tarde."
                •	"Aunque podría parecer un problema personal, en realidad nos afecta a los dos. Lo mejor es hablar con el entrenador para que intervenga y ayude a mi amigo antes de que las cosas empeoren."
                •	"La opción d dice que deberíamos hablar con otros compañeros, pero involucrar a más personas puede ser contraproducente. Es mejor contarle al entrenador, que tiene la autoridad para ayudarlo de manera adecuada."
                •	"Involucrar a otros compañeros no resolvería el problema. El entrenador tiene la experiencia necesaria para manejar la situación, por eso decidí hablar con él directamente."
                •	"La opción b habla de lealtad, pero lo más leal que puedo hacer es proteger a mi amigo y al equipo. Decidí hablar con el entrenador porque es la mejor manera de ayudar a mi amigo a superar este problema."
                •	"Ser leal no significa quedarse en silencio. Lo mejor que puedo hacer por mi amigo es hablar con el entrenador, para que reciba la ayuda que necesita."',
                'valor_opcion' => null
            ],

            //Item 52
            [
                'id_criterio' => 23,
                'id_pregunta' => 100,
                'texto' => 'Nota 1: El objetivo de este ítem (52) es evaluar si el estudiante explica adecuadamente por qué seleccionó la alternativa correcta (literal d: La situación es que hay un riesgo potencial para la seguridad personal de los usuarios. Lo mejor es informar tanto a mi madre como a las autoridades locales para que tomen medidas urgentes.), del anterior ítem (51), demostrando comprensión de la situación problemática y justificando su elección de manera lógica y ética. Se espera que el estudiante identifique:
                    •	El carácter problemático de la situación, reconociendo que hay un riesgo potencial debido al problema técnico del dispositivo que permite a terceros acceder y rastrear la ubicación de los usuarios sin su consentimiento.
                    •	La mejor acción a emprender, que implica informar tanto a su madre (quien trabaja en la empresa responsable del dispositivo) como a las autoridades locales para que tomen medidas urgentes y protejan a los usuarios.
                    Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (52), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (52).
                    Nota 3: Al asignar la puntuación a la respuesta de este ítem (52) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (51); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (51); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende la situación problemática y justifica su elección de manera lógica y ética. Se espera que el estudiante identifique: • El carácter problemático de la situación, reconociendo que hay un riesgo potencial debido al problema técnico del dispositivo que permite a terceros acceder y rastrear la ubicación de los usuarios sin su consentimiento. • La mejor acción a emprender, que implica informar tanto a su madre (quien trabaja en la empresa responsable del dispositivo) como a las autoridades locales para que tomen medidas urgentes y protejan a los usuarios.
                    Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (52).
                    Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (51), estas fueron:
                    a)	La situación no es un problema técnico menor, es necesario atender a ciertas consideraciones, pero lo mejor es esperar a ver si se resuelve solo. Mientras tanto, aconsejaría a mi amigo que ignore los mensajes.
                    b)	La situación es un problema personal de mi amigo pues se trata de su dispositivo portátil. Debido a los problemas en los que podría estar mi madre, lo mejor es aconsejarle que no use el dispositivo hasta que se sienta seguro.
                    c)	La situación es preocupante, pero es responsabilidad de mi amigo asumir las consecuencias de haber comprado el dispositivo, aunque como la empresa de mi madre está involucrada lo mejor es que la empresa se responsabilice. 
                    e)	La situación es algo de lo que debo ocuparme más no preocuparme. Seguiré usando el dispositivo y sugeriré a mi amigo que lo haga también, seguramente se solucionará gracias a la eficiencia de sus creadores.
                    Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                    Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (52). 
                    Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (52).
                    
                    
                    Formas de puntuar la explicación:
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (51)):
                    •	Explicaciones de 0 puntos:
                    o	Criterio: Ambas descripciones no están bien desarrolladas. La respuesta no demuestra comprensión del problema ni propone una acción adecuada. 
                    o	Ejemplos de explicaciones de 0 puntos:
                    •	"Le diría a las autoridades porque me lo dijeron, pero no pienso que sea un problema grande. La ubicación no importa tanto."
                    •	"Informaría a las autoridades porque se espera que lo haga, pero no creo que la seguridad personal sea importante en esta situación. No quiero perjudicar a mi madre."
                    •	"Elijo hablar con las autoridades solo porque es lo que debía hacer, pero no entiendo el riesgo. Tampoco es necesario decirle a mi madre."
                    •	"Decido informar porque era la opción más fácil, pero creo que mi amigo está exagerando el problema."
                    •	"Dije a las autoridades porque pensé que debía hacerlo, aunque no pienso que sea algo serio."
                    •	Explicaciones de 1 punto:
                    o	Criterio: Una descripción está parcialmente desarrollada, la otra no está bien desarrollada. La respuesta muestra alguna comprensión, pero es insuficiente.
                    o	Ejemplos de explicaciones de 1 punto:
                    •	"El acceso a la ubicación podría ser un problema, por eso es mejor hablar con alguien de la familia, pero tal vez no sea mi lugar involucrarme."
                    •	"Entiendo que la seguridad de mi amigo podría estar en riesgo, así que debo informar a mi madre."
                    •	"Puede ser malo si alguien accede a la ubicación, por eso elijo informar a las autoridades."
                    •	"No veo por qué es un problema, pero prefiero avisar a los que saben."
                    •	"No entiendo por qué la ubicación es importante, pero decidí que debía hablar con las autoridades."
                    •	"No pienso que haya un riesgo real, pero lo importante es dar aviso a mi madre que puede saber lo que pasa."
                    •	Explicaciones de 2 puntos:
                    o	Criterio: Una descripción está bien desarrollada, o ambas están parcialmente desarrolladas. La respuesta muestra comprensión del problema y propone una acción, pero puede faltar profundidad en alguna parte.
                    o	Ejemplos de explicaciones de 2 puntos:
                    •	"Creo que hay un riesgo con la ubicación, por eso es mejor informar a mi madre y a las autoridades, pero debería haberlo pensado mejor antes."
                    •	"Entiendo que la ubicación podría estar expuesta y hay mucha delincuencia, se debe informar a mi madre o hablar con las autoridades, pero no estoy seguro si es lo mejor."
                    •	"Mi amigo está en riesgo, pero es él quien debe avisar a las autoridades para que lo manejen."
                    •	"Sé que esto puede salir mal, así que es mejor hablar inmediatamente."
                    •	"La seguridad está en peligro, por eso decidí informar, aunque no sé si es suficiente."
                    •	Explicaciones de 3 puntos:
                    o	Criterio: Una descripción está bien desarrollada y la otra está parcialmente desarrollada. La respuesta muestra buena comprensión del problema y propone una acción adecuada, aunque puede mejorar en algún aspecto.
                    o	Ejemplos de explicaciones de 3 puntos:
                    •	"Entiendo que la ubicación puede ser expuesta y así extorsionar o robar a las personas, así que se debe comunicar a las autoridades, pero tal vez se deba hablar más con mi amigo."
                    •	"La situación es peligrosa para la seguridad, así que prefiero informar a las autoridades, pero quizás se deba hacer alguna otra cosa."
                    •	"La ubicación de mi amigo y de todos los usuarios está en riesgo, así que decido informar antes de que la situación empeore."
                    •	"Opto por informar a las autoridades y a mi madre debido al riesgo, pero tal vez no debí involucrarme tanto sin más detalles."
                    •	"Hay un problema serio con la seguridad, así que informo, pero quizás deba considerar las consecuencias para mi familia."
                    •	Explicaciones de 4 puntos:
                    o	Criterio: Ambas descripciones están bien desarrolladas. La respuesta muestra una comprensión profunda del problema y propone una acción adecuada y responsable.
                    o	Ejemplos de explicaciones de 4 puntos:
                    •	"El problema técnico permite a terceros acceder a la ubicación de los usuarios sin consentimiento, lo que pone en riesgo su seguridad personal. Por eso, es necesario informar tanto a mi madre, que trabaja en la empresa y puede solucionar el fallo, como a las autoridades locales para que tomen medidas urgentes y protejan a los usuarios."
                    •	"Hay un grave riesgo para la integridad física de mi amigo y otros usuarios debido al acceso no autorizado a su ubicación. La mejor acción es informar inmediatamente a mi madre y a las autoridades para que puedan tomar acciones y garantizar la seguridad de todos."
                    •	"La situación es crítica porque terceros pueden rastrear a los usuarios sin permiso, poniendo en peligro su seguridad. Debo informar a mi madre para que la empresa corrija el problema y a las autoridades para que protejan a los afectados."
                    •	"El acceso indebido a la ubicación de los usuarios es un serio problema de seguridad. Al informar a mi madre y a las autoridades, ayudaré a prevenir posibles daños y a que se tomen medidas correctivas."
                    •	"Comprendo que existe una vulnerabilidad que amenaza la seguridad de los usuarios. Informar a mi madre y a las autoridades es esencial para resolver el problema y proteger a mi amigo y a la comunidad."
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA Y DESCARTE (directa o indirecta) DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (51)):
                    Los criterios de puntuación son los mismos, lo que cambia es la referencia y descarte de las alternativas incorrectas. 
                    Explicaciones de 0 puntos:
                    Criterio: Ambas descripciones no están bien desarrolladas. La respuesta no demuestra comprensión del problema ni propone una acción adecuada, aunque se mencionen o descarten alternativas incorrectas.
                    Ejemplos de explicaciones de 0 puntos:
                    •	"La opción b menciona que es un problema personal, pero no lo veo como algo tan grave. No creo que sea necesario hablar con mi madre ni con las autoridades."
                    •	"Creo que mi amigo debe ocuparse de su dispositivo y no veo la necesidad de involucrarme. No es un problema serio."
                    •	"La opción a dice que el problema se puede resolver solo, así que esperar parece una buena opción. Informar no es necesario."
                    •	"Creo que el problema se solucionará por sí solo, no veo que sea urgente informar a nadie."
                    Explicaciones de 1 punto:
                    Criterio: Una descripción está parcialmente desarrollada, la otra no está bien desarrollada. La respuesta muestra alguna comprensión, pero es insuficiente.
                    Ejemplos de explicaciones de 1 punto:
                    •	"La opción e sugiere que no hay que preocuparse tanto, pero yo prefiero informarle a mi madre, aunque no veo por qué debería también hablar con las autoridades."
                    •	"No creo que sea tan grave, pero es mejor decirle a alguien, por eso decidí contarle a mi madre."
                    •	"La opción c dice que es responsabilidad de la empresa, pero yo decidí que lo mejor era hablar con mi madre para que se encargue."
                    •	"No estoy seguro si es realmente un problema, pero prefiero avisarle a mi madre por si acaso."
                    
                    Explicaciones de 2 puntos:
                    Criterio: Una descripción está bien desarrollada, o ambas están parcialmente desarrolladas. La respuesta muestra comprensión del problema y propone una acción, pero puede faltar profundidad en alguna parte.
                    Ejemplos de explicaciones de 2 puntos:
                    •	"La opción a sugiere que se puede esperar, pero yo creo que es mejor actuar rápidamente. Informar a mi madre es lo más lógico, aunque no sé si es necesario hablar con las autoridades."
                    •	"Es un riesgo esperar a que el problema se solucione solo. Creo que es mejor decirle a mi madre y quizá a las autoridades."
                    •	"La opción e dice que se resolverá solo, pero no estoy seguro. Creo que informar a mi madre y a las autoridades es lo más seguro, aunque debería pensarlo mejor."
                    •	"Aunque podría esperar que el problema se solucione solo, prefiero informar para no arriesgarme."
                    
                    Explicaciones de 3 puntos:
                    Criterio: Una descripción está bien desarrollada y la otra está parcialmente desarrollada. La respuesta muestra buena comprensión del problema y propone una acción adecuada, aunque puede mejorar en algún aspecto.
                    Ejemplos de explicaciones de 3 puntos:
                    •	"La opción b dice que es un problema personal de mi amigo, pero no estoy de acuerdo. Hay un riesgo real de seguridad para todos los usuarios, así que es mejor informar a mi madre y a las autoridades."
                    •	"Aunque mi amigo podría pensar que es solo su problema, la seguridad de todos está en peligro, así que decidí hablar con mi madre y avisar a las autoridades."
                    •	"La opción c menciona que la empresa debería ser responsable, pero creo que lo mejor es informar a mi madre y a las autoridades para que actúen rápido."
                    •	"Aunque la empresa podría ser responsable, creo que es mejor actuar ahora e informar tanto a mi madre como a las autoridades."
                    Explicaciones de 4 puntos:
                    Criterio: Ambas descripciones están bien desarrolladas. La respuesta muestra una comprensión profunda del problema y propone una acción adecuada y responsable, descartando alternativas incorrectas de manera clara.
                    Ejemplos de explicaciones de 4 puntos:
                    •	"La opción a sugiere esperar, pero no es responsable. El problema de seguridad es grave, ya que terceros pueden rastrear la ubicación de los usuarios. Decidí informar a mi madre y a las autoridades para que puedan intervenir rápidamente."
                    •	"Esperar a que el problema se resuelva solo no es una opción. La seguridad de los usuarios está en riesgo, así que informé a mi madre y a las autoridades para que tomen medidas."
                    •	"La opción b sugiere que es solo un problema personal de mi amigo, pero esto afecta a todos los usuarios. Es crucial informar a mi madre y a las autoridades para resolver el fallo técnico."
                    •	"Aunque algunos puedan pensar que es un problema personal, este fallo de seguridad afecta a todos los usuarios, por lo que decidí informar a mi madre y a las autoridades para que actúen de inmediato."
                    •	"La opción e dice que no hay que preocuparse demasiado, pero la seguridad de los usuarios está en riesgo. Es importante informar a mi madre y a las autoridades para evitar que suceda algo grave."
                    •	"No es suficiente seguir usando el dispositivo sin preocuparse. La seguridad de los usuarios está en peligro y es necesario que las autoridades y mi madre tomen medidas para solucionarlo."',
                'valor_opcion' => null
            ],

            //Item 54
            [
                'id_criterio' => 24,
                'id_pregunta' => 102,
                'texto' => 'Nota 1: El objetivo de este ítem es evaluar la capacidad del estudiante para crear su propia ruta de soluciones ante el problema planteado en el $contexto, es decir, su capacidad para redactar una ruta de solución efectiva al problema de haber perdido el manual para la sustentación de su proyecto. Para lo cual deberá utilizar al menos dos palabras de la lista proporcionada, pudiendo cambiar su forma gramatical si es necesario. Palabras de la lista proporcionada a los estudiantes: Mochila, Proceso, Profesor, Memoria, Recordar, Visualmente, Simplificar, Colaborar, Internet, Biblioteca, Diagramas, Tablero, Improvisación, Tiempo, Foto, Llamada, Funcionalidad, Ejercicio, Ideas, Calma, Principal, Aprendizaje. Las respuestas serán evaluadas en función de la pertinencia y viabilidad de la ruta de solución propuesta, y el uso de las palabras de la lista. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 2: La respuesta no debe ser ninguna de las siguientes soluciones, de lo contrario se asigna 0 puntos:
                a)	Sustento el proyecto mostrando el prototipo al público sin compartir información detallada.
                b)	Explico cualquier cosa relacionada con el proceso de elaboración del prototipo con la esperanza de que salga bien.
                c)	Intento escribir un nuevo manual con los puntos principales del proceso del prototipo y recuerdo detalles que pueden ser de utilidad.
                d)	Comienzo la sustentación indicando que perdí el manual y tal vez no lo presente bien. 
                e)	Hago una lluvia de ideas que me ayuden a resolver la situación.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las respuestas que muestren razonamiento lógico y coherente, y que cumplan con los criterios establecidos, deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. La evaluación se basa en la pertinencia del razonamiento, el uso de al menos dos palabras de la lista, y en cómo el estudiante desarrolla la ruta de solución al problema.
                Nota 4: La Puntuación total posible es De 0 a 5 puntos (hasta 2 puntos por el uso de al menos 2 palabras de la lista y hasta 3 puntos por la calidad de la ruta de solución).
                Formas de puntuar la respuesta:
                La puntuación se asignará en función de dos aspectos:
                1.	Uso de palabras de la lista:
                o	2 puntos: Si el estudiante utilizó al menos dos palabras de la lista.
                o	1 punto: Si el estudiante utilizó solo una palabra de la lista.
                o	0 puntos: Si el estudiante no utilizó ninguna palabra de la lista.
                2.	Calidad de la ruta de solución:
                o	3 puntos: La ruta de solución es muy buena, mostrando una estrategia detallada y efectiva, con soluciones creativas y un alto nivel de iniciativa y responsabilidad, incluso si la respuesta contiene 2 palabras de la lista y no todas. 
                o	2 puntos: La ruta de solución es buena, viable y efectiva, mostrando iniciativa y esfuerzo por resolver el problema de manera práctica y responsable.
                o	1 punto: La ruta de solución es regular, muestra algún esfuerzo pero puede carecer de viabilidad, detalle o efectividad.
                o	0 puntos: La ruta de solución no es viable, no demuestra esfuerzo, o pone en riesgo la responsabilidad de hacer una buena presentación.
                Ejemplos de respuestas y puntuación:
                Ejemplos respecto al uso de palabras de la lista:
                •	0 puntos (no utiliza palabras de la lista):
                o	"Explico cualquier cosa que me venga a la mente, aunque no esté relacionada con el proyecto."
                •	1 punto (utiliza solo una palabra de la lista):
                o	"Intentaría recordar lo que hice y trataría de explicarlo."
                •	2 puntos (utiliza al menos dos palabras de la lista):
                o	"Buscaría en mi mochila por si el manual está allí y, si no lo encuentro, trataría de recordar el proceso para explicarlo al profesor."
                Ejemplos respecto a la calidad de la ruta de solución:
                •	0 puntos (ruta de solución no viable):
                o	"No sustentaría."
                o	"Inventaría cualquier cosa sin relación al proyecto."
                o	"Le diría al profesor que no puedo presentar y me iría."
                •	1 punto (ruta de solución regular):
                o	"Intentaría improvisar algo frente a la clase, aunque no recuerdo mucho. Podría explicar lo que se me ocurra en el momento."
                o	"Le diría al profesor que perdí el manual y que intentaré hacer lo que pueda sin él."
                •	2 puntos (ruta de solución buena):
                o	"Buscaría en mi mochila por si el manual está allí. Si no lo encuentro, trataría de recordar los puntos principales del proceso para explicarlos al profesor. Podría usar el tablero para hacer diagramas que ilustren mi explicación."
                o	"Mantendría la calma y haría una improvisación basándome en mi memoria del proyecto. Explicaría visualmente cómo funciona el prototipo y respondería preguntas para demostrar mi comprensión."
                •	3 puntos (ruta de solución muy buena):
                o	"Primero, revisaría mi mochila y área de trabajo para asegurarme de que el manual no esté allí. Si no lo encuentro, haría una llamada a casa para ver si alguien puede enviarme una foto del manual o verificar si lo dejé allí. Mientras tanto, prepararía una presentación alternativa utilizando diagramas en el tablero para explicar el proceso y la funcionalidad del prototipo. También podría simplificar la información y enfocarme en los puntos principales, asegurándome de colaborar con mis compañeros si es necesario. Si el tiempo lo permite, consultaría recursos en internet o la biblioteca para complementar mi presentación."
                o	"Mantendría la calma y planearía una estrategia. Primero, trataría de recordar el proceso completo y anotaría los pasos en orden. Luego, usaría el tablero para hacer diagramas que ayuden a explicar mi proyecto visualmente. Si es posible, pediría al profesor unos minutos adicionales para prepararme. También consideraría hacer una llamada a casa para ver si pueden enviarme una foto del manual perdido. De esta manera, podría ofrecer una presentación detallada y demostrar mi comprensión y aprendizaje del proyecto."',
                'valor_opcion' => null
            ],

            //Item 56
            [
                'id_criterio' => 25,
                'id_pregunta' => 104,
                'texto' => 'Nota 1: El objetivo de este ítem (56) es evaluar la capacidad del estudiante para explicar adecuadamente por qué seleccionó la alternativa correcta (literal e: Proponer a la empresa constructora que realice una evaluación más detallada del impacto ambiental del plan y que incluya medidas específicas para mitigar el daño a los hábitats de las aves. Además, sugerir la reubicación de la construcción a una zona menos sensible ecológicamente.) del anterior ítem (55), comprendiendo una situación problemática que afecta la conservación del hábitat natural y la protección de una especie de ave en peligro de extinción. Se espera que el estudiante identifique:
                    •	El carácter problemático de la situación, reconociendo que el plan propuesto por la empresa constructora no ha sido evaluado adecuadamente y podría no ser efectivo para proteger a las aves.
                    •	La mejor acción a emprender, que implica proponer a la empresa constructora que realice una evaluación más detallada del impacto ambiental y que incluya medidas específicas para mitigar el daño, además de considerar la reubicación de la construcción a una zona menos sensible ecológicamente.
                    Nota 2: La explicación adecuada será evaluada en función del objetivo de este ítem (56), sin requerir el uso de términos técnicos mencionados en este o en los criterios. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. Sin embargo, si la respuesta contiene términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. Asignarás de 0 a 4 puntos a la explicación dada en la respuesta abierta de este ítem (56).
                    Nota 3: Al asignar la puntuación a la respuesta de este ítem (56) tienes dos posibles escenarios: el primero es explicación que no incluye referencia y descarte de una o varias alternativas incorrectas proporcionadas al estudiante en el anterior ítem (55); y el segundo escenario es explicación que incluye referencia (directa o indirecta) y descarte de una o varias  alternativas incorrectas proporcionadas al estudiante en el anterior ítem (55); en ambos escenarios el objetivo sigue estando en función de evaluar si en la explicación el estudiante comprende una situación problemática que afecta la conservación del hábitat natural y la protección de una especie de ave en peligro de extinción. Se espera que el estudiante identifique: • El carácter problemático de la situación, reconociendo que el plan propuesto por la empresa constructora no ha sido evaluado adecuadamente y podría no ser efectivo para proteger a las aves. • La mejor acción a emprender, que implica proponer a la empresa constructora que realice una evaluación más detallada del impacto ambiental y que incluya medidas específicas para mitigar el daño, además de considerar la reubicación de la construcción a una zona menos sensible ecológicamente.
                    Nota 4: El hecho de que la explicación incluya o no referencias y descarte de las alternativas incorrectas no garantiza que sea adecuada; la calificación siempre debe estar en función del objetivo de este ítem (56).
                    Nota 5: Para que tengas claridad al calificar y puedas identificar la explicación que incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas, te entrego las alternativas incorrectas proporcionadas al estudiante en el anterior ítem (55), estas fueron:
                    a)	Aceptar el plan actual de la empresa constructora sin cambios, ya que es probable que tenga algún impacto, pero no es posible evitar la construcción pues es bien sabido que estas empresas invierten grandes cantidades de dinero en este tipo de proyectos. 
                    b)	La mejor manera es reunir a la comunidad y solicitar formalmente a la empresa que reduzca el tamaño del proyecto para minimizar el impacto ambiental que pueda llegarse a generar, eso evita exigir una evaluación más detallada del impacto ambiental.
                    c)	Informar a la comunidad sobre los riesgos del proyecto de construcción sin proporcionar soluciones alternativas o propuestas específicas para mitigar el impacto ambiental, pues es la empresa la que debe ofrecer opciones a la comunidad que se verá afectada.
                    d)	Informarle a la comunidad para que no se involucre en la evaluación del plan, ya que puede ser un esfuerzo que no tiene un impacto significativo en el resultado final. Eso es lo que generalmente se observa cuando una constructora persigue sus fines.
                    Nota 6: Al final de los Ejemplos de respuestas en los que la explicación no incluye referencia y descarte de las alternativas incorrectas, se brindan Ejemplos de respuestas en los que la explicación incluye referencia (directa o indirecta) y descarte de las alternativas incorrectas.
                    Nota 7: Es importante tener en cuenta que las respuestas serán dadas por adolescentes colombianos entre 15 y 18 años. Esto no significa que las respuestas deban hacer referencia explícita a su contexto cultural o educativo, sino que se calificarán procurando considerar su el lenguaje o conceptos que suelen emplear, pero que no comprometan el cumplimiento del objetivo de este ítem (56). 
                    Nota 8: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas adecuadas. Las explicaciones que muestren la claridad y coherencia en función del objetivo del ítem deben ser consideradas adecuadas, aunque no coincidan textualmente con los siguientes ejemplos de explicaciones. La puntuación se basa en el cumplimiento del objetivo del ítem y no en la coincidencia exacta con los ejemplos. No es necesario que el estudiante utilice los nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación de la respuesta, siempre que la explicación sea consecuente con el objetivo de este ítem (56). 
                    
                    Formas de puntuar la explicación:
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN NO INCLUYE REFERENCIA Y DESCARTE DE UNA O VARIAS ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (55)):
                    •	Explicaciones de 0 puntos:
                    o	Criterio: La respuesta no demuestra comprensión del problema ni propone una acción adecuada. 
                    o	Ejemplos de explicaciones de 0 puntos:
                    •	"No estoy seguro de qué hacer en esta situación. Supongo que cualquier opción podría funcionar, pero no tengo un plan claro ni razones para elegir conscientemente."
                    •	"Elegí al azar porque todas las opciones me parecían iguales y no sabía cómo decidir cuál era mejor."
                    •	"No entendí bien el problema, así que solo seleccioné una opción sin pensar mucho en las soluciones."
                    •	"No tengo una idea clara de qué pasos seguir, simplemente pensé que todas las soluciones podrían ser lo mismo."
                    •	"Elegí una opción, pero no evalué otras alternativas ni pensé en cómo podría implementarse la solución."
                    •	Explicaciones de 1 punto:
                    o	Criterio: La respuesta muestra alguna comprensión, pero es insuficiente.
                    o	Ejemplos de explicaciones de 1 punto:
                    •	"Elegí esa opción porque parece la más completa, pero no estoy seguro de cómo la evaluación adicional afectará al hábitat de las aves."
                    •	"Creo que es buena porque involucra una evaluación, pero no estoy claro sobre cómo eso realmente ayudará a las aves."
                    •	"Me pareció correcta porque se menciona una evaluación, pero no entiendo bien el impacto de cambiar la ubicación de la construcción."
                    •	"Elegí esa opción porque sugiere hacer algo más, aunque no sé si esa acción será efectiva para las aves."
                    •	"No estoy seguro de cómo ayuda exactamente, pero pensé que era la mejor opción porque menciona hacer algo con la evaluación."
                    •	Explicaciones de 2 puntos:
                    o	Criterio:. La respuesta muestra comprensión del problema y propone una solución, pero puede faltar profundidad en alguna parte.
                    o	Ejemplos de explicaciones de 2 puntos:
                    •	"Elegí esa opción porque hacer una evaluación más detallada puede revelar problemas, pero no estoy seguro de cómo la reubicación ayudaría realmente."
                    •	"Parece buena porque pide una evaluación, pero la reubicación de la construcción podría no ser suficiente para proteger a las aves."
                    •	"Elegí esa opción porque la evaluación detallada puede ser útil, pero cambiar la ubicación puede no ser una solución completa para el hábitat."
                    •	"Me parece que aborda el problema porque involucra una evaluación y una reubicación, pero no sé si eso es suficiente para proteger a las aves."
                    	"Elegí esa opción porque la evaluación adicional parece importante, pero la reubicación no garantiza la protección total del hábitat."
                    •	Explicaciones de 3 puntos:
                    o	Criterio: La respuesta muestra buena comprensión del problema y evalúa adecuadamente la opción seleccionada, aunque puede mejorar en algún aspecto.
                    o	Ejemplos de explicaciones de 3 puntos:
                    •	"Elegí esa opción porque una evaluación más detallada puede identificar los problemas específicos del hábitat de las aves, y la reubicación puede reducir el daño. Esto aborda el problema, pero el éxito dependerá de cómo se implementen estas medidas."
                    •	"Es adecuada porque permite una evaluación exhaustiva del impacto ambiental y sugiere la reubicación para minimizar el daño. Sin embargo, es importante asegurarse de que la empresa realmente adopte estas medidas."
                    •	"Es la mejor porque combina una evaluación detallada y la reubicación del proyecto. Esto debería ayudar a proteger el hábitat de las aves, aunque habrá que verificar que se lleve a cabo correctamente."
                    •	"Elegí esa opción porque aborda el problema de forma integral. La evaluación ayudará a identificar impactos y la reubicación debería minimizar el daño. Aun así, necesitamos seguimiento para garantizar su efectividad."
                    •	"Ofrece una solución completa al pedir una evaluación detallada y reubicar la construcción. Esto debería reducir el impacto en el hábitat, pero es crucial que estas acciones se ejecuten adecuadamente."
                    •	Explicaciones de 4 puntos:
                    o	Criterio: La respuesta muestra una comprensión profunda del problema y evalúa detalladamente la opción seleccionada, justificando por qué es la mejor manera de abordar la situación.
                    o	Ejemplos de explicaciones de 4 puntos:
                    •	"Elegí esa opción porque el plan de la empresa no ha sido evaluado adecuadamente y podría no proteger a las aves en peligro. Proponer una evaluación más detallada permitirá identificar los impactos específicos en el hábitat. Además, sugerir la reubicación de la construcción a una zona menos sensible ecológicamente minimizará el daño al ecosistema. Esta es la mejor manera de proteger a las aves y preservar el ambiente."
                    •	"La situación es problemática porque la construcción amenaza el hábitat de una especie en peligro. La mejor acción es solicitar una evaluación ambiental exhaustiva y proponer medidas concretas para mitigar el daño, como reubicar la construcción. Esto garantiza que se tomen decisiones informadas que protejan el ecosistema."
                    •	"Comprendo que el plan actual podría no ser efectivo para proteger a las aves. Por eso, es crucial que la empresa realice una evaluación detallada del impacto ambiental. Además, reubicar la construcción a una zona menos sensible ayudará a preservar el hábitat. Esta opción aborda directamente los riesgos y propone soluciones prácticas."
                    •	"La problemática radica en la falta de una evaluación adecuada del plan propuesto, lo que puede poner en riesgo a las aves. La mejor acción es insistir en una evaluación ambiental detallada y sugerir la reubicación de la obra. Esto permitirá proteger el hábitat y asegurar que la construcción sea sostenible."
                    •	"Elegí esta opción porque reconoce que el plan de la constructora puede ser insuficiente. Al proponer una evaluación más detallada y la reubicación, estamos tomando medidas concretas para proteger el hábitat de las aves y preservar el ecosistema. Es la forma más efectiva de abordar el problema."
                     
                    EJEMPLOS DE RESPUESTAS EN LOS QUE LA EXPLICACIÓN INCLUYE REFERENCIA (directa o indirecta) Y DESCARTE DE ALTERNATIVAS INCORRECTAS (PROPORCIONADAS AL ESTUDIANTE EN EL ANTERIOR ÍTEM (55)):
                    Los criterios de puntuación son los mismos, lo que cambia es la referencia (directa o indirecta) y descarte de las alternativas incorrectas. 
                    Explicaciones de 0 puntos:
                    Criterio: Ambas descripciones no están bien desarrolladas. La respuesta no demuestra comprensión del problema ni propone una acción adecuada, aunque se mencionen o descarten alternativas incorrectas.
                    Ejemplos de explicaciones de 0 puntos:
                    •	"La opción a sugiere que aceptemos el plan actual sin cambios, pero no veo por qué sería un problema. No pienso que las aves estén en tanto peligro."
                    •	"Supongo que lo mejor es seguir adelante con la construcción, no creo que sea necesario hacer una evaluación adicional."
                    •	"La opción d menciona que no es necesario que la comunidad participe, y creo que tiene razón, no hace mucha diferencia involucrarse."
                    •	"No creo que sea útil involucrarse en el proceso, dudo que podamos hacer algo para cambiar el plan."
                    Explicaciones de 1 punto:
                    Criterio: Una descripción está parcialmente desarrollada, la otra no está bien desarrollada. La respuesta muestra alguna comprensión, pero es insuficiente.
                    Ejemplos de explicaciones de 1 punto:
                    •	"La opción b dice que debemos solicitar una reducción en el tamaño del proyecto, pero creo que es más útil hacer una evaluación adicional, aunque no sé si eso realmente ayudará a las aves."
                    •	"Parece que hacer una evaluación puede ser útil, pero no estoy seguro si cambiar el tamaño del proyecto o la ubicación sea necesario."
                    •	"La opción c dice que la empresa debe ofrecer soluciones, pero no estoy seguro si una evaluación más detallada es suficiente para proteger a las aves."
                    •	"Creo que la empresa debería resolver el problema, aunque hacer una evaluación más detallada podría ayudar."
                    Explicaciones de 2 puntos:
                    Criterio: Una descripción está bien desarrollada, o ambas están parcialmente desarrolladas. La respuesta muestra comprensión del problema y propone una solución, pero puede faltar profundidad en alguna parte.
                    Ejemplos de explicaciones de 2 puntos:
                    •	"La opción a sugiere que sigamos el plan actual, pero no estoy de acuerdo. Creo que hacer una evaluación más detallada puede revelar problemas, aunque no sé si reubicar la construcción será suficiente."
                    •	"Es mejor hacer una evaluación para asegurarnos de que el plan no afecte a las aves, pero la reubicación podría no resolver completamente el problema."
                    •	"La opción b menciona reducir el tamaño del proyecto, pero una evaluación detallada es más útil. Aun así, no estoy seguro si la reubicación sea suficiente para proteger el hábitat."
                    •	"Reducir el tamaño del proyecto no es suficiente, es mejor hacer una evaluación detallada y considerar la reubicación, pero no sé si eso resolverá todo."
                    
                    Explicaciones de 3 puntos:
                    Criterio: Una descripción está bien desarrollada y la otra está parcialmente desarrollada. La respuesta muestra buena comprensión del problema y evalúa adecuadamente la opción seleccionada, aunque puede mejorar en algún aspecto.
                    Ejemplos de explicaciones de 3 puntos:
                    •	"La opción b menciona solicitar una reducción en el tamaño del proyecto, pero es más importante hacer una evaluación detallada y reubicar la construcción para proteger a las aves, aunque la implementación debe ser cuidadosa."
                    •	"Creo que reducir el tamaño del proyecto no es suficiente. Hacer una evaluación detallada y reubicar la construcción ayudará a las aves, pero es importante que se haga correctamente."
                    •	"La opción c sugiere que la empresa debe proponer soluciones, pero una evaluación adicional y la reubicación son más efectivas. Esto debería proteger el hábitat de las aves, aunque dependerá de la ejecución."
                    •	"Aunque la empresa debe ofrecer soluciones, hacer una evaluación detallada y considerar la reubicación son acciones más concretas para proteger el hábitat, pero se debe vigilar su aplicación."
                    Explicaciones de 4 puntos:
                    Criterio: Ambas descripciones están bien desarrolladas. La respuesta muestra una comprensión profunda del problema y evalúa detalladamente la opción seleccionada, justificando por qué es la mejor manera de abordar la situación.
                    Ejemplos de explicaciones de 4 puntos:
                    •	"La opción a sugiere aceptar el plan actual sin cambios, pero eso pondría en riesgo el hábitat de las aves. Proponer una evaluación más detallada es esencial para identificar los impactos y mitigar el daño, además de reubicar la construcción a una zona menos sensible."
                    •	"Aceptar el plan actual sin cambios no es una opción viable, ya que no protegería a las aves. Hacer una evaluación detallada y sugerir la reubicación del proyecto es lo más responsable."
                    •	"La opción b dice que reducir el tamaño del proyecto es suficiente, pero una evaluación exhaustiva y la reubicación ofrecen una mejor protección para las aves en peligro."
                    •	"Reducir el tamaño del proyecto no es suficiente. Hacer una evaluación detallada y sugerir la reubicación es la mejor manera de asegurar que el hábitat de las aves esté protegido."
                    •	"La opción c sugiere que la empresa debe proponer soluciones, pero una evaluación más detallada es necesaria para comprender el impacto real y reubicar la construcción a una zona menos ecológicamente sensible."
                    •	"Aunque la empresa debe ofrecer soluciones, la evaluación detallada del impacto ambiental y la reubicación de la construcción son la mejor forma de proteger el hábitat de las aves en peligro."',
                'valor_opcion' => null
            ],

            //Item 58
            [
                'id_criterio' => 26,
                'id_pregunta' => 114,
                'texto' => 'Nota 1: El objetivo de este ítem (58) es evaluar si el estudiante logra ampliar el espacio del problema, creando nuevas alternativas de solución que atiendan a los dos problemas presentados: el de la propagación del virus y el del decaimiento del ánimo del grupo. Las alternativas deben ser diferentes a las dadas en el anterior ítem y presentadas en los siguientes numerales y literales, de lo contrario se asignan 0 puntos: 
                    1) Decorar la habitación con mensajes alusivos al triunfo. 2) Investigar los casos de éxito de algunas agrupaciones que atravesaron por situaciones similares y lograron triunfar. 3) Descartar la participación en el certamen de cualquiera que se queje de la situación. 4) Dialogar con el grupo, encontrar los motivos por los cuales pueden ganar, y las formas de contrarrestar el virus y el agotamiento. 5) Limitar las salidas en la noche y poner música relajante. 6) Solicitar todo tipo de medicamentos, inyecciones, remedios caseros y vitaminas que fortalezcan el sistema inmune. g) Trabajar la mente de los compañeros con discursos fuertes que los haga reaccionar. h) Pedir al Maestro que reemplace a los miembros de la banda que están enfermos. i) Solicitar el doble de ensayos musicales y pedir bebidas energizantes. j) Identificar las cualidades de la banda sinfónica y reflexionarlas con tus compañeros, motivándolos al triunfo. k) Decir a los compañeros que están más desanimados que no contagien de ese ánimo a los demás. l) Resaltar la identidad de la banda y solicitar que se toquen las piezas musicales que caracterizan a la banda para convencer al jurado..
                    Nota 2: No es necesario que la respuesta incluya términos técnicos plasmados en el objetivo, o algunos como "propagación del virus", "decaimiento del ánimo", "estrategias motivacionales", etc. Las respuestas serán evaluadas en función de la creatividad y la pertinencia de las soluciones propuestas, sin requerir un lenguaje formal. Sin embargo, si el estudiante utiliza términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. No es necesario que el estudiante utilice nombres propios o haga referencias exactas al sujeto del contexto, pero su uso aporta claridad a las respuestas. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible. Asignarás de 0 a 4 puntos a la respuesta abierta este ítem 58.
                    Nota 3:
                    •	Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas.
                    •	Las alternativas que muestren creatividad, razonamiento lógico y coherencia deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos.
                    •	La evaluación se basa en la pertinencia y originalidad de las alternativas propuestas, y en cómo el estudiante atiende a los dos problemas presentados.
                    
                    Formas de puntuar la creación de alternativas de solución:
                    •	0 puntos:
                    o	Criterio: Las alternativas de solución no son distintas a las dadas en el anterior ítem. El estudiante repite las mismas alternativas o propone soluciones muy similares sin aportar ideas nuevas.
                    o	Ejemplos de creaciones de 0 puntos:
                    •	"Decorar la habitación con mensajes alusivos al triunfo para motivar a mis compañeros."
                    •	"Solicitar todo tipo de medicamentos, inyecciones, remedios caseros y vitaminas que fortalezcan el sistema inmune."
                    •	"Trabajar la mente de los compañeros con discursos fuertes que los haga reaccionar y mejorar su desempeño."
                    •	1 punto:
                    o	Criterio: Las alternativas de solución son distintas a las del ítem anterior, pero solo atienden a uno de los problemas (o al de la propagación del virus o al del decaimiento del ánimo del grupo), dejando el otro sin abordar.
                    o	Ejemplos de creaciones de 1 punto:
                    •	"Animaría a los compañeros con palabras de aliento y buscaría remedios naturales para fortalecer sus sistemas inmunológicos."
                    •	"Propondría hacer descansos más frecuentes durante los ensayos para reducir el cansancio y animar a mis compañeros con historias de éxito."
                    •	"Solicitaría a los padres que proporcionen comidas energéticas para los miembros de la banda y organizaría actividades recreativas para elevar el ánimo."
                    •	2 puntos:
                    o	Criterio: Las alternativas son distintas a las del ítem anterior, pero responden parcialmente a los dos problemas presentados. Es decir, ambas soluciones abordan los problemas pero de manera superficial o incompleta.
                    o	Ejemplos de creaciones de 2 puntos:
                    •	"Distribuiría folletos con mensajes motivadores y crearía un calendario de actividades de descanso para evitar el agotamiento."
                    •	"Organizaría actividades de esparcimiento para los compañeros y proporcionaría remedios naturales para aliviar los síntomas del virus."
                    •	"Programaría descansos más largos durante los ensayos y proporcionaría agua y frutas para mantener la hidratación."
                    •	3 puntos:
                    o	Criterio: Las alternativas son distintas a las anteriores, pero una responde parcialmente a uno de los problemas y la otra responde bien. Es decir, una solución está bien desarrollada y la otra necesita más profundidad.
                    o	Ejemplos de creaciones de 3 puntos:
                    •	"Implementaría un sistema de recompensas internas para motivar a mis compañeros, mientras garantizo que tengan acceso a vitaminas y descanso adecuado."
                    •	"Buscaría la colaboración de otras bandas para intercambiar miembros temporalmente y llenar las ausencias. También propondría sesiones de terapia grupal para levantar el ánimo."
                    •	"Voy a reducir el repertorio y simplificar las piezas para adaptarnos a la ausencia de los miembros enfermos."
                    •	4 puntos:
                    o	Criterio: Las alternativas son distintas a las anteriores, y ambas responden bien a los dos problemas presentados. Las soluciones son creativas, pertinentes y están bien desarrolladas.
                    o	Ejemplos de creaciones de 4 puntos:
                    •	"Organizaría una sesión de ejercicios de respiración y yoga para mejorar la salud respiratoria y relajar el cuerpo. Además, planearía actividades divertidas y motivadoras después de cada ensayo para levantar el ánimo del grupo."
                    •	"Crearía un programa de alimentación saludable con vitaminas y líquidos adecuados. También establecería momentos de descanso y relajación para combatir el agotamiento y levantar el ánimo."
                    •	"Solicitaría apoyo de profesionales de la salud para realizar chequeos médicos rápidos y proporcionar cuidados básicos. Además, organizaría sesiones de coaching motivacional para mantener el espíritu de lucha del grupo."',
                'valor_opcion' => null
            ],

            //Item 60
            [
                'id_criterio' => 27,
                'id_pregunta' => 121,
                'texto' => 'Nota 1: El objetivo de este ítem es evaluar la capacidad del estudiante para ampliar el espacio del problema, creando nuevas alternativas de solución que atiendan a los dos problemas presentados: el acceso limitado a servicios de salud y la mala calidad del aire. Se espera que el estudiante proponga alternativas de solución distintas a las dadas en el anterior ítem, pero que aborden cada uno de los problemas de manera coherente y efectiva. Las alternativas de solución del anterior ítem fueron:  1. Implementar clínicas móviles en comunidades rurales para ofrecer atención médica básica y emergencias. 2. Lanzar una campaña en redes sociales sobre la importancia de una vida saludable. 3.Proveer capacitación básica en primeros auxilios a voluntarios comunitarios. 4. Repartir folletos sobre higiene personal en mercados locales. 5. Proponer una reducción en el horario laboral de los trabajadores de la salud para evitar el agotamiento. 6. Construir un nuevo hospital en la periferia de la ciudad con una planificación deficiente de transporte. a) Implementar un sistema de transporte público eléctrico y bicicletas compartidas para reducir las emisiones de vehículos. b) Organizar un concurso de dibujos para estudiantes sobre la contaminación del aire. c) Establecer un programa de monitoreo del aire y reforestación en áreas urbanas para identificar focos de contaminación y mejorar la calidad del aire. d) Distribuir mascarillas en zonas de alta contaminación. e) Fomentar el uso de energías renovables mediante subsidios para paneles solares en hogares. f) Colocar carteles informativos sobre los peligros de la contaminación del aire en lugares públicos.
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo, o algunos como "acceso a la salud", "calidad del aire", "políticas públicas", etc. Las respuestas serán evaluadas en función de la comprensión del concepto subyacente, sin requerir un lenguaje formal. Sin embargo, si el estudiante utiliza términos técnicos correctamente, esto puede mejorar el puntaje al aportar claridad y precisión. No es necesario que el estudiante utilice nombres propios o haga referencias exactas al contexto, pero su uso aporta claridad a las respuestas. Asignarás de 0 a 4 puntos a la respuesta abierta de este ítem (60)
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las alternativas que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. La evaluación se basa en la pertinencia del razonamiento y en cómo el estudiante desarrolla las dos alternativas solicitadas.
                
                Formas de puntuar la creación de alternativas de solución:
                •	0 puntos:
                o	Criterio: La creación no contiene alternativas de solución distintas a las dadas en el ítem anterior, o no son soluciones directas a los problemas planteados.
                o	Ejemplos de creaciones de 0 puntos:
                •	"Implementar un sistema de transporte público eléctrico y bicicletas compartidas para reducir las emisiones y mejorar el acceso a la salud mediante transporte eficiente." 
                •	"Elegir políticos que resuelvan estas problemáticas."
                •	"Votar por los mejores proyectos sociales y ambientales."
                •	"Establecer un programa de monitoreo del aire y reforestación en áreas urbanas para mejorar la calidad del aire y ofrecer clínicas móviles en comunidades rurales para atención médica básica."
                •	1 punto:
                o	Criterio: La creación es distinta a las alternativas de solución del ítem anterior, pero solo atiende a uno de los problemas (o el acceso a la salud o la calidad del aire), dejando el otro sin abordar.
                o	Ejemplos de creaciones de 1 punto:
                •	"Mejorar la planta física de los hospitales y que sean sostenibles."
                •	"Fomentar el uso de energías renovables mediante subsidios para paneles solares en hogares para reducir la contaminación del aire."
                •	"Repartir folletos sobre higiene personal en mercados locales para educar sobre prácticas saludables."
                •	2 puntos:
                o	Criterio: La creación es distinta a las alternativas de solución del ítem anterior, pero las alternativas responden parcialmente a los dos problemas presentados. Es decir, ambas soluciones abordan los problemas pero de manera superficial o incompleta.
                o	Ejemplos de creaciones de 2 puntos:
                •	"Establecer clínicas móviles en zonas afectadas por la contaminación del aire y organizar talleres sobre cómo reducir la exposición a contaminantes."
                •	"Implementar un sistema de transporte público eléctrico y ofrecer subsidios para servicios médicos en comunidades con alta contaminación."
                •	"Repartir mascarillas en zonas de alta contaminación y realizar campañas educativas sobre el impacto de la contaminación en la salud."
                •	3 puntos:
                o	Criterio: Las alternativas son distintas a las anteriores, pero una responde parcialmente a uno de los problemas y la otra responde bien. Es decir, una solución está bien desarrollada y la otra necesita más profundidad.
                o	Ejemplos de creaciones de 3 puntos:
                •	"Crear centros de salud comunitarios con sistemas de filtración de aire integrados para ofrecer atención médica y mejorar la calidad del aire local."
                •	"Aumentar los horarios de atención médica y controlar las quemas agrícolas que afectan la calidad del aire."
                •	"Implementar programas de telemedicina para áreas remotas y promover la educación ambiental para reducir la contaminación."
                •	4 puntos:
                o	Criterio: Las alternativas son distintas a las anteriores, y las dos son coherentes, respondiendo bien a los dos problemas presentados. Las soluciones son creativas, pertinentes y están bien desarrolladas.
                o	Ejemplos de creaciones de 4 puntos:
                •	"Establecer clínicas de salud itinerantes que utilicen energía solar, reduciendo la contaminación y mejorando el acceso médico en zonas rurales."
                •	"Desarrollar un programa integral que incluya atención médica a domicilio para personas de bajos recursos y promover la plantación masiva de árboles en las ciudades para mejorar la calidad del aire."
                •	"Implementar un sistema de salud digital que permita consultas en línea, reduciendo la necesidad de desplazamientos, y establecer zonas de bajas emisiones restringiendo vehículos contaminantes."',
                'valor_opcion' => null
            ],

        ]);
    }
}
