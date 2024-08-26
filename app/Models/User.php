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
        'id_pin',
        'name',
        'email',
        'password',
        'edad',
        'genero',
        'estrato',
        'horas_lectura',
        'horas_redes_sociales',
        'horas_entretenimiento',
        'promedio_deporte',
        'promedio_arte',
        'hora_sueno',
        'grasas',
        'alimentos_saludables',
    ];

    public function pin()
    {
        return $this->belongsTo(Pines::class, 'id_pin');
    }

    public function reportes()
    {
        return $this->hasMany(Reportes::class, 'id_usuario');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuestas::class, 'id_usuario');
    }
}
