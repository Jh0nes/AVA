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
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						the_content(); 
					}
				}
			?>
			
			<!-- This BLock becomes a new page -->
			<div class="d-none row bg-info py-4 px-2 my-3 text-center">
				<div class="col-12 col-lg-6">
					<h2 class="heading-font mt-3">Alguns de nossos parceiros</h3>
				</div>
				<div class="col-12 col-lg-6 d-lg-flex">
					<img src="wp-content/themes/ava-consulting/assets/img/samarco-logo.svg" class="img-fluid customer-logo d-block mx-auto mt-4" alt="Samarco">
					<img src="wp-content/themes/ava-consulting/assets/img/vale-logo.svg" class="img-fluid customer-logo  d-block mx-auto mt-4" alt="Business Charts">
					<img src="wp-content/themes/ava-consulting/assets/img/cemig-logo.svg" class="img-fluid customer-logo  d-block mx-auto mt-4" alt="Business Charts">
				</div>
			</div>

			<div id="solucoes" class="row d-none">
				<div class="col-12 col-lg-6">
					<img class="img-fluid" src="wp-content/themes/ava-consulting/assets/img/men-chart.svg" alt="AVA Consulting">
				</div>
				<div class="col-12 col-lg-6 pt-5 pl-5">
					<h4 class="heading-font">Nossas Especialidades</h4>
					<ul id="list-especialidades" class="list-group">
						<li class="list-group-item">Laudo de Valoração <i>(Valuation)</i></li>
						<li class="list-group-item">Fusões e Aquisições <i>(M&A)</i></li>
						<li class="list-group-item">Laudo de Alocação do Preço de Compra / <i>Purchase Price Allocation (PPA)</i></li>
						<li class="list-group-item">Plano de Negócio <i>(Business Plan)</i></li>
						<li class="list-group-item">Analise de Risco <i>(Value at Risk, Cash Flow at Risk)</i></li>
						<li class="list-group-item">Captação de Recursos</li>
						<li class="list-group-item">Planejamento e Gestão</li>
					</ul>
					<!-- <button type="button" class="btn btn-primary mt-3">Saiba Mais</button> -->
				</div>
			</div>

			<div id="expertise" class="d-none row my-5 py-5 bg-dark-gradient">
				<div class="col-12 col-lg-6 p-5">
					<h1 class="heading-font">Expertise</h1>
					<h6>Você pode agendar uma reunião com um de nossos consultores.</h6>
					<img class="svg-icon my-5 img-fluid customer-logo" src="wp-content/themes/ava-consulting/assets/img/calendar-icon.svg" alt="Agendar Reunião - Consultoria Financeira">
					<h1 class="heading-font">Marcar uma reunião</h1>
					<h6>Agende uma reunião com o especialista para conhecer melhor sobre avaliação financeira</h6>
					<button type="button" class="btn btn-primary mt-3">Agendar Agora</button>
				</div>
				<div class="text-center col-lg-6 d-none d-lg-block">
					<img class="shade-right img-fluid" src="wp-content/themes/ava-consulting/assets/img/contract-signing.png" alt="Business Charts">
				</div>
			</div>
			
			<div class="row my-5 py-2 text-center d-none">
				<div class="col-12">
					<h3 class="heading-font">Quer apprender mais sobre gestão empresarial</h3>
					<h6>Acesse nosso blog. lá você vai encontrar conteúdo sobre avaliação financeira.</h6>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<img class="shade-left img-fluid" src="wp-content/themes/ava-consulting/assets/img/blog-post-image.png" alt="Business Charts">
					<h5 class="heading-font pt-3">Titulo da materia do Blog</h5>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<img class="shade-left img-fluid" src="wp-content/themes/ava-consulting/assets/img/blog-post-image.png" alt="Business Charts">
					<h5 class="heading-font pt-3">Titulo da materia do Blog</h5>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<img class="shade-left img-fluid" src="wp-content/themes/ava-consulting/assets/img/blog-post-image.png" alt="Business Charts">
					<h5 class="heading-font pt-3">Titulo da materia do Blog</h5>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<img class="shade-left img-fluid" src="wp-content/themes/ava-consulting/assets/img/blog-post-image.png" alt="Business Charts">
					<h5 class="heading-font pt-3">Titulo da materia do Blog</h5>
				</div>				
			</div>
			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
