<?php
$categories = get_the_category();
$classes = 'activity-card activity-card__' . $categories[0]->slug;
?>
<div class="col-3 js-card">
	<article id="activity-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
		<a class="activity-card__body" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php the_title( '<h2>', '</h2>' ); ?>
			<p><?php echo get_the_excerpt(); ?></p>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'laborda' ),
				'after'  => '</div>',
			) );
			?>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
