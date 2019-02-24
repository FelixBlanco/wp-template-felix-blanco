<?php 
/*
	Template Name: all-post
*/
 ?>
<?php get_header(); ?>
<div class="bg-gray" style="padding-bottom: 4%;">
	<section class="secciones-t-b">
		
		<h2 class="p-5 font-merienda-one txt-azul-claro">/POST</h2>

		<div class="container-fluid">
			<div class="row">
				<?php query_posts( 'posts_per_page=10' );  ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4 mb-4">
						<article class="cont-post shadow">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('post-thumbnails',['class'=>'img-fluid mx-auto d-block'])  ?>		
								<div class="contenido">
									<!-- <span>TECH</span> -->
									<h2 class="text-justify"><?php the_title() ?></h2>
									<span><?php the_time( 'd/m/Y' ) ?></span>
								</div>	
							</a>					
						</article>
					</div>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
				<?php endif; ?>		
			</div>	
		</div>
	</section>	
</div>
	
<?php get_footer() ?>