<?php

use App\Http\Controllers\Api\UserController;
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

Route::post("registrar", [UserController::class, 'registrar']);
Route::post("login", [UserController::class, 'login']);

Route::group(['Middleware'=> ["auth:sanctum"]], function(){
    Route::get("perfil_usuario", [UserController::class,"perfil_usuario"]);
    Route::get("logout", [UserController::class,"logout"]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
