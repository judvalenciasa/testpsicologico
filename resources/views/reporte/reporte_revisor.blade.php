<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Respuestas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reporte_respuestas.css') }}">
</head>
<body>
    @include('shared.header')

    <section class="reporte_respuestas_section">
        <div class="report-header">
            <div>
                <h1>Reporte de Respuestas</h1>
                <p class="subtitle">Detalle de respuestas y subrespuestas del usuario seleccionado.</p>
            </div>
            <div class="summary-chips">
                <span class="chip">Respuestas calificables: {{ $respuestasCalificables ?? 0 }}</span>
                <span class="chip">Subrespuestas calificables: {{ $subrespuestasCalificables ?? 0 }}</span>
            </div>
        </div>

        <div class="table-card">
            <h2 class="table-title">Respuestas</h2>
            <div class="table-wrapper">
                <table id="tabla-respuestas" class="center">
                    <thead>
                        <tr>
                            <th>Id contexto</th>
                            <th>Habilidad</th>
                            <th>Subhabilidad</th>
                            <th>Contexto</th>
                            <th>Texto de la Pregunta</th>
                            <th>Respuesta</th>
                            <th>Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informe['respuestas'] as $respuesta)
                        <tr>
                            <td class="col-id-contexto">{{ $respuesta['id_contexto'] }}</td>
                            <td class="col-habilidad">{{ $respuesta['habilidad'] }}</td>
                            <td class="col-subhabilidad">{{ $respuesta['subhabilidad'] }}</td>
                            <td class="text-cell">
                                @php
                                    $contextoTexto = (string) ($respuesta['contexto'] ?? '');
                                    $contextoCorto = \Illuminate\Support\Str::limit($contextoTexto, 180);
                                    $mostrarToggle = mb_strlen($contextoTexto) > mb_strlen($contextoCorto);
                                @endphp
                                <span id="contexto-{{ $loop->index }}" class="context-preview">{{ $contextoCorto }}</span>
                                @if($mostrarToggle)
                                    <button
                                        type="button"
                                        class="toggle-context-btn"
                                        data-target="contexto-{{ $loop->index }}"
                                        data-short="{{ $contextoCorto }}"
                                        data-full="{{ $contextoTexto }}"
                                        data-expanded="false"
                                    >
                                        Mostrar más
                                    </button>
                                @endif
                            </td>
                            <td class="text-cell">
                                @php
                                    $preguntaTexto = (string) ($respuesta['texto_pregunta'] ?? '');
                                    $preguntaCorta = \Illuminate\Support\Str::limit($preguntaTexto, 180);
                                    $mostrarTogglePregunta = mb_strlen($preguntaTexto) > mb_strlen($preguntaCorta);
                                @endphp
                                <span id="pregunta-{{ $loop->index }}" class="context-preview">{{ $preguntaCorta }}</span>
                                @if($mostrarTogglePregunta)
                                    <button
                                        type="button"
                                        class="toggle-context-btn"
                                        data-target="pregunta-{{ $loop->index }}"
                                        data-short="{{ $preguntaCorta }}"
                                        data-full="{{ $preguntaTexto }}"
                                        data-expanded="false"
                                    >
                                        Mostrar más
                                    </button>
                                @endif
                            </td>
                            <td class="text-cell">
                                @php
                                    $respuestaTexto = (string) ($respuesta['respuesta_texto'] ?? '');
                                    $respuestaCorta = \Illuminate\Support\Str::limit($respuestaTexto, 180);
                                    $mostrarToggleRespuesta = mb_strlen($respuestaTexto) > mb_strlen($respuestaCorta);
                                @endphp
                                <span id="respuesta-{{ $loop->index }}" class="context-preview">{{ $respuestaCorta }}</span>
                                @if($mostrarToggleRespuesta)
                                    <button
                                        type="button"
                                        class="toggle-context-btn"
                                        data-target="respuesta-{{ $loop->index }}"
                                        data-short="{{ $respuestaCorta }}"
                                        data-full="{{ $respuestaTexto }}"
                                        data-expanded="false"
                                    >
                                        Mostrar más
                                    </button>
                                @endif
                            </td>
                            <td class="score-cell">{{ $respuesta['calificacion'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="paginacion-respuestas" class="table-pagination"></div>
        </div>

        <div class="table-card">
            <h2 class="table-title">Subrespuestas</h2>
            <div class="table-wrapper">
                <table id="tabla-subrespuestas" class="center subrespuestas-table">
                    <thead>
                        <tr>
                            <th class="col-subrespuesta-texto">Texto subpregunta</th>
                            <th class="col-subrespuesta-respuesta">Respuesta</th>
                            <th class="col-subrespuesta-calificacion">Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informe['subrespuestas'] as $subrespuesta)
                        <tr>
                            <td class="text-cell col-subrespuesta-texto">
                                @php
                                    $subpreguntaTexto = (string) ($subrespuesta['texto_subpregunta'] ?? '');
                                    $subpreguntaCorto = \Illuminate\Support\Str::limit($subpreguntaTexto, 160);
                                    $mostrarToggleSubpregunta = mb_strlen($subpreguntaTexto) > mb_strlen($subpreguntaCorto);
                                @endphp
                                <span id="subpregunta-{{ $loop->index }}" class="context-preview">{{ $subpreguntaCorto }}</span>
                                @if($mostrarToggleSubpregunta)
                                    <button
                                        type="button"
                                        class="toggle-context-btn"
                                        data-target="subpregunta-{{ $loop->index }}"
                                        data-short="{{ $subpreguntaCorto }}"
                                        data-full="{{ $subpreguntaTexto }}"
                                        data-expanded="false"
                                    >
                                        Mostrar más
                                    </button>
                                @endif
                            </td>
                            <td class="text-cell col-subrespuesta-respuesta">{{ $subrespuesta['respuesta'] }}</td>
                            <td class="score-cell col-subrespuesta-calificacion">{{ $subrespuesta['calificacion_respuesta'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="paginacion-subrespuestas" class="table-pagination"></div>
        </div>

        <div class="actions-row">
            <a href="{{ route('private.usuarios') }}" class="btn">Volver a Usuarios</a>
        </div>

    </section>
    @include('shared.footer')
    <script>
        const PAGE_SIZE = 10;

        function setupTablePagination(tableId, paginationId, pageSize) {
            const table = document.getElementById(tableId);
            const paginationContainer = document.getElementById(paginationId);
            if (!table || !paginationContainer) {
                return;
            }

            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            const totalPages = Math.ceil(rows.length / pageSize);

            if (rows.length === 0) {
                paginationContainer.innerHTML = '';
                return;
            }

            let currentPage = 1;

            function renderRows() {
                const start = (currentPage - 1) * pageSize;
                const end = start + pageSize;
                rows.forEach((row, index) => {
                    row.style.display = index >= start && index < end ? '' : 'none';
                });
            }

            function createButton(label, className, onClick, disabled = false, active = false) {
                const button = document.createElement('button');
                button.type = 'button';
                button.textContent = label;
                button.className = className;
                if (active) {
                    button.classList.add('active');
                }
                button.disabled = disabled;
                button.addEventListener('click', onClick);
                return button;
            }

            function renderControls() {
                paginationContainer.innerHTML = '';

                if (totalPages <= 1) {
                    return;
                }

                const controls = document.createElement('div');
                controls.className = 'pagination-controls';

                controls.appendChild(
                    createButton(
                        'Anterior',
                        'pagination-btn',
                        () => {
                            if (currentPage > 1) {
                                currentPage--;
                                renderRows();
                                renderControls();
                            }
                        },
                        currentPage === 1
                    )
                );

                for (let page = 1; page <= totalPages; page++) {
                    controls.appendChild(
                        createButton(
                            String(page),
                            'pagination-btn page-number',
                            () => {
                                currentPage = page;
                                renderRows();
                                renderControls();
                            },
                            false,
                            currentPage === page
                        )
                    );
                }

                controls.appendChild(
                    createButton(
                        'Siguiente',
                        'pagination-btn',
                        () => {
                            if (currentPage < totalPages) {
                                currentPage++;
                                renderRows();
                                renderControls();
                            }
                        },
                        currentPage === totalPages
                    )
                );

                const meta = document.createElement('span');
                meta.className = 'pagination-meta';
                meta.textContent = `Página ${currentPage} de ${totalPages}`;

                paginationContainer.appendChild(controls);
                paginationContainer.appendChild(meta);
            }

            renderRows();
            renderControls();
        }

        document.addEventListener('DOMContentLoaded', function() {
            setupTablePagination('tabla-respuestas', 'paginacion-respuestas', PAGE_SIZE);
            setupTablePagination('tabla-subrespuestas', 'paginacion-subrespuestas', PAGE_SIZE);
        });

        document.addEventListener('click', function(event) {
            const button = event.target.closest('.toggle-context-btn');
            if (!button) {
                return;
            }

            const targetId = button.dataset.target;
            const targetElement = document.getElementById(targetId);
            if (!targetElement) {
                return;
            }

            const expanded = button.dataset.expanded === 'true';
            if (expanded) {
                targetElement.textContent = button.dataset.short;
                button.textContent = 'Mostrar más';
                button.dataset.expanded = 'false';
            } else {
                targetElement.textContent = button.dataset.full;
                button.textContent = 'Mostrar menos';
                button.dataset.expanded = 'true';
            }
        });
    </script>

</body>
</html>
