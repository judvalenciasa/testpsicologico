<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    use HasFactory;

    protected $table = 'pruebas';
    protected $primaryKey = 'id_prueba';

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado'
    ];

    public function pines()
    {
        return $this->hasMany(Pines::class, 'id_prueba');
    }

    public function preguntas()
    {
        return $this->hasMany(Preguntas::class, 'id_prueba');
    }
}
