<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContextoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contextos')->insert([
        	[
                'id_contexto' => 1,
                'texto' => 'Gilberto es un joven que no se pierde participación en un torneo de videojuegos que se lleva a cabo en su ciudad en los últimos 5 años. Recientemente se dio a conocer a los participantes usuales que el gobierno local destinará recursos económicos para que el certamen de este año cuente con mejores instalaciones y equipos de última generación, bajo la condición de contar con la participación de mujeres en al menos un 50%. En la primera hora de las tres jornadas diarias de inscripción, que se llevarán a cabo durante una semana meses antes del evento, Gilberto observó que coincidió con cuatro participantes al momento de llenar los formularios y que tres de esos eran mujeres. Basado en esta observación Gilberto declara en uno de los medios de comunicación que este año las consolas, pantallas, sonido, asientos e instalaciones en general serán mejores que las de los anteriores eventos.'
            ],
            [
                'id_contexto' => 2,
                'texto' => 'En una de esas conversaciones familiares que se dan una tarde de vacaciones un primo tuyo expresa que la humanidad está siendo engañada desde hace siglos y que el planeta Tierra en realidad es plano y no redondo; según él esto se debe a que ciertos gobiernos y la ciencia operan articuladamente con la finalidad de dominar a gran parte de la humanidad. Algunos de los familiares hablan al respecto defendiendo ambas posturas.'
            ],
            [
                'id_contexto' => 3,
                'texto' => 'Mariana debió hacer una exposición en una de las clases de su colegio en la que presentó las principales características culturales del continente asiático. Una vez se adentra a desarrollar la exposición comienza a leer las diapositivas afirmando que en países como India, Pakistán, Nepal y Bangladesh es común el matrimonio infantil debido a factores socioeconómicos, culturales y al difícil cumplimiento de las normas. Al finalizar la exposición Mariana concluye que en Asia es normal que los niños contraigan matrimonio y que en el continente no se cumplen las leyes. La profesora felicita a Mariana por su compromiso con la exposición, no obstante, le indica en privado que debe hacerle algunas recomendaciones y bajarle un punto en la nota. Mariana responde con asombro que no entiende el porqué de la decisión de la maestra. '
            ],
            [
                'id_contexto' => 4,
                'texto' => 'Una empresa de empaques plásticos ofrece una vacante para trabajar en el área de proyección sostenible con la posibilidad de cubrir los gastos de estudios universitario en gestión o ingeniería ambiental. Uno de los requisitos es responder a la siguiente situación técnica de la empresa. La empresa necesita transitar urgentemente de los plásticos fabricados con derivados del petróleo a plásticos amigables con el medio ambiente y ha observado que otras empresas del sector que producen o importan materia prima biodegradable para ser usada en sus productos están diversificando sus inventarios y ofrecen rápidamente distintos empaques plásticos biodegradables en el mercado a excelentes precios ¿Crees que al realizar importaciones de la materia prima y/o al producirla, se garantiza que la empresa obtenga resultados similares a los de las demás empresas?'
            ],
            [
                'id_contexto' => 5,
                'texto' => 'En un estudio sobre desarrollo humano sostenible que realiza un organismo multilateral, se ha planteado la necesidad de conocer el impacto ambiental de los adolescentes que habitan en algunas de las ciudades qué más contaminan en el continente. En ese sentido, un experto ha sido designado para promediar la huella de carbono anual (totalidad de gases de efecto invernadero emitidos por efecto directo o indirecto de un individuo) de los estudiantes de distintos colegios. Luego de una larga trayectoria y recorrido extenuante por diferentes ciudades y colegios, el experto observa que los adolescentes de tres colegios a los que les ha realizado el promedio en una ciudad determinada no emiten más de 1 tonelada de CO₂, por estudiante al año. En consecuencia, el experto se ha comunicado con su jefe inmediato y le ha informado que no realizará el promedio de huella de carbono en el siguiente colegio de la ciudad ya que está seguro de que este colegio tampoco superará 1 tonelada de CO₂ emitida al año por estudiante.'
            ],
            [
                'id_contexto' => 6,
                'texto' => 'Un padre de familia se encuentra preocupado porque su hija adolescente viene mostrando síntomas depresivos y cree que lo que ha originado estos estados mentales en su hija es estar constantemente conectada a las redes sociales. Por consiguiente, decide realizar una consulta en internet y encuentra que en la actualidad los estudios sobre la incidencia de la tecnología y las redes sociales en la depresión de niños y adolescentes viene en aumento, algunos de estos estudios sugieren que los adolescentes y adultos jóvenes que pasan más tiempo en plataformas como Instagram y Facebook mostraron una tasa de depresión sustancialmente más alta del 13 % al 66 %, que aquellos que pasan menos tiempo en ellas. Con base en lo anterior, el padre se convence de que la causa de la depresión de su hija es el uso de estas redes sociales y prohibirá en casa el uso de estas redes sociales para aliviar a su hija de la depresión.'
            ],
            [
                'id_contexto' => 7,
                'texto' => 'Una institución del gobierno nacional de tu país ha realizado varios estudios sobre la degradación de la sociedad y el cambio en el comportamiento de los adolescentes que escuchan frecuentemente un género musical cuyas canciones contienen letras que incitan al consumo de drogas, a la violencia o al sexo mal manejado. A partir de dicha información ha decidido adelantar acciones de participación ciudadana encaminadas a que la Ley Nacional de Música le otorgue facultades al Consejo Nacional de Música para que, una vez el Consejo tenga conocimiento de dichos estudios, prohíba la circulación de estas canciones en el territorio nacional y sancione y/o defina las multas para los responsables de dicha producción musical.'
            ],
            [
                'id_contexto' => 8,
                'texto' => 'Una compañera de estudio que consideras como amiga está tratando de decidir qué carrera profesional se ajusta más a su perfil y capacidades, ella necesita información para iniciar sus estudios universitarios y definir su futuro profesional luego de terminar la secundaria, de manera que logre emplearse prontamente luego de graduarse de la universidad para lograr pagar la financiación de sus estudios. Cuentas con los planes de estudio de dos programas académicos de dos universidades de muy buena reputación. Los asesores de ambas universidades afirman que las posibilidades de obtener un buen empleo al finalizar la carrera son amplias.'
            ],
            [
                'id_contexto' => 9,
                'texto' => 'Jesús David es un joven latinoamericano que sueña con ser astronauta y quiere mudarse a Merritt Island en Florida EE.UU. con la finalidad de ser admitido por la Administración Nacional de Aeronáutica y el Espacio, conocida por sus siglas en inglés como NASA. Él sabe que muy pocos latinoamericanos llegan a cumplir este sueño. Para prepararse en su trayecto a ser astronauta ha estado estudiando de manera autodidacta Ingeniería electrónica, Sistemas biológicos, Astronomía y Física en su ciudad de origen. Según la información con que cuenta, los aspirantes hispanos o latinos que lograron ingresar a la NASA han tenido que prepararse en estas áreas del conocimiento; de todo el personal que trabaja en la NASA (aproximadamente 17.373 personas) el 17% son hispanos o latinos. También es inteligente, disciplinado, se ejercita a diario y sueña en grande, factores importantes adicionales para llegar a ser astronauta.'
            ],
            [
                'id_contexto' => 10,
                'texto' => 'En una publicación electrónica aparece información acerca de los altos niveles actuales en la tasa de desempleo alrededor del mundo asociando los grandes desarrollos en Inteligencia Artificial de los últimos años. Allí se afirma que al ritmo que vamos los humanos nos quedaremos sin empleo y las máquinas dominarán industrias como la construcción, la manufactura, la producción metal mecánica y el diseño audiovisual en aproximadamente 80 años.'
            ],
            [
                'id_contexto' => 11,
                'texto' => 'El rector de un colegio se acerca a las aulas de clase y observa que los profesores están empleando juegos virtuales y didácticos para enseñar algunos temas a sus estudiantes. El rector se molesta y envía un comunicado a sus profesores indicando que «el tiempo de clase no debe ser utilizado para actividades de ocio».'
            ],
            [
                'id_contexto' => 12,
                'texto' => 'En un intento de reformar las reglas de un deporte ancestral que se practica en una población rural, un grupo de pobladores sugirió que algunos deportistas fueran incluidos en el Consejo Directivo que redacta la nueva reglamentación. El gobernador se opuso totalmente a esta idea, diciendo que «es como si los estudiantes de un colegio crearan las reglas de la institución educativa».'
            ],
            [
                'id_contexto' => 13,
                'texto' => 'A partir de los lineamientos técnicos de una entidad del Estado que regula las condiciones de prestación de servicio educativo de los colegios en lo relativo al manual de convivencia, los directivos de una institución educativa están debatiendo si deben permitir las muestras de afecto entre los estudiantes e impedir que haya enamoramientos con la finalidad de garantizar el respeto al ambiente escolar de aprendizaje. Un agente externo ha sido contratado por la institución educativa para que luego de un estudio detallado defina estas condiciones en el manual de convivencia. Un mes después, de construido el documento, dos estudiantes son sorprendidos por un coordinador de disciplina tomados de la mano por los pasillos del colegio y les expresa que como el nuevo manual de convivencia indica que se prohíben las muestras de afecto, debe sancionarlos inmediatamente. El caso llega a instancias como el Consejo de Padres y al Gobierno Estudiantil; de allí se desprende que los estudiantes de bachillerato deben promover la conciencia y el respeto por el ambiente escolar de aprendizaje participando en una mesa de formulación de propuestas para evitar que acontezcan este tipo de situaciones.'
            ],
            [
                'id_contexto' => 14,
                'texto' => 'Con el transcurrir del tiempo y el aumento de las actividades económicas del hombre, surgen fenómenos como el cambio climático que genera desastres como inundaciones, avalanchas y desprendimientos de tierra que afectan a las personas que viven a la orilla de ríos y en laderas de montaña. El director de la Unidad de Gestión del Riesgo de la localidad ha decidido que para la próxima temporada de lluvias todas las familias y personas que habiten en estas zonas deben desalojar sus viviendas por razones de prevención, a excepción de aquellas familias que no se encuentren en vulnerabilidad. Como consecuencia, las comunidades han comenzado a preocuparse y a enviar comunicados de toda índole a la Unidad de Gestión del Riesgo porque no saben cómo comenzar a actuar.'
            ],
            [
                'id_contexto' => 15,
                'texto' => 'En una investigación que han desarrollado los científicos de un país suramericano se logró demostrar que, a mayor uso de preservativos y tratamientos anticonceptivos, mayor cantidad de población saludable y menor crecimiento de la economía. Con base en lo anterior, el gobierno nacional decidió formular una política pública que estimula el desuso de los anticonceptivos y promueve la natalidad otorgando incentivos económicos a las parejas que decidan tener hijos, con el argumento de que el uso de anticonceptivos, y por ende el decrecimiento poblacional, estaba generando un estancamiento en la economía.'
            ],
            [
                'id_contexto' => 16,
                'texto' => 'Existen muchas tribus urbanas en grandes y pequeñas ciudades. La diversidad cultural en la urbe parece estar expresando un descontento y una forma de resistir a las imposiciones y estereotipos del capitalismo globalizante. En las calles se encuentran tribus con algunas décadas de historia como los Hippies, Punks, Góticos y Raperos, y otras un poco más recientes como los Hipsters, Emos, Rastafaries, Frikis, Skaters, Muppies, Pokemones, Reggaetoneros y Grunges; cada cultura suburbana se caracteriza por un tipo de música y forma de vestir particular. Por supuesto, puede haber otras formas de resistir a los estereotipos del capitalismo, o estas culturas pueden representar formas diversas de libertad de expresión.'
            ],

        ]);
    }
}
