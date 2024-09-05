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
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("registrar", [UserController::class, 'registrar'])->name('registrar');
Route::post("login", [UserController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get("perfil_usuario", [UserController::class, "perfil_usuario"]);

    Route::put('/pines/toggle', [PinesController::class, 'toggleEstado'])->name('pines.toggle');
    Route::post("logout", [UserController::class, "logout"])->name('logout');

    Route::get('/pines', [PinesController::class, 'index'])->name('pines.index');


    Route::get('generar_pin/{cantidad?}', [PinesController::class, 'generar_pines'])->name('pines.aletarios');

    Route::post('cargar_preguntas', [TestsController::class, 'cargarPreguntas'])->name('cargar.preguntas');

    // Ruta para registrar la encuesta de caracterización
    Route::post('registrar_datos', [UserController::class, 'llenar_encuesta_caracterizacion'])->name('registar.encuesta.caraterizacion');

    // Ruta para registrar las respuestas de la encuesta de metacognición

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
