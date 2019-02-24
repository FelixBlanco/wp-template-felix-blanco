<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Felix Blanco | Full Stack Developer Web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	
</head>
<body>
	
	<!-- Encabezado -->
	<section>
		<div class="container-fluid">
			<div class="row img-no-repeat landing-bg" style="background-image: url( <?php echo get_stylesheet_directory_uri(). '/img/circuit_3840x1200.jpg'; ?>);">
				<!-- img circuitos -->
			</div>			
		</div>
		<div class="container mt-4">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<img src='<?php echo get_stylesheet_directory_uri()."/img/perfil.jpg"; ?>' alt="foto de perfil de felix blanco" class="rounded-circle img-fluid mx-auto d-block" id='img-perfil'>
					<h1 class="text-center mt-3 animated infinite pulse delay-2s">Felix Blanco</h1>
					<p class="text-center">Full-Stack Develloper</p>
					<hr>

					<ul class="nav justify-content-center" id="nav-menu">
						<li class="nav-item">
							<a href="http://localhost/wordpress/index.php/post/" class="nav-link font-merienda-one">Post</a>
						</li>
<!-- 						<li class="nav-item">
							<a href="#" class="nav-link font-merienda-one">Proyectos</a>
						</li> -->
						<li class="nav-item">
							<a href="http://localhost/wordpress/index.php/acerca-de-mi/" class="nav-link font-merienda-one">Acerda de mi</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>