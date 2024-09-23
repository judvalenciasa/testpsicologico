<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descriptivos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_descriptivo';

    protected $fillable = [
        'id_respuesta',
        'texto_descriptivo',
        'calificacion',
    ];

    public function respuesta()
    {
        return $this->belongsTo(Respuestas::class, 'id_pregunta', 'id_pregunta');
    }
}


