<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Resultados</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
</head>

<body class="antialiased">

    @include('shared.header')

    <section class="reporte_section">
        <div class="title">
            <h1>Reporte de Resultados</h1>
        </div>
        <div class="tablas_ctn">
            <div class="section">
                <h2>Datos Personales</h2>
                <table class="table">
                    <tr>
                        <th>Documento de Identificación</th>
                        <th>Edad</th>
                        <th>Género</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['Personales'][0]['documento_identificacion'] }}</td>
                        <td>{{ $respuesta['Personales'][0]['edad'] }}</td>
                        <td>{{ $respuesta['Personales'][0]['genero'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Datos Sociodemográficos</h2>
                <table class="table">
                    <tr>
                        <th>Estrato</th>
                        <th>Nivel Educativo Padre</th>
                        <th>Nivel Educativo Madre</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['Sociodemograficos'][0]['estrato'] }}</td>
                        <td>{{ $respuesta['Sociodemograficos'][0]['nivel_educativo_padre'] }}</td>
                        <td>{{ $respuesta['Sociodemograficos'][0]['nivel_educativo_madre'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Estilos de Vida</h2>
                <table class="table">
                    <tr>
                        <th>Horas de Lectura</th>
                        <th>Horas en Redes Sociales</th>
                        <th>Horas de Entretenimiento</th>
                        <th>Horas de Sueño</th>
                        <th>Promedio en Arte</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['estilos_vida'][0]['horas_lectura'] }}</td>
                        <td>{{ $respuesta['estilos_vida'][0]['horas_redes_sociales'] }}</td>
                        <td>{{ $respuesta['estilos_vida'][0]['horas_entretenimiento'] }}</td>
                        <td>{{ $respuesta['estilos_vida'][0]['hora_sueno'] }}</td>
                        <td>{{ $respuesta['estilos_vida'][0]['promedio_arte'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Alimentación Saludable</h2>
                <table class="table">
                    <tr>
                        <th>Promedio de Deporte</th>
                        <th>Consumo de Grasas</th>
                        <th>Alimentos Saludables</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['saludable'][0]['promedio_deporte'] }}</td>
                        <td>{{ $respuesta['saludable'][0]['grasas'] }}</td>
                        <td>{{ $respuesta['saludable'][0]['alimentos_saludables'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Macrohabilidad Inductiva</h2>
                <table class="table">
                    <tr>
                        <th>Inducción General</th>
                        <th>Inducción Específica</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_inductiva'][0]['induccion_general'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_inductiva'][0]['induccion_especifica'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_inductiva'][0]['total'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Macrohabilidad Abductiva</h2>
                <table class="table">
                    <tr>
                        <th>Comprobación de Hipótesis</th>
                        <th>Uso de Probabilidad e Incertidumbre</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_abductiva'][0]['comprobacion_hipotesis'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_abductiva'][0]['uso_probabilidad_incertidumbre'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_abductiva'][0]['total'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Macrohabilidad Deductivo y Verbal</h2>
                <table class="table">
                    <tr>
                        <th>Identificación de Fallo por Analogía</th>
                        <th>Identificación de Fallo por Vaguedad</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_deductivo_y_verbal'][0]['identificacion_analogia'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_deductivo_y_verbal'][0]['identificacion_por_fallo_vaguedad'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_deductivo_y_verbal'][0]['total'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Macrohabilidad de Análisis de Argumentos</h2>
                <table class="table">
                    <tr>
                        <th>Identificación de Estructura Argumentativa</th>
                        <th>Identificación de Suposición</th>
                        <th>Identificación de Falacia</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_analisis_de_argumentos'][0]['identificacion_estructura_argumentativa'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_analisis_de_argumentos'][0]['identificacion_de_suposicion'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_analisis_de_argumentos'][0]['identificacion_de_falacia'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_analisis_de_argumentos'][0]['total'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Toma de Decisiones y Resolución de Problemas</h2>
                <table class="table">
                    <tr>
                        <th>Toma de Decisiones Informadas</th>
                        <th>Conciencia de Situación y Acciones Razonables</th>
                        <th>Pensamiento Estratégico</th>
                        <th>Pensamiento Creativo</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas'][0]['toma_desiciones_informadas'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas'][0]['conciencia_situacion_acciones_razonables'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas'][0]['pensamiento_estrategico'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas'][0]['pensamiento_creativo'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2>Metacognición - Conocimiento Procedimental</h2>
                <table class="table">
                    <tr>
                        <th>Conocimiento Procedimental</th>
                        <th>Depuración</th>
                        <th>Evaluación</th>
                        <th>Monitoreo</th>
                        <th>Organización</th>
                        <th>Planificación</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['conocimiento_procedimental'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['depuracion'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['evaluacion'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['monitoreo'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['organizacion'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['planificacion'] }}</td>
                        <td>{{ $respuesta['macrohabilidad_toma_desiciones_y_resolucion_problemas']['metacognicion_conocimiento_procedimental'][0]['total'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    @include('shared.footer')


</body>

</html>