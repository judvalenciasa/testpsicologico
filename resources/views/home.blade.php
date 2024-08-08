<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cognitive Sparks | Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">

    <!-- Incluir el header -->
    @include('shared.header')

    <section class="banner_section">
        <div class="banner_ctn">
            <div class="title">
                <h1>¿Qué es <br> Cognitive Spark?</h1>
            </div>
            <div class="text">
                <p>Es una prueba de pensamiento crítico diseñada específicamente para adolescentes. Esta herramienta evaluativa se centra en medir el nivel de desempeño del pensamiento crítico. CognitiveSpark busca no solo evaluar, sino también inspirar y activar el potencial mental de los jóvenes, preparando a la próxima generación para enfrentar desafíos complejos con agudeza y creatividad.
                </p>
            </div>
        </div>
    </section>

</body>

</html>