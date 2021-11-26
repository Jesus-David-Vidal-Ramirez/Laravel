<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //$api = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=d7313b5a6764b1d961e3cf565ea30c28')->json()['results'];
   
           
       //$api = Http::get('https://jsonplaceholder.typicode.com/users');
        $api = Http::get( env("URL"). env("APIKEY").'&s=avenger')->json()['Search'];
        // CONSULTA $api2 = Http::get( env("URL"). env("APIKEY").'&s=cars')->json()['totalResults'];
        
        $peliculas = collect($api) ;
        $perro = "perrote";
           //$api->json();
          // $api = Http::get('https://www.omdbapi.com/?t=all&apikey=9a5d2c77&s=avenger');
           //dd($api);
           return view('home' , compact('peliculas') );
           
        // return view('home');
    }

    
}
