<?php 
/* Template Name: Home Template */ 


get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
	
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>
			<!-- <br class="clear"> -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		<section class="counter">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<i class="bag-icon icon-sad"></i>
						<div class="bag-text">Una bolsa plástica demora entre 100 y 1000 años en convertirse en minúsculas partículas de plástico, que nunca desaparecen por completo.</div>
					</div>
					<div class="col-sm-6">
						<h2>HASTA EL MOMENTO<br>HEMOS REUTILIZADO</h2>
						<span class="timer dataplus" data-from="25" data-to="31234" data-speed="2800">+</span>
						<h2>BOLSAS PLÁSTICAS</h2>
					</div>
					<div class="col-sm-3">
						<i class="bag-icon icon-happy"></i>
						<div class="bag-text">Nuestros productos son artesanales, hechos con materiales 100% reutilizados principalmente de bolsas plásticas.</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
