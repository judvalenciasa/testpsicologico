<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Encuesta de Metacognición</title>
    <!-- token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/caracterizacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metacognicion.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    @include('shared.header')

    <section class="caracterizacion_section">
        <div class="encabezado_ctn">
            <h3>Felicitaciones, has terminado las preguntas de pensamiento crítico. Para finalizar, en relación con la prueba que acabas de culminar, te invitamos a responder de la manera más honesta a las siguientes afirmaciones.
            </h3>
            <h3> <span>Indicaciones:</span> Lee cuidadosamente cada una de las afirmaciones y usa la escala de 1 a 5 en donde 1 es completamente en desacuerdo; 2 es en desacuerdo; 3 es Ni de acuerdo ni en desacuerdo; 4 de acuerdo y 5 completamente de acuerdo.
            </h3>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form id="metacognicionForm" class="metacognicionForm" action="{{ route('reporte.crear') }}" method="POST">
            @csrf
            <!-- Categoria: Conocimiento Procedimental -->
            <div class="category_ctn" data-category="conocimiento_procedimental">
                <div class="pregunta_ctn">
                    <p>Soy consciente de las estrategias que utilicé para responder la anterior prueba.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="conocimiento_procedimental-1" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="conocimiento_procedimental-1" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="conocimiento_procedimental-1" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="conocimiento_procedimental-1" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="conocimiento_procedimental-1" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Planificación -->
            <div class="category_ctn" data-category="planificacion">

                <!-- Primera pregunta -->
                <div class="pregunta_ctn">
                    <p>Pensé en lo que realmente necesitaba comprender antes de responder al ítem.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-1" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-1" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-1" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-1" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-1" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Segunda pregunta -->
                <div class="pregunta_ctn">
                    <p>Me propuse el objetivo de pensar críticamente antes de responder al ítem.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-2" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-2" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-2" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-2" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-2" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Tercera pregunta -->
                <div class="pregunta_ctn">
                    <p>Me hice preguntas sobre el tema antes de responder al ítem.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-3" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-3" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-3" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-3" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-3" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Cuarta pregunta -->
                <div class="pregunta_ctn">
                    <p>Pensé en distintas maneras de resolver el ítem y escogí la mejor.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-4" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-4" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-4" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-4" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-4" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Quinta pregunta -->
                <div class="pregunta_ctn">
                    <p>Leí cuidadosamente los enunciados antes de seleccionar el más acertado.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-5" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-5" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-5" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-5" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="planificacion-5" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <!-- Categoria: Organización -->
            <div class="category_ctn" data-category="organizacion">

                <!-- Séptima pregunta -->
                <div class="pregunta_ctn">
                    <p>Soy consciente de las estrategias que utilicé para responder la anterior prueba.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-7" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-7" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-7" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-7" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-7" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Octava pregunta -->
                <div class="pregunta_ctn">
                    <p>Una estrategia que utilicé para responder a este tipo de preguntas es inventar mis propios ejemplos para poder entender mejor la información.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-8" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-8" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-8" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-8" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-8" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Novena pregunta -->
                <div class="pregunta_ctn">
                    <p>Utilicé la estructura y la organización del texto para comprender mejor las preguntas.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-9" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-9" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-9" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-9" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-9" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Décima pregunta -->
                <div class="pregunta_ctn">
                    <p>Me pregunté si lo que estaba leyendo estaba relacionado con lo que ya sabía.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-10" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-10" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-10" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-10" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-10" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Onceava pregunta -->
                <div class="pregunta_ctn">
                    <p>Me fijé más en el sentido global que en el específico.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-11" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-11" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-11" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-11" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="organizacion-11" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>


            <!-- Categoria: Conocimiento Monitoreo -->
            <div class="category_ctn" data-category="monitoreo">

                <!-- Doce pregunta -->
                <div class="pregunta_ctn">
                    <p>Me pregunté constantemente si estaba alcanzando mis metas.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-12" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-12" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-12" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-12" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-12" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Treceava pregunta -->
                <div class="pregunta_ctn">
                    <p>Pensé en las distintas alternativas de respuesta antes de responder a la pregunta.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-13" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-13" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-13" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-13" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-13" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Catorceava pregunta -->
                <div class="pregunta_ctn">
                    <p>Leí en varias oportunidades para ayudarme a entender relaciones importantes.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-14" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-14" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-14" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-14" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-14" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Quinceava pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando estaba respondiendo al ítem, me detuve en algún momento para saber si estaba entendiendo.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-15" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-15" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-15" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-15" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-15" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Dieciseisava pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando leí los contextos y preguntas me pregunté si entendí bien o no lo que se planteaba en ambos.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-16" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-16" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-16" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-16" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="monitoreo-16" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>


            <!-- Categoria: Conocimiento Depuración -->
            <div class="category_ctn" data-category="depuracion">

                <!-- Diecisieteava pregunta -->
                <div class="pregunta_ctn">
                    <p>Procuré avanzar y/o tomar una pausa cuando no entendía algo.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-17" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-17" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-17" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-17" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-17" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Dieciochoava pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando no logré entender un problema o situación cambié de estrategias.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-18" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-18" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-18" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-18" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-18" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Diecinueveava pregunta -->
                <div class="pregunta_ctn">
                    <p>Si estaba confundido(a), me pregunté si lo que suponía era correcto o no.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-19" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-19" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-19" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-19" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-19" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veinteava pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando la información era confusa, me detuve y la repasé.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-20" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-20" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-20" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-20" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-20" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veintiunava pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando estaba confundido, me detuve, releí y corregí mi respuesta.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-21" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-21" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-21" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-21" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="depuracion-21" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>


            <!-- Categoria: Conocimiento Evaluación -->
            <div class="category_ctn" data-category="evaluacion">

                <!-- Veintidós pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando terminé de responder cada pregunta supe cómo me había ido.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-22" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-22" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-22" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-22" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-22" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veintitrés pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando terminé de responder a cada pregunta me pregunté si había una alternativa o respuesta más acertada.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-23" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-23" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-23" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-23" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-23" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veinticuatro pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando terminé de responder a cada pregunta me pregunté hasta qué punto había conseguido mis objetivos.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-24" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-24" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-24" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-24" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-24" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veinticinco pregunta -->
                <div class="pregunta_ctn">
                    <p>Después de responder a cada pregunta me pregunté si tuve en cuenta todas las opciones.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-25" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-25" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-25" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-25" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-25" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Veintiséis pregunta -->
                <div class="pregunta_ctn">
                    <p>Cuando terminé de responder al ítem me pregunté si había empleado mis habilidades al máximo posible.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-26" value="1">
                                    Completamente en desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-26" value="2">
                                    En desacuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-26" value="3">
                                    Ni en desacuerdo ni de acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-26" value="4">
                                    De acuerdo
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="evaluacion-26" value="5">
                                    Completamente de acuerdo
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>


            <button class="send_btn" type="submit">Terminar</button>
        </form>


    </section>

    @include('shared.footer')

    <script>
        // Detener el cronómetro cuando se haga clic en "Terminar Prueba"
        document.getElementById('terminarBtn').addEventListener('click', function() {
            clearInterval(intervalo); // Detener el cronómetro
            document.getElementById('tiempoTotalInput').value = tiempoTotal; // Guardar el tiempo total en el input oculto
        });
    </script>

</body>

<!-- <script>
    document.getElementById('metacognicionForm').addEventListener('submit', function(event) {
        //event.preventDefault(); // Prevenimos el envío normal del formulario solo si se usa fetch

        const form = event.target;
        const categories = {};

        // Recorrer todas las preguntas del formulario
        form.querySelectorAll('div[data-category]').forEach(categoryDiv => {
            const category = categoryDiv.getAttribute('data-category');
            let totalPoints = 0;
            let questions = 0;

            // Contar las preguntas dentro de cada categoría
            categoryDiv.querySelectorAll('input[type="radio"]:checked').forEach(input => {
                totalPoints += parseInt(input.value, 10);
                questions += 1;
            });

            // Guardar el total de puntos por categoría
            if (questions > 0) {
                categories[category] = totalPoints;
            }
        });

        // Obtener el token CSRF del meta tag
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


        // Enviar los datos al servidor usando fetch
        /* fetch('/informe/crear_reporte', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify(categories) // Enviamos solo las categorías
            })
            .then(response => response.json())
            .then(data => {
                if (data.redirect_url) {
                    // Redirigir a la vista reporte.index
                    window.location.href = data.redirect_url;
                }
                console.log('Puntajes guardados exitosamente', data);
            })
            .catch(error => {
                console.error('Error al guardar puntajes:', error);
            }); */
    });
</script> -->

</html>