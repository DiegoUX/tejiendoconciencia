<?php get_header(); ?>

	<main role="main" class="layoutBlog">
		<!-- section -->
		<section>
			<div class="billboard-blog">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="text-content text-center">
								<h1 class="blog-title-tr"><?php dynamic_sidebar('blog-title'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
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


<?php get_footer(); ?>
