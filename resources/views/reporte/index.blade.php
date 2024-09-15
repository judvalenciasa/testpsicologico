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

            <!-- Sección de Datos Personales -->
            <div class="section">
                <h2>Datos Personales</h2>
                <p><strong>Documento de Identificación:</strong> {{ $respuesta['Personales'][0]['documento_identificacion'] }}</p>
                <p><strong>Edad:</strong> {{ $respuesta['Personales'][0]['edad'] }}</p>
                <p><strong>Género:</strong> {{ $respuesta['Personales'][0]['genero'] }}</p>
            </div>

            <!-- Sección de Datos Sociodemográficos -->
            <div class="section">
                <h2>Datos Sociodemográficos</h2>
                <p><strong>Estrato:</strong> {{ $respuesta['Sociodemograficos'][0]['estrato'] }}</p>
                <p><strong>Nivel Educativo Padre:</strong> {{ $respuesta['Sociodemograficos'][0]['nivel_educativo_padre'] }}</p>
                <p><strong>Nivel Educativo Madre:</strong> {{ $respuesta['Sociodemograficos'][0]['nivel_educativo_madre'] }}</p>
            </div>

            <!-- Sección de Estilos de Vida -->
            <div class="section">
                <h2>Estilos de Vida</h2>
                <p><strong>Horas de Lectura:</strong> {{ $respuesta['estilos_vida'][0]['horas_lectura'] }}</p>
                <p><strong>Horas en Redes Sociales:</strong> {{ $respuesta['estilos_vida'][0]['horas_redes_sociales'] }}</p>
                <p><strong>Horas de Entretenimiento:</strong> {{ $respuesta['estilos_vida'][0]['horas_entretenimiento'] }}</p>
                <p><strong>Horas de Sueño:</strong> {{ $respuesta['estilos_vida'][0]['hora_sueno'] }}</p>
                <p><strong>Promedio de Actividades Artísticas:</strong> {{ $respuesta['estilos_vida'][0]['promedio_arte'] }}</p>
            </div>

            <!-- Sección de Saludable -->
            <div class="section">
                <h2>Saludable</h2>
                <p><strong>Promedio de Deporte:</strong> {{ $respuesta['saludable'][0]['promedio_deporte'] }}</p>
                <p><strong>Consumo de Grasas:</strong> {{ $respuesta['saludable'][0]['grasas'] }}</p>
                <p><strong>Consumo de Alimentos Saludables:</strong> {{ $respuesta['saludable'][0]['alimentos_saludables'] }}</p>
            </div>

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
        </div>
    </section>

    @include('shared.footer')

</body>
</html>
