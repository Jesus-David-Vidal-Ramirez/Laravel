<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> @yield('title', 'Netflix') </title>
	<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles y Script -->
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <link rel="stylesheet" href="{{ asset('Css/estilos.css') }}" />
        
</head>
<body>
	
	@section('menu')
	<nav class="menu navbar navbar-expand-lg navbar-dark bg-dark ">
	  <div class="container-fluid ">
	    <a class="navbar-brand" href="/">
	    	<img src="{{ asset('Imagenes/Logo-Netflix.png') }}"  alt="Icono de netflix" width="50" height="44"> 
	    </a>
	   </div>
	    <div class="collapse navbar-collapse w-75  " id="navbarSupportedContent">

	      <ul class="navbar-nav me-auto mb-lg-0  ">
	        
	        <li class="nav-item me-3 ">
	          <a class="nav-link " aria-current="page" href="index">Home</a>
	        </li>

	        <li class="nav-item me-3">
	          <a class="nav-link text-center" href="Listado">Listar Peliculas</a>
	        </li>

	        <li class="nav-item me-3">
	          <a class="nav-link" href="BuscarId">Buscar Por ID</a>
	        </li>

	         <li class="nav-item me-3">
	          <a class="nav-link" href="ListarCategorias">Listar Categorias</a>
	        </li>
	         
	         <li class="nav-item me-2 ">
	          <a class="nav-link " href="BuscarFecha">Buscar Por Años</a>
	        </li>
	       

	         <li class="nav-item me-3">
	          <a class="nav-link " href="Estrenos">Estreno 2021</a>
	        </li>

	      </ul>
	    
	  </div>
	</nav>
	

	<section class="mt-5">
		<h1 class="text-center text-light fs-1 fw-bold">Películas y series ilimitadas y mucho más.</h1>
		<h3 class="text-center text-light fs-2 fw-bold">Disfruta donde quieras. Cancela cuando quieras.</h3>
		<h5 class="text-center text-light fs-3 fw-bold">¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o reiniciar tu membresía de Netflix </h5>
	</section>


@yield('contenido')


@section('Footer')
	<footer class="footer d-flex justify-content-center">
		<p class="text-light">¿Preguntas? Llama al 01 800 917 1564</p>
	</footer>


</body>
</html>