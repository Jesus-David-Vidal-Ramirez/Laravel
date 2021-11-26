@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
</head>
<body>
    

    @section('content')
    
    <div class="container">
      <h1>Proyecto </h1>
        <form class="col-7" action="{{ route('ActualizarProyecto')}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" value="{{ $proyecto->id }}" name='id'/>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Codigo</label>
              <input type="text" name="codigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="P2021"  value="{{ $proyecto->codigo }}">
              @error('codigo') 
                    <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Desarrollo de una aplicacion web" value="{{ $proyecto->titulo }}">
                @error('titulo') 
                    <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <textarea class="form-control" rows="5" name="descripcion" placeholder="Aplicativo web desarrollado en laravel" value="">{{ $proyecto->descripcion }}</textarea>
                @error('descripcion') 
                    <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Objetivo</label>
                <input type="text" name="objetivo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Compras" value="{{ $proyecto->objetivo }}">
                @error('objetivo') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Linea de Investicacion</label>
                <input type="text" name="lineaDeInvestigacion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Experimental" value="{{ $proyecto->lineaDeInvestigacion }}">
                @error('lineaDeInvestigacion') 
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Investigador</label>
                
                <select class="form-control" aria-label="Default select example" name="investigador">
                    <option value="{{ $proyecto->investigador}}">{{ $proyecto->investigador}}</option>
                    @foreach ($investigadores as $item)
                    <option value="{{ $item->nombre }}">{{ $item->nombre}} {{ $item->apellido}}</option>    
                    @endforeach
                    
                  </select>
                  @error('investigador') 
                  <small class="text-danger">{{ $message }}</small>
            @enderror
              </div>
            <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
          </form>
          
       
    </div>
     
    @endsection

</body>
</html>