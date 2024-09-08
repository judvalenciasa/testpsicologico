<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpreguntas extends Model
{
    use HasFactory;

    // Definir la tabla relacionada
    protected $table = 'subpreguntas';

    protected $primaryKey = 'id_subpregunta';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = ['id_pregunta', 'texto', 'valor_opcion','tipo_pregunta'];

    // Relación con el modelo Pregunta (muchas subpreguntas pertenecen a una pregunta)
    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, 'id_pregunta');
    }


    public function opciones()
    {
        return $this->hasMany(OpcionesSubpreguntas::class, 'id_subpregunta');
    }

    // Relación con la tabla Preguntas
    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta', 'id_pregunta');
    }
}
