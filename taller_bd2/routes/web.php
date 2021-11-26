<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Investigador', [App\Http\Controllers\InvestigadoresController::class, 'index'])->name('Investigador');

Route::get('/Proyectos', [App\Http\Controllers\ProyectosController::class, 'index']) -> name('Proyectos');

Route::get('/InsertarProyectos', [App\Http\Controllers\ProyectosController::class, 'insert']);

Route::post('/crearProyecto', [App\Http\Controllers\ProyectosController::class , 'store'] ) -> name ('crearProyecto');

Route::get('/InsertarInvestigador', [App\Http\Controllers\InvestigadoresController::class, 'insert']);

Route::post('/crearInvestigador', [App\Http\Controllers\InvestigadoresController::class , 'store'] ) -> name ('crearInvestigador');

Route::get('/Eliminar/{id}', [App\Http\Controllers\ProyectosController::class , 'destroy' ] ) -> name ('Eliminar');

Route::get('/Editar/{Proyectos}/edit', [App\Http\Controllers\ProyectosController::class , 'edit' ] ) -> name ('Editar');

Route::put('/ActualizarProyecto', [App\Http\Controllers\ProyectosController::class , 'update'] ) -> name ('ActualizarProyecto');

