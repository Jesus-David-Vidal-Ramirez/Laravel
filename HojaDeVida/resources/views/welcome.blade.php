<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
        
        <link rel="icon" href="{{ asset('Imagenes/A-64.png') }}">
       
    </head>
    <body>
        <h1 class="title container">Hojas De Vida</h1>    
        <div class="container text-dark" >
            <section class="bloques row align-items-center justify-content-around  ">

                @for ($i =1; $i < 13; $i++)
                  <div class="col-md-2 mt-5 mx-4  Perfil" >
                  
                    <br><a href="{{ url('/PerfilProfesional') }}" >
                    <div class="text-center mb-5 mx-1">
                         Perfil del alumno {{ $i }}
                    </div>
                       
                 @if($i % 2 == 0)
                    
                        <i class="fas fa-user-friends fa-lg text-danger d-flex justify-content-center "></i>    
                    
                    @else
                           <i class="fas fa-user-friends fa-lg text-success d-flex justify-content-center" ></i>    
                    @endif

                    </a>
                    <hr>

                  </div>
                @endfor


            </section>

            
    </body>
</html>
