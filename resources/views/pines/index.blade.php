@extends('layouts.app')


<head>
    <link rel="stylesheet" href="{{ asset('css/pines_table.css') }}">
</head>

@section('title', 'Listado de Pines')

@section('content')
<section class="container">
    <h2>Listado de Pines</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Pin</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Expiración</th>
                <th>Estado</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pines as $pin)
            <tr>
                <td>{{ $pin->pin }}</td>
                <td>{{ $pin->creacion_fecha }}</td>
                <td>{{ $pin->fecha_expiracion }}</td>
                <td>{{ $pin->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $pin->usuario->email ?? 'Sin asignar' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('administrator-page') }}" class="btn">Volver a la pagina de administradores</a>

</section>
@endsection


<script>
    //funcion para cambiar el estado de la lista de pines dependiendo del estado
    function togglePinState(pinId, state) {}
</script>