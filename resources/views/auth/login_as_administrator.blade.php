<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cognitive Sparks | Inicio de sesión</title>

    <!-- Styles -->
    <link href="{{ asset('css/loginadministrator.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="container">
        <div class="text_ctn">
            <h1>Ingreso</h1>
            <div class="underline"></div>
            <p>Si eres usuario administrador</p>
        </div>
        <!-- Aquí el formulario no necesita acción porque la manejas con JavaScript -->
        <form class="form_ctn" method="post" action="{{ route('login') }}">

            @csrf
            <div class="input-group">
                <input required type="text" name="email" id="email" autocomplete="off" class="input">
                <label class="user-label">Correo electrónico</label>
                <span class="error-message" id="email-error"></span>
            </div>
            <div class="input-group">
                <input required type="password" name="password" id="password" autocomplete="off" class="input">
                <label class="user-label">Contraseña</label>
                <span class="error-message" id="password-error"></span>
            </div>
            <div class="input-group">
                <input type="checkbox" id="show-password">
                <span class="span_mostrar_pin" for="show-password">Mostrar contraseña</span>
            </div>
            <button type="submit" class="btn_login" id="login-btn">
                <span>Iniciar Sesión</span>
            </button>
        </form>
    </section>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío del formulario tradicional

            var email = document.getElementById('email').value.trim();
            var password = document.getElementById('password').value.trim();
            clearErrors();
            var isValid = true;

            if (!validateEmail(email)) {
                showError('email', 'El correo electrónico no es válido.');
                isValid = false;
            }

            if (password === '') {
                showError('password', 'La contraseña es obligatoria.');
                isValid = false;
            }

            if (isValid) {
                // Enviar el formulario si es válido
                this.submit(); // Envía el formulario
            }
        });
    </script>
</body>

</html>