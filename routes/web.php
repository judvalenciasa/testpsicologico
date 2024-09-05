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

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('home'); // Vista principal
    })->name('home');

    Route::get('/ingreso', function () {
        return view('auth.login_as_administrator');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

});

// Agrupar las rutas que requieren autenticación
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/caracterizacion', function () {
        return view('private.caracterizacion');
    })->name('caracterizacion');

    Route::get('/mostrartest', [TestsController::class, 'mostrarPrueba'])->name('mostrartest');
    
    Route::post('/logout', [UserController::class, 'logout'])->name('logout'); // Ruta para el cierre de sesión
});
