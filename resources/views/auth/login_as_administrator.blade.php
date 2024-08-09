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
        <div class="text_ctn">
            <h1>Login</h1>
            <div class="underline"></div>
            <p>Si eres usuario administrador</p>
        </div>
        <div class="form_ctn">
            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Correo electrónico</label>
            </div>
            <div class="input-group">
                <input required="" type="password" name="password" autocomplete="off" class="input" id="password">
                <label class="user-label">Pin</label>
            </div>
            <div class="input-group">
                <input type="checkbox" id="show-password">
                <span class="span_mostrar_pin" for="show-password">Mostrar contraseña</span>
            </div>
            <button>
                <span>Iniciar Sesión</span>
            </button>
    </section>
</body>

<script>
    document.getElementById('show-password').addEventListener('change', function() {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>

</html>