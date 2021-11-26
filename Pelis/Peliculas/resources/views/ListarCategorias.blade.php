
@extends('layouts.plantilla')

@section('title', 'Categorias')

@section('menu')
    @parent
@show

@section('contenido')


<div class="container mt-5 mb-5 text-center d-flex justify-content-center">
	<table class="table table-hover table-light w-50">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">CATEGORIA</th>
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

