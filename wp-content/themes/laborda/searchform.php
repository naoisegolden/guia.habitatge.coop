<form class="form-inline search-form row" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group col-9">
  	<label for="search">
  		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'laborda' ); ?></span>
  	</label>
  	<input type="search" class="form-control" id="search" placeholder="<?php echo esc_attr_x( 'Search…', 'laborda' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </div><!-- .form-group -->
  <button type="submit" class="btn btn-primary col-3"><?php echo _x( 'Search', 'laborda' ); ?></button>
</form>
