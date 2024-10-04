<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CognitiveSparks | Encuesta de Motivación</title>
    <!-- token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/caracterizacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/motivacion.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    @include('shared.header')

    <section class="caracterizacion_section">
        <div class="encabezado_ctn">
            <h3> Bienvenido(a) a la prueba de pensamiento crítico <span>CognitiveSpark</span>
                <br><br>
                Responderás un total de 60 preguntas y 32 subpreguntas (de menor esfuerzo mental que las preguntas principales) sobre pensamiento crítico, y al final, 26 ítems sobre metacognición. Te invitamos a mantener la calma y la concentración durante el proceso.
                <br><br>
                Antes de iniciar con la prueba de pensamiento crítico, es importante que respondas la siguiente encuesta sobre motivación. Lee cuidadosamente cada una de las afirmaciones y utiliza la escala para indicar tu respuesta, que puede ir desde Nada cierto en mí (1) hasta Totalmente cierto en mí (7).
            </h3>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form id="metacognicionForm" class="metacognicionForm" action="{{ route('guardar.motivacion') }}" method="POST">
            @csrf
            <!-- Categoria: Motivación Intrinseca -->
            <div class="category_ctn" data-category="motivacion_intrinseca">
                <div class="pregunta_ctn">
                    <p>1. En la actividad que realizaré a continuación, prefiero que el contenido sea mentalmente desafiante.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="2">
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-1" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Extrinseca -->
            <div class="category_ctn" data-category="motivacion_extrinseca">

                <div class="pregunta_ctn">
                    <p>2. Obtener una buena puntuación en la actividad que realizaré a continuación es una meta que me he propuesto en este momento.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="2">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-1" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>


            </div>

            <!-- Categoria: Motivación Intrinseca -->
            <div class="category_ctn" data-category="motivacion_intrinseca">
                <div class="pregunta_ctn">
                    <p>3. En la actividad que realizaré a continuación, prefiero preguntas que despierten mi curiosidad, aunque requieran esfuerzo al responder.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="2">
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-2" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Extrinseca -->
            <div class="category_ctn" data-category="motivacion_extrinseca">
                <div class="pregunta_ctn">
                    <p>4. Desde el inicio, me he comprometido a dar lo mejor de mí en la actividad que realizaré a continuación para alcanzar altas puntuaciones y niveles de desempeño.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="2">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-2" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Intrinseca -->
            <div class="category_ctn" data-category="motivacion_intrinseca">
                <div class="pregunta_ctn">
                    <p>5. Para mí es satisfactorio que en la actividad que realizaré a continuación se pueda entender a fondo el contenido.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="2">
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-3" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Extrinseca -->
            <div class="category_ctn" data-category="motivacion_extrinseca">
                <div class="pregunta_ctn">
                    <p>6. Otra de las metas que me he fijado en la actividad que realizaré a continuación es obtener puntuaciones más altas que las de mis compañeros.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="2">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-3" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Intrinseca -->
            <div class="category_ctn" data-category="motivacion_intrinseca">
                <div class="pregunta_ctn">
                    <p>7. Si en la actividad que realizaré a continuación tengo la oportunidad, elegiré las estrategias que me ayuden a mejorar mis habilidades del pensamiento al responder las preguntas, aunque no me garanticen buenas puntuaciones.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="2">
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_intrinseca-4" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Categoria: Motivación Extrinseca -->
            <div class="category_ctn" data-category="motivacion_extrinseca">
                <div class="pregunta_ctn">
                    <p>8. El resultado que obtenga en la actividad que realizaré a continuación es importante para mí, ya que me permitirá demostrar mis habilidades a mis familiares, amigos y profesores.</p>

                    <!-- Tabla para las opciones -->
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="1">
                                    Nada cierto en mi
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="2">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="3">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="4">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="5">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="6">

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input required type="radio" name="motivacion_extrinseca-4" value="7">
                                    Totalmente cierto en mi
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <button class="send_btn" type="submit">Continuar</button>
        </form>


    </section>

    @include('shared.footer')



</body>

</html>