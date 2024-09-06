<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Inicio administrador</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/inicio_administrador.css') }}" rel="stylesheet">
    <!-- jQuery para AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="page-administrator">
        <div class="container">

            <div class="title">
                <h1>Página de Administrador</h1>
                <p>Bienvenido, {{ Auth::user()->name }}. Esta es la página de administración.</p>
            </div>
            <div class="section">
                <h2>Generar Pin</h2>
                <div class="card">
                    <form action="{{ route('pines.aletarios') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <label for="cantidad">Cantidad de pines a generar</label>
                            <input type="number" id="cantidad" name="cantidad" class="input" min="1" required>
                        </div>
                        <button id="generar-pines-btn" type="submit" class="btn">Generar</button>
                    </form>
                </div>
            </div>

            @if(session('error'))
            <div class="section">
                <p style="color:red;">{{ session('error') }}</p>
            </div>
            @endif

            @if(session('success'))
            <div class="section">
                <p style="color:green;">{{ session('success') }}</p>
            </div>
            @endif

            <!-- Botón para ver los pines -->
            <form action="{{ route('pines.index') }}" method="get">
                @csrf
                <div class="section">
                    <button type="submit" class="btn">Ver Pines</button>
                </div>
            </form>

            <!-- Sección para deshabilitar la prueba -->
            <div class="section">
                <h2>Estado de la Prueba</h2>

                <!-- Estado de la prueba -->
                <p id="estado-prueba" style="color: {{ $prueba->estado == 1 ? 'green' : 'red' }};">
                    {{ $prueba->estado == 1 ? 'Habilitada' : 'Deshabilitada' }}
                </p>

                <!-- Botón para habilitar o deshabilitar la prueba -->
                <form id="form-deshabilitar-prueba" method="POST">
                    @csrf
                    <input type="hidden" id="id_prueba" name="id_prueba" value="{{ $prueba->id_prueba }}">
                    <p>Nombre de la prueba: {{ $prueba->titulo }}</p>

                    <!-- Botón de habilitar/deshabilitar -->
                    <button type="button" class="btn" id="btn-deshabilitar">
                        {{ $prueba->estado == 1 ? 'Deshabilitar Prueba' : 'Habilitar Prueba' }}
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- Script de AJAX -->
    <script>
        $('#btn-deshabilitar').on('click', function () {
            // Obtener el id de la prueba
            var pruebaId = $('#id_prueba').val();

            // Realizar la solicitud AJAX
            $.ajax({
                url: "{{ route('pruebas.deshabilitar') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    id_prueba: pruebaId
                },
                success: function (response) {
                    if (response.success) {
                        // Cambiar el texto y el color del estado según el nuevo estado
                        var nuevoEstado = response.nuevoEstado == 1 ? 'Habilitada' : 'Deshabilitada';
                        var colorEstado = response.nuevoEstado == 1 ? 'green' : 'red';

                        $('#estado-prueba').text(nuevoEstado).css('color', colorEstado);

                        // Cambiar el texto del botón
                        $('#btn-deshabilitar').text(nuevoEstado == 'Habilitada' ? 'Deshabilitar Prueba' : 'Habilitar Prueba');
                    }
                },
                error: function (response) {
                    alert('Error al cambiar el estado de la prueba.');
                }
            });
        });
    </script>
</body>

</html>
