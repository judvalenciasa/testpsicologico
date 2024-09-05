<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\PinesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home'); // o cualquier otra vista que sea tu página principal
})->name('home');

Route::get('/ingreso', function () {
    return view('auth.login_as_administrator');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Agrupar las rutas que requieren autenticación
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/caracterizacion', function () {
        return view('private.caracterizacion');
    })->name('caracterizacion');

    Route::get('mostrarTest', [TestsController::class, 'mostrarPrueba'])->name('mostrar.prueba');

    Route::get('/pines', [PinesController::class, 'index'])->name('pines.index');

    Route::get('/pruebaPage', function () {
        return view('private.prueba_page');
    })->name('pruebaPage');


    Route::get('/administrator', function () {
        return view('private.administrator-page');
    })->name('administrator');
});
