<?php
get_header();
?>

<?php
	while ( have_posts() ) :
		the_post();
?>
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/content-activity-breadcrumbs' ); ?>
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="container container-content">
		<?php get_template_part( 'template-parts/content-activity-main' ); ?>
	</div><!-- .container -->

	<div class="container-jumbo">
		<div class="container container-content">
			<?php get_template_part( 'template-parts/content-activity-download' ); ?>
		</div><!-- .container -->
	</div><!-- .container-jumbo -->

	<div class="container container-content">
		<?php get_template_part( 'template-parts/content-activity-steps' ); ?>
	</div><!-- .container -->

	<div class="container-jumbo">
		<div class="container container-content">
			<?php get_template_part( 'template-parts/content-activity-tips' ); ?>
		</div><!-- .container -->
	</div><!-- .container-jumbo -->

	<div class="container container-content">
		<?php get_template_part( 'template-parts/content-activity-examples' ); ?>
	</div><!-- .container -->

	<div class="container container-content">
		<?php get_template_part( 'template-parts/content-activity-more-info' ); ?>
	</div><!-- .container -->

	<?php
		if ( comments_open() || get_comments_number() ) :
	?>
		<div class="container container-content">
			<div class="row">
				<div id="comments" class="col-12">
					<?php	comments_template(); ?>
				</div><!-- #comments -->
			</div><!-- .row -->
		</div><!-- .container -->
	<?php
		endif;
	?>
<?php
	endwhile; // End of the loop.
?>

<?php
get_footer();
