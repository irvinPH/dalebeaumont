<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="wrapper">
	<header role="banner" id="top-header">
		<div class="site-header" itemscope itemprop="http://schema.org/WPHeader">
			 <div class="container">
			 	  <div class="row">
			 	  	  <div class="col-xs-8 col-sm-4 col-md-3">
			 	  	    <div class="site-logo">
			 	  	  		<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Logo" class="site-logo" /></a>
			 	  	  	</div>
			 	  	  </div>
			 	  	  <div class="visible-xs visible-sm col-xs-4 col-sm-8">
                                <ul class="mobile-icons">
                                	<li><span id="burger-menu" class="menu-icon fa fa-bars fa-lg"></span></li>
                                	<li><span id="mobile-search" class="fa fa-search fa-lg"></span></li>
                                </ul>	
			 	  	  </div>
			 	  	  <div class="col-xs-12 col-sm-12 col-md-9">
			 	  	  		<nav class="navbar" itemscope itemprop="http://schema.org/SiteNavigationElement">

			 	  	  		    <?php
						            wp_nav_menu( array(
						                'menu'              => 'navbar',
						                'theme_location'    => 'navbar',
						                'depth'             => 2,
						                'container'         => false,
						                'container_class'   => false,
						                'menu_class'        => 'menu',
						                'menu_id'           => 'navbar'
						                )
						            );
						        ?>
			 	  	  	 	</nav>
			 	  	  	 	<div id="sb-search" class="sb-search">
			 	  	  	 		<?php echo get_search_form() ?>
							</div>
			 	  	  </div>
			 	  </div>
			 </div>
		</div>
	</header>