<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pines extends Model
{
    use HasFactory;

    protected $fillable = [
        'pin',
        'intentos',
        'id_prueba',
        'creacion_fecha',
        'fecha_expiracion',
        'estado'
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_pin');
    }

    public function prueba()
    {
        return $this->belongsTo(Tests::class, 'id_prueba');
    }
}
