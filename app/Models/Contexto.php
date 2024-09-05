<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contexto extends Model
{
    use HasFactory;

    protected $table = 'contextos';
    protected $primaryKey = 'id_contexto';

    protected $fillable = [
        'texto'
    ];

    public function preguntas()
    {
        return $this->hasMany(Preguntas::class, 'id_contexto');
    }
}
