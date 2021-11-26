<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
</head>
<body>
    <div id="app" class="app ">
        {{-- Menú --}}
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm container mt-3 mb-2">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img src="{{ asset('Imagenes/logo.png')}} " alt="{{asset('Imagenes/logo.png') }}" >  --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                        <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @if(Route::has('login'))
                        
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Favoritos') }}">{{ __('Favoritos') }}</a>
                        </li>

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <form class="form-inline my-2 my-lg-0" action="/Busqueda" method="POST">
                                
                                @csrf
                                <input class="form-control mr-sm-2" name="busqueda" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
                              </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Carrusel como Header --}}
        <header >
            <section class="container pt-3 mb-2 pb-3 bg-light" >
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.laguiadelvaron.com/wp-content/uploads/2019/07/portadas-pel%C3%ADculas-iguales-www.laguiadelvaron-15.jpg" class="d-block w-100" alt="imagen 2" style="height: 500px;">
                    
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.mundopeliculas.tv/wp-content/uploads/2021/05/rapidos-y-furiosos-9.jpg" class="d-block w-100 " alt="imagen 3" style="height: 500px;  ">
                    </div>
                    <div class="carousel-item">
                      <img src="https://blogdesuperheroes.es/wp-content/plugins/BdSGallery/BdSGaleria/83980.jpg" class="d-block w-100 " alt="imagen 1" style="height: 500px;">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </button>
                </div>
               </section>
          </header>    
          
          {{-- Contenido Principal --}}
          <main>
              @yield('content')
          </main>
          
          {{-- Paginacion --}}
          <section class="container d-flex justify-content-center">
                @yield('Paginacion')
          </section>    


          {{-- Footer --}}
          <footer class="container d-flex justify-content-center pt-5 pb-5 mb-1" style="background-color: white;">
            <a  class="nav-link" data-dismiss="modal"   data-toggle="modal" data-target="#exampleModal"> Desarrollador Jesus Vidal &copy;2021 </a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: #9a72f2;
          background-image: linear-gradient(0deg, #9a72f2 0%, #B5FFFC 100%);
          ">
            <div class="modal-dialog modal-lg bg-dark">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">Desarrollado por:</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body bg-dark">
                 <h3 class="text-right text-light">Jesus David Vidal Ramirez</h3>
                 <picture class="rounded d-flex justify-content-center p-3">
                   <img src={{ asset('Imagenes/JesusVidal.png')}} class="img-fluid rounded-circle w-25 h-25" >
                 </picture>
                 <h4 class="text-uppercase text-light">Ingeniero de sistema</h4>
                </div>
                <div class="modal-footer justify-content-between ">
                  <div>
                   <strong> Correo:</strong> <a href="mailto:Ramirez_vidal@outlook.com" class="nav-link"> Ramirez_vidal@outlook.com</a> 
                  </div>
                  <div>
                   <strong>GitHub:</strong><a href="https://github.com/Jesus-David-Vidal-Ramirez" target="_black" class="nav-link"> Jesus Vidal</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
            </footer> 
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
