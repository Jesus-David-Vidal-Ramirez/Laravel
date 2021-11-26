@extends('layouts.app')


@section('content')

<section class="container pt-5 pelicula " >
    <div class="container"> 
       <h2>Peliculas Favoritas</h2>
    </div>
  
    
   <hr style="color:white" />  
   <div class="row row-cols-1 row-cols-lg-3  g-4">
       @foreach ($peliculas as $pelicula)
      {{-- {{ $pelicula['imdbID']}}  --}}   
   <div class="col col-md-4 col-sm-12">
       <div class="card m-3">
         @if( $pelicula['Poster'] == 'N\/A')
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum accusantium iure reprehenderit debitis reiciendis incidunt beatae quis minus quibusdam quisquam amet consequuntur vel aliquam ea, a saepe id blanditiis commodi.</p>
       @endif
         <img src="{{ $pelicula['Poster'] }}" alt="{{ $pelicula['Poster'] }}" class="img-fluid">
         {{-- <img src="https://cdn.domestika.org/c_limit,dpr_auto,f_auto,q_auto,w_820/v1509556098/content-items/002/130/920/23032615_1453885808063402_2233926401809156054_n-original.jpg?1509556098" class="card-img-top" alt="IMAGEN" width="1200px" height="310px"> --}}
          <div class="card-body">
           <h4 class="card-title">{{ $pelicula['Title'] }}   </h4>
           <p class="card-text">
             <h5>Tipo: <small>{{ $pelicula['Type']}}  </small></h5>
             <h5>Lanzamiento: <small>{{ $pelicula['Year'] }} </small></h5>
           </p>
           
         </div>  
         
         <div class="card-footer d-flex justify-content-between">
           {{-- <form action="{{ route('Pelicula/'.$pelicula['imdbID'] ) }}" method="POST">
             @csrf
             {{ $pelicula['imdbID']}}
           </form> 
           <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Un Mas</button> 
              --}}
           {{-- <a href="Pelicula/{{ $pelicula['imdbID'] }}" class=" btn btn-outline-primary w-100"> Ver Mas</a> --}}

           <a href="Delete/{{$pelicula['imdbID']}}/{{ Auth::user()->id }}" class=" btn btn-outline-danger w-50 text-left m-2"><img class="text-right" src="{{ asset('Imagenes/delete.png')}}"> Eliminar  </a>
           
           <a href="Pelicula/{{$pelicula['imdbID']}}" class="btn btn-outline-primary w-50 text-left m-2 ">Ver Mas<img class="text-right" src="{{ asset('Imagenes/favorito.png')}}">   </a>
           
         </div>
       </div>
     </div>
  @endforeach   
 
 </div>
 
   </section>
   
@endsection


