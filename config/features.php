<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Feature Flags
    |--------------------------------------------------------------------------
    |
    | Bandera para habilitar/deshabilitar la calificación por IA.
    | Por requerimiento actual queda desactivada por defecto.
    |
    */
    'ai_scoring_enabled' => env('FEATURE_AI_SCORING', false),
];

