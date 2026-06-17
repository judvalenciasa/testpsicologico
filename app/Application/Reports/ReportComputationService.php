<?php

namespace App\Application\Reports;

class ReportComputationService
{
    private const LEVEL_RANGES = [
        'inductivo' => [
            [0, 4, 'Muy Bajo'],
            [5, 8, 'Bajo'],
            [9, 12, 'Intermedio'],
            [13, 16, 'Alto'],
            [17, null, 'Muy Alto'],
        ],
        'abductivo' => [
            [0, 3, 'Muy Bajo'],
            [4, 6, 'Bajo'],
            [7, 9, 'Intermedio'],
            [10, 12, 'Alto'],
            [13, null, 'Muy Alto'],
        ],
        'deductivo' => [
            [0, 3, 'Muy Bajo'],
            [4, 6, 'Bajo'],
            [7, 9, 'Intermedio'],
            [10, 12, 'Alto'],
            [13, null, 'Muy Alto'],
        ],
        'analisis_argumentos' => [
            [0, 8, 'Muy Bajo'],
            [9, 17, 'Bajo'],
            [18, 25, 'Intermedio'],
            [26, 34, 'Alto'],
            [35, null, 'Muy Alto'],
        ],
        'toma_decisiones' => [
            [0, 13, 'Muy Bajo'],
            [14, 26, 'Bajo'],
            [27, 39, 'Intermedio'],
            [40, 53, 'Alto'],
            [54, null, 'Muy Alto'],
        ],
        'total' => [
            [0, 32, 'Muy Bajo'],
            [33, 64, 'Bajo'],
            [65, 96, 'Intermedio'],
            [97, 128, 'Alto'],
            [129, null, 'Muy Alto'],
        ],
    ];

    private const CONTEXT_DESCRIPTORS = [
        1 => 'en contextos de entretenimiento y diversión ',
        2 => 'en contextos culturales, científicos y de percepción del mundo ',
        3 => 'en contextos culturales ',
        4 => 'en contextos económico-ambientales ',
        5 => 'en contextos ambientales y sociales. ',
        6 => 'en contextos familiares, de salud mental, y tecnológicos. ',
        7 => 'en contextos políticos y culturales ',
        8 => 'en contextos de relaciones interpersonales, educativos y del proyecto de vida. ',
        9 => 'en contextos económicos, educativos y de proyección de vida. ',
        10 => 'en contextosfuturibles, tecnológicos, laborales y económicos. ',
        11 => 'en contextos educativos, e institucionales. ',
        12 => 'en contextos culturales, sociales y de participación comunitaria. ',
        13 => 'en contextos educativos, institucionales, de participación en los asuntos colectivos y de vínculos emocionales. ',
        14 => 'en contextos ambientales de riesgos de desastres y de interacción institucional con el ámbito social- comunitario. ',
        15 => 'en contextos de carácter político, social y de salud reproductiva. ',
        16 => 'en contextos culturales y sociales que movilizan los sentidos, la imaginación y el pensamiento. ',
        17 => 'en contextos de política pública sostenible relacionada con la descontaminación de cuerpos de agua. ',
        18 => 'en contextos de participación social comunitaria, integridad física y seguridad. ',
        19 => 'en contextos de era digital y tecnológica en los que tienen lugar nuevas interacciones sociales. ',
        20 => 'en contextos de fenómenos ambientales, culturales y de propuestas de emprendimiento. ',
        21 => 'de relaciones sociales y vínculos emocionales. ',
        22 => 'en contextos de participación ambiental y calidad de vida. ',
        23 => 'en contextos educativos, económicos y de proyección internacional. ',
        24 => 'en contextos políticos de protección de DD.HH. ',
        25 => 'en contextos deportivos, de salud y relaciones interpersonales. ',
        26 => 'En contextos en los que la era tecnológica y digital ofrece facilidades, pero también pone en riesgo la seguridad de las personas ',
        27 => 'En contextos educativos y de responsabilidades académicas. ',
        28 => 'En contextos de conservación ecosistémica o vida natural ante amenazas propias de la urbanización. ',
        29 => 'En contextos culturales de competitividad y situaciones adversas ',
        30 => 'En contextos sociales y ambientales de búsqueda de calidad de vida alrededor de la salud y el aire. ',
    ];

    public function sumCategories(array $input): array
    {
        $categories = [
            'conocimiento_procedimental' => 0,
            'planificacion' => 0,
            'organizacion' => 0,
            'monitoreo' => 0,
            'depuracion' => 0,
            'evaluacion' => 0,
        ];

        foreach ($input as $key => $value) {
            $parts = explode('-', (string) $key);
            if (count($parts) <= 1) {
                continue;
            }

            $category = $parts[0];
            if (array_key_exists($category, $categories)) {
                $categories[$category] += (int) $value;
            }
        }

        return $categories;
    }

    public function calculateLevel($score, string $skillType): string
    {
        if (!array_key_exists($skillType, self::LEVEL_RANGES)) {
            return 'Nivel desconocido';
        }

        foreach (self::LEVEL_RANGES[$skillType] as [$min, $max, $label]) {
            if ($score >= $min && ($max === null || $score <= $max)) {
                return $label;
            }
        }

        return 'Nivel desconocido';
    }

    public function contextDescriptor($contextId): string
    {
        return self::CONTEXT_DESCRIPTORS[$contextId] ?? 'no hay descripcion para este contexto';
    }
}

