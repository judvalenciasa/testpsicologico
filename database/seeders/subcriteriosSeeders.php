<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class subcriteriosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcriterios')->insert([

            //Item 32.1
            [
                'id_subcriterio' => 1,
                'id_subpregunta' => 6,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Existen muchas tribus urbanas en grandes y pequeñas ciudades" es una razón. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de razón, entendiendo que:
                Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                Y el enunciado correspondiente es:
                "Existen muchas tribus urbanas en grandes y pequeñas ciudades."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como razón o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como razón y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una razón porque habla de música y de las tribus."
                •	"No parece que sea relevante para la conclusión."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque describe cómo existen muchas tribus en las ciudades, lo que apoya la idea principal de que hay diversidad cultural."
                •	"Es una razón porque ofrece una idea previa que respalda la conclusión sobre la diversidad y resistencia al capitalismo."
                ',
                'valor_opcion' => null
            ],

            //Item 32.2
            [
                'id_subcriterio' => 2,
                'id_subpregunta' => 7,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado “La diversidad cultural en la urbe parece estar expresando un descontento y una forma de resistir a las imposiciones y estereotipos del capitalismo globalizante” es una conclusión.
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin penalizar el uso de un lenguaje informal, pero sin que el estudiante repita exactamente la definición proporcionada (Una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje o comunicado. Es a lo que se llega o la finalidad del mensaje transmitido). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos.
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de conclusión, entendiendo que:
                Una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje o comunicado. Es a lo que se llega o la finalidad del mensaje transmitido.
                Y el enunciado correspondiente es:
                "La diversidad cultural en la urbe parece estar expresando un descontento y una forma de resistir a las imposiciones y estereotipos del capitalismo globalizante."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como conclusión o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como conclusión y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una conclusión porque está hablando sobre lo que pasa en la sociedad."
                •	"No parece que sea tan importante en este contexto."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque es la idea principal del texto. Se llega a la conclusión de que la diversidad cultural es una forma de resistencia al capitalismo."
                •	"Es una conclusión porque resume el propósito del mensaje, que es mostrar que estas tribus resisten los estereotipos del capitalismo."
                ',
                'valor_opcion' => null
            ],

            //Item 32.3
            [
                'id_subcriterio' => 3,
                'id_subpregunta' => 8,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "En las calles se encuentran tribus con algunas décadas de historia como los Hippies, Punks, Góticos y Raperos, y otras un poco más recientes como los Hipsters, Emos, Rastafaries, Frikis, Skaters, Muppies, Pokemones, Reggaetoneros y Grunges" es una razón. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. Además, el empleo de mala ortografía o errores en la escritura de palabras no afectará la calificación del ítem.
                Nota 4: Al puntuar las respuestas se asignan 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de razón, entendiendo que:
                Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                Y el enunciado correspondiente es:
                "En las calles se encuentran tribus con algunas décadas de historia como los Hippies, Punks, Góticos y Raperos, y otras un poco más recientes como los Hipsters, Emos, Rastafaries, Frikis, Skaters, Muppies, Pokemones, Reggaetoneros y Grunges."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como razón o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como razón y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una razón porque menciona muchos grupos diferentes."
                •	"No parece que sea tan importante para la conclusión."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque describe las tribus urbanas que existen, lo que apoya la idea principal de la diversidad cultural."
                •	"Es una razón porque ofrece ejemplos específicos que respaldan la conclusión sobre la existencia de varias tribus y su historia."',
                'valor_opcion' => null
            ],

            //Item 32.4
            [
                'id_subcriterio' => 4,
                'id_subpregunta' => 9,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado "Cada cultura suburbana se caracteriza por un tipo de música y forma de vestir particular" es una razón. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de razón, entendiendo que:
                Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                Y el enunciado correspondiente es:
                "Cada cultura suburbana se caracteriza por un tipo de música y forma de vestir particular."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como razón o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como razón y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una razón porque habla de música y vestimenta."
                •	"No parece que sea tan importante para la conclusión."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque describe las características de las tribus urbanas, lo que apoya la idea de la diversidad."
                •	"Es una razón porque da información previa sobre cómo las tribus se diferencian entre sí, lo que respalda la conclusión."',
                'valor_opcion' => null
            ],

            //Item 32.5
            [
                'id_subcriterio' => 5,
                'id_subpregunta' => 10,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Por supuesto, puede haber otras formas de resistir a los estereotipos del capitalismo, o estas culturas pueden representar formas diversas de libertad de expresión" es un contrargumento. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación.  Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de contrargumento, entendiendo que:
                Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje.
                Y el enunciado correspondiente es:
                "Por supuesto, puede haber otras formas de resistir a los estereotipos del capitalismo, o estas culturas pueden representar formas diversas de libertad de expresión."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como contrargumento o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como contrargumento y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es un contrargumento porque habla de libertad."
                •	"No parece que sea importante para el argumento."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque contradice la idea de que las tribus resisten solo al capitalismo, sugiriendo que también expresan libertad."
                •	"Es un contrargumento porque refuta la idea central de resistencia al capitalismo, sugiriendo otras posibilidades."',
                'valor_opcion' => null
            ],

            //Item 34.1
            [
                'id_subcriterio' => 6,
                'id_subpregunta' => 16,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado "Contar con aguas limpias contribuye a la producción de alimentos, a la subsistencia de las comunidades y a tener calidad de vida" es una razón. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de razón, entendiendo que:
                Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                Y el enunciado correspondiente es:
                "Contar con aguas limpias contribuye a la producción de alimentos, a la subsistencia de las comunidades y a tener calidad de vida."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como razón o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como razón y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una razón porque habla sobre los alimentos y la calidad de vida."
                •	"No parece ser tan relevante en este caso."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque el enunciado explica cómo las aguas limpias ayudan a la producción de alimentos, lo que apoya la idea de la importancia de los ríos limpios."
                •	"Es una razón porque ofrece un fundamento sobre por qué los ríos limpios son importantes, apoyando el argumento sobre su conservación."',
                'valor_opcion' => null
            ],

            //Item 34.2
            [
                'id_subcriterio' => 7,
                'id_subpregunta' => 17,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado "La extensión de los ríos, los niveles de contaminación, la disponibilidad de recursos y los tiempos son cuestiones que deben tenerse en la cuenta" es un contrargumento. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje). El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación.  Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos.
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de contrargumento, entendiendo que:
                Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje.
                Y el enunciado correspondiente es:
                "La extensión de los ríos, los niveles de contaminación, la disponibilidad de recursos y los tiempos son cuestiones que deben tenerse en la cuenta."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como contrargumento o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como contrargumento y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es un contrargumento porque habla de muchas cosas como la contaminación."
                •	"No parece que esto sea tan importante en el contexto del argumento."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque plantea una objeción, señalando que hay otros factores como la extensión de los ríos y los recursos, lo que contradice la simplicidad de la propuesta."
                •	"Es un contrargumento porque presenta razones que contradicen la idea principal, mostrando que la descontaminación de los ríos no es tan simple debido a estas dificultades."',
                'valor_opcion' => null
            ],

            //Item 34.3
            [
                'id_subcriterio' => 8,
                'id_subpregunta' => 18,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado "Yo apoyaría esta propuesta, es una necesidad urgente para las personas y los ecosistemas" como una conclusión. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje o comunicado. Es a lo que se llega o la finalidad del mensaje transmitido). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación.  Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos.
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de conclusión, entendiendo que:
                Una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje o comunicado. Es a lo que se llega o la finalidad del mensaje transmitido.
                Y el enunciado correspondiente es:
                "Yo apoyaría esta propuesta, es una necesidad urgente para las personas y los ecosistemas."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como conclusión o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como conclusión y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una conclusión porque se refiere a los ecosistemas."
                •	"No parece que tenga relevancia como conclusión."
                •	
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque muestra el propósito principal, que es apoyar la propuesta debido a su urgencia para las personas y los ecosistemas."
                •	"Es una conclusión porque resume el apoyo a la propuesta y establece la necesidad de tomar medidas para descontaminar los ríos."',
                'valor_opcion' => null
            ],

            //Item 34.4
            [
                'id_subcriterio' => 9,
                'id_subpregunta' => 19,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "No es una tarea fácil, se requieren muchos recursos, nuevas tecnologías e incluso tiempo para lograrlo, por lo que el periodo de mandato puede ser corto para lograrlo" es un contrargumento. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de contrargumento, entendiendo que:
                Un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje.
                Y el enunciado correspondiente es:
                "No es una tarea fácil, se requieren muchos recursos, nuevas tecnologías e incluso tiempo para lograrlo, por lo que el periodo de mandato puede ser corto para lograrlo."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como contrargumento o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como contrargumento y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es un contrargumento porque menciona cosas difíciles como los recursos."
                •	"No parece que tenga relevancia para el argumento."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque contradice la idea de que es fácil descontaminar los ríos, mostrando que hay muchas dificultades como el tiempo y los recursos necesarios."
                •	"Es un contrargumento porque plantea obstáculos que refutan la viabilidad del plan del gobierno, como la falta de tiempo y recursos."',
                'valor_opcion' => null
            ],

            //Item 34.5
            [
                'id_subcriterio' => 10,
                'id_subpregunta' => 20,
                'texto' => 'Nota 1: El objetivo de este subítem es es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "La descontaminación de ríos puede ser significativa y se puede garantizar la existencia de futuras generaciones" es una razón. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se debe penalizar si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas, sino que se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de razón, entendiendo que:
                Una razón es una idea, premisa, indicio, señal o proposición inicial que da origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                Y el enunciado correspondiente es:
                "La descontaminación de ríos puede ser significativa y se puede garantizar la existencia de futuras generaciones."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como razón o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como razón y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una razón porque se habla de las generaciones futuras."
                •	"No parece relevante."
                Ejemplos de respuestas de 1 punto:
                •	"Seleccioné esta opción porque ofrece un motivo para descontaminar los ríos, lo que apoya la idea de garantizar un futuro para las próximas generaciones."
                •	"Es una razón porque muestra un argumento importante a favor de la descontaminación de los ríos, relacionando la acción con el bienestar de las generaciones futuras."',
                'valor_opcion' => null
            ],

            //Item 36.1
            [
                'id_subcriterio' => 11,
                'id_subpregunta' => 26,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Las lideresas informaron a las comunidades sobre las estrategias y acciones que tomarían para atender la situación" es un hecho. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto de lo enunciado). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede aportar claridad y mejorar el puntaje. No se penalizará si el estudiante no emplea las mismas palabras exactas de las definiciones proporcionadas; se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que demuestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de hecho, entendiendo que:
                Un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto de lo enunciado.
                Y el enunciado correspondiente es:
                "Las lideresas informaron a las comunidades sobre las estrategias y acciones que tomarían para atender la situación."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como hecho o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como hecho y ofrece una explicación coherente, relacionada con la definición proporcionada.
                Ejemplos de respuestas de 0 puntos:
                •	"Es un hecho porque habla de estrategias."
                •	"Me parece que es un hecho porque es importante."
                Ejemplos de respuestas de 1 punto:
                •	"Es un hecho porque describe algo que sucedió y puede ser comprobado."
                •	"Seleccioné esta opción porque informa sobre una acción real que las lideresas llevaron a cabo."
                •	"Es un hecho ya que se trata de un evento específico ocurrido en la realidad."',
                'valor_opcion' => null
            ],

            //Item 36.2
            [
                'id_subcriterio' => 12,
                'id_subpregunta' => 27,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Es deber de las personas colaborar con los asuntos de su comunidad, pues se trata del espacio en el que permanecen y se deben proporcionar las mejores condiciones de vida" es un argumento razonado. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un argumento razonado es el planteamiento de una o más declaraciones que apoyan una conclusión). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero su correcta utilización puede mejorar el puntaje. No se penalizará si el estudiante no utiliza las mismas palabras exactas de las definiciones proporcionadas; se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que demuestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de argumento razonado, entendiendo que:
                Un argumento razonado es el planteamiento de una o más declaraciones que apoyan una conclusión.
                Y el enunciado correspondiente es:
                "Es deber de las personas colaborar con los asuntos de su comunidad, pues se trata del espacio en el que permanecen y se deben proporcionar las mejores condiciones de vida."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como argumento razonado o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como argumento razonado y ofrece una explicación coherente.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una opinión porque alguien cree eso."
                •	"Es un hecho porque es algo que deben hacer."
                Ejemplos de respuestas de 1 punto:
                •	"Es un argumento razonado porque da razones de por qué las personas deben colaborar en su comunidad."
                •	"Seleccioné esta opción porque presenta una idea respaldada por motivos que apoyan una conclusión."
                •	"Es un argumento ya que explica y justifica la importancia de participar en asuntos comunitarios."',
                'valor_opcion' => null
            ],

            //Item 36.3
            [
                'id_subcriterio' => 13,
                'id_subpregunta' => 28,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Es una buena idea porque las personas de las veredas pueden informar a la policía, evitar este tipo de sucesos y contribuir a mejorar la percepción de seguridad en la población" es un argumento razonado. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un argumento razonado es el planteamiento de una o más declaraciones que apoyan una conclusión). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima, pero puede aportar claridad y mejorar el puntaje. No se penalizará si el estudiante no utiliza las mismas palabras exactas de las definiciones proporcionadas; se evaluará su capacidad para explicar o relacionar el significado con la afirmación. Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones con razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de argumento razonado, entendiendo que:
                Un argumento razonado es el planteamiento de una o más declaraciones que apoyan una conclusión.
                Y el enunciado correspondiente es:
                "Es una buena idea porque las personas de las veredas pueden informar a la policía, evitar este tipo de sucesos y contribuir a mejorar la percepción de seguridad en la población."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como argumento razonado o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como argumento razonado y ofrece una explicación coherente.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una opinión porque dice que es una buena idea."
                •	"Creo que es un hecho porque pueden informar a la policía."
                Ejemplos de respuestas de 1 punto:
                •	"Es un argumento razonado porque presenta razones que respaldan la idea de informar a la policía."
                •	"Seleccioné esta opción porque da motivos que apoyan la conclusión de que es beneficioso para la seguridad."
                •	"Es un argumento ya que explica cómo esa acción puede mejorar la situación en la comunidad."',
                'valor_opcion' => null
            ],

            //Item 36.4
            [
                'id_subcriterio' => 14,
                'id_subpregunta' => 29,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Siempre habrá personas malintencionadas u otras que se nieguen a colaborar con su comunidad" es una opinión. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Una opinión es una afirmación que expresa juicios o puntos de vista personales, sin basarse necesariamente en hechos verificables). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio para obtener la puntuación máxima. No se penalizará si el estudiante no utiliza las mismas palabras exactas de las definiciones proporcionadas; se evaluará su capacidad para explicar o relacionar el significado con la afirmación.  Los errores ortográficos o gramaticales no afectarán la calificación del ítem, siempre que el razonamiento sea claro y comprensible.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones que muestren razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de opinión, entendiendo que:
                Una opinión es una afirmación que expresa juicios o puntos de vista personales, sin basarse necesariamente en hechos verificables.
                Y el enunciado correspondiente es:
                "Siempre habrá personas malintencionadas u otras que se nieguen a colaborar con su comunidad."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como opinión o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como opinión y ofrece una explicación coherente.
                Ejemplos de respuestas de 0 puntos:
                •	"Es un hecho porque siempre pasa."
                •	"Creo que es un argumento razonado."
                Ejemplos de respuestas de 1 punto:
                •	"Es una opinión porque es un pensamiento sobre cómo serán las personas."
                •	"Seleccioné esta opción porque expresa un punto de vista personal que no puede verificarse."
                •	"Es una opinión ya que refleja una creencia sin evidencia concreta."',
                'valor_opcion' => null
            ],

            //Item 36.5
            [
                'id_subcriterio' => 15,
                'id_subpregunta' => 30,
                'texto' => 'Nota 1: El objetivo de este subítem es evaluar la capacidad del estudiante para explicar adecuadamente por qué el enunciado: "Los reportes indican que se habían presentado alrededor de 20 casos de abuso en lo que iba corrido del año en la zona rural indicada" es un hecho. 
                Nota 2: No es necesario que el estudiante utilice términos técnicos plasmados en el objetivo en las respuestas. Se evaluará la comprensión en función de la claridad del razonamiento, sin que el estudiante repita exactamente la definición proporcionada (Un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto de lo enunciado). El uso de lenguaje informal no será penalizado. El uso de términos técnicos no es obligatorio. No se penalizará si el estudiante no utiliza las mismas palabras exactas de las definiciones proporcionadas; se evaluará su capacidad para explicar o relacionar el significado con la afirmación.
                Nota 3: Los ejemplos proporcionados a continuación son solo orientativos y no representan las únicas respuestas válidas. Las explicaciones con razonamiento lógico y coherente deben ser consideradas válidas, aunque no coincidan textualmente con los ejemplos. 
                Nota 4: Al puntuar las respuestas asignarás 0 puntos o 1 punto. Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la definición de hecho, entendiendo que:
                Un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto de lo enunciado.
                Y el enunciado correspondiente es:
                "Los reportes indican que se habían presentado alrededor de 20 casos de abuso en lo que iba corrido del año en la zona rural indicada."
                Formas de puntuar la explicación:
                •	0 puntos: No identifica correctamente el enunciado como hecho o la explicación es irrelevante.
                •	1 punto: Identifica correctamente el enunciado como hecho y ofrece una explicación coherente.
                Ejemplos de respuestas de 0 puntos:
                •	"Es una opinión porque alguien lo dijo."
                •	"Creo que es un argumento porque habla de reportes."
                Ejemplos de respuestas de 1 punto:
                •	"Es un hecho porque proporciona datos que pueden verificarse en registros oficiales."
                •	"Seleccioné esta opción porque indica información específica sobre casos ocurridos, lo cual es comprobable."
                •	"Es un hecho ya que presenta cifras exactas reportadas por una fuente."',
                'valor_opcion' => null
            ],
        ]);
    }
}
