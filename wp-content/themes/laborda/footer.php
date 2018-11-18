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
					<div class="row">
						<div class="col">
							<p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<?php dynamic_sidebar( 'footer_left' ); ?>
						</div>
					</div>
				</div>
				<div class="col">
					<?php dynamic_sidebar( 'footer_right' ); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
