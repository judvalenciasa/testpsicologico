<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcriterios extends Model
{
    use HasFactory;

    // Define la tabla asociada con el modelo
    protected $table = 'subcriterios';

    // Clave primaria
    protected $primaryKey = 'id_subcriterio';

    // Atributos que pueden asignarse en masa
    protected $fillable = [
        'id_subpregunta',
        'texto',
        'valor_opcion',
    ];

    // Relación con la tabla Subpregunta
    public function subpregunta()
    {
        return $this->belongsTo(subpreguntas::class, 'id_subpregunta', 'id_subpregunta');
    }
}
