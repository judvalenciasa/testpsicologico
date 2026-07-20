<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas Grupales</title>
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
                <h1>Estadísticas grupales</h1>
                <p>Compara al estudiante seleccionado contra el grupo que presentó en la misma fecha.</p>
            </div>
            <a href="{{ route('administrator-page') }}" class="back-btn">Volver</a>
        </div>

        <section class="filters-card">
            <div class="filters-head">
                <h2>Filtros de análisis grupal</h2>
                <p>Selecciona un estudiante. Si tiene dos presentaciones, se grafican ambas frente a su grupo de fecha.</p>
            </div>
            <div class="filters-grid">
                <label class="filter-field field-year">
                    <span>Año</span>
                    <select id="group-filter-year">
                        <option value="">Todos</option>
                    </select>
                </label>
                <label class="filter-field field-user">
                    <span>Estudiante</span>
                    <select id="group-filter-user">
                        <option value="">Selecciona un estudiante</option>
                    </select>
                </label>
            </div>
            <div class="filters-actions">
                <button type="button" id="group-apply-filters">Aplicar filtros</button>
                <button type="button" id="group-clear-filters" class="secondary-btn">Limpiar</button>
            </div>
        </section>

        <section id="group-empty" class="insights-section">
            <article class="chart-card">
                <p id="group-empty-message">Selecciona un estudiante para ver las estadísticas grupales.</p>
            </article>
        </section>

        <section id="group-attempts"></section>
    </main>

    @include('shared.footer')

    <script>
        Chart.register(ChartDataLabels);

        const groupStatsUrl = "{{ route($groupStatsDataRoute ?? 'stats.group.data') }}";
        const filters = {
            year: document.getElementById('group-filter-year'),
            user: document.getElementById('group-filter-user')
        };
        const attemptsContainer = document.getElementById('group-attempts');
        const emptySection = document.getElementById('group-empty');
        const emptyMessage = document.getElementById('group-empty-message');
        const charts = {};
        let metadataLoaded = false;

        const colors = {
            student: '#2f80ed',
            group: '#f2c94c',
            positive: '#27ae60',
            negative: '#eb5757'
        };

        function chartOptions() {
            return {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: { position: 'top' },
                    datalabels: {
                        color: '#1e293b',
                        font: { weight: '700', size: 11 },
                        anchor: 'end',
                        align: 'top',
                        clamp: true,
                        formatter: (value) => Number(value ?? 0)
                    }
                },
                scales: { y: { beginAtZero: true } }
            };
        }

        function createOrUpdateChart(key, ctx, data) {
            if (!ctx) return;
            if (charts[key]) charts[key].destroy();

            charts[key] = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels || [],
                    datasets: (data.datasets || []).map((dataset) => ({
                        ...dataset,
                        backgroundColor: dataset.label === 'Estudiante' ? colors.student : colors.group
                    }))
                },
                options: chartOptions()
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

        function renderAttempt(attempt) {
            const section = document.createElement('section');
            section.className = 'kpi-section';
            section.innerHTML = `
                <div class="section-head">
                    <h3>Presentación ${attempt.attempt} - ${attempt.date}</h3>
                    <p>Grupo de comparación: ${attempt.group_count} reporte(s) en la misma fecha.</p>
                </div>
                <section class="kpi-grid">
                    <article class="kpi-card"><span>Puntaje estudiante</span><strong>${attempt.kpis.student_score}</strong></article>
                    <article class="kpi-card"><span>Promedio grupo</span><strong>${attempt.kpis.group_score}</strong></article>
                    <article class="kpi-card"><span>Diferencia</span><strong>${attempt.kpis.difference > 0 ? '+' : ''}${attempt.kpis.difference}</strong></article>
                    <article class="kpi-card"><span>Nivel estudiante</span><strong>${attempt.kpis.student_level ?? '-'}</strong></article>
                    <article class="kpi-card"><span>Tiempo estudiante</span><strong>${attempt.kpis.student_duration} min</strong></article>
                    <article class="kpi-card"><span>Tiempo promedio grupo</span><strong>${attempt.kpis.group_duration} min</strong></article>
                </section>
                <section class="advanced-charts-section">
                    <article class="chart-card">
                        <h3>Macrohabilidades</h3>
                        <canvas id="group-macro-${attempt.attempt}"></canvas>
                    </article>
                    <article class="chart-card">
                        <h3>Motivación</h3>
                        <canvas id="group-motivation-${attempt.attempt}"></canvas>
                    </article>
                </section>
                <section class="single-chart-section">
                    <article class="chart-card">
                        <h3>Metacognición</h3>
                        <canvas id="group-metacognition-${attempt.attempt}"></canvas>
                    </article>
                </section>
            `;
            attemptsContainer.appendChild(section);

            createOrUpdateChart(`macro-${attempt.attempt}`, document.getElementById(`group-macro-${attempt.attempt}`), attempt.charts.macro);
            createOrUpdateChart(`motivation-${attempt.attempt}`, document.getElementById(`group-motivation-${attempt.attempt}`), attempt.charts.motivation);
            createOrUpdateChart(`metacognition-${attempt.attempt}`, document.getElementById(`group-metacognition-${attempt.attempt}`), attempt.charts.metacognition);
        }

        function renderDashboard(data, hasSearch) {
            fillMetadata(data);
            attemptsContainer.innerHTML = '';

            if (!hasSearch || !data.has_data) {
                emptySection.hidden = false;
                emptyMessage.textContent = data.message || 'Selecciona un estudiante para ver las estadísticas grupales.';
                return;
            }

            emptySection.hidden = true;
            (data.attempts || []).forEach(renderAttempt);
        }

        async function loadDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.user.value) params.set('user_id', filters.user.value);

            const response = await fetch(`${groupStatsUrl}?${params.toString()}`);
            const data = await response.json();
            renderDashboard(data, Boolean(filters.user.value));
        }

        document.getElementById('group-apply-filters').addEventListener('click', loadDashboard);
        filters.year.addEventListener('change', loadDashboard);
        document.getElementById('group-clear-filters').addEventListener('click', () => {
            filters.year.value = '';
            filters.user.value = '';
            loadDashboard();
        });

        loadDashboard();
    </script>
</body>

</html>
