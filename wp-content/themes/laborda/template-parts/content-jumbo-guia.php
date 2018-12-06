<?php
$image = get_field( 'jumbo_thumbnail' );
?>

<div class="row">
  <div class="col-4 offset-1">
    <img class="jumbo-help__thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
  </div>
  <div class="col-5 offset-1">
    <h4 class="jumbo-help__title"><?php the_field( 'jumbo_title' ) ?></h4>
    <a class="btn btn-primary mt-2" href="<?php the_field( 'jumbo_button_link' ) ?>" role="button">
      <?php the_field( 'jumbo_button_text' ); ?>
    </a>
  </div>
</div>
