<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

        <form class="form_ctn" action="{{ route('registrar') }}" method="POST">
            @csrf

            <div class="input-group">
                <input required type="text" name="nombre" id="nombre" autocomplete="off" class="input">
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
                <input type="checkbox" id="show-pin">
                <span class="span_mostrar_pin" for="show-pin">Mostrar Contraseña</span>
            </div>
            <button type="submit" id="submit-btn">
                <span>Registrarse</span>
            </button>
        </form>

    </section>

    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de manera tradicional

            // Obtener los valores de los campos del formulario
            var nombre = document.getElementById('nombre').value.trim();
            var email = document.getElementById('email').value.trim();
            var pin = document.getElementById('pin').value.trim();
            var password = document.getElementById('password').value.trim();


            // Limpiar mensajes de error previos
            clearErrors();

            // Validar cada campo
            var isValid = true;

            if (nombre === '') {
                showError('nombre', 'El nombre completo es obligatorio.');
                isValid = false;
            }

            if (!validateEmail(email)) {
                showError('email', 'El correo electrónico no es válido.');
                isValid = false;
            }

            if (pin.length < 4) {
                showError('pin', 'El pin debe tener al menos 4 caracteres.');
                isValid = false;
            }

            if (password.length < 6) { // Validar longitud de la contraseña
                showError('password', 'La contraseña debe tener al menos 6 caracteres.');
                isValid = false;
            }

            document.getElementById('show-pin').addEventListener('change', function() {
                var passwordInput = document.getElementById('password');
                if (this.checked) {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });


            if (isValid) {
                // Hacer la solicitud a la API
                fetch('/api/registrar', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            name: nombre,
                            email: email,
                            pin: pin,
                            password: password

                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.text().then(text => {
                                throw new Error(text);
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('response data:', data);
                        if (data.status === 1) {
                            alert('Registro exitoso');
                            window.location.href = '/';
                        } else {
                            alert(data.msg || 'Error en el registro');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Ocurrió un error en el servidor. Verifique la consola para más detalles.');
                    });
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