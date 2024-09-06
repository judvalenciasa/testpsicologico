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
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
                'tipo_pregunta' => 'abierta'
            ],

            //Item 3
            [
                'id_pregunta' => 14,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'Basándote en la veracidad de los postulados a partir de la observación y experiencia, y no desde la ciencia o la teoría, cuál de las siguientes alternativas contiene dos premisas válidas para convencerte de que el planeta Tierra es una circunferencia.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 4 _ Abierta
            [
                'id_pregunta' => 15,
                'id_prueba' => 1,
                'id_contexto' => 2,
                'id_subhabilidad' => 1,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'Cuál de las siguientes opciones representa la respuesta que darías a la empresa:',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 8
            [
                'id_pregunta' => 20,
                'id_prueba' => 1,
                'id_contexto' => 4,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => '¿Cuál crees que sería la respuesta más razonable que debe darle el jefe al experto delegado?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 10
            [
                'id_pregunta' => 25,
                'id_prueba' => 1,
                'id_contexto' => 5,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'A partir de la anterior información, a través de cuál de los siguientes postulados darías tu opinión al padre de familia respecto de su convencimiento acerca de la causa de su depresión y la medida que ha tomado.',
                'tipo_pregunta' => 'cerrada'
            ],
            //Item 12
            [
                'id_pregunta' => 30,
                'id_prueba' => 1,
                'id_contexto' => 6,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'Si se aproxima el día en que los ciudadanos participan con el voto a favor o en contra de los cambios en la Ley, cuál de la siguiente información acerca de los estudios realizados por la institución y el rol de las acciones del Consejo Nacional de Música necesitarías para apoyar tu decisión y ejercer el derecho al voto.',
                'tipo_pregunta' => 'cerrada'
            ],
            //Item 14
            [
                'id_pregunta' => 35,
                'id_prueba' => 1,
                'id_contexto' => 7,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => '¿Cuál de la siguiente información suministrada por los representantes del programa universitario sería de mayor utilidad para decidir qué programa recomendar a tu amiga?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 16
            [
                'id_pregunta' => 40,
                'id_prueba' => 1,
                'id_contexto' => 8,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'Teniendo en cuenta sólo esta información sobre Jesús David ¿Cuál es la probabilidad de que Jesús David se convierta en un astronauta de la NASA?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 18
            [
                'id_pregunta' => 45,
                'id_prueba' => 1,
                'id_contexto' => 9,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => '¿Cuáles de los siguientes son los dos posibles defectos de predicción?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 20
            [
                'id_pregunta' => 50,
                'id_prueba' => 1,
                'id_contexto' => 10,
                'id_subhabilidad' => 2,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,  //preguntar porque no dice en el documento
                'id_categoria' => 2,
                'texto' => '¿Cuál de las siguientes es la mejor crítica al mensaje del rector?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 22
            [
                'id_pregunta' => 55,
                'id_prueba' => 1,
                'id_contexto' => 11,
                'id_subhabilidad' => 3,  //preguntar porque no dice en el documento
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'Seleccionando una de las siguientes alternativas califica el razonamiento del gobernador sobre este tema utilizando una escala de 7 puntos.',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 24
            [
                'id_pregunta' => 60,
                'id_prueba' => 1,
                'id_contexto' => 12,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'De los siguientes enunciados ¿Cuál propuesta respaldarías?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 26
            [
                'id_pregunta' => 65,
                'id_prueba' => 1,
                'id_contexto' => 13,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => '¿Cómo crees que desde la Unidad de Gestión del Riesgo se puedan resolver las inquietudes de las personas para que tengan mayor claridad al respecto, y así poder actuar con prontitud?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 28
            [
                'id_pregunta' => 70,
                'id_prueba' => 1,
                'id_contexto' => 14,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => '¿Más allá de las opiniones, por qué crees que la decisión del gobierno es irracional?',
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 30
            [
                'id_pregunta' => 75,
                'id_prueba' => 1,
                'id_contexto' => 15,
                'id_subhabilidad' => 3,
                'id_categoria' => 2,
                'texto' => 'En no más de 100 palabras explica por qué seleccionaste esa alternativa.',
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

        ]);
    }
}
