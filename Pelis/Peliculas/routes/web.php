<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\CategoriaController;



Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

//Route::get('Listado', PeliculaController@Listado');
Route::get('Listado', [PeliculaController::class, 'Listar']) -> name('Listado');

Route::get('BuscarId', [PeliculaController::class, 'Buscar']);

Route::post('BuscarId', [PeliculaController::class, 'ObtenerId']) -> name('BuscarId');

Route::get('BuscarFecha', [PeliculaController::class, 'BuscarFecha']) ;

Route::post('BuscarFecha', [PeliculaController::class, 'ObtenerFecha']) -> name('BuscarFecha');

Route::get('ListarCategorias', [CategoriaController::class, 'listarCategoria']) -> name('ListarCategorias');

Route::get('Estrenos', [PeliculaController::class, 'Estrenos']) -> name('Estrenos');



