<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CognitiveSparks | Registro</title>

    <!-- Styles -->
    <link href="{{ asset('css/loginadministrator.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="container">
        <div class="text_ctn">
            <h1>Registro</h1>
            <div class="underline"></div>
        </div>

        <div class="form_ctn">
            @csrf

            <div class="input-group">
                <input required type="text" name="name" id="name" autocomplete="off" class="input">
                <label class="user-label">Nombre Completo</label>
                <span class="error-message" id="nombre-error"></span>
            </div>
            <div class="input-group">
                <input required type="email" name="email" id="email" autocomplete="off" class="input">
                <label class="user-label">Correo Electrónico</label>
                <span class="error-message" id="email-error"></span>
            </div>
            <div class="input-group">
                <input required type="password" name="password" id="password" autocomplete="off" class="input">
                <label class="user-label">Contraseña</label>
                <span class="error-message" id="password-error"></span>
            </div>

            <div class="input-group">
                <input required type="text" name="pin" id="pin" autocomplete="off" class="input">
                <label class="user-label">Pin</label>
                <span class="error-message" id="pin-error"></span>
            </div>
            <div class="input-group">
                <input type="checkbox" id="show-password">
                <span class="span_mostrar_pin" for="show-pin">Mostrar Contraseña</span>
            </div>
            <button type="submit" id="submit-btn" data-route="{{ route('registrar') }}">
                <span>Registrarse</span>
            </button>
        </div>

    </section>
    <script src="{{ asset('js/pages/register.js') }}"></script>
    @include('shared.footer')

</body>

</html>