<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    protected $table = 'preguntas';
    protected $primaryKey = 'id_pregunta';

    protected $fillable = [
        'id_prueba',
        'id_contexto',
        'id_subhabilidad',
        'id_categoria',
        'texto'
    ];

    public function subpreguntas()
    {
        return $this->hasMany(Subpreguntas::class, 'id_pregunta');
    }

    public function prueba()
    {
        return $this->belongsTo(Tests::class, 'id_prueba');
    }

    public function contexto()
    {
        return $this->belongsTo(Contexto::class, 'id_contexto');
    }

    public function subhabilidad()
    {
        return $this->belongsTo(Subhabilidad::class, 'id_subhabilidad');
    }

    public function categoria()
    {
        return $this->belongsTo(Habilidades::class, 'id_categoria');
    }

    public function opciones()
    {
        return $this->hasMany(Opciones::class, 'id_pregunta');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuestas::class, 'id_pregunta');
    }

    public function criterios()
    {
        return $this->hasMany(Criterio::class, 'id_pregunta', 'id_pregunta');
    }
}
