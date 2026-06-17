<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Estadísticas</title>
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
                <h1>Dashboard comparativo por estudiante</h1>
                <p>Analisis de diferencias entre el Test 1 y el Test 2 del mismo estudiante.</p>
            </div>
            <a href="{{ route('administrator-page') }}" class="back-btn">Volver</a>
        </div>

        <section class="filters-card">
            <div class="filters-head">
                <h2>Filtros de análisis</h2>
                <p>Filtra por año y/o estudiante para comparar Test 1 vs Test 2.</p>
            </div>
            <div class="filters-grid">
                <label class="filter-field field-year">
                    <span>Año</span>
                    <select id="filter-year">
                        <option value="">Todos</option>
                    </select>
                </label>
                <label class="filter-field field-user">
                    <span>Usuario</span>
                    <select id="filter-user">
                        <option value="">Todos</option>
                    </select>
                </label>
            </div>
            <div class="filters-actions">
                <button type="button" id="apply-filters">Aplicar filtros</button>
                <button type="button" id="clear-filters" class="secondary-btn">Limpiar</button>
            </div>
        </section>

        

        <section class="kpi-section">
            <div class="section-head">
                <h3>Estadísticas comparativas (Test 1 vs Test 2)</h3>
            </div>
            <section class="kpi-grid" id="kpi-grid"></section>
        </section>

        <section class="insights-section">
            <div class="section-head">
                <h3>Insights automáticos</h3>
            </div>
            <article class="chart-card">
                <ul id="insights-list"></ul>
            </article>
        </section>

        <section class="advanced-charts-section">
            <article class="chart-card">
                <h3>Perfil cognitivo comparativo (Radar)</h3>
                <canvas id="radar-chart"></canvas>
                <p class="chart-explainer">
                    Este gráfico resume el perfil global por macrohabilidades. Si el área del Test 2 supera la del Test 1, sugiere avance general en pensamiento crítico.
                </p>
            </article>
            <article class="chart-card">
                <h3>Diferencia Test 2 - Test 1 por macrohabilidad</h3>
                <canvas id="difference-chart"></canvas>
                <p class="chart-explainer">
                    Muestra el cambio neto entre pruebas por macrohabilidad. Barras positivas indican mejora y barras negativas señalan retroceso puntual.
                </p>
            </article>
        </section>

        <section class="single-chart-section">
            <article class="chart-card">
                <h3>Macrohabilidad por calificación</h3>
                <canvas id="stacked-by-test-type"></canvas>
                <p class="chart-explainer">
                    Compara puntajes absolutos de Test 1 y Test 2 en cada macrohabilidad. Permite identificar en qué dominios el estudiante rinde más o menos.
                </p>
            </article>
        </section>

        <section class="single-chart-section">
            <article class="chart-card">
                <h3>Comparativo de motivación (Test 1 vs Test 2)</h3>
                <canvas id="motivation-compare-chart"></canvas>
                <p class="chart-explainer">
                    Contrasta motivación intrínseca, extrínseca y total entre ambos test. Ayuda a interpretar si cambios de desempeño pueden relacionarse con variaciones motivacionales.
                </p>
            </article>
        </section>

        <section class="question-single-row-section">
            <article class="chart-card">
                <h3>Calificaciones por pregunta</h3>
                <canvas id="questions-by-student-chart"></canvas>
                <p class="chart-explainer">
                    Presenta el detalle por pregunta en ambos test. Sirve para detectar fortalezas específicas, errores repetidos y patrones de respuesta consistentes.
                </p>
            </article>
        </section>


        <section class="macro-pies-section">
            <div class="comparison-header">
                <h3>Gráficos de torta por macrohabilidad</h3>
                <p>Cada macrohabilidad muestra Test 1 y Test 2 al mismo tiempo para comparar subhabilidades o ejercicios cognitivos.</p>
            </div>
            <div class="macro-pies-grid">
                <article class="chart-card">
                    <h4>Razonamiento inductivo</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item">
                            <span>Test 1</span>
                            <canvas id="macro-pie-inductivo-test1"></canvas>
                        </div>
                        <div class="macro-pie-item">
                            <span>Test 2</span>
                            <canvas id="macro-pie-inductivo-test2"></canvas>
                        </div>
                    </div>
                    <p class="chart-explainer">Distribuye el peso entre inducción general y específica para ver qué componente aporta más al resultado.</p>
                </article>
                <article class="chart-card">
                    <h4>Razonamiento abductivo</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item">
                            <span>Test 1</span>
                            <canvas id="macro-pie-abductivo-test1"></canvas>
                        </div>
                        <div class="macro-pie-item">
                            <span>Test 2</span>
                            <canvas id="macro-pie-abductivo-test2"></canvas>
                        </div>
                    </div>
                    <p class="chart-explainer">Muestra la proporción entre comprobación de hipótesis y uso de probabilidad e incertidumbre en cada test.</p>
                </article>
                <article class="chart-card">
                    <h4>Razonamiento deductivo y verbal</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item">
                            <span>Test 1</span>
                            <canvas id="macro-pie-deductivo-test1"></canvas>
                        </div>
                        <div class="macro-pie-item">
                            <span>Test 2</span>
                            <canvas id="macro-pie-deductivo-test2"></canvas>
                        </div>
                    </div>
                    <p class="chart-explainer">Permite comparar cómo se distribuye el desempeño entre analogía y detección de vaguedad.</p>
                </article>
                <article class="chart-card">
                    <h4>Analisis de argumentos</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item">
                            <span>Test 1</span>
                            <canvas id="macro-pie-analisis-test1"></canvas>
                        </div>
                        <div class="macro-pie-item">
                            <span>Test 2</span>
                            <canvas id="macro-pie-analisis-test2"></canvas>
                        </div>
                    </div>
                    <p class="chart-explainer">Expone el balance entre estructura argumentativa, suposición y falacia para identificar el foco de mejora.</p>
                </article>
                <article class="chart-card">
                    <h4>Toma de decisiones y resolución de problemas</h4>
                    <div class="macro-pie-compare">
                        <div class="macro-pie-item">
                            <span>Test 1</span>
                            <canvas id="macro-pie-decisiones-test1"></canvas>
                        </div>
                        <div class="macro-pie-item">
                            <span>Test 2</span>
                            <canvas id="macro-pie-decisiones-test2"></canvas>
                        </div>
                    </div>
                    <p class="chart-explainer">Describe el aporte de cada subhabilidad de decisión y resolución de problemas dentro del total de la macro.</p>
                </article>
            </div>
        </section>

    </main>

    @include('shared.footer')

    <script>
        Chart.register(ChartDataLabels);

        const statsUrl = "{{ route('stats.data') }}";
        const TEST_COLORS = {
            test1: '#2f80ed',
            test2: '#f2c94c',
            positive: '#27ae60',
            negative: '#eb5757'
        };
        const testTypeLabelMap = {
            inductivo: 'Inductivo',
            abductivo: 'Abductivo',
            deductivo_verbal: 'Deductivo y verbal',
            analisis_argumentos: 'Análisis de argumentos',
            toma_decisiones: 'Toma de decisiones'
        };
        const macroOrder = ['inductivo', 'abductivo', 'deductivo_verbal', 'analisis_argumentos', 'toma_decisiones'];

        const filters = {
            year: document.getElementById('filter-year'),
            user: document.getElementById('filter-user')
        };
        const chartSections = {
            kpis: document.querySelector('.kpi-section'),
            insights: document.querySelector('.insights-section'),
            advanced: document.querySelector('.advanced-charts-section'),
            macro: document.querySelectorAll('.single-chart-section')[0],
            motivation: document.querySelectorAll('.single-chart-section')[1],
            questions: document.querySelector('.question-single-row-section'),
            pies: document.querySelector('.macro-pies-section')
        };

        const charts = {};
        const responseCache = new Map();
        let metadataLoaded = false;
        let lastRenderSignature = '';

        function createOrUpdateChart(key, ctx, type, data, options) {
            if (!ctx) return charts[key] ?? null;
            const current = charts[key];

            if (current && current.config.type === type) {
                current.data = data;
                current.options = options;
                current.update();
                return current;
            }

            if (current) {
                current.destroy();
            }

            charts[key] = new Chart(ctx, { type, data, options });
            return charts[key];
        }

        function barDataLabelsOptions() {
            return {
                color: '#1e293b',
                font: { weight: '700', size: 11 },
                anchor: 'end',
                align: 'top',
                offset: 2,
                clamp: true,
                clip: false,
                formatter: (value) => Number(value ?? 0)
            };
        }

        function toggleChartsVisibility(visible) {
            Object.values(chartSections).forEach((section) => {
                if (!section) return;
                section.hidden = !visible;
                section.style.display = visible ? '' : 'none';
            });
        }

        function buildRenderSignature(data, hasSearch) {
            return JSON.stringify({
                hasSearch,
                year: filters.year.value || null,
                user: filters.user.value || null,
                comparison: data.student_comparison || null,
                stacked: data.test_results?.stacked_by_test_type || null
            });
        }

        function fillMetadata(data) {
            const userSelect = filters.user;
            const yearSelect = filters.year;

            if (!metadataLoaded) {
                (data.filters_meta.years || []).forEach((year) => {
                    const option = document.createElement('option');
                    option.value = String(year);
                    option.textContent = String(year);
                    yearSelect.appendChild(option);
                });
                metadataLoaded = true;
            }

            const previousUser = String(userSelect.value || '');
            userSelect.innerHTML = '<option value="">Todos</option>';
            (data.filters_meta.users || []).forEach((user) => {
                const option = document.createElement('option');
                option.value = user.id;
                option.textContent = user.name;
                userSelect.appendChild(option);
            });

            const userStillAvailable = Array.from(userSelect.options).some((option) => option.value === previousUser);
            userSelect.value = userStillAvailable ? previousUser : '';
        }

        function renderKPIs(comparison) {
            const kpiGrid = document.getElementById('kpi-grid');
            if (!comparison?.has_data) {
                kpiGrid.innerHTML = `
                    <article class="kpi-card"><span>Estado</span><strong>Sin comparación</strong></article>
                    <article class="kpi-card"><span>Detalle</span><strong>Selecciona un estudiante</strong></article>
                `;
                return;
            }

            const t1 = comparison.test_1.meta || {};
            const t2 = comparison.test_2.meta || {};
            const score1 = Number(t1.total_score ?? 0);
            const score2 = Number(t2.total_score ?? 0);
            const duration1 = Number(t1.duration ?? 0);
            const duration2 = Number(t2.duration ?? 0);
            const deltaDuration = (duration2 - duration1).toFixed(2);

            kpiGrid.innerHTML = `
                <article class="kpi-card"><span>Puntaje Test 1</span><strong>${score1}</strong></article>
                <article class="kpi-card"><span>Duración Test 1</span><strong>${duration1} min</strong></article>
                <article class="kpi-card"><span>Cambio de duración</span><strong>${deltaDuration} min</strong></article>
                <article class="kpi-card"><span>Puntaje Test 2</span><strong>${score2}</strong></article>
                <article class="kpi-card"><span>Duración Test 2</span><strong>${duration2} min</strong></article>
                <article class="kpi-card"><span>Nivel (T1 -> T2)</span><strong>${t1.level ?? '-'} -> ${t2.level ?? '-'}</strong></article>
            `;
        }

        function mapTypeDistribution(rows) {
            const map = new Map();
            (rows || []).forEach((row) => map.set(row.type, Number(row.value ?? 0)));
            return map;
        }

        function renderMacroChart(stackedRows) {
            const labels = stackedRows?.labels || [];
            const byLabel = new Map();
            (stackedRows?.datasets || []).forEach((dataset) => {
                byLabel.set(dataset.label, dataset.data || []);
            });

            createOrUpdateChart(
                'macroBars',
                document.getElementById('stacked-by-test-type'),
                'bar',
                {
                    labels,
                    datasets: [
                        { label: 'Test 1', data: byLabel.get('Test 1') || [], backgroundColor: TEST_COLORS.test1 },
                        { label: 'Test 2', data: byLabel.get('Test 2') || [], backgroundColor: TEST_COLORS.test2 }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                title: (items) => `Macrohabilidad: ${items[0]?.label ?? ''}`
                            }
                        },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        x: { stacked: false },
                        y: { stacked: false, beginAtZero: true }
                    },
                    datasets: { bar: { categoryPercentage: 0.65, barPercentage: 0.85 } }
                }
            );
        }

        function renderMotivationChart(comparison) {
            const test1 = comparison?.test_1;
            const test2 = comparison?.test_2;
            const empty = !comparison?.has_data;

            createOrUpdateChart(
                'motivation',
                document.getElementById('motivation-compare-chart'),
                'bar',
                {
                    labels: ['Motivación intrínseca', 'Motivación extrínseca', 'Total motivación'],
                    datasets: [
                        {
                            label: 'Test 1',
                            data: empty ? [] : [
                                Number(test1.meta.motivacion_intrinseca ?? 0),
                                Number(test1.meta.motivacion_extrinseca ?? 0),
                                Number(test1.meta.motivacion_total ?? 0)
                            ],
                            backgroundColor: TEST_COLORS.test1
                        },
                        {
                            label: 'Test 2',
                            data: empty ? [] : [
                                Number(test2.meta.motivacion_intrinseca ?? 0),
                                Number(test2.meta.motivacion_extrinseca ?? 0),
                                Number(test2.meta.motivacion_total ?? 0)
                            ],
                            backgroundColor: TEST_COLORS.test2
                        }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { callbacks: { title: (items) => `Variable: ${items[0]?.label ?? ''}` } },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: { x: { stacked: false }, y: { beginAtZero: true } }
                }
            );
        }

        function renderQuestionChart(comparison) {
            if (!comparison?.has_data) {
                createOrUpdateChart(
                    'questions',
                    document.getElementById('questions-by-student-chart'),
                    'bar',
                    { labels: [], datasets: [] },
                    { responsive: true, maintainAspectRatio: false }
                );
                return;
            }

            const test1 = comparison.test_1;
            const test2 = comparison.test_2;
            const questionKeys = Array.from(new Set([
                ...(test1.question_scores.labels || []),
                ...(test2.question_scores.labels || [])
            ])).sort((a, b) => {
                const aNum = Number(String(a).replace(/\D+/g, '')) || 0;
                const bNum = Number(String(b).replace(/\D+/g, '')) || 0;
                return aNum - bNum;
            });
            const questionLabels = questionKeys.map((_, index) => `Pregunta ${index + 1}`);
            const test1Map = new Map((test1.question_scores.labels || []).map((label, index) => [label, Number(test1.question_scores.values?.[index] ?? 0)]));
            const test2Map = new Map((test2.question_scores.labels || []).map((label, index) => [label, Number(test2.question_scores.values?.[index] ?? 0)]));

            createOrUpdateChart(
                'questions',
                document.getElementById('questions-by-student-chart'),
                'bar',
                {
                    labels: questionLabels,
                    datasets: [
                        { label: 'Test 1', data: questionKeys.map((key) => test1Map.get(key) ?? 0), backgroundColor: TEST_COLORS.test1 },
                        { label: 'Test 2', data: questionKeys.map((key) => test2Map.get(key) ?? 0), backgroundColor: TEST_COLORS.test2 }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { mode: 'index', intersect: false },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        x: { ticks: { maxRotation: 90, minRotation: 90 } },
                        y: { beginAtZero: true }
                    },
                    datasets: { bar: { categoryPercentage: 0.72, barPercentage: 0.9 } }
                }
            );
        }

        function renderRadarChart(comparison) {
            if (!comparison?.has_data) {
                createOrUpdateChart('radar', document.getElementById('radar-chart'), 'radar', { labels: [], datasets: [] }, { responsive: true, maintainAspectRatio: false });
                return;
            }

            const t1 = mapTypeDistribution(comparison.test_1.type_distribution);
            const t2 = mapTypeDistribution(comparison.test_2.type_distribution);
            const labels = macroOrder.map((key) => testTypeLabelMap[key] || key);

            createOrUpdateChart(
                'radar',
                document.getElementById('radar-chart'),
                'radar',
                {
                    labels,
                    datasets: [
                        {
                            label: 'Test 1',
                            data: macroOrder.map((key) => t1.get(key) ?? 0),
                            borderColor: TEST_COLORS.test1,
                            backgroundColor: 'rgba(47, 128, 237, 0.25)',
                            pointBackgroundColor: TEST_COLORS.test1
                        },
                        {
                            label: 'Test 2',
                            data: macroOrder.map((key) => t2.get(key) ?? 0),
                            borderColor: TEST_COLORS.test2,
                            backgroundColor: 'rgba(242, 201, 76, 0.25)',
                            pointBackgroundColor: TEST_COLORS.test2
                        }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { callbacks: { title: (items) => `Macrohabilidad: ${items[0]?.label ?? ''}` } }
                    },
                    scales: {
                        r: { beginAtZero: true }
                    }
                }
            );
        }

        function renderDifferenceChart(comparison) {
            if (!comparison?.has_data) {
                createOrUpdateChart('difference', document.getElementById('difference-chart'), 'bar', { labels: [], datasets: [] }, { responsive: true, maintainAspectRatio: false });
                return;
            }

            const t1 = mapTypeDistribution(comparison.test_1.type_distribution);
            const t2 = mapTypeDistribution(comparison.test_2.type_distribution);
            const labels = macroOrder.map((key) => testTypeLabelMap[key] || key);
            const diffs = macroOrder.map((key) => (t2.get(key) ?? 0) - (t1.get(key) ?? 0));

            createOrUpdateChart(
                'difference',
                document.getElementById('difference-chart'),
                'bar',
                {
                    labels,
                    datasets: [{
                        label: 'Diferencia (T2 - T1)',
                        data: diffs,
                        backgroundColor: diffs.map((value) => value >= 0 ? TEST_COLORS.positive : TEST_COLORS.negative)
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            callbacks: {
                                label: (ctx) => ` ${ctx.raw >= 0 ? '+' : ''}${Number(ctx.raw).toFixed(2)}`
                            }
                        },
                        datalabels: {
                            ...barDataLabelsOptions(),
                            formatter: (value) => `${value >= 0 ? '+' : ''}${Number(value).toFixed(2)}`
                        }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            );
        }

        function renderMacroPies(comparison) {
            const macroMap = {
                inductivo: { test1: 'macro-pie-inductivo-test1', test2: 'macro-pie-inductivo-test2' },
                abductivo: { test1: 'macro-pie-abductivo-test1', test2: 'macro-pie-abductivo-test2' },
                deductivo_verbal: { test1: 'macro-pie-deductivo-test1', test2: 'macro-pie-deductivo-test2' },
                analisis_argumentos: { test1: 'macro-pie-analisis-test1', test2: 'macro-pie-analisis-test2' },
                toma_decisiones: { test1: 'macro-pie-decisiones-test1', test2: 'macro-pie-decisiones-test2' }
            };
            const palette = ['#2f80ed', '#56ccf2', '#6fcf97', '#f2c94c', '#bb6bd9', '#eb5757'];

            Object.entries(macroMap).forEach(([macroKey, ids]) => {
                const macroDataTest1 = comparison?.test_1?.macro_breakdown?.[macroKey] || { labels: [], values: [] };
                const macroDataTest2 = comparison?.test_2?.macro_breakdown?.[macroKey] || { labels: [], values: [] };

                createOrUpdateChart(
                    `pie_${macroKey}_test1`,
                    document.getElementById(ids.test1),
                    'pie',
                    {
                        labels: macroDataTest1.labels || [],
                        datasets: [{ data: macroDataTest1.values || [], backgroundColor: palette.slice(0, Math.max(1, (macroDataTest1.values || []).length)) }]
                    },
                    {
                        responsive: true,
                        maintainAspectRatio: false,
                        layout: { padding: { top: 12, right: 14, bottom: 12, left: 14 } },
                        plugins: {
                            legend: { display: true, position: 'bottom', align: 'start' },
                            datalabels: {
                                color: '#334155',
                                font: { weight: '700', size: 12 },
                                anchor: 'end',
                                align: 'end',
                                offset: 3,
                                clamp: true,
                                clip: false,
                                formatter: (value) => Number(value ?? 0)
                            }
                        }
                    }
                );

                createOrUpdateChart(
                    `pie_${macroKey}_test2`,
                    document.getElementById(ids.test2),
                    'pie',
                    {
                        labels: macroDataTest2.labels || [],
                        datasets: [{ data: macroDataTest2.values || [], backgroundColor: palette.slice(0, Math.max(1, (macroDataTest2.values || []).length)) }]
                    },
                    {
                        responsive: true,
                        maintainAspectRatio: false,
                        layout: { padding: { top: 12, right: 14, bottom: 12, left: 14 } },
                        plugins: {
                            legend: { display: true, position: 'bottom', align: 'start' },
                            datalabels: {
                                color: '#334155',
                                font: { weight: '700', size: 12 },
                                anchor: 'end',
                                align: 'end',
                                offset: 3,
                                clamp: true,
                                clip: false,
                                formatter: (value) => Number(value ?? 0)
                            }
                        }
                    }
                );
            });
        }

        function generateInsights(comparison) {
            if (!comparison?.has_data) {
                return ['Selecciona un estudiante para generar insights automáticos.'];
            }

            const insights = [];
            const t1 = comparison.test_1;
            const t2 = comparison.test_2;
            const map1 = mapTypeDistribution(t1.type_distribution);
            const map2 = mapTypeDistribution(t2.type_distribution);

            macroOrder.forEach((key) => {
                const diff = (map2.get(key) ?? 0) - (map1.get(key) ?? 0);
                const label = testTypeLabelMap[key] || key;
                if (diff > 0) {
                    insights.push(`El usuario mejoró en ${label} (+${diff.toFixed(2)} puntos).`);
                } else if (diff < 0) {
                    insights.push(`Se detecta disminución en ${label} (${diff.toFixed(2)} puntos).`);
                }
            });

            insights.push(`Nivel general: ${t1.meta.level ?? '-'} -> ${t2.meta.level ?? '-'}.`);

            const d1 = Number(t1.meta.duration ?? 0);
            const d2 = Number(t2.meta.duration ?? 0);
            const deltaDuration = d2 - d1;
            if (deltaDuration < -15) {
                insights.push('El tiempo de resolución disminuyó significativamente.');
            } else if (deltaDuration > 15) {
                insights.push('El tiempo de resolución aumentó significativamente.');
            }

            const suspiciousThreshold = 10;
            if (d1 > 0 && d1 < suspiciousThreshold) {
                insights.push('Posible inconsistencia: tiempo de respuesta muy bajo en Test 1.');
            }
            if (d2 > 0 && d2 < suspiciousThreshold) {
                insights.push('Posible inconsistencia: tiempo de respuesta muy bajo en Test 2.');
            }

            const test1Values = (t1.question_scores.values || []).map((v) => Number(v));
            const test2Values = (t2.question_scores.values || []).map((v) => Number(v));
            const isFlat = (arr) => arr.length > 1 && arr.every((value) => value === arr[0]);
            if (isFlat(test1Values) || isFlat(test2Values)) {
                insights.push('Patrón de respuesta repetitivo detectado.');
            }

            return insights.length ? insights : ['No se detectaron cambios relevantes entre ambos tests.'];
        }

        function renderInsights(comparison) {
            const list = document.getElementById('insights-list');
            const insights = generateInsights(comparison);
            list.innerHTML = insights.map((text) => `<li>${text}</li>`).join('');
        }

        function renderDashboard(data, hasSearch) {
            fillMetadata(data);
            toggleChartsVisibility(hasSearch);

            if (!hasSearch) {
                lastRenderSignature = '';
                return;
            }

            const signature = buildRenderSignature(data, hasSearch);
            if (signature === lastRenderSignature) {
                return;
            }
            lastRenderSignature = signature;

            const comparison = data.student_comparison || { has_data: false };
            renderKPIs(comparison);
            renderInsights(comparison);
            renderRadarChart(comparison);
            renderDifferenceChart(comparison);
            renderMacroChart(data.test_results?.stacked_by_test_type || { labels: [], datasets: [] });
            renderMotivationChart(comparison);
            renderQuestionChart(comparison);
            renderMacroPies(comparison);
        }

        async function loadDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.user.value) params.set('user_id', filters.user.value);
            const hasSearch = Boolean(String(filters.user.value || '').trim());
            const queryKey = params.toString() || '__empty__';

            if (responseCache.has(queryKey)) {
                renderDashboard(responseCache.get(queryKey), hasSearch);
                return;
            }

            const response = await fetch(`${statsUrl}?${params.toString()}`);
            const data = await response.json();
            responseCache.set(queryKey, data);
            renderDashboard(data, hasSearch);
        }

        document.getElementById('apply-filters').addEventListener('click', loadDashboard);
        filters.year.addEventListener('change', loadDashboard);
        document.getElementById('clear-filters').addEventListener('click', () => {
            filters.year.value = '';
            filters.user.value = '';
            loadDashboard();
        });

        toggleChartsVisibility(false);
        loadDashboard();
    </script>
</body>

</html>

