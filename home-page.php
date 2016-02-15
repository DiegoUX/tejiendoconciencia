<?php 
/* Template Name: Home Template */ 


get_header(); ?>

	<main role="main">
		<!-- section -->

		<div id="hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="heroContent">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->
							
							<h1 id="site-description">
								<?php bloginfo( 'description' ); ?>
							</h1>

							<a href="<?php site_url(); ?>/quienes-somos/" id="more-site" class="btn btn-default btn-lg">Conocenos</a>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<!-- Services Section -->
		
		<section>
			<div class="preServices">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<h2>A través de la enseánza de un oficio maravilloso acercamos a la gente con la ecología.</h2>
							<h3>Este es un proyecto lleno de creatividad.</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- end Services Section-->

		<i class="divider"></i>
		
		<section>
			<div class="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<i class="serviceIcon coral"></i>
							<h3>Social</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
							<a href="#" class="btn btn-default">Ver Mas &rang;</a>
						</div>
						<div class="col-sm-3">
							<i class="serviceIcon red"></i>
							<h3>Servicios</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
							<a href="#" class="btn btn-default">Ver Mas &rang;</a>
						</div>
						<div class="col-sm-3">
							<i class="serviceIcon brick"></i>
							<h3>Investigación</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
							<a href="#" class="btn btn-default">Ver Mas &rang;</a>
						</div>
						<div class="col-sm-3">
							<i class="serviceIcon darkGreen"></i>
							<h3>Productos</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
							<a href="#" class="btn btn-default">Ver Mas &rang;</a>
						</div>
					</div>
				</div>
			</div>	
		</section>


		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

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

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
