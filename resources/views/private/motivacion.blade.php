<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Encuesta de Motivación</title>
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
            <h3> Bienvenido(a) a la prueba de pensamiento crítico Cognitive Spark
                Aquí iniciarás a responder un total de 60 ítems de pensamiento crítico y 120 ítems sobre metacognición.

                Antes de iniciar con la prueba de pensamiento crítico, es importante que respondas la siguiente encuesta sobre motivación. Lee cuidadosamente cada una de las afirmaciones y usa la escala para responder a tu respuesta que puede ir desde Nada cierto en mi (1) hasta Totalmente cierto en mi (7).
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
                    <p>1. En una prueba como esta, prefiero que el contenido sea realmente desafiante para que pueda estimular mi pensamiento crítico.</p>

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
                    <p>2. Obtener una buena puntuación en esta prueba es la cosa más satisfactoria para mí en este momento.</p>

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
                    <p>3. En una prueba como esta, prefiero preguntas que despierten mi curiosidad, incluso si requiero esfuerzo al responder.</p>

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
                    <p>4. Mi principal interés en esta prueba es obtener una buena puntuación que me ubique entre los promedios más altos.</p>

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
                    <p>5. Lo más satisfactorio para mí en esta prueba es tratar de entender el contenido tan a fondo como sea posible.</p>

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
                    <p>6. Si puedo, quiero obtener mejores puntuaciones en esta prueba que la mayoría de mis compañeros.</p>

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
                    <p>7. Si tuviera la oportunidad en esta prueba, elegiría preguntas que me permitan pensar críticamente ante nuevas situaciones, aunque no me garanticen buenas puntuaciones.</p>

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
                    <p>8. Quiero hacerlo bien en esta prueba porque es importante para mí demostrar mi habilidad a mi familia, amigos, compañeros o personas de mi contexto cercano.</p>

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