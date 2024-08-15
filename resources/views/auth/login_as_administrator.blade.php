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
            <h1>Ingreso</h1>
            <div class="underline"></div>
            <p>Si eres usuario administrador</p>
        </div>
        <form class="form_ctn" action="{{ route('login') }}" method="POST">
            @csrf <!-- Esto es necesario para proteger tu formulario contra ataques CSRF -->

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
            <button type="submit" id="login-btn">
                <span>Iniciar Sesión</span>
            </button>
        </form>

    </section>

    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            var passwordInput = document.getElementById('password');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

            document.getElementById('login-btn').addEventListener('click', function(event) {
            // event.preventDefault(); // Comenta o elimina esta línea para permitir que el formulario se envíe

            // Validación de campos (puedes mantener esta lógica para mostrar errores)
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            clearErrors();
            var isValid = true;

            if (!validateEmail(email.value)) {
                showError(email, 'El correo electrónico no es válido.');
                isValid = false;
            }

            if (password.value.trim() === '') {
                showError(password, 'La contraseña es obligatoria.');
                isValid = false;
            }

            if (isValid) {
            }
        });


        function showError(input, message) {
            input.style.borderColor = 'red';
            var errorElement = document.getElementById(input.id + '-error');
            errorElement.textContent = message;
            errorElement.style.color = 'red';
        }

        function clearErrors() {
            var inputs = document.querySelectorAll('.input');
            inputs.forEach(function(input) {
                input.style.borderColor = ''; // Restablecer el color del borde
            });

            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function(error) {
                error.textContent = ''; // Limpiar mensajes de error
            });
        }

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return re.test(email);
        }
    </script>
</body>

</html>