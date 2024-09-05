<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Inicio administrador</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/inicio_administrador.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="page-administrator">
        <div class="container">
            <div class="section">
                <h2>Generar Pin</h2>
                <div class="card">
                    <form action="{{ route('pines.aletarios') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="input-group">
                            <label for="cantidad">Cantidad de pines a generar</label>
                            <input type="number" id="cantidad" name="cantidad" class="input" min="1" required>
                        </div>
                        <button id="generar-pines-btn" type="submit" method="POST" class="btn">Generar</button>
                    </form>

                </div>
            </div>

            @if(session('error'))
            <div class="section">
                <p style="color:red;">{{ session('error') }}</p>
            </div>
            @endif

            <!-- Botón para ver los pines -->
            <form action="{{ route('pines.index') }}" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="section">
                    <button type="submit" class="btn">Ver Pines</button>
                </div>
            </form>

        </div>
    </section>

</body>

<script>
    // Supongamos que tienes un botón para generar pines
    document.getElementById('generar-pines-btn').addEventListener('click', function(event) {
        event.preventDefault();

        const cantidad = document.getElementById('cantidad').value;

        fetch('/api/generar_pines', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
                },
                body: JSON.stringify({
                    cantidad: cantidad
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.msg); // Mostramos el mensaje de éxito
                } else {
                    alert(data.msg); // Mostramos el mensaje de error
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Ocurrió un error al generar los pines.');
            });
    });
</script>


</html>