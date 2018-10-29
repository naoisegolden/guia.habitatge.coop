<?php
get_header();
?>

<?php
$category = get_the_category()[0];
?>
<div class="container">
	<div class="row">
		<div class="col">
			<ul class="breadcrumbs">
				<li class="breadcrumbs__crumb"><?php echo __('Activities', 'laborda'); ?></li>
				<li class="breadcrumbs__crumb"><?php echo $category->name; ?></li>
				<li class="breadcrumbs__crumb"><?php the_title(); ?></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div id="primary" class="content-area col">
			<main id="main" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-activity', get_post_type() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php
// get_sidebar();
get_footer();
