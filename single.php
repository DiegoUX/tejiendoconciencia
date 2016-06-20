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

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- post title -->
						<h1 class="post-title">
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->

								<!-- post details -->
								<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
								<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
								<!-- /post details -->
						<!-- post details -->
						<div class="date-content">
							<span class="date"><?php the_time('F j · Y'); ?> | </span>
							<span class="category"><?php the_category( ', ' ); ?></span>
						</div>
						<!-- /post details -->

						<?php the_content(); // Dynamic Content ?>

						<!-- <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->


					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
