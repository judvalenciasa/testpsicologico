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
                'texto'=> 'Más mujeres participando en el evento que en todos los torneos anuales en los que ha estado.',
                'valor_opcion'=> 0
            ],
             
            [
                'id_opcion' => 2,
                'id_pregunta' => 12,
                'texto'=> 'Salones amplios, sonido envolvente y personalizado, pantallas que pueden ecualizarse, resolución 3D, sillas con todas las comodidades y opciones de adaptación al tamaño del participante.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 3,
                'id_pregunta' => 12,
                'texto'=> 'Problemas de logística para determinar si hubo ventajas o desventajas en las competencias y por tanto en las premiaciones.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 4,
                'id_pregunta' => 12,
                'texto'=> 'Un equipo grande del gobierno local grabando el escenario y publicando en todos los medios sus aportes para luego obtener votaciones en las próximas elecciones. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 5,
                'id_pregunta' => 12,
                'texto'=> 'Un espacio como el que normalmente se utiliza con equipos que podrían ser como los habituales o tal vez mucho mejor de los que se utilizan con normalidad.',
                'valor_opcion'=> 1
            ],

            //Item 2 - abierta
            [
                'id_opcion' => 6,
                'id_pregunta' => 13,
                'texto'=> 'abierta',
                'valor_opcion'=> null
            ],

            //Item 3
            [
                'id_opcion' => 7,
                'id_pregunta' => 14,
                'texto'=> 'En cartografía siempre se nos ha mostrado a través de los mapamundis que el Planeta Tierra es una esfera. Distintos textos religiosos han determinado históricamente que la Tierra es redonda.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 8,
                'id_pregunta' => 14,
                'texto'=> 'Si la tierra fuera plana, cómo se explica que el agua de los mares no se derrama en algún punto. Los miles de satélites que orbitan alrededor del planeta han tomado imágenes en las que se observa que el planeta Tierra es redondo.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 9,
                'id_pregunta' => 14,
                'texto'=>'La luz del sol no puede reflejar la misma sombra al mismo tiempo sobre distintos objetos distribuidos a distancias significativas en el espacio terrestre. La rotación del Planeta es otra evidencia de su forma.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 10,
                'id_pregunta' => 14,
                'texto'=> 'Los aviones no viajan en línea recta en aquellos vuelos de largas horas. Si el Planeta tierra fuera plano la gravedad funcionaría con atracciones desordenadas y no de manera uniforme hacia el centro de la masa. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 11,
                'id_pregunta' => 14,
                'texto'=> 'La evidencia nos dice que al ubicarnos en un lugar alto podemos ver hacia nuestro alrededor, pero en cierto punto la vista se pierde en el firmamento y ni siquiera con un telescopio potente podremos observar ciudades de otros continentes debido a la curvatura del Plantea. La hora en la que sale y se pone el sol es distinta en cada lugar del mundo.',
                'valor_opcion'=> 1
            ],

            //Item 4
            [
                'id_opcion' => 12,
                'id_pregunta' => 15,
                'texto'=> 'abierta',
                'valor_opcion'=> null
            ],

            //Item 5
            [
                'id_opcion' => 13,
                'id_pregunta' => 16,
                'texto'=> 'Mariana se apresuró en las generalizaciones sin tener en cuenta otros países y otras leyes del continente.',
                'valor_opcion'=> 1
            ],
            [
                'id_opcion' => 14,
                'id_pregunta' => 16,
                'texto'=> 'Mariana no explicó nada acerca de la vestimenta, los sistemas políticos, la gastronomía o la música del continente asiático',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 15,
                'id_pregunta' => 16,
                'texto'=> 'c)	Mariana se dedicó a leer las diapositivas y en una exposición no se deben leer las diapositivas al pie de la letra, sino explicarlas para dar a conocer la comprensión que se tiene del tema. ',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 16,
                'id_pregunta' => 16,
                'texto'=> 'No es cierto que en esos países sea común el matrimonio infantil debido a factores socioeconómicos, sino que se debe a cuestiones culturales o al sistema de creencias y para ellos es normal que esto suceda.',
                'valor_opcion'=> 0
            ],
            [
                'id_opcion' => 17,
                'id_pregunta' => 16,
                'texto'=> 'Estas no son las principales características culturales de Asia que debió exponer Mariana, debió hablar de la diversidad de lenguas y religiones como el budismo, hinduismo, islamismo, confucianismo y taoísmo, también de la arquitectura.',
                'valor_opcion'=> 0
            ],
            
            //Item 6
           

        ]);
    
    }
}
