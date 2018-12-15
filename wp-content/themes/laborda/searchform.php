<div class="row">
  <div class="col-12">
    <form class="input-group search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="text" class="form-control" id="search" aria-label="Search" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder', 'laborda' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary"><?php echo _x( 'Search', 'submit button', 'laborda' ); ?></button>
      </div>
    </form>
  </div>
</div>
