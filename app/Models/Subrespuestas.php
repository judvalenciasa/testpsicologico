<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrespuestas extends Model
{
    use HasFactory;

    protected $table = 'subrespuestas';

    protected $primaryKey = 'id_subrespuesta';

    protected $fillable = [
        'id_usuario',
        'id_subpregunta',
        'id_reporte',
        'respuesta',
        'calificacion_respuesta',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    public function subpregunta()
    {
        return $this->belongsTo(Subpreguntas::class, 'id_subpregunta', 'id_subpregunta');
    }

    public function reporte()
    {
        return $this->belongsTo(Reportes::class, 'id_reporte', 'id_reporte');
    }
}
