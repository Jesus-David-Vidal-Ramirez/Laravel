
@extends('layouts.plantilla')

@section('title', 'Buscardor ID')

@section('menu')
    @parent
@endsection



@section('contenido')

<form method="post" action="{{route('BuscarId')}}" class="my-5 container"> 
	@csrf
<input type="text" name="Buscar" placeholder="Buscar ID" class="w-25 p-2"><br>
<input type="submit" value="Buscar" class="btn btn-danger mt-3 p-2 w-25">
</form>

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
	  	
	  
	  	 <tr>
	  	 	@if($BuscardorId ){
	  	 		@if($BuscarId >1 ){}
				@foreach($BuscarId as $valor )
					<td>	
						{{$valor}}
					</td>	
			    @endforeach	 
			     }
			 }
			 @endif
			     @endif

		    </tr>
	  </tbody>
	</table>
</div>

@endsection

@section('footer')
    @parent
@show

