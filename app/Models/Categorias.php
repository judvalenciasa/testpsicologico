<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'Categorias';
    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nombre'
    ];

    public function preguntas()
    {
        return $this->hasMany(Preguntas::class, 'id_categoria');
    }
}
