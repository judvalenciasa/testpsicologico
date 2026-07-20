<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas por Estudiante</title>
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
                <h1>Estadísticas por estudiante</h1>
                <p>Toda la información del reporte descriptivo presentada en gráficas e insights.</p>
            </div>
            <a href="{{ route('administrator-page') }}" class="back-btn">Volver</a>
        </div>

        <section class="filters-card">
            <div class="filters-head">
                <h2>Filtros</h2>
                <p>Selecciona un estudiante para ver su primera prueba y, si existe, el comparativo con la segunda.</p>
            </div>
            <div class="filters-grid">
                <label class="filter-field field-year">
                    <span>Año</span>
                    <select id="student-filter-year">
                        <option value="">Todos</option>
                    </select>
                </label>
                <label class="filter-field field-user">
                    <span>Estudiante</span>
                    <select id="student-filter-user">
                        <option value="">Selecciona un estudiante</option>
                    </select>
                </label>
            </div>
            <div class="filters-actions">
                <button type="button" id="student-apply-filters">Aplicar filtros</button>
                <button type="button" id="student-clear-filters" class="secondary-btn">Limpiar</button>
            </div>
        </section>

        <section id="student-empty" class="insights-section">
            <article class="chart-card">
                <p id="student-empty-message">Selecciona un estudiante para ver las estadísticas.</p>
            </article>
        </section>

        <section id="student-comparison" class="single-chart-section" hidden>
            <article class="chart-card">
                <h3>Comparativo Prueba 1 vs Prueba 2</h3>
                <canvas id="student-comparison-chart"></canvas>
                <p id="student-comparison-insight" class="chart-explainer"></p>
            </article>
        </section>

        <section id="student-reports"></section>
    </main>

    @include('shared.footer')

    <script>
        const hasChartDataLabels = typeof ChartDataLabels !== 'undefined';
        if (hasChartDataLabels) {
            Chart.register(ChartDataLabels);
        }

        const studentStatsUrl = "{{ route($statsDataRoute ?? 'stats.student.data') }}";
        const filters = {
            year: document.getElementById('student-filter-year'),
            user: document.getElementById('student-filter-user')
        };
        const reportsContainer = document.getElementById('student-reports');
        const emptySection = document.getElementById('student-empty');
        const emptyMessage = document.getElementById('student-empty-message');
        const comparisonSection = document.getElementById('student-comparison');
        const comparisonInsight = document.getElementById('student-comparison-insight');
        const charts = {};
        let metadataLoaded = false;

        const palette = ['#2f80ed', '#56ccf2', '#6fcf97', '#f2c94c', '#bb6bd9', '#eb5757', '#27ae60', '#f2994a'];

        function escapeHtml(value) {
            return String(value ?? '-')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        function chartOptions(type = 'bar') {
            const base = {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: { position: 'top' },
                }
            };

            if (hasChartDataLabels) {
                base.plugins.datalabels = {
                    color: '#1e293b',
                    font: { weight: '700', size: 11 },
                    anchor: 'end',
                    align: 'top',
                    clamp: true,
                    formatter: (value) => Number(value ?? 0)
                };
            }

            if (type !== 'radar') {
                base.scales = { y: { beginAtZero: true } };
            } else {
                base.scales = { r: { beginAtZero: true } };
            }

            return base;
        }

        function drawChart(key, canvasId, type, chartData) {
            const canvas = document.getElementById(canvasId);
            if (!canvas) return;
            if (charts[key]) charts[key].destroy();

            charts[key] = new Chart(canvas, {
                type,
                data: {
                    labels: chartData.labels || [],
                    datasets: (chartData.datasets || []).map((dataset, index) => ({
                        ...dataset,
                        backgroundColor: type === 'pie' ? palette : palette[index % palette.length],
                        borderColor: palette[index % palette.length],
                        pointBackgroundColor: palette[index % palette.length]
                    }))
                },
                options: chartOptions(type)
            });
        }

        function fillMetadata(data) {
            if (!metadataLoaded) {
                (data.filters_meta?.years || []).forEach((year) => {
                    const option = document.createElement('option');
                    option.value = String(year);
                    option.textContent = String(year);
                    filters.year.appendChild(option);
                });
                metadataLoaded = true;
            }

            const selectedUser = String(filters.user.value || '');
            filters.user.innerHTML = '<option value="">Selecciona un estudiante</option>';
            (data.filters_meta?.users || []).forEach((user) => {
                const option = document.createElement('option');
                option.value = String(user.id);
                option.textContent = user.name;
                filters.user.appendChild(option);
            });
            filters.user.value = Array.from(filters.user.options).some((option) => option.value === selectedUser) ? selectedUser : '';
        }

        function renderKeyValueTable(title, rows) {
            return `
                <article class="chart-card">
                    <h3>${escapeHtml(title)}</h3>
                    <div class="stats-table-wrap">
                        <table class="stats-table">
                            <tbody>
                                ${Object.entries(rows || {}).map(([key, value]) => `
                                    <tr>
                                        <th>${escapeHtml(key)}</th>
                                        <td>${escapeHtml(value)}</td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </article>
            `;
        }

        function renderLevels(levels) {
            return `
                <article class="chart-card">
                    <h3>Niveles de desempeño</h3>
                    <div class="stats-table-wrap">
                        <table class="stats-table">
                            <tbody>
                                ${(levels || []).map((item) => `
                                    <tr>
                                        <th>${escapeHtml(item.label)}</th>
                                        <td>${escapeHtml(item.level)}</td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </article>
            `;
        }

        function renderReport(report) {
            const id = `report-${report.attempt}`;
            const section = document.createElement('section');
            section.className = 'kpi-section';
            section.innerHTML = `
                <div class="section-head">
                    <h3>Prueba ${report.attempt} - ${escapeHtml(report.meta.date)}</h3>
                    <p>Reporte ${escapeHtml(report.meta.report_id)} | ${escapeHtml(report.meta.student_name)}</p>
                </div>

                <section class="kpi-grid">
                    <article class="kpi-card"><span>Puntaje total</span><strong>${escapeHtml(report.meta.total_score)}</strong></article>
                    <article class="kpi-card"><span>Nivel total</span><strong>${escapeHtml(report.meta.total_level)}</strong></article>
                    <article class="kpi-card"><span>Tiempo prueba</span><strong>${escapeHtml(report.meta.duration)} min</strong></article>
                </section>

                <section class="insights-section">
                    <div class="section-head"><h3>Insights del reporte</h3></div>
                    <article class="chart-card">
                        <ul>${(report.insights || []).map((item) => `<li>${escapeHtml(item)}</li>`).join('')}</ul>
                    </article>
                </section>

                <section class="advanced-charts-section">
                    <article class="chart-card">
                        <h3>Resumen general</h3>
                        <canvas id="${id}-summary"></canvas>
                    </article>
                    <article class="chart-card">
                        <h3>Macrohabilidades</h3>
                        <canvas id="${id}-macro"></canvas>
                    </article>
                </section>

                <section class="advanced-charts-section">
                    <article class="chart-card">
                        <h3>Motivación</h3>
                        <canvas id="${id}-motivation"></canvas>
                    </article>
                    <article class="chart-card">
                        <h3>Metacognición</h3>
                        <canvas id="${id}-metacognition"></canvas>
                    </article>
                </section>

                <section class="single-chart-section">
                    <article class="chart-card">
                        <h3>Subhabilidades y ejercicios cognitivos</h3>
                        <canvas id="${id}-subskills"></canvas>
                    </article>
                </section>

                <section class="question-single-row-section">
                    <article class="chart-card">
                        <h3>Puntajes por pregunta y contexto</h3>
                        <canvas id="${id}-questions"></canvas>
                    </article>
                </section>

                <section class="advanced-charts-section">
                    ${renderKeyValueTable('Caracterización', report.characterization)}
                    ${renderKeyValueTable('Hábitos y estilos de vida', report.habits)}
                </section>

                <section class="single-chart-section">
                    ${renderLevels(report.levels)}
                </section>
            `;

            reportsContainer.appendChild(section);

            drawChart(`${id}-summary`, `${id}-summary`, 'bar', report.charts.summary);
            drawChart(`${id}-macro`, `${id}-macro`, 'radar', report.charts.macro);
            drawChart(`${id}-motivation`, `${id}-motivation`, 'bar', report.charts.motivation);
            drawChart(`${id}-metacognition`, `${id}-metacognition`, 'bar', report.charts.metacognition);
            drawChart(`${id}-subskills`, `${id}-subskills`, 'bar', report.charts.subskills);
            drawChart(`${id}-questions`, `${id}-questions`, 'bar', report.charts.questions);
        }

        function renderComparison(comparison) {
            if (!comparison?.has_data) {
                comparisonSection.hidden = true;
                comparisonInsight.textContent = comparison?.message || '';
                return;
            }

            comparisonSection.hidden = false;
            comparisonInsight.textContent = comparison.insight || '';
            drawChart('student-comparison', 'student-comparison-chart', 'bar', comparison);
        }

        function renderDashboard(data, hasSearch) {
            fillMetadata(data);
            reportsContainer.innerHTML = '';

            if (!hasSearch || !data.has_data) {
                emptySection.hidden = false;
                comparisonSection.hidden = true;
                emptyMessage.textContent = data.message || 'Selecciona un estudiante para ver las estadísticas.';
                return;
            }

            emptySection.hidden = true;
            renderComparison(data.comparison);
            (data.reports || []).forEach(renderReport);
        }

        async function loadDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.user.value) params.set('user_id', filters.user.value);

            try {
                const response = await fetch(`${studentStatsUrl}?${params.toString()}`);
                if (!response.ok) {
                    throw new Error(`Error ${response.status}`);
                }

                const data = await response.json();
                renderDashboard(data, Boolean(filters.user.value));
            } catch (error) {
                reportsContainer.innerHTML = '';
                comparisonSection.hidden = true;
                emptySection.hidden = false;
                emptyMessage.textContent = 'No fue posible cargar las estadísticas. Revisa la sesión o intenta recargar la página.';
            }
        }

        document.getElementById('student-apply-filters').addEventListener('click', loadDashboard);
        filters.year.addEventListener('change', loadDashboard);
        document.getElementById('student-clear-filters').addEventListener('click', () => {
            filters.year.value = '';
            filters.user.value = '';
            loadDashboard();
        });

        loadDashboard();
    </script>
</body>

</html>
