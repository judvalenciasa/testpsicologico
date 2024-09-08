<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // Asegúrate de agregar este trait

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
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
        'documento_identificacion',
        'edad',
        'genero',
        'estrato',
        'nivel_escolaridad',
        'nivel_educativo_padre',
        'nivel_educativo_madre',
        'horas_lectura',
        'horas_redes_sociales',
        'horas_entretenimiento',
        'hora_sueno',
        'promedio_arte',
        'promedio_deporte',
        'grasas',
        'alimentos_saludables',
        'litro_agua'
    ];

    public function pin()
    {
        return $this->hasOne(Pines::class, 'id_pin', 'id_pin');
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
