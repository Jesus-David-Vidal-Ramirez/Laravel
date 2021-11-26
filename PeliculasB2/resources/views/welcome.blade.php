@extends('layouts.app')


 {{-- LISTADO CONTENIDO - --}}
@section('content')
    
      <!-- Seccion de peliculas -->
      
      <section class="container pt-5 pelicula " >
         <div class="container"> 
            <h2>Listado de peliculas</h2>
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

                <a href="Pelicula/{{$pelicula['imdbID']}}" class=" btn btn-outline-primary w-100"> Ver Mas</a>
                
              </div>
            </div>
          </div>
       @endforeach   
      
      </div>
      
        </section>
@endsection 

{{-- FIN CONTENIDO --}}


{{-- Paginacion --}}
@section('Paginacion')
    
    
    <form method="post" action= {{ route('pagina' )}}>
      
      @csrf
      <nav aria-label="...">
        <ul class="pagination">
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        @if(isset($buscar))
        <input type="hidden" value="{{ $buscar }}" name='peli'>
        
        <input type="submit" value="{{ $id = 1 }}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 2}}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 3}}" name='id' class="page-link">
        @else
        <input type="hidden" value="cars" name='peli'>
        <input type="submit" value="{{ $id = 1 }}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 2}}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 3}}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 4}}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 5}}" name='id' class="page-link">
        <input type="submit" value="{{ $id = 6}}" name='id' class="page-link">
        @endif

        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
        </ul>
      </nav>
     
      
   
    </form>
    
@endsection


{{-- Fin Paginacion --}}

