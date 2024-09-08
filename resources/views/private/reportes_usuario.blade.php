<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes del Usuario {{ $user->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Reportes de {{ $user->name }}</h1>
        @if($reportes->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Calificación Total</th>
                    <th>Calificación Metacognición</th>
                    <th>Fecha de Calificación</th>
                    <th>Documento de Identificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->id }}</td>
                    <td>{{ $reporte->calificacion_total }}</td>
                    <td>{{ $reporte->calificacion_metacognicion }}</td>
                    <td>{{ $reporte->fecha_calificacion }}</td>
                    <td>{{ $reporte->documento_identificacion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No hay reportes para este usuario.</p>
        @endif
        <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>
    </div>
</body>

</html>