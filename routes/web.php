<?php

use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\ReportesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\PinesController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PruebasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas están protegidas por el middleware 'web' que gestiona
| las sesiones, cookies, autenticación, etc.
|
*/

// Ruta principal (home)
Route::get('/', function () {
    return view('home'); // Vista principal
})->name('home');

// Ruta de login
Route::get('/ingreso', function () {
    return view('auth.login_as_administrator');
})->name('login')->middleware('guest');

// Ruta de registro
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest');

// Rutas protegidas por autenticación
Route::group(['middleware' => ['auth']], function () {

    // Ruta para la página de caracterización
    Route::get('/caracterizacion', function () {
        return view('private.caracterizacion');
    })->name('caracterizacion');

    // Ruta para mostrar las pruebas
    Route::get('/test/iniciar', [TestsController::class, 'mostrarPrueba'])->name('test.iniciar');

    // Ruta para ver el perfil de usuario
    Route::get('/perfil_usuario', [UserController::class, 'perfil_usuario']);

    // Rutas relacionadas con los Pines
    Route::put('/pines/toggle', [PinesController::class, 'toggleEstado'])->name('pines.toggle');
    Route::get('/pines', [PinesController::class, 'index'])->name('pines.index');
    Route::post('/generar_pin/{cantidad?}', [PinesController::class, 'generar_pines'])->name('pines.aletarios');

    // Ruta para cargar preguntas
    Route::post('/cargar_preguntas', [TestsController::class, 'cargarPreguntas'])->name('cargar.preguntas');

    // Ruta para administrator-page
    Route::get('/administrator-page', [UserController::class, 'indexAdministrador'])->name('administrator-page');

    // Ruta para registrar datos de la encuesta de caracterización
    Route::post('/registrar_datos', [UserController::class, 'llenar_encuesta_caracterizacion'])->name('registar.encuesta.caraterizacion');

    // Ruta para deshabilitar pruebas
    Route::post('/pruebas/deshabilitar', [PruebasController::class, 'deshabilitarPrueba'])->name('pruebas.deshabilitar');

    // Crear informe
    Route::post('/informe/crear_reporte', [ReportesController::class, 'ver_reporte_usuario'])->name('ver.reporte.usuario');
    // Ruta para ver el reporte individual
    Route::post('ver/reporte', [ReportesController::class, 'verReporte'])->name('reporte.ver');


    //Ruta para cargar la vista de metacognicion
    Route::get('/metacognicion', [TestsController::class, 'metacognicion'])->name('metacognicion.encuesta');

    //Ruta para cargar la vista de motivacion
    Route::get('/motivacion', [TestsController::class, 'motivacion'])->name('motivacion.encuesta');

    //Ruta para guardar la encuesta de motivacion
    Route::post('/guardar_motivacion', [TestsController::class, 'guardar_motivacion'])->name('guardar.motivacion');

    // Rutas para administradores
    Route::get('/admin/usuarios', [UserController::class, 'index'])->name('private.usuarios');
    Route::get('/admin/usuarios/{id}/reportes', [ReportesController::class, 'verReportes'])->name('private.verReportes');
    Route::post('/admin/usuarios/respuesta', [ReportesController::class, 'ver_respuestas_admin'])->name('reporte.verRespuestas');


    // Ruta para mostrar la política de datos
    Route::get('/politica-datos', [UserController::class, 'mostrarPolitica'])->name('politica.datos');
    Route::post('/politica-datos/aceptar', [UserController::class, 'aceptarPolitica'])->name('politica.aceptar');

    Route::post('usuarios/cargar_politicas', [ArchivosController::class, 'store'])->name('archivo.store');

});

// Rutas accesibles solo para invitados (usuarios no autenticados)

// Ruta de registro
Route::post("registrar", [UserController::class, 'registrar'])->name('registrar');

// Ruta de login
Route::post("login", [UserController::class, 'login'])->name('login');

// Ruta para logout
Route::post("logout", [UserController::class, "logout"])->name('logout');
