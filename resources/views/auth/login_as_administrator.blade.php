<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Inicio de sesión</title>

    <!-- Styles -->
    <link href="{{ asset('css/loginadministrator.css') }}" rel="stylesheet">

</head>

<body class="antialiased">

    @include('shared.header')


    <section class="container">
        <h1>Login</h1>
        <div class="underline"></div>
        <p>Si eres usuario administrador</p>
    </section>
</body>

</html>