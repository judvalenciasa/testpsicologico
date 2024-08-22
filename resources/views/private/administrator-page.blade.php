<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Inicio administrador</title>

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
                        @csrf
                        <div class="input-group">
                            <label for="cantidad">Cantidad de pines a generar</label>
                            <input type="number" id="cantidad" name="cantidad" class="input" min="1" required>
                        </div>
                        <button type="submit" class="btn">Generar</button>
                    </form>


                </div>
            </div>
            @if(session('pines_generados'))
            <div class="section">
                <h3>Pines Generados:</h3>
                <ul>
                    @foreach(session('pines_generados') as $pin)
                    <li>{{ $pin }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('error'))
            <div class="section">
                <p style="color:red;">{{ session('error') }}</p>
            </div>
            @endif

        </div>
    </section>
</body>

</html>