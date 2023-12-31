<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarEstudiante;
use App\Http\Controllers\Estudiantess;
use App\Http\Controllers\RegistrarAdministradores;
use App\Http\Controllers\Administradorr;
use App\Http\Controllers\Acciones;
use App\Http\Controllers\AccionesA;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\MaestroA;


//pagina principal
Route::get('/', function () {
    return view('auth.principal');
})->name('auth.principal');

//todo lo relacionado con estudiante
Route::get('/estudianteR', [RegistrarEstudiante::class,'index'])->name('registrar');
Route::post('/estudianteR', [RegistrarEstudiante::class,'store']);
//para ver listado de estudiantes
Route::get('/estudianteR', [Estudiantess::class, 'index'])->name('estudianteR');
//botones principales
Route::get('/estudiante', [RegistrarEstudiante::class, 'index'])->name('estudiante');


//para administrador
Route::get('/administradorR', [Administradorr::class,'index'])->name('registrar');

Route::post('/administrador', [RegistrarAdministradores::class,'index'])->name('registrar');
Route::post('/administrador', [RegistrarAdministradores::class,'store']);
Route::get('/administrador', [RegistrarAdministradores::class, 'index'])->name('administrador');

Route::get('/administradorR', [Administradorr::class, 'index'])->name('administradorR');

//BOTON PARA VOLVER DE LA LISTA DE ESTUDIANTES DESDE ADMINISTRADOR
Route::get('/acciones', [AccionesA::class, 'index'])->name('acciones');

Route::get('/estudianteD', [Acciones::class, 'index'])->name('estudianteD');

//eliminar usuario

Route::delete('/estudianteD/{id}', [Acciones::class, 'eliminarUsuario'])->name('usuarios.eliminar');

//para maestro
//boton
Route::get('/maestro', [MaestroController::class,'index'])->name('maestro');
//registro
Route::post('/maestro', [MaestroController::class,'index'])->name('registrar');
Route::post('/maestro', [MaestroController::class,'store']);

//para ver y eliminar en la lista de maestr
Route::get('/listaMaestro', [MaestroA::class, 'index'])->name('listaMaestro');
Route::delete('/listaMaestro/{id}', [MaestroA::class, 'eliminarUsuario'])->name('usuarios.eliminar');

