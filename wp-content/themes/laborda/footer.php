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

	<?php if ( is_active_sidebar( 'footer_extra_top' ) ) : ?>
		<div class="extra-footer-top">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php dynamic_sidebar( 'footer_extra_top' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				</div>
			</div>
			<div class="row text-center text-md-left">
				<div class="col-12 col-md-8">
					<?php dynamic_sidebar( 'footer_left' ); ?>
				</div>
				<div class="col-12 col-md-4 text-center text-md-right mt-5 mt-md-auto">
					<?php dynamic_sidebar( 'footer_right' ); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
	<?php if ( is_active_sidebar( 'footer_extra_bottom' ) ) : ?>
		<div class="extra-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php dynamic_sidebar( 'footer_extra_bottom' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
