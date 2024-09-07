<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubpreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subpreguntas')->insert([
            //Item 31
            [
                'id_subpregunta' => 1,
                'id_pregunta' => 79,
                'texto' => 'Existen muchas tribus urbanas en grandes y pequeñas ciudades.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 2,
                'id_pregunta' => 79,
                'texto' => 'La diversidad cultural en la urbe parece estar expresando un descontento y una forma de resistir a las imposiciones y estereotipos del capitalismo globalizante.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 3,
                'id_pregunta' => 79,
                'texto' => 'En las calles se encuentran tribus con algunas décadas de historia como los Hippies, Punks, Góticos y Raperos, y otras un poco más recientes como los Hipsters, Emos, Rastafaries, Frikis, Skaters, Muppies, Pokemones, Reggaetoneros y Grunges.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 4,
                'id_pregunta' => 79,
                'texto' => 'Cada cultura suburbana se caracteriza por un tipo de música y forma de vestir particular.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 5,
                'id_pregunta' => 79,
                'texto' => 'Por supuesto, puede haber otras formas de resistir a los estereotipos del capitalismo, o estas culturas pueden representar formas diversas de libertad de expresión.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            //Item 32
            [
                'id_subpregunta' => 6,
                'id_pregunta' => 80,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 1, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 7,
                'id_pregunta' => 80,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 2, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 8,
                'id_pregunta' => 80,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 3, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 9,
                'id_pregunta' => 80,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 4, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 10,
                'id_pregunta' => 80,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 5, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            //Item 33
            [
                'id_subpregunta' => 11,
                'id_pregunta' => 81,
                'texto' => 'Contar con aguas limpias contribuye a la producción de alimentos, a la subsistencia de las comunidades y a tener calidad de vida.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 12,
                'id_pregunta' => 81,
                'texto' => 'La extensión de los ríos, los niveles de contaminación, la disponibilidad de recursos y los tiempos son cuestiones que deben tenerse en la cuenta.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 13,
                'id_pregunta' => 81,
                'texto' => 'Yo apoyaría esta propuesta es una necesidad urgente para las personas y los ecosistemas.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 14,
                'id_pregunta' => 81,
                'texto' => 'No es una tarea fácil, se requieren muchos recursos, nuevas tecnologías e incluso tiempo para lograrlo, por lo que el periodo de mandato puede ser corto para lograrlo.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 15,
                'id_pregunta' => 81,
                'texto' => 'La descontaminación de ríos puede ser significativa y se puede garantizar la existencia de futuras generaciones.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 34
            [
                'id_subpregunta' => 16,
                'id_pregunta' => 82,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 1, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 17,
                'id_pregunta' => 82,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 2, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 18,
                'id_pregunta' => 82,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 3, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 19,
                'id_pregunta' => 82,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 4, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 20,
                'id_pregunta' => 82,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 5, en no más de 30 palabras explica por qué consideras que corresponde a una razón, una conclusión o un contrargumento. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],

            //Item 35
            [
                'id_subpregunta' => 21,
                'id_pregunta' => 83,
                'texto' => 'Las lideresas informaron a las comunidades sobre las estrategias y acciones que tomarían para atender la situación.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 22,
                'id_pregunta' => 83,
                'texto' => 'Es deber de las personas colaborar con los asuntos de su comunidad pues se trata del espacio en el que permanecen y se deben proporcionar las mejores condiciones de vida.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 23,
                'id_pregunta' => 83,
                'texto' => 'Es una buena idea porque las personas de las veredas pueden informar a la policía, evitar este tipo de sucesos y contribuir a mejorar la percepción de seguridad en la población. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 24,
                'id_pregunta' => 83,
                'texto' => 'Siempre habrá personas mal intencionadas u otras que se nieguen a colaborar con su comunidad.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],
            [
                'id_subpregunta' => 25,
                'id_pregunta' => 83,
                'texto' => 'Los reportes indican que se habían presentado alrededor de 20 casos de abuso en lo que iba corrido del año en la zona rural indicada.',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'cerrada'
            ],

            //Item 36
            [
                'id_subpregunta' => 26,
                'id_pregunta' => 84,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 1, del anterior ejercicio, en no más de 30 palabras explica por qué consideras que corresponde a una opinión, un hecho o un argumento razonado. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 27,
                'id_pregunta' => 84,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 2, del anterior ejercicio, en no más de 30 palabras explica por qué consideras que corresponde a una opinión, un hecho o un argumento razonado. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 28,
                'id_pregunta' => 84,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 3, del anterior ejercicio, en no más de 30 palabras explica por qué consideras que corresponde a una opinión, un hecho o un argumento razonado. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 29,
                'id_pregunta' => 84,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 4, del anterior ejercicio, en no más de 30 palabras explica por qué consideras que corresponde a una opinión, un hecho o un argumento razonado. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],
            [
                'id_subpregunta' => 30,
                'id_pregunta' => 84,
                'texto' => 'De acuerdo con la alternativa de respuesta que seleccionaste para el enunciado 5, del anterior ejercicio, en no más de 30 palabras explica por qué consideras que corresponde a una opinión, un hecho o un argumento razonado. ',
                'valor_opcion'=> null,
                'tipo_pregunta' => 'abierta'
            ],


        ]);
    }
}
