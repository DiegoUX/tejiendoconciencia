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
		
	<!-- Blog feed section -->
		<section>
			<div class="feed-blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="feed-title"><?php dynamic_sidebar('blog-title'); ?></h1>
							<i class="main-divider icon-needle"></i>
						</div>

						<?php get_template_part('postblock'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
