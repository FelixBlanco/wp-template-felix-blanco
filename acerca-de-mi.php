<?php
/*
Template Name: Acerca de Mi
*/
?>
<?php get_header() ?>

<?php $edad=0; for ($i=1994; $i < date('Y') ; $i++) {  $edad = $edad + 1; } ?>

<div class="container title" style="margin-top: 8%;">

	<div class="row justify-content-center">
		<div class="col-md-8 offset-md-1">

			<!-- ACERCA DE MI -->
			<div>
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<img src="<?php bloginfo('template_url') ?>/img/perfil.jpg" class="rounded img-fluid mx-auto d-block mt-5">
					</div>
					<div class="col-sm-12 col-md-8">
						<h2 class="text-center p-2 font-merienda-one">Acerca de mi <span class="lnr lnr-smile pes"></span></h2>
						<p class="text-justify">
							¡Hola!, Soy Félix Blanco, nací hace <?php echo $edad; ?> años en Venezuela – Monagas. <br>  <br>
							Me dedico profesionalmente desde el 2012 aproximadamente a el desarrollo de aplicaciones
							con PHP, actualmente me gusta el título de full-stack develloper web, dado que trabajo mucho
							con tecnologías como <a href="https://laravel.com/" target="_blank">Laravel</a>, <a href="https://angular.io/" target="_blank">Angular</a>, <a href="https://ionicframework.com/" target="_blank">Ionic</a>,<a href="https://expressjs.com/es/" target="_blank"> Nodejs-Express</a>, <a href="https://www.mysql.com/" target="_blank">Mysql</a>, entre otras.</p>							
					</div>
				</div>					
			</div>
			
			<!--  FORMACION -->
			<div class="mt-5">
				<h4 class="text-center p-3 font-merienda-one">FORMACION</h4>
				<p class="p-4" style="font-size: 18px;">
					Soy Licenciado en Informática en la Universidad Bolivariana de Venezuela (UBV Sede-Monagas) el 2017.
				</p>
			</div>
	
			<!-- CURSOS  -->
			<div class="mt-5">
				<h4 class="text-center p-3 font-merienda-one">Cursos & Participacion</h4>
			
				<div class="shadow p-3">
					<h5><b>#</b> CNTI, Ciudad: ​ Maturín</h5>
					<p> <i>( Desde May Hasta Sep - 2017 ) </i> <br>   Soporte Técnico Básico en Canaima GNU/LINUX – Duración 24 Horas Realizado 05 al 09 </p>
				</div>

				<div class='shadow p-3' style="margin-top: 5%">
					<h5><b>#</b> FUNDACITE - PHP, Ciudad: Maturín</h5>
					<p> <i>(AÑO 2014) </i> <br>  Curso de PHP en 40 horas de curso </p>
				</div>					

				<div class='shadow p-3' style="margin-top:5%">
					<h5><b>#</b> Organizador de la III Jornadas de Exposiciones</h5>
					<p> <i>( 27, 28 y 29 Noviembre 2013 ) </i> <br>   Organizador de la III Jornadas de Exposiciones para el uso de las “T.I.L”.</p>
				</div>
				
				<div class='shadow p-3' style="margin-top:5%">
					<h5><b>#</b> Participación en I Jornadas de Exposiciones</h5>
					<p> <i>( 06, 07 Octubre 2011 ) </i> <br> Participación en I Jornadas de Exposiciones para el uso de las “T.I.L” – 16 Horas</p>
				</div>			
						 
				<div class='shadow p-3' style="margin-top:5%">
					<h5><b>#</b> Colaboración en III Jornadas de Exposiciones</h5>
					<p> <i>( 27, 28 y 29 Noviembre 2013 ) </i> <br>  <div>Colaboración en III Jornadas de Exposiciones para el uso de las “T.I.L”</p>
				</div>			

			</div>		

			<!-- CONOCIMIENTOS -->
			<div class="mt-5">
				<h4 class="text-center p-3 font-merienda-one">CONOCIMIENTOS & HABILIDADES</h4>
				<p><b>General:</b> HTML5, CSS3, JSON, GIT</p>				
				<p><b>Lenguajes: </b> Javascript, PHP, Bash, Ruby</p>
				<p><b>Frontend: </b> Angular 4>, Vuejs, Jquery, Boostrap, Bulma</p>
				<p><b>Backend: </b> Laravel, NodeJs, Ruby on Rails </p>
				<p><b>Movil:</b> Ionic 3-4 </p>
				<p><b>Data Base: </b> Mysql, Sqlite</p>
				<p><b>Otros conocimientos: </b>Wordpress, Github, Bitbuket, Gitlab, Comandos console (GNu/Linux), Os Gnu/Linux, WorkBench Mysql</p>
				<p><b> Metodologias & Herramientas: </b> Metodologia Scrum, Metodologia Cascada, Trello, Slack</p>
			</div>		
			<!-- PROYECTOS -->
			<div class="row mt-5">
				<div class="col-12">
					<div class="p-3">
						<h2 class="text-center font-merienda-one"><span class="lnr lnr-briefcase"></span> EXPERIENCIA LABORAL</h2>		
						<hr class="text-center" style="width: 50%">																
					</div>
				</div>
			</div>	

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/deposito-central.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2">Deposito Central </h4>
					<small>Desde el Septiembre 2018 - Hasta Febrero 2019</small>
					<p class="text-justify">Desarrollo de una plataforma web de ecommerce para la venta de artículos y comida de
						animales, contando con 2 área (Administrativa/Publica) dado que el sistema se auto gestiona,
						participe en el proyecto usando Laravel y Angular combinado con Github.</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/teraima.png" class="img-fluid d-block mx-auto mt-3">
				</div>
				<div class="col-md-8">
					<h5 class="p-2">Teraima, Como: Desarrollador Web</h4>
					<small>Desde Agosto 2017 - Diciembre 2018</small>
					<p class="text-justify">Desarrollé y di mantenimiento a diferentes aplicaciones de la empresa utilizando wordpress y Laravel con Jquery en muchos casos.</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/jimenez-puertas.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-md-8">
					<h5 class="p-2"> Jimenez Puerta, Como: Desarrollador Web </h4>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Desarrollamos una web en la cual la firma de abogados muestra sus servicios, este trabajo fue realizado con Laboratorio B3 en la parte creativa y diseño y posteriormente con mi persona usando Bootstrap, Css3 y Jquery para mucho de los efectos.</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/farmagroup.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-md-8">
					<h5 class="p-2">Farmagroup, ​ Como: ​ Desarrollador y Mantenimiento</h4>
					<small>Agosto 2017 - Hasta Febrero 2018</small>
					<p class="text-justify">Desarrollo y mantenimientos de su sistema de fármacos, que permitía la gestión y la administración de servicios, desarrolle módulos para optimizar mucho mas la parte administrativa del mismo.</p>						
				</div>
			</div>	

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/pdvsa.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-md-8">
					<h5 class="p-2"> PDVSA, Como: Pasante </h4>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Fui pasante en el área de AIT con el fin de optar mi titulo de Licenciado en informática, desarrollando un proyecto piloto para las escuelas de PDVSA, que comenzaría por la Escuela Libertador Bolívar y posteriormente se iba a expandir para toda la zona que cubre PDVSA – Esem, en el desarrollo aplicamos Laravel, Mysql y Bootstrap con Jquery.</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/EMJGNR.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-md-8">
					<h5 class="p-2"> E.M.J.G.N.R. : Desarrollador Web </h5>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Una plataforma web que permitía que mas de 900 estudiantes se inscribieran en la institución, corroboraban la información de interés y de igual forma que muchos efectuaban su preinscripción con la inscripción de la misma. Dicha aplicación fue desarrollada en Laravel con Boostrap, liberando asi la carga administrativa del personal y logrando optimizar las respuestas a los usuarios.</p>						
				</div>
			</div>															
		</div>	
	</div>
</div>

<?php get_footer() ?>