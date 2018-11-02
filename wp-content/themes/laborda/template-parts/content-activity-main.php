<div class="row">
	<div id="primary" class="content-area col">
		<main id="main" class="site-main">
			<article id="activity-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php laborda_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'laborda' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'laborda' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php laborda_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
