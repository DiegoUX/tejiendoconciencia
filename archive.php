<?php get_header(); ?>

	<main role="main" class="layoutBlog">
		<!-- section -->
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
					<div class="col-md-10 col-md-offset-1">
						<div class="back-to">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">&laquo; Blog</a>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 col-md-offset-1">

						<?php
							the_archive_title( '<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><h4 class="subTitle">', '</h4>' );
						?>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
					
					<div class="col-md-3">
						<?php get_template_part('sidebar'); ?>
					</div>
					
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
