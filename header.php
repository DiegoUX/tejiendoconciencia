<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="/wp-content/themes/tejiendoconciencia/assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
  		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,700' rel='stylesheet' type='text/css'>

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">
			
			<!-- <div class="container"> -->
				<nav id="site-navigation" class="navbar navbar-fixed-top" role="navigation">
	
					<!-- <h3 class="sr-only"><?php _e( 'Main menu', 'html5blank' ); ?></h3>
					<a class="sr-only" href="#primary" title="<?php esc_attr_e( 'Skip to content', 'html5blank' ); ?>"><?php _e( 'Skip to content', 'html5blank' ); ?></a> -->

					<div class="small-logo hidden-large">
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<img src="/wp-content/themes/tejiendoconciencia/images/small-logo.png" alt="TejiendoConCiencia Logo">
						</a>
					</div>
					

					<div class="navbar-header-custom">
						<button type="button" class="navbar-toggle-custom" data-toggle="collapse" data-target=".navbar-mobile">
					        <span class="ico-bar"></span>
					        <span class="ico-bar"></span>
					        <span class="ico-bar"></span>
					    </button>
					</div>
					
					<div class="top-header">
						<div class="container-fluid fluid-custom">
							<?php dynamic_sidebar('top-social'); ?>
						</div>
					</div>

					<div class="collapse navbar-mobile">
						<!--<?php html5blank_nav(); ?>-->
						<div class="container-fluid fluid-custom">
							<div class="row">
								<div class="col-md-2 hidden-mobile">
									<!-- Small Logo -->
									<div class="small-logo">
										<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
											<img src="/wp-content/themes/tejiendoconciencia/images/small-logo.png" alt="TejiendoConCiencia Logo">
										</a>
									</div>
								</div>
								<div class="col-md-8">
									<?php
									$menu_class = ( is_rtl() ) ? ' navbar-right' : '';
									wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'nav navbar-nav' . $menu_class, 'fallback_cb' => 'false' ) );
									?>
								</div>
								<div class="col-md-2">
									<div class="switcher">
										<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</nav><!-- #site-navigation -->
				
		</header>
		<!-- /header -->
