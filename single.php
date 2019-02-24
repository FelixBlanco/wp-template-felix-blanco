<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="ng-gray mt-4">
		<div class="container" style="margin-top: 6%;">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="bg-white shadow ">						
						<?php the_post_thumbnail('post-thumbnails',['class'=>'img-fluid mx-auto d-block'])  ?>		
						<h2 class="mt-2 p-2 font-merienda-one"><?php the_title(); ?> <br>  <small style="font-size: 12px;"><?php the_time( 'd/m/Y' ) ?></small></h2>
						<div class="mt-2 p-2">
							<?php the_content(); ?>								
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end navigation -->

<?php endwhile;  wp_reset_postdata(); else : ?>

<?php endif; ?>

<?php get_footer(); ?>