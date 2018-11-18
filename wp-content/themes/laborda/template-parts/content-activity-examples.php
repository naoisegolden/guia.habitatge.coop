<div class="row">
  <div class="col">
    <h2><?php echo __("Exemples de la comunitat", "laborda"); ?></h2>

    <div id="examples-accordion" class="mb-4">
      <?php
      if( have_rows('examples') ):
        $index = 0;
        while ( have_rows('examples') ) : the_row();
          $index++;
        ?>
          <div class="card mb-2">
            <div class="card-header" id="heading-<?=$index?>">
              <h5 class="mb-0">
                <i class="material-icons icon align-middle">arrow_drop_down</i>
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?=$index?>" aria-expanded="true" aria-controls="collapse-<?=$index?>">
                  <?php echo the_sub_field('example_title'); ?>
                </button>
              </h5>
            </div>

            <div id="collapse-<?=$index?>" class="collapse hide" aria-labelledby="heading-<?=$index?>" data-parent="#examples-accordion">
              <div class="card-body">
                <?php echo the_sub_field('example_body'); ?>
              </div>
            </div>
          </div><!-- .card -->
        <?php
        endwhile;
      endif;
      ?>
    </div><!-- #examples-accordion -->
    <div class="card">
      <div class="card-body card-body-examples">
        <h5 class="card-title"><?php echo __('Suma el teu exemple!', 'laborda'); ?></h5>
        <p class="card-text mb-0"><?php echo __('Ets una comunitat i has dut a terme aquesta activitat? Envia’ns l’exemple del resultat a <a href="mailto:guia@habitatge.coop">guia@habitatge.coop</a> i ho  afegirem a la llista', 'laborda') ?></p>
      </div>
    </div>
  </div>
</div><!-- .row -->
