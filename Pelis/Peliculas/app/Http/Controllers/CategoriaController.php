<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;


class categoriaController extends Controller
{
    //
    public function listarCategoria(){

        $categoria = new CategoriaModel();     
        $listar = $categoria -> listarCategoria();
        
        

        return view('ListarCategorias', ['listar' => $listar] );
    }
}
