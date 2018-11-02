<?php
$view_count = '231';
$download_count = '87';
?>
<div class="row">
  <div class="col-auto mr-auto mb-4">
    <a href="#" class="social-button"></a>
    <a href="#" class="social-button"></a>
  </div>
  <div class="col-auto mb-4">
    <div class="download-statistics mr-2 mt-2">
      <i class="material-icons icon mr-1">visibility</i>
      <span><?php echo $view_count; ?></span>
    </div>
    <div class="download-statistics mr-4 mt-2">
      <i class="material-icons icon mr-1">save_alt</i>
      <span><?php echo $download_count; ?></span>
    </div>
    <a class="btn btn-primary" href="<?php echo the_field( 'downloadable' ); ?>" download role="button">
      <?php echo __( 'Descarrega', 'laborda' ); ?>
    </a>
  </div>
</div>
<div class="row mb-5">
  <div class="col">
    <?php
    $images = get_field( 'gallery' );
    $size = 'full';
    if( $images ): ?>
      <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php for( $i = 0; $i < sizeof($images); $i++ ): ?>
            <li data-target="#galleryCarousel" data-slide-to="<?=$i?>" class="<?php if ( $i == 0 ) : echo 'active'; endif; ?>"></li>
          <?php endfor; ?>
        </ol>
        <div class="carousel-inner">
          <?php
          foreach( $images as $i=>$image ):
          ?>
            <div class="carousel-item <?php if ( $i == 1 ) : echo 'active'; endif; ?>">
              <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </div>
          <?php endforeach; ?>
        </div><!-- .carousel-inner -->
        <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"><?php echo __('Previous', 'laborda'); ?></span>
        </a>
        <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"><?php echo __('Next', 'laborda'); ?></span>
        </a>
      </div><!-- #galleryCarousel -->
    <?php endif; ?>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <h3><?php echo __( 'Activitats relacionades', 'laborda' ); ?></h3>
    <?php the_field( 'related_activities' ); ?>
  </div>
  <div class="col-4">
    <h3><?php echo __( 'Espai', 'laborda' ); ?></h3>
    <?php the_field( 'space' ); ?>
  </div>
</div><!-- .row -->