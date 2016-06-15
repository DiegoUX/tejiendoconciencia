<?php get_header(); ?>

	<main role="main">
		section
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		/section
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<!-- <?php get_header(); ?>

	<main role="main" class="landingBlog">
		section
		<section>
			<div class="billboard-blog">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="text-content text-center">
								<h1><?php _e( 'Tejiendo un Blog', 'html5blank' ); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1">
						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
					
					<div class="col-md-4">
						<?php get_template_part('sidebar'); ?>
					</div>
					
				</div>
			</div>



		</section>
		/section
	</main>


<?php get_footer(); ?>
 -->
