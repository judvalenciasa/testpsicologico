<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Respuestas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte_respuestas.css') }}">
</head>
<body>
    @include('shared.header')

    <section class="reporte_respuestas_section">
        <h1>Reporte de Respuestas</h1>

        <!-- Tabla de respuestas -->
        <table class="center">
            <thead>
                <tr>
                    <th>Id contexto</th>
                    <th>Habilidad</th>
                    <th>Subhabilidad</th>
                    <th>Contexto</th>
                    <th>Texto de la Pregunta</th>
                    <th>Respuesta</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informe['respuestas'] as $respuesta)
                <tr>
                    <td>{{ $respuesta['id_contexto'] }}</td>
                    <td>{{ $respuesta['habilidad'] }}</td>
                    <td>{{ $respuesta['subhabilidad'] }}</td>
                    <td>{{ $respuesta['contexto'] }}</td>
                    <td>{{ $respuesta['texto_pregunta'] }}</td>
                    <td>{{ $respuesta['respuesta_texto'] }}</td>
                    <td>{{ $respuesta['calificacion'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Título y tabla de subrespuestas -->
        <h2>Subrespuestas</h2>
        <table class="center">
            <thead>
                <tr>
                    <th>Texto subpregunta</th>
                    <th>Respuesta</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informe['subrespuestas'] as $subrespuesta)
                <tr>
                    <td>{{ $subrespuesta['texto_subpregunta'] }}</td>
                    <td>{{ $subrespuesta['respuesta'] }}</td>
                    <td>{{ $subrespuesta['calificacion_respuesta'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>

    </section>
    @include('shared.footer')

</body>
</html>
