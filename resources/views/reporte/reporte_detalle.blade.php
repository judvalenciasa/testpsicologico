<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Reporte #{{ $reporte->id_informe }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
</head>

<body>

    @include('shared.header')

    <section class="reporte_section">
        <div class="title">
            <h1>Detalle del Reporte #{{ $reporte->id_informe }} del usuario con identificación {{ $reporte->documento_identificacion }}</h1>
        </div>
        <div class="tiempo_prueba_ctn">
            <h2>Tiempo de la Prueba</h2>
            <p>{{ $reporte->tiempo_prueba }}</p>
        </div>

        <div class="tablas_ctn">
            <!-- Datos Personales -->
            <div class="section">
                <h2>Datos Personales</h2>
                <table class="table">
                    <tr>
                        <th>Documento de Identificación</th>
                        <th>Edad</th>
                        <th>Género</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->documento_identificacion }}</td>
                        <td>{{ $reporte->edad }}</td>
                        <td>{{ $reporte->genero }}</td>
                    </tr>
                </table>
            </div>

            <!-- Datos Sociodemográficos -->
            <div class="section">
                <h2>Datos Sociodemográficos</h2>
                <table class="table">
                    <tr>
                        <th>Estrato</th>
                        <th>Nivel Educativo Padre</th>
                        <th>Nivel Educativo Madre</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->estrato }}</td>
                        <td>{{ $reporte->nivel_educativo_padre }}</td>
                        <td>{{ $reporte->nivel_educativo_madre }}</td>
                    </tr>
                </table>
            </div>

            <!-- Estilos de Vida -->
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
                        <td>{{ $reporte->horas_lectura }}</td>
                        <td>{{ $reporte->horas_redes_sociales }}</td>
                        <td>{{ $reporte->horas_entretenimiento }}</td>
                        <td>{{ $reporte->hora_sueno }}</td>
                        <td>{{ $reporte->promedio_arte }}</td>
                    </tr>
                </table>
            </div>

            <!-- Alimentación Saludable -->
            <div class="section">
                <h2>Alimentación Saludable</h2>
                <table class="table">
                    <tr>
                        <th>Promedio de Deporte</th>
                        <th>Consumo de Grasas</th>
                        <th>Alimentos Saludables</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->promedio_deporte }}</td>
                        <td>{{ $reporte->grasas }}</td>
                        <td>{{ $reporte->alimentos_saludables }}</td>
                    </tr>
                </table>
            </div>

            <!-- Macrohabilidad Inductiva -->
            <div class="section">
                <h2>Macrohabilidad Inductiva</h2>
                <table class="table">
                    <tr>
                        <th>Inducción General</th>
                        <th>Inducción Específica</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->induccion_general }}</td>
                        <td>{{ $reporte->induccion_especifica }}</td>
                        <td>{{ $reporte->total_macrohabilidad_inductiva }}</td>
                    </tr>
                </table>
            </div>

            <!-- Macrohabilidad Abductiva -->
            <div class="section">
                <h2>Macrohabilidad Abductiva</h2>
                <table class="table">
                    <tr>
                        <th>Comprobación de Hipótesis</th>
                        <th>Uso de Probabilidad e Incertidumbre</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->comprobacion_hipotesis }}</td>
                        <td>{{ $reporte->uso_probabilidad_incertidumbre }}</td>
                        <td>{{ $reporte->total_macrohabilidad_abductiva }}</td>

                    </tr>
                </table>
            </div>

            <!-- Macrohabilidad Deductiva y Verbal -->
            <div class="section">
                <h2>Macrohabilidad Deductiva y Verbal</h2>
                <table class="table">
                    <tr>
                        <th>Identificación de Fallo por Analogía</th>
                        <th>Identificación de Fallo por Vaguedad</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->identificacion_analogia }}</td>
                        <td>{{ $reporte->identificacion_por_fallo_vaguedad }}</td>
                        <td>{{ $reporte->identificacion_analogia + $reporte->identificacion_por_fallo_vaguedad }}</td>
                    </tr>
                </table>
            </div>

            <!-- Macrohabilidad de Análisis de Argumentos -->
            <div class="section">
                <h2>Macrohabilidad de Análisis de Argumentos</h2>
                <table class="table">
                    <tr>
                        <th>Identificación de Estructura Argumentativa</th>
                        <th>Identificación de Suposición</th>
                        <th>Identificación de Falacia</th>
                        <th>Total</th>
                        <th>Nivel</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->identificacion_estructura_argumentativa }}</td>
                        <td>{{ $reporte->identificacion_de_suposicion }}</td>
                        <td>{{ $reporte->identificacion_de_falacia }}</td>
                        <td>{{ $reporte->identificacion_estructura_argumentativa + $reporte->identificacion_de_suposicion + $reporte->identificacion_de_falacia }}</td>
                    </tr>
                </table>
            </div>

            <!-- Toma de Decisiones y Resolución de Problemas -->
            <div class="section">
                <h2>Toma de Decisiones y Resolución de Problemas</h2>
                <table class="table">
                    <tr>
                        <th>Toma de Decisiones Informadas</th>
                        <th>Conciencia de Situación y Acciones Razonables</th>
                        <th>Pensamiento Estratégico</th>
                        <th>Pensamiento Creativo</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{ $reporte->toma_decisiones_informadas }}</td>
                        <td>{{ $reporte->conciencia_situacion_acciones_razonables }}</td>
                        <td>{{ $reporte->pensamiento_estrategico }}</td>
                        <td>{{ $reporte->pensamiento_creativo }}</td>
                        <td>{{ $reporte->toma_decisiones_informadas + $reporte->conciencia_situacion_acciones_razonables + $reporte->pensamiento_estrategico + $reporte->pensamiento_creativo }}</td>
                    </tr>
                </table>
            </div>

            <!-- Metacognición - Conocimiento Procedimental -->
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
                        <td>{{ $reporte->conocimiento_procedimental }}</td>
                        <td>{{ $reporte->depuracion }}</td>
                        <td>{{ $reporte->evaluacion }}</td>
                        <td>{{ $reporte->monitoreo }}</td>
                        <td>{{ $reporte->organizacion }}</td>
                        <td>{{ $reporte->planificacion }}</td>
                        <td>{{ $reporte->calificacion_metacognicion }}</td>
                    </tr>
                </table>
            </div>

        </div>

        <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>
    </section>

    @include('shared.footer')

</body>

</html>