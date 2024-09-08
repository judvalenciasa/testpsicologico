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
                'texto' => 'Gilberto es un joven que no se pierde participación en un torneo de videojuegos que se lleva a cabo en su ciudad desde hace 5 años. Recientemente se dio a conocer a las personas que suelen participar en el evento que el gobierno local destinará recursos económicos para que el certamen de este año cuente con mejores instalaciones y equipos de última generación, bajo la condición de contar con la participación de mujeres en al menos un 50%. En la primera hora de las tres jornadas diarias de inscripción, que se llevarán a cabo durante un mes antes del evento, Gilberto observó que coincidió con cuatro participantes al momento de llenar los formularios y que tres de esos eran mujeres. Basado en esta observación Gilberto declara en uno de los medios de comunicación que este año las consolas, pantallas, sonido, sillas e instalaciones en general serán mejores que las de los anteriores eventos. '
            ],
            [
                'id_contexto' => 2,
                'texto' => 'En una de esas conversaciones familiares que se dan una tarde de vacaciones un primo tuyo expresa que la humanidad está siendo engañada desde hace siglos y que el planeta Tierra en realidad es plano y no redondo; según él esto se debe a que ciertos gobiernos y la ciencia operan articuladamente con la finalidad de dominar a gran parte de la humanidad. Algunos de los familiares hablan al respecto defendiendo ambas posturas.'
            ],
            [
                'id_contexto' => 3,
                'texto' => 'Mariana debió hacer una exposición en una de las clases de su colegio en la que presentó las principales características culturales del continente asiático. Una vez se adentra a desarrollar la exposición comienza a leer las diapositivas afirmando que en países como India, Pakistán, Nepal y Bangladesh es común el matrimonio infantil debido a factores socioeconómicos, culturales y al difícil cumplimiento de las normas. Al finalizar la exposición Mariana concluye que en Asia es normal que los niños contraigan matrimonio y el no cumplimiento de las leyes. La profesora felicita a Mariana por su compromiso con la exposición, no obstante, le indica en privado que debe hacerle algunas recomendaciones y bajarle un punto en la nota. Mariana responde con asombro que no entiende el porqué de la decisión de la maestra.'
            ],
            [
                'id_contexto' => 4,
                'texto' => 'Una empresa de empaques plásticos ofrece una vacante para trabajar en el área de proyección sostenible con la posibilidad de cubrir los gastos de estudios universitario en gestión o ingeniería ambiental. Uno de los requisitos es responder a la siguiente situación técnica de la empresa. La empresa necesita transitar urgentemente de los plásticos fabricados con derivados del petróleo a plásticos amigables con el medio ambiente y ha observado que otras empresas del sector que producen o importan materia prima biodegradable para ser usada en sus productos están diversificando sus inventarios y ofrecen rápidamente distintos empaques plásticos biodegradables en el mercado a excelentes precios ¿Crees que al realizar importaciones de la materia prima y/o al producirla, se garantiza que la empresa obtenga resultados similares a los de las demás empresas?'
            ],
            [
                'id_contexto' => 5,
                'texto' => 'En un estudio sobre desarrollo humano sostenible que realiza un organismo multilateral, se ha planteado la necesidad de conocer el impacto ambiental de los adolescentes que habitan en algunas de las ciudades qué más contaminan en el continente; en ese sentido, un experto ha sido designado para promediar la huella de carbono anual (totalidad de gases de efecto invernadero emitidos por efecto directo o indirecto de un individuo) de los estudiantes de distintos colegios. Luego de una larga trayectoria y recorrido extenuante por diferentes ciudades y colegios, el experto observa que los adolescentes de tres colegios a los que les ha realizado el promedio en una ciudad determinada no emiten más de 1 tonelada de CO₂, por estudiante al año; en consecuencia, el experto se ha comunicado con su jefe inmediato y le ha informado que no realizará el promedio de huella de carbono en el siguiente colegio de la ciudad ya que está seguro de que este colegio tampoco superará 1 tonelada de CO₂ emitida al año por estudiante.'
            ],
            [
                'id_contexto' => 6,
                'texto' => 'Un padre de familia se encuentra preocupado porque su hija adolescente viene mostrando síntomas depresivos y cree que lo que ha originado estos estados mentales en su hija es estar constantemente conectada a las redes sociales. Por consiguiente, decide realizar una consulta en internet y encuentra que en la actualidad los estudios sobre la incidencia de la tecnología y las redes sociales en la depresión de niños y adolescentes viene en aumento, algunos de estos estudios sugieren que los adolescentes y adultos jóvenes que pasan más tiempo en plataformas como Instagram y Facebook mostraron una tasa de depresión sustancialmente más alta del 13 % al 66 %, que aquellos que pasan menos tiempo en ellas. Con base en lo anterior, el padre se convence de que la causa de la depresión de su hija es el uso de estas redes sociales y prohibirá en casa el uso de estas redes sociales para aliviar a su hija de la depresión.'
            ],
            [
                'id_contexto' => 7,
                'texto' => 'Una institución del gobierno nacional de tu país ha realizado varios estudios sobre la degradación de la sociedad y el cambio en el comportamiento de los adolescentes que escuchan frecuentemente un género musical, cuyas canciones contienen letras que incitan al consumo de drogas, a la violencia o al sexo desbordado. A partir de dicha información esta institución ha decidido adelantar acciones de participación ciudadana encaminadas a que la Ley Nacional de Música le otorgue facultades al Consejo Nacional de Música para que, una vez el Consejo tenga conocimiento de dichos estudios, prohíba la circulación de estas canciones en el territorio nacional, sancione y/o defina las multas para los responsables de dicha producción musical.'
            ],
            [
                'id_contexto' => 8,
                'texto' => 'Una compañera de estudio que consideras como amiga está tratando de decidir qué carrera profesional se ajusta más a su perfil y capacidades, ella necesita información para iniciar sus estudios universitarios y definir su futuro profesional luego de terminar la secundaria, de manera que logre emplearse prontamente luego de graduarse de la universidad para lograr pagar la financiación de sus estudios. Cuentas con los planes de estudio de dos programas académicos de dos universidades de muy buena reputación. Los asesores de ambas universidades afirman que las posibilidades de obtener un buen empleo al finalizar la carrera son amplias.'
            ],
            [
                'id_contexto' => 9,
                'texto' => 'Jesús David es un joven latinoamericano que sueña con ser astronauta y quiere mudarse a Merritt Island en Florida EE.UU. con la finalidad de ser admitido por la Administración Nacional de Aeronáutica y el Espacio, conocida por sus siglas en inglés como NASA. Él sabe que muy pocos latinoamericanos llegan a cumplir este sueño. Para prepararse en su trayecto a ser astronauta ha estado estudiando de manera autodidacta Ingeniería electrónica, Sistemas biológicos, Astronomía y Física en su ciudad de origen. Según la información con que cuenta, los aspirantes hispanos o latinos que lograron ingresar a la NASA han tenido que prepararse en estas áreas del conocimiento; de todo el personal que trabaja en la NASA aproximadamente 17 personas de cada 100 son hispanos o latinos. También es inteligente, disciplinado, se ejercita a diario y sueña en grande, factores importantes adicionales para llegar a ser astronauta.'
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
                'texto' => 'A partir de los lineamientos técnicos de una entidad del Estado que regula las condiciones de prestación de servicio educativo de los colegios en lo relativo al manual de convivencia, los directivos de una institución educativa están debatiendo si deben permitir las muestras de afecto entre los estudiantes e impedir que haya enamoramientos con la finalidad de garantizar el respeto al ambiente escolar de aprendizaje. Un agente externo ha sido contratado por la institución educativa para que luego de un estudio detallado defina estas condiciones en el manual de convivencia. Un mes después de construido el documento del manual de convivencia y puesto en marcha, dos estudiantes son sorprendidos por el coordinador de disciplina tomados de la mano por los pasillos del colegio, quien les expresa lo siguiente: «como el nuevo manual de convivencia indica que se prohíben las muestras de afecto ¡Ustedes dos deben ser sancionados de inmediato!». El caso llega a instancias como el Consejo de Padres y al Gobierno Estudiantil; allí se decide que los estudiantes de bachillerato deben promover la conciencia y el respeto por el ambiente escolar de aprendizaje participando en una mesa de formulación de propuestas para evitar que acontezcan este tipo de situaciones.'
            ],
            [
                'id_contexto' => 14,
                'texto' => 'Con el transcurrir del tiempo y el aumento de las actividades económicas del hombre, surgen fenómenos como el cambio climático que genera desastres como inundaciones, avalanchas y desprendimientos de tierra que afectan a las personas que viven a la orilla de ríos y en laderas de montaña. El director de la Unidad de Gestión del Riesgo de la localidad ha informado a las comunidades que para la próxima temporada de lluvias todas las familias y personas que habiten en orillas de ríos y laderas de montaña deben desalojar sus viviendas por razones de prevención, a excepción de aquellas familias que no se encuentren en vulnerabilidad. Como consecuencia, las comunidades han comenzado a preocuparse y a enviar comunicados de toda índole a la Unidad de Gestión del Riesgo porque no saben cómo comenzar a actuar.'
            ],
            [
                'id_contexto' => 15,
                'texto' => 'En una investigación que han desarrollado los científicos de un país suramericano se logró demostrar que, a mayor uso de preservativos y tratamientos anticonceptivos, mayor cantidad de población saludable y menor crecimiento de la economía. Con base en lo anterior, el gobierno nacional decidió formular una política pública (conjunto de decisiones del gobierno encaminadas a solucionar una problemática pública) que estimula el desuso de los anticonceptivos y promueve la natalidad otorgando incentivos económicos a las parejas que decidan tener hijos, con el argumento de que el uso de anticonceptivos, y por ende el decrecimiento poblacional, estaba generando un estancamiento en la economía.'
            ],
            [
                'id_contexto' => 16,
                'texto' => 'Existen muchas tribus urbanas (grupo de individuos generalmente jóvenes o adolescentes, que comparten una forma cotidiana de vestir, un lenguaje propio y en general una serie de hábitos y gustos de consumo, propios de un ambiente moderno y citadino en grandes) en grandes y pequeñas ciudades. La diversidad cultural en la urbe parece estar expresando un descontento y una forma de resistir a las imposiciones y estereotipos del capitalismo globalizante. En las calles se encuentran tribus con algunas décadas de historia como los Hippies, Punks, Góticos y Raperos, y otras un poco más recientes como los Hipsters, Emos, Rastafaries, Frikis, Skaters, Muppies, Pokemones, Reggaetoneros y Grunges; cada cultura suburbana se caracteriza por un tipo de música y forma de vestir particular. Por supuesto, puede haber otras formas de resistir a los estereotipos del capitalismo, o estas culturas pueden representar formas diversas de libertad de expresión.'
            ],
            [
                'id_contexto' => 17,
                'texto' => 'La profesora de uno de los proyectos transversales de tu colegio realiza un debate con sus estudiantes en el que se aborda un asunto en particular y es que algunos gobiernos latinoamericanos están considerando una nueva política pública de desarrollo sostenible: que cada gobierno local debe iniciar un proceso riguroso de descontaminación y conservación de al menos 3 de los grandes ríos de su territorio nacional, antes de terminar su mandato.'
            ],
            [
                'id_contexto' => 18,
                'texto' => 'Debido a algunos casos de abusos y percepción de peligro e inseguridad que se ha estado presentado en una zona rural de un municipio, un grupo de lideresas está planeando estrategias que involucren a la comunidad en general para que los niños, niñas y mujeres de varias veredas de la zona puedan desplazarse tranquilamente por los caminos y senderos sin sentir temor de ser agredidos sexualmente o de cualquier otra manera por malhechores o delincuentes que se camuflan en áreas boscosas. Sin embargo, uno que otro miembro de la comunidad manifiesta que no colaborará de ninguna manera puesto que no es su deber informar sobre cualquier persona o situación sospechosa que observe en la zona.'
            ],
            [
                'id_contexto' => 19,
                'texto' => 'En la era digital las formas de interacción social han cambiado de forma sustancial debido a la aparición sistemática de plataformas como las de las redes sociales en las cuales interactúan sus usuarios, de ahí que los entornos virtuales sean motivo de análisis por parte de expertos en la materia. Por lo tanto, un gurú de las tecnologías y plataformas digitales sugiere que «si los influenciadores que utilizan una plataforma de contenido digital en específico están haciendo muy bien su trabajo al innovar, como resultado se tiene que la cantidad de usuarios de esta plataforma reflejará una gran aceptación de la plataforma en un país determinado». Observas que la cantidad de usuarios de una plataforma determinada presenta unos niveles elevados sin precedentes en tu país.'
            ],
            [
                'id_contexto' => 20,
                'texto' => 'Los compañeros de trabajo de una empresa de creación de productos se encontraban conversando acerca de uno de los platos más exquisitos, codiciados y costosos que dinamizan la economía de la industria gastronómica en China, y, de hecho, además de tener matices ancestrales, representa la bonanza económica en ese país asiático; se trata de la sopa de aleta de tiburón, a la cual se atribuyen aportes a la piel sana y al detenimiento del envejecimiento. Algunos de ellos expresaron su preocupación por la extinción de estos animales que son asesinados sólo para obtener esta parte de su cuerpo y preparar dicho plato tan apetecido, otros, como Rafael, uno de ellos, exclamó: “¡Es hora de crear un producto para la industria cosmética a partir de las propiedades que contiene la aleta de tiburón!”.'
            ],
            [
                'id_contexto' => 21,
                'texto' => 'Una joven reconocida por su belleza tiene varios pretendientes en la universidad, pero ella no se decide a salir con ninguno de ellos. En una conversación con sus amigas ella les dice que, desafortunadamente, si acepta salir con uno de ellos tendrá que aceptar salir con todos los demás, lo cual no está en sus planes.'
            ],
            [
                'id_contexto' => 22,
                'texto' => 'En una pequeña comunidad, hay un debate sobre la construcción de un nuevo parque ecológico que beneficiaría tanto al medio ambiente como a los habitantes locales. Este parque incluiría áreas verdes, un jardín botánico y espacios recreativos para familias y estudiantes de la escuela local. Durante una reunión comunitaria, algunos vecinos expresaron su preocupación sobre el impacto ambiental positivo y la mejora en la calidad de vida. Sin embargo, una madre preocupada argumentó: «Si permitimos la construcción de este parque, pronto querrán construir más parques y eventualmente toda la zona se convertirá en un área urbana congestionada, destruyendo nuestro vecindario tranquilo y afectando la vida de nuestros hijos».'
            ],
            [
                'id_contexto' => 23,
                'texto' => 'Gracias a las excelentes puntuaciones que obtuvo Pepito en las pruebas de Estado de su país, una Universidad no muy reconocida de un país de habla inglesa le ha ofrecido una beca del 90% que cubre los costos de matrícula y manutención para estudiar una ingeniería. Es una excelente oportunidad debido a que la familia de Pepito cuenta con muy pocos recursos económicos, y estudiar una ingeniería en un país como estos es uno de sus sueños. En caso de aceptar la beca Pepito debe transferir el 10% del dinero a la Universidad, correspondiente a los costos del primer semestre y a los gastos de manutención. '
            ],
            [
                'id_contexto' => 24,
                'texto' => 'En un país con una joven democracia, se ha lanzado una iniciativa para promover la participación ciudadana en la toma de decisiones políticas. Se está considerando un nuevo proyecto de ley que busca fortalecer los derechos humanos y mejorar las condiciones de vida de los ciudadanos más vulnerables. Margarita, una estudiante universitaria comprometida con la defensa de los Derechos Humanos y miembro activo de varias organizaciones comunitarias, debe decidir si apoyará públicamente este proyecto de ley. Aunque está entusiasmada por la posibilidad de cambio positivo, ha escuchado rumores sobre posibles intereses ocultos detrás del proyecto. Para tomar una decisión informada, Margarita sabe que debe investigar más a fondo y evaluar las fuentes de información disponibles.'
            ],
            [
                'id_contexto' => 25,
                'texto' => 'Supongamos que eres un deportista de alto rendimiento, haces parte de la liga de tu ciudad y te enteras de que tu amigo, quien también practica este deporte en la misma liga, está consumiendo sustancias psicoactivas recientemente. Tu amigo no es consciente de lo que esto representa para su rendimiento, y estás preocupado porque ambos comenzarán las justas nacionales dentro de un mes y habrá pruebas antidopaje y de rendimiento físico y mental. El amigo no ha respondido a tus insinuaciones sobre su problema con estas sustancias. Hasta donde sabes, nadie más sabe de esta situación, aunque el entrenador parece sospechar.'
            ],
            [
                'id_contexto' => 26,
                'texto' => 'Supongamos que eres un estudiante de secundaria y tu madre trabaja en una empresa de tecnología que ha desarrollado un nuevo dispositivo portátil de inteligencia artificial diseñado para la seguridad personal. Este dispositivo se ha implementado recientemente en tu comunidad para ayudar a las personas a moverse con mayor seguridad por la ciudad. Sin embargo, te das cuenta de que el dispositivo tiene un problema técnico que podría permitir a terceros acceder y rastrear la ubicación de los usuarios sin su consentimiento. Te enteras de que un amigo cercano ha comenzado a recibir mensajes amenazantes, y sospechas que estos mensajes podrían estar relacionados con el uso del dispositivo. Tu amigo está preocupado por su seguridad física y no quiere informar a las autoridades porque teme que el problema del dispositivo sea más grave de lo que parece y que esto pueda causar un escándalo público que involucre a tu familia.'
            ],
            [
                'id_contexto' => 27,
                'texto' => 'Imagina que estás en el último día de clases en el colegio y para aprobar el año escolar debes sustentar un proyecto de robótica en el que has trabajado arduamente desarrollando un prototipo de una tabla de dibujo táctil, al llegar al colegio te enteras de que en el trayecto perdiste el manual con el cual realizarás la sustentación de manera detallada. '
            ],
            [
                'id_contexto' => 28,
                'texto' => 'Imagina que trabajas como voluntario en un proyecto comunitario en tu ciudad que se dedica a preservar el hábitat natural de una especie de ave en peligro de extinción. Tu comunidad ha estado enfrentando problemas con la destrucción del hábitat debido a la construcción de nuevos edificios cerca de las áreas naturales. La empresa constructora ha propuesto un plan para minimizar el impacto ambiental, pero el plan no ha sido evaluado adecuadamente en cuanto a su efectividad para proteger a las aves. Como parte del equipo de conservación, tu tarea es evaluar el plan propuesto y sugerir alternativas que puedan ser más efectivas en la protección del hábitat de las aves y la preservación del ecosistema.'
            ],
            [
                'id_contexto' => 29,
                'texto' => 'Imagina que has sido seleccionado por el Maestro de la banda musical de tu colegio como el líder de tus compañeros en un certamen nacional de bandas sinfónicas estudiantiles que tiene lugar en las tarimas de distintas poblaciones; tu misión es apoyar el proceso y alentar a tus compañeros a ganarse el título como la mejor banda musical del país. El ánimo de tus compañeros está por el piso, han obtenido malas puntuaciones en las últimas dos presentaciones, al parecer se está propagando un virus que está afectando sus vías respiratorias y se encuentran agotados luego de viajar cientos de kilómetros por varias semanas. '
            ],
            [
                'id_contexto' => 30,
                'texto' => 'Un comité de salud pública está trabajando en políticas para mejorar la salud y aumentar la expectativa de vida en varias ciudades. Los principales problemas identificados son el acceso limitado a servicios de salud y la mala calidad del aire. Tu tarea es proponer políticas innovadoras que no solo enfrenten estos problemas, sino que también aseguren que las personas puedan vivir vidas largas y saludables.'
            ],

        ]);
    }
}
