<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Prueba Disponible</title>

    <!-- Styles -->
    <link href="{{ asset('css/pruebaPage.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="prueba_section">

        <div class="title">
            <h1>{{ $prueba->titulo }}</h1>
            <p>{{ $prueba->descripcion }}</p>
        </div>

        <form class="form_ctn" action="{{ route('cargar.preguntas') }}" method="POST">
            @csrf
            <input type="hidden" name="prueba_id" value="{{ $prueba->id_prueba }}">
            <div>
                <button class="prueba_btn" type="submit" {{ $prueba->estado == 1 ? '' : 'disabled' }}>Iniciar Prueba</button>
            </div>
        </form>
    </section>

    @include('shared.footer')

    <script>
        let intervalo;
        let tiempoTotal = 0;

        document.getElementById('iniciarBtn').addEventListener('click', function() {
            // Iniciar el cronómetro
            intervalo = setInterval(function() {
                tiempoTotal++;
                document.getElementById('tiempo').innerHTML = formatearTiempo(tiempoTotal);
            }, 1000);

            // Cambiar el botón a deshabilitado
            this.disabled = true;
        });

        function formatearTiempo(segundos) {
            const horas = Math.floor(segundos / 3600);
            const minutos = Math.floor((segundos % 3600) / 60);
            const segs = segundos % 60;

            return `${String(horas).padStart(2, '0')}:${String(minutos).padStart(2, '0')}:${String(segs).padStart(2, '0')}`;
        }
    </script>



</body>

</html>