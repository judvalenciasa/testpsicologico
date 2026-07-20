<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas 1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estadisticas.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
</head>

<body>
    @include('shared.header')

    <main class="stats-page">
        <div class="stats-header">
            <div>
                <h1>Gráficas 1</h1>
                <p>Caracterización, motivación, desempeño cognitivo y comparación frente al grupo de presentación, para un estudiante específico.</p>
            </div>
            <a href="{{ route('administrator-page') }}" class="back-btn">Volver</a>
        </div>

        <section class="filters-card">
            <div class="filters-head">
                <h2>Filtros de análisis</h2>
                <p>Selecciona primero el año y luego el estudiante para generar las gráficas.</p>
            </div>
            <div class="filters-grid">
                <label class="filter-field field-year">
                    <span>Año</span>
                    <select id="filter-year">
                        <option value="">Selecciona un año</option>
                    </select>
                </label>
                <label class="filter-field field-user">
                    <span>Estudiante</span>
                    <select id="filter-user">
                        <option value="">Selecciona un estudiante</option>
                    </select>
                </label>
            </div>
            <div class="filters-actions">
                <button type="button" id="apply-filters">Aplicar filtros</button>
                <button type="button" id="clear-filters" class="secondary-btn">Limpiar</button>
            </div>
        </section>

        <div id="no-data-banner" class="no-data-banner" style="display:none;"></div>

        <div id="tests-container"></div>
    </main>

    @include('shared.footer')

    <script>
        const hasChartDataLabels = typeof ChartDataLabels !== 'undefined';
        if (hasChartDataLabels) {
            Chart.register(ChartDataLabels);
        }

        const statsUrl = "{{ route('stats.charts1.data') }}";

        const COLORS = {
            student: '#2f80ed',
            group: '#f2c94c',
            positive: '#27ae60',
            negative: '#eb5757',
            palette: ['#2f80ed', '#56ccf2', '#6fcf97', '#f2c94c', '#bb6bd9', '#eb5757']
        };

        const filters = {
            year: document.getElementById('filter-year'),
            user: document.getElementById('filter-user')
        };

        const noDataBanner = document.getElementById('no-data-banner');
        const testsContainer = document.getElementById('tests-container');

        const charts = {};
        const responseCache = new Map();
        let metadataLoaded = false;
        let lastSignature = '';

        function escapeHtml(value) {
            return String(value ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        // Convierte de forma segura el valor recibido por el formatter de datalabels a un número.
        // En gráficas con varios datasets, el valor puede llegar como número simple o, según el
        // contexto interno de Chart.js, como un objeto (ej. {x, y} o {raw}); por eso no se puede
        // hacer Number(value) directamente sin validar antes.
        function toDisplayNumber(value) {
            if (value === null || value === undefined) return 0;
            if (typeof value === 'number') return value;
            if (typeof value === 'object') {
                const raw = value.y ?? value.raw ?? value.value ?? value.parsed ?? 0;
                return Number(raw) || 0;
            }
            const parsed = Number(value);
            return Number.isFinite(parsed) ? parsed : 0;
        }

        function barDataLabelsOptions() {
            return {
                color: '#1e293b',
                font: { weight: '700', size: 11 },
                anchor: 'end',
                align: 'top',
                offset: 4,
                clamp: true,
                clip: false,
                formatter: (value) => toDisplayNumber(value)
            };
        }

        // Deja siempre un margen encima de la barra más alta para que su etiqueta
        // (el puntaje) no quede recortada por el borde superior del canvas.
        function suggestedMaxWithHeadroom(values) {
            const numbers = (values || []).map((v) => Number(v ?? 0));
            const max = numbers.length ? Math.max(...numbers, 0) : 0;
            if (max <= 0) return undefined;
            return Math.ceil(max * 1.18) + 2;
        }

        function barChartLayoutPadding() {
            return { top: 26, right: 10, left: 4, bottom: 0 };
        }

        function levelBadgeClass(level) {
            const normalized = String(level ?? '').toLowerCase();
            if (normalized.includes('alto')) return 'level-badge level-alto';
            if (normalized.includes('medio')) return 'level-badge level-medio';
            if (normalized.includes('bajo')) return 'level-badge level-bajo';
            return 'level-badge';
        }

        function createOrUpdateChart(key, ctx, type, data, options) {
            if (!ctx) return null;
            const current = charts[key];

            if (current) {
                current.destroy();
            }

            charts[key] = new Chart(ctx, { type, data, options });
            return charts[key];
        }

        function fillMetadata(filtersMeta) {
            const yearSelect = filters.year;
            const userSelect = filters.user;

            if (!metadataLoaded) {
                (filtersMeta.years || []).forEach((year) => {
                    const option = document.createElement('option');
                    option.value = String(year);
                    option.textContent = String(year);
                    yearSelect.appendChild(option);
                });
                metadataLoaded = true;
            }

            const previousUser = String(userSelect.value || '');
            userSelect.innerHTML = '<option value="">Selecciona un estudiante</option>';
            (filtersMeta.users || []).forEach((user) => {
                const option = document.createElement('option');
                option.value = user.id;
                option.textContent = user.name;
                userSelect.appendChild(option);
            });

            const userStillAvailable = Array.from(userSelect.options).some((option) => option.value === previousUser);
            userSelect.value = userStillAvailable ? previousUser : '';
        }

        function buildCharacterizationRows(rows) {
            return (rows || []).map((row) => {
                const percentage = row.percentage;
                const hasPercentage = percentage !== null && percentage !== undefined;
                const barWidth = hasPercentage ? Math.max(0, Math.min(100, Number(percentage))) : 0;
                const percentageLabel = hasPercentage
                    ? `${Number(percentage).toFixed(1)}% del grupo comparte este valor`
                    : 'Sin datos de grupo';

                return `
                    <tr>
                        <td>${escapeHtml(row.label)}</td>
                        <td>${escapeHtml(row.value ?? 'Sin dato')}</td>
                        <td>
                            <div class="char-percentage-cell">
                                <div class="char-percentage-bar"><span style="width:${barWidth}%"></span></div>
                                <span>${escapeHtml(percentageLabel)}</span>
                            </div>
                        </td>
                        <td>${row.group_size ?? 0}</td>
                    </tr>
                `;
            }).join('');
        }

        function buildMacroLevelBadges(macroLevels) {
            const labels = macroLevels?.labels || [];
            const levels = macroLevels?.levels || [];
            const rows = labels.map((label, index) => {
                const level = levels[index] ?? 'Sin nivel';
                return `<li><span>${escapeHtml(label)}</span><span class="${levelBadgeClass(level)}">${escapeHtml(level)}</span></li>`;
            }).join('');

            return `<ul class="level-badges-list">${rows}</ul>`;
        }

        function buildGroupComparisonBlock(groupComparison) {
            if (!groupComparison || !groupComparison.has_group) {
                return `<p class="chart-explainer">${escapeHtml(groupComparison?.message || 'No hay datos de grupo disponibles para esta presentación.')}</p>`;
            }

            const diff = Number(groupComparison.difference_vs_group ?? 0);
            const diffLabel = `${diff >= 0 ? '+' : ''}${diff.toFixed(2)}`;

            return `
                <div class="group-kpi-grid">
                    <article class="kpi-card"><span>Tamaño del grupo</span><strong>${groupComparison.group_size}</strong></article>
                    <article class="kpi-card"><span>Puesto en el grupo</span><strong>${groupComparison.rank ?? '-'} / ${groupComparison.group_size}</strong></article>
                    <article class="kpi-card"><span>Percentil</span><strong>${groupComparison.percentile ?? '-'}%</strong></article>
                    <article class="kpi-card"><span>Puntaje estudiante</span><strong>${groupComparison.student_total}</strong></article>
                    <article class="kpi-card"><span>Promedio del grupo</span><strong>${groupComparison.group_avg_total}</strong></article>
                </div>
                <p class="chart-explainer">
                    Diferencia frente al promedio del grupo: <strong>${diffLabel} puntos</strong>.
                    El estudiante se ubica mejor o igual que el ${groupComparison.percentile}% de su grupo de presentación.
                </p>
            `;
        }

        function buildTestBlockHtml(test) {
            const n = test.test_number;
            return `
                <section class="test-block" id="test-block-${n}">
                    <div class="test-block-header">
                        <h2>Prueba ${n}</h2>
                        <span>Fecha de presentación: ${escapeHtml(test.date)} &nbsp;|&nbsp; Tamaño del grupo: ${test.group_size}</span>
                    </div>

                    <div class="char-table-wrap">
                        <table class="char-table">
                            <thead>
                                <tr>
                                    <th>Variable</th>
                                    <th>Valor del estudiante</th>
                                    <th>% del grupo con el mismo valor</th>
                                    <th>Tamaño grupo</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${buildCharacterizationRows(test.characterization)}
                            </tbody>
                        </table>
                    </div>

                    <div class="charts1-grid-2">
                        <article class="chart-card">
                            <h3>Puntuación lograda en motivación</h3>
                            <canvas id="motivation-chart-${n}"></canvas>
                            <p class="chart-explainer">Compara motivación intrínseca, extrínseca y el total logrado por el estudiante.</p>
                        </article>
                        <article class="chart-card">
                            <h3>Niveles por macrohabilidad (pensamiento crítico)</h3>
                            <canvas id="macro-levels-chart-${n}"></canvas>
                            <p class="chart-explainer">
                                Puntaje logrado por macrohabilidad. Nivel general: <span class="${levelBadgeClass(test.macro_levels?.total_level)}">${escapeHtml(test.macro_levels?.total_level)}</span>
                            </p>
                            ${buildMacroLevelBadges(test.macro_levels)}
                        </article>
                    </div>

                    <div class="charts1-grid-2">
                        <article class="chart-card">
                            <h3>Metacognición general</h3>
                            <canvas id="metacognition-overview-chart-${n}"></canvas>
                            <p class="chart-explainer">Conocimiento procedimental frente a la regulación de la cognición y el total logrado en metacognición.</p>
                        </article>
                        <article class="chart-card">
                            <h3>Regulación de la cognición</h3>
                            <canvas id="regulation-chart-${n}"></canvas>
                            <p class="chart-explainer">Detalle de planificación, organización, monitoreo, depuración y evaluación.</p>
                        </article>
                    </div>

                    <div class="group-compare-card chart-card">
                        <h3>Comparación frente al grupo de presentación</h3>
                        ${buildGroupComparisonBlock(test.group_comparison)}
                        <canvas id="group-macro-chart-${n}"></canvas>
                    </div>
                </section>
            `;
        }

        function renderMotivationChart(test) {
            const n = test.test_number;
            createOrUpdateChart(
                `motivation-${n}`,
                document.getElementById(`motivation-chart-${n}`),
                'bar',
                {
                    labels: test.motivation?.labels || [],
                    datasets: [{
                        label: 'Motivación',
                        data: test.motivation?.values || [],
                        backgroundColor: COLORS.palette
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: { padding: barChartLayoutPadding() },
                    plugins: {
                        legend: { display: false },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: { y: { beginAtZero: true, suggestedMax: suggestedMaxWithHeadroom(test.motivation?.values) } }
                }
            );
        }

        function renderMacroLevelsChart(test) {
            const n = test.test_number;
            const macro = test.macro_levels || { labels: [], values: [], levels: [] };
            createOrUpdateChart(
                `macro-levels-${n}`,
                document.getElementById(`macro-levels-chart-${n}`),
                'bar',
                {
                    labels: macro.labels || [],
                    datasets: [{
                        label: 'Puntaje por macrohabilidad',
                        data: macro.values || [],
                        backgroundColor: COLORS.student
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: { padding: barChartLayoutPadding() },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                afterLabel: (item) => `Nivel: ${macro.levels?.[item.dataIndex] ?? 'Sin nivel'}`
                            }
                        },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: { y: { beginAtZero: true, suggestedMax: suggestedMaxWithHeadroom(macro.values) } }
                }
            );
        }

        function renderMetacognitionOverviewChart(test) {
            const n = test.test_number;
            const overview = test.metacognition?.overview || { labels: [], values: [] };
            createOrUpdateChart(
                `metacognition-overview-${n}`,
                document.getElementById(`metacognition-overview-chart-${n}`),
                'bar',
                {
                    labels: overview.labels || [],
                    datasets: [{
                        label: 'Metacognición',
                        data: overview.values || [],
                        backgroundColor: [COLORS.palette[0], COLORS.palette[1], COLORS.palette[3]]
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: { padding: barChartLayoutPadding() },
                    plugins: {
                        legend: { display: false },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: { y: { beginAtZero: true, suggestedMax: suggestedMaxWithHeadroom(overview.values) } }
                }
            );
        }

        function renderRegulationChart(test) {
            const n = test.test_number;
            const regulation = test.metacognition?.regulation || { labels: [], values: [] };
            createOrUpdateChart(
                `regulation-${n}`,
                document.getElementById(`regulation-chart-${n}`),
                'radar',
                {
                    labels: regulation.labels || [],
                    datasets: [{
                        label: 'Regulación de la cognición',
                        data: regulation.values || [],
                        borderColor: COLORS.student,
                        backgroundColor: 'rgba(47, 128, 237, 0.25)',
                        pointBackgroundColor: COLORS.student
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: { r: { beginAtZero: true } }
                }
            );
        }

        function renderGroupMacroChart(test) {
            const n = test.test_number;
            const comparison = test.group_comparison;
            if (!comparison || !comparison.has_group) {
                return;
            }
            const macro = comparison.macro_comparison || { labels: [], student: [], group_avg: [] };
            createOrUpdateChart(
                `group-macro-${n}`,
                document.getElementById(`group-macro-chart-${n}`),
                'bar',
                {
                    labels: macro.labels || [],
                    datasets: [
                        { label: 'Estudiante', data: macro.student || [], backgroundColor: COLORS.student },
                        { label: 'Promedio del grupo', data: macro.group_avg || [], backgroundColor: COLORS.group }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: { padding: barChartLayoutPadding() },
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: { position: 'top' },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            suggestedMax: suggestedMaxWithHeadroom([...(macro.student || []), ...(macro.group_avg || [])])
                        }
                    }
                }
            );
        }

        function renderTests(tests) {
            testsContainer.classList.toggle('two-columns', (tests || []).length === 2);
            testsContainer.innerHTML = (tests || []).map(buildTestBlockHtml).join('');

            (tests || []).forEach((test) => {
                renderMotivationChart(test);
                renderMacroLevelsChart(test);
                renderMetacognitionOverviewChart(test);
                renderRegulationChart(test);
                renderGroupMacroChart(test);
            });
        }

        function destroyAllCharts() {
            Object.keys(charts).forEach((key) => {
                if (charts[key]) {
                    charts[key].destroy();
                    delete charts[key];
                }
            });
        }

        function renderDashboard(data, hasSearch) {
            fillMetadata(data.filters_meta || {});

            if (!hasSearch) {
                noDataBanner.style.display = 'none';
                testsContainer.innerHTML = '';
                testsContainer.classList.remove('two-columns');
                destroyAllCharts();
                lastSignature = '';
                return;
            }

            if (!data.has_data) {
                noDataBanner.textContent = data.message || 'No hay datos disponibles.';
                noDataBanner.style.display = 'block';
                testsContainer.innerHTML = '';
                testsContainer.classList.remove('two-columns');
                destroyAllCharts();
                lastSignature = '';
                return;
            }

            const signature = JSON.stringify({ year: filters.year.value, user: filters.user.value, tests: data.tests?.map((t) => t.report_id) });
            if (signature === lastSignature) {
                return;
            }
            lastSignature = signature;

            noDataBanner.style.display = 'none';
            renderTests(data.tests || []);
        }

        async function loadDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.user.value) params.set('user_id', filters.user.value);

            const hasSearch = Boolean(filters.year.value) && Boolean(filters.user.value);
            const queryKey = params.toString() || '__empty__';

            try {
                if (responseCache.has(queryKey)) {
                    renderDashboard(responseCache.get(queryKey), hasSearch);
                    return;
                }

                const response = await fetch(`${statsUrl}?${params.toString()}`);
                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}`);
                }
                const data = await response.json();
                responseCache.set(queryKey, data);
                renderDashboard(data, hasSearch);
            } catch (error) {
                noDataBanner.textContent = 'Ocurrió un error al cargar la información. Intenta nuevamente.';
                noDataBanner.style.display = 'block';
                testsContainer.innerHTML = '';
            }
        }

        document.getElementById('apply-filters').addEventListener('click', loadDashboard);
        filters.year.addEventListener('change', loadDashboard);
        document.getElementById('clear-filters').addEventListener('click', () => {
            filters.year.value = '';
            filters.user.value = '';
            loadDashboard();
        });

        loadDashboard();
    </script>
</body>

</html>
