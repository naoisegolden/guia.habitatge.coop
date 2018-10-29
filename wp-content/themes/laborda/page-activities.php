<?php
/*
Template Name: Activities List Page
*/

get_header();
?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col">
			<main id="main" class="site-main">
				<div class="activity-cards row js-cards">
					<?php
						$categories = get_terms( array( 'taxonomy' => 'category', 'hide_empty' => true, ) );
						foreach( $categories as $category ) :
							$loop = new WP_Query( array( 'post_type' => 'activity', 'cat' => $category->term_id ) );
							while ( $loop->have_posts() ) :

								$loop->the_post();
								get_template_part( 'template-parts/content-activity-list' );

							endwhile;
						endforeach;
						the_posts_navigation();
					?>
				</div><!-- .activity-cards -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php
// get_sidebar();
get_footer();
