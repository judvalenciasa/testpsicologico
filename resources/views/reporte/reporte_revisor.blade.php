<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Reporte #{{ $reporte->id_informe }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
</head>

<body>

    @include('shared.header')

    <section class="reporte_section">
        <div class="title">
            <h1>Detalle del Reporte #{{ $reporte->id_informe }} del usuario con identificación
                {{ $reporte->documento_identificacion }}</h1>
        </div>
        <div class="tiempo_prueba_ctn">
            <h2>Tiempo de la Prueba</h2>
            <p>{{ $reporte->tiempo_prueba }}</p>
        </div>



        <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>
    </section>

    @include('shared.footer')

</body>

</html>