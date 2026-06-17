<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EstudiantesRespuestasSeeder extends Seeder
{
    private const TARGET_STUDENTS = 100;
    private const SEEDED_EMAIL_PATTERN = 'estudiante%@seed.test';
    private const PRESENTATION_YEAR = 2025;

    public function run(): void
    {
        $existingCount = DB::table('users')
            ->where('email', 'like', self::SEEDED_EMAIL_PATTERN)
            ->count();

        $pruebaId = DB::table('pruebas')->value('id_prueba');
        if (!$pruebaId) {
            return;
        }

        $preguntas = DB::table('preguntas')
            ->select('id_pregunta', 'tipo_pregunta')
            ->orderBy('id_pregunta')
            ->get();

        $subpreguntas = DB::table('subpreguntas')
            ->select('id_subpregunta', 'tipo_pregunta')
            ->orderBy('id_subpregunta')
            ->get();

        $opcionesPorPregunta = DB::table('opciones')
            ->select('id_pregunta', 'texto', 'valor_opcion')
            ->get()
            ->groupBy('id_pregunta');

        $opcionesPorSubpregunta = DB::table('opcionessubpreguntas')
            ->select('id_subpregunta', 'texto', 'valor_opcion')
            ->get()
            ->groupBy('id_subpregunta');

        if ($preguntas->isEmpty()) {
            return;
        }

        if ($existingCount < self::TARGET_STUDENTS) {
            $studentIndex = 1;
            $missing = self::TARGET_STUDENTS - $existingCount;
            $created = 0;

            while ($created < $missing) {
                $email = sprintf('estudiante%03d@seed.test', $studentIndex);
                $studentIndex++;

                $alreadyExists = DB::table('users')->where('email', $email)->exists();
                if ($alreadyExists) {
                    continue;
                }

                DB::transaction(function () use (
                    $email,
                    $pruebaId,
                    $preguntas,
                    $subpreguntas,
                    $opcionesPorPregunta,
                    $opcionesPorSubpregunta
                ): void {
                    $pinId = $this->createStudentPin((int) $pruebaId, $email);
                    $student = $this->createStudent($pinId, $email);
                    $reportDate = $this->firstPresentationDate();
                    $reportId = $this->createReport((int) $student['id_usuario'], $student, $reportDate);

                    $scores = $this->seedMainResponses(
                        (int) $student['id_usuario'],
                        $reportId,
                        $preguntas,
                        $opcionesPorPregunta,
                        1,
                        null
                    );

                    $subScore = $this->seedSubResponses(
                        (int) $student['id_usuario'],
                        $reportId,
                        $subpreguntas,
                        $opcionesPorSubpregunta,
                        1,
                        null
                    );

                    $this->updateReportScores($reportId, $scores + $subScore, 1);
                });

                $created++;
            }
        }

        $seededStudents = DB::table('users')
            ->select(
                'id_usuario',
                'documento_identificacion',
                'edad',
                'estrato',
                'nivel_escolaridad',
                'nivel_educativo_padre',
                'nivel_educativo_madre',
                'horas_lectura',
                'horas_redes_sociales',
                'horas_entretenimiento',
                'hora_sueno',
                'genero',
                'promedio_deporte',
                'promedio_arte',
                'grasas',
                'alimentos_saludables',
                'litro_agua'
            )
            ->where('email', 'like', self::SEEDED_EMAIL_PATTERN)
            ->orderBy('email')
            ->limit(self::TARGET_STUDENTS)
            ->get();

        foreach ($seededStudents as $student) {
            DB::transaction(function () use (
                $student,
                $preguntas,
                $subpreguntas,
                $opcionesPorPregunta,
                $opcionesPorSubpregunta
            ): void {
                $reports = DB::table('reportes')
                    ->where('id_usuario', $student->id_usuario)
                    ->orderBy('fecha_calificacion')
                    ->orderBy('id_reporte')
                    ->get(['id_reporte', 'fecha_calificacion']);

                if ($reports->isEmpty()) {
                    $firstDate = $this->firstPresentationDate();
                    $firstReportId = $this->createReport((int) $student->id_usuario, (array) $student, $firstDate);
                    $firstScore = $this->seedMainResponses(
                        (int) $student->id_usuario,
                        $firstReportId,
                        $preguntas,
                        $opcionesPorPregunta,
                        1,
                        null
                    );
                    $firstSubScore = $this->seedSubResponses(
                        (int) $student->id_usuario,
                        $firstReportId,
                        $subpreguntas,
                        $opcionesPorSubpregunta,
                        1,
                        null
                    );
                    $this->updateReportScores($firstReportId, $firstScore + $firstSubScore, 1);

                    $reports = DB::table('reportes')
                        ->where('id_usuario', $student->id_usuario)
                        ->orderBy('fecha_calificacion')
                        ->orderBy('id_reporte')
                        ->get(['id_reporte', 'fecha_calificacion']);
                }

                if ($reports->count() >= 2) {
                    $this->normalizeFirstTwoReportDates(
                        (int) $reports[0]->id_reporte,
                        (int) $reports[1]->id_reporte
                    );
                    $this->ensureSecondTestImprovement(
                        (int) $reports[0]->id_reporte,
                        (int) $reports[1]->id_reporte
                    );
                    return;
                }

                $firstReport = $reports->first();
                DB::table('reportes')
                    ->where('id_reporte', (int) $firstReport->id_reporte)
                    ->update([
                        'fecha_calificacion' => $this->firstPresentationDate(),
                        'updated_at' => now(),
                    ]);

                $secondDate = $this->secondPresentationDate();

                $secondReportId = $this->createReport((int) $student->id_usuario, (array) $student, $secondDate);
                $secondScore = $this->seedMainResponses(
                    (int) $student->id_usuario,
                    $secondReportId,
                    $preguntas,
                    $opcionesPorPregunta,
                    2,
                    (int) $firstReport->id_reporte
                );
                $secondSubScore = $this->seedSubResponses(
                    (int) $student->id_usuario,
                    $secondReportId,
                    $subpreguntas,
                    $opcionesPorSubpregunta,
                    2,
                    (int) $firstReport->id_reporte
                );
                $this->updateReportScores($secondReportId, $secondScore + $secondSubScore, 2);
                $this->ensureSecondTestImprovement((int) $firstReport->id_reporte, $secondReportId);
            });
        }
    }

    private function createStudentPin(int $pruebaId, string $email): int
    {
        $suffix = strtoupper(substr(md5($email . microtime(true)), 0, 8));
        $pin = 'STD' . $suffix;
        $today = Carbon::now()->toDateString();

        return (int) DB::table('pines')->insertGetId([
            'pin' => $pin,
            'id_prueba' => $pruebaId,
            'creacion_fecha' => $today,
            'fecha_expiracion' => Carbon::now()->addYear()->toDateString(),
            'intentos' => 0,
            'estado' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], 'id_pin');
    }

    /**
     * @return array<string,mixed>
     */
    private function createStudent(int $pinId, string $email): array
    {
        $genres = ['Masculino', 'Femenino', 'Otro'];
        $schooling = ['Bachiller', 'Técnico', 'Tecnólogo'];
        $hours = ['Menos de 1 hora', 'Entre 1 y 3 horas', 'Entre 4 y 6 horas'];
        $yesNo = ['Si', 'No'];
        $studentNumber = (int) preg_replace('/\D/', '', explode('@', $email)[0]);
        $name = sprintf('Estudiante %03d', $studentNumber);
        $edad = random_int(14, 18);
        $genero = $genres[array_rand($genres)];
        $estrato = random_int(1, 4);
        $nivelEscolaridad = $schooling[array_rand($schooling)];
        $nivelPadre = $schooling[array_rand($schooling)];
        $nivelMadre = $schooling[array_rand($schooling)];
        $horasLectura = $hours[array_rand($hours)];
        $horasRedes = $hours[array_rand($hours)];
        $horasEntretenimiento = $hours[array_rand($hours)];
        $promedioDeporte = $yesNo[array_rand($yesNo)];
        $promedioArte = $yesNo[array_rand($yesNo)];
        $grasas = $yesNo[array_rand($yesNo)];
        $alimentosSaludables = $yesNo[array_rand($yesNo)];
        $litroAgua = $yesNo[array_rand($yesNo)];
        $documento = (string) (1000000000 + $studentNumber);

        $idUsuario = (int) DB::table('users')->insertGetId([
            'id_pin' => $pinId,
            'ha_aceptado_politica' => 1,
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('12345678'),
            'documento_identificacion' => $documento,
            'edad' => $edad,
            'genero' => $genero,
            'estrato' => $estrato,
            'nivel_escolaridad' => $nivelEscolaridad,
            'nivel_educativo_padre' => $nivelPadre,
            'nivel_educativo_madre' => $nivelMadre,
            'horas_lectura' => $horasLectura,
            'horas_redes_sociales' => $horasRedes,
            'horas_entretenimiento' => $horasEntretenimiento,
            'hora_sueno' => 'Entre 4 y 6 horas',
            'promedio_deporte' => $promedioDeporte,
            'promedio_arte' => $promedioArte,
            'grasas' => $grasas,
            'alimentos_saludables' => $alimentosSaludables,
            'litro_agua' => $litroAgua,
            'es_administrador' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], 'id_usuario');

        return [
            'id_usuario' => $idUsuario,
            'documento_identificacion' => $documento,
            'edad' => $edad,
            'estrato' => $estrato,
            'genero' => $genero,
            'nivel_escolaridad' => $nivelEscolaridad,
            'nivel_educativo_padre' => $nivelPadre,
            'nivel_educativo_madre' => $nivelMadre,
            'horas_lectura' => $horasLectura,
            'horas_redes_sociales' => $horasRedes,
            'horas_entretenimiento' => $horasEntretenimiento,
            'hora_sueno' => 'Entre 4 y 6 horas',
            'promedio_deporte' => $promedioDeporte,
            'promedio_arte' => $promedioArte,
            'grasas' => $grasas,
            'alimentos_saludables' => $alimentosSaludables,
            'litro_agua' => $litroAgua,
        ];
    }

    /**
     * @param  array<string,mixed>  $student
     */
    private function createReport(int $userId, array $student, string $reportDate): int
    {
        return (int) DB::table('reportes')->insertGetId([
            'id_usuario' => $userId,
            'fecha_calificacion' => $reportDate,
            'documento_identificacion' => $student['documento_identificacion'],
            'edad' => $student['edad'],
            'estrato' => $student['estrato'],
            'nivel_escolaridad' => $student['nivel_escolaridad'],
            'nivel_educativo_padre' => $student['nivel_educativo_padre'],
            'nivel_educativo_madre' => $student['nivel_educativo_madre'],
            'horas_lectura' => $student['horas_lectura'],
            'horas_redes_sociales' => $student['horas_redes_sociales'],
            'horas_entretenimiento' => $student['horas_entretenimiento'],
            'hora_sueno' => $student['hora_sueno'],
            'genero' => $student['genero'],
            'promedio_deporte' => $student['promedio_deporte'],
            'promedio_arte' => $student['promedio_arte'],
            'grasas' => $student['grasas'],
            'alimentos_saludables' => $student['alimentos_saludables'],
            'litro_agua' => $student['litro_agua'],
            'calificacion_total' => 0,
            'calificacion_metacognicion' => 0,
            'tiempo_prueba' => random_int(25, 95),
            'motivacion_intrinseca' => random_int(10, 25),
            'motivacion_extrinseca' => random_int(10, 25),
            'created_at' => now(),
            'updated_at' => now(),
        ], 'id_reporte');
    }

    /**
     * @param  \Illuminate\Support\Collection<int,object>  $preguntas
     * @param  \Illuminate\Support\Collection<int,\Illuminate\Support\Collection<int,object>>  $opcionesPorPregunta
     */
    private function seedMainResponses(
        int $userId,
        int $reportId,
        $preguntas,
        $opcionesPorPregunta,
        int $attemptNumber,
        ?int $referenceReportId
    ): int {
        $rows = [];
        $scoreSum = 0;
        $referenceAnswers = [];

        if ($referenceReportId) {
            $referenceAnswers = DB::table('respuestas')
                ->where('id_reporte', $referenceReportId)
                ->pluck('respuesta', 'id_pregunta')
                ->toArray();
        }

        foreach ($preguntas as $pregunta) {
            $isOpen = strtolower((string) $pregunta->tipo_pregunta) === 'abierta';
            $option = null;

            if (!$isOpen && isset($opcionesPorPregunta[$pregunta->id_pregunta])) {
                $validOptions = $opcionesPorPregunta[$pregunta->id_pregunta]
                    ->filter(static fn($opt) => strtolower((string) $opt->texto) !== 'abierta')
                    ->values();

                if ($validOptions->isNotEmpty()) {
                    $option = $this->pickOption(
                        $validOptions,
                        $userId,
                        (int) $pregunta->id_pregunta,
                        $attemptNumber,
                        $referenceAnswers[$pregunta->id_pregunta] ?? null
                    );
                }
            }

            $calificacion = $option ? (int) ($option->valor_opcion ?? 0) : 0;
            $respuesta = $isOpen ? '' : (string) ($option->texto ?? '');

            $rows[] = [
                'id_usuario' => $userId,
                'id_pregunta' => $pregunta->id_pregunta,
                'id_reporte' => $reportId,
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if (!$isOpen) {
                $scoreSum += $calificacion;
            }
        }

        if (!empty($rows)) {
            DB::table('respuestas')->insert($rows);
        }

        return $scoreSum;
    }

    /**
     * @param  \Illuminate\Support\Collection<int,object>  $subpreguntas
     * @param  \Illuminate\Support\Collection<int,\Illuminate\Support\Collection<int,object>>  $opcionesPorSubpregunta
     */
    private function seedSubResponses(
        int $userId,
        int $reportId,
        $subpreguntas,
        $opcionesPorSubpregunta,
        int $attemptNumber,
        ?int $referenceReportId
    ): int {
        $rows = [];
        $scoreSum = 0;
        $referenceAnswers = [];

        if ($referenceReportId) {
            $referenceAnswers = DB::table('subrespuestas')
                ->where('id_reporte', $referenceReportId)
                ->pluck('respuesta', 'id_subpregunta')
                ->toArray();
        }

        foreach ($subpreguntas as $subpregunta) {
            $isOpen = strtolower((string) $subpregunta->tipo_pregunta) === 'abierta';
            $option = null;

            if (!$isOpen && isset($opcionesPorSubpregunta[$subpregunta->id_subpregunta])) {
                $validOptions = $opcionesPorSubpregunta[$subpregunta->id_subpregunta]->values();
                if ($validOptions->isNotEmpty()) {
                    $option = $this->pickOption(
                        $validOptions,
                        $userId,
                        (int) $subpregunta->id_subpregunta,
                        $attemptNumber,
                        $referenceAnswers[$subpregunta->id_subpregunta] ?? null
                    );
                }
            }

            $calificacion = $option ? (int) ($option->valor_opcion ?? 0) : 0;
            $respuesta = $isOpen ? '' : (string) ($option->texto ?? '');

            $rows[] = [
                'id_usuario' => $userId,
                'id_subpregunta' => $subpregunta->id_subpregunta,
                'id_reporte' => $reportId,
                'respuesta' => $respuesta,
                'calificacion_respuesta' => $calificacion,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if (!$isOpen) {
                $scoreSum += $calificacion;
            }
        }

        if (!empty($rows)) {
            DB::table('subrespuestas')->insert($rows);
        }

        return $scoreSum;
    }

    private function updateReportScores(int $reportId, int $scoreBase, int $attemptNumber): void
    {
        $attemptAdjustment = $attemptNumber === 2 ? random_int(4, 16) : random_int(-6, 6);
        $calificacionTotal = max(20, min(160, (int) round($scoreBase / 5) + $attemptAdjustment));
        $metacognicion = max(10, min(60, (int) round($scoreBase / 12) + (int) round($attemptAdjustment / 2)));

        $induccionGeneral = random_int(5, 20);
        $induccionEspecifica = random_int(5, 20);
        $totalInductiva = $induccionGeneral + $induccionEspecifica;

        $comprobacionHipotesis = random_int(4, 18);
        $usoProbabilidadIncertidumbre = random_int(4, 18);
        $totalAbductiva = $comprobacionHipotesis + $usoProbabilidadIncertidumbre;

        $identificacionAnalogia = random_int(4, 18);
        $identificacionFalloVaguedad = random_int(4, 18);
        $totalDeductivoVerbal = $identificacionAnalogia + $identificacionFalloVaguedad;

        $identificacionEstructuraArgumentativa = random_int(4, 18);
        $identificacionSuposicion = random_int(4, 18);
        $identificacionFalacia = random_int(4, 18);
        $totalAnalisisArgumentos = $identificacionEstructuraArgumentativa + $identificacionSuposicion + $identificacionFalacia;

        $tomaDecisionesInformadas = random_int(4, 18);
        $concienciaSituacionAccionesRazonables = random_int(4, 18);
        $pensamientoEstrategico = random_int(4, 18);
        $pensamientoCreativo = random_int(4, 18);
        $totalTomaDecisiones = $tomaDecisionesInformadas + $concienciaSituacionAccionesRazonables + $pensamientoEstrategico + $pensamientoCreativo;

        DB::table('reportes')
            ->where('id_reporte', $reportId)
            ->update([
                'calificacion_total' => $calificacionTotal,
                'calificacion_metacognicion' => $metacognicion,
                'induccion_general' => $induccionGeneral,
                'induccion_especifica' => $induccionEspecifica,
                'total_macrohabilidad_inductiva' => $totalInductiva,
                'comprobacion_hipotesis' => $comprobacionHipotesis,
                'uso_probabilidad_incertidumbre' => $usoProbabilidadIncertidumbre,
                'total_macrohabilidad_abductiva' => $totalAbductiva,
                'identificacion_analogia' => $identificacionAnalogia,
                'identificacion_por_fallo_vaguedad' => $identificacionFalloVaguedad,
                'total_macrohabilidad_deductivo_y_verbal' => $totalDeductivoVerbal,
                'identificacion_estructura_argumentativa' => $identificacionEstructuraArgumentativa,
                'identificacion_de_suposicion' => $identificacionSuposicion,
                'identificacion_de_falacia' => $identificacionFalacia,
                'total_macrohabilidad_analisis_de_argumentos' => $totalAnalisisArgumentos,
                'toma_desiciones_informadas' => $tomaDecisionesInformadas,
                'conciencia_situacion_acciones_razonables' => $concienciaSituacionAccionesRazonables,
                'pensamiento_estrategico' => $pensamientoEstrategico,
                'pensamiento_creativo' => $pensamientoCreativo,
                'macrohabilidad_toma_desiciones_y_resolucion_problemas' => $totalTomaDecisiones,
                'conocimiento_procedimental' => random_int(3, 12),
                'depuracion' => random_int(3, 12),
                'evaluacion' => random_int(3, 12),
                'monitoreo' => random_int(3, 12),
                'organizacion' => random_int(3, 12),
                'planificacion' => random_int(3, 12),
                'total_metacognicion' => random_int(20, 60),
                'nivel_inductivo' => $this->nivelFromScore($totalInductiva),
                'nivel_abductivo' => $this->nivelFromScore($totalAbductiva),
                'nivel_deductivo_y_verbal' => $this->nivelFromScore($totalDeductivoVerbal),
                'nivel_analisis_de_argumentos' => $this->nivelFromScore($totalAnalisisArgumentos),
                'nivel_toma_desiciones_y_resolucion_problemas' => $this->nivelFromScore($totalTomaDecisiones),
                'nivel_total' => $this->nivelFromScore($calificacionTotal),
                'updated_at' => now(),
            ]);
    }

    private function nivelFromScore(int $score): string
    {
        if ($score >= 120) {
            return 'alto';
        }
        if ($score >= 70) {
            return 'medio';
        }

        return 'bajo';
    }

    private function firstPresentationDate(): string
    {
        return Carbon::create(self::PRESENTATION_YEAR, 1, 1)->toDateString();
    }

    private function secondPresentationDate(): string
    {
        return Carbon::create(self::PRESENTATION_YEAR, 6, 1)->toDateString();
    }

    private function normalizeFirstTwoReportDates(int $firstReportId, int $secondReportId): void
    {
        DB::table('reportes')
            ->where('id_reporte', $firstReportId)
            ->update([
                'fecha_calificacion' => $this->firstPresentationDate(),
                'updated_at' => now(),
            ]);

        DB::table('reportes')
            ->where('id_reporte', $secondReportId)
            ->update([
                'fecha_calificacion' => $this->secondPresentationDate(),
                'updated_at' => now(),
            ]);
    }

    private function ensureSecondTestImprovement(int $firstReportId, int $secondReportId): void
    {
        $firstScore = DB::table('reportes')
            ->where('id_reporte', $firstReportId)
            ->value('calificacion_total');

        $secondScore = DB::table('reportes')
            ->where('id_reporte', $secondReportId)
            ->value('calificacion_total');

        if ($firstScore === null || $secondScore === null) {
            return;
        }

        if ((int) $secondScore > (int) $firstScore) {
            return;
        }

        $newSecondScore = min(160, (int) $firstScore + random_int(3, 15));
        $newMetacognition = min(60, max(10, (int) round($newSecondScore * 0.35)));

        DB::table('reportes')
            ->where('id_reporte', $secondReportId)
            ->update([
                'calificacion_total' => $newSecondScore,
                'calificacion_metacognicion' => $newMetacognition,
                'nivel_total' => $this->nivelFromScore($newSecondScore),
                'updated_at' => now(),
            ]);
    }

    /**
     * @param  \Illuminate\Support\Collection<int,object>  $options
     */
    private function pickOption($options, int $userId, int $itemId, int $attemptNumber, ?string $referenceAnswer)
    {
        $count = $options->count();
        if ($count === 1) {
            return $options->first();
        }

        $index = abs(crc32($userId . '-' . $itemId . '-' . $attemptNumber)) % $count;
        $selected = $options->values()->get($index);

        if ($referenceAnswer !== null && (string) $selected->texto === (string) $referenceAnswer) {
            $selected = $options->values()->get(($index + 1) % $count);
        }

        return $selected;
    }
}

