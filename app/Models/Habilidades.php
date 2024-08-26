<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    use HasFactory;

    protected $table = 'habilidades';
    protected $primaryKey = 'id_habilidad';

    protected $fillable = [
        'calificacion_habilidad',
        'nombre'
    ];

    public function subhabilidades()
    {
        return $this->hasMany(Subhabilidad::class, 'id_habilidad');
    }
}
