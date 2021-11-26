@extends('layouts.app')


{{-- VISTA DE UNA SOLA PELICULA --}}

{{-- LISTADO CONTENIDO --}}

@section('content')
      
      <!-- Seccion de peliculas -->
      <main class="container mt-5" >
        <section class="row">
          <picture class="col-md-4">
            <img src="{{ $pelicula['Poster']}}" class="img-fluid">
          </picture>
          <article class="col-md-8 bg-light">
            <h2 class="text-center"> {{ $pelicula['Title']}} </h2>
            <p>{{ $pelicula['Plot']}}</p>
            <ul>
              <li>Lanzamiento: {{ $pelicula['Released']}}</li>
              <li>Duracion: {{ $pelicula['Runtime']}}</li>
              <li>Genero: {{ $pelicula['Genre']}}</li>
              <li>Actores: {{ $pelicula['Actors']}}</li>
              <li>Lenguajes: {{ $pelicula['Language']}}</li>
              <li>Premios: {{ $pelicula['Awards']}}</li>
              <li>Tipo: {{ $pelicula['Type']}}</li>
              <li>Puntaje: {{ $pelicula['Metascore']}} <img src="{{asset('Imagenes/estrella.png')}}" alt={{asset('Imagenes/estrella.png')}} ></li>
              @if(!Auth::guest())
              <form method="post" action="{{ route('Favoritos') }}">
                @csrf
                <input type="hidden" name="Id_User" class="form-control"  value="{{ Auth::user()->id }}">
                
                <input type="hidden" name="imdbID" class="form-control" value="{{ $pelicula['imdbID'] }}">

                <button type="submit" class=" btn btn-outline-danger mt-4 w-100" >Añadir Favoritos</button>
                
              </form>
              @endif
            </ul>
            
          </article>
          
      </section>
      </main>
        </section>
@endsection 

{{-- FIN CONTENIDO --}}

