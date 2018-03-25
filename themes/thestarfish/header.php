<?php
/**
 * The header for the Starfish theme.
 *
 * @package Starfish_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
				<header id="masthead" class="site-header" role="banner">
					<div class="site-logo">
						<a href="<?php echo get_home_url(home_url( '/' )); ?>">
							<img src="<?php echo get_template_directory_uri() . '/images/logo-white.svg'; ?>" class="logo" alt="Starfish Logo">
						</a>
					</div>
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>					
					</div><!-- .site-branding -->
					<a href="#" id="menu-open">
						<i class="fas fa-bars"></i>
					</a>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="nav-content">
							<a href="#" class="btn-close" id="menu-close">&times;</a>

							<?php $walker = new Description_Walker; ?>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_class'     => 'nav-menu',
										'walker'         => $walker
									)
								);
								?>

							<a class="nav-donate" href="<?php echo esc_url(get_permalink(get_page_by_path( 'donate' ) ) ); ?>" >
							<p>Donate</p>
							<span class="screen-reader-text"><?php echo esc_html( 'Donate' ); ?></span>
							</a>
						</div>
					</nav><!-- #site-navigation -->
				</header><!-- #masthead -->

			<div id="content" class="site-content">
