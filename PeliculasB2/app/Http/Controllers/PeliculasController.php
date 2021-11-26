<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Favoritos;

use Illuminate\Support\Facades\Gate;


use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class PeliculasController extends Controller
{
    
    public function listar(){
        

        $api = Http::get( env("URL"). env("APIKEY").'&s=cars')->json()['Search']; 
        // CONSULTA $api2 = Http::get( env("URL"). env("APIKEY").'&s=cars')->json()['totalResults'];
        
        $peliculas = collect($api) ;
           
        return view('welcome' , compact('peliculas'));
    }


    public function paginacion(Request $request){
        $id = $request->id;
        $busqueda = $request->peli;
        
        // echo $busqueda . 'la busqueda';
        $api = Http::get( env("URL"). env("APIKEY").'&s='.$busqueda.'&page='.$id)->json()['Search']; 
        // CONSULTA $api2 = Http::get( env("URL"). env("APIKEY").'&s=cars')->json()['totalResults'];
        
        $peliculas = collect($api) ;
        //    echo $peliculas;
        return view('welcome' , compact('peliculas'));   
    }

    public function listarID($id , Request $request) {
        $api = Http::get( env("URL"). env("APIKEY").'&i='.$id.'&plot=full')->json();
        
        $pelicula = collect($api);

        if($pelicula['Response'] == 'False'){
            
            //DEVOLVER OTRA VISTA O UNA OPCION DE ALERTA
            //El usuari cambio el ID a uno invalido
            // return view('welcome', compact('peliculas'));

            return redirect()-> route( 'index' ) ;
        }
        
        return view('Pelicula', compact('pelicula'));        
    }



    public function Favoritos(){

        if (Auth::check()) {
            
        $Id_User = Auth::user()->id;
        
        $PeliculasFavoritos = Favoritos::where('Id_User', $Id_User)->get();
        
        $Favoritas = collect($PeliculasFavoritos);
        
        $peliculas = array();
        
        foreach ($Favoritas as $pelicula){
      
            $api = Http::get( env("URL"). env("APIKEY").'&i='.$pelicula['ImdbID'].'&plot=full')->json();
      
            $pelicula = collect($api);
      
            array_push($peliculas, $pelicula );
            
        }
    
        return view('PeliculasFavoritas', compact('peliculas'));
            
        }

        return view('index');
        
    }

    public function Busqueda(Request $request){

        $buscar = $request->busqueda;

        $api = Http::get( env("URL"). env("APIKEY").'&s='.$buscar)->json();
    
        if($api['Response'] == 'False' ){
            
            echo 'Mensaje de error';
            
            return $this->listar();

        }else{

            $peliculas = collect($api['Search']);
            
            echo $buscar;

            return view('welcome', compact('peliculas', 'buscar'));    
            
        }

    }


    public function store(Request $request){   
        // echo $Id_User = $request->ID; 
        // if (Auth::check()) {
        Favoritos::create($request->all());
        
        return redirect()-> route( 'Favoritos' ) ;
                  
    }

    public function destroy( $pelicula, $user){

        $ImdbID = Favoritos::select('*') ->where('Id_User', $user)->get();

        $id = null;
        foreach($ImdbID as $values){
            
            if($values['ImdbID'] == $pelicula){
                $id =$values['id'];
            }
            
        }
        //Forma antigua borraba todos los ImdbID iguales
        // $Eliminado = Favoritos::where('ImdbID', '=', $pelicula )
        //                         ->where('Id_User', '=' , $user)
        //                         ->where('id', '=', $id) 
        //                         ->delete();

        Favoritos::where('id', '=', $id)->delete();

        return redirect()-> route('Favoritos');
    }


}
