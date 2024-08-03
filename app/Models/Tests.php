<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_prueba',
        'text',
        'created_at',
        'updated_at'
    ];
}
