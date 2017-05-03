<?php 
/* Template Name: Products Page Template */ 

get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<?php remove_filter ('acf_the_content', 'wpautop'); ?>

	<main role="main">
		<!-- section -->
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>					
					
					<!-- content -->
					<?php the_content(); ?>
					<!-- end content -->

					<!-- gallery -->
					<div class="product-gallery">
						<div class="container">
							<div class="row">
								<?php the_field('galeria_de_productos'); ?>
							</div>
						</div>	
					</div>
					<!-- end gallery -->
					<!-- Kit y video -->
					<?php the_field('kit_mas_video'); ?>
					<!-- en kit y video -->
				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>
				
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
