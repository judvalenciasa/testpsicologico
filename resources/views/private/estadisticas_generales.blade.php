<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Estadísticas Generales</title>
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
                <h1>Dashboard general comparativo</h1>
                <p>Análisis global de cohortes para presentación 1 vs presentación 2.</p>
            </div>
            <a href="{{ route('administrator-page') }}" class="back-btn">Volver</a>
        </div>

        <section class="filters-card">
            <div class="filters-head">
                <h2>Filtros de análisis general</h2>
                <p>Selecciona año y par de presentaciones para el comparativo global.</p>
            </div>
            <div class="filters-grid">
                <label class="filter-field field-year">
                    <span>Año</span>
                    <select id="general-filter-year">
                        <option value="">Todos</option>
                    </select>
                </label>
                <label class="filter-field field-year">
                    <span>Presentación 1</span>
                    <select id="general-filter-presentation-1">
                        <option value="">Automática</option>
                    </select>
                </label>
                <label class="filter-field field-presentation">
                    <span>Presentación 2</span>
                    <select id="general-filter-presentation-2">
                        <option value="">Automática</option>
                    </select>
                </label>
            </div>
            <div class="filters-actions">
                <button type="button" id="general-apply-filters">Aplicar filtros</button>
                <button type="button" id="general-clear-filters" class="secondary-btn">Limpiar</button>
            </div>
        </section>

        <section id="general-section-kpis" class="kpi-section">
            <div class="section-head">
                <h3>Indicadores globales (cohorte comparativa)</h3>
            </div>
            <section class="kpi-grid" id="general-kpi-grid"></section>
        </section>

        <section id="general-section-insights" class="insights-section">
            <div class="section-head">
                <h3>Insights automáticos</h3>
            </div>
            <article class="chart-card">
                <ul id="general-insights-list"></ul>
            </article>
        </section>

        <section id="general-section-advanced" class="advanced-charts-section">
            <article class="chart-card">
                <h3>Perfil cognitivo global (Radar)</h3>
                <canvas id="general-radar-chart"></canvas>
                <p class="chart-explainer">Compara el perfil promedio de macrohabilidades entre la primera y segunda presentación del grupo seleccionado.</p>
            </article>
            <article class="chart-card">
                <h3>Diferencia global Test 2 - Test 1</h3>
                <canvas id="general-difference-chart"></canvas>
                <p class="chart-explainer">Valores positivos indican mejora global en la macrohabilidad; valores negativos reflejan retroceso respecto al Test 1.</p>
            </article>
        </section>

        <section id="general-section-macro" class="single-chart-section">
            <article class="chart-card">
                <h3>Macrohabilidad promedio global</h3>
                <canvas id="general-macro-chart"></canvas>
                <p class="chart-explainer">Muestra el promedio por macrohabilidad en ambos tests para identificar fortalezas y cambios de la cohorte.</p>
            </article>
        </section>

        <section id="general-section-motivation" class="single-chart-section">
            <article class="chart-card">
                <h3>Motivación promedio global</h3>
                <canvas id="general-motivation-chart"></canvas>
                <p class="chart-explainer">Permite comparar la motivación intrínseca, extrínseca y total entre las dos presentaciones.</p>
            </article>
        </section>

        <section id="general-section-scatter" class="single-chart-section">
            <article class="chart-card">
                <h3>Dispersión global: duración vs calificación</h3>
                <canvas id="general-scatter-chart"></canvas>
                <p class="chart-explainer">Cada punto representa un reporte: eje X duración, eje Y puntaje. Ayuda a detectar patrones de rendimiento por tiempo.</p>
            </article>
        </section>

        <section id="general-section-questions" class="question-single-row-section">
            <article class="chart-card">
                <h3>Promedio global por pregunta</h3>
                <canvas id="general-questions-chart"></canvas>
                <p class="chart-explainer">Compara el desempeño promedio por pregunta para localizar ítems con mejora o dificultad persistente.</p>
            </article>
        </section>

        <section id="general-section-pies" class="macro-pies-section">
            <div class="comparison-header">
                <h3>Tortas globales por macrohabilidad</h3>
                <p>Comparan el promedio por subhabilidad entre presentación 1 y 2.</p>
            </div>
            <div class="macro-pies-grid">
                <article class="chart-card">
                    <h4>Razonamiento inductivo</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item"><span>Test 1</span><canvas id="general-pie-inductivo-test1"></canvas></div>
                        <div class="macro-pie-item"><span>Test 2</span><canvas id="general-pie-inductivo-test2"></canvas></div>
                    </div>
                    <p class="chart-explainer">Distribuye el peso promedio entre inducción general y específica en ambos tests.</p>
                </article>
                <article class="chart-card">
                    <h4>Razonamiento abductivo</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item"><span>Test 1</span><canvas id="general-pie-abductivo-test1"></canvas></div>
                        <div class="macro-pie-item"><span>Test 2</span><canvas id="general-pie-abductivo-test2"></canvas></div>
                    </div>
                    <p class="chart-explainer">Mide el balance entre comprobación de hipótesis y uso de probabilidad e incertidumbre.</p>
                </article>
                <article class="chart-card">
                    <h4>Razonamiento deductivo y verbal</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item"><span>Test 1</span><canvas id="general-pie-deductivo-test1"></canvas></div>
                        <div class="macro-pie-item"><span>Test 2</span><canvas id="general-pie-deductivo-test2"></canvas></div>
                    </div>
                    <p class="chart-explainer">Compara la proporción entre analogía y detección de vaguedad en la cohorte.</p>
                </article>
                <article class="chart-card">
                    <h4>Analisis de argumentos</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item"><span>Test 1</span><canvas id="general-pie-analisis-test1"></canvas></div>
                        <div class="macro-pie-item"><span>Test 2</span><canvas id="general-pie-analisis-test2"></canvas></div>
                    </div>
                    <p class="chart-explainer">Muestra cómo se reparte el promedio entre estructura argumentativa, suposición y falacia.</p>
                </article>
                <article class="chart-card">
                    <h4>Toma de decisiones y resolución de problemas</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item"><span>Test 1</span><canvas id="general-pie-decisiones-test1"></canvas></div>
                        <div class="macro-pie-item"><span>Test 2</span><canvas id="general-pie-decisiones-test2"></canvas></div>
                    </div>
                    <p class="chart-explainer">Visualiza el aporte relativo de cada subhabilidad de decisión y resolución de problemas.</p>
                </article>
            </div>
        </section>
    </main>

    @include('shared.footer')

    <script>
        Chart.register(ChartDataLabels);

        const url = "{{ route('stats.general.data') }}";
        const colors = {
            test1: '#2f80ed',
            test2: '#f2c94c',
            positive: '#27ae60',
            negative: '#eb5757'
        };

        const filters = {
            year: document.getElementById('general-filter-year'),
            p1: document.getElementById('general-filter-presentation-1'),
            p2: document.getElementById('general-filter-presentation-2')
        };

        const sections = {
            kpis: document.getElementById('general-section-kpis'),
            insights: document.getElementById('general-section-insights'),
            advanced: document.getElementById('general-section-advanced'),
            macro: document.getElementById('general-section-macro'),
            motivation: document.getElementById('general-section-motivation'),
            scatter: document.getElementById('general-section-scatter'),
            questions: document.getElementById('general-section-questions'),
            pies: document.getElementById('general-section-pies')
        };

        const charts = {};
        let metadataLoaded = false;
        let availablePresentations = [];

        function toggleVisibility(visible) {
            Object.values(sections).forEach((section) => {
                if (!section) return;
                section.hidden = !visible;
                section.style.display = visible ? '' : 'none';
            });
        }

        function createOrUpdateChart(key, ctx, type, data, options) {
            if (!ctx) return charts[key] ?? null;
            if (charts[key] && charts[key].config.type === type) {
                charts[key].data = data;
                charts[key].options = options;
                charts[key].update();
                return charts[key];
            }
            if (charts[key]) charts[key].destroy();
            charts[key] = new Chart(ctx, { type, data, options });
            return charts[key];
        }

        function barDataLabelOptions() {
            return {
                color: '#1e293b',
                font: { weight: '700', size: 11 },
                anchor: 'end',
                align: 'top',
                formatter: (v) => Number(v ?? 0),
                clamp: true
            };
        }

        function fillFiltersMeta(data) {
            const years = data.filters_meta?.years || [];
            const presentations = data.filters_meta?.presentations || [];

            if (!metadataLoaded) {
                years.forEach((year) => {
                    const option = document.createElement('option');
                    option.value = String(year);
                    option.textContent = String(year);
                    filters.year.appendChild(option);
                });
                metadataLoaded = true;
            }

            availablePresentations = presentations;
            syncPresentationOptions();
        }

        function syncPresentationOptions() {
            const prevP1 = String(filters.p1.value || '');
            const prevP2 = String(filters.p2.value || '');

            filters.p1.innerHTML = '<option value="">Automática</option>';
            availablePresentations.forEach((date) => {
                const o = document.createElement('option');
                o.value = date;
                o.textContent = date;
                filters.p1.appendChild(o);
            });

            filters.p2.innerHTML = '<option value="">Automática</option>';
            availablePresentations
                .filter((date) => String(date) !== prevP1)
                .forEach((date) => {
                    const o = document.createElement('option');
                    o.value = date;
                    o.textContent = date;
                    filters.p2.appendChild(o);
                });

            filters.p1.value = Array.from(filters.p1.options).some((o) => o.value === prevP1) ? prevP1 : '';
            filters.p2.value = Array.from(filters.p2.options).some((o) => o.value === prevP2) ? prevP2 : '';
        }

        function renderKPIs(kpis) {
            const el = document.getElementById('general-kpi-grid');
            el.innerHTML = `
                <article class="kpi-card"><span>Estudiantes comparables</span><strong>${Number(kpis.comparable_students ?? 0)}</strong></article>
                <article class="kpi-card"><span>Promedio Test 1</span><strong>${Number(kpis.avg_score_test_1 ?? 0)}</strong></article>
                <article class="kpi-card"><span>Promedio Test 2</span><strong>${Number(kpis.avg_score_test_2 ?? 0)}</strong></article>
                <article class="kpi-card"><span>Delta promedio</span><strong>${Number(kpis.avg_score_delta ?? 0)}</strong></article>
                <article class="kpi-card"><span>Duración media Test 1</span><strong>${Number(kpis.avg_duration_test_1 ?? 0)} min</strong></article>
                <article class="kpi-card"><span>Duración media Test 2</span><strong>${Number(kpis.avg_duration_test_2 ?? 0)} min</strong></article>
            `;
        }

        function renderInsights(kpis, chartsData) {
            const list = document.getElementById('general-insights-list');
            const items = [];
            const delta = Number(kpis?.avg_score_delta ?? 0);
            if (delta > 0) items.push(`Mejora global promedio de +${delta.toFixed(2)} puntos entre Test 1 y Test 2.`);
            if (delta < 0) items.push(`Disminución global promedio de ${delta.toFixed(2)} puntos entre presentaciones.`);
            if (delta === 0) items.push('No se observan cambios globales promedio en puntaje.');

            const durationDelta = Number(kpis?.avg_duration_test_2 ?? 0) - Number(kpis?.avg_duration_test_1 ?? 0);
            if (durationDelta < -10) items.push('El tiempo promedio baja de forma marcada en la segunda presentación.');
            if (durationDelta > 10) items.push('El tiempo promedio sube de forma marcada en la segunda presentación.');

            const diffs = chartsData?.difference?.values || [];
            const hasNegative = diffs.some((v) => Number(v) < 0);
            if (hasNegative) items.push('Existen macrohabilidades con retroceso puntual que conviene revisar.');

            list.innerHTML = items.map((item) => `<li>${item}</li>`).join('');
        }

        function renderMacro(chartsData) {
            createOrUpdateChart(
                'generalMacro',
                document.getElementById('general-macro-chart'),
                'bar',
                {
                    labels: chartsData?.macro_grouped?.labels || [],
                    datasets: (chartsData?.macro_grouped?.datasets || []).map((ds) => ({
                        ...ds,
                        backgroundColor: ds.label === 'Test 1' ? colors.test1 : colors.test2
                    }))
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { position: 'top' }, datalabels: barDataLabelOptions() },
                    scales: { y: { beginAtZero: true } }
                }
            );
        }

        function renderMotivation(chartsData) {
            createOrUpdateChart(
                'generalMotivation',
                document.getElementById('general-motivation-chart'),
                'bar',
                {
                    labels: chartsData?.motivation?.labels || [],
                    datasets: (chartsData?.motivation?.datasets || []).map((ds) => ({
                        ...ds,
                        backgroundColor: ds.label === 'Test 1' ? colors.test1 : colors.test2
                    }))
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { position: 'top' }, datalabels: barDataLabelOptions() },
                    scales: { y: { beginAtZero: true } }
                }
            );
        }

        function renderRadar(chartsData) {
            createOrUpdateChart(
                'generalRadar',
                document.getElementById('general-radar-chart'),
                'radar',
                {
                    labels: chartsData?.radar?.labels || [],
                    datasets: (chartsData?.radar?.datasets || []).map((ds) => ({
                        ...ds,
                        borderColor: ds.label === 'Test 1' ? colors.test1 : colors.test2,
                        backgroundColor: ds.label === 'Test 1' ? 'rgba(47,128,237,.25)' : 'rgba(242,201,76,.25)'
                    }))
                },
                { responsive: true, maintainAspectRatio: false, scales: { r: { beginAtZero: true } } }
            );
        }

        function renderDifference(chartsData) {
            const values = chartsData?.difference?.values || [];
            createOrUpdateChart(
                'generalDifference',
                document.getElementById('general-difference-chart'),
                'bar',
                {
                    labels: chartsData?.difference?.labels || [],
                    datasets: [{
                        label: 'Diferencia (T2 - T1)',
                        data: values,
                        backgroundColor: values.map((v) => Number(v) >= 0 ? colors.positive : colors.negative)
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        datalabels: {
                            ...barDataLabelOptions(),
                            formatter: (v) => `${Number(v) >= 0 ? '+' : ''}${Number(v).toFixed(2)}`
                        }
                    },
                    scales: { y: { beginAtZero: true } }
                }
            );
        }

        function renderQuestions(chartsData) {
            createOrUpdateChart(
                'generalQuestions',
                document.getElementById('general-questions-chart'),
                'bar',
                {
                    labels: chartsData?.questions?.labels || [],
                    datasets: (chartsData?.questions?.datasets || []).map((ds) => ({
                        ...ds,
                        backgroundColor: ds.label === 'Test 1' ? colors.test1 : colors.test2
                    }))
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: { position: 'top' },
                        datalabels: {
                            ...barDataLabelOptions(),
                            // Evita saturar la grafica con valores muy pequenos o cero.
                            formatter: (v) => {
                                const value = Number(v ?? 0);
                                return value >= 1 ? value.toFixed(2) : '';
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                autoSkip: false,
                                maxRotation: 70,
                                minRotation: 70,
                                callback: function(value, index) {
                                    const labels = this.getLabels() || [];
                                    if (labels.length <= 14) return labels[index];
                                    return index % 2 === 0 ? labels[index] : '';
                                }
                            }
                        },
                        y: { beginAtZero: true }
                    }
                }
            );
        }

        function renderScatter(chartsData) {
            createOrUpdateChart(
                'generalScatter',
                document.getElementById('general-scatter-chart'),
                'scatter',
                {
                    datasets: [
                        {
                            label: 'Test 1',
                            data: (chartsData?.scatter?.test_1 || []).map((p) => ({ x: Number(p.x), y: Number(p.y), label: p.label })),
                            backgroundColor: colors.test1,
                            pointRadius: 4,
                            pointHoverRadius: 6
                        },
                        {
                            label: 'Test 2',
                            data: (chartsData?.scatter?.test_2 || []).map((p) => ({ x: Number(p.x), y: Number(p.y), label: p.label })),
                            backgroundColor: colors.test2,
                            pointRadius: 4,
                            pointHoverRadius: 6
                        }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        datalabels: { display: false },
                        tooltip: {
                            callbacks: {
                                title: (items) => items[0]?.raw?.label || 'Intento',
                                label: (ctx) => ` Tiempo: ${ctx.raw.x} min | Puntaje: ${ctx.raw.y}`
                            }
                        }
                    },
                    scales: {
                        x: { title: { display: true, text: 'Duración (min)' }, beginAtZero: true },
                        y: { title: { display: true, text: 'Calificación total' }, beginAtZero: true }
                    }
                }
            );
        }

        function renderPies(chartsData) {
            const map = {
                inductivo: { t1: 'general-pie-inductivo-test1', t2: 'general-pie-inductivo-test2' },
                abductivo: { t1: 'general-pie-abductivo-test1', t2: 'general-pie-abductivo-test2' },
                deductivo_verbal: { t1: 'general-pie-deductivo-test1', t2: 'general-pie-deductivo-test2' },
                analisis_argumentos: { t1: 'general-pie-analisis-test1', t2: 'general-pie-analisis-test2' },
                toma_decisiones: { t1: 'general-pie-decisiones-test1', t2: 'general-pie-decisiones-test2' }
            };
            const palette = ['#2f80ed', '#56ccf2', '#6fcf97', '#f2c94c', '#bb6bd9', '#eb5757'];

            Object.entries(map).forEach(([key, ids]) => {
                const item = chartsData?.macro_pies?.[key] || { test_1: { labels: [], values: [] }, test_2: { labels: [], values: [] } };
                createOrUpdateChart(
                    `generalPie_${key}_1`,
                    document.getElementById(ids.t1),
                    'pie',
                    {
                        labels: item.test_1.labels || [],
                        datasets: [{ data: item.test_1.values || [], backgroundColor: palette.slice(0, Math.max((item.test_1.values || []).length, 1)) }]
                    },
                    { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', align: 'start' } } }
                );

                createOrUpdateChart(
                    `generalPie_${key}_2`,
                    document.getElementById(ids.t2),
                    'pie',
                    {
                        labels: item.test_2.labels || [],
                        datasets: [{ data: item.test_2.values || [], backgroundColor: palette.slice(0, Math.max((item.test_2.values || []).length, 1)) }]
                    },
                    { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', align: 'start' } } }
                );
            });
        }

        function renderAll(data, hasSearch) {
            fillFiltersMeta(data);
            toggleVisibility(hasSearch);
            if (!hasSearch || !data.has_data) return;
            renderKPIs(data.kpis || {});
            renderInsights(data.kpis || {}, data.charts || {});
            renderRadar(data.charts || {});
            renderDifference(data.charts || {});
            renderMacro(data.charts || {});
            renderMotivation(data.charts || {});
            renderScatter(data.charts || {});
            renderQuestions(data.charts || {});
            renderPies(data.charts || {});
        }

        function hasCompleteGeneralFilters() {
            return Boolean(String(filters.year.value || '').trim()) &&
                Boolean(String(filters.p1.value || '').trim()) &&
                Boolean(String(filters.p2.value || '').trim());
        }

        async function loadGeneralDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.p1.value) params.set('presentation_1', filters.p1.value);
            if (filters.p2.value) params.set('presentation_2', filters.p2.value);
            const hasSearch = hasCompleteGeneralFilters();

            const response = await fetch(`${url}?${params.toString()}`);
            const data = await response.json();
            renderAll(data, hasSearch);
        }

        document.getElementById('general-apply-filters').addEventListener('click', loadGeneralDashboard);
        filters.year.addEventListener('change', loadGeneralDashboard);
        filters.p1.addEventListener('change', syncPresentationOptions);
        document.getElementById('general-clear-filters').addEventListener('click', () => {
            filters.year.value = '';
            filters.p1.value = '';
            filters.p2.value = '';
            syncPresentationOptions();
            loadGeneralDashboard();
        });

        toggleVisibility(false);
        loadGeneralDashboard();
    </script>
</body>

</html>
