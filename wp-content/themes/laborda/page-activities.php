<?php
/*
Template Name: Activities List Page
*/

$categories = get_terms( array( 'taxonomy' => 'category', 'hide_empty' => true, ) );
$phases = get_terms( array( 'taxonomy' => 'phase', 'hide_empty' => true, 'orderby' => 'slug', ) );

get_header();
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-9">
      <div class="btn-group mr-2 mb-2">
        <button type="button" class="btn btn-default btn-filter dropdown-toggle" data-toggle="dropdown">
					<?php echo __( 'Filter by category', 'laborda' ); ?>
				</button>
				<ul class="dropdown-menu dropdown-filter-js">
				  <li>
						<a href="#" class="dropdown-item" data-value="reset" tabIndex="-1">
							<?php echo __( 'Reset', 'laborda' ); ?>
						</a>
					</li>
					<div class="dropdown-divider"></div>
					<?php foreach( $categories as $category ) : ?>
						<li>
							<a href="#" class="dropdown-item <?=$category->slug?>" data-value="<?=$category->slug?>"  tabIndex="-1">
								<input type="checkbox" class="mr-1">
								<?php echo $category->name ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div><!-- .btn-group -->

			<div class="btn-group mr-2 mb-2">
        <button type="button" class="btn btn-default btn-filter dropdown-toggle" data-toggle="dropdown">
					<?php echo __( 'Filter by phase', 'laborda' ); ?>
				</button>
				<ul class="dropdown-menu dropdown-filter-js">
				  <li>
						<a href="#" class="dropdown-item" data-value="reset" tabIndex="-1">
							<?php echo __( 'Reset', 'laborda' ); ?>
						</a>
					</li>
					<div class="dropdown-divider"></div>
					<?php foreach( $phases as $phase ) : ?>
						<li>
							<a href="#" class="dropdown-item" data-value="<?=$phase->slug?>"  tabIndex="-1">
								<input type="checkbox" class="mr-1">
								<?php echo $phase->name ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
  		</div><!-- .btn-group -->

			<div class="btn-group mr-2 mb-2">
        <button type="button" class="btn btn-default btn-filter dropdown-toggle" data-toggle="dropdown">
					<?php echo __( 'Order', 'laborda' ); ?>
				</button>
				<ul class="dropdown-menu dropdown-sort-js">
          <li>
            <a href="#" class="dropdown-item" data-value="phase" tabIndex="-1">
              <?php echo __( 'By phase', 'laborda' ); ?>
            </a>
          </li>
          <li>
            <a href="#" class="dropdown-item" data-value="category" tabIndex="-1">
              <?php echo __( 'By category', 'laborda' ); ?>
            </a>
          </li>
				  <li>
						<a href="#" class="dropdown-item" data-value="views" tabIndex="-1">
							<?php echo __( 'Most seen', 'laborda' ); ?>
						</a>
					</li>
				  <li>
						<a href="#" class="dropdown-item" data-value="title" tabIndex="-1">
							<?php echo __( 'Alphabetically', 'laborda' ); ?>
						</a>
					</li>
				</ul>
  		</div><!-- .btn-group -->
    </div>

    <div class="col-3">
			<div class="btn-group float-right">
				<button type="button" class="btn btn-default btn-round-icon btn-toggle toggle-body-js" data-toggle-value="activities-list-view"  data-toggle="button">
					<i class="icon-cards">apps</i>
					<i class="icon-list">list</i>
				</button>
			</div>
		</div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col">
			<main id="main" class="site-main">
				<div class="activity-cards row js-cards">
					<?php
						foreach( $phases as $phase ) :
              $args = array(
                'post_type' => 'activity',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'phase',
                    'field' => 'slug',
                    'terms' => $phase->slug,
                  ),
                ),
              );
							$loop = new WP_Query( $args );
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
get_footer();
