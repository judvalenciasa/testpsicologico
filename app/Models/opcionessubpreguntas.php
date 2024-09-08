<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionesSubpreguntas extends Model
{
    use HasFactory;

    // Definir la tabla relacionada
    protected $table = 'opcionessubpreguntas';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = ['id_subpregunta', 'texto', 'valor_opcion'];

    // Relación con el modelo Subpregunta (muchas opciones pertenecen a una subpregunta)
    public function subpregunta()
    {
        return $this->belongsTo(Subpreguntas::class, 'id_subpregunta');
    }
}
