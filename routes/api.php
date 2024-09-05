<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PinesController;
use App\Http\Controllers\RespuestasController;
use App\Http\Controllers\TestsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas de API para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| está asignado al middleware "api".
|
*/

// Grupo de rutas protegidas por autenticación
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get("perfil_usuario", [UserController::class, "perfil_usuario"]);

    Route::put('/pines/toggle', [PinesController::class, 'toggleEstado'])->name('pines.toggle');
    Route::post("logout", [UserController::class, "logout"])->name('logout');
    Route::get('/pines', [PinesController::class, 'index'])->name('pines.index');
    Route::post('/generar_pin/{cantidad?}', [PinesController::class, 'generar_pines'])->name('pines.aletarios');
    Route::post('/cargar_preguntas', [TestsController::class, 'cargarPreguntas'])->name('cargar.preguntas');
    Route::post('/registrar_datos', [UserController::class, 'llenar_encuesta_caracterizacion'])->name('registar.encuesta.caraterizacion');
});

// Grupo de rutas accesibles solo para invitados (usuarios no autenticados)
Route::group(['middleware' => ['guest']], function () {
    Route::post("registrar", [UserController::class, 'registrar'])->name('registrar');
    Route::post("login", [UserController::class, 'login'])->name('login');
});

// Ruta para obtener los datos del usuario autenticado con Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
