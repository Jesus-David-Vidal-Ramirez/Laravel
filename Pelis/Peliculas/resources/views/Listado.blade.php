@extends('layouts.plantilla')

@section('title', 'Peliculas')

@section('menu')
    @parent
@show

@section('contenido')


<div class="container mt-5 mb-5 text-center ">
	<table class="table table-hover table-light">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Titulo</th>
	      <th scope="col">Fecha Lanzamiento</th>
	      <th scope="col">Clasificacion</th>
	      <th scope="col">Duracion</th>
	      <th scope="col">Temporadas</th>
	      <th scope="col">Categoria</th>
	      <th scope="col">Tipo</th>
	    </tr>
	  </thead>
	  <tbody>


	  	@foreach($listar as $indice )
		    <tr>
				@foreach($indice as $valor )
					<td>	
						{{$valor}}
					</td>	
			    @endforeach	 
		    </tr>
		@endforeach


					
		    	
			
	  </tbody>
	</table>
</div>

@endsection

@section('footer')
    @parent
@show




	

