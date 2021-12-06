<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,
                Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol
                ,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
                a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}
                video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;
                background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;
                background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200
                {--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
                .border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}
                .items-center{align-items:center}.justify-center{justify-content:center}.font-semibold
                {font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}
                .text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}
                .mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}
                .py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}
                .shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,
                var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
                .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
                .w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}
                .sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}
                @media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}
                .dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased my-5">
        <!-- Example single danger button -->

    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
                
            </div>
        @endif

    </div> -->
        <div class="relative flex items-top justify-center m-5 bg-gray-100 dark:bg-gray-900 sm:items-center">
         @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
                
            </div>
        @endif
         </div>  

        <div class="container" >
            <!-- Barra de busqueda -->
            <section class="mb-4">
                
                <div class="input-group ">
                     <button class="input-group-text">Buscar</button>
                     <form action="{{ route('busqueda') }}" method="POST">
                         @csrf
                        
                            <input type="text" name="usuario" class="form-control " value="{{ old('usuario')}}">
                     </form>

                     <div class="mt-1 ms-1" >
                      <a href="/" class="btn btn-primary"  >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                        </svg>
                      <a>  
                    </div>
                </div>

                    @error('usuario') 
                     <small class="text-danger">{{ $message }}</small>
                     @enderror
            </section>

            <!-- MAIN -->
                <main class="table-responsive mt-4 dotacion">
            <!--Boton Añadir Usuario -->
           
                    <button type="submit" class="btn btn-success "  data-bs-toggle="modal" data-bs-target="#exampleAñadir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg> 
                    </button>


            <!-- DROPDOWN SE TIENE POR FALTA DE COMPATIBILIDAD psdt: Si se borra deja de funcionar el dropdown-->
            <div class="btn-group d-none">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
            </div>


            <!-- Tabla de Usuarios -->
                    <table class="table table-hover text-center">
                        <thead>
                            <th>#</th>
                            <th>Identificacion</th>
                            <th>Camisa</th>
                            <th>Pantalon</th>
                            <th>Botas</th>
                            <th>Entregado</th>
                            <th>Acciones</th>
                        </thead>
                        
                        @foreach ($usuarios as $usuario )
                        <tr>
                            <td>{{ $usuario->id }}  </td>
                            <td>{{ $usuario->Identificacion }}  </td>
                            <td>{{ $usuario->Camisa }}  </td>
                            <td>{{ $usuario->Pantalon }}  </td>
                            <td>{{ $usuario->Botas }}  </td>
                            <td>{{ $usuario->created_at }}  </td>
                            <td> <input type="button" class="btn btn-primary w-50 mx-4" value="Editar"></td>
                            
                           
                        </tr>
                        @endforeach
                    </table>
                 
                </main>
                <a class="btn btn-danger" href="{{ 'export/'}}"> Descargar </a>
                
                <!-- DROPDOWN -->
                <section class="container d-flex justify-content-sm-end" >
                    <div class="btn-group ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtrar Por Año
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="overflow-y:auto; max-height:100vh">
                          @foreach ($fechas as $fecha )
                            <a class="dropdown-item text-center" href="{{ 'busquedaAnual/'.$fecha }}">
                            {{  $fecha }}
                            @endforeach
                           
                            </a>
                            <a class="dropdown-item text-center" href="{{ ('busqueda')}}">RUta oculta </a>
                        </div>
                    </div>
                </section>
                    
                
                <!-- Modal Añadir-->
                <div class="modal fade" id="exampleAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir Dotacion User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="POST" action="{{route('crearDotacion') }}">

                    <div class="modal-body d-flex flex-wrap justify-content-md-around">
                        
                    
                            @csrf
                        <div class="col-md-5 m-2">
                            <label for="Identificacion" class="form-label">Identificacion</label>
                            <input type="number" class="form-control" name="Identificacion" id="Identificacion" placeholder="1102883773">
                        </div>
                        <div class="col-md-5 m-2">
                            <label for="Camisa" class="form-label">Camisa</label><br>
                            <select name="Camisa" class="custom-select" id="inputGroupSelect01">
                                <option selected>Seleccione Una Opcion</option>
                                <option value="Entregado" >Entregado</option>
                                <option value="No Entregado" >No Entregado</option>
                                
                            </select>
                        </div>
                    
                        <!-- <div class="col-md-3 m-2 input-group" >
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Seleccione</option>
                            <option value="1">Entregado</option>
                            <option value="2">No Entregado</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                        </div> -->
                        
                        <div class="col-md-5 m-2">
                            <label for="Pantalon" class="form-label">Pantalon</label>
                            <input type="Text" class="form-control" name="Pantalon" id="Pantalon" placeholder="Entregado">
                        </div>
                        <div class="col-md-5 m-2">
                            <label for="Botas" class="form-label">Botas</label>
                            <input type="text" class="form-control" id="Botas" name="Botas" placeholder="Botas talla 38">
                        </div>
                        <div class="col-md-5 m-2">
                            <label for="FechaDeEntrega" class="form-label">Fecha de la entrega</label>
                            <input type="email" class="form-control" id="Fecha" name="Fecha" readonly value=" {{ $ldate = date('Y-m-d H:i:s'); }}">
                        </div>
                    
                 
                    </div>
                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                    </form>
                    </div>

                    <p class="text-center"> &copy;  Gralco S.A</p>  

                </div>
            
            </div>
               <!--Fin Modal Añadir--> 
        </div>
       <!-- Fin Contenerdor -->
       



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <!-- Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
