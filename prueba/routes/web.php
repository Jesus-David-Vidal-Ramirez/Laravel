<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index
Route::get('/',  [App\Http\Controllers\DotacionController::class, 'index'])->name('/');
// Buscar Usuario
Route::post('/',  [App\Http\Controllers\DotacionController::class, 'show'])->name('busqueda');
// Ingresar un usuario a la dotacion
Route::post('/createDotacion',  [App\Http\Controllers\DotacionController::class, 'store'])->name('crearDotacion');
// Buscar todas las dotaciones por año 
Route::get('/busquedaAnual/{id}',  [App\Http\Controllers\DotacionController::class, 'buscarPorFecha']);


//Descarga
Route::get('export', [App\Http\Controllers\DotacionController::class, 'export']);
Route::fallback(function () {
    return ('Error 404');
});

// Auth::routes();
