<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opciones')->insert([

            //Item 1
            [
                'id_opcion' => 1,
                'id_pregunta' => 12,
                'texto' => 'a) Más mujeres participando en el evento que en todos los torneos anuales en los que ha estado.',
                'valor_opcion' => 0
            ],

            [
                'id_opcion' => 2,
                'id_pregunta' => 12,
                'texto' => 'b) Salones amplios, sonido envolvente y personalizado, pantallas que pueden ecualizarse, resolución 3D, sillas con todas las comodidades y opciones de adaptación al tamaño del participante.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 3,
                'id_pregunta' => 12,
                'texto' => 'c) Problemas de logística para determinar si hubo ventajas o desventajas en las competencias y por tanto en las premiaciones.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 4,
                'id_pregunta' => 12,
                'texto' => 'd) Un equipo grande del gobierno local grabando el escenario y publicando en todos los medios sus aportes para luego obtener votaciones en las próximas elecciones. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 5,
                'id_pregunta' => 12,
                'texto' => 'e) Un espacio como el que normalmente se utiliza con equipos que podrían ser como los habituales o tal vez mucho mejor de los que se utilizan con normalidad.',
                'valor_opcion' => 1
            ],

            //Item 2 - abierta
            [
                'id_opcion' => 6,
                'id_pregunta' => 13,
                'texto' => 'abierta',
                'valor_opcion' => null
            ],

            //Item 3
            [
                'id_opcion' => 7,
                'id_pregunta' => 14,
                'texto' => 'a) En cartografía siempre se nos ha mostrado a través de los mapamundis que el Planeta Tierra es una esfera, eso indica que la representación gráfica es infalible. Distintos textos sagrados de algunas de las religiones del mundo han determinado históricamente que la Tierra es redonda.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 8,
                'id_pregunta' => 14,
                'texto' => 'b) Si la tierra fuera plana, cómo se explica que el agua de los mares no se derrama en algún punto, bien sea en el Norte, Sur, Oeste o Este. Los miles de satélites que actualmente orbitan alrededor del planeta han tomado imágenes en las que se observa que el planeta Tierra es redondo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 9,
                'id_pregunta' => 14,
                'texto' => 'c) Por más que se quisiera la luz del sol no puede reflejar la misma sombra al mismo tiempo sobre distintos objetos distribuidos a distancias significativas en el espacio terrestre. La rotación es otra evidencia que no deja dudas respecto de la circunferencia del Planeta Tierra.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 10,
                'id_pregunta' => 14,
                'texto' => 'd) Los pilotos de aerolíneas comerciales afirman que los aviones no viajan en línea recta en aquellos vuelos de largas horas. Además, la Física nos dice que si el Planeta tierra fuera plano la gravedad funcionaría con atracciones desordenadas y no de manera uniforme hacia el centro de la masa. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 11,
                'id_pregunta' => 14,
                'texto' => 'e) Si nos ubicamos en un lugar alto visualizamos nuestro alrededor, pero en cierto punto la vista se pierde en el firmamento y ni con un telescopio potente observaríamos ciudades de otros continentes debido a la curvatura del Plantea. La hora en la que sale y se pone el sol es distinta en cada lugar del mundo. ',
                'valor_opcion' => 1
            ],

            //Item 4
            [
                'id_opcion' => 12,
                'id_pregunta' => 15,
                'texto' => 'abierta',
                'valor_opcion' => null
            ],

            //Item 5
            [
                'id_opcion' => 13,
                'id_pregunta' => 16,
                'texto' => 'a) Mariana se apresuró en las generalizaciones, de modo que concluye de manera general sin tener en la cuenta que no en todas las culturas y países del continente se aprueba el matrimonio infantil ni se quebrantan las leyes.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 14,
                'id_pregunta' => 16,
                'texto' => 'b) Mariana no explicó nada acerca de la vestimenta, los sistemas políticos, la gastronomía (tipo de comida) o la música del continente asiático, y esos son aspectos importantes de la cultura.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 15,
                'id_pregunta' => 16,
                'texto' => 'c) Mariana se dedicó a leer las diapositivas y en una exposición no se deben leer las diapositivas al pie de la letra, sino explicarlas para dar a conocer la comprensión que se tiene del tema. ',
                'valor_opcion' => 0
            ],
            [

                'id_opcion' => 16,
                'id_pregunta' => 16,
                'texto' => 'd) No es cierto que en esos países sea común el matrimonio infantil debido a factores socioeconómicos, sino que se debe a cuestiones culturales o al sistema de creencias y para ellos es normal que esto suceda.',
                'valor_opcion' => 0
            ],
            [

                'id_opcion' => 17,
                'id_pregunta' => 16,
                'texto' => 'e) Estas no son las principales características culturales de Asia que debió exponer Mariana, debió hablar de la diversidad de lenguas y religiones como el budismo, hinduismo, islamismo, confucianismo y taoísmo, también de la arquitectura.',
                'valor_opcion' => 0
            ],

            /* //Item 1_Metacognición
            [
                'id_opcion' => 18,
                'id_pregunta' => 17,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 19,
                'id_pregunta' => 17,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 20,
                'id_pregunta' => 17,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 21,
                'id_pregunta' => 17,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 22,
                'id_pregunta' => 17,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 7
            [
                'id_opcion' => 23,
                'id_pregunta' => 19,
                'texto' => 'a) No. Importar almidones de yuca o maíz para la fabricación de empaques plásticos biodegradables no es tan buen negocio teniendo en cuenta que esos productos se cosechan en abundancia en nuestro país.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 24,
                'id_pregunta' => 19,
                'texto' => 'b) No. Diversificar los empaques plásticos biodegradables y ofrecerlos a
                excelentes precios en poco tiempo es algo que puede lograr la empresa,
                aunque no depende únicamente de las importaciones o la producción local de
                la materia prima.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 25,
                'id_pregunta' => 19,
                'texto' => 'c) Sí. Los procesos fisicoquímicos a los que se somete el maíz en países asiáticos
                garantizan calidad y reducción de costos, de manera que si se importan la
                empresa ofrecerá productos a excelentes precios.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 26,
                'id_pregunta' => 19,
                'texto' => 'd) No. Con la situación actual de la economía es difícil ofrecer empaques plásticos a excelentes precios, debido a que los precios del mercado no son estables y posiblemente se llegue a producir pérdidas en insumos demasiado costosos.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 27,
                'id_pregunta' => 19,
                'texto' => 'e) Sí. Al producir el almidón de yuca en la empresa e importar el almidón del
                maíz se garantiza un equilibrio en los costos de producción, por tanto, se
                diversifican los productos y se fabrican en poco tiempo.',
                'valor_opcion' => 0
            ],
            /*  //Item 1_Metacognición
            [
                'id_opcion' => 28,
                'id_pregunta' => 17,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 29,
                'id_pregunta' => 17,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 30,
                'id_pregunta' => 17,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 31,
                'id_pregunta' => 17,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 32,
                'id_pregunta' => 17,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Contexto4_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 33,
                'id_pregunta' => 21,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 34,
                'id_pregunta' => 21,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 35,
                'id_pregunta' => 21,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 36,
                'id_pregunta' => 21,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 37,
                'id_pregunta' => 21,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 38,
                'id_pregunta' => 22,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 39,
                'id_pregunta' => 22,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 40,
                'id_pregunta' => 22,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 41,
                'id_pregunta' => 22,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 42,
                'id_pregunta' => 22,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 43,
                'id_pregunta' => 23,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 44,
                'id_pregunta' => 23,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 45,
                'id_pregunta' => 23,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 46,
                'id_pregunta' => 23,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 47,
                'id_pregunta' => 23,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 9
            [
                'id_opcion' => 48,
                'id_pregunta' => 24,
                'texto' => ' a) Que la experiencia no se improvisa y que tal como había previsto en conversaciones anteriores a la visita de los colegios, los jóvenes no emiten tanto CO₂ al año como lo hacen los adultos, incluso si los adolescentes se encuentran en el colegio y los adultos laborando.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 49,
                'id_pregunta' => 24,
                'texto' => 'b) Que por más que piense o intuya los resultados de los promedios del próximo colegio, las ordenes son claras y deben cumplirse, especialmente si se trata de un experto que trabaja para un organismo multilateral que viene desarrollando estudios de altas responsabilidades.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 50,
                'id_pregunta' => 24,
                'texto' => 'c) Que no importa si no realiza el promedio en el siguiente colegio, es más importante ser eficientes, ahorrar gastos de viáticos, no caer en sobrecostos y continuar contaminando con sus desplazamientos cuando se sabe cuál es la tendencia de emisiones de CO₂ de los adolescentes.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 51,
                'id_pregunta' => 24,
                'texto' => 'd) Que debe visitar el próximo colegio y promediar la huella de carbono de los adolescentes, puesto que, aunque las probabilidades de no superar la emisión de 1 tonelada de CO₂ al año sean altas para ese colegio, nadie puede asegurar que así sea sin antes verificarlo.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 52,
                'id_pregunta' => 24,
                'texto' => 'e) Que realice nuevamente los promedios anteriores, pues no es posible que en una ciudad en donde existen tantos desplazamientos al día en vehículos propulsados por motores de combustibles fósiles los adolescentes no superen 1 tonelada de CO₂ emitida al año.',
                'valor_opcion' => 0
            ],
            //Contexto5_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 53,
                'id_pregunta' => 26,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 54,
                'id_pregunta' => 26,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 55,
                'id_pregunta' => 26,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 56,
                'id_pregunta' => 26,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 57,
                'id_pregunta' => 26,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 58,
                'id_pregunta' => 27,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 59,
                'id_pregunta' => 27,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 60,
                'id_pregunta' => 27,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 61,
                'id_pregunta' => 27,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 62,
                'id_pregunta' => 27,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 63,
                'id_pregunta' => 28,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 64,
                'id_pregunta' => 28,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 65,
                'id_pregunta' => 28,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 66,
                'id_pregunta' => 28,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 67,
                'id_pregunta' => 28,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 11
            [
                'id_opcion' => 68,
                'id_pregunta' => 29,
                'texto' => 'a) Si fuera el papá de la chica también prohibiría el uso en casa de Instagram y Facebook, porque la investigación encontraba que cuando se incrementa el uso de estas redes sociales la depresión aumenta, lo cual resulta preocupante para un padre de familia.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 69,
                'id_pregunta' => 29,
                'texto' => 'b) Lo más seguro es que la hija se aliviará al evitar que use Instagram y Facebook, y en ese sentido no puede ser que si el papá incrementa los permisos para el uso de esas redes sociales en casa la depresión de su hija disminuya, sino todo lo contrario.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 70,
                'id_pregunta' => 29,
                'texto' => 'c) Es posible que la depresión de la hija adolescente no disminuya si se prohíbe que use esas redes sociales, porque sólo conocemos que usar frecuentemente Instagram y Facebook y la depresión están relacionados, pero no si usar estas redes sociales es la causa como tal de la depresión.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 71,
                'id_pregunta' => 29,
                'texto' => 'd) Probablemente, el evitar que los adolescentes usen Instagram y Facebook no influya en el aumento de la depresión, porque el estudio fue realizado por padres y profesores, de manera que es probable que estén en contra de que los adolescentes usen esas redes sociales.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 72,
                'id_pregunta' => 29,
                'texto' => 'e) Un uso prudente de las redes sociales puede ayudar a que la hija se recupere de la depresión, es cuestión de contenido y frecuencia en que se usan. Entonces, el padre puede regular o sugerir los contenidos que su hija puede o debe ver en esas redes sociales.',
                'valor_opcion' => 0
            ],
            //Contexto6_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 73,
                'id_pregunta' => 31,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 74,
                'id_pregunta' => 31,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 75,
                'id_pregunta' => 31,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 76,
                'id_pregunta' => 31,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 77,
                'id_pregunta' => 31,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 78,
                'id_pregunta' => 32,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 79,
                'id_pregunta' => 32,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 80,
                'id_pregunta' => 32,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 81,
                'id_pregunta' => 32,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 82,
                'id_pregunta' => 32,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 83,
                'id_pregunta' => 33,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 84,
                'id_pregunta' => 33,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 85,
                'id_pregunta' => 33,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 86,
                'id_pregunta' => 33,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 87,
                'id_pregunta' => 33,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */
            //Item 13
            [
                'id_opcion' => 88,
                'id_pregunta' => 34,
                'texto' => 'a) El porcentaje de jóvenes que escuchan esta música y declaran que consumen drogas, son violentos o llevan una vida sexual irresponsable; y, el porcentaje de adolescentes que escuchan esta música y no se declaran violentos, no consumen drogas o no llevan una vida sexual irresponsable.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 89,
                'id_pregunta' => 34,
                'texto' => 'b) Necesitaría saber si alguno de los miembros del Consejo Nacional de Música conoce las implicaciones de esta música en el comportamiento de los jóvenes, es decir, sin inciden en las conductas de los jóvenes en cuanto a la violencia o el sexo; y si es probable que esas decisiones afecten la libertad de expresión. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 90,
                'id_pregunta' => 34,
                'texto' => 'c) Si los miembros del Consejo Nacional de Música son designados o nombrados por personas que ostentan cargos políticos en el territorio nacional o si tienen familiares que produzcan este tipo de música; y, cuál es la opinión de los padres de familia sobre la situación en cuestión.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 91,
                'id_pregunta' => 34,
                'texto' => 'd) Si los jóvenes que escuchan esta música son delincuentes en potencia, es decir, que tengan antecedentes penales o estén propensos a cometer delitos; y, si el Consejo Nacional de Música está conformado por personas que tengan determinadas inclinaciones ideológicas históricas como las de los liberales o conservadores.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 92,
                'id_pregunta' => 34,
                'texto' => 'e) Sería importante conocer la cantidad de empleos directos e indirectos que se verían afectados con ese tipo de sanciones, como, por ejemplo, las labores que desempeñan los ingenieros de sonido y las personas que realizan montajes para conciertos; y, si se trata de la música de mi gusto o del gusto de mis amigos.',
                'valor_opcion' => 0
            ],
            //Contexto7_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 93,
                'id_pregunta' => 36,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 94,
                'id_pregunta' => 36,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 95,
                'id_pregunta' => 36,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 96,
                'id_pregunta' => 36,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 97,
                'id_pregunta' => 36,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 98,
                'id_pregunta' => 37,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 99,
                'id_pregunta' => 37,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 100,
                'id_pregunta' => 37,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 101,
                'id_pregunta' => 32,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 102,
                'id_pregunta' => 37,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 103,
                'id_pregunta' => 38,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 104,
                'id_pregunta' => 38,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 105,
                'id_pregunta' => 38,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 106,
                'id_pregunta' => 38,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 107,
                'id_pregunta' => 38,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */
            //Item 15
            [
                'id_opcion' => 108,
                'id_pregunta' => 39,
                'texto' => 'a) Qué tipo de capacitación o actualización de conocimientos recibe el personal docente de su universidad y, si anuncian su programa universitario en los medios locales de comunicación.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 109,
                'id_pregunta' => 39,
                'texto' => 'b) El porcentaje, cantidad o estadística de egresados que logra emplearse al terminar la carrera universitaria y, si pueden probar que los profesionales que egresan de esta carrera son altamente requeridos en el mercado laboral.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 110,
                'id_pregunta' => 39,
                'texto' => 'c) Si el programa universitario está respaldado por un personaje público de la ciudad o del país y, si el programa universitario goza de reconocimiento a nivel nacional e internacional en cuanto a la calidad de su propuesta académica.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 111,
                'id_pregunta' => 39,
                'texto' => 'd) Cuántos estudiantes abandonan el programa universitario antes de completarlo y, si los estudiantes que se gradúan tienen la posibilidad de potencializar sus capacidades en las empresas en las que ingresan a trabajar.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 112,
                'id_pregunta' => 39,
                'texto' => 'e) Si las empresas a las que ingresan a trabajar los egresados tienen programas de becas para estudios de posgrado o especialización y, si las empresas a las que ingresan a trabajar los egresados ofrecen buenos salarios a su personal.',
                'valor_opcion' => 0
            ],
            //Contexto8_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 113,
                'id_pregunta' => 41,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 114,
                'id_pregunta' => 41,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 115,
                'id_pregunta' => 41,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 116,
                'id_pregunta' => 41,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 117,
                'id_pregunta' => 41,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 118,
                'id_pregunta' => 42,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 119,
                'id_pregunta' => 42,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 120,
                'id_pregunta' => 42,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 121,
                'id_pregunta' => 42,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 122,
                'id_pregunta' => 42,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 123,
                'id_pregunta' => 43,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 124,
                'id_pregunta' => 43,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 125,
                'id_pregunta' => 43,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 126,
                'id_pregunta' => 43,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 127,
                'id_pregunta' => 43,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 17
            [
                'id_opcion' => 128,
                'id_pregunta' => 44,
                'texto' => 'a) La probabilidad de que Jesús David se convierta en astronauta de la NASA es muy baja.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 129,
                'id_pregunta' => 44,
                'texto' => 'b) La probabilidad de que Jesús David se convierta en astronauta de la NASA es baja.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 130,
                'id_pregunta' => 44,
                'texto' => 'c) La probabilidad de que Jesús David se convierta en astronauta de la NASA es media.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 131,
                'id_pregunta' => 44,
                'texto' => 'd) La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 132,
                'id_pregunta' => 44,
                'texto' => 'e) La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.',
                'valor_opcion' => 0
            ],

            //Contexto9_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 133,
                'id_pregunta' => 46,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 134,
                'id_pregunta' => 46,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 135,
                'id_pregunta' => 46,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 136,
                'id_pregunta' => 46,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 137,
                'id_pregunta' => 46,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 138,
                'id_pregunta' => 47,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 139,
                'id_pregunta' => 47,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 140,
                'id_pregunta' => 47,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 141,
                'id_pregunta' => 47,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 142,
                'id_pregunta' => 47,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 143,
                'id_pregunta' => 48,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 144,
                'id_pregunta' => 48,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 145,
                'id_pregunta' => 48,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 146,
                'id_pregunta' => 48,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 147,
                'id_pregunta' => 48,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 19 
            [
                'id_opcion' => 148,
                'id_pregunta' => 49,
                'texto' => 'a) Las estimaciones sobre los niveles de desarrollo de la Inteligencia artificial son probablemente demasiado altas. Parece que en la publicación electrónica están confundiendo Inteligencia Artificial con robótica, lo cual es un desacierto.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 149,
                'id_pregunta' => 49,
                'texto' => 'b) Las estimaciones sobre los niveles de desempleo actual son probablemente demasiado altas. No sabemos cómo se comportarán las necesidades de empleo con respecto a las alternativas u opciones disponibles para trabajar.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 150,
                'id_pregunta' => 49,
                'texto' => 'c) En la publicación suponen que los niveles de desempleo a nivel mundial crecerán al mismo ritmo que ha venido creciendo, y generaliza afirmando que todas las personas se quedarán sin empleo como si esas fueran las únicas industrias que generan empleo.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 151,
                'id_pregunta' => 49,
                'texto' => 'd) El artículo probablemente fue escrito por alguien que no está seguro de si habrá crecimiento o decrecimiento poblacional, parece que la población mundial está disminuyendo entonces no es lógico pensar que todos nos quedaremos sin empleo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 152,
                'id_pregunta' => 49,
                'texto' => 'e) Esta predicción asume que no habrá posibilidad de que la inteligencia artificial genere nuevos empleos, la reglas están para hacerse de modo que pueden crearse algunas reglamentaciones en los próximos 80 años que regulen el asunto.',
                'valor_opcion' => 0
            ],

            //Contexto10_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 153,
                'id_pregunta' => 51,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 154,
                'id_pregunta' => 51,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 155,
                'id_pregunta' => 51,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 156,
                'id_pregunta' => 51,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 157,
                'id_pregunta' => 51,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 158,
                'id_pregunta' => 52,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 159,
                'id_pregunta' => 52,
                'texto' => 'Razonar deductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 160,
                'id_pregunta' => 52,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 161,
                'id_pregunta' => 52,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 162,
                'id_pregunta' => 52,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 163,
                'id_pregunta' => 53,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 164,
                'id_pregunta' => 53,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 165,
                'id_pregunta' => 53,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 166,
                'id_pregunta' => 53,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 167,
                'id_pregunta' => 53,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 21
            [
                'id_opcion' => 168,
                'id_pregunta' => 54,
                'texto' => 'a) Al rector no le importan los sentimientos de los estudiantes o los intereses que ellos tienen respecto del aprendizaje.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 169,
                'id_pregunta' => 54,
                'texto' => 'b) Algunos niños no pueden jugar muy bien con ese tipo de presiones, es mejor replantear la manera en que se asume la educación.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 170,
                'id_pregunta' => 54,
                'texto' => 'c) Ya se sabe por qué los maestros no suelen utilizar materiales didácticos como juegos durante el año escolar.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 171,
                'id_pregunta' => 54,
                'texto' => 'd) Los niños que desarrollan un amor por el aprendizaje tienen menos probabilidades de faltar a clase que los que no lo hacen.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 172,
                'id_pregunta' => 54,
                'texto' => 'e) El rector está comparando el aprendizaje a través del juego con actividades netamente recreativas que no enseñan nada.',
                'valor_opcion' => 1
            ],

            //Contexto11_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 173,
                'id_pregunta' => 56,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 174,
                'id_pregunta' => 56,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 175,
                'id_pregunta' => 56,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 176,
                'id_pregunta' => 56,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 177,
                'id_pregunta' => 56,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 178,
                'id_pregunta' => 57,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 179,
                'id_pregunta' => 57,
                'texto' => 'Razonar deductivamente y verbalmente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 180,
                'id_pregunta' => 57,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 181,
                'id_pregunta' => 57,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 182,
                'id_pregunta' => 57,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 183,
                'id_pregunta' => 58,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 184,
                'id_pregunta' => 58,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 185,
                'id_pregunta' => 58,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 186,
                'id_pregunta' => 58,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 187,
                'id_pregunta' => 58,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 23
            [
                'id_opcion' => 188,
                'id_pregunta' => 59,
                'texto' => '1 = Razonamiento extremadamente pobre',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 189,
                'id_pregunta' => 59,
                'texto' => '2 = Razonamiento muy pobre',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 190,
                'id_pregunta' => 59,
                'texto' => '3 = Razonamiento pobre,',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 191,
                'id_pregunta' => 59,
                'texto' => '4 = Ni buen ni mal razonamiento',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 192,
                'id_pregunta' => 59,
                'texto' => '5 = Buen razonamiento',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 194,
                'id_pregunta' => 59,
                'texto' => '6 = Excelente razonamiento',
                'valor_opcion' => 0
            ],

            //Contexto12_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 195,
                'id_pregunta' => 61,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 196,
                'id_pregunta' => 61,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 197,
                'id_pregunta' => 61,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 198,
                'id_pregunta' => 61,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 199,
                'id_pregunta' => 61,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 200,
                'id_pregunta' => 62,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 201,
                'id_pregunta' => 62,
                'texto' => 'Razonar deductivamente y verbalmente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 202,
                'id_pregunta' => 62,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 203,
                'id_pregunta' => 62,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 204,
                'id_pregunta' => 62,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 205,
                'id_pregunta' => 63,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 206,
                'id_pregunta' => 63,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 207,
                'id_pregunta' => 63,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 208,
                'id_pregunta' => 63,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 209,
                'id_pregunta' => 63,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 25
            [
                'id_opcion' => 210,
                'id_pregunta' => 64,
                'texto' => 'a) Prohibir totalmente todas las interacciones físicas entre los estudiantes para evitar cualquier muestra de afecto en las instalaciones del colegio como, por ejemplo, pasillos y aulas de clase.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 211,
                'id_pregunta' => 64,
                'texto' => 'b) Iniciar un programa de vigilancia intensiva para monitorear y sancionar cualquier muestra de afecto entre los estudiantes, bien sea a través de cámaras de vigilancia o delegando personal administrativo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 212,
                'id_pregunta' => 64,
                'texto' => 'c) Ajustar el manual de convivencia para definir claramente cuáles son las muestras de afecto permitidas y prohibidas, asegurando que todos los estudiantes y el personal entiendan las expectativas de comportamiento.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 213,
                'id_pregunta' => 64,
                'texto' => 'd) Permitir todas las muestras de afecto sin restricciones para promover la libertad y la expresión personal entre los estudiantes, esto garantiza que la expresión de las emociones y el amor sea un derecho para todos.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 214,
                'id_pregunta' => 64,
                'texto' => 'e) Eliminar todas las sanciones relacionadas con las muestras de afecto y confiar en que los estudiantes actuarán de manera apropiada, pues se supone que se enseña ética del cuidado de sí y de los demás.',
                'valor_opcion' => 0
            ],

            //Contexto13_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 215,
                'id_pregunta' => 66,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 216,
                'id_pregunta' => 66,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 217,
                'id_pregunta' => 66,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 218,
                'id_pregunta' => 66,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 219,
                'id_pregunta' => 66,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 220,
                'id_pregunta' => 67,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 221,
                'id_pregunta' => 67,
                'texto' => 'Razonar deductivamente y verbalmente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 222,
                'id_pregunta' => 67,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 223,
                'id_pregunta' => 67,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 224,
                'id_pregunta' => 67,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 225,
                'id_pregunta' => 68,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 226,
                'id_pregunta' => 68,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 227,
                'id_pregunta' => 68,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 228,
                'id_pregunta' => 68,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 229,
                'id_pregunta' => 68,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 27
            [
                'id_opcion' => 230,
                'id_pregunta' => 69,
                'texto' => 'a) No determinó las zonas de desalojo por días o semanas de acuerdo con el número de personas que integran las familias.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 231,
                'id_pregunta' => 69,
                'texto' => 'b) No expresó cómo reubicaría a las familias en campamentos temporales en los que se les pueda garantizar un tiempo prudente de tranquilidad.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 232,
                'id_pregunta' => 69,
                'texto' => 'c) No ha determinado espacios adecuados del territorio en los que pueden establecerse y que no les represente estar en vulnerabilidad.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 233,
                'id_pregunta' => 69,
                'texto' => 'd) No ha enviado comunicaciones a las comunidades indicando cómo pueden conserven la calma y actuar ante la temporada de lluvias.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 234,
                'id_pregunta' => 69,
                'texto' => 'e) No brindó información detallada y precisa a las comunidades sobre lo que significa estar en vulnerabilidad, en amenaza o en riesgo.',
                'valor_opcion' => 1
            ],

            //Contexto14_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 236,
                'id_pregunta' => 71,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 237,
                'id_pregunta' => 71,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 238,
                'id_pregunta' => 71,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 239,
                'id_pregunta' => 71,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 240,
                'id_pregunta' => 71,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 241,
                'id_pregunta' => 72,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 242,
                'id_pregunta' => 72,
                'texto' => 'Razonar deductivamente y verbalmente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 243,
                'id_pregunta' => 72,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 244,
                'id_pregunta' => 72,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 245,
                'id_pregunta' => 72,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 246,
                'id_pregunta' => 73,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 247,
                'id_pregunta' => 73,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 248,
                'id_pregunta' => 73,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 249,
                'id_pregunta' => 73,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 250,
                'id_pregunta' => 73,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 29
            [
                'id_opcion' => 251,
                'id_pregunta' => 74,
                'texto' => 'a) El gobierno no ha explicado con suficiente claridad el impacto del uso de anticonceptivos en la dinamización de la economía. Y establece una relación directa entre el uso de anticonceptivos y el decrecimiento poblacional como causas del estancamiento de la economía, sin tener en cuenta otros factores relevantes; entonces, su argumento a mayor crecimiento poblacional menor estancamiento de la economía es inválido.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 252,
                'id_pregunta' => 74,
                'texto' => 'b) Es entendible a que mayor uso de anticonceptivos menor crecimiento poblacional y menores flujos de dinero, entre más personas estén consumiendo bienes y servicios mayores dinámicas económicas se generan en el territorio, lo cuestionable es cómo serán los incentivos económicos que se dará a las parejas, y si esto influye en la decisión de tener hijos, siendo que las parejas pueden priorizar el dinero y luego no ser lo suficientemente responsables con los hijos que se traen al mundo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 253,
                'id_pregunta' => 74,
                'texto' => 'c) Cómo es que van a desincentivar el uso de anticonceptivos con tantas problemáticas económicas y sociales que se presentan en la actualidad, por el contrario, lo que se requiere es fomentar la sexualidad responsable y que las personas no traigan hijos al mundo a sufrir.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 254,
                'id_pregunta' => 74,
                'texto' => 'd) No es posible que el uso de preservativos se relacione con la salud de los habitantes directamente, es cierto que si se usan los preservativos las personas evitan adquirir enfermedades de transmisión sexual, lo cual genera menores costos para el Estado, pero el aumento en las condiciones de salud de los ciudadanos depende de otros factores como una excelente prestación de ese servicio social o los hábitos de vida saludable de las personas.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 255,
                'id_pregunta' => 74,
                'texto' => 'e) Entre más personas estén cuidando su salud reproductiva mayores niveles de bienestar a nivel social; el gobierno no debe formular una política pública que atente contra el trabajo de tantos años de otros gobiernos que ha buscado garantizar la responsabilidad sexual y reproductiva, de una sociedad que lo ha ido en entendiendo con el paso del tiempo.',
                'valor_opcion' => 0
            ],

            //Contexto15_Metacognición
            /* //pregunta 1_Metacognición
            [
                'id_opcion' => 256,
                'id_pregunta' => 76,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 257,
                'id_pregunta' => 76,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 258,
                'id_pregunta' => 76,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 259,
                'id_pregunta' => 76,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 260,
                'id_pregunta' => 76,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ],
            //pregunta 2_Metacognición
            [
                'id_opcion' => 261,
                'id_pregunta' => 77,
                'texto' => 'Razonar inductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 262,
                'id_pregunta' => 77,
                'texto' => 'Razonar deductivamente y verbalmente',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 263,
                'id_pregunta' => 77,
                'texto' => 'Razonar abductivamente',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 264,
                'id_pregunta' => 77,
                'texto' => 'Analizar argumentos',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 265,
                'id_pregunta' => 77,
                'texto' => 'Tomar decisiones y resolver problemas',
                'valor_opcion' => 0
            ],
            //pregunta 3_Metacognición
            [
                'id_opcion' => 266,
                'id_pregunta' => 78,
                'texto' => 'Completamente en desacuerdo',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 267,
                'id_pregunta' => 78,
                'texto' => 'En desacuerdo',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 268,
                'id_pregunta' => 78,
                'texto' => 'Ni en desacuerdo Ni de acuerdo',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 269,
                'id_pregunta' => 78,
                'texto' => 'De acuerdo',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 270,
                'id_pregunta' => 78,
                'texto' => 'Completamente de acuerdo',
                'valor_opcion' => 5
            ], */

            //Item 37
            [
                'id_opcion' => 256,
                'id_pregunta' => 85,
                'texto' => 'a) Los creadores de la red social deben estar haciendo un buen trabajo al innovar porque el gurú de las tecnologías y plataformas digitales así lo sugirió. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 257,
                'id_pregunta' => 85,
                'texto' => 'b) Los creadores de la red social deben estar haciendo un mal trabajo, puesto que en según mis observaciones el contenido es pésimo.  ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 258,
                'id_pregunta' => 85,
                'texto' => 'c) No hay una conclusión definitiva, pues los creadores de la red social pueden no estar haciendo un buen trabajo al innovar, y la plataforma ser un éxito. ',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 259,
                'id_pregunta' => 85,
                'texto' => 'd) La cantidad de usuarios y de influencers no se relaciona con otros factores que determinen el nivel de aceptación de la red social. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 260,
                'id_pregunta' => 85,
                'texto' => 'e) La cantidad de usuarios no está relacionada con el tipo de trabajo que están haciendo los creadores de la red social.',
                'valor_opcion' => 0
            ],

            //Item 39
            [
                'id_opcion' => 261,
                'id_pregunta' => 87,
                'texto' => 'a) Se ha mencionado en la charla que ingerir este plato ayuda a las personas a tener una piel más sana y a detener el envejecimiento, pero, no sé si sea más importante la apariencia física o los aportes de estos animales al ecosistema.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 262,
                'id_pregunta' => 87,
                'texto' => 'b) Definitivamente las culturas son muy diversas y, desafortunadamente, algunas de ellas desestiman el daño ocasionado al ecosistema, para estas culturas prima el hecho de satisfacer sus placeres o garantizar ganancias económicas.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 263,
                'id_pregunta' => 87,
                'texto' => 'c) Si este plato representa grandes aportes a ese sector de la economía hace parte de la cultura ancestral y puede generar empleos directos e indirectos, pero sería mejor hacer algo para que los tiburones se reproduzcan masivamente.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 264,
                'id_pregunta' => 87,
                'texto' => 'd) Es preocupante el asunto de la extinción de estos animales, pero indudablemente Rafa es un chico listo, tiene razón y más si se piensa en que este plato es muy consumido en China.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 265,
                'id_pregunta' => 87,
                'texto' => 'e) Indistintamente de las preocupaciones medioambientales, Rafa está suponiendo que las aletas de tiburón en realidad aportan al rejuvenecimiento, pero no estamos seguros de que así sea, se necesita evidencia científica.',
                'valor_opcion' => 1
            ],

            //Item 41
            [
                'id_opcion' => 266,
                'id_pregunta' => 89,
                'texto' => 'a) Respetamos tu forma de ver las cosas, las amigas están para apoyarse entre sí bien sea en lo emociona o sentimental. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 267,
                'id_pregunta' => 89,
                'texto' => 'b) El hecho de aceptar salir con uno de ellos no implica que deba aceptar salir con los demás, analiza mejor las cosas. ',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 268,
                'id_pregunta' => 89,
                'texto' => 'c) Algunas personas quieren salir con alguien y no encuentran la oportunidad, otras encuentran la oportunidad y no lo hacen.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 269,
                'id_pregunta' => 89,
                'texto' => 'd) El hecho se salir con todos no implica compromiso alguno con uno de ellos o con todos, se trata de elecciones. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 270,
                'id_pregunta' => 89,
                'texto' => 'e) La vida pasa y las cosas cambian, las oportunidades no deben desaprovecharse, la juventud debe vivirse con toda la responsabilidad que amerita.  ',
                'valor_opcion' => 0
            ],

            //Item 43
            [
                'id_opcion' => 271,
                'id_pregunta' => 91,
                'texto' => 'a) Respetamos tu preocupación, pero es importante considerar los beneficios que el parque podría traer.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 272,
                'id_pregunta' => 91,
                'texto' => 'b) La construcción de un solo parque no implica que la comunidad se transforme en una zona urbana congestionada. Podemos analizar mejor las cosas.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 273,
                'id_pregunta' => 91,
                'texto' => 'c) Algunas personas quieren más espacios verdes y otras prefieren mantener las cosas como están.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 274,
                'id_pregunta' => 91,
                'texto' => 'd) El hecho de construir un parque no significa que nos comprometamos a construir más. Se trata de decisiones independientes.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 275,
                'id_pregunta' => 91,
                'texto' => 'e) La vida sigue y las comunidades cambian, no debemos desaprovechar las oportunidades de mejora, siempre que lo hagamos con responsabilidad.',
                'valor_opcion' => 0
            ],

            //Item 47
            [
                'id_opcion' => 276,
                'id_pregunta' => 95,
                'texto' => 'a) Voy a apoyar el proyecto porque todos mis amigos y compañeros de clase lo apoyan.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 277,
                'id_pregunta' => 95,
                'texto' => 'b) Voy a esperar más cobertura mediática para decidir si apoyar el proyecto.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 278,
                'id_pregunta' => 95,
                'texto' => 'c) Apoyaré el proyecto si los políticos que lo impulsan tienen una buena reputación.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 279,
                'id_pregunta' => 95,
                'texto' => 'd) No apoyaré el proyecto hasta que esté segura de que no tendrá consecuencias económicas negativas.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 280,
                'id_pregunta' => 95,
                'texto' => 'e) Apoyaré el proyecto porque las organizaciones de Derechos Humanos lo respaldan después de una evaluación detallada.',
                'valor_opcion' => 1
            ],

            //Item 49
            [
                'id_opcion' => 281,
                'id_pregunta' => 97,
                'texto' => 'a) Ambos estamos en riesgo de sanciones si se descubre el consumo de sustancias. Lo mejor es hablar directamente con nuestro entrenador sobre lo que está sucediendo para que él pueda intervenir y ayudar a mi amigo.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 282,
                'id_pregunta' => 97,
                'texto' => 'b) La situación es que se trata de lealtad y compañerismo. De ninguna manera hablaría con su familia, lo mejor es convencerlo de que deje de consumir sustancias por su cuenta antes de que comiencen las competencias.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 283,
                'id_pregunta' => 97,
                'texto' => 'c) La situación es un problema personal de mi amigo que no me afecta directamente. Lo mejor es concentrarme en mi propio entrenamiento y dejar que mi amigo maneje sus propios asuntos.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 284,
                'id_pregunta' => 97,
                'texto' => 'd) La situación es que mi amigo podría afectar negativamente al equipo durante las justas nacionales. Lo mejor es hablar con otros compañeros para ver si podemos convencerlo juntos de dejar las sustancias.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 285,
                'id_pregunta' => 97,
                'texto' => 'e) La situación es que no se sabe qué tipo de sustancias consume y si podrían mejorar su rendimiento en las competencias. Lo mejor es no involucrarme y esperar a ver si se detecta algo en las pruebas antidopaje.',
                'valor_opcion' => 0
            ],

            //Item 51
            [
                'id_opcion' => 286,
                'id_pregunta' => 99,
                'texto' => 'a) La situación no es un problema técnico menor, es necesario atender a ciertas consideraciones, pero lo mejor es esperar a ver si se resuelve solo. Mientras tanto, aconsejaría a mi amigo que ignore los mensajes.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 287,
                'id_pregunta' => 99,
                'texto' => 'b) La situación es un problema personal de mi amigo pues se trata de su dispositivo portátil. Debido a los problemas en los que podría estar mi madre, lo mejor es aconsejarle que no use el dispositivo hasta que se sienta seguro.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 288,
                'id_pregunta' => 99,
                'texto' => 'c) La situación es preocupante, pero es responsabilidad de mi amigo asumir las consecuencias de haber comprado el dispositivo, aunque como la empresa de mi madre está involucrada lo mejor es que la empresa se responsabilice. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 289,
                'id_pregunta' => 99,
                'texto' => 'd) La situación es que hay un riesgo potencial para la seguridad personal de los usuarios. Lo mejor es informar tanto a mi madre como a las autoridades locales para que tomen medidas urgentes.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 290,
                'id_pregunta' => 99,
                'texto' => 'e) La situación es algo de lo que debo ocuparme más no preocuparme. Seguiré usando el dispositivo y sugeriré a mi amigo que lo haga también, seguramente se solucionará gracias a la eficiencia de sus creadores.',
                'valor_opcion' => 0
            ],

            //Item 55
            [
                'id_opcion' => 291,
                'id_pregunta' => 103,
                'texto' => 'a) Aceptar el plan actual de la empresa constructora sin cambios, ya que es probable que tenga algún impacto, pero no es posible evitar la construcción pues es bien sabido que estas empresas invierten grandes cantidades de dinero en este tipo de proyectos. ',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 292,
                'id_pregunta' => 103,
                'texto' => 'b) La mejor manera es reunir a la comunidad y solicitar formalmente a la empresa que reduzca el tamaño del proyecto para minimizar el impacto ambiental que pueda llegarse a generar, eso evita exigir una evaluación más detallada del impacto ambiental.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 293,
                'id_pregunta' => 103,
                'texto' => 'c) Informar a la comunidad sobre los riesgos del proyecto de construcción sin proporcionar soluciones alternativas o propuestas específicas para mitigar el impacto ambiental, pues es la empresa la que debe ofrecer opciones a la comunidad que se verá afectada.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 294,
                'id_pregunta' => 103,
                'texto' => 'd) Informarle a la comunidad para que no se involucre en la evaluación del plan, ya que puede ser un esfuerzo que no tiene un impacto significativo en el resultado final. Eso es lo que generalmente se observa cuando una constructora persigue sus fines. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 295,
                'id_pregunta' => 103,
                'texto' => 'e) Proponer a la empresa constructora que realice una evaluación más detallada del impacto ambiental del plan y que incluya medidas específicas para mitigar el daño a los hábitats de las aves. Además, sugerir la reubicación de la construcción a una zona menos sensible ecológicamente.',
                'valor_opcion' => 0
            ],

            //Item 57.1
            [
                'id_opcion' => 296,
                'id_pregunta' => 105,
                'texto' => '1 – G ',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 297,
                'id_pregunta' => 105,
                'texto' => '1 – H ',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 298,
                'id_pregunta' => 105,
                'texto' => '1 – I',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 299,
                'id_pregunta' => 105,
                'texto' => '1 – J ',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 300,
                'id_pregunta' => 105,
                'texto' => '1 – K ',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 301,
                'id_pregunta' => 105,
                'texto' => '1 – L ',
                'valor_opcion' => 4
            ],

            //Item 57.2
            [
                'id_opcion' => 302,
                'id_pregunta' => 105,
                'texto' => '2 - G',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 303,
                'id_pregunta' => 105,
                'texto' => '2 - H',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 304,
                'id_pregunta' => 105,
                'texto' => '2 - I',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 305,
                'id_pregunta' => 105,
                'texto' => '2 - J',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 306,
                'id_pregunta' => 105,
                'texto' => '2 - K',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 307,
                'id_pregunta' => 105,
                'texto' => '2 - L',
                'valor_opcion' => 4
            ],

            //item 57.3
            [
                'id_opcion' => 308,
                'id_pregunta' => 105,
                'texto' => '3 - G',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 309,
                'id_pregunta' => 105,
                'texto' => '3 - H',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 310,
                'id_pregunta' => 105,
                'texto' => '3 - I',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 311,
                'id_pregunta' => 105,
                'texto' => '3 - J',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 312,
                'id_pregunta' => 105,
                'texto' => '3 - K',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 313,
                'id_pregunta' => 105,
                'texto' => '2 - L',
                'valor_opcion' => 3
            ],

            //Item 57.4
            [
                'id_opcion' => 314,
                'id_pregunta' => 105,
                'texto' => '4 - G',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 315,
                'id_pregunta' => 105,
                'texto' => '4 - H',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 316,
                'id_pregunta' => 105,
                'texto' => '4 - I',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 317,
                'id_pregunta' => 105,
                'texto' => '4 - J',
                'valor_opcion' => 7
            ],
            [
                'id_opcion' => 318,
                'id_pregunta' => 105,
                'texto' => '4 - K',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 319,
                'id_pregunta' => 105,
                'texto' => '4 - L',
                'valor_opcion' => 6
            ],

            //Item 57.5
            [
                'id_opcion' => 320,
                'id_pregunta' => 105,
                'texto' => '5 - G',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 321,
                'id_pregunta' => 105,
                'texto' => '5 - H',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 322,
                'id_pregunta' => 105,
                'texto' => '5 - I',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 323,
                'id_pregunta' => 105,
                'texto' => '5 - J',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 324,
                'id_pregunta' => 105,
                'texto' => '5 - K',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 325,
                'id_pregunta' => 105,
                'texto' => '5 - L',
                'valor_opcion' => 4
            ],

            //Item 57.6
            [
                'id_opcion' => 326,
                'id_pregunta' => 105,
                'texto' => '6 - G',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 327,
                'id_pregunta' => 105,
                'texto' => '6 - H',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 328,
                'id_pregunta' => 105,
                'texto' => '6 - I',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 329,
                'id_pregunta' => 105,
                'texto' => '6 - J',
                'valor_opcion' => 12
            ],
            [
                'id_opcion' => 330,
                'id_pregunta' => 105,
                'texto' => '6 - K',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 331,
                'id_pregunta' => 105,
                'texto' => '6 - L',
                'valor_opcion' => 10
            ],

            //Item 59.1
            [
                'id_opcion' => 332,
                'id_pregunta' => 115,
                'texto' => '1 - A',
                'valor_opcion' => 10
            ],
            [
                'id_opcion' => 333,
                'id_pregunta' => 115,
                'texto' => '1 - B',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 334,
                'id_pregunta' => 115,
                'texto' => '1 - C',
                'valor_opcion' => 12
            ],
            [
                'id_opcion' => 335,
                'id_pregunta' => 115,
                'texto' => '1 - D',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 336,
                'id_pregunta' => 115,
                'texto' => '1 - E',
                'valor_opcion' => 9
            ],
            [
                'id_opcion' => 337,
                'id_pregunta' => 115,
                'texto' => '1 - F',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 338,
                'id_pregunta' => 115,
                'texto' => '2 - A ',
                'valor_opcion' => 7
            ],
            [
                'id_opcion' => 339,
                'id_pregunta' => 115,
                'texto' => '2 - B',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 340,
                'id_pregunta' => 115,
                'texto' => '2 - C',
                'valor_opcion' => 6
            ],
            [
                'id_opcion' => 341,
                'id_pregunta' => 115,
                'texto' => '2 - D',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 342,
                'id_pregunta' => 115,
                'texto' => '2 - E',
                'valor_opcion' => 6
            ],
            [
                'id_opcion' => 343,
                'id_pregunta' => 115,
                'texto' => '2 - F',
                'valor_opcion' => 2
            ],

            //Item 59.3
            [
                'id_opcion' => 344,
                'id_pregunta' => 115,
                'texto' => '3 - A',
                'valor_opcion' => 6
            ],
            [
                'id_opcion' => 345,
                'id_pregunta' => 115,
                'texto' => '3 - B',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 346,
                'id_pregunta' => 115,
                'texto' => '3 - C',
                'valor_opcion' => 7
            ],
            [
                'id_opcion' => 347,
                'id_pregunta' => 115,
                'texto' => '3 - D',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 348,
                'id_pregunta' => 115,
                'texto' => '3 - E',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 349,
                'id_pregunta' => 115,
                'texto' => '3 - F',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 350,
                'id_pregunta' => 115,
                'texto' => '4 - A ',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 351,
                'id_pregunta' => 115,
                'texto' => '4 - B',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 352,
                'id_pregunta' => 115,
                'texto' => '4 - C',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 353,
                'id_pregunta' => 115,
                'texto' => '4 - D',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 354,
                'id_pregunta' => 115,
                'texto' => '4 - E',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 355,
                'id_pregunta' => 115,
                'texto' => '4 - F',
                'valor_opcion' => 1
            ],

            //Item 59.5
            [
                'id_opcion' => 356,
                'id_pregunta' => 115,
                'texto' => '5 - A',
                'valor_opcion' => 6
            ],
            [
                'id_opcion' => 357,
                'id_pregunta' => 115,
                'texto' => '5 - B',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 358,
                'id_pregunta' => 115,
                'texto' => '5 - C',
                'valor_opcion' => 7
            ],
            [
                'id_opcion' => 359,
                'id_pregunta' => 115,
                'texto' => '5 - D',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 360,
                'id_pregunta' => 115,
                'texto' => '5 - E',
                'valor_opcion' => 8
            ],
            [
                'id_opcion' => 361,
                'id_pregunta' => 115,
                'texto' => ' 5 - F',
                'valor_opcion' => 2
            ],
            [
                'id_opcion' => 362,
                'id_pregunta' => 115,
                'texto' => '6 - A',
                'valor_opcion' => 7
            ],
            [
                'id_opcion' => 363,
                'id_pregunta' => 115,
                'texto' => '6 - B',
                'valor_opcion' => 4
            ],
            [
                'id_opcion' => 364,
                'id_pregunta' => 115,
                'texto' => '6 - C',
                'valor_opcion' => 8
            ],
            [
                'id_opcion' => 365,
                'id_pregunta' => 115,
                'texto' => '6 - D',
                'valor_opcion' => 3
            ],
            [
                'id_opcion' => 366,
                'id_pregunta' => 115,
                'texto' => '6 - E',
                'valor_opcion' => 9
            ],
            [
                'id_opcion' => 367,
                'id_pregunta' => 115,
                'texto' => '6 - F',
                'valor_opcion' => 3
            ],

        ]);
    }
}
