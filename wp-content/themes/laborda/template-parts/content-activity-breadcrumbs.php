<?php
$category = get_the_category()[0];
$phase = get_the_terms( get_the_ID(), 'phase' )[0];
?>
<div id="breadcrumbs" class="col">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__crumb"><?php echo __('Activities', 'laborda'); ?></li>
    <li class="breadcrumbs__crumb"><?php echo $category->name; ?></li>
    <?php if ( $phase ) : ?>
      <li class="breadcrumbs__crumb"><?php echo $phase->name; ?></li>
    <?php endif; ?>
    <li class="breadcrumbs__crumb"><?php the_title(); ?></li>
  </ul>
</div>
