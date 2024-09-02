<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitive Sparks | Responde las Preguntas</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pregunta.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

    <section class="pregunta_section">

        <div class="pregunta_ctn">
            <div class="title">
            </div>

            @if(isset($preguntas) && count($preguntas) > 0)
            <!-- Mostrar el contexto una vez -->
            <div class="contexto">
                <p>{{ $preguntas->first()->contexto->texto }}</p>
            </div>

            <form class="form_ctn" action="{{ route('cargar.preguntas') }}" method="POST">
                @csrf
                @foreach($preguntas as $index => $pregunta_actual)
                <!-- Mostrar el texto de la pregunta -->
                <p class="pregunta_texto">{{ $pregunta_actual->texto }}</p>

                <!-- Verificar si la pregunta es abierta -->
                @if($pregunta_actual->opciones->contains('texto', 'abierta'))
                <!-- Campo para la respuesta abierta -->
                <div class="opcion">
                    <textarea name="respuestas_abiertas[{{ $pregunta_actual->id_pregunta }}]" id="respuesta_abierta_{{ $pregunta_actual->id_pregunta }}" rows="4" placeholder="Escribe tu respuesta aquí..."></textarea>
                </div>
                @else
                <!-- Si no es abierta, mostrar las opciones de selección -->
                @foreach($pregunta_actual->opciones as $opcion)
                <div class="opcion">
                    <label>
                        <input type="radio" name="respuestas[{{ $pregunta_actual->id_pregunta }}]" value="{{ $opcion->valor_opcion }}">
                        <p>{{ $opcion->texto }}</p>
                    </label>
                </div>
                @endforeach
                @endif

                <input type="hidden" name="pregunta_ids[]" value="{{ $pregunta_actual->id_pregunta }}">
                @endforeach

                <input type="hidden" name="prueba_id" value="{{ $prueba_id }}">
                <input type="hidden" name="pregunta_index" value="{{ $pregunta_index + 2 }}">

                @if($pregunta_index + 2 < $total_preguntas)
                    <button type="submit">Siguiente</button>
                @else
                    <button class="send_btn" type="submit">Enviar Respuestas</button>
                @endif
            </form>
            @else
            <p>No hay más preguntas.</p>
            @endif
        </div>
    </section>
</body>

</html>
