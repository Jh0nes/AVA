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
			<div class="row pt-md-3">
				<div class="col-6">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-6">
					<nav id="site-navigation" class="navbar main-navigation navbar-expand-lg my-2 my-md-0 mr-md-3">
						<a class="p-2 text-dark" href="#">Assessoria Financeira</a>
						<a class="p-2 text-dark" href="#">Soluções</a>
						<a class="p-2 text-dark" href="#">Expertise</a>
						<a class="p-2 text-dark" href="#">Contato</a>
      				</nav>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
