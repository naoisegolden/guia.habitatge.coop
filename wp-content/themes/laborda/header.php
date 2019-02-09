<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laborda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'laborda' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<div class="navbar-brand">
							<?php
							if ( has_custom_logo() ) :
								the_custom_logo();
							elseif ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif; ?>
						</div><!-- .navbar-brand -->
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigationToggler" aria-controls="mainNavigationToggler" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse main-navigation" id="mainNavigationToggler">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-header',
								'menu_id' => 'primary-menu',
								'menu_class' => 'navbar-nav'
							) );
							?>
							<a class="search-button d-none d-lg-block " href="<?php echo get_permalink( get_page_by_path( 'search' ) ) ?>">
								<i class="icon icon-search"></i>
							</a>
					    <form class="input-group search-form d-lg-none" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					      <input type="text" class="form-control" id="search" aria-label="Search" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder', 'laborda' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					      <div class="input-group-append">
					        <button type="submit" class="btn btn-primary"><?php echo _x( 'Search', 'submit button', 'laborda' ); ?></button>
					      </div>
					    </form>
					  </div>
					</nav>

				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
