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
                'texto' => 'Más mujeres participando en el evento que en todos los torneos anuales en los que ha estado.',
                'valor_opcion' => 0
            ],

            [
                'id_opcion' => 2,
                'id_pregunta' => 12,
                'texto' => 'Salones amplios, sonido envolvente y personalizado, pantallas que pueden ecualizarse, resolución 3D, sillas con todas las comodidades y opciones de adaptación al tamaño del participante.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 3,
                'id_pregunta' => 12,
                'texto' => 'Problemas de logística para determinar si hubo ventajas o desventajas en las competencias y por tanto en las premiaciones.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 4,
                'id_pregunta' => 12,
                'texto' => 'Un equipo grande del gobierno local grabando el escenario y publicando en todos los medios sus aportes para luego obtener votaciones en las próximas elecciones. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 5,
                'id_pregunta' => 12,
                'texto' => 'Un espacio como el que normalmente se utiliza con equipos que podrían ser como los habituales o tal vez mucho mejor de los que se utilizan con normalidad.',
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
                'texto' => 'En cartografía siempre se nos ha mostrado a través de los mapamundis que el Planeta Tierra es una esfera. Distintos textos religiosos han determinado históricamente que la Tierra es redonda.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 8,
                'id_pregunta' => 14,
                'texto' => 'Si la tierra fuera plana, cómo se explica que el agua de los mares no se derrama en algún punto. Los miles de satélites que orbitan alrededor del planeta han tomado imágenes en las que se observa que el planeta Tierra es redondo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 9,
                'id_pregunta' => 14,
                'texto' => 'La luz del sol no puede reflejar la misma sombra al mismo tiempo sobre distintos objetos distribuidos a distancias significativas en el espacio terrestre. La rotación del Planeta es otra evidencia de su forma.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 10,
                'id_pregunta' => 14,
                'texto' => 'Los aviones no viajan en línea recta en aquellos vuelos de largas horas. Si el Planeta tierra fuera plano la gravedad funcionaría con atracciones desordenadas y no de manera uniforme hacia el centro de la masa. ',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 11,
                'id_pregunta' => 14,
                'texto' => 'La evidencia nos dice que al ubicarnos en un lugar alto podemos ver hacia nuestro alrededor, pero en cierto punto la vista se pierde en el firmamento y ni siquiera con un telescopio potente podremos observar ciudades de otros continentes debido a la curvatura del Plantea. La hora en la que sale y se pone el sol es distinta en cada lugar del mundo.',
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
                'texto' => 'Mariana se apresuró en las generalizaciones sin tener en cuenta otros países y otras leyes del continente.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 14,
                'id_pregunta' => 16,
                'texto' => 'Mariana no explicó nada acerca de la vestimenta, los sistemas políticos, la gastronomía o la música del continente asiático',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 15,
                'id_pregunta' => 16,
                'texto' => ' Mariana se dedicó a leer las diapositivas y en una exposición no se deben leer las diapositivas al pie de la letra, sino explicarlas para dar a conocer la comprensión que se tiene del tema. ',
                'valor_opcion' => 0
            ],
            [

                'id_opcion' => 16,
                'id_pregunta' => 16,
                'texto' => 'No es cierto que en esos países sea común el matrimonio infantil debido a factores socioeconómicos, sino que se debe a cuestiones culturales o al sistema de creencias y para ellos es normal que esto suceda.',
                'valor_opcion' => 0
            ],
            [

                'id_opcion' => 17,
                'id_pregunta' => 16,
                'texto' => 'Estas no son las principales características culturales de Asia que debió exponer Mariana, debió hablar de la diversidad de lenguas y religiones como el budismo, hinduismo, islamismo, confucianismo y taoísmo, también de la arquitectura.',
                'valor_opcion' => 0
            ],

            //Item 1_Metacognición
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
            ],

            //Item 7
            [
                'id_opcion' => 23,
                'id_pregunta' => 19,
                'texto' => 'No. Importar almidones de yuca o maíz para la fabricación de empaques
                plásticos biodegradables no es tan buen negocio teniendo en cuenta que esos
                productos se cosechan en abundancia en nuestro país.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 24,
                'id_pregunta' => 19,
                'texto' => 'No. Diversificar los empaques plásticos biodegradables y ofrecerlos a
                excelentes precios en poco tiempo es algo que puede lograr la empresa,
                aunque no depende únicamente de las importaciones o la producción local de
                la materia prima.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 25,
                'id_pregunta' => 19,
                'texto' => 'Sí. Los procesos fisicoquímicos a los que se somete el maíz en países asiáticos
                garantizan calidad y reducción de costos, de manera que si se importan la
                empresa ofrecerá productos a excelentes precios.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 26,
                'id_pregunta' => 19,
                'texto' => 'No. Con la situación actual de la economía es difícil ofrecer empaques
                plásticos a excelentes precios.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 27,
                'id_pregunta' => 19,
                'texto' => 'Sí. Al producir el almidón de yuca en la empresa e importar el almidón del
                maíz se garantiza un equilibrio en los costos de producción, por tanto, se
                diversifican los productos y se fabrican en poco tiempo.',
                'valor_opcion' => 0
            ],
            //Item 1_Metacognición
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
            ],

            //Contexto4_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 9
            [
                'id_opcion' => 48,
                'id_pregunta' => 24,
                'texto' => 'Que la experiencia no se improvisa y que tal como se lo había indicado los jóvenes no emiten tanto CO₂ como lo hacen los adultos.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 49,
                'id_pregunta' => 24,
                'texto' => 'Que por más seguro que esté de los promedios del próximo colegio las ordenes son claras y deben cumplirse, especialmente si se trata de un experto que trabaja para un organismo multilateral.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 50,
                'id_pregunta' => 24,
                'texto' => 'Que no importa si no realiza el promedio en el siguiente colegio, es más importante ser eficientes, ahorrar gastos de viáticos y no caer en sobrecostos cuando se sabe cuál es la tendencia.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 51,
                'id_pregunta' => 24,
                'texto' => 'QQue debe visitar el próximo colegio y promediar la huella de carbono de los adolescentes, puesto que, aunque las probabilidades de no superar la emisión de 1 tonelada de CO₂ al año por adolescentes sean altas para ese colegio, nadie puede asegurar que así sea sin antes verificarlo.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 52,
                'id_pregunta' => 24,
                'texto' => 'Que replantee los promedios anteriores y los realice nuevamente, pues no es posible que, en una de las ciudades más contaminantes del continente, en donde existen tantos desplazamientos al día en vehículos propulsados por motores de combustibles fósiles para movilizarse hasta el colegio y regresar a casa, con tanto consumo de energía y servicios, los adolescentes no superen 1 tonelada de CO₂ emitida al año.',
                'valor_opcion' => 0
            ],
            //Contexto5_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 11
            [
                'id_opcion' => 68,
                'id_pregunta' => 29,
                'texto' => 'Si fuera el papá de la chica también prohibiría el uso en casa de Instagram y Facebook, porque la investigación encontraba que cuando se incrementa el uso de estas redes sociales la depresión aumenta.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 69,
                'id_pregunta' => 29,
                'texto' => 'Lo más seguro es que la hija se aliviará al evitar que use Instagram y Facebook, y en ese sentido no puede ser que si el papá incrementa el uso de esas redes sociales la depresión disminuya.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 70,
                'id_pregunta' => 29,
                'texto' => 'Es posible que la depresión de la hija adolescente no disminuya si se prohíbe que use esas redes sociales, porque sólo conocemos que usar frecuentemente Instagram y Facebook y depresión están relacionados, pero no si usar estas redes sociales es la causa de la depresión como tal.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 71,
                'id_pregunta' => 29,
                'texto' => 'Probablemente, el evitar que los adolescentes usen Instagram y Facebook no influya en el aumento de la depresión, porque el estudio fue realizado por padres y profesores, de manera que es probable que estén en contra de que los adolescentes usen esas redes sociales.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 72,
                'id_pregunta' => 29,
                'texto' => 'Un uso prudente de las redes sociales puede ayudar a que la hija se recupere de la depresión, es cuestión de contenido y frecuencia en que se usan.',
                'valor_opcion' => 0
            ],
            //Contexto6_Metacognición
            //pregunta 1_Metacognición
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
            ],
            //Item 13
            [
                'id_opcion' => 88,
                'id_pregunta' => 34,
                'texto' => 'El porcentaje de jóvenes que escuchan esta música y declaran que consumen drogas, son violentos o llevan una vida sexual irresponsable; y, el porcentaje de adolescentes que escuchan esta música y no se declaran violentos, no consumen drogas o no llevan una vida sexual irresponsable o la frecuencia con que la escuchan.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 89,
                'id_pregunta' => 34,
                'texto' => 'Si alguno de los miembros del Consejo Nacional de Música conoce las implicaciones de esta música en el comportamiento de los jóvenes; y si es probable que esas decisiones afecten la libertad de expresión.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 90,
                'id_pregunta' => 34,
                'texto' => 'Si los miembros del Consejo Nacional de Música son designados políticamente o si tienen familiares que produzcan este tipo de música; y, cuál es la opinión de los padres de familia sobre la situación en cuestión.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 91,
                'id_pregunta' => 34,
                'texto' => 'Si los jóvenes que escuchan esta música son delincuentes en potencia; y, si el Consejo Nacional de Música está conformado por liberales o conservadores.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 92,
                'id_pregunta' => 34,
                'texto' => 'La cantidad de empleos directos e indirectos que se verían afectados con ese tipo de sanciones; y, si se trata de la música de mi gusto.',
                'valor_opcion' => 0
            ],
            //Contexto7_Metacognición
            //pregunta 1_Metacognición
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
            ],
            //Item 15
            [
                'id_opcion' => 108,
                'id_pregunta' => 39,
                'texto' => 'Qué tipo de capacitación o actualización de conocimientos recibe el personal docente de su universidad y, si anuncian su programa universitario en los medios locales de comunicación.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 109,
                'id_pregunta' => 39,
                'texto' => 'El porcentaje, cantidad o estadística de egresados que logra emplearse al terminar la carrera universitaria y, si pueden probar que los profesionales que egresan de esta carrera son altamente requeridos en el mercado laboral.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 110,
                'id_pregunta' => 39,
                'texto' => 'El programa universitario está respaldado por un personaje público de la ciudad o del país y, si el programa universitario goza de reconocimiento a nivel nacional e internacional.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 111,
                'id_pregunta' => 39,
                'texto' => 'Cuántos estudiantes abandonan el programa universitario antes de completarlo y, si los estudiantes que se gradúan potencializan sus capacidades en las empresas en las que ingresan a trabajar.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 112,
                'id_pregunta' => 39,
                'texto' => 'Si las empresas a las que ingresan a trabajar los egresados tienen programas de becas para estudios de posgrado o especialización. Y si las empresas a las que ingresan a trabajar los egresados ofrecen muy buenos salarios a su personal.',
                'valor_opcion' => 0
            ],
            //Contexto8_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 17
            [
                'id_opcion' => 128,
                'id_pregunta' => 44,
                'texto' => 'La probabilidad de que Jesús David se convierta en astronauta de la NASA es muy baja.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 129,
                'id_pregunta' => 44,
                'texto' => 'La probabilidad de que Jesús David se convierta en astronauta de la NASA es baja.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 130,
                'id_pregunta' => 44,
                'texto' => 'La probabilidad de que Jesús David se convierta en astronauta de la NASA es media.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 131,
                'id_pregunta' => 44,
                'texto' => 'La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 132,
                'id_pregunta' => 44,
                'texto' => 'La probabilidad de que Jesús David se convierta en astronauta de la NASA es alta.',
                'valor_opcion' => 0
            ],

            //Contexto9_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 19 
            [
                'id_opcion' => 148,
                'id_pregunta' => 49,
                'texto' => 'probablemente demasiado altas. Están confundiendo Inteligencia Artificial con robótica.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 149,
                'id_pregunta' => 49,
                'texto' => 'Las estimaciones sobre los niveles de desempleo actual son probablemente demasiado altas. No sabemos cómo se comportará la oferta frente a la demanda laboral.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 150,
                'id_pregunta' => 49,
                'texto' => 'Esta predicción supone que la inteligencia artificial se apoderará de las industrias y que los niveles de desempleo a nivel mundial crecerán al mismo ritmo que ha venido creciendo, y generaliza afirmando que todas las personas se quedarán sin empleo como si esas fueran las únicas industrias.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 151,
                'id_pregunta' => 49,
                'texto' => 'El artículo probablemente fue escrito por alguien que no está seguro de si habrá crecimiento o decrecimiento poblacional, parece que la población mundial está disminuyendo.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 152,
                'id_pregunta' => 49,
                'texto' => 'Esta predicción asume que no habrá posibilidad de que la inteligencia artificial genere nuevos empleos, la reglas están para hacerse como algunas reglamentaciones en los próximos 80 años.',
                'valor_opcion' => 0
            ],

            //Contexto10_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 21
            [
                'id_opcion' => 168,
                'id_pregunta' => 54,
                'texto' => 'Al rector no le importan los sentimientos de los estudiantes.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 169,
                'id_pregunta' => 54,
                'texto' => 'Algunos niños no pueden jugar muy bien con ese tipo de presiones.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 170,
                'id_pregunta' => 54,
                'texto' => 'Ya se sabe por qué los maestros no suelen utilizar materiales didácticos como juegos durante el año escolar.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 171,
                'id_pregunta' => 54,
                'texto' => 'Los niños que desarrollan un amor por el aprendizaje tienen menos probabilidades de faltar a clase que los que no lo hacen.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 172,
                'id_pregunta' => 54,
                'texto' => 'El rector está comparando el aprendizaje a través del juego con actividades netamente recreativas que no enseñan nada.',
                'valor_opcion' => 1
            ],

            //Contexto11_Metacognición
            //pregunta 1_Metacognición
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
            ],

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
                'id_opcion' => 193,
                'id_pregunta' => 59,
                'texto' => '5 = Buen razonamiento',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 194,
                'id_pregunta' => 59,
                'texto' => '7 = Excelente razonamiento',
                'valor_opcion' => 0
            ],

            //Contexto12_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 25
            [
                'id_opcion' => 210,
                'id_pregunta' => 64,
                'texto' => 'Prohibir totalmente todas las interacciones físicas entre los estudiantes para evitar cualquier muestra de afecto.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 211,
                'id_pregunta' => 64,
                'texto' => 'Iniciar un programa de vigilancia intensiva para monitorear y sancionar cualquier muestra de afecto entre los estudiantes.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 212,
                'id_pregunta' => 64,
                'texto' => 'Ajustar el manual de convivencia para definir claramente las muestras de afecto permitidas y prohibidas, asegurando que todos los estudiantes y el personal entiendan las expectativas de comportamiento.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 213,
                'id_pregunta' => 64,
                'texto' => 'Permitir todas las muestras de afecto sin restricciones para promover la libertad y la expresión personal entre los estudiantes.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 214,
                'id_pregunta' => 64,
                'texto' => 'Eliminar todas las sanciones relacionadas con las muestras de afecto y confiar en que los estudiantes actuarán de manera apropiada.',
                'valor_opcion' => 0
            ],

            //Contexto13_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 27
            [
                'id_opcion' => 230,
                'id_pregunta' => 69,
                'texto' => 'Determinando las zonas de desalojo por semanas.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 231,
                'id_pregunta' => 69,
                'texto' => 'Reubicando a las familias en campamentos temporales.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 232,
                'id_pregunta' => 69,
                'texto' => 'Determinando espacios adecuados del territorio en los que pueden establecerse.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 233,
                'id_pregunta' => 69,
                'texto' => 'Enviando comunicaciones a las comunidades para que conserven la calma.',
                'valor_opcion' => 0
            ],
            [
                'id_opcion' => 234,
                'id_pregunta' => 69,
                'texto' => 'Informando a las comunidades qué es estar en vulnerabilidad, en amenaza o en riesgo.',
                'valor_opcion' => 1
            ],
            [
                'id_opcion' => 235,
                'id_pregunta' => 69,
                'texto' => 'Concientizando a la comunidad acerca de la importancia de proteger la vida y la de sus seres queridos.',
                'valor_opcion' => 0
            ],

            //Contexto14_Metacognición
            //pregunta 1_Metacognición
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
            ],

            //Item 29
            [
                'id_opcion' => 251,
                'id_pregunta' => 74,
                'texto' => 'El gobierno no ha explicado con suficiente claridad el impacto del uso de anticonceptivos en la dinamización de la economía. Y establece una relación directa entre el uso de anticonceptivos y el decrecimiento poblacional como causas del estancamiento de la economía, sin tener en cuenta otros factores relevantes; entonces, su argumento a mayor crecimiento poblacional menor estancamiento de la economía es inválido.',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 252,
                'id_pregunta' => 74,
                'texto' => 'Es entendible a que mayor uso de anticonceptivos menor crecimiento poblacional y menores flujos de dinero, entre más personas estén consumiendo bienes y servicios mayores dinámicas económicas se generan en el territorio, lo cuestionable es cómo serán los incentivos económicos que se dará a las parejas, y si esto influye en la decisión de tener hijos, siendo que las parejas pueden priorizar el dinero y luego no ser lo suficientemente responsables con los hijos que se traen al mundo.',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 253,
                'id_pregunta' => 74,
                'texto' => 'Cómo es que van a desincentivar el uso de anticonceptivos con tantas problemáticas económicas y sociales que se presentan en la actualidad, por el contrario, lo que se requiere es fomentar la sexualidad responsable y que las personas no traigan hijos al mundo a sufrir.',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 254,
                'id_pregunta' => 74,
                'texto' => 'No es posible que el uso de preservativos se relacione con la salud de los habitantes directamente, es cierto que si se usan los preservativos las personas evitan adquirir enfermedades de transmisión sexual, lo cual genera menores costos para el Estado, pero el aumento en las condiciones de salud de los ciudadanos depende de otros factores como una excelente prestación de ese servicio social o los hábitos de vida saludable de las personas.',
                'valor_opcion' => 5
            ],
            [
                'id_opcion' => 255,
                'id_pregunta' => 74,
                'texto' => 'Entre más personas estén cuidando su salud reproductiva mayores niveles de bienestar a nivel social; el gobierno no debe formular una política pública que atente contra el trabajo de tantos años de otros gobiernos que ha buscado garantizar la responsabilidad sexual y reproductiva, de una sociedad que lo ha ido en entendiendo con el paso del tiempo.',
                'valor_opcion' => 5
            ],

            //Contexto15_Metacognición
            //pregunta 1_Metacognición
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
            ],

        ]);
    }
}
