<div class="col-lg-10 col-lg-offset-1">
	<div class="row">
<div class="col-sm-6">
	<div class="featured-post equalBlog">
		<?php $args = array(
			'category_name' => 'featured',
			'posts_per_page' => 1
        );?>
        
		<?php $my_query = new WP_Query( $args );
		while ( $my_query->have_posts() ) : $my_query->the_post();
		$do_not_duplicate[] = $post->ID; ?>
			<article id="post-<?php the_ID(); ?>" >

				<!-- thumbnail -->
				<div class="thumb-image">
					<?php if ( has_post_thumbnail()) { // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
					</a>
					<?php } else { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img src="http://placehold.it/570X220" alt="Default Image">
						</a>
					<?php } ?>
				</div>
				<!-- /thumbnail  -->
				
				<div class="content-post">
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j · Y'); ?></span>
					<!-- /post details -->
					<span class="small-line"></span>

					<?php html5wp_excerpt('html5wp_custom_post'); // Build your custom callback length in functions.php ?>
				</div>
			</article>
		<?php endwhile; wp_reset_postdata();?>
	</div>
</div>

<div class="col-sm-6">
	<div class="regular-posts equalBlog">
		<?php $args2 = array(
			'posts_per_page' => 3,
			'post__not_in' => $do_not_duplicate
        );?>
		<?php $my_query2 = new WP_Query( $args2 );
		if ($my_query2->have_posts()) :
			while ( $my_query2->have_posts() ) : $my_query2->the_post();?>
				
				<article id="post-<?php the_ID(); ?>" >

					<!-- thumbnail -->
					<div class="thumb-image">
						<?php if ( has_post_thumbnail()) { // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							
						</a>
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="http://placehold.it/120X120" alt="Default Image">
							</a>
						<?php } ?>
					</div>
					<!-- /thumbnail  -->

					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<!-- /post details -->

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
					
					<?php $do_not_duplicate[] = $post->ID; ?>
				</article>
			<?php endwhile;?>
		<?php endif; wp_reset_postdata();?>	
	</div>
</div>
</div>
</div>