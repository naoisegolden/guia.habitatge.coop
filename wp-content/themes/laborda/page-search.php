<?php
/**
 * Template Name: Search Page
 */

get_header();
?>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area col-8 offset-2">
			<main id="main" class="site-main">
				<header class="page-header mb-4">
					<h1 class="page-title">
						<?php the_title() ?>
					</h1>
					<?php get_search_form(); ?>
				</header><!-- .page-header -->

				<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
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
