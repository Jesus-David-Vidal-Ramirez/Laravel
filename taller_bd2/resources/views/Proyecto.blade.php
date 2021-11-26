@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    @section('content')
  
    @endsection


    @section('proyecto')
    <div class="container">        
        <h1 class="mb-4">Proyectos </h1>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#ID</th>
                <th scope="col" class="text-center" >Codigo</th>
                <th scope="col" class="text-center" >Titulo</th>
                <th scope="col" class="text-center" >Descripcion</th>
                <th scope="col" class="text-center" >Objetivo</th>
                <th scope="col" class="text-center" >Linea De Investigacion</th>
                <th scope="col" class="text-center" >Investigador</th>
                <th scope="col" class="text-center" >Editar</th>
                <th scope="col" class="text-center" >Eliminar</th>
                
                
            </tr>
            </thead>
            <tbody>
            
                
                    @foreach($obtenerProyecto as $inves)
                    <tr>    
                        <td class="text-center" >{{ $inves->id }}</td>
                        <td class="text-center">{{ $inves->codigo }} </td>
                        <td class="text-center">{{ $inves->titulo }}</td>
                        <td class="text-center">{{ $inves->descripcion }}</td> 
                        <td class="text-center">{{ $inves->objetivo }}</td> 
                        <td class="text-center">{{ $inves->lineaDeInvestigacion }}</td> 
                        <td class="text-center">{{ $inves->investigador }}</td> 
                        <td class="text-center"> <a href="Editar/{{$inves->id}}/edit" class="text-success nav-link"> Editar</a></td> 
                        <td class="text-center"> <a href="Eliminar/{{$inves->id}}" class="text-danger nav-link"> Eliminar</a></td> 
                    </tr>    
                   @endforeach

                   
                
            </tr>
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>
