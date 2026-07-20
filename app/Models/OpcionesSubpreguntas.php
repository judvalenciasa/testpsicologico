<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionesSubpreguntas extends Model
{
    use HasFactory;

    protected $table = 'opcionessubpreguntas';

    protected $primaryKey = 'id_opcionessubpregunta';

    protected $fillable = ['id_subpregunta', 'texto', 'valor_opcion'];

    public function subpregunta()
    {
        return $this->belongsTo(Subpreguntas::class, 'id_subpregunta');
    }
}
