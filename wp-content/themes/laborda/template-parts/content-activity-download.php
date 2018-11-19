<?php
$view_count = function_exists('pvc_get_post_views') ? pvc_get_post_views() : 0;
$first_attachment_id = function_exists('da_get_download_attachments') ? key(da_get_download_attachments()) : 0;
$download_link = function_exists('da_get_download_attachment_url') ? da_get_download_attachment_url( $first_attachment_id ) : '#';
$download_count = function_exists('da_get_attachment_downloads') ? da_get_attachment_downloads( $first_attachment_id ) : 0;
?>
<div class="row">
  <div class="col-auto mr-auto mb-4">
    <a href="#" class="social-button mt-4"></a>
    <a href="#" class="social-button mt-4"></a>
  </div>
  <div class="col-auto mb-4">
    <div class="download-statistics mr-4 mt-4">
      <i class="material-icons icon mr-1">visibility</i>
      <span><?php echo $view_count; ?></span>
    </div>
    <div class="download-statistics mr-5 mt-4">
      <i class="material-icons icon mr-1">save_alt</i>
      <span><?php echo $download_count; ?></span>
    </div>
    <a class="btn btn-primary download-button" href="<?php echo $download_link; ?>" download role="button">
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
    <h3 class="text-left"><?php echo __( 'Activitats relacionades', 'laborda' ); ?></h3>
    <?php the_field( 'related_activities' ); ?>
  </div>
  <div class="col-4">
    <h3 class="text-left"><?php echo __( 'Espai', 'laborda' ); ?></h3>
    <?php the_field( 'space' ); ?>
  </div>
</div><!-- .row -->
