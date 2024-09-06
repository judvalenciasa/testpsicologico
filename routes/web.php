<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\PinesController;
use App\Http\Controllers\Api\UserController; // Asegúrate de importar el controlador adecuado

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas están protegidas por el middleware 'web' que gestiona las sesiones,
| cookies, autenticación, etc.
|
*/

Route::get('/', function () {
    return view('home'); // Vista principal
})->name('home');

Route::get('/ingreso', function () {
    return view('auth.login_as_administrator');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Agrupar las rutas que requieren autenticación
Route::group(['middleware' => ['auth']], function () {
    Route::get('/caracterizacion', function () {
        return view('private.caracterizacion');
    })->name('caracterizacion');

    Route::get('/mostrartest', [TestsController::class, 'mostrarPrueba'])->name('mostrartest');
});

// Grupo de rutas protegidas por autenticación
Route::group(['middleware' => ['auth']], function () {
    Route::get("perfil_usuario", [UserController::class, "perfil_usuario"]);
    Route::put('/pines/toggle', [PinesController::class, 'toggleEstado'])->name('pines.toggle');
    Route::get('/pines', [PinesController::class, 'index'])->name('pines.index');
    Route::post('/generar_pin/{cantidad?}', [PinesController::class, 'generar_pines'])->name('pines.aletarios');
    Route::post('/cargar_preguntas', [TestsController::class, 'cargarPreguntas'])->name('cargar.preguntas');
    Route::post('/registrar_datos', [UserController::class, 'llenar_encuesta_caracterizacion'])->name('registar.encuesta.caraterizacion');
});

// Grupo de rutas accesibles solo para invitados (usuarios no autenticados)
Route::post("registrar", [UserController::class, 'registrar'])->name('registrar');
Route::post("login", [UserController::class, 'login'])->name('login');
Route::post("logout", [UserController::class, "logout"])->name('logout');
