<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preguntas')->insert([

            //Item 1
            [
                'id_pregunta' => 12,
                'id_prueba' => 1,
                'id_contexto' => 1,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'Con base en lo anterior, ¿con qué escenario crees que se encontrará Gilberto en el torneo de gamers de este año?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 2 _ Abierta
            [
                'id_pregunta' => 13,
                'id_prueba' => 1,
                'id_contexto' => 1,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué crees que la alternativa que marcaste en el anterior ítem es la más razonable.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 3
            [
                'id_pregunta' => 14,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'De acuerdo con lo justificables que puedan ser las afirmaciones a partir de la observación y la experiencia, y no desde la ciencia o la teoría, cuál de las siguientes alternativas contiene dos afirmaciones justificables que logran convencerte de que el planeta Tierra es una circunferencia.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 4 _ Abierta
            [
                'id_pregunta' => 15,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué piensas que la alternativa que seleccionaste en el ítem anterior contiene dos afirmaciones justificables a partir de la observación y la experiencia que te convencen de que el Planeta Tierra es una circunferencia.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 5
            [
                'id_pregunta' => 16,
                'id_prueba' => 1,
                'id_contexto' => 3,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => '¿En qué crees que falló Mariana para que la profesora tenga que darle algunas recomendaciones y bajarle un punto en la nota?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 6
            [
                'id_pregunta' => 17,
                'id_prueba' => 1,
                'id_contexto' => 3,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué en el anterior ítem marcaste esa alternativa como la respuesta que contiene los errores cometidos por Mariana.',
                'tipo_pregunta' => 'abierta'
            ],

            /* //Item 1_metacognicion
            [
                'id_pregunta' => 18,
                'id_prueba' => 1,
                'id_contexto' => 1,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los anteriores dos (2) ítems.',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 7
            [
                'id_pregunta' => 19,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'Con base en la pregunta ¿Crees que al realizar importaciones de la materia prima y/o al producirla, se garantiza que la empresa obtenga resultados similares a los de las demás empresas?, cuál de las siguientes opciones representa la respuesta que darías a la empresa:',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 8
            [
                'id_pregunta' => 20,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la respuesta que darías a la empresa respecto de la pregunta ¿Crees que al realizar importaciones de la materia prima y/o al producirla, se garantiza que la empresa obtenga resultados similares a los de las demás empresas?',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto4_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 21,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 22,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 23,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Al responder a este tipo de tareas mentales procuro avanzar y/o tomar una pausa
                cuando no entiendo algo',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 9
            [
                'id_pregunta' => 24,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'De las siguientes alternativas de respuesta ¿Cuál crees que sería la respuesta más razonable que debe darle el jefe al experto delegado?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 10
            [
                'id_pregunta' => 25,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la respuesta razonable que debe darle el jefe al experto.',
                'tipo_pregunta' => 'abierta'
            ],
            //Contexto5_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 26,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 27,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 28,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Cuando terminé de responder al ítem supe cómo me había ido',
                'tipo_pregunta' => 'cerrada'
            ], */
            //Item 11
            [
                'id_pregunta' => 29,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'A partir de la anterior información, a través de cuál de los siguientes postulados darías una opinión razonada al padre de familia respecto de su convencimiento acerca de la causa de la depresión de su hija y la medida que ha tomado.',
                'tipo_pregunta' => 'cerrada'
            ],
            //Item 12
            [
                'id_pregunta' => 30,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la opinión razonada que darías al padre de familia respecto de su convencimiento acerca de la causa de la depresión de su hija y la medida que ha tomado.',
                'tipo_pregunta' => 'abierta'
            ],
            //Contexto6_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 31,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 32,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 33,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Me propuse el objetivo de pensar críticamente antes de responder al ítem',
                'tipo_pregunta' => 'cerrada'
            ], */
            //Item 13
            [
                'id_pregunta' => 34,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'Si se aproxima el día en que los ciudadanos participarán con el voto a favor o en contra de los cambios en la Ley, ¿cuál de la siguiente información acerca de los estudios realizados por la institución necesitarías para apoyar tu decisión y ejercer el derecho al voto de forma razonada?',
                'tipo_pregunta' => 'cerrada'
            ],
            //Item 14
            [
                'id_pregunta' => 35,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la que contiene información acerca de los estudios realizados por la institución necesitaría para apoyar tu decisión y ejercer el derecho al voto de forma razonada.',
                'tipo_pregunta' => 'abierta'
            ],
            //Contexto7_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 36,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 37,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 38,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Una estrategia que puedo utilizar para responder a este tipo de tareas cognitivas es inventarme mis propios ejemplos para poder entender mejor la información',
                'tipo_pregunta' => 'cerrada'
            ], */
            //Item 15
            [
                'id_pregunta' => 39,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => '¿Cuál de la siguiente información suministrada por los representantes del programa universitario sería de mayor utilidad para decidir qué programa recomendar a tu amiga?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 16
            [
                'id_pregunta' => 40,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la información, suministrada por los representantes del programa universitario, de mayor utilidad para decidir qué programa recomendar a tu amiga.',
                'tipo_pregunta' => 'abierta'
            ],
            //Contexto8_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 41,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 42,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 43,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Pensé en distintas alternativas de respuesta al ítem',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 17
            [
                'id_pregunta' => 44,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => 4,
                'id_categoria' => 2,
                'texto' => 'Teniendo en cuenta la información suministrada en el anterior contexto ¿Cuál es la probabilidad de que Jesús David se convierta en un astronauta de la NASA?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 18
            [
                'id_pregunta' => 45,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => 4,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la probabilidad de que Jesús David se convierta en un astronauta de la NASA.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto9_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 46,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 47,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 48,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Cuando no logro entender un problema o situación como el anterior cambio de estrategias',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 19
            [
                'id_pregunta' => 49,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => 4,
                'id_categoria' => 2,
                'texto' => 'De acuerdo con la información de la publicación electrónica ¿Cuáles de los siguientes enunciados son los más razonables y que ponen en entredicho la predicción o probabilidad de que suceda lo indicado con el empleo y las máquinas?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 20
            [
                'id_pregunta' => 50,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => 4,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa que contiene los enunciados más razonables y que ponen en entredicho la predicción o probabilidad de que suceda lo indicado con el empleo y las máquinas.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto10_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 51,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 52,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 53,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Cuando terminé de responder al ítem me pregunté si había una alternativa o respuesta más acertada',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 21
            [
                'id_pregunta' => 54,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => 6,  //preguntar porque no dice en el documento
                'id_categoria' => 2,
                'texto' => '¿Cuál de las siguientes opciones de respuesta es la mejor crítica al mensaje del rector?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 22
            [
                'id_pregunta' => 55,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => 6,  //preguntar porque no dice en el documento
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la mejor crítica al mensaje del rector.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto11_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 56,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 57,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 58,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Me hice preguntas sobre el tema antes de responder al ítem',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 23
            [
                'id_pregunta' => 59,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => 5,
                'id_categoria' => 2,
                'texto' => 'Seleccionando una de las siguientes alternativas califica el razonamiento del gobernador sobre este tema utilizando una escala de 7 puntos.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 24
            [
                'id_pregunta' => 60,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => 5,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como calificación del razonamiento del gobernador.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto12_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 61,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 62,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 63,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Utilicé la estructura y la organización del texto para comprender mejor el ítem',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 25
            [
                'id_pregunta' => 64,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => 5,
                'id_categoria' => 2,
                'texto' => 'Con base en los anteriores acontecimientos, de los siguientes enunciados ¿Cuál de las siguientes propuestas presentadas por los estudiantes de bachillerato respaldarías?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 26
            [
                'id_pregunta' => 65,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => 5,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la propuesta que respaldarías.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto13_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 66,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 67,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 68,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Cuando estaba respondiendo al ítem, me detuve en algún momento para saber si estaba entendiendo',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 27
            [
                'id_pregunta' => 69,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => 6,
                'id_categoria' => 2,
                'texto' => 'De acuerdo con lo anterior ¿Cuál de los siguientes enunciados representa los motivos por los que el director de la Unidad de Gestión del Riesgo puedo haber confundido a las comunidades con la información suministrada?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 28
            [
                'id_pregunta' => 70,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => 6,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como el enunciado que contiene los motivos por los que el director de la Unidad de Gestión del Riesgo puedo haber confundido a las comunidades con la información suministrada.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto14_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 71,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 72,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 73,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Al responder a este tipo de tareas cognitivas y me encuentro confundido me pregunto si lo que suponía era correcto o no',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 29
            [
                'id_pregunta' => 74,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => 6,
                'id_categoria' => 2,
                'texto' => 'Sin centrarte en opiniones sobre el tema, ¿por qué crees que la decisión del gobierno es irracional?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 30
            [
                'id_pregunta' => 75,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => 6,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa por ser la que, sin centrate en opiniones sobre el tema, representa la decisión irracional del gobierno.',
                'tipo_pregunta' => 'abierta'
            ],

            //Contexto15_Metacognición
            /* //pregunta 1
            [
                'id_pregunta' => 76,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Soy consciente de la habilidad del pensamiento crítico que empleé para responder a los s dos (2) ítems anteriores.',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 2 metacognición
            [
                'id_pregunta' => 77,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => '¿Cuál de las siguientes habilidades de pensamiento crítico utilicé principalmente?',
                'tipo_pregunta' => 'cerrada'
            ],
            //pregunta 3 metacognición
            [
                'id_pregunta' => 78,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => null,
                'id_categoria' => 3,
                'texto' => 'Cuando terminé de responder el ítem me pregunté si había pensado críticamente',
                'tipo_pregunta' => 'cerrada'
            ], */

            //Item 31
            [
                'id_pregunta' => 79,
                'id_prueba' => 1,
                'id_contexto' => 16,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'Teniendo presente que: las razones son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir; que una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje, comunicado, es a lo que se llega o la finalidad del mensaje trasmitido o que se transmite; y, que un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje. Para cada una de los siguientes cinco (5) enunciados que componen el contexto anterior, indica si se trata de una conclusión, una razón o un contraargumento seleccionando la alternativa de respuesta correcta que se encuentra en la parte inferior del enunciado: ',
                'tipo_pregunta' => 'subpregunta'
            ],
            //Item 32
            [
                'id_pregunta' => 80,
                'id_prueba' => 1,
                'id_contexto' => 16,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'Sin responder exactamente con las definiciones que te hemos suministrado de lo que es una razón, una conclusión y un contrargumento, explica tus respuestas anteriores. ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 33
            [
                'id_pregunta' => 81,
                'id_prueba' => 1,
                'id_contexto' => 17,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'Teniendo presente que: las razones son las ideas, premisas, indicios, señales o proposiciones iniciales que dan origen, credibilidad, respaldo, sustento o viabilidad al objeto, sentido o conclusión de la información o del mensaje que se quiere transmitir. Que una conclusión es el propósito, objetivo, intencionalidad, creencia o el porqué del texto, mensaje, comunicado, es a lo que se llega o la finalidad del mensaje trasmitido o que se transmite. Y, que un contrargumento es lo que contradice, opone o refuta la conclusión, propósito u objeto del enunciado, texto o mensaje. Para cada una de los siguientes cinco (5) enunciados que componen el contexto anterior, indica si se trata de una conclusión, una razón o un contraargumento seleccionando la alternativa de respuesta correcta que se encuentra en la parte inferior del enunciado: ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 34
            [
                'id_pregunta' => 82,
                'id_prueba' => 1,
                'id_contexto' => 17,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'Sin responder exactamente con las definiciones que te hemos suministrado de lo que es una razón, una conclusión y un contrargumento, explica tus respuestas anteriores. ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 35
            [
                'id_pregunta' => 83,
                'id_prueba' => 1,
                'id_contexto' => 18,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'A partir del anterior contexto y teniendo presente que una opinión es una afirmación que expresa juicios o puntos de vista personales, sin basarse necesariamente en hechos verificables; que un hecho es una afirmación susceptible de comprobación o verificación objetiva en el contexto de lo enunciado; y, que un argumento razonado es el planteamiento de una o más declaraciones que apoyan una conclusión.

Para cada una de las siguientes afirmaciones, indica si se trata de una opinión, un hecho, o argumento razonado ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 36
            [
                'id_pregunta' => 84,
                'id_prueba' => 1,
                'id_contexto' => 18,
                'id_subhabilidad' => 7,
                'id_categoria' => 2,
                'texto' => 'Sin responder exactamente con las definiciones que te hemos suministrado de lo que es una opinión, un hecho y un argumento razonado, explica tus respuestas anteriores en los cuadros de texto. ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 37
            [
                'id_pregunta' => 85,
                'id_prueba' => 1,
                'id_contexto' => 19,
                'id_subhabilidad' => 8,
                'id_categoria' => 2,
                'texto' => 'Con base en la sugerencia del gurú ¿Qué conclusión crees que se deriva de tu observación? ',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 38
            [
                'id_pregunta' => 86,
                'id_prueba' => 1,
                'id_contexto' => 19,
                'id_subhabilidad' => 8,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la conclusión que se deriva de tu observación a sabiendas de la sugerencia del gurú. ',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 39
            [
                'id_pregunta' => 87,
                'id_prueba' => 1,
                'id_contexto' => 20,
                'id_subhabilidad' => 8,
                'id_categoria' => 2,
                'texto' => 'Imaginando que res uno de los compañeros de trabajo y con base en el contexto proporcionado ¿Con cuál de los siguientes enunciados contrargumentarías la conclusión a la que ha llegado Rafael?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 40
            [
                'id_pregunta' => 88,
                'id_prueba' => 1,
                'id_contexto' => 20,
                'id_subhabilidad' => 8,
                'id_categoria' => 2,
                'texto' => 'Imaginando que eres uno de los compañeros de trabajo, en no más de 100 palabras explica por qué seleccionaste esa alternativa como la respuesta que contrargumenta la conclusión de Rafael. ',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 41
            [
                'id_pregunta' => 89,
                'id_prueba' => 1,
                'id_contexto' => 21,
                'id_subhabilidad' => 9,
                'id_categoria' => 2,
                'texto' => '¿Cuál de las siguientes opciones representaría una respuesta razonable por parte de sus amigas?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 42
            [
                'id_pregunta' => 90,
                'id_prueba' => 1,
                'id_contexto' => 21,
                'id_subhabilidad' => 9,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como una respuesta razonable que le darían las amigas a la joven',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 43
            [
                'id_pregunta' => 91,
                'id_prueba' => 1,
                'id_contexto' => 22,
                'id_subhabilidad' => 9,
                'id_categoria' => 2,
                'texto' => 'Con base en lo anterior ¿Cuál de las siguientes opciones representaría una respuesta razonable de parte de otros vecinos?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 44
            [
                'id_pregunta' => 92,
                'id_prueba' => 1,
                'id_contexto' => 22,
                'id_subhabilidad' => 9,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la opción que representaría una respuesta razonable de parte de otros vecinos.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 45
            [
                'id_pregunta' => 93,
                'id_prueba' => 1,
                'id_contexto' => 23,
                'id_subhabilidad' => 10,
                'id_categoria' => 2,
                'texto' => '¿Qué información es determinante en la decisión que tomará Pepito? Para cada una de las siguientes alternativas, califica su importancia a la hora de tomar una decisión sobre el ofrecimiento de la Universidad. Selecciona tu calificación de la información en una escala de 1 a 5 en donde:
                    1 = nada importante.
                    2 = de muy poca importancia.
                    3 = de cierta importancia.
                    4 = importante. 
                    5 = muy importante.
                    ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 46
            [
                'id_pregunta' => 94,
                'id_prueba' => 1,
                'id_contexto' => 23,
                'id_subhabilidad' => 10,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste la información marcada como muy importante (a la que asignaste los 5 puntos).',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 47
            [
                'id_pregunta' => 95,
                'id_prueba' => 1,
                'id_contexto' => 24,
                'id_subhabilidad' => 10,
                'id_categoria' => 2,
                'texto' => '¿Cuál de las siguientes opciones representaría una respuesta razonable de Margarita al decidir si apoyar o no el proyecto de ley?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 48
            [
                'id_pregunta' => 96,
                'id_prueba' => 1,
                'id_contexto' => 24,
                'id_subhabilidad' => 10,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras, explica por qué seleccionaste esa opción como la respuesta razonable de Margarita al decidir si apoyar o no el proyecto de ley.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 49
            [
                'id_pregunta' => 97,
                'id_prueba' => 1,
                'id_contexto' => 25,
                'id_subhabilidad' => 11,
                'id_categoria' => 2,
                'texto' => '¿Cómo podrías describir de la mejor manera la situación en la que se encuentran tu compañero y tú y cuál sería la mejor acción que deberías emprender? ',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 50
            [
                'id_pregunta' => 98,
                'id_prueba' => 1,
                'id_contexto' => 25,
                'id_subhabilidad' => 11,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa como la que describe de la mejor manera la situación en la que se encuentran tu compañero y tú y la mejor acción que deberías emprender.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 51
            [
                'id_pregunta' => 99,
                'id_prueba' => 1,
                'id_contexto' => 26,
                'id_subhabilidad' => 11,
                'id_categoria' => 2,
                'texto' => 'Entre las siguientes alternativas de respuesta selecciona la que responde a la pregunta ¿Cómo podrías describir de la mejor manera la situación en la que se encuentran tu compañero y tú y cuál sería la mejor acción que deberías emprender?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 52
            [
                'id_pregunta' => 100,
                'id_prueba' => 1,
                'id_contexto' => 26,
                'id_subhabilidad' => 11,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa por ser la que mejor describe la situación en la que se encuentran tu compañero y tú y cuál sería la mejor acción que deberías emprender',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 53
            [
                'id_pregunta' => 101,
                'id_prueba' => 1,
                'id_contexto' => 27,
                'id_subhabilidad' => 12,
                'id_categoria' => 2,
                'texto' => 'Califica cada una de las siguientes soluciones por su calidad, utilizando una escala del 1 a 5 en donde:

                    1 = solución muy mala.
                    2 = solución mala.
                    3 = solución medianamente buena.
                    4 = solución muy buena.
                    5 = solución excelente.
                    ',
                'tipo_pregunta' => 'subpregunta'
            ],

            //Item 54
            [
                'id_pregunta' => 102,
                'id_prueba' => 1,
                'id_contexto' => 27,
                'id_subhabilidad' => 12,
                'id_categoria' => 2,
                'texto' => 'A partir del problema en el que te encuentras por haber perdido el manual con el cual realizarás la sustentación de manera detallada, en no más de 100 palabras redacta la mejor ruta de solución tomando como base por lo menos dos palabras de la siguiente lista (algunas palabras pueden cambiar en su forma gramatical): 

 
                    •	Mochila
                    •	Proceso
                    •	Profesor
                    •	Memoria
                    •	Recordar
                    •	Visualmente
                    •	Simplificar 
                    •	Colaborar 
                    •	Internet
                    •	Biblioteca
                    •	Diagramas
                    •	Tablero
                    •	Improvisación
                    •	Tiempo 
                    •	Foto
                    •	Llamada
                    •	Funcionalidad
                    •	Ejercicio
                    •	Ideas
                    •	Calma
                    •	Principal
                    •	Aprendizaje
                    ',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 55
            [
                'id_pregunta' => 103,
                'id_prueba' => 1,
                'id_contexto' => 28,
                'id_subhabilidad' => 12,
                'id_categoria' => 2,
                'texto' => '¿Cuál de las siguientes opciones sería la mejor manera de abordar la situación para proteger adecuadamente el hábitat de las aves y preservar el ecosistema?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 56
            [
                'id_pregunta' => 104,
                'id_prueba' => 1,
                'id_contexto' => 28,
                'id_subhabilidad' => 12,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabra explica por qué elegiste esa opción como la mejor manera de abordar la situación para proteger adecuadamente el hábitat de las aves y preservar el ecosistema. ',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 57.1
            [
                'id_pregunta' => 105,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: decorar la habitación con mensajes alusivos al triunfo. ',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 57.2
            [
                'id_pregunta' => 109,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Investigar los casos de éxito de algunas agrupaciones que atravesaron por situaciones similares y lograron triunfar.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 57.3
            [
                'id_pregunta' => 110,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Descartar la participación en el certamen de cualquiera que se queje de la situación.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 57.4
            [
                'id_pregunta' => 111,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Dialogar con el grupo, encontrar los motivos por los cuales pueden ganar, y las formas de contrarrestar el virus y el agotamiento.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 57.5
            [
                'id_pregunta' => 112,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Limitar las salidas en la noche y poner música relajante.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 57.6
            [
                'id_pregunta' => 113,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Solicitar todo tipo de medicamentos, inyecciones, remedios caseros y vitaminas que fortalezcan el sistema inmune.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 58
            [
                'id_pregunta' => 114,
                'id_prueba' => 1,
                'id_contexto' => 29,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras crea una alternativa de solución al problema al que se enfrenta el líder de compañeros de la banda sinfónica, distinta a las alternativas de solución que se presentaron en las anteriores dos columnas.  ',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 59.1
            [
                'id_pregunta' => 115,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Implementar clínicas móviles en comunidades rurales para ofrecer atención médica básica y emergencias.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 59.2
            [
                'id_pregunta' => 116,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Lanzar una campaña en redes sociales sobre la importancia de una vida saludable.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 59.3
            [
                'id_pregunta' => 117,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Proveer capacitación básica en primeros auxilios a voluntarios comunitarios.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 59.4
            [
                'id_pregunta' => 118,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Repartir folletos sobre higiene personal en mercados locales.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 59.5
            [
                'id_pregunta' => 119,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Proponer una reducción en el horario laboral de los trabajadores de la salud para evitar el agotamiento.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 59.6
            [
                'id_pregunta' => 120,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'Escoge la alternativa de solución que mejor se complementa para la alternativa: Construir un nuevo hospital en la periferia de la ciudad con una planificación deficiente de transporte.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 60
            [
                'id_pregunta' => 121,
                'id_prueba' => 1,
                'id_contexto' => 30,
                'id_subhabilidad' => 13,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras crea una alternativa de solución al problema del acceso al servicio de salud y la mala calidad del aire, distinta a las alternativas de solución que se presentaron en las anteriores dos columnas.',
                'tipo_pregunta' => 'abierta'
            ],

        ]);
    }
}
