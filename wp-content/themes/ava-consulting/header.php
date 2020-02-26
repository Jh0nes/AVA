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
				<div class="col-2">
					Idioma: Portugues
				</div>
			</div>
		</div>
		<div class="site-branding container">
			<div class="row pt-md-3">
				<div class="container-fluid">
					<nav id="site-navigation" class="navbar navbar-expand-lg my-2 my-md-0 mr-md-3 navbar-light">
						<a class="navbar-brand" href="#">
							<?php the_custom_logo(); ?>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarToggler">			
						<?php  wp_nav_menu(
								array(
									'menu' 				=> 'Top Menu',
									'theme_location'    => 'primary',
									'container'         => false,
									'menu_class'        => 'nav navbar-nav mt-2 mt-lg-0',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker()
								)); 
						?>
						</div>
      				</nav>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
