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
			 	  	  		<a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Logo" class="site-logo" /></a>
			 	  	  	</div>
			 	  	  </div>
			 	  	  <div class="visible-xs visible-sm col-xs-4 col-sm-8">
                                <ul class="mobile-icons">
                                	<li>
                                		<a href="" class="menu-icon fa fa-bars fa-lg">
										</a>
                                	</li>
                                	<li>
                                		<a href=""><span class="fa fa-search fa-lg"></span></a> 
                                	</li>
                                </ul>	
			 	  	  </div>
			 	  	  <div class="col-xs-12 col-sm-12 col-md-9">
			 	  	  		<nav class="navbar" itemscope itemprop="http://schema.org/SiteNavigationElement">
					 	  	  	 <ul id="navbar" class="navbar__menu clearfix">
					 	  	  	 	<li><a href="">About</a>
					 	  	  	 		<ul class="sub-menu">
					 	  	  	 			<li><a href="">About Us</a></li>
					 	  	  	 			<li><a href="">Why Us</a></li>
					 	  	  	 			<li><a href="">Store</a></li>
					 	  	  	 			<li><a href="">Charity</a></li>
					 	  	  	 		</ul>
					 	  	  	 	</li>
					 	  	  	 	<li><a href="">Business</a>
					 	  	  	 		<ul class="sub-menu">
					 	  	  	 			<li><a href="">Business Blueprint</a></li>
					 	  	  	 			<li><a href="">52 Ways Workshop</a></li>
					 	  	  	 			<li><a href="">BRiN: Business Advisor</a></li>
					 	  	  	 		</ul>
					 	  	  	 	</li>
					 	  	  	 	<li><a href="">Speaking</a>
					 	  	  	 		<ul class="sub-menu">
					 	  	  	 			<li><a href="">Business Keynotes</a></li>
					 	  	  	 			<li><a href="">Technology Keynotes</a></li>
					 	  	  	 			<li><a href="">Success Keynotes</a></li>
					 	  	  	 			<li><a href="">Live Streaming</a></li>
					 	  	  	 			<li><a href="">Podcast Guest</a></li>
					 	  	  	 			<li><a href="">Speaking Testimonials</a></li>
					 	  	  	 			<li><a href="">Booking Request</a></li>
					 	  	  	 		</ul>
					 	  	  	 	</li>
					 	  	  	 	<li><a href="">Media</a></li>
					 	  	  	 	<li><a href="">Photos</a></li>
					 	  	  	 	<li><a href="">Books</a></li>
					 	  	  	 	<li><a href="">Blog</a></li>
					 	  	  	 	<li><a href="">More</a>
					 	  	  	 		<ul class="sub-menu">
					 	  	  	 			<li><a href="">Charity Bike Rides</a></li>
					 	  	  	 			<li><a href="">Videos to Share</a></li>
					 	  	  	 			<li><a href="">Tomorrows Youth</a></li>
					 	  	  	 		</ul>
					 	  	  	 	</li>
					 	  	  	 	<li><a href="">Contact</a></li>
					 	  	  	 </ul>
			 	  	  	 	</nav>
			 	  	  	 	<div id="sb-search" class="sb-search hidden-xs hidden-sm">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search fa fa-search"></span>
								</form>
							</div>
			 	  	  </div>
			 	  </div>
			 </div>
		</div>
	</header>