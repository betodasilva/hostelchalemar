<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chalemar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chalemar' ); ?></a>
	
	<header id="masthead" class="site-header">
		<div class="hero">
			<?php echo do_shortcode('[simpleslider location="" animation="" slideshowspeed=""]');  ?>
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<ul class="social-networks row">
				<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/chalemarbf/" target="_blank"><i class="fa fa-instagram"></i></a></li>
			</ul>

			<nav id="site-navigation" class="main-nav row">
				<button class="menu-toggle w50" aria-controls="primary-menu" aria-expanded="false">MENU<i class="kube-menu"></i></button>
				<?php
					wp_nav_menu( array(
						'theme_location' 	=> 'menu-1',
						'container_class'	=> 'nav-list-container',
						'menu_id'        	=> 'primary-menu',
						'menu_class'	 	=> 'nav-list row align-middle'
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
