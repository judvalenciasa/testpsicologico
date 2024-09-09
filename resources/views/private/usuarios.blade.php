<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @include('shared.header')


    <div class="container">
        <h1>Usuarios No Administradores</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Ver Reportes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Botón para ver los reportes del usuario -->
                        <form action="{{ route('private.verReportes', $user->id_usuario) }}" method="get">
                            @csrf
                            <button type="submit" class="btn">Ver Reportes</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('shared.footer')


</body>

</html>