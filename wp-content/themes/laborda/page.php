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
 * @package laborda
 */

get_header();
?>
<?php if ( get_field( 'show' ) ) : ?>
	<div class="jumbotron jumbotron-fluid" style="background-image: url(<?php the_field( 'image' ); ?>)">
	  <div class="container" style="color: <?php the_field( 'color' ); ?>">
	    <h1 class="display-4"><?php the_field( 'title' ); ?></h1>
	    <p class="lead"><?php the_field( 'subtitle' ); ?></p>
	  </div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

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

<?php if ( get_field( 'jumbo_show' ) ) : ?>
	<div class="container-jumbo">
		<div class="container container-content">
			<?php get_template_part( 'template-parts/content', 'jumbo-guia' ); ?>
		</div><!-- .container -->
	</div><!-- .container-jumbo -->
<?php endif; ?>

<?php
get_footer();
