<?php get_header('landing'); ?>

<?php 
	// Que solo muestre 3 Post
	query_posts( 'posts_per_page=4' ) 
?>

<!-- LOOP - POST -->

	<!-- POST -->
	<section class="secciones-t-b" style="background-color: #0B132B; padding:4% 0 4% 0;">
		<div class="container-fluid">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4">
						<article class="bg-write">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_stylesheet_directory_uri().'/img/1200x628.png'; ?>" class="img-fluid" alt="">
								<div class="contenido">
									<span>TECH</span>
									<h2 class="text-justify"><?php the_title(); ?></h2>
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

<?php get_footer(); ?>