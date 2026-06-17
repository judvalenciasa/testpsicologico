<?php

use App\Http\Controllers\Api\UserController;
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



// Ruta para obtener los datos del usuario autenticado con Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
