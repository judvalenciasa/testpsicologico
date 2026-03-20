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
        $usersQuery = User::query()
            ->where('es_administrador', 0)
            ->orderBy('name');

        if ($selectedYear) {
            $userIdsForYear = Reportes::query()
                ->whereYear('fecha_calificacion', $selectedYear)
                ->distinct()
                ->pluck('id_usuario')
                ->map(static fn($id) => (int) $id)
                ->all();

            if (count($userIdsForYear) > 0) {
                $usersQuery->whereIn('id_usuario', $userIdsForYear);
            } else {
                $usersQuery->whereRaw('1 = 0');
            }
        }

        $users = $usersQuery
            ->get(['id_usuario', 'name'])
            ->map(static fn(User $user) => [
                'id' => $user->id_usuario,
                'name' => $user->name,
            ])
            ->toArray();

        $testTypes = array_keys(self::TEST_TYPE_FIELDS);
        $years = Reportes::query()
            ->selectRaw('YEAR(fecha_calificacion) as year')
            ->whereNotNull('fecha_calificacion')
            ->groupBy('year')
            ->orderByDesc('year')
            ->pluck('year')
            ->map(static fn($year) => (int) $year)
            ->values()
            ->toArray();

        $rowsByYear = Reportes::query()
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
}

