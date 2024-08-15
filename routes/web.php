<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/administrator', function () {
    return view('private.administrator-page');
})->name('administrator')->middleware('auth:sanctum');
