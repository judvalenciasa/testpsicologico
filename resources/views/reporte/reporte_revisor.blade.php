<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Respuestas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Reporte Revisor</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }

        table th,
        table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        table thead {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

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
</body>

</html>