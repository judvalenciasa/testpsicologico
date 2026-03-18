<?php

namespace App\Application\Tests;

class MotivationCategoryService
{
    public function sum(array $input): array
    {
        $categories = [
            'motivacion_intrinseca' => 0,
            'motivacion_extrinseca' => 0,
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
}

