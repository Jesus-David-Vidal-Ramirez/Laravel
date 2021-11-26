<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeliculaModel;


class peliculacontroller extends Controller
{ 
    //compact('variable')
    ///pasar como parametro a retornar

    
    public function Listar(){
        $pelicula = new PeliculaModel();     
        $listar = $pelicula -> Pelicula();
        
        
        return view('Listado', ['listar' => $listar] );
    }

    public function Buscar(){
        $BuscardorId = 0;
        return view('BuscarId' , ['BuscardorId' => $BuscardorId] );
    }

    public function ObtenerId(Request $request){
        $BuscardorId = new PeliculaModel();
        $BuscardorId -> Id = $request->Buscar;
        $datos = $BuscardorId['Id'];
        
        $BuscarId = $BuscardorId -> BuscarId($datos);
        $BuscardorId = 1;
        return view('BuscarId', ['BuscarId' => $BuscarId], ['BuscardorId' => $BuscardorId] );

    }


    public function BuscarFecha(){
        $BuscadorFecha = 0;
        return view('BuscarFecha' , ['BuscadorFecha' => $BuscadorFecha] );
    }


    public function ObtenerFecha(Request $request){
        $BuscardorFecha = new PeliculaModel();
        $BuscardorFecha -> anio = $request->Buscar;
        $datos = $BuscardorFecha['anio'];
        
        $BuscarFecha= $BuscardorFecha -> BuscarFecha($datos);

        $BuscadorFecha = 1;
        //return print_r($BuscarFecha) . 'Amor';
        return view('BuscarFecha', ['BuscarFecha' => $BuscarFecha] , ['BuscadorFecha' => $BuscadorFecha] );
    }

    public function ListadoCategorias(Request $request){
        $BuscardorId = new PeliculaModel();
        $BuscardorId -> Buscar = $request->Buscar;

        return view('ListarId', ['listar' => $BuscadorId]);
    }

    public function Estrenos(){
        $BuscardorEstreno = new PeliculaModel();
        
        $Estreno= $BuscardorEstreno -> BuscarEstreno();
       
        return view('Estrenos', ['Estreno' => $Estreno] );
    }



}



