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
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una razón o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Razón: son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                    Ejemplos de explicaciones relacionadas con la definición de razón, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	La marque porque creo que representan las ideas previas que dan sentido a la razón o conclusión.
                    •	Porque (el artículo puede ser otro similar) son la introducción o respaldo de la conclusión. 
                    •	Porque para llegar a una conclusión se necesita de estas premisas.
                    •	Porque dan fuerza, credibilidad o sentido a lo que se pretende concluir. 
                    •	Porque acompañan el sentido del mensaje, pueden ser el cómo de las cosas y guían al lector a comprender el porqué de ellas.
                    
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                    
                    ',
                'valor_opcion' => null
            ],

            //Item 32.2
            [
                'id_subcriterio' => 2,
                'id_subpregunta' => 7,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una conclusión o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando relacionando el significado o el ejemplo con la afirmación:

                    Una Conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje, comunicado, es a lo que se llega o la finalidad del mensaje trasmitido o que se transmite.
                    
                    Ejemplos de explicaciones relacionadas con la definición de conclusión, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    •	Creo que se trata del mensaje central del texto, el objeto o la creencia que se pretende transmitir.
                    •	Es lo que respaldan las razones, es el núcleo del mensaje que pude estar al final, al principio o en el intermedio del mensaje. 
                    •	Es el sentido del texto, el porqué de las cosas.
                    •	Es lo que queda de las otras premisas.
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                    ',
                'valor_opcion' => null
            ],

            //Item 32.3
            [
                'id_subcriterio' => 3,
                'id_subpregunta' => 8,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una razón o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Razón: son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                    Ejemplos de explicaciones relacionadas con la definición de razón, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                     
                    •	La marque porque creo que representan las ideas previas que dan sentido a la razón o conclusión.
                    •	Porque (el artículo puede ser otro similar) son la introducción o respaldo de la conclusión. 
                    •	Porque para llegar a una conclusión se necesita de estas premisas.
                    •	Porque dan fuerza, credibilidad o sentido a lo que se pretende concluir. 
                    •	Porque acompañan el sentido del mensaje, pueden ser el cómo de las cosas y guían al lector a comprender el porqué de ellas.
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 32.4
            [
                'id_subcriterio' => 4,
                'id_subpregunta' => 9,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una razón o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Razón: son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                    
                    Ejemplos de explicaciones relacionadas con la definición de razón, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	La marque porque creo que representan las ideas previas que dan sentido a la razón o conclusión.
                    •	Porque (el artículo puede ser otro similar) son la introducción o respaldo de la conclusión. 
                    •	Porque para llegar a una conclusión se necesita de estas premisas.
                    •	Porque dan fuerza, credibilidad o sentido a lo que se pretende concluir. 
                    •	Porque acompañan el sentido del mensaje, pueden ser el cómo de las cosas y guían al lector a comprender el porqué de ellas.
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 32.5
            [
                'id_subcriterio' => 5,
                'id_subpregunta' => 10,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un contrargumento o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Contrargumento: son los que contradicen, oponen o refutan la conclusión, propósito u objeto del enunciado, texto o mensaje.
                    
                    Ejemplos de explicaciones relacionadas con la definición de contrargumento, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    Porque se opone al mensaje central o a la conclusión.
                    •	Porque pretende plantear una nueva conclusión. 
                    •	Es como una contradicción de la creencia o propósito del mensaje. 
                    •	Contradicen el mensaje central del texto. 
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 34.1
            [
                'id_subcriterio' => 6,
                'id_subpregunta' => 16,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una razón o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Razón: son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                    Ejemplos de explicaciones relacionadas con la definición de razón, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	La marque porque creo que representan las ideas previas que dan sentido a la razón o conclusión.
                    •	Porque (el artículo puede ser otro similar) son la introducción o respaldo de la conclusión. 
                    •	Porque para llegar a una conclusión se necesita de estas premisas.
                    •	Porque dan fuerza, credibilidad o sentido a lo que se pretende concluir. 
                    •	Porque acompañan el sentido del mensaje, pueden ser el cómo de las cosas y guían al lector a comprender el porqué de ellas.
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                    
                     ',
                'valor_opcion' => null
            ],

            //Item 34.2
            [
                'id_subcriterio' => 7,
                'id_subpregunta' => 17,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un contrargumento o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Contrargumento: son los que contradicen, oponen o refutan la conclusión, propósito u objeto del enunciado, texto o mensaje.
                    Ejemplos de explicaciones relacionadas con la definición de contrargumento, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    Porque se opone al mensaje central o a la conclusión.
                    •	Porque pretende plantear una nueva conclusión. 
                    •	Es como una contradicción de la creencia o propósito del mensaje. 
                    •	Contradicen el mensaje central del texto. 
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 34.3
            [
                'id_subcriterio' => 8,
                'id_subpregunta' => 18,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una conclusión o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando relacionando el significado o el ejemplo con la afirmación:

                    Una Conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje, comunicado, es a lo que se llega o la finalidad del mensaje trasmitido o que se transmite.
                    
                    Ejemplos de explicaciones relacionadas con la definición de conclusión, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	Creo que se trata del mensaje central del texto, el objeto o la creencia que se pretende transmitir.
                    •	Es lo que respaldan las razones, es el núcleo del mensaje que pude estar al final, al principio o en el intermedio del mensaje. 
                    •	Es el sentido del texto, el porqué de las cosas.
                    •	Es lo que queda de las otras premisas.
                    
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                    ',
                'valor_opcion' => null
            ],

            //Item 34.4
            [
                'id_subcriterio' => 9,
                'id_subpregunta' => 19,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un contrargumento o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Contrargumento: son los que contradicen, oponen o refutan la conclusión, propósito u objeto del enunciado, texto o mensaje.
                    Ejemplos de explicaciones relacionadas con la definición de contrargumento, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    Porque se opone al mensaje central o a la conclusión.
                    •	Porque pretende plantear una nueva conclusión. 
                    •	Es como una contradicción de la creencia o propósito del mensaje. 
                    •	Contradicen el mensaje central del texto. 
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados para cada una de las anteriores categorías siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 34.5
            [
                'id_subcriterio' => 10,
                'id_subpregunta' => 20,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una razón o a partir de los siguientes ejemplos, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Razón: son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir.
                    Ejemplos de explicaciones relacionadas con la definición de razón, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    •	La marque porque creo que representan las ideas previas que dan sentido a la razón o conclusión.
                    •	Porque (el artículo puede ser otro similar) son la introducción o respaldo de la conclusión. 
                    •	Porque para llegar a una conclusión se necesita de estas premisas.
                    •	Porque dan fuerza, credibilidad o sentido a lo que se pretende concluir. 
                    •	Porque acompañan el sentido del mensaje, pueden ser el cómo de las cosas y guían al lector a comprender el porqué de ellas.
                    
                     (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 36.1
            [
                'id_subcriterio' => 11,
                'id_subpregunta' => 26,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un hecho o a partir de los siguientes ejemplos de respuesta, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:
                    Un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto 
                    de lo enunciado.
                    
                    Ejemplos de explicaciones relacionadas con la definición de hecho, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	Creo que es algo que sucedió en la información suministrada
                    •	Porque son datos precisos de algo que paso 
                    •	Es una realidad en el enunciado
                    •	Así fue como pasaron las cosas o lo que pasó.
                    •	Se acompaña de un verbo en pasado indicando que sucedió
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 36.2
            [
                'id_subcriterio' => 12,
                'id_subpregunta' => 27,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un argumento razonado o a partir de los siguientes ejemplos de respuesta, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Argumento razonado: es el planteamiento de una o más declaraciones que apoyan una conclusión.
                    
                    Ejemplos de explicaciones relacionadas con la definición de argumento razonado, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    
                    •	Porque se opone al mensaje central o a la conclusión.
                    •	Porque pretende plantear una nueva conclusión. 
                    •	Es como una contradicción de la creencia o propósito del mensaje. 
                    •	Contradicen el mensaje central del texto. 
                    
                     (Se asigna el punto a explicaciones distintas a los ejemplos dados para cada una de las anteriores categorías siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 36.3
            [
                'id_subcriterio' => 13,
                'id_subpregunta' => 28,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un argumento razonado o a partir de los siguientes ejemplos de respuesta, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:

                    Argumento razonado: es el planteamiento de una o más declaraciones que apoyan una conclusión.
                    
                    Ejemplos de explicaciones relacionadas con la definición de argumento razonado, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                     Porque se opone al mensaje central o a la conclusión.
                    •	Porque pretende plantear una nueva conclusión. 
                    •	Es como una contradicción de la creencia o propósito del mensaje. 
                    •	Contradicen el mensaje central del texto. 
                    
                     (Se asigna el punto a explicaciones distintas a los ejemplos dados para cada una de las anteriores categorías siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                    
                     ',
                'valor_opcion' => null
            ],

            //Item 36.4
            [
                'id_subcriterio' => 14,
                'id_subpregunta' => 29,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es una opinión o a partir de los siguientes ejemplos de respuesta, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:
                    Una Opinión es una afirmación que expresa juicios o puntos de vista personal, sin basarse necesariamente en hechos verificables.
                    
                    Ejemplos de explicaciones relacionadas con la definición de opinión, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	Porque es lo que la persona piensa desde su punto de vista.
                    •	Es una forma de dar a entender lo que se piensa.
                    •	Es la forma particular de las personas de ver las cosas. 
                    •	Son juicios que emiten las personas desde lo que perciben. 
                    •	Es como las personas expresan lo que se les ocurre respecto de algo.
                    •	
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados para cada una de las anteriores categorías siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],

            //Item 36.5
            [
                'id_subcriterio' => 15,
                'id_subpregunta' => 30,
                'texto' => 'Se asigna 1 punto si el estudiante explica correctamente su selección de acuerdo con la siguiente definición de lo que es un hecho o a partir de los siguientes ejemplos de respuesta, pero sin emplear las mismas palabras, sino explicando o relacionando el significado o el ejemplo con la afirmación:
                    Un Hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto 
                    de lo enunciado.
                    
                    Ejemplos de explicaciones relacionadas con la definición de hecho, que el examinando debe relacionar con el enunciado para obtener 1 punto:
                    
                    •	Creo que es algo que sucedió en la información suministrada
                    •	Porque son datos precisos de algo que paso 
                    •	Es una realidad en el enunciado
                    •	Así fue como pasaron las cosas o lo que pasó.
                    •	Se acompaña de un verbo en pasado indicando que sucedió
                    
                    (Se asigna el punto a explicaciones distintas a los ejemplos dados para cada una de las anteriores categorías siempre que, a pesar de cambiar las palabras, no cambie el sentido del significado expuesto en cada una de ellas)
                     ',
                'valor_opcion' => null
            ],
        ]);
    }
}
