<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    use HasFactory;

    
    protected $fillable=[
        'calificacion_total',
        'fecha_calificacion'
    ];
}
