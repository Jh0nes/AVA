<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ava-consulting
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer my-5">

		<div class="site-branding container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<?php the_custom_logo(); ?>
				</div>
				
				<?php dynamic_sidebar( 'sidebar-1' ); ?>

			</div>
		</div>
		<!-- <div class="site-info"> -->
			<!-- <a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'ava-consulting' ) ); ?>"> -->
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'ava-consulting' ), 'WordPress' );
				?>
			<!-- </a> -->
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'ava-consulting' ), 'ava-consulting', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		<!--/div--><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
