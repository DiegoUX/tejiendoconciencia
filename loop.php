<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j · Y'); ?> | </span>
		<span class="category"><?php the_category( ', ' ); ?></span>
		<!-- /post details -->


		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->



		<?php html5wp_excerpt('html5wp_custom_post'); // Build your custom callback length in functions.php ?>


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
