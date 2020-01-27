<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ava-consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'ava-consulting' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="language-bar container-fluid">
			<div class="row justify-content-end bg-secondary">
				<div class="col-1">
					<a href="/blog">Blog</a>
				</div>
				<div class="col-2">
					Idioma: Portugues
				</div>
			</div>
		</div>
		<div class="site-branding container">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<!--h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1-->
				<?php
			else :
				?>
				<!--p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p-->
				<?php
			endif;
			// $ava_consulting_description = get_bloginfo( 'description', 'display' );
			if ( $ava_consulting_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ava_consulting_description; /* WPCS: xss ok. */ ?></p>
			<?php 
				endif; 
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!--button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ava-consulting' ); ?></button-->
			<?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id'        => 'primary-menu',
			// ) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
