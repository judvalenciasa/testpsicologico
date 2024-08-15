<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PinesController;
use App\Http\Controllers\RespuestasController;
use GuzzleHttp\Middleware;
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
    Route::get("logout", [UserController::class, "logout"]);

    Route::get('generar_pin/{cantidad?}', [PinesController::class, 'generar_pines'])->name('pines.aletarios');
    //Route::get('ver_informes', [InformesController::class, 'ver_informes'])->name('ver.informes');
    Route::post('registrar_datos', [UserController::class, 'update'])->name('registar.datos');
    Route::post('registrar_encuesta', [RespuestasController::class, 'guardar_respuestas'])->name('guardar.respuestas');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
