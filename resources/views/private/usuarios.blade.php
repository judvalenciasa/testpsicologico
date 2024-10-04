<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/usuarios.css') }}">
</head>

<body>

    @include('shared.header')


    <section class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Ver Reportes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="btns_ctn">
                        <!-- Botón para ver los reportes del usuario -->
                        <form action="{{ route('private.verReportes', $user->id_usuario) }}" method="get">
                            @csrf
                            <button type="submit" class="btn">Ver Reportes</button>
                        </form>
                        <!-- Botón para ver los reportes del usuario -->
                        <form action="{{ route('archivo.descargar', ['nombre' => $user->name]) }}" method="get">
                            @csrf
                            <button type="submit" class="btn">Descargar consentimiento informado</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('administrator-page') }}" class="btn">Volver a la pagina de administradores</a>

    </section>

    @include('shared.footer')


</body>

</html>