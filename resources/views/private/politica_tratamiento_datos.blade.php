<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CognitiveSparks | Política de Tratamiento de Datos</title>

    <!-- Styles -->
    <link href="{{ asset('css/politica.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="privacy-section">
        <h2>Política de Tratamiento de Datos Personales</h2>

        <!-- Toggle button to show/hide the content -->
        <button class="toggle-btn" onclick="togglePolitica()">Ver / Esconder Política de Tratamiento de Datos</button>

        <!-- Política de Tratamiento de Datos content -->
        <div id="politica-content" class="politica-content">
            <h3>Prueba de Pensamiento Crítico CognitiveSpark</h3>
            <p>
                Los responsables del tratamiento de los datos personales recolectados en el marco de la prueba de
                pensamiento crítico CognitiveSpark
                (Comunidad Hermanos Maristas de la Enseñanza; Hno. Antidio Bolívar Enríquez Oviedo, director del
                proyecto; y Juan Manuel Vélez Arias,
                editor) con domicilio en Dirección: Kr 24 #35-17 Bogotá y correo electrónico <a
                    href="mailto:juanmanuelvelezar@gmail.com">juanmanuelvelezar@gmail.com</a>,
                informan que el tratamiento de los datos personales recolectados consiste en que serán utilizados
                exclusivamente para los siguientes fines:
            </p>
            <ul>
                <li>Desarrollar, aplicar y analizar la prueba de pensamiento crítico CognitiveSpark.</li>
                <li>Realizar estudios de investigación doctoral y científica relacionados con el desarrollo cognitivo y
                    el pensamiento crítico de los estudiantes en contextos del desarrollo humano.</li>
                <li>Generar reportes individuales y colectivos sobre el rendimiento en la prueba, los cuales podrán ser
                    compartidos con las instituciones educativas y, de manera anonimizada, con investigadores
                    académicos.</li>
                <li>Mejorar y optimizar futuras versiones de la prueba CognitiveSpark.</li>
                <li>Durante el proceso de validación del instrumento, segundo semestre del año 2024, se indica que en cuanto se consideren realizadas algunas comprobaciones de validación del instrumento CognitiveSpark, te haremos llegar el reporte final con los niveles de desempeño en pensamiento crítico y los respectivos descriptores.</li>
            </ul>

            <h3>Datos Personales Recolectados</h3>
            <p>Los datos personales que se recolectarán incluyen, pero no se limitan a:</p>
            <ul>
                <li>Documento de identificación del estudiante: nombre completo, edad y sexo.</li>
                <li>Datos académicos: grado escolar, nombre de la institución educativa.</li>
                <li>Respuestas y resultados de la prueba de pensamiento crítico y de las variables prueba-criterio
                    motivación y metacognición.</li>
                <li>Información adicional relevante para el análisis estadístico, como nivel socioeconómico y hábitos de
                    vida saludable, siempre y cuando sea necesario y pertinente para los fines de la investigación.</li>
            </ul>

            <h3>Derechos de los Titulares</h3>
            <p>De acuerdo con la Ley 1581 de 2012 y sus decretos reglamentarios, los titulares de los datos personales
                (en este caso, los estudiantes y sus padres o acudientes) tienen derecho a:</p>
            <ul>
                <li>Conocer, actualizar y rectificar sus datos personales.</li>
                <li>Solicitar prueba de la autorización otorgada para el tratamiento de sus datos.</li>
                <li>Ser informados, previa solicitud, sobre el uso que se ha dado a sus datos personales.</li>
                <li>Presentar quejas ante las autoridades competentes por infracciones a la normatividad vigente.</li>
                <li>Revocar la autorización y/o solicitar la supresión de los datos cuando no se respeten los
                    principios, derechos y garantías constitucionales y legales.</li>

            </ul>

            <h3>Medidas de Seguridad</h3>
            <p>
                Los responsables del tratamiento de los datos personales adoptarán las medidas técnicas, humanas y
                administrativas necesarias para garantizar la seguridad de los datos personales y evitar su
                adulteración, pérdida, consulta, uso o acceso no autorizado. Los datos serán tratados de manera
                confidencial y solo por personas autorizadas. Los datos no se venderán, alquilarán ni compartirán con
                terceros ajenos a los propósitos mencionados.
            </p>

            <h3>Retención y Eliminación de los Datos</h3>
            <p>
                Los datos personales recolectados serán conservados durante el tiempo necesario para cumplir con los
                fines del tratamiento mencionados en esta política. Una vez cumplida la finalidad, los datos serán
                eliminados conforme a las disposiciones legales aplicables.
            </p>

            <h3>Modificaciones de la Política</h3>
            <p>
                Los responsables del tratamiento de los datos personales se reservan el derecho de modificar esta
                política en cualquier momento. Cualquier cambio será comunicado oportunamente a los titulares de los
                datos a través de los canales de contacto proporcionados.
            </p>

            <h3>Contacto</h3>
            <p>
                Para ejercer sus derechos, los titulares de los datos personales pueden ponerse en contacto con los
                responsables del tratamiento de los datos personales relacionados al principio de la política en
                mención.
            </p>


        </div>

        @if ($consentimientoSubido)
        <div style="color: green; font-weight: bold;">
            El consentimiento informado ha sido cargado correctamente.
        </div>
        @else
        <div style="color: red; font-weight: bold;">
            El consentimiento informado aún no ha sido cargado. Por favor, cargue el documento para continuar.
        </div>
        @endif


        <form action="{{ route('archivo.store') }}" class="file_upload_ctn" method="POST" enctype="multipart/form-data">
            <div>
                <p>Cargar consentimiento informado</p>
            </div>
            @csrf
            <input type="file" name="pdf" accept="application/pdf">
            <button type="submit">Subir PDF</button>
        </form>


        <!-- Checkbox and submit button -->
        <form action="{{ route('politica.aceptar') }}" method="POST">
            @csrf
            <div class="checkbox-container">
                <input type="checkbox" id="acceptPolicy" required>
                <label for="acceptPolicy">He leído y acepto la política de tratamiento de datos personales</label>
            </div>


            <button id="submitButton" type="submit" class="submit-btn"
                {{ $consentimientoSubido ? '' : 'disabled' }}>
                Aceptar y Continuar
            </button>
        </form>


        <!-- -->

    </section>

    @include('shared.footer')

    <!-- JavaScript to toggle the política content -->
    <script>
        function togglePolitica() {
            var content = document.getElementById("politica-content");
            content.classList.toggle("open");
        }
    </script>


</body>

</html>