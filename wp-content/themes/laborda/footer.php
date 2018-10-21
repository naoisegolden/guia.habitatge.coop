<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laborda
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="site-info">
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Website by %1$s', 'laborda' ), '<a href="https://holon.cat/">HOLON</a>' );
						?>
					</div><!-- .site-info -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
