<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ava-consulting
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row">
				<div class="col-6 py-5">
					<h2>Consultoria empresarial com resultados reais</h2>
					<h5>Fornecemos uma sinergia exclusiva de ferramentas de gerenciamento de risco financeiro para capacitar sua tomada de decisão nesses tempos difíceis.</h5>
					<button type="button" class="btn btn-primary mt-3">Entre em contato</button>
				</div>
			</div>
			<div class="row bg-info py-3">
				<div class="col-5">
					<h2>Alguns de nossos parceiros</h2>
				</div>
			</div>
			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
