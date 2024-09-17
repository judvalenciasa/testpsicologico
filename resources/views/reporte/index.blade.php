<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Descriptivo</title>
    <link rel="stylesheet" href="{{ asset('css/reporte_usuario.css') }}">
</head>
<body>

    @include('shared.header')

    <section class="report_section">
        <div class="container">
            <h1>Reporte Descriptivo</h1>

           

            @php $count = 0; $indice = 1; @endphp
            <div class="row">
                @foreach($informe_final as $key => $documento)
                <div class="col section">
                    <h2>{{ $key }}</h2>

                    @if(is_array($documento))
                    @foreach($documento as $subKey => $subDocumento)
                    @if(is_array($subDocumento))
                    @foreach($subDocumento as $detalleKey => $detalle)
                    @if(is_array($detalle))
                    @foreach($detalle as $detalleSubKey => $detalleValor)
                    <div class="descriptor">
                        <p><strong>{{ ucfirst($detalleSubKey) }}:</strong> {{ $detalleValor }}</p>
                    </div>
                    @endforeach
                    @else
                    <div class="descriptor">
                        <p><strong>{{ ucfirst($detalleKey) }}:</strong> {{ $detalle }}</p>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <div class="descriptor">
                        <p><strong>{{ $subKey }}:</strong> {{ $subDocumento }}</p>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>

                @php $count++; $indice++; @endphp

                <!-- Cada dos elementos, cerramos la fila y abrimos una nueva -->
                @if($count % 2 == 0)
            </div>
            <div class="row">
                @endif
                @endforeach
            </div> <!-- Cierra el último contenedor row -->
            <div class="btn_terminar">
                <a href="{{ route('logout') }}" class="btn btn-primary">Terminar</a>
            </div>
        </div>
    </section>

    @include('shared.footer')

</body>
</html>
