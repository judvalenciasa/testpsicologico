<?php

namespace App\Application\Statistics;

use App\Models\Reportes;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StatisticsService
{
    /** @var array<string,string> */
    private const TEST_TYPE_FIELDS = [
        'inductivo' => 'total_macrohabilidad_inductiva',
        'abductivo' => 'total_macrohabilidad_abductiva',
        'deductivo_verbal' => 'total_macrohabilidad_deductivo_y_verbal',
        'analisis_argumentos' => 'total_macrohabilidad_analisis_de_argumentos',
        'toma_decisiones' => 'macrohabilidad_toma_desiciones_y_resolucion_problemas',
    ];

    /** @var array<string,string> */
    private const MACRO_LABELS = [
        'inductivo' => 'Inductivo',
        'abductivo' => 'Abductivo',
        'deductivo_verbal' => 'Deductivo y verbal',
        'analisis_argumentos' => 'Análisis de argumentos',
        'toma_decisiones' => 'Toma de decisiones',
    ];

    /** @var array<string,string> */
    private const LEVEL_FIELDS = [
        'inductivo' => 'nivel_inductivo',
        'abductivo' => 'nivel_abductivo',
        'deductivo_verbal' => 'nivel_deductivo_y_verbal',
        'analisis_argumentos' => 'nivel_analisis_de_argumentos',
        'toma_decisiones' => 'nivel_toma_desiciones_y_resolucion_problemas',
    ];

    /** @var array<string,string> */
    private const REGULATION_FIELDS = [
        'Planificación' => 'planificacion',
        'Organización' => 'organizacion',
        'Monitoreo' => 'monitoreo',
        'Depuración' => 'depuracion',
        'Evaluación' => 'evaluacion',
    ];

    /** @var array<string,string> Campos de caracterización tomados de "ver/reporte" (datos sociodemográficos, estilos de vida y hábitos saludables) */
    private const CHARACTERIZATION_FIELDS = [
        'edad' => 'Edad',
        'genero' => 'Género',
        'estrato' => 'Estrato socioeconómico',
        'nivel_escolaridad' => 'Nivel de escolaridad',
        'nivel_educativo_padre' => 'Nivel educativo del padre',
        'nivel_educativo_madre' => 'Nivel educativo de la madre',
        'horas_lectura' => 'Horas semanales dedicadas a la lectura',
        'horas_redes_sociales' => 'Horas semanales en redes sociales',
        'horas_entretenimiento' => 'Horas semanales de entretenimiento (videojuegos)',
        'hora_sueno' => 'Horas dedicadas a dormir',
        'promedio_arte' => 'Práctica de arte de manera recurrente',
        'promedio_deporte' => 'Práctica de deporte de manera recurrente',
        'grasas' => 'Consumo frecuente de grasas saturadas',
        'alimentos_saludables' => 'Consumo de alimentos saludables',
        'litro_agua' => 'Consumo de 1 litro o más de agua al día',
    ];

    /**
     * @return array<string,mixed>
     */
    public function buildDashboard(array $filters): array
    {
        $baseQuery = $this->applyFilters(Reportes::query(), $filters);
        $selectedUserId = $filters['user_id'] ?? null;
        $selectedTestType = $filters['test_type'] ?? null;

        return [
            'kpis' => $this->kpis($baseQuery),
            'general_analysis' => $this->generalAnalysis($baseQuery),
            'test_results' => $this->testResults($baseQuery, $selectedTestType, $selectedUserId),
            'user_analysis' => $this->userAnalysis($baseQuery, $selectedUserId),
            'student_comparison' => $this->studentComparison($selectedUserId),
            'global_analysis' => $this->globalAnalysis($baseQuery),
            'filters_meta' => $this->filtersMeta($filters['year'] ?? null),
            'missing_info' => [
                'No existe en la base un campo explícito de tipo de test aplicado por reporte.',
                'No existen categorías clínicas como ansiedad/depresión en los reportes actuales; se usan macrohabilidades y variables disponibles.',
            ],
        ];
    }

    /**
     * @return array<string,mixed>
     */
    public function buildGeneralDashboard(array $filters): array
    {
        $baseQuery = $this->applyFilters(Reportes::query(), [
            'year' => $filters['year'] ?? null,
        ]);

        $pairsData = $this->resolveComparablePairs(
            (clone $baseQuery),
            $filters['presentation_1'] ?? null,
            $filters['presentation_2'] ?? null
        );

        $pairs = $pairsData['pairs'];
        $hasData = $pairs->isNotEmpty();

        if (!$hasData) {
            return [
                'has_data' => false,
                'message' => 'No hay datos comparables para las presentaciones seleccionadas.',
                'filters_meta' => $this->generalFiltersMeta($filters['year'] ?? null),
                'filters_state' => [
                    'presentation_1' => $pairsData['presentation_1'],
                    'presentation_2' => $pairsData['presentation_2'],
                ],
                'kpis' => [],
                'charts' => [],
            ];
        }

        $test1Reports = $pairs->pluck('test_1')->filter();
        $test2Reports = $pairs->pluck('test_2')->filter();

        $avgScore1 = round((float) $test1Reports->avg('calificacion_total'), 2);
        $avgScore2 = round((float) $test2Reports->avg('calificacion_total'), 2);
        $avgDuration1 = round((float) $test1Reports->avg('tiempo_prueba'), 2);
        $avgDuration2 = round((float) $test2Reports->avg('tiempo_prueba'), 2);

        return [
            'has_data' => true,
            'message' => null,
            'filters_meta' => $this->generalFiltersMeta($filters['year'] ?? null),
            'filters_state' => [
                'presentation_1' => $pairsData['presentation_1'],
                'presentation_2' => $pairsData['presentation_2'],
            ],
            'kpis' => [
                'comparable_students' => $pairs->count(),
                'avg_score_test_1' => $avgScore1,
                'avg_score_test_2' => $avgScore2,
                'avg_score_delta' => round($avgScore2 - $avgScore1, 2),
                'avg_duration_test_1' => $avgDuration1,
                'avg_duration_test_2' => $avgDuration2,
            ],
            'charts' => $this->buildGeneralCharts($pairs),
        ];
    }

    /**
     * @return array{pairs:Collection<int,array{user_id:int,test_1:Reportes,test_2:Reportes}>,presentation_1:?string,presentation_2:?string}
     */
    private function resolveComparablePairs(Builder $query, ?string $presentation1, ?string $presentation2): array
    {
        $reports = $query
            ->orderBy('id_usuario')
            ->orderBy('fecha_calificacion')
            ->orderBy('id_reporte')
            ->get();

        $grouped = $reports->groupBy('id_usuario');
        $pairs = collect();
        $resolvedPresentation1 = $presentation1;
        $resolvedPresentation2 = $presentation2;

        foreach ($grouped as $userId => $userRows) {
            $ordered = $userRows->values();

            if ($presentation1 && $presentation2) {
                $test1 = $ordered->first(static fn($row) => (string) $row->fecha_calificacion === $presentation1);
                $test2 = $ordered->first(static fn($row) => (string) $row->fecha_calificacion === $presentation2);
            } else {
                $test1 = $ordered->get(0);
                $test2 = $ordered->get(1);
            }

            if (!$test1 || !$test2) {
                continue;
            }

            if ($resolvedPresentation1 === null) {
                $resolvedPresentation1 = (string) $test1->fecha_calificacion;
            }
            if ($resolvedPresentation2 === null) {
                $resolvedPresentation2 = (string) $test2->fecha_calificacion;
            }

            $pairs->push([
                'user_id' => (int) $userId,
                'test_1' => $test1,
                'test_2' => $test2,
            ]);
        }

        return [
            'pairs' => $pairs,
            'presentation_1' => $resolvedPresentation1,
            'presentation_2' => $resolvedPresentation2,
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function generalFiltersMeta(?int $selectedYear): array
    {
        $years = $this->comparableYears();
        $eligibleUserIds = $this->eligibleUserIdsForComparison($selectedYear);

        if (count($eligibleUserIds) === 0) {
            return [
                'years' => $years,
                'presentations' => [],
            ];
        }

        $presentations = Reportes::query()
            ->whereIn('id_usuario', $eligibleUserIds)
            ->whereNotNull('fecha_calificacion')
            ->whereNotNull('calificacion_total')
            ->when($selectedYear, static function (Builder $query, int $year) {
                $query->whereYear('fecha_calificacion', $year);
            })
            ->selectRaw("DATE_FORMAT(fecha_calificacion, '%Y-%m-%d') as date")
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('date')
            ->map(static fn($date) => (string) $date)
            ->values()
            ->toArray();

        return [
            'years' => $years,
            'presentations' => $presentations,
        ];
    }

    /**
     * @param  Collection<int,array{user_id:int,test_1:Reportes,test_2:Reportes}>  $pairs
     * @return array<string,mixed>
     */
    private function buildGeneralCharts(Collection $pairs): array
    {
        $fields = [
            'Inductivo' => 'total_macrohabilidad_inductiva',
            'Abductivo' => 'total_macrohabilidad_abductiva',
            'Deductivo y verbal' => 'total_macrohabilidad_deductivo_y_verbal',
            'Analisis de argumentos' => 'total_macrohabilidad_analisis_de_argumentos',
            'Toma de decisiones' => 'macrohabilidad_toma_desiciones_y_resolucion_problemas',
        ];

        $test1Reports = $pairs->pluck('test_1')->filter();
        $test2Reports = $pairs->pluck('test_2')->filter();

        $macroTest1 = [];
        $macroTest2 = [];
        foreach ($fields as $field) {
            $macroTest1[] = round((float) $test1Reports->avg($field), 2);
            $macroTest2[] = round((float) $test2Reports->avg($field), 2);
        }

        $questionScores1 = $this->averageQuestionScoresForReports(
            $test1Reports->pluck('id_reporte')->map(static fn($v) => (int) $v)->all()
        );
        $questionScores2 = $this->averageQuestionScoresForReports(
            $test2Reports->pluck('id_reporte')->map(static fn($v) => (int) $v)->all()
        );
        $questionIds = array_values(array_unique(array_merge(array_keys($questionScores1), array_keys($questionScores2))));
        sort($questionIds);

        return [
            'macro_grouped' => [
                'labels' => array_keys($fields),
                'datasets' => [
                    ['label' => 'Test 1', 'data' => $macroTest1],
                    ['label' => 'Test 2', 'data' => $macroTest2],
                ],
            ],
            'motivation' => [
                'labels' => ['Motivación intrínseca', 'Motivación extrínseca', 'Total motivación'],
                'datasets' => [
                    [
                        'label' => 'Test 1',
                        'data' => [
                            round((float) $test1Reports->avg('motivacion_intrinseca'), 2),
                            round((float) $test1Reports->avg('motivacion_extrinseca'), 2),
                            round((float) ($test1Reports->avg('motivacion_intrinseca') + $test1Reports->avg('motivacion_extrinseca')), 2),
                        ],
                    ],
                    [
                        'label' => 'Test 2',
                        'data' => [
                            round((float) $test2Reports->avg('motivacion_intrinseca'), 2),
                            round((float) $test2Reports->avg('motivacion_extrinseca'), 2),
                            round((float) ($test2Reports->avg('motivacion_intrinseca') + $test2Reports->avg('motivacion_extrinseca')), 2),
                        ],
                    ],
                ],
            ],
            'difference' => [
                'labels' => array_keys($fields),
                'values' => array_map(
                    static fn($idx) => round($macroTest2[$idx] - $macroTest1[$idx], 2),
                    array_keys($macroTest1)
                ),
            ],
            'radar' => [
                'labels' => array_keys($fields),
                'datasets' => [
                    ['label' => 'Test 1', 'data' => $macroTest1],
                    ['label' => 'Test 2', 'data' => $macroTest2],
                ],
            ],
            'questions' => [
                'labels' => array_map(static fn($_, $idx) => 'Pregunta ' . ($idx + 1), $questionIds, array_keys($questionIds)),
                'datasets' => [
                    [
                        'label' => 'Test 1',
                        'data' => array_map(static fn($id) => $questionScores1[$id] ?? 0.0, $questionIds),
                    ],
                    [
                        'label' => 'Test 2',
                        'data' => array_map(static fn($id) => $questionScores2[$id] ?? 0.0, $questionIds),
                    ],
                ],
            ],
            'scatter' => [
                'test_1' => $pairs->map(static fn($pair) => [
                    'x' => (float) ($pair['test_1']->tiempo_prueba ?? 0),
                    'y' => (float) ($pair['test_1']->calificacion_total ?? 0),
                    'label' => 'Usuario ' . $pair['user_id'] . ' | Reporte ' . $pair['test_1']->id_reporte,
                ])->values()->all(),
                'test_2' => $pairs->map(static fn($pair) => [
                    'x' => (float) ($pair['test_2']->tiempo_prueba ?? 0),
                    'y' => (float) ($pair['test_2']->calificacion_total ?? 0),
                    'label' => 'Usuario ' . $pair['user_id'] . ' | Reporte ' . $pair['test_2']->id_reporte,
                ])->values()->all(),
            ],
            'macro_pies' => $this->buildGeneralMacroPies($test1Reports, $test2Reports),
        ];
    }

    /**
     * @param  array<int,int>  $reportIds
     * @return array<int,float>
     */
    private function averageQuestionScoresForReports(array $reportIds): array
    {
        if (count($reportIds) === 0) {
            return [];
        }

        $rows = DB::table('respuestas as r')
            ->join('preguntas as p', 'p.id_pregunta', '=', 'r.id_pregunta')
            ->whereIn('r.id_reporte', $reportIds)
            ->where('p.tipo_pregunta', '!=', 'abierta')
            ->selectRaw('r.id_pregunta as pregunta_id, AVG(r.calificacion_respuesta) as promedio')
            ->groupBy('r.id_pregunta')
            ->orderBy('r.id_pregunta')
            ->get();

        $result = [];
        foreach ($rows as $row) {
            $result[(int) $row->pregunta_id] = round((float) $row->promedio, 2);
        }

        return $result;
    }

    /**
     * @param  Collection<int,Reportes>  $test1Reports
     * @param  Collection<int,Reportes>  $test2Reports
     * @return array<string,mixed>
     */
    private function buildGeneralMacroPies(Collection $test1Reports, Collection $test2Reports): array
    {
        $map = [
            'inductivo' => [
                'title' => 'Razonamiento inductivo',
                'fields' => [
                    'Induccion general' => 'induccion_general',
                    'Induccion especifica' => 'induccion_especifica',
                ],
            ],
            'abductivo' => [
                'title' => 'Razonamiento abductivo',
                'fields' => [
                    'Comprobacion de hipotesis' => 'comprobacion_hipotesis',
                    'Uso de probabilidad e incertidumbre' => 'uso_probabilidad_incertidumbre',
                ],
            ],
            'deductivo_verbal' => [
                'title' => 'Razonamiento deductivo y verbal',
                'fields' => [
                    'Identificacion de analogia' => 'identificacion_analogia',
                    'Identificacion por fallo de vaguedad' => 'identificacion_por_fallo_vaguedad',
                ],
            ],
            'analisis_argumentos' => [
                'title' => 'Analisis de argumentos',
                'fields' => [
                    'Identificacion de estructura argumentativa' => 'identificacion_estructura_argumentativa',
                    'Identificacion de suposicion' => 'identificacion_de_suposicion',
                    'Identificacion de falacia' => 'identificacion_de_falacia',
                ],
            ],
            'toma_decisiones' => [
                'title' => 'Toma de decisiones y resolucion de problemas',
                'fields' => [
                    'Toma de decisiones informadas' => 'toma_desiciones_informadas',
                    'Conciencia situacion acciones razonables' => 'conciencia_situacion_acciones_razonables',
                    'Pensamiento estrategico' => 'pensamiento_estrategico',
                    'Pensamiento creativo' => 'pensamiento_creativo',
                ],
            ],
        ];

        $result = [];
        foreach ($map as $key => $item) {
            $labels = array_keys($item['fields']);
            $values1 = [];
            $values2 = [];
            foreach ($item['fields'] as $field) {
                $values1[] = round((float) $test1Reports->avg($field), 2);
                $values2[] = round((float) $test2Reports->avg($field), 2);
            }

            $result[$key] = [
                'title' => $item['title'],
                'test_1' => ['labels' => $labels, 'values' => $values1],
                'test_2' => ['labels' => $labels, 'values' => $values2],
            ];
        }

        return $result;
    }

    /**
     * @return array<string,mixed>
     */
    private function kpis(Builder $baseQuery): array
    {
        $totalReports = (clone $baseQuery)->count();
        $levelPercentages = $this->percentageByLevel((clone $baseQuery));
        $highLevel = collect($levelPercentages)->firstWhere('level', 'alto');
        $comparison = $this->comparisonSummary((clone $baseQuery));

        return [
            'total_tests' => $totalReports,
            'percentage_by_level' => $levelPercentages,
            'avg_change_repeated_tests' => $this->averageChangesRepeatedTests((clone $baseQuery)),
            'distribution_ranges' => $this->distributionByRanges((clone $baseQuery)),
            'average_score' => round((float) ((clone $baseQuery)->avg('calificacion_total') ?? 0), 2),
            'high_level_percentage' => $highLevel['percentage'] ?? 0,
            'comparable_students' => $comparison['comparable_students'],
            'avg_delta_test2_vs_test1' => $comparison['avg_delta_test2_vs_test1'],
            'improved_students_percentage' => $comparison['improved_students_percentage'],
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function generalAnalysis(Builder $baseQuery): array
    {
        $totalTests = (clone $baseQuery)->count();
        $avgDuration = round((float) ((clone $baseQuery)->avg('tiempo_prueba') ?? 0), 2);

        $eligibleUsers = User::query()
            ->where('es_administrador', 0)
            ->where('ha_aceptado_politica', 1)
            ->count();

        $usersWithTests = (clone $baseQuery)
            ->distinct('id_usuario')
            ->count('id_usuario');

        $completionRate = $eligibleUsers > 0 ? round(($usersWithTests / $eligibleUsers) * 100, 2) : 0.0;

        return [
            'total_tests' => $totalTests,
            'tests_by_day' => $this->testsByPeriod((clone $baseQuery), '%Y-%m-%d'),
            'tests_by_week' => $this->testsByWeek((clone $baseQuery)),
            'tests_by_month' => $this->testsByPeriod((clone $baseQuery), '%Y-%m'),
            'completion_rate' => $completionRate,
            'avg_duration_minutes' => $avgDuration,
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function testResults(Builder $baseQuery, ?string $selectedTestType, ?int $selectedUserId): array
    {
        $distribution = $this->distributionByTestType((clone $baseQuery), $selectedTestType);

        return [
            'distribution_by_test_type' => $distribution,
            'averages_by_category' => $this->averagesByCategory((clone $baseQuery)),
            'classification_by_level' => $this->classificationByLevel((clone $baseQuery)),
            'time_trends' => $this->timeTrends((clone $baseQuery), $selectedTestType),
            'question_bars_by_date' => $this->questionBarsByDate($selectedUserId),
            'stacked_by_test_type' => $this->stackedByTestType((clone $baseQuery), $selectedUserId),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function userAnalysis(Builder $baseQuery, ?int $selectedUserId): array
    {
        if (!$selectedUserId) {
            return [
                'history' => [],
                'evolution' => [],
                'comparison_vs_general' => null,
            ];
        }

        $userQuery = (clone $baseQuery)->where('id_usuario', $selectedUserId);
        $history = $userQuery
            ->orderBy('fecha_calificacion')
            ->get(['id_reporte', 'fecha_calificacion', 'calificacion_total', 'nivel_total', 'tiempo_prueba'])
            ->toArray();

        $userAverage = round((float) ((clone $userQuery)->avg('calificacion_total') ?? 0), 2);
        $globalAverage = round((float) ((clone $baseQuery)->avg('calificacion_total') ?? 0), 2);

        return [
            'history' => $history,
            'evolution' => array_map(static function (array $row) {
                return [
                    'date' => $row['fecha_calificacion'],
                    'score' => $row['calificacion_total'],
                ];
            }, $history),
            'comparison_vs_general' => [
                'user_average' => $userAverage,
                'global_average' => $globalAverage,
                'difference' => round($userAverage - $globalAverage, 2),
            ],
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function globalAnalysis(Builder $baseQuery): array
    {
        return [
            'general_averages_by_test_type' => $this->distributionByTestType((clone $baseQuery), null),
            'segment_results' => [
                'by_gender' => $this->segmentByGender((clone $baseQuery)),
                'by_stratum' => $this->segmentByStratum((clone $baseQuery)),
                'by_age_range' => $this->segmentByAgeRange((clone $baseQuery)),
            ],
            'frequent_patterns' => $this->frequentPatterns((clone $baseQuery)),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function filtersMeta(?int $selectedYear = null): array
    {
        $eligibleUserIds = $this->eligibleUserIdsForComparison($selectedYear);

        $usersQuery = User::query()
            ->where('es_administrador', 0)
            ->orderBy('name');

        if (count($eligibleUserIds) > 0) {
            $usersQuery->whereIn('id_usuario', $eligibleUserIds);
        } else {
            $usersQuery->whereRaw('1 = 0');
        }

        $users = $usersQuery
            ->get(['id_usuario', 'name'])
            ->map(static fn(User $user) => [
                'id' => $user->id_usuario,
                'name' => $user->name,
            ])
            ->toArray();

        $testTypes = array_keys(self::TEST_TYPE_FIELDS);
        $years = $this->comparableYears();

        $allComparableUserIds = $this->eligibleUserIdsForComparison(null);
        $rowsByYear = Reportes::query()
            ->whereIn('id_usuario', $allComparableUserIds)
            ->whereNotNull('calificacion_total')
            ->selectRaw("YEAR(fecha_calificacion) as year, DATE_FORMAT(fecha_calificacion, '%Y-%m-%d') as day")
            ->whereNotNull('fecha_calificacion')
            ->groupBy('year', 'day')
            ->orderByDesc('year')
            ->orderBy('day')
            ->get();

        $daysByYear = [];
        foreach ($rowsByYear as $row) {
            $yearKey = (string) (int) $row->year;
            if (!isset($daysByYear[$yearKey])) {
                $daysByYear[$yearKey] = [];
            }
            $daysByYear[$yearKey][] = (string) $row->day;
        }

        return [
            'users' => $users,
            'test_types' => $testTypes,
            'years' => $years,
            'days_by_year' => $daysByYear,
        ];
    }

    private function applyFilters(Builder $query, array $filters): Builder
    {
        $query->whereNotNull('calificacion_total');

        if (!empty($filters['year'])) {
            $query->whereYear('fecha_calificacion', (int) $filters['year']);
        }

        if (!empty($filters['days']) && is_array($filters['days'])) {
            $normalizedDays = array_values(array_filter(array_map(
                static fn($day) => is_string($day) ? trim($day) : null,
                $filters['days']
            )));

            if (!empty($normalizedDays)) {
                $query->whereIn('fecha_calificacion', $normalizedDays);
            }
        }
        if (!empty($filters['user_id'])) {
            $query->where('id_usuario', (int) $filters['user_id']);
        }

        return $query;
    }

    /**
     * @return array<int,int>
     */
    private function eligibleUserIdsForComparison(?int $year = null): array
    {
        return Reportes::query()
            ->whereNotNull('calificacion_total')
            ->whereNotNull('fecha_calificacion')
            ->when($year, static function (Builder $query, int $selectedYear) {
                $query->whereYear('fecha_calificacion', $selectedYear);
            })
            ->groupBy('id_usuario')
            ->havingRaw('COUNT(*) >= 2')
            ->pluck('id_usuario')
            ->map(static fn($id) => (int) $id)
            ->values()
            ->toArray();
    }

    /**
     * @return array<int,int>
     */
    private function comparableYears(): array
    {
        return Reportes::query()
            ->whereNotNull('calificacion_total')
            ->whereNotNull('fecha_calificacion')
            ->selectRaw('YEAR(fecha_calificacion) as year, id_usuario')
            ->groupBy('year', 'id_usuario')
            ->havingRaw('COUNT(*) >= 2')
            ->pluck('year')
            ->map(static fn($year) => (int) $year)
            ->unique()
            ->sortDesc()
            ->values()
            ->toArray();
    }

    /**
     * @return array<int,array{period:string,total:int}>
     */
    private function testsByPeriod(Builder $query, string $dateFormat): array
    {
        /** @var Collection<int,array{period:string,total:int}> $rows */
        $rows = $query
            ->selectRaw("DATE_FORMAT(fecha_calificacion, '{$dateFormat}') as period, COUNT(*) as total")
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->map(static fn($row) => [
                'period' => (string) $row->period,
                'total' => (int) $row->total,
            ]);

        return $rows->toArray();
    }

    /**
     * @return array<int,array{period:string,total:int}>
     */
    private function testsByWeek(Builder $query): array
    {
        /** @var Collection<int,array{period:string,total:int}> $rows */
        $rows = $query
            ->selectRaw("CONCAT(YEAR(fecha_calificacion), '-W', LPAD(WEEK(fecha_calificacion, 1), 2, '0')) as period, COUNT(*) as total")
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->map(static fn($row) => [
                'period' => (string) $row->period,
                'total' => (int) $row->total,
            ]);

        return $rows->toArray();
    }

    /**
     * @return array<int,array{type:string,value:float}>
     */
    private function distributionByTestType(Builder $query, ?string $selectedType): array
    {
        $types = self::TEST_TYPE_FIELDS;
        if ($selectedType && array_key_exists($selectedType, $types)) {
            $types = [$selectedType => $types[$selectedType]];
        }

        $result = [];
        foreach ($types as $key => $field) {
            $result[] = [
                'type' => $key,
                'value' => round((float) ((clone $query)->avg($field) ?? 0), 2),
            ];
        }

        return $result;
    }

    /**
     * @return array<int,array{category:string,average:float}>
     */
    private function averagesByCategory(Builder $query): array
    {
        $fields = [
            'motivacion_intrinseca' => 'motivacion_intrinseca',
            'motivacion_extrinseca' => 'motivacion_extrinseca',
            'metacognicion_total' => 'calificacion_metacognicion',
            'pensamiento_critico_total' => 'calificacion_total',
        ];

        $result = [];
        foreach ($fields as $label => $field) {
            $result[] = [
                'category' => $label,
                'average' => round((float) ((clone $query)->avg($field) ?? 0), 2),
            ];
        }

        return $result;
    }

    /**
     * @return array<int,array{level:string,total:int}>
     */
    private function classificationByLevel(Builder $query): array
    {
        /** @var Collection<int,array{level:string,total:int}> $rows */
        $rows = $query
            ->selectRaw('nivel_total as level, COUNT(*) as total')
            ->groupBy('nivel_total')
            ->orderBy('total', 'desc')
            ->get()
            ->map(static fn($row) => [
                'level' => (string) ($row->level ?? 'Sin nivel'),
                'total' => (int) $row->total,
            ]);

        return $rows->toArray();
    }

    /**
     * @return array<int,array{period:string,score:float}>
     */
    private function timeTrends(Builder $query, ?string $selectedTestType): array
    {
        $field = 'calificacion_total';
        if ($selectedTestType && isset(self::TEST_TYPE_FIELDS[$selectedTestType])) {
            $field = self::TEST_TYPE_FIELDS[$selectedTestType];
        }

        /** @var Collection<int,array{period:string,score:float}> $rows */
        $rows = $query
            ->selectRaw("DATE_FORMAT(fecha_calificacion, '%Y-%m-%d') as period, AVG({$field}) as score")
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->map(static fn($row) => [
                'period' => (string) $row->period,
                'score' => round((float) $row->score, 2),
            ]);

        return $rows->toArray();
    }

    /**
     * @return array<int,array{segment:string,total:int}>
     */
    private function segmentByGender(Builder $query): array
    {
        return (clone $query)
            ->selectRaw('genero as segment, COUNT(*) as total')
            ->groupBy('genero')
            ->orderBy('total', 'desc')
            ->get()
            ->map(static fn($row) => [
                'segment' => (string) ($row->segment ?? 'Sin dato'),
                'total' => (int) $row->total,
            ])
            ->toArray();
    }

    /**
     * @return array<int,array{segment:string,total:int}>
     */
    private function segmentByStratum(Builder $query): array
    {
        return (clone $query)
            ->selectRaw('estrato as segment, COUNT(*) as total')
            ->groupBy('estrato')
            ->orderBy('segment')
            ->get()
            ->map(static fn($row) => [
                'segment' => (string) ($row->segment ?? 'Sin dato'),
                'total' => (int) $row->total,
            ])
            ->toArray();
    }

    /**
     * @return array<int,array{segment:string,total:int}>
     */
    private function segmentByAgeRange(Builder $query): array
    {
        return (clone $query)
            ->selectRaw("
                CASE
                    WHEN edad BETWEEN 14 AND 15 THEN '14-15'
                    WHEN edad BETWEEN 16 AND 17 THEN '16-17'
                    WHEN edad >= 18 THEN '18+'
                    ELSE 'Sin dato'
                END as segment,
                COUNT(*) as total
            ")
            ->groupBy('segment')
            ->orderBy('segment')
            ->get()
            ->map(static fn($row) => [
                'segment' => (string) $row->segment,
                'total' => (int) $row->total,
            ])
            ->toArray();
    }

    /**
     * @return array<int,array{pattern:string,total:int}>
     */
    private function frequentPatterns(Builder $query): array
    {
        return (clone $query)
            ->selectRaw("CONCAT(COALESCE(nivel_total, 'Sin nivel'), ' / ', COALESCE(nivel_inductivo, 'Sin nivel')) as pattern, COUNT(*) as total")
            ->groupBy('pattern')
            ->orderByDesc('total')
            ->limit(5)
            ->get()
            ->map(static fn($row) => [
                'pattern' => (string) $row->pattern,
                'total' => (int) $row->total,
            ])
            ->toArray();
    }

    /**
     * @return array<int,array{level:string,percentage:float}>
     */
    private function percentageByLevel(Builder $query): array
    {
        $total = (clone $query)->count();
        if ($total === 0) {
            return [];
        }

        return (clone $query)
            ->selectRaw('nivel_total as level, COUNT(*) as total')
            ->groupBy('nivel_total')
            ->get()
            ->map(static fn($row) => [
                'level' => (string) ($row->level ?? 'Sin nivel'),
                'percentage' => round(((int) $row->total / $total) * 100, 2),
            ])
            ->toArray();
    }

    /**
     * @return array<int,array{range:string,total:int}>
     */
    private function distributionByRanges(Builder $query): array
    {
        return (clone $query)
            ->selectRaw("
                CASE
                    WHEN calificacion_total BETWEEN 0 AND 32 THEN '0-32'
                    WHEN calificacion_total BETWEEN 33 AND 64 THEN '33-64'
                    WHEN calificacion_total BETWEEN 65 AND 96 THEN '65-96'
                    WHEN calificacion_total BETWEEN 97 AND 128 THEN '97-128'
                    ELSE '129+'
                END as score_range,
                COUNT(*) as total
            ")
            ->groupBy('score_range')
            ->orderBy('score_range')
            ->get()
            ->map(static fn($row) => [
                'range' => (string) $row->score_range,
                'total' => (int) $row->total,
            ])
            ->toArray();
    }

    /**
     * @return float|null
     */
    private function averageChangesRepeatedTests(Builder $query): ?float
    {
        $rows = (clone $query)
            ->orderBy('id_usuario')
            ->orderBy('fecha_calificacion')
            ->get(['id_usuario', 'calificacion_total']);

        $grouped = $rows->groupBy('id_usuario');
        $diffs = [];

        foreach ($grouped as $userRows) {
            $scores = $userRows->pluck('calificacion_total')->filter(static fn($v) => $v !== null)->values();
            for ($i = 1; $i < $scores->count(); $i++) {
                $diffs[] = abs((float) $scores[$i] - (float) $scores[$i - 1]);
            }
        }

        if (count($diffs) === 0) {
            return null;
        }

        return round(array_sum($diffs) / count($diffs), 2);
    }

    /**
     * @return array{comparable_students:int,avg_delta_test2_vs_test1:float|null,improved_students_percentage:float|null}
     */
    private function comparisonSummary(Builder $query): array
    {
        $rows = (clone $query)
            ->orderBy('id_usuario')
            ->orderBy('fecha_calificacion')
            ->orderBy('id_reporte')
            ->get(['id_usuario', 'calificacion_total']);

        $grouped = $rows->groupBy('id_usuario');
        $deltas = [];
        $improvedCount = 0;
        $comparableCount = 0;

        foreach ($grouped as $userRows) {
            $scores = $userRows->pluck('calificacion_total')
                ->filter(static fn($v) => $v !== null)
                ->values();

            if ($scores->count() < 2) {
                continue;
            }

            $comparableCount++;
            $delta = (float) $scores[1] - (float) $scores[0];
            $deltas[] = $delta;
            if ($delta > 0) {
                $improvedCount++;
            }
        }

        if ($comparableCount === 0) {
            return [
                'comparable_students' => 0,
                'avg_delta_test2_vs_test1' => null,
                'improved_students_percentage' => null,
            ];
        }

        return [
            'comparable_students' => $comparableCount,
            'avg_delta_test2_vs_test1' => round(array_sum($deltas) / count($deltas), 2),
            'improved_students_percentage' => round(($improvedCount / $comparableCount) * 100, 2),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function questionBarsByDate(?int $selectedUserId): array
    {
        $query = DB::table('respuestas as r')
            ->join('reportes as rep', 'rep.id_reporte', '=', 'r.id_reporte')
            ->join('preguntas as p', 'p.id_pregunta', '=', 'r.id_pregunta')
            ->where('p.tipo_pregunta', '!=', 'abierta');

        if ($selectedUserId) {
            $query->where('rep.id_usuario', $selectedUserId);
        }

        $rows = $query
            ->selectRaw('rep.fecha_calificacion as fecha, r.id_pregunta as pregunta_id, AVG(r.calificacion_respuesta) as promedio')
            ->groupBy('rep.fecha_calificacion', 'r.id_pregunta')
            ->orderBy('r.id_pregunta')
            ->orderBy('rep.fecha_calificacion')
            ->get();

        if ($rows->isEmpty()) {
            return [
                'labels' => [],
                'dates' => [],
                'datasets' => [],
            ];
        }

        $questionIds = $rows->pluck('pregunta_id')
            ->map(static fn($id) => (int) $id)
            ->unique()
            ->sort()
            ->values()
            ->all();

        $dates = $rows->pluck('fecha')
            ->map(static fn($date) => (string) $date)
            ->unique()
            ->sort()
            ->values()
            ->all();

        $scoreMap = [];
        foreach ($rows as $row) {
            $scoreMap[(string) $row->fecha][(int) $row->pregunta_id] = round((float) $row->promedio, 2);
        }

        $datasets = [];
        foreach ($dates as $date) {
            $datasets[] = [
                'label' => $date,
                'data' => array_map(
                    static fn($questionId) => $scoreMap[$date][$questionId] ?? 0,
                    $questionIds
                ),
            ];
        }

        return [
            'labels' => array_map(static fn($id) => 'Pregunta ' . $id, $questionIds),
            'dates' => $dates,
            'datasets' => $datasets,
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function stackedByTestType(Builder $baseQuery, ?int $selectedUserId): array
    {
        if (!$selectedUserId) {
            return [
                'labels' => [],
                'datasets' => [],
            ];
        }

        $fields = [
            'Inductivo' => 'total_macrohabilidad_inductiva',
            'Abductivo' => 'total_macrohabilidad_abductiva',
            'Deductivo y verbal' => 'total_macrohabilidad_deductivo_y_verbal',
            'Analisis de argumentos' => 'total_macrohabilidad_analisis_de_argumentos',
            'Toma de decisiones' => 'macrohabilidad_toma_desiciones_y_resolucion_problemas',
        ];

        $attemptRows = [
            1 => [],
            2 => [],
        ];

        $reports = (clone $baseQuery)
            ->where('id_usuario', $selectedUserId)
            ->orderBy('fecha_calificacion')
            ->orderBy('id_reporte')
            ->get(array_merge(['id_reporte'], array_values($fields)));

        if ($reports->isNotEmpty()) {
            $attemptRows[1][] = $reports->get(0)->toArray();
        }
        if ($reports->count() > 1) {
            $attemptRows[2][] = $reports->get(1)->toArray();
        }

        $labels = array_keys($fields);
        $test1Data = [];
        $test2Data = [];
        foreach ($fields as $field) {
            $test1Data[] = $this->averageFieldFromRows($attemptRows[1], $field);
            $test2Data[] = $this->averageFieldFromRows($attemptRows[2], $field);
        }

        $datasets = [];
        if (count($attemptRows[1]) > 0) {
            $datasets[] = [
                'label' => 'Test 1',
                'data' => $test1Data,
            ];
        }
        if (count($attemptRows[2]) > 0) {
            $datasets[] = [
                'label' => 'Test 2',
                'data' => $test2Data,
            ];
        }

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    /**
     * @param  array<int,array<string,mixed>>  $rows
     */
    private function averageFieldFromRows(array $rows, string $field): float
    {
        if (count($rows) === 0) {
            return 0.0;
        }

        $sum = 0.0;
        $count = 0;
        foreach ($rows as $row) {
            if (isset($row[$field]) && $row[$field] !== null) {
                $sum += (float) $row[$field];
                $count++;
            }
        }

        if ($count === 0) {
            return 0.0;
        }

        return round($sum / $count, 2);
    }

    /**
     * @return array<string,mixed>
     */
    private function studentComparison(?int $selectedUserId): array
    {
        if (!$selectedUserId) {
            return [
                'has_data' => false,
                'message' => 'Selecciona un estudiante para ver el comparativo entre Test 1 y Test 2.',
            ];
        }

        $reports = Reportes::query()
            ->where('id_usuario', $selectedUserId)
            ->orderBy('fecha_calificacion')
            ->orderBy('id_reporte')
            ->get();

        if ($reports->count() < 2) {
            return [
                'has_data' => false,
                'message' => 'El estudiante no tiene dos presentaciones para comparar.',
            ];
        }

        $test1 = $reports->get(0);
        $test2 = $reports->get(1);

        return [
            'has_data' => true,
            'test_1' => $this->buildSingleTestComparisonData($test1),
            'test_2' => $this->buildSingleTestComparisonData($test2),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function buildSingleTestComparisonData(Reportes $report): array
    {
        $typeDistribution = [];
        foreach (self::TEST_TYPE_FIELDS as $type => $field) {
            $typeDistribution[] = [
                'type' => $type,
                'value' => round((float) ($report->{$field} ?? 0), 2),
            ];
        }

        $questionRows = DB::table('respuestas as r')
            ->join('preguntas as p', 'p.id_pregunta', '=', 'r.id_pregunta')
            ->where('r.id_reporte', $report->id_reporte)
            ->where('p.tipo_pregunta', '!=', 'abierta')
            ->selectRaw('r.id_pregunta as pregunta_id, AVG(r.calificacion_respuesta) as promedio')
            ->groupBy('r.id_pregunta')
            ->orderBy('r.id_pregunta')
            ->get();

        return [
            'meta' => [
                'report_id' => $report->id_reporte,
                'date' => $report->fecha_calificacion,
                'total_score' => $report->calificacion_total,
                'level' => $report->nivel_total,
                'duration' => $report->tiempo_prueba,
                'motivacion_intrinseca' => (float) ($report->motivacion_intrinseca ?? 0),
                'motivacion_extrinseca' => (float) ($report->motivacion_extrinseca ?? 0),
                'motivacion_total' => (float) (($report->motivacion_intrinseca ?? 0) + ($report->motivacion_extrinseca ?? 0)),
            ],
            'macro_breakdown' => $this->macroBreakdownFromReport($report),
            'type_distribution' => $typeDistribution,
            'question_scores' => [
                'labels' => $questionRows->map(static fn($row) => 'Pregunta ' . $row->pregunta_id)->toArray(),
                'values' => $questionRows->map(static fn($row) => round((float) $row->promedio, 2))->toArray(),
            ],
        ];
    }

    /**
     * @return array<string,array{title:string,labels:array<int,string>,values:array<int,float>}>
     */
    private function macroBreakdownFromReport(Reportes $report): array
    {
        return [
            'inductivo' => [
                'title' => 'Razonamiento inductivo',
                'labels' => ['Induccion general', 'Induccion especifica'],
                'values' => [
                    (float) ($report->induccion_general ?? 0),
                    (float) ($report->induccion_especifica ?? 0),
                ],
            ],
            'abductivo' => [
                'title' => 'Razonamiento abductivo',
                'labels' => ['Comprobacion de hipotesis', 'Uso de probabilidad e incertidumbre'],
                'values' => [
                    (float) ($report->comprobacion_hipotesis ?? 0),
                    (float) ($report->uso_probabilidad_incertidumbre ?? 0),
                ],
            ],
            'deductivo_verbal' => [
                'title' => 'Razonamiento deductivo y verbal',
                'labels' => ['Identificacion de analogia', 'Identificacion por fallo de vaguedad'],
                'values' => [
                    (float) ($report->identificacion_analogia ?? 0),
                    (float) ($report->identificacion_por_fallo_vaguedad ?? 0),
                ],
            ],
            'analisis_argumentos' => [
                'title' => 'Analisis de argumentos',
                'labels' => [
                    'Identificacion de estructura argumentativa',
                    'Identificacion de suposicion',
                    'Identificacion de falacia',
                ],
                'values' => [
                    (float) ($report->identificacion_estructura_argumentativa ?? 0),
                    (float) ($report->identificacion_de_suposicion ?? 0),
                    (float) ($report->identificacion_de_falacia ?? 0),
                ],
            ],
            'toma_decisiones' => [
                'title' => 'Toma de decisiones y resolucion de problemas',
                'labels' => [
                    'Toma de decisiones informadas',
                    'Conciencia situacion acciones razonables',
                    'Pensamiento estrategico',
                    'Pensamiento creativo',
                ],
                'values' => [
                    (float) ($report->toma_desiciones_informadas ?? 0),
                    (float) ($report->conciencia_situacion_acciones_razonables ?? 0),
                    (float) ($report->pensamiento_estrategico ?? 0),
                    (float) ($report->pensamiento_creativo ?? 0),
                ],
            ],
        ];
    }

    /**
     * Dashboard del módulo "Gráficas 1": caracterización con porcentaje frente al grupo
     * de presentación (misma fecha), motivación, niveles por macrohabilidad, metacognición
     * y comparación del estudiante frente a su grupo. Soporta 1 o 2 pruebas por estudiante.
     *
     * @return array<string,mixed>
     */
    public function buildCharts1Dashboard(array $filters): array
    {
        $selectedYear = $filters['year'] ?? null;
        $selectedUserId = $filters['user_id'] ?? null;

        $filtersMeta = $this->charts1FiltersMeta($selectedYear);

        if (!$selectedUserId) {
            return [
                'has_data' => false,
                'message' => 'Selecciona un año y un estudiante para ver las gráficas.',
                'filters_meta' => $filtersMeta,
                'tests' => [],
            ];
        }

        $reportsQuery = Reportes::query()
            ->where('id_usuario', $selectedUserId)
            ->whereNotNull('calificacion_total')
            ->whereNotNull('fecha_calificacion');

        if ($selectedYear) {
            $reportsQuery->whereYear('fecha_calificacion', $selectedYear);
        }

        $reports = $reportsQuery
            ->orderBy('fecha_calificacion')
            ->orderBy('id_reporte')
            ->limit(2)
            ->get();

        if ($reports->isEmpty()) {
            return [
                'has_data' => false,
                'message' => 'El estudiante no tiene presentaciones registradas para el filtro seleccionado.',
                'filters_meta' => $filtersMeta,
                'tests' => [],
            ];
        }

        $tests = $reports->values()
            ->map(fn(Reportes $report, int $index) => $this->buildCharts1TestData($report, $index + 1))
            ->all();

        return [
            'has_data' => true,
            'message' => null,
            'filters_meta' => $filtersMeta,
            'tests' => $tests,
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function buildCharts1TestData(Reportes $report, int $testNumber): array
    {
        $groupReports = Reportes::query()
            ->where('fecha_calificacion', $report->fecha_calificacion)
            ->whereNotNull('calificacion_total')
            ->get();

        return [
            'test_number' => $testNumber,
            'report_id' => $report->id_reporte,
            'date' => (string) $report->fecha_calificacion,
            'group_size' => $groupReports->count(),
            'characterization' => $this->characterizationTable($report, $groupReports),
            'motivation' => [
                'labels' => ['Motivación intrínseca', 'Motivación extrínseca', 'Total motivación'],
                'values' => [
                    round((float) ($report->motivacion_intrinseca ?? 0), 2),
                    round((float) ($report->motivacion_extrinseca ?? 0), 2),
                    round((float) (($report->motivacion_intrinseca ?? 0) + ($report->motivacion_extrinseca ?? 0)), 2),
                ],
            ],
            'macro_levels' => $this->macroLevelsChart($report),
            'metacognition' => $this->metacognitionChart($report),
            'group_comparison' => $this->groupComparisonData($report, $groupReports),
        ];
    }

    /**
     * @return array<int,array<string,mixed>>
     */
    private function characterizationTable(Reportes $report, Collection $groupReports): array
    {
        $rows = [];
        foreach (self::CHARACTERIZATION_FIELDS as $field => $label) {
            $studentValue = $report->{$field};
            $share = $this->groupSharePercentage($groupReports, $field, $studentValue);

            $rows[] = [
                'field' => $field,
                'label' => $label,
                'value' => $studentValue,
                'percentage' => $share['percentage'],
                'group_size' => $share['group_size'],
            ];
        }

        return $rows;
    }

    /**
     * Calcula qué porcentaje del grupo de presentación comparte el mismo valor que el estudiante
     * para un campo de caracterización determinado.
     *
     * @return array{percentage:float|null,group_size:int}
     */
    private function groupSharePercentage(Collection $groupReports, string $field, mixed $studentValue): array
    {
        $total = $groupReports->count();

        if ($total === 0 || $studentValue === null || $studentValue === '') {
            return ['percentage' => null, 'group_size' => $total];
        }

        $normalizedStudent = $this->normalizeCompareValue($studentValue);
        $matching = $groupReports->filter(
            fn(Reportes $row) => $this->normalizeCompareValue($row->{$field}) === $normalizedStudent
        )->count();

        return [
            'percentage' => round(($matching / $total) * 100, 2),
            'group_size' => $total,
        ];
    }

    private function normalizeCompareValue(mixed $value): string
    {
        return mb_strtolower(trim((string) $value));
    }

    /**
     * @return array<string,mixed>
     */
    private function macroLevelsChart(Reportes $report): array
    {
        $labels = [];
        $values = [];
        $levels = [];

        foreach (self::TEST_TYPE_FIELDS as $key => $field) {
            $labels[] = self::MACRO_LABELS[$key];
            $values[] = round((float) ($report->{$field} ?? 0), 2);
            $levels[] = (string) ($report->{self::LEVEL_FIELDS[$key]} ?? 'Sin nivel');
        }

        return [
            'labels' => $labels,
            'values' => $values,
            'levels' => $levels,
            'total_score' => round((float) ($report->calificacion_total ?? 0), 2),
            'total_level' => (string) ($report->nivel_total ?? 'Sin nivel'),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function metacognitionChart(Reportes $report): array
    {
        $regulationLabels = array_keys(self::REGULATION_FIELDS);
        $regulationValues = array_map(
            fn($field) => round((float) ($report->{$field} ?? 0), 2),
            array_values(self::REGULATION_FIELDS)
        );

        return [
            'overview' => [
                'labels' => ['Conocimiento procedimental', 'Regulación de la cognición', 'Total metacognición'],
                'values' => [
                    round((float) ($report->conocimiento_procedimental ?? 0), 2),
                    round(array_sum($regulationValues), 2),
                    round((float) ($report->calificacion_metacognicion ?? 0), 2),
                ],
            ],
            'regulation' => [
                'labels' => $regulationLabels,
                'values' => $regulationValues,
            ],
        ];
    }

    /**
     * Compara al estudiante frente a su grupo de presentación (misma fecha de calificación).
     *
     * @return array<string,mixed>
     */
    private function groupComparisonData(Reportes $report, Collection $groupReports): array
    {
        $groupSize = $groupReports->count();

        if ($groupSize <= 1) {
            return [
                'has_group' => false,
                'group_size' => $groupSize,
                'message' => 'No hay otros estudiantes registrados en esta misma fecha de presentación.',
            ];
        }

        $studentTotal = (float) ($report->calificacion_total ?? 0);
        $groupAvgTotal = round((float) $groupReports->avg('calificacion_total'), 2);

        $lowerOrEqualCount = $groupReports->filter(
            fn(Reportes $row) => (float) ($row->calificacion_total ?? 0) <= $studentTotal
        )->count();
        $percentile = round(($lowerOrEqualCount / $groupSize) * 100, 2);

        $sorted = $groupReports->sortByDesc(
            fn(Reportes $row) => (float) ($row->calificacion_total ?? 0)
        )->values();
        $rankIndex = $sorted->search(fn(Reportes $row) => $row->id_reporte === $report->id_reporte);
        $rank = $rankIndex === false ? null : $rankIndex + 1;

        $labels = [];
        $studentValues = [];
        $groupAvgValues = [];
        foreach (self::TEST_TYPE_FIELDS as $key => $field) {
            $labels[] = self::MACRO_LABELS[$key];
            $studentValues[] = round((float) ($report->{$field} ?? 0), 2);
            $groupAvgValues[] = round((float) $groupReports->avg($field), 2);
        }

        return [
            'has_group' => true,
            'group_size' => $groupSize,
            'rank' => $rank,
            'percentile' => $percentile,
            'student_total' => round($studentTotal, 2),
            'group_avg_total' => $groupAvgTotal,
            'difference_vs_group' => round($studentTotal - $groupAvgTotal, 2),
            'macro_comparison' => [
                'labels' => $labels,
                'student' => $studentValues,
                'group_avg' => $groupAvgValues,
            ],
        ];
    }

    /**
     * @return array<string,mixed>
     */
    private function charts1FiltersMeta(?int $selectedYear): array
    {
        $years = Reportes::query()
            ->whereNotNull('calificacion_total')
            ->whereNotNull('fecha_calificacion')
            ->selectRaw('DISTINCT YEAR(fecha_calificacion) as year')
            ->pluck('year')
            ->map(static fn($year) => (int) $year)
            ->sortDesc()
            ->values()
            ->toArray();

        $userIdsWithReports = Reportes::query()
            ->whereNotNull('calificacion_total')
            ->whereNotNull('fecha_calificacion')
            ->when($selectedYear, static function (Builder $query, int $year) {
                $query->whereYear('fecha_calificacion', $year);
            })
            ->pluck('id_usuario')
            ->map(static fn($id) => (int) $id)
            ->unique()
            ->values()
            ->toArray();

        $usersQuery = User::query()
            ->where('es_administrador', 0)
            ->orderBy('name');

        if (count($userIdsWithReports) > 0) {
            $usersQuery->whereIn('id_usuario', $userIdsWithReports);
        } else {
            $usersQuery->whereRaw('1 = 0');
        }

        $users = $usersQuery
            ->get(['id_usuario', 'name'])
            ->map(static fn(User $user) => [
                'id' => $user->id_usuario,
                'name' => $user->name,
            ])
            ->toArray();

        return [
            'years' => $years,
            'users' => $users,
        ];
    }
}

