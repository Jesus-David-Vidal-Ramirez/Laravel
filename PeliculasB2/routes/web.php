<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [App\Http\Controllers\PeliculasController::class, 'listar'])->name('index');

Route::post('/pages/{id?}', [App\Http\Controllers\PeliculasController::class, 'paginacion'])->name('pagina');



Route::get('/Pelicula/{id}', [App\Http\Controllers\PeliculasController::class, 'listarID']);

Route::get('/Delete/{pelicula}/{user}', [App\Http\Controllers\PeliculasController::class, 'destroy']);


// Logn
Route::get('home', [App\Http\Controllers\PeliculasController::class, 'listar']);

// Registro
Route::POST('register', [App\Http\Controllers\HomeController::class, 'index']) -> name('Register');

// Agregar Peliculas a Favoritos
Route::post('Favoritos', [App\Http\Controllers\PeliculasController::class, 'store'])->name('Favoritos') ;

// Mostrar peliculas favoritas
Route::get('Favoritos', [App\Http\Controllers\PeliculasController::class, 'Favoritos']);

//Realizar busqueda, Aun no incorporo fechas
Route::POST('Busqueda', [App\Http\Controllers\PeliculasController::class, 'Busqueda']);

// Si ingresas a la ruta y no estas autenticado, Despues de hacerlo busca la ruta donde tratastes de entrar
// Route::get('Favoritos', [App\Http\Controllers\PeliculasController::class, 'Favoritos'])->name('Favoritos') ->middleware('auth');
Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

