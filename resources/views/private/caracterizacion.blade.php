<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CognitiveSparks | Encuesta de caracterización</title>

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
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <!-- Documento Identificacion -->
            <div class="input-group">
                <label for="documento_identificacion">Documento de identificación del Participante:</label>
                <input type="number" id="documento_identificacion" name="documento_identificacion" placeholder="Ingrese su documento de identificación" required>
            </div>

            <!-- Edad -->
            <div class="input-group">
                <label for="edad">Edad (15 a 18 años):</label>
                <input type="number" id="edad" name="edad" min="15" max="18" placeholder="Ingrese su edad" required>
            </div>

            <!-- Género -->
            <div class="input-group">
                <label for="genero">Sexo:</label>
                <select id="genero" name="genero" required>
                    <option value="" disabled selected>Seleccione su sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>

            <!-- Estrato socioeconómico -->
            <div class="input-group">
                <label for="estrato">Estrato socioeconómico (1 a 6):</label>
                <input type="number" id="estrato" name="estrato" min="1" max="6" placeholder="Ingrese su estrato socioeconómico" required>
            </div>

            <!-- Nivel de escolaridad -->
            <div class="input-group">
                <label for="nivel_escolaridad">Nivel de escolaridad:</label>
                <select id="nivel_escolaridad" name="nivel_escolaridad" required>
                    <option value="" disabled selected>Seleccione su nivel de escolaridad</option>
                    <option value="Noveno">Noveno</option>
                    <option value="Decimo">Décimo</option>
                    <option value="Undecimo">Undécimo</option>
                </select>
            </div>

            <!-- Nivel educativo del padre -->
            <div class="input-group">
                <label for="nivel_educativo_padre">Nivel educativo del padre:</label>
                <select id="nivel_educativo_padre" name="nivel_educativo_padre" required>
                    <option value="" disabled selected>Seleccione el nivel educativo del padre</option>
                    <option value="Ninguno">Ninguno</option>
                    <option value="Bachiller">Bachiller</option>
                    <option value="Técnico ">Técnico </option>
                    <option value="Tecnólogo">Tecnólogo</option>
                    <option value="Profesional">Profesional</option>
                    <option value="Especialista">Especialista</option>
                    <option value="Magister">Magister</option>
                    <option value="Doctor(a)">Doctor(a)</option>
                    <option value="Posdoctor(a)">Posdoctor(a)</option>
                    <option value="No lo sé">No lo sé</option>
                </select>
            </div>

            <!-- Nivel educativo de la madre -->
            <div class="input-group">
                <label for="nivel_educativo_madre">Nivel educativo de la madre:</label>
                <select id="nivel_educativo_madre" name="nivel_educativo_madre" required>
                    <option value="" disabled selected>Seleccione el nivel educativo de la madre</option>
                    <option value="Ninguno">Ninguno</option>
                    <option value="Bachiller">Bachiller</option>
                    <option value="Técnico ">Técnico </option>
                    <option value="Tecnólogo">Tecnólogo</option>
                    <option value="Profesional">Profesional</option>
                    <option value="Especialista">Especialista</option>
                    <option value="Magister">Magister</option>
                    <option value="Doctor(a)">Doctor(a)</option>
                    <option value="Posdoctor(a)">Posdoctor(a)</option>
                    <option value="No lo sé">No lo sé</option>
                </select>
            </div>

            <!-- Horas de lectura -->
            <div class="input-group">
                <label for="horas_lectura">Cantidad de horas semanales dedicadas a lectura:</label>
                <select id="horas_lectura" name="horas_lectura" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="Menos de 1 hora">Menos de 1 hora</option>
                    <option value="Entre 1 y 3 horas">Entre 1 y 3 horas</option>
                    <option value="Hasta 5 horas">Hasta 5 horas</option>
                    <option value="Más de 5 horas">Más de 5 horas</option>
                    <option value="Entre 5 y 10 horas">Entre 5 y 10 horas</option>
                    <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
            </div>

            <!-- Horas en redes sociales -->
            <div class="input-group">
                <label for="horas_redes_sociales">Cantidad de horas semanales dedicadas a interactuar en redes sociales: </label>
                <select id="horas_redes_sociales" name="horas_redes_sociales" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="Menos de 1 hora">Menos de 1 hora</option>
                    <option value="Entre 1 y 3 horas">Entre 1 y 3 horas</option>
                    <option value="Hasta 5 horas">Hasta 5 horas</option>
                    <option value="Más de 5 horas">Más de 5 horas</option>
                    <option value="Entre 5 y 10 horas">Entre 5 y 10 horas</option>
                    <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
            </div>

            <!-- Horas en videojuegos (opcional) -->
            <div class="input-group">
                <label for="horas_entretenimiento">Cantidad promedio de horas semanales destinadas al entretenimiento con videojuegos en consolas o a través de internet</label>
                <select id="horas_entretenimiento" name="horas_entretenimiento" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="No realizo estas actividades">No realizo estas actividades</option>
                    <option value="Menos de 1 hora">Menos de 1 hora</option>
                    <option value="Entre 1 y 3 horas">Entre 1 y 3 horas</option>
                    <option value="Hasta 5 horas">Hasta 5 horas</option>
                    <option value="Más de 5 horas">Más de 5 horas</option>
                    <option value="Entre 5 y 10 horas">Entre 5 y 10 horas</option>
                    <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
            </div>

            <!-- Horas de sueño -->
            <div class="input-group">
                <label for="hora_sueno">Cantidad promedio de horas semanales dedicadas a dormir en la noche</label>
                <select id="hora_sueno" name="hora_sueno" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="Entre 4 y 6 horas">Entre 4 y 6 horas</option>
                    <option value="Entre 5 y 7 horas">Entre 5 y 7 horas</option>
                    <option value="Entre 6 y 8 horas">Entre 6 y 8 horas</option>
                    <option value="Entre 8 y 10 horas">Entre 8 y 10 horas</option>
                    <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
            </div>

            <!-- Práctica de arte -->
            <div class="input-group">
                <label for="promedio_arte">¿Practica algún arte como música, pintura o danza de manera recurrente?</label>
                <select id="promedio_arte" name="promedio_arte" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=Si>Sí</option>
                    <option value=No>No</option>
                </select>
            </div>

            <!-- Práctica de deporte -->
            <div class="input-group">
                <label for="promedio_deporte">¿Práctica algún deporte de manera recurrente?</label>
                <select id="promedio_deporte" name="promedio_deporte" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=Si>Sí</option>
                    <option value=No>No</option>
                </select>
            </div>



            <!-- Consumo de grasas saturadas -->
            <div class="input-group">
                <label for="grasas">¿En su dieta están siempre presentes grasas saturadas como salsas, o papas y/o carnes fritas o procesadas?</label>
                <select id="grasas" name="grasas" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=Si>Sí</option>
                    <option value=No>No</option>
                </select>
            </div>

            <!-- Alimentos Saludables -->
            <div class="input-group">
                <label for="alimentos_saludables">En su dieta incluye alimentos saludables como carnes blancas, verduras/vegetales, frutas y frutos secos </label>
                <select id="alimentos_saludables" name="alimentos_saludables" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=Si>Sí</option>
                    <option value=No>No</option>
                </select>
            </div>

            <!-- Bebe más de un litro -->
            <div class="input-group">
                <label for="litro_agua">¿Consume un (1) litro o más de agua al día?</label>
                <select id="litro_agua" name="litro_agua" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value=Si>Sí</option>
                    <option value=No>No</option>
                </select>
            </div>

            <!-- Botón de envío -->
            <div>
                <button class="send_btn" type="submit">Enviar</button>
            </div>
        </form>


    </section>


</body>

</html>