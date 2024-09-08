<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterios extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'criterios';

    // Primary key
    protected $primaryKey = 'id_criterio';

    // Specify which attributes can be mass-assigned
    protected $fillable = [
        'id_pregunta',
        'texto',
        'valor_opcion',
    ];

    // Relación con la tabla Preguntas
    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta', 'id_pregunta');
    }
}
