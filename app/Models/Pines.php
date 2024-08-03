<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pines extends Model
{
    use HasFactory;

    protected $fillable=[
        'pin',
        'intentos',
        'creacion_fecha',
        'fecha_expiracion',
    ];
}
