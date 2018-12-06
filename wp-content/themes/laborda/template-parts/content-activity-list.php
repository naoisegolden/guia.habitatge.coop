<?php
$categories = get_the_category();
$phases = get_the_terms( get_the_ID(), 'phase' );
$groups = [$categories[0]->slug];
if ( $phases[0] ) $groups[] = $phases[0]->slug;
$classes = 'activity-card activity-card__' . $categories[0]->slug;
$view_count = function_exists('pvc_get_post_views') ? pvc_get_post_views() : 0;
$hide_page = get_field( 'hide_activity_page' );
?>

<div class="col-6 col-md-4 col-lg-3 js-card"
	data-groups="<?php echo esc_html(json_encode($groups)) ?>"
	data-category="<?php echo empty($categories) ? 0 : $categories[0]->slug ?>"
	data-phase="<?php echo empty($phases) ? 0 : $phases[0]->slug ?>"
	data-title="<?php the_title() ?>"
	data-views="<?php echo $view_count; ?>"
>
	<article id="activity-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
		<?php if ( $hide_page ) : ?>
			<div class="activity-card__body">
		<?php else : ?>
			<a class="activity-card__body" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<?php endif; ?>
			<?php the_title( '<h2>', '</h2>' ); ?>
			<p><?php echo get_the_excerpt(); ?></p>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'laborda' ),
				'after'  => '</div>',
			) );
			?>
		<?php if ( $hide_page ) : ?>
			</div>
		<?php else : ?>
			</a>
		<?php endif; ?>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
