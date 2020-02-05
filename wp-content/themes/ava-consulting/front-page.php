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
				<div class="col-6">
					<div class="shade bg-info"></div>
					<img class="shaded" src="wp-content/themes/ava-consulting/assets/img/raw/business-charts-data-document.png" class="img-fluid" alt="Business Charts">
				</div>
			</div>
			<div class="row bg-info py-4 px-2 my-3">
				<div class="col-6 d-flex align-items-center justify-content-center">
					<h3>Alguns de nossos parceiros</h3>
				</div>
				<div class="col-6 d-flex align-items-center justify-content-between">
					<img src="wp-content/themes/ava-consulting/assets/img/raw/samarco-logo.svg" class="img-fluid customer-logo" alt="Samarco">
					<img src="wp-content/themes/ava-consulting/assets/img/raw/vale-logo.svg" class="img-fluid customer-logo" alt="Business Charts">
					<img src="wp-content/themes/ava-consulting/assets/img/raw/cemig-logo.svg" class="img-fluid customer-logo" alt="Business Charts">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<img src="wp-content/themes/ava-consulting/assets/img/raw/men-chart.svg" class="img-fluid" alt="AVA Consulting">
				</div>
				<div class="col-6 pt-5 pl-5">
					<h6>Encontre a solução ideal para o seu negócio</h6>
					<h4>Nossas Especialidades</h4>
					<ul id="list-especialidades" class="list-group">
						<li class="list-group-item">Laudo de Valorização (Valuation)</li>
						<li class="list-group-item">1.2 Fusões e Aquisições (M&A)</li>
						<li class="list-group-item">Alocação do Preço de Compra - Laudo PPA (Purchase Price Allocation)</li>
						<li class="list-group-item">Plano de Negócio (Business Plan)</li>
						<li class="list-group-item">Modelagem de Risco Econômico-Financeiro</li>
						<li class="list-group-item">Captação de Recursos</li>
						<li class="list-group-item">Planejamento e Gestão</li>
					</ul>
					<button type="button" class="btn btn-primary mt-3">Saiba Mais</button>
				</div>
			</div>
			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
