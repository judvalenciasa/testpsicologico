<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpreguntas extends Model
{
    use HasFactory;

    protected $table = 'subpreguntas';

    protected $primaryKey = 'id_subpregunta';

    protected $fillable = ['id_pregunta', 'texto', 'valor_opcion', 'tipo_pregunta'];

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, 'id_pregunta');
    }

    public function opciones()
    {
        return $this->hasMany(OpcionesSubpreguntas::class, 'id_subpregunta');
    }

    public function subrespuestas()
    {
        return $this->hasMany(Subrespuestas::class, 'id_subpregunta', 'id_subpregunta');
    }
}
