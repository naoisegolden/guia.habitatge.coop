<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package laborda
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div id="primary" class="content-area col">
			<main id="main" class="site-main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'laborda' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'laborda' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->


<div class="container-jumbo">
	<div class="container container-content">
		<?php get_template_part( 'template-parts/content', 'jumbo-help' ); ?>
	</div><!-- .container -->
</div><!-- .container-jumbo -->

<?php
get_footer();
