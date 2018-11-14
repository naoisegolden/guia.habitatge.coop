<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package laborda
 */

get_header();
?>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area col-8 offset-2">
			<main id="main" class="site-main">

			<header class="page-header">
				<h1 class="page-title">
					<?php echo __( 'Search Results', 'laborda' ) ?>
				</h1>
				<?php get_search_form(); ?>
				<p class="mt-3">
					<?php printf( esc_html__( 'Search Results for "%s"', 'laborda' ), '<span>' . get_search_query() . '</span>' ); ?>
				</p>
			</header><!-- .page-header -->

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<div class="container-jumbo">
	<div class="container container-content">
		<?php get_template_part( 'template-parts/content', 'jumbo-help' ); ?>
	</div><!-- .container -->
</div><!-- .container-jumbo -->

<?php
// get_sidebar();
get_footer();
