<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
	<link rel="icon" href="{{ asset('Imagenes/A-64.png') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
</head>
<body >
	<br>
	<a href="/" class="regresar "><i class="far fa-reply fa-3x "></i></a>
	<h1 class="title">El Perfil Profesional </h1>

<div class="container"  data-aos="fade-right" data-aos-duration="1000">
	<section class="cabecero ">	
			<div class="informacion">	
					<h2>Ingeniero de sistemas</h2>
					<h2>Jesus David</h2>
					<h2>Vidal Ramirez</h2>
					<h2>Sincelejo, Sucre, Colombia</h2>
					<strong>3015977587</strong><br>
					<strong>Ramirez_Vidal@outlook.com</strong><br>
					<span> GitHub:</span><a href="https://github.com/Jesus-David-Vidal-Ramirez">https://github.com/Jesus-David-Vidal-Ramirez</a>
			</div>

			<div class="imagen"  data-aos="fade-left" data-aos-duration="1000"	> 
					<img src="/Imagenes/zoro.jpeg" > 
			</div>
	</section>


	<section class="motivacion" data-aos="fade-right" data-aos-duration="1000">	
			<p>	
				Estudiante de Ingeniero de sistema enfocado en los distintos lenguajes de programacion y metodologías
				de desarrollo, actualmente he venido implentando estos lenguajes como JAVA, PHP, HTML, CSS, JavaScript, Angular. 
				Con conocimientos en el lenguaje estructural de consulta (SQL) manejo de metodologias de como lo son Scrum y XP.<br>
				Motivado hacia la actualización y el aprendizaje continuo.
			</p>
	</section>


	<div class="sesiones"  >
		
		<a href="/Formacion"  data-aos="zoom-out-left" data-aos-duration="2000"	>
			<section>
				Formacion Academica
			</section>
		</a>
		

		<a href="/Experiencia" data-aos="flip-up" data-aos-duration="2000">
			<section   >
				Experiencia Laboral
			</section>
		</a>
		
		
		<a href="/Referencias" data-aos="flip-right" data-aos-duration="2000">
			<section  >
				Referencias Familiares
			</section>
		</a> 

	</div>

</div>

<script src="{{ asset('Js/Script.js') }}"></script>
	
</body>
</html>
