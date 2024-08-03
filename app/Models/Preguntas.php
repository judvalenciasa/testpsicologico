<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_prueba',
        'texto',
        'created_at',
        'updated_at'
    ];
}
