
@extends('layouts.plantilla')

@section('title', 'Estrenos')

@section('menu')
    @parent
@endsection

@section('contenido')


<div class="container mt-5 mb-5 d-flex justify-content-center">
	<table class="table table-hover table-light text-center">
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
	  	
	  
	  	 <tr>
	  	 	@foreach($Estreno as $indice )
		    <tr>
				
				@foreach($indice as $valor )
					<td>	

						{{$valor}}
						
					</td>	
			    @endforeach	 
		    </tr>
		@endforeach
		    </tr>
	  </tbody>
	</table>
</div>

@endsection

@section('footer')
    @parent
@show


