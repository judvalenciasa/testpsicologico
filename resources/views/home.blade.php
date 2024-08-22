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

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



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

    <section class="preguntas_frecuentes_section">
        <div class="title">
            <h1>PREGUNTAS FRECUENTES</h1>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="foto_ctn">
                        <img src="{{ asset('images/jpg/9720016.jpg') }}" alt="avatar">
                    </div>
                    <div class="pregunta_ctn">
                        <div class="stars_ctn">

                        </div>
                        <div class="pregunta">
                            <p>¿La prueba tiene un tiempo límite de respuesta?</p>
                        </div>
                        <div class="respuesta">
                            <p><span>Respuesta: </span>No, puedes tomarte el tiempo necesario para responder cada pregunta.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="foto_ctn">
                        <img src="{{ asset('images/jpg/9720016.jpg') }}" alt="avatar">
                    </div>
                    <div class="pregunta_ctn">
                        <div class="stars_ctn">

                        </div>
                        <div class="pregunta">
                            <p>¿La prueba tiene un ?</p>
                        </div>
                        <div class="respuesta">
                            <p><span>Respuesta: </span>No, puedes tomarte el tiempo necesario para .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="contact_section">
        <div class="contact_ctn">
            <div class="title">
                <h1>CONTACTO</h1>
            </div>
            <div class="form_ctn">
                <form class="formulario" action="">
                    <div class="input-group">
                        <input required="" type="text" name="nombre" id="nombre" autocomplete="off" class="input">
                        <label class="user-label">Nombre</label>
                        <span class="error-message" id="nombre-error"></span>
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="email" id="email" autocomplete="off" class="input">
                        <label class="user-label">Correo electrónico</label>
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="message" id="message" autocomplete="off" class="input">
                        <label class="user-label">Mensaje</label>
                        <span class="error-message" id="message-error"></span>
                    </div>
                    <button type="submit" id="send-btn">
                        <span>Enviar</span>
                    </button>
                </form>

            </div>
        </div>
    </section>

    @include('shared.footer')


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
        });
    </script>
    <script>
        document.getElementById('send-btn').addEventListener('click', function(event) {


            event.preventDefault(); // Evitar que el formulario se envíe

            // Obtener los campos del formulario
            const nombre = document.getElementById('nombre');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            // Limpiar mensajes de error previos
            clearErrors();

            // Validar cada campo
            var isValid = true;

            if (!validateEmail(email.value)) {
                showError(email, 'El correo electrónico no es válido.');
                isValid = false;
            }

            if (nombre.value.trim() === '') {
                showError(nombre, 'este campo es obligatorio.');
                isValid = false;
            }

            if (message.value.trim() === '') {
                showError(message, 'este campo es obligatorio.');
                isValid = false;
            }

            if (isValid) {
                // Si todo es válido, envía el formulario
                alert('Correo enviado exitosamente');
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