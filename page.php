<?php get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
		<!-- section -->
		<section>
			<?php global $post; ?>
			<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
			?>
			<div class="billboard-pages" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center/cover fixed">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="text-content text-center">
								<h1><?php the_title(); ?></h1>
								<h2><?php the_field('subtitulo'); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<br class="clear">

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
				</div>	
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
