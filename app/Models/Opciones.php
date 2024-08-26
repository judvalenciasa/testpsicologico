<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{
    use HasFactory;

    protected $table = 'opciones';
    protected $primaryKey = 'id_opcion';

    protected $fillable = [
        'id_pregunta',
        'texto',
        'valor_opcion'
    ];

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, 'id_pregunta');
    }
}
