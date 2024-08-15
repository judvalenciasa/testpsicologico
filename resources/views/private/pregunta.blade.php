@extends('layouts.app')

@section('content')
<section class="pregunta-section">
    <div class="pregunta-title">
        <h2>{{ $pregunta->TITULO }}</h2>
    </div>
    <div class="pregunta-card">
        <p>{{ $pregunta->TEXTO }}</p>

        <form action="{{ route('respuesta.store') }}" method="POST">
            @csrf
            @foreach($pregunta->opciones as $opcion)
                <div>
                    <label>
                        <input type="radio" name="opcion" value="{{ $opcion->PK_ID_OPCION }}">
                        {{ $opcion->TEXTO }}
                    </label>
                </div>
            @endforeach

            <div>
                <textarea name="justificacion" placeholder="Justificación de la respuesta"></textarea>
            </div>

            <div>
                <p>¿Cuáles fueron las habilidades del pensamiento que empleé principalmente?</p>
                @foreach($pregunta->habilidades as $habilidad)
                    <label>
                        <input type="checkbox" name="habilidades[]" value="{{ $habilidad->PK_ID_HABILIDAD }}">
                        {{ $habilidad->NOMBRE }}
                    </label>
                @endforeach
            </div>

            <button type="submit">Enviar Respuesta</button>
        </form>
    </div>
</section>
@endsection
