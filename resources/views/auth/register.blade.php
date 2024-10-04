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
            <p>Si deseas presentar la prueba</p>
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
            <button type="submit" id="submit-btn">
                <span>Registrarse</span>
            </button>
        </div>

    </section>
    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            var passwordInput = document.getElementById('password');
            if (this.checked) {
                passwordInput.type = 'text'; // Mostrar contraseña
            } else {
                passwordInput.type = 'password'; // Ocultar contraseña
            }
        });

        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Evitar el envío del formulario por defecto

            // Obtener los valores de los campos del formulario
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var pin = document.getElementById('pin').value.trim();
            var password = document.getElementById('password').value.trim();

            // Limpiar mensajes de error previos
            clearErrors();

            // Validar cada campo
            var isValid = true;

            if (name === '') {
                showError('name', 'El nombre completo es obligatorio.');
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

            if (password.length < 6) {
                showError('password', 'La contraseña debe tener al menos 6 caracteres.');
                isValid = false;
            }

            if (!isValid) {
                return;
            }

            // Enviar datos a través de AJAX
            var formData = {
                name: name,
                email: email,
                pin: pin,
                password: password,
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            };

            fetch("{{ route('registrar') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Registro exitoso. ¡Bienvenido!');
                        clearFormFields();

                    } else {
                        alert('Error al registrar: ' + data.message);
                        formData = {};
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Hubo un error en la solicitud. Inténtalo de nuevo.');
                });
        });

        // Función para limpiar los campos del formulario
        function clearFormFields() {
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
            document.getElementById('pin').value = '';
            document.getElementById('show-password').checked = false;
            // Asegurar que la contraseña vuelva a estar oculta
            document.getElementById('password').type = 'password';
        }


        function showError(inputId, message) {
            var input = document.getElementById(inputId);
            input.style.borderColor = 'red';
            var errorElement = document.getElementById(inputId + '-error');
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
    @include('shared.footer')

</body>

</html>