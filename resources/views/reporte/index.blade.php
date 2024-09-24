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

            <!-- Sección de Metacognición y Motivación -->
            @if(isset($informe_final['metacognicion_motivacion']))
            @php
            $metacognicion = $informe_final['metacognicion_motivacion'];
            @endphp

            <div class="metacognicion-motivacion-section">

                <div class="caracterizacion_ctn">
                    <div class="title">
                        <h2>Caracterización</h2>
                    </div>

                    <div class="datos-personales">
                        <h3>Datos sociodemográficos y personales del (la) examinando(a)</h3>
                        <p><strong>Documento de identificación del Participante:</strong> {{ $metacognicion['documento_identificacion'] }}</p>
                        <p><strong>Edad:</strong> {{ $metacognicion['edad'] }}</p>
                        <p><strong>Género:</strong> {{ $metacognicion['genero'] }}</p>
                    </div>

                    <div class="datos-demograficos">
                        <h3>Datos sociodemográficos</h3>
                        <p><strong>Estrato socioeconómico en que vive:</strong> {{ $metacognicion['estrato'] }}</p>
                        <p><strong>Nivel de escolaridad en el que se encuentra:</strong> {{ $metacognicion['nivel_escolaridad'] }}</p>
                        <p><strong>Último nivel de escolaridad alcanzado por alguno de sus padres:</strong> {{ $metacognicion['nivel_educativo_padre'] }}</p>
                    </div>

                    <div class="habitos-personales">
                        <h3>Datos sobre estilos de vida</h3>
                        <p><strong>Cantidad promedio de horas semanales dedicadas a la lectura :</strong> {{ $metacognicion['horas_lectura'] }}</p>
                        <p><strong>Cantidad promedio de horas semanales destinadas a estar en redes sociales :</strong> {{ $metacognicion['horas_redes_sociales'] }}</p>
                        <p><strong>Cantidad promedio de horas semanales destinadas al entretenimiento con videojuegos en consolas o a través de internet:</strong> {{ $metacognicion['horas_entretenimiento'] }}</p>
                        <p><strong>Cantidad promedio de horas semanales dedicadas en la noche a dormir:</strong> {{ $metacognicion['hora_sueno'] }}</p>
                        <p><strong>Practica algún arte como música, pintura, manualidades o danza de manera recurrente: </strong> {{ $metacognicion['promedio_arte'] }}</p>
                    </div>

                    <div class="habitos-salud">
                        <h3>Datos sobre hábitos de vida saludable</h3>
                        <p><strong>Practica algún arte como música, pintura, manualidades o danza de manera recurrente: </strong> {{ $metacognicion['promedio_deporte'] }}</p>
                        <p><strong>En su dieta están siempre presentes grasas saturadas como salsas, o papas y/o carnes fritas o procesadas: </strong> {{ $metacognicion['grasas'] }}</p>
                        <p><strong>En su dieta incluye alimentos saludables como carnes blancas, verduras/vegetales, frutas y frutos secos: </strong> {{ $metacognicion['alimentos_saludables'] }}</p>
                        <p><strong>Bebe 1 litro o más de agua al día: </strong> {{ $metacognicion['litro_agua'] }}</p>
                    </div>
                </div>

                <div class="calificacion-desempeno-critico calificacion_ctn">
                    <div class="title">
                        <h2>Puntuación Lograda en Motivación</h2>
                    </div>

                    <div class="card_box">
                        <h3>Motivación intrínseca</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['motivacion_intrinseca'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Motivación extrínseca</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['motivacion_extrinseca'] }}</p>
                        </div>
                    </div>


                    <div class="card_box">
                        <h3>Puntuación total lograda en Motivación</h3>
                        </h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['total_motivación'] }}</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Recorre los contextos -->
            <div class="contexto-row">
                @foreach($informe_final as $key => $documento)
                @if($key !== 'metacognicion_motivacion') <!-- Excluye metacognicion_motivacion -->
                <div class="contexto-section">
                    <h2>{{ $key }}</h2> <!-- Título del contexto (ej: "Contexto 1") -->

                    <!-- Recorre los items dentro del contexto -->
                    @foreach($documento as $itemKey => $item)
                    <!-- Si el item es un array, recorremos sus detalles -->
                    @if(is_array($item))
                    <div class="item-card">
                        <h3>{{ $itemKey }}</h3> <!-- Nombre del item (ej: "Item 1") -->

                        <!-- Recorre los detalles del item -->
                        @foreach($item as $detalleKey => $detalleValor)
                        <p><strong>{{ ucfirst($detalleKey) }}:</strong> {{ $detalleValor }}</p>
                        @endforeach
                    </div>
                    @else
                    <!-- Si no es un array, es un valor simple (ej: el descriptor o id_contexto) -->
                    <p><strong>{{ ucfirst($itemKey) }}:</strong> {{ $item }}</p>
                    @endif
                    @endforeach
                </div>
                @endif
                @endforeach
            </div> <!-- Cierra contexto-row -->



            <div class="metacognicion-motivacion-section">

                <div class="calificacion-desempeno-critico calificacion_ctn">
                    <div class="title">
                        <h2>Niveles de desempeño del pensamiento crítico logrado por Macrohabilidad y ejercicio cognitivo</h2>
                    </div>
                    <div class="card_box">
                        <h3>Macrohabilidad Razonamiento inductivo</h3>
                        <div class="text_box">
                            <p><strong>Inducción general:</strong> {{ $metacognicion['induccion_general'] }}</p>
                            <p><strong>Inducción específica:</strong> {{ $metacognicion['induccion_especifica'] }}</p>
                            <p><strong>Total: </strong> {{ $metacognicion['total_macrohabilidad_inductiva'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_inductivo'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Macrohabilidad Razonamiento abductivo</h3>
                        <div class="text_box">
                            <p><strong>Comprobación de hipótesis:</strong> {{ $metacognicion['comprobacion_hipotesis'] }}</p>
                            <p><strong>Uso de probabilidad e incertidumbre:</strong> {{ $metacognicion['uso_probabilidad_incertidumbre'] }}</p>
                            <p><strong>Total: </strong> {{ $metacognicion['total_macrohabilidad_abductiva'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_abductivo'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Macrohabilidad Razonamiento deductivo y verbal</h3>
                        <div class="text_box">
                            <p><strong>Identificación de fallo por analogía: </strong> {{ $metacognicion['identificacion_analogia'] }}</p>
                            <p><strong>Identificación de fallo por vaguedad:</strong> {{ $metacognicion['identificacion_por_fallo_vaguedad'] }}</p>
                            <p><strong>Total: </strong> {{ $metacognicion['total_macrohabilidad_deductivo_y_verbal'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_deductivo_y_verbal'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Macrohabilidad Análisis de argumentos</h3>
                        <div class="text_box">
                            <p><strong>Identificación de estructura argumentativa: </strong> {{ $metacognicion['identificacion_estructura_argumentativa'] }}</p>
                            <p><strong>Identificación de suposición:</strong> {{ $metacognicion['identificacion_de_suposicion'] }}</p>
                            <p><strong>Identificación de falacia:</strong> {{ $metacognicion['identificacion_de_falacia'] }}</p>
                            <p><strong>Total: </strong> {{ $metacognicion['total_macrohabilidad_analisis_de_argumentos'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_analisis_de_argumentos'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Macrohabilidad Toma de decisiones y resolución de problemas</h3>
                        <div class="text_box">
                            <p><strong>Toma de decisiones informadas: </strong> {{ $metacognicion['toma_desiciones_informadas'] }}</p>
                            <p><strong>Conciencia de situación y acciones razonables: </strong> {{ $metacognicion['conciencia_situacion_acciones_razonables'] }}</p>
                            <p><strong>Pensamiento estratégico: </strong> {{ $metacognicion['pensamiento_estrategico'] }}</p>
                            <p><strong>Pensamiento creativo: </strong> {{ $metacognicion['pensamiento_creativo'] }}</p>
                            <p><strong>Total: </strong> {{ $metacognicion['macrohabilidad_toma_desiciones_y_resolucion_problemas'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_toma_desiciones_y_resolucion_problemas'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Nivel de desempeño del pensamiento crítico global o total alcanzado</h3>
                        <div class="text_box">
                            <p><strong>Total : </strong> {{ $metacognicion['calificacion_total'] }}</p>
                            <p><strong>Nivel: </strong> {{ $metacognicion['nivel_total'] }}</p>

                        </div>
                    </div>
                </div>

                <div class="calificacion-desempeno-critico calificacion_ctn">
                    <div class="title">
                        <h2>Regulación de la cognición: es la forma
                            en que los estudiantes regulan la cognición a través de cinco (5) subprocesos. </h2>
                    </div>

                    <div class="card_box">
                        <h3>Planificación</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['planificacion'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Organización de la información</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['organizacion'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Monitoreo</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['monitoreo'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Depuración</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['depuracion'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Evaluación</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['evaluacion'] }}</p>
                        </div>
                    </div>

                    <div class="card_box">
                        <h3>Puntuación total lograda en Regulación de la cognición</h3>
                        <div class="text_box">
                            <p><strong>Calificación : </strong> {{ $metacognicion['calificacion_metacognicion'] }}</p>
                        </div>
                    </div>

                </div>


            </div> <!-- Cierra metacognicion-motivacion-section -->
            @endif
        </div> <!-- Cierra el container -->

        <!-- Botón de terminar -->
        <div class="btn_terminar">
            <form class="form_ctn" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">
                    Terminar
                </button>
            </form>
        </div>
    </section>

    @include('shared.footer')

</body>

</html>