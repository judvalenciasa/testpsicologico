<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $able = "users"; 
    protected $primaryKey = 'id_usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'edad',
        'genero',
        'estrato',
        'escolaridad_madre',
        'escolaridad_padre',
        'horas_lectura',
        'horas_redes_sociales',
        'horas_entretenimiento',
        'promedio_segundo_idioma',
        'promedio_deporte',
        'promedio_arte',
        'hora_sueno',
        'grasas',
        'pensamiento_critico'
    ];




}
