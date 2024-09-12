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
                <h2>Contexto </h2>
            </div>

            @if(isset($preguntas) && count($preguntas) > 0)
            <!-- Mostrar el contexto una vez -->
            <div class="contexto">
                <p>{{ $preguntas->first()->contexto->texto }}</p>
            </div>

            <form class="form_ctn" action="{{ route('cargar.preguntas') }}" method="POST">
                @csrf
                @foreach($preguntas as $index => $pregunta_actual)

                <p class="pregunta_texto">{{ $pregunta_actual->texto }}</p>

                @if($pregunta_actual->tipo_pregunta == 'abierta')
                <div class="opcion">
                    <textarea name="respuestas_abiertas[{{ $pregunta_actual->id_pregunta }}]" id="respuesta_abierta_{{ $pregunta_actual->id_pregunta }}" rows="4" placeholder="Escribe tu respuesta aquí..."></textarea>
                </div>
                @else
                @foreach($pregunta_actual->opciones as $opcion)
                <div class="opcion">
                    <label>
                        <input type="radio" name="respuestas_cerrada[{{ $pregunta_actual->id_pregunta }}]" value="{{ $opcion->id_opcion }}">
                        <p>{{ $opcion->texto }}</p>
                    </label>
                </div>
                @endforeach
            
                @endif

                <!-- Verificar si hay subpreguntas y mostrarlas -->
                @if($pregunta_actual->subpreguntas && $pregunta_actual->subpreguntas->count() > 0)
                <div class="subpreguntas">
                    @foreach($pregunta_actual->subpreguntas as $subpregunta)
                    <p class="pregunta_texto">{{ $subpregunta->texto }}</p>

                    @if($subpregunta->tipo_pregunta == 'abierta')
                    <div class="opcion">
                        <textarea name="respuestas_abiertas[{{ $subpregunta->id_subpregunta }}]" id="respuesta_abierta_{{ $subpregunta->id_subpregunta }}" rows="4" placeholder="Escribe tu respuesta aquí..."></textarea>
                     
                    </div>
                    @else
                    @foreach($subpregunta->opciones as $opcion)
                    <div class="opcion">
                        <label>
                            <input type="radio" name="respuestas_cerrada[{{ $subpregunta->id_subpregunta }}]" value="{{ $opcion->id_opcionessubpregunta }}">
                            <p>{{ $opcion->texto }}</p>
                        </label>
                    </div>
                    @endforeach
               
                    @endif
                    @endforeach
                </div>
                @endif

                <input type="hidden" name="pregunta_ids[]" value="{{ $pregunta_actual->id_pregunta }}">
                @endforeach

                <input type="hidden" name="prueba_id" value="{{ $prueba_id }}">
                <input type="hidden" name="contexto_index" value="{{ $contexto_index + 1 }}">

                @if($contexto_index + 1 < $total_contextos)
                    <button type="submit">Siguiente</button>
                    @else
                    <button class="send_btn" type="submit">Continuar con encuesta de metacognición</button>
                    @endif
            </form>

            @else
            <p>Felicidades terminaste la prueba.</p>
            @endif
        </div>
    </section>
</body>

</html>