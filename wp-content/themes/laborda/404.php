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
		<div id="primary" class="content-area col-12 col-md-8 offset-md-2">
			<main id="main" class="site-main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'laborda' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content mb-5">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'laborda' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
