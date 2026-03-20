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

        <section class="question-single-row-section">
            <article class="chart-card">
                <h3>Calificaciones por pregunta</h3>
                <canvas id="questions-by-student-chart"></canvas>
            </article>
        </section>

        <section class="question-bars-section">
            <article class="chart-card">
                <h3>Macrohabilidad por calificación</h3>
                <canvas id="stacked-by-test-type"></canvas>
            </article>
            <article class="chart-card">
                <h3>Comparativo de motivación (Test 1 vs Test 2)</h3>
                <canvas id="motivation-compare-chart"></canvas>
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
                </article>
            </div>
        </section>

    </main>

    @include('shared.footer')

    <script>
        Chart.register(ChartDataLabels);

        const statsUrl = "{{ route('stats.data') }}";
        const testTypeLabelMap = {
            inductivo: 'Inductivo',
            abductivo: 'Abductivo',
            deductivo_verbal: 'Deductivo y verbal',
            analisis_argumentos: 'Análisis de argumentos',
            toma_decisiones: 'Toma de decisiones'
        };

        const filters = {
            year: document.getElementById('filter-year'),
            user: document.getElementById('filter-user')
        };
        const chartSections = {
            kpis: document.querySelector('.kpi-section'),
            top: document.querySelector('.question-bars-section'),
            pies: document.querySelector('.macro-pies-section'),
            questions: document.querySelector('.question-single-row-section'),
        };

        let stackedByTestTypeChart;
        let motivationCompareChart;
        let questionsByStudentChart;
        const macroPieCharts = {};
        let lastStudentComparison = null;
        let metadataLoaded = false;

        function createOrUpdateChart(current, ctx, type, data, options) {
            if (!ctx) {
                return current ?? null;
            }
            if (current) {
                current.data = data;
                current.options = options;
                current.update();
                return current;
            }
            return new Chart(ctx, { type, data, options });
        }

        function barDataLabelsOptions() {
            return {
                color: '#1e293b',
                font: {
                    weight: '700',
                    size: 11
                },
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

        function fillKpis(data) {
            const kpiGrid = document.getElementById('kpi-grid');
            const comparison = data.student_comparison || {};
            if (!comparison.has_data) {
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

        function fillStudentComparison(data) {
            const comparison = data.student_comparison || {};
            lastStudentComparison = comparison;

            if (!comparison.has_data) {
                motivationCompareChart = createOrUpdateChart(motivationCompareChart, document.getElementById('motivation-compare-chart'), 'bar', { labels: [], datasets: [] }, { responsive: true, maintainAspectRatio: false });
                questionsByStudentChart = createOrUpdateChart(
                    questionsByStudentChart,
                    document.getElementById('questions-by-student-chart'),
                    'bar',
                    { labels: [], datasets: [] },
                    { responsive: true, maintainAspectRatio: false }
                );
                clearMacroPies();
                return;
            }

            const test1 = comparison.test_1;
            const test2 = comparison.test_2;

            motivationCompareChart = createOrUpdateChart(
                motivationCompareChart,
                document.getElementById('motivation-compare-chart'),
                'bar',
                {
                    labels: ['Motivación intrínseca', 'Motivación extrínseca', 'Total motivación'],
                    datasets: [
                        {
                            label: 'Test 1',
                            data: [
                                Number(test1.meta.motivacion_intrinseca ?? 0),
                                Number(test1.meta.motivacion_extrinseca ?? 0),
                                Number(test1.meta.motivacion_total ?? 0)
                            ],
                            backgroundColor: '#2f80ed'
                        },
                        {
                            label: 'Test 2',
                            data: [
                                Number(test2.meta.motivacion_intrinseca ?? 0),
                                Number(test2.meta.motivacion_extrinseca ?? 0),
                                Number(test2.meta.motivacion_total ?? 0)
                            ],
                            backgroundColor: '#f2c94c'
                        }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        x: { stacked: false },
                        y: { beginAtZero: true }
                    }
                }
            );

            const questionKeys = Array.from(new Set([
                ...(test1.question_scores.labels || []),
                ...(test2.question_scores.labels || []),
            ])).sort((a, b) => {
                const aNum = Number(String(a).replace(/\D+/g, '')) || 0;
                const bNum = Number(String(b).replace(/\D+/g, '')) || 0;
                return aNum - bNum;
            });
            const questionLabels = questionKeys.map((_, index) => `Pregunta ${index + 1}`);
            const test1QuestionMap = new Map((test1.question_scores.labels || []).map((label, index) => [label, Number(test1.question_scores.values?.[index] ?? 0)]));
            const test2QuestionMap = new Map((test2.question_scores.labels || []).map((label, index) => [label, Number(test2.question_scores.values?.[index] ?? 0)]));

            questionsByStudentChart = createOrUpdateChart(
                questionsByStudentChart,
                document.getElementById('questions-by-student-chart'),
                'bar',
                {
                    labels: questionLabels,
                    datasets: [
                        {
                            label: 'Test 1',
                            data: questionKeys.map((key) => test1QuestionMap.get(key) ?? 0),
                            backgroundColor: '#2f80ed'
                        },
                        {
                            label: 'Test 2',
                            data: questionKeys.map((key) => test2QuestionMap.get(key) ?? 0),
                            backgroundColor: '#f2c94c'
                        }
                    ]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false
                    },
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        x: { ticks: { maxRotation: 90, minRotation: 90 } },
                        y: { beginAtZero: true }
                    },
                    datasets: {
                        bar: {
                            categoryPercentage: 0.72,
                            barPercentage: 0.9
                        }
                    }
                }
            );

            renderMacroPies(comparison);
        }

        function clearMacroPies() {
            Object.keys(macroPieCharts).forEach((key) => {
                if (macroPieCharts[key]) {
                    macroPieCharts[key].destroy();
                    macroPieCharts[key] = null;
                }
            });
        }

        function renderMacroPies(comparison) {
            const macroMap = {
                inductivo: {
                    test1: 'macro-pie-inductivo-test1',
                    test2: 'macro-pie-inductivo-test2'
                },
                abductivo: {
                    test1: 'macro-pie-abductivo-test1',
                    test2: 'macro-pie-abductivo-test2'
                },
                deductivo_verbal: {
                    test1: 'macro-pie-deductivo-test1',
                    test2: 'macro-pie-deductivo-test2'
                },
                analisis_argumentos: {
                    test1: 'macro-pie-analisis-test1',
                    test2: 'macro-pie-analisis-test2'
                },
                toma_decisiones: {
                    test1: 'macro-pie-decisiones-test1',
                    test2: 'macro-pie-decisiones-test2'
                }
            };
            const palette = ['#2f80ed', '#56ccf2', '#6fcf97', '#f2c94c', '#bb6bd9', '#eb5757'];

            Object.entries(macroMap).forEach(([macroKey, ids]) => {
                const macroDataTest1 = comparison?.test_1?.macro_breakdown?.[macroKey];
                const macroDataTest2 = comparison?.test_2?.macro_breakdown?.[macroKey];

                const renderPie = (chartKey, canvasId, macroData) => {
                    const labels = macroData?.labels || [];
                    const values = macroData?.values || [];
                    const canvas = document.getElementById(canvasId);
                    if (!canvas) return;

                    if (macroPieCharts[chartKey]) {
                        macroPieCharts[chartKey].destroy();
                        macroPieCharts[chartKey] = null;
                    }

                    macroPieCharts[chartKey] = createOrUpdateChart(
                        null,
                        canvas,
                        'pie',
                        {
                            labels,
                            datasets: [{
                                data: values,
                                backgroundColor: palette.slice(0, Math.max(1, values.length))
                            }]
                        },
                        {
                            responsive: true,
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    top: 12,
                                    right: 14,
                                    bottom: 12,
                                    left: 14
                                }
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'bottom',
                                    align: 'start'
                                },
                                datalabels: {
                                    color: '#334155',
                                    font: {
                                        weight: '700',
                                        size: 12
                                    },
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
                };

                renderPie(`${macroKey}_test1`, ids.test1, macroDataTest1);
                renderPie(`${macroKey}_test2`, ids.test2, macroDataTest2);
            });
        }

        async function loadDashboard() {
            const params = new URLSearchParams();
            if (filters.year.value) params.set('year', filters.year.value);
            if (filters.user.value) params.set('user_id', filters.user.value);
            const hasSearch = Boolean(String(filters.user.value || '').trim()) || Boolean(String(filters.year.value || '').trim());

            const response = await fetch(`${statsUrl}?${params.toString()}`);
            const data = await response.json();

            fillMetadata(data);
            fillKpis(data);
            fillStudentComparison(data);
            toggleChartsVisibility(hasSearch);

            const stackedRows = data.test_results.stacked_by_test_type || { labels: [], datasets: [] };
            const stackedColors = ['#2f80ed', '#f2c94c'];
            stackedByTestTypeChart = createOrUpdateChart(
                stackedByTestTypeChart,
                document.getElementById('stacked-by-test-type'),
                'bar',
                {
                    labels: stackedRows.labels || [],
                    datasets: (stackedRows.datasets || []).slice().reverse().map((dataset, index) => ({
                        label: dataset.label,
                        data: dataset.data,
                        backgroundColor: stackedColors[index % stackedColors.length]
                    }))
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false
                    },
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        },
                        datalabels: barDataLabelsOptions()
                    },
                    scales: {
                        x: { stacked: false },
                        y: { stacked: false, beginAtZero: true }
                    },
                    datasets: {
                        bar: {
                            categoryPercentage: 0.65,
                            barPercentage: 0.85
                        }
                    }
                }
            );
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

