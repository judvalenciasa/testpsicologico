<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;

    protected $table = 'respuestas';
    protected $primaryKey = 'id_respuesta';

    protected $fillable = [
        'id_usuario',
        'id_pregunta',
        'id_respuesta',
        'id_reporte',
        'respuesta',
        'calificacion_respuesta'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, 'id_pregunta');
    }

    public function reporte()
    {
        return $this->belongsTo(Reportes::class, 'id_reporte');
    }

}
