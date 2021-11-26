
@extends('layouts.plantilla')

@section('title', 'Buscardor Por Fecha')

@section('menu')
    @parent
@endsection

@section('contenido')

<form method="post" action="{{route('BuscarFecha')}}" class="my-5 container"> 
	@csrf

<input type="text" name="Buscar" placeholder="Buscar Por Fecha" class="w-25 p-2"><br>

<input type="submit" value="Buscar" class="btn btn-danger mt-3 p-2 w-25">
</form>

<div class="container mt-5 mb-5">
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
	  	 
		    @if($BuscadorFecha ){
		    	@if($BuscarFecha > 1){
					@foreach($BuscarFecha as $indice )
					    <tr>
							@foreach($indice as $valor )
								<td>	
									{{$valor}}
								</td>	
						    @endforeach	 
					    </tr>
					@endforeach
		    	}
		    	@endif
			    }
		@endif
	  </tbody>
	</table>
</div>

@endsection

@section('footer')
    @parent
@show

