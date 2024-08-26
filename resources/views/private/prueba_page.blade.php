<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Responde las Preguntas</title>

    <!-- Styles -->
    <link href="{{ asset('css/caracterizacion.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('shared.header')

    <section class="caracterizacion_section">

        <div class="title">
            <h1>Responde las siguientes preguntas</h1>
        </div>

        @if(isset($pregunta_actual))
        <div class="contexto">
            <p>{{ $pregunta_actual->contexto->texto }}</p>
        </div>

        <form class="form_ctn" action="{{ route('cargar.preguntas') }}" method="POST">
            @csrf

            <!-- Mostrar el texto de la pregunta -->
            <p>{{ $pregunta_actual->texto }}</p>

            <!-- Verificar si la pregunta es abierta -->
            @if($pregunta_actual->opciones->contains('texto', 'abierta'))
            <!-- Campo para la respuesta abierta -->
            <div class="opcion">
                <textarea name="respuesta_abierta" id="respuesta_abierta" rows="4" placeholder="Escribe tu respuesta aquí..."></textarea>
            </div>
            @else
            <!-- Si no es abierta, mostrar las opciones de selección -->
            @foreach($pregunta_actual->opciones as $opcion)
            <div class="opcion">
                <label>
                    <input type="radio" name="respuestas[{{ $pregunta_actual->id_pregunta }}]" value="{{ $opcion->valor_opcion }}">
                    {{ $opcion->texto }}
                </label>
            </div>
            @endforeach
            @endif

            <input type="hidden" name="pregunta_id" value="{{ $pregunta_actual->id_pregunta }}">
            <input type="hidden" name="prueba_id" value="{{ $prueba_id }}">
            <input type="hidden" name="pregunta_index" value="{{ $pregunta_index + 1 }}">


            @if($pregunta_index + 1 < $total_preguntas)
                <button type="submit">Siguiente</button>
                @else
                <button type="submit">Enviar Respuestas</button>
                @endif
        </form>
        @else
        <p>No hay más preguntas.</p>
        @endif
    </section>

    @include('shared.footer')

</body>

</html>