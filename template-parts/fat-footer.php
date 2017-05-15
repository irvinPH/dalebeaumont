<?php
/**
 * Template part for displaying content in footer.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dale_beaumont
 */
?>

<aside class="container  fat-footer" role="complementary">
	<div class="row">
		<div class="col-md-6">
		    <div class="pad-right">
				<div class="footer-logo">	
				   <?php  if(get_theme_mod( 'footer_logo' )) { ?>			
						<img src="<?php echo get_theme_mod( 'footer_logo' ); ?>" width="100%">		
					<?php } ?>			
				</div>
	            <div class="description">
	            	A dynamic and compelling business educator, speaker, entrepreneur and author, Dale Beaumont is a powerhouse of high-value, cutting edge business insights. He has inspired thousands of business owners to play a bigger game and to live a more fulfilling life – through what he teaches and by personal example. An expert in simplifying success, Dale is passionate about helping people to thrive, both personally and in business.
	            </div>
				<?php //dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>

		<div class="col-md-2">
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'     => 'menu  menu--footer'
			) ); ?>
		</div>
		<div class="col-md-4">
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth'          => 1,
				'fallback_cb'    => false,
				// 'link_before'    => '<span class="screen-reader-text">',
				// 'link_after'     => '</span>',
				'menu_class'     => 'menu  menu--social'
			) ); ?>

			<div class="facebook-feed">
			    <?php if(do_shortcode('[custom-facebook-feed]')) { ?>
			    <div class="feed-header">Latest Post on Facebook</div>
				<?php echo do_shortcode('[custom-facebook-feed]') ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php if ( get_theme_mod( 'footer_tagline' ) ) : ?>
		<p class="tagline"><?php echo get_theme_mod( 'footer_tagline' ); ?></p>
	<?php endif; ?>
	<div class="copyright">
		Copyright © <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.

		<?php wp_nav_menu( array(
			'theme_location' => 'fine',
			'depth'          => 1,
			'container'      => false,
			'items_wrap'     => '%3$s',
			'fallback_cb'    => false,
		) ); ?>
	</div>
</aside>