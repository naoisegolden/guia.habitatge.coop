<div class="row">
  <div class="col-4 offset-1">
    <img class="jumbo-help__thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/help-thumbnail.jpg" alt="thumbnail">
  </div>
  <div class="col-5 offset-1">
    <h4 class="jumbo-help__title"><?php echo __( 'No trobes el que busques? Prova', 'laborda' ) ?></h4>
    <a class="btn btn-primary mt-2" href="<?php echo get_permalink( get_page_by_path( 'help' ) ) ?>" role="button">
      <?php echo __( 'Per on començar', 'laborda' ); ?>
    </a>
  </div>
</div>
