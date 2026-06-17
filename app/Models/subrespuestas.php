<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subrespuestas extends Model
{
    use HasFactory;

    protected $table = 'subrespuestas';

    // Especificar la clave primaria si no es 'id'
    protected $primaryKey = 'id_subrespuesta';

    // Definir los campos asignables en masa
    protected $fillable = [
        'id_usuario',
        'id_subpregunta',
        'id_reporte',
        'respuesta',
        'calificacion_respuesta'
    ];

    // Definir las relaciones

    // Relación con el modelo User (usuarios)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    // Relación con el modelo Subpregunta
    public function subpregunta()
    {
        return $this->belongsTo(Subpreguntas::class, 'id_subpregunta', 'id_subpregunta');
    }

    // Relación con el modelo Reporte
    public function reporte()
    {
        return $this->belongsTo(Reportes::class, 'id_reporte', 'id_reporte');
    }

    public function subrespuestas()
    {
        return $this->hasMany(Subrespuestas::class, 'id_usuario', 'id_usuario');
    }
}
