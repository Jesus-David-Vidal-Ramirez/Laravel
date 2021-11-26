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
        <h1>Investigador </h1>
        <form class="col-7" action="{{ route('crearInvestigador') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jesus David" value="{{ old('nombre') }}">
              @error('nombre') 
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vidal Ramirez" value="{{ old('apellido') }}">
                @error('apellido') 
                  <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Carrera</label>
                <input type="text" name="carrera" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingenieria de sistemas" value="{{ old('carrera') }}">
                @error('carrera') 
                  <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Semestre</label>
                <input type="text" name="semestre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="5" value="{{ old('semestre') }}">
                @error('semestre') 
                  <small class="text-danger">{{ $message }}</small>
              @enderror
              </div>
            <button type="submit" class="btn btn-primary">Crear Investigador</button>
          </form>
       
    </div>
     
    @endsection

</body>
</html>