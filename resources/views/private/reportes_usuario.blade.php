<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes del Usuario {{ $user->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/usuarios.css') }}">

</head>

<body>

    @include('shared.header')

    <section class="container">
        <h1>Reportes de {{ $user->name }}</h1>
        @if($reportes->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Número de reporte</th>
                        <th>documento de identificación</th>
                        <th>Fecha de Calificación</th>
                        <th>Acciones</th> <!-- Nueva columna para el botón -->
                        <th>Respuestas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reportes as $reporte)
                        <tr>
                            <td>{{ $reporte->id_reporte }}</td>
                            <td>{{ $reporte->documento_identificacion }}</td>
                            <td>{{ $reporte->fecha_calificacion }}</td>
                            <td>
                                <form class="form_ctn" action="{{ route('reporte.ver') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_usuario" value="{{ $user->id_usuario }}">
                                    <input type="hidden" name="id_reporte" value="{{ $reporte->id_reporte }}">
                                    <div>
                                        <button class="btn btn-primary prueba_btn" type="submit"> Reporte </button>
                                    </div>
                                </form>
                                
                            </td>
                            <td>
                                <form class="form_ctn" action="{{ route('reporte.verRespuestas') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_usuario" value="{{ $user->id_usuario }}">
                                    <input type="hidden" name="id_reporte" value="{{ $reporte->id_reporte }}">
                                    <div>
                                        <button class="btn btn-primary prueba_btn" type="submit"> Ver respuesta</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay reportes para este usuario.</p>
        @endif
        <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>
    </section>

    @include('shared.footer')

</body>

</html>