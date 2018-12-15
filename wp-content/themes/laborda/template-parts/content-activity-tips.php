<div class="row">
  <div class="col">
    <h2><?php echo __('Tips and Tricks', 'laborda'); ?></h2>
    <div class="card-columns tip-cards">
      <?php
      if( have_rows('tips') ):
        while ( have_rows('tips') ) : the_row();
        ?>
          <div class="card card-borderless">
            <div class="card-body">
              <h4 class="card-title"><?php echo the_sub_field('tip_title'); ?></h4>
              <div class="card-text">
                <?php echo the_sub_field('tip_body'); ?>
              </div>
            </div>
          </div>
        <?php
        endwhile;
      endif;
      ?>
    </div><!-- .card-columns -->
  </div>
</div><!-- .row -->
