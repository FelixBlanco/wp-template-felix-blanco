<?php
/*
Template Name: Acerca de Mi
*/
?>
<?php get_header() ?>

<div class="container title" style="margin-top: 8%;">

	<div class="row justify-content-center">
		<div class="col-8 offset-1">

			<!-- ACERCA DE MI -->
			<div>
				<div class="row">
					<div class="col-4">
						<img src="<?php bloginfo('template_url') ?>/img/perfil.jpg" class="rounded img-fluid mx-auto d-block mt-5">
					</div>
					<div class="col-8">
						<h2 class="text-center p-2 font-merienda-one">Acerca de mi <span class="lnr lnr-smile pes"></span></h2>
						<p class="text-justify">
							Hola!, Soy Felix Blanco, naci hace 25 anos en Venezuela - Monagas. <br>  <br>
							Me dedico profecionalmente desde el 2012 aproximadamente, optando por el titulo de Full-Stack Develloper Web en tecnologias como Laravel, Angular, Ionic, NodejS y entres otras mas.
						</p>							
					</div>
				</div>					
			</div>
			
			<!--  FORMACION -->
			<div class="mt-5">
				<h4 class="text-center p-3 font-merienda-one">FORMACION</h4>
				<p class="p-4" style="font-size: 18px;">
					Me gradue de <i>Licenciado en Informática</i> en la  Universidad Bolivariana de Venezuela (UBV-Monagas),  el AÑO 2017.
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
						<h2 class="text-center font-merienda-one"><span class="lnr lnr-briefcase"></span> PROYECTOS</h2>		
						<hr class="text-center" style="width: 50%">																
					</div>
				</div>
			</div>	

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/deposito-central.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2">Deposito Central </h4>
					<small>Desde el Septiembre 2018 - Hasta Febrero 2019</small>
					<p class="text-justify">Desarrollo de </p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/teraima.png" class="img-fluid d-block mx-auto mt-3">
				</div>
				<div class="col-8">
					<h5 class="p-2">Teraima, Como: Desarrollador Web</h4>
					<small>Desde Agosto 2017 - Diciembre 2018</small>
					<p class="text-justify">Desarrollando en Wordpress y dando diferente mantenimiento a las aplicaciones web en Laravel.</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/jimenez-puertas.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2"> Jimenez Puerta, Como: Desarrollador Web </h4>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Como pasante desarrolle una aplicación web basada en Laravel, Bootstrap y Mysql. Destinada para las Escuelas de la jurisdicción de PDVSA ..</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/farmagroup.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2">Farmagroup, ​ Como: ​ Desarrollador y Mantenimiento</h4>
					<small>Agisto 2017 - Hasta Febrero 2018</small>
					<p class="text-justify">Desarrollo y mantenimiento de nuevos modulos de su sistema de Gestion y Administracion de Farmacos</p>						
				</div>
			</div>	

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/pdvsa.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2"> PDVSA, Como: Pasante </h4>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Como pasante desarrolle una aplicación web basada en Laravel, Bootstrap y Mysql. Destinada para las Escuelas de la jurisdicción de PDVSA ..</p>						
				</div>
			</div>

			<div class="row mt-2 shadow">
				<div class="col-4">
					<img src="<?php bloginfo('template_url') ?>/img/proyectos/EMJGNR.png" class="img-fluid d-block mx-auto mt-4">
				</div>
				<div class="col-8">
					<h5 class="p-2"> E.M.J.G.N.R. : Desarrollador Web </h5>
					<small>Desde el 2016 - 2017</small>
					<p class="text-justify">Como pasante desarrolle una aplicación web basada en Laravel, Bootstrap y Mysql. Destinada para las Escuelas de la jurisdicción de PDVSA ..</p>						
				</div>
			</div>															
		</div>	
	</div>
</div>

<?php get_footer() ?>