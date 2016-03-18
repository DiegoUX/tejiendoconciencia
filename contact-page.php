<?php /* Template Name: Contact Page */ get_header(); ?>

	<main role="main" class="contact">
		<!-- section -->
		<section>

			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="text-center">
							<h1><?php the_title(); ?></h1>
							<h2><?php the_field('subtitulo'); ?></h2>
							<i class="main-divider icon-needle"></i>
						</div>
					</div>
				</div>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="row">
						<!-- article -->
						<article>
					
							<?php the_content(); ?>

							<br class="clear">

						</article>
						<!-- /article -->
					</div>
				</div>
				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
