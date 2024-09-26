<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class DescriptivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('descriptivos')->insert([
            //descriptivos item_1
            [
                'id_descriptivo' => 1,
                'id_pregunta' => 12,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 2,
                'id_pregunta' => 12,
                'texto_descriptivo' => 'Reconoce afirmaciones apresuradas a partir de observaciones particulares conducentes a realizar generalizaciones que carecen de validez;',
                'calificacion' => 1
            ],
            //descriptivos item_2
            [
                'id_descriptivo' => 3,
                'id_pregunta' => 13,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 4,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 5,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'Y lo explica con cierta precisión ',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 6,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 7,
                'id_pregunta' => 13,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 4
            ],
            //descriptivos item_3
            [
                'id_descriptivo' => 8,
                'id_pregunta' => 14,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 9,
                'id_pregunta' => 14,
                'texto_descriptivo' => 'Identifica conclusiones válidas a partir de observaciones empíricas contrastándolas con sistemas de creencias o del conocimiento ',
                'calificacion' => 1
            ],

            //descriptivos item_4
            [
                'id_descriptivo' => 10,
                'id_pregunta' => 15,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 11,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],

            [
                'id_descriptivo' => 12,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'Y lo explica con cierta precisión ',
                'calificacion'  => 2 
            ],
            [
                'id_descriptivo' => 13,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'y las explica detalladamente.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 14,
                'id_pregunta' => 15,
                'texto_descriptivo' => 'y las explica detalladamente.',
                'calificacion' => 4
            ],
            //descriptivos item_5
            [
                'id_descriptivo' => 15,
                'id_pregunta' => 16,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 16,
                'id_pregunta' => 16,
                'texto_descriptivo' => 'Identifica fallos en las generalizaciones a partir de observaciones particulares',
                'calificacion' => 1
            ],

            //descriptivos item_6
            [
                'id_descriptivo' => 17,
                'id_pregunta' => 17,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 18,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 19,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'Y lo explica con cierta precisión ',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 20,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 21,
                'id_pregunta' => 17,
                'texto_descriptivo' => 'y las explica detalladamente',
                'calificacion' => 4
            ],

            //descriptivos item_7
            [
                'id_descriptivo' => 22,
                'id_pregunta' => 19,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 23,
                'id_pregunta' => 19,
                'texto_descriptivo' => ' Reconoce que la información dada no es exclusiva en la incidencia de determinados resultados y que existen otros factores que se ven involucrados distintos a los contenidos en la información dada;',
                'calificacion' => 1
            ],

            //descriptivos item_8
            [
                'id_descriptivo' => 24,
                'id_pregunta' => 20,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 25,
                'id_pregunta' => 20,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 26,
                'id_pregunta' => 20,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //descriptivos item_9
            [
                'id_descriptivo' => 27,
                'id_pregunta' => 24,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 28,
                'id_pregunta' => 24,
                'texto_descriptivo' => 'Reconoce generalizaciones apresuradas que carecen de validez ante la falta de comprobación de las premisas;',
                'calificacion' => 1
            ],

            //descriptivos item_10
            [
                'id_descriptivo' => 29,
                'id_pregunta' => 25,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 30,
                'id_pregunta' => 25,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 31,
                'id_pregunta' => 25,
                'texto_descriptivo' => 'y lo explica en detalle',
                'calificacion' => 2
            ],

            //Item 11
            [
                'id_descriptivo' => 32,
                'id_pregunta' => 29,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 33,
                'id_pregunta' => 29,
                'texto_descriptivo' => 'Entiende la diferencia entre correlación y causa y efecto;',
                'calificacion' => 1
            ],

            //Item 12
            [
                'id_descriptivo' => 34,
                'id_pregunta' => 30,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 35,
                'id_pregunta' => 30,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 36,
                'id_pregunta' => 30,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 13
            [
                'id_descriptivo' => 37,
                'id_pregunta' => 34,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 38,
                'id_pregunta' => 34,
                'texto_descriptivo' => 'comprende cuál es la información relevante que se requiere para comprobar afirmaciones respecto de fenómenos sociales específicos;',
                'calificacion' => 1
            ],

            //Item 14
            [
                'id_descriptivo' => 39,
                'id_pregunta' => 35,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 40,
                'id_pregunta' => 35,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 41,
                'id_pregunta' => 35,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 15
            [
                'id_descriptivo' => 42,
                'id_pregunta' => 39,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 43,
                'id_pregunta' => 39,
                'texto_descriptivo' => 'identifica la necesidad de contar con información objetiva y relevante distinta a la de opiniones infundadas, indispensable para comprobar la viabilidad de asuntos particulares;',
                'calificacion' => 1
            ],

            //Item 16
            [
                'id_descriptivo' => 44,
                'id_pregunta' => 40,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 45,
                'id_pregunta' => 40,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 46,
                'id_pregunta' => 40,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 17
            [
                'id_descriptivo' => 47,
                'id_pregunta' => 44,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 48,
                'id_pregunta' => 44,
                'texto_descriptivo' => 'Comprende la baja probabilidad de que ocurra un evento o desenlace a pesar de los sesgos de la información;',
                'calificacion' => 1
            ],

            //Item 18
            [
                'id_descriptivo' => 49,
                'id_pregunta' => 45,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 50,
                'id_pregunta' => 45,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 51,
                'id_pregunta' => 45,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 19
            [
                'id_descriptivo' => 52,
                'id_pregunta' => 49,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 53,
                'id_pregunta' => 49,
                'texto_descriptivo' => 'identifica defectos en predicciones y argumentaciones o conclusiones contenidas en información que aparece en internet;',
                'calificacion' => 1
            ],

            //Item 20
            [
                'id_descriptivo' => 54,
                'id_pregunta' => 50,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 55,
                'id_pregunta' => 50,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 56,
                'id_pregunta' => 50,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 21
            [
                'id_descriptivo' => 57,
                'id_pregunta' => 54,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 58,
                'id_pregunta' => 54,
                'texto_descriptivo' => 'identifica comparaciones inapropiadas que distorsionan la realidad o desdibujan acciones que pueden ser relevantes;',
                'calificacion' => 1
            ],

            //Item 22
            [
                'id_descriptivo' => 59,
                'id_pregunta' => 55,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 60,
                'id_pregunta' => 55,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 61,
                'id_pregunta' => 55,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 23
            [
                'id_descriptivo' => 62,
                'id_pregunta' => 59,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 63,
                'id_pregunta' => 59,
                'texto_descriptivo' => 'identifica la falta de validez lógica a partir de falsas analogías que demuestran razonamientos básicos o cuestionables por parte de un emisor;',
                'calificacion' => 1
            ],

            //Item 24
            [
                'id_descriptivo' => 64,
                'id_pregunta' => 60,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 65,
                'id_pregunta' => 60,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 66,
                'id_pregunta' => 60,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 25
            [
                'id_descriptivo' => 67,
                'id_pregunta' => 64,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 68,
                'id_pregunta' => 64,
                'texto_descriptivo' => 'identifica fallos de razonamiento en la aplicación de reglas generales mal elaboradas a situaciones específicas que no están bien reglamentadas;',
                'calificacion' => 1
            ],

            //Item 26
            [
                'id_descriptivo' => 69,
                'id_pregunta' => 65,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 70,
                'id_pregunta' => 65,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 71,
                'id_pregunta' => 65 ,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 27
            [
                'id_descriptivo' => 72,
                'id_pregunta' => 69,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 73,
                'id_pregunta' => 69,
                'texto_descriptivo' => 'identifica errores de comunicación por vacíos e imprecisiones del mensaje que generan confusión a la hora de emprender acciones urgentes;',
                'calificacion' => 1
            ],

            //Item 28
            [
                'id_descriptivo' => 74,
                'id_pregunta' => 70,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 75,
                'id_pregunta' => 70,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 76,
                'id_pregunta' => 70,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 29
            [
                'id_descriptivo' => 77,
                'id_pregunta' => 74,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 78,
                'id_pregunta' => 74,
                'texto_descriptivo' => 'identifica imprecisiones en las premisas que dan aparente sustento a la conclusión más allá de lo absurda que pueda parecer la información, omitiendo opiniones para centrarse en lo irracional del mensaje;',
                'calificacion' => 1
            ],

            //Item 30
            [
                'id_descriptivo' => 79,
                'id_pregunta' => 75,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 80,
                'id_pregunta' => 75,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 81,
                'id_pregunta' => 75,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 31
            [
                'id_descriptivo' => 82,
                'id_pregunta' => 79,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 83,
                'id_pregunta' => 79,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 84,
                'id_pregunta' => 79,
                'texto_descriptivo' => 'identifica algunos componentes de la estructura de un enunciado argumentativo;',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 85,
                'id_pregunta' => 79,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 86,
                'id_pregunta' => 79,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 87,
                'id_pregunta' => 79,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 5
            ],

            //Item 32
            [
                'id_descriptivo' => 88,
                'id_pregunta' => 80,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 89,
                'id_pregunta' => 80,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 90,
                'id_pregunta' => 80,
                'texto_descriptivo' => 'Y los define parcialmente.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 91,
                'id_pregunta' => 80,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 92,
                'id_pregunta' => 80,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 93,
                'id_pregunta' => 80,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 5
            ],

            //Item 33
            [
                'id_descriptivo' => 94,
                'id_pregunta' => 81,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 95,
                'id_pregunta' => 81,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 96,
                'id_pregunta' => 81,
                'texto_descriptivo' => 'identifica algunos componentes de la estructura de un enunciado argumentativo;',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 97,
                'id_pregunta' => 81,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 98,
                'id_pregunta' => 81,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 99,
                'id_pregunta' => 81,
                'texto_descriptivo' => 'identifica los elementos principales de un enunciado argumentativo;',
                'calificacion' => 5
            ],

            //Item 34
            [
                'id_descriptivo' => 100,
                'id_pregunta' => 82,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 101,
                'id_pregunta' => 82,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 102,
                'id_pregunta' => 82,
                'texto_descriptivo' => 'Y los define parcialmente.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 103,
                'id_pregunta' => 82,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 104,
                'id_pregunta' => 82,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 105,
                'id_pregunta' => 82,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 5
            ],

            //Item 35
            [
                'id_descriptivo' => 106,
                'id_pregunta' => 83,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 107,
                'id_pregunta' => 83,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 108,
                'id_pregunta' => 83,
                'texto_descriptivo' => 'reconoce algunos enunciados que no son argumentos bien razonados y aquellos que sí lo son;',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 109,
                'id_pregunta' => 83,
                'texto_descriptivo' => 'reconoce los enunciados que no son argumentos bien razonados y aquellos que sí lo son;',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 110,
                'id_pregunta' => 83,
                'texto_descriptivo' => 'reconoce los enunciados que no son argumentos bien razonados y aquellos que sí lo son;',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 111,
                'id_pregunta' => 83,
                'texto_descriptivo' => 'reconoce los enunciados que no son argumentos bien razonados y aquellos que sí lo son;',
                'calificacion' => 5
            ],

            //Item 36
            [
                'id_descriptivo' => 112,
                'id_pregunta' => 84,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 113,
                'id_pregunta' => 84,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 114,
                'id_pregunta' => 84,
                'texto_descriptivo' => 'Y los define parcialmente.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 115,
                'id_pregunta' => 84,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 116,
                'id_pregunta' => 84,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 117,
                'id_pregunta' => 84,
                'texto_descriptivo' => 'y los define en detalle.',
                'calificacion' => 5
            ],

            //Item 37
            [
                'id_descriptivo' => 118,
                'id_pregunta' => 85,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 119,
                'id_pregunta' => 85,
                'texto_descriptivo' => 'reconoce la afirmación implícita carente de evidencia con la que se tiende a dar por hecho cierta información de un texto, y emplea otros elementos que la ponen en cuestión;',
                'calificacion' => 1
            ],

            //Item 38
            [
                'id_descriptivo' => 120,
                'id_pregunta' => 86,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 121,
                'id_pregunta' => 86,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 122,
                'id_pregunta' => 86,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 39
            [
                'id_descriptivo' => 123,
                'id_pregunta' => 87,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 124,
                'id_pregunta' => 87,
                'texto_descriptivo' => 'identifica  suposiciones apresuradas que se cometen al tomar como base determinada información que No ha sido valorada, detallada, examinada o comprobada de manera empírica; ',
                'calificacion' => 1
            ],

            //Item 40
            [
                'id_descriptivo' => 125,
                'id_pregunta' => 88,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 126,
                'id_pregunta' => 88,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 127,
                'id_pregunta' => 88,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 41
            [
                'id_descriptivo' => 128,
                'id_pregunta' => 89,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 129,
                'id_pregunta' => 89,
                'texto_descriptivo' => 'Reconoce que existen situaciones o circunstancias en las que las cosas no tienen que ser siempre o con todo de la misma manera o bajo la misma lógica, independizando una cosa de la otra y estableciendo límites;',
                'calificacion' => 1
            ],

            //Item 42
            [
                'id_descriptivo' => 130,
                'id_pregunta' => 90,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 131,
                'id_pregunta' => 90,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 132,
                'id_pregunta' => 90,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 43
            [
                'id_descriptivo' => 133,
                'id_pregunta' => 91,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 134,
                'id_pregunta' => 91,
                'texto_descriptivo' => 'reconoce que existen situaciones o circunstancias en las que las cosas no tienen que ser siempre o con todo de la misma manera o bajo la misma lógica, independizando una cosa de la otra y estableciendo límites;',
                'calificacion' => 1
            ],

            //Item 44
            [
                'id_descriptivo' => 135,
                'id_pregunta' => 92,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 136,
                'id_pregunta' => 92,
                'texto_descriptivo' => 'y lo explica parcialmente ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 137,
                'id_pregunta' => 92,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

             //Item 45
             [
                'id_descriptivo' => 138,
                'id_pregunta' => 93,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 139,
                'id_pregunta' => 93,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 140,
                'id_pregunta' => 93,
                'texto_descriptivo' => 'Reconoce de manera sucinta el nivel de importancia de distintos tipos de información requerida para tomar una decisión importante; ',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 141,
                'id_pregunta' => 93,
                'texto_descriptivo' => 'Reconoce el nivel de importancia de distintos tipos de información requerida para tomar una decisión importante; ',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 142,
                'id_pregunta' => 93,
                'texto_descriptivo' => 'Reconoce el nivel de importancia de distintos tipos de información requerida para tomar una decisión importante; ',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 143,
                'id_pregunta' => 93,
                'texto_descriptivo' => 'Reconoce el nivel de importancia de distintos tipos de información requerida para tomar una decisión importante;    ',
                'calificacion' => 5
            ],

            //Item 46
            [
                'id_descriptivo' => 144,
                'id_pregunta' => 94,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 145,
                'id_pregunta' => 94,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 146,
                'id_pregunta' => 94,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 47
            [
                'id_descriptivo' => 147,
                'id_pregunta' => 95,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 148,
                'id_pregunta' => 95,
                'texto_descriptivo' => 'identifica imprecisiones en las premisas que dan aparente sustento a la conclusión más allá de lo absurda que pueda parecer la información, omitiendo opiniones para centrarse en lo irracional del mensaje;',
                'calificacion' => 1
            ],

            //Item 48
            [
                'id_descriptivo' => 149,
                'id_pregunta' => 96,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 150,
                'id_pregunta' => 96,
                'texto_descriptivo' => 'y lo explica parcialmente  ',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 151,
                'id_pregunta' => 96,
                'texto_descriptivo' => 'y lo explica en detalle ',
                'calificacion' => 2
            ],

            //Item 49
            [
                'id_descriptivo' => 152,
                'id_pregunta' => 97,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 153,
                'id_pregunta' => 97,
                'texto_descriptivo' => 'comprende el carácter problémico de una situación en específico, circunstancia o dificultad que le rodea o en que se involucra, optando por elegir acciones apropiadas; ',
                'calificacion' => 1
            ],

             //Item 50
             [
                'id_descriptivo' => 154,
                'id_pregunta' => 98,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 155,
                'id_pregunta' => 98,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 156,
                'id_pregunta' => 98,
                'texto_descriptivo' => 'y lo explica parcialmente  ',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 157,
                'id_pregunta' => 98,
                'texto_descriptivo' => 'y lo explica con precisión',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 158,
                'id_pregunta' => 98,
                'texto_descriptivo' => 'y lo explica con precisión',
                'calificacion' => 4
            ],

            //Item 51
            [
                'id_descriptivo' => 159,
                'id_pregunta' => 99,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 160,
                'id_pregunta' => 99,
                'texto_descriptivo' => 'comprende el carácter problémico de una situación en específico, circunstancia o dificultad que le rodea o en que se involucra, optando por elegir acciones apropiadas. ',
                'calificacion' => 1
            ],

             //Item 52
             [
                'id_descriptivo' => 161,
                'id_pregunta' => 100,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 162,
                'id_pregunta' => 100,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 163,
                'id_pregunta' => 100,
                'texto_descriptivo' => 'y lo explica parcialmente  ',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 164,
                'id_pregunta' => 100,
                'texto_descriptivo' => 'y lo explica con precisión',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 165,
                'id_pregunta' => 100,
                'texto_descriptivo' => 'y lo explica con precisión',
                'calificacion' => 4
            ],

            //Item 53
            [
                'id_descriptivo' => 166,
                'id_pregunta' => 101,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 167,
                'id_pregunta' => 101,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 168,
                'id_pregunta' => 101,
                'texto_descriptivo' => '',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 169,
                'id_pregunta' => 101,
                'texto_descriptivo' => 'evalúa sucintamente las posibles soluciones de un problema;.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 170,
                'id_pregunta' => 101,
                'texto_descriptivo' => 'evalúa adecuadamente las posibles soluciones de un problema; ',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 171,
                'id_pregunta' => 101,
                'texto_descriptivo' => 'evalúa adecuadamente las posibles soluciones de un problema; ',
                'calificacion' => 5
            ],

            //Item 54
            [
                'id_descriptivo' => 172,
                'id_pregunta' => 102,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 173,
                'id_pregunta' => 102,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 174,
                'id_pregunta' => 102,
                'texto_descriptivo' => '',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 175,
                'id_pregunta' => 102,
                'texto_descriptivo' => 'y define parcialmente el espacio del problema a partir de ideas o palabras que le ofrecen distintas posibilidades de crear su propia ruta de soluciones. ',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 176,
                'id_pregunta' => 102,
                'texto_descriptivo' => 'y define con precisión el espacio del problema a partir de ideas o palabras que le ofrecen distintas posibilidades de crear su propia ruta de soluciones',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 177,
                'id_pregunta' => 102,
                'texto_descriptivo' => 'y define con precisión el espacio del problema a partir de ideas o palabras que le ofrecen distintas posibilidades de crear su propia ruta de soluciones',
                'calificacion' => 5
            ],

            //Item 55
            [
                'id_descriptivo' => 178,
                'id_pregunta' => 103,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 179,
                'id_pregunta' => 103,
                'texto_descriptivo' => 'elige una ruta de soluciones adecuada ',
                'calificacion' => 1
            ],

             //Item 56
             [
                'id_descriptivo' => 180,
                'id_pregunta' => 104,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 181,
                'id_pregunta' => 104,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 182,
                'id_pregunta' => 104,
                'texto_descriptivo' => 'Y evalúa parcialmente las acciones que allí se emprenderán en aras de resolver el problema.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 183,
                'id_pregunta' => 104,
                'texto_descriptivo' => 'Y evalúa adecuadamente las acciones que allí se emprenderán en aras de resolver el problema',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 184,
                'id_pregunta' => 104,
                'texto_descriptivo' => 'Y evalúa adecuadamente las acciones que allí se emprenderán en aras de resolver el problema',
                'calificacion' => 4
            ],

            //Item 57
            [
                'id_descriptivo' => 185,
                'id_pregunta' => 105,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 186,
                'id_pregunta' => 105,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 187,
                'id_pregunta' => 105,
                'texto_descriptivo' => '',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 188,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 189,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 190,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 5
            ],
            [
                'id_descriptivo' => 191,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora debidamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 6
            ],
            [
                'id_descriptivo' => 192,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora debidamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 7
            ],
            [
                'id_descriptivo' => 193,
                'id_pregunta' => 105,
                'texto_descriptivo' => '',
                'calificacion' => 8
            ],
            [
                'id_descriptivo' => 194,
                'id_pregunta' => 105,
                'texto_descriptivo' => '',
                'calificacion' => 9
            ],
            [
                'id_descriptivo' => 195,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 10
            ],
            [
                'id_descriptivo' => 196,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 11
            ],
            [
                'id_descriptivo' => 197,
                'id_pregunta' => 105,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 12
            ],

             //Item 58
             [
                'id_descriptivo' => 198,
                'id_pregunta' => 114,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 199,
                'id_pregunta' => 114,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 200,
                'id_pregunta' => 114,
                'texto_descriptivo' => 'Amplia sucintamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 201,
                'id_pregunta' => 114,
                'texto_descriptivo' => 'Amplia adecuadamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 202,
                'id_pregunta' => 114,
                'texto_descriptivo' => 'Amplia adecuadamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 4
            ],

            //Item 59
            [
                'id_descriptivo' => 203,
                'id_pregunta' => 115,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 204,
                'id_pregunta' => 115,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 205,
                'id_pregunta' => 115,
                'texto_descriptivo' => '',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 206,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejorara sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 207,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejorara sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 4
            ],
            [
                'id_descriptivo' => 208,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejorara sucintamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 5
            ],
            [
                'id_descriptivo' => 209,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejorara debidamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 6
            ],
            [
                'id_descriptivo' => 210,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejorara debidamente las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 7
            ],
            [
                'id_descriptivo' => 211,
                'id_pregunta' => 115,
                'texto_descriptivo' => '',
                'calificacion' => 8
            ],
            [
                'id_descriptivo' => 212,
                'id_pregunta' => 115,
                'texto_descriptivo' => '',
                'calificacion' => 9
            ],
            [
                'id_descriptivo' => 213,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 10
            ],
            [
                'id_descriptivo' => 214,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 11
            ],
            [
                'id_descriptivo' => 215,
                'id_pregunta' => 115,
                'texto_descriptivo' => 'mejora de manera creativa las alternativas de solución disponibles complementándolas con otras soluciones, en aras de resolver problemas simultáneos',
                'calificacion' => 12
            ],

             //Item 58
             [
                'id_descriptivo' => 216,
                'id_pregunta' => 121,
                'texto_descriptivo' => '',
                'calificacion' => 0
            ],
            [
                'id_descriptivo' => 217,
                'id_pregunta' => 121,
                'texto_descriptivo' => '',
                'calificacion' => 1
            ],
            [
                'id_descriptivo' => 218,
                'id_pregunta' => 121,
                'texto_descriptivo' => 'Amplia sucintamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 2
            ],
            [
                'id_descriptivo' => 219,
                'id_pregunta' => 121,
                'texto_descriptivo' => 'Amplia adecuadamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 3
            ],
            [
                'id_descriptivo' => 220,
                'id_pregunta' => 121,
                'texto_descriptivo' => 'Amplia adecuadamente el espacio del problema acrecentando el número de alternativas posibles para los problemas planteados.',
                'calificacion' => 4
            ],
            


        ]);
    }
}
