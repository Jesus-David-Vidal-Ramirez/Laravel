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
        <h1 class="mb-4">Investigadores</h1>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#ID</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Carrera</th>
                <th scope="col" class="text-center">Semestre</th>
            </tr>
            </thead>
            <tbody>
           
            
                
                    @foreach($obtenerInves as $inves)
                    <tr>    
                        <td class="text-center">{{ $inves->id }}</td>
                        <td class="text-center">{{ $inves->nombre }} {{ $inves->apellido }}</td>
                        <td class="text-center">{{ $inves->carrera }}</td>
                        <td class="text-center">{{ $inves->semestre }}</td> 
                    </tr>    
                   @endforeach
                
            </tr>
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>