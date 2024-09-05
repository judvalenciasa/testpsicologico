<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pines extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pin';

    protected $fillable = [
        'id_pin',
        'pin',
        'intentos',
        'id_prueba',
        'creacion_fecha',
        'fecha_expiracion',
        'estado'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_pin', 'id_pin');
    }

    public function prueba()
    {
        return $this->belongsTo(Tests::class, 'id_prueba');
    }
}
