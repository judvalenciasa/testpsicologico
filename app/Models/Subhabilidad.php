<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subhabilidad extends Model
{
    use HasFactory;

    protected $table = 'subhabilidades';
    protected $primaryKey = 'id_subhabilidad';

    protected $fillable = [
        'id_habilidad',
        'nombre'
    ];

    public function habilidad()
    {
        return $this->belongsTo(Habilidades::class, 'id_habilidad');
    }

    public function preguntas()
    {
        return $this->hasMany(Preguntas::class, 'id_subhabilidad');
    }
}
