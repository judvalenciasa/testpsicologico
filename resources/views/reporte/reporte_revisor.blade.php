<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Respuestas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte_respuestas.css') }}">


    <title>Reporte Revisor</title>

</head>

<body>
    @include('shared.header')

    <section class="reporte_respuestas_section">
        <h1>Reporte de Respuestas</h1>

        <table class="center">
            <thead>
                <tr>
                    <th>Habilidad</th>
                    <th>Subhabilidad</th>
                    <th>Contexto</th>
                    <th>Texto de la Pregunta</th>
                    <th>Respuesta</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informe as $respuesta)
                <tr>
                    <td>{{ $respuesta['habilidad'] }}</td>
                    <td>{{ $respuesta['subhabilidad'] }}</td>
                    <td>{{ $respuesta['contexto'] }}</td>
                    <td>{{ $respuesta['texto_pregunta'] }}</td>
                    <td>{{ $respuesta['respuestas_texto'] }}</td>
                    <td>{{ $respuesta['calificacion'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    @include('shared.footer')

</body>

</html>