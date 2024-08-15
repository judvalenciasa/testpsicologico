<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Registro</title>

    <!-- Styles -->
    <link href="{{ asset('css/loginadministrator.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="container">
        <div class="text_ctn">
            <h1>Registro</h1>
            <div class="underline"></div>
            <p>Si deseas presentar la prueba</p>
        </div>
        <div class="form_ctn">
            <div class="input-group">
                <input required="" type="text" name="nombre" id="nombre" autocomplete="off" class="input">
                <label class="user-label">Nombre Completo</label>
                <span class="error-message" id="nombre-error"></span>
            </div>
            <div class="input-group">
                <input required="" type="email" name="email" id="email" autocomplete="off" class="input">
                <label class="user-label">Correo Electrónico</label>
                <span class="error-message" id="email-error"></span>
            </div>
            <div class="input-group">
                <input required="" type="password" name="pin" id="pin" autocomplete="off" class="input">
                <label class="user-label">Pin</label>
                <span class="error-message" id="pin-error"></span>
            </div>
            <div class="input-group">
                <input type="checkbox" id="show-pin">
                <span class="span_mostrar_pin" for="show-pin">Mostrar Pin</span>
            </div>
            <button id="submit-btn">
                <span>Registrarse</span>
            </button>
        </div>
    </section>

    <script>
        document.getElementById('show-pin').addEventListener('change', function () {
            var passwordInput = document.getElementById('pin');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

        document.getElementById('submit-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Evitar que el formulario se envíe

            // Obtener los campos del formulario
            var nombre = document.getElementById('nombre');
            var email = document.getElementById('email');
            var pin = document.getElementById('pin');

            // Limpiar mensajes de error previos
            clearErrors();

            // Validar cada campo
            var isValid = true;

            if (nombre.value.trim() === '') {
                showError(nombre, 'El nombre completo es obligatorio.');
                isValid = false;
            }

            if (!validateEmail(email.value)) {
                showError(email, 'El correo electrónico no es válido.');
                isValid = false;
            }

            if (pin.value.length < 4) {
                showError(pin, 'El pin debe tener al menos 4 caracteres.');
                isValid = false;
            }

            if (isValid) {
                // Si todo es válido, envía el formulario
                alert('Formulario enviado correctamente');
                // Aquí puedes enviar el formulario
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
            inputs.forEach(function (input) {
                input.style.borderColor = ''; // Restablecer el color del borde
            });

            var errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function (error) {
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
