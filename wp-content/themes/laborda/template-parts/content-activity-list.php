<?php
$categories = get_the_category();
$phases = get_the_terms( get_the_ID(), 'phase'	 );
$groups = [$categories[0]->slug];
if ( $phases[0] ) $groups[] = $phases[0]->slug;
$classes = 'activity-card activity-card__' . $categories[0]->slug;
?>

<div class="col-3 js-card"
	data-groups="<?php echo esc_html(json_encode($groups)) ?>"
	data-date="<?php the_date('Y-m-d') ?>"
	data-title="<?php the_title() ?>"
>
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
