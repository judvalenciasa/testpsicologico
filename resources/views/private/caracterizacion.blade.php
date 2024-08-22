<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Encuesta de caracterización</title>

    <!-- Styles -->
    <link href="{{ asset('css/caracterizacion.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="caracterizacion_section">
        <div class="title">
            <h1>Encuesta de caracterización</h1>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form class="form_ctn" action="{{ route('registar.encuesta.caraterizacion') }}" method="POST">
            @csrf


            <!-- Edad -->
            <div class="input-group">
                <label for="edad">Edad (15 a 18 años):</label>
                <input type="number" id="edad" name="edad" min="15" max="18" placeholder="Ingrese su edad" required>
            </div>

            <!-- Género -->
            <div class="input-group">
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="" disabled selected>Seleccione su género</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>

            <!-- Estrato socioeconómico -->
            <div class="input-group">
                <label for="estrato">Estrato socioeconómico (1 a 6):</label>
                <input type="number" id="estrato" name="estrato" min="1" max="6" placeholder="Ingrese su estrato socioeconómico" required>
            </div>

            <!-- Horas de lectura -->
            <div class="input-group">
                <label for="horas_lectura">Cantidad de horas de lectura por semana:</label>
                <select id="horas_lectura" name="horas_lectura" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1-10">1 a 10</option>
                    <option value=">10">Más de 10</option>
                </select>
            </div>

            <!-- Horas en redes sociales -->
            <div class="input-group">
                <label for="horas_redes_sociales">Cantidad de horas en redes sociales por semana:</label>
                <select id="horas_redes_sociales" name="horas_redes_sociales" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1-10">1 a 10</option>
                    <option value=">10">Más de 10</option>
                </select>
            </div>

            <!-- Horas en videojuegos (opcional) -->
            <div class="input-group">
                <label for="horas_entretenimiento">Cantidad de horas en videojuegos por semana:</label>
                <select id="horas_entretenimiento" name="horas_entretenimiento" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1-10">1 a 10</option>
                    <option value=">10">Más de 10</option>
                </select>
            </div>

            <!-- Horas de sueño -->
            <div class="input-group">
                <label for="hora_sueno">Cuántas horas suele dormir en las noches:</label>
                <select id="hora_sueno" name="hora_sueno" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="4-6">Entre 4 y 6 horas</option>
                    <option value="5-7">Entre 5 y 7 horas</option>
                    <option value="6-8">Entre 6 y 8 horas</option>
                    <option value="8-10">Entre 8 y 10 horas</option>
                </select>
            </div>

            <!-- Práctica de deporte -->
            <div class="input-group">
                <label for="promedio_deporte">¿Práctica algún deporte de manera recurrente?</label>
                <select id="promedio_deporte" name="promedio_deporte" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=1>Sí</option>
                    <option value=0>No</option>
                </select>
            </div>

            <!-- Práctica de arte -->
            <div class="input-group">
                <label for="promedio_arte">¿Practica algún arte como música, pintura o danza de manera recurrente?</label>
                <select id="promedio_arte" name="promedio_arte" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=1>Sí</option>
                    <option value=0>No</option>
                </select>
            </div>

            <!-- Consumo de grasas saturadas -->
            <div class="input-group">
                <label for="grasas">¿En su dieta están siempre presentes grasas saturadas?</label>
                <select id="grasas" name="grasas" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=1>Sí</option>
                    <option value=0>No</option>
                </select>
            </div>

            <!-- Alimentos Saludables -->
            <div class="input-group">
                <label for="alimentos_saludables">En su dieta incluye alimentos saludables
                    como carnes blancas,
                    verduras/vegetales, frutas y frutos
                    secos</label>
                <select id="alimentos_saludables" name="alimentos_saludables" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=1>Sí</option>
                    <option value=0>No</option>
                </select>


                <!-- Botón de envío -->
                <div>
                    <button type="submit">Enviar</button>
                </div>
        </form>


    </section>


</body>

</html>