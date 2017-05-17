<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( get_field( 'slideshow') ) : ?>
			<?php $slideshow = get_field( 'slideshow' ); ?>
			<div class="slideshow">
				<div class="">
					<?php nivo_slider( $slideshow->ID ); ?>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>

	<div class="container  content-sidebar">
		<div class="grid">
			<div class="grid__column  grid__column--l-8  grid__column--content">
				<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'partials/content', 'page' ); ?>
						
						<?php comments_template(); ?>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="grid__column  grid__column--l-4  grid__column--sidebar">
				<aside class="sidebar" role="complementary" itemscope itemprop="http://schema.org/WPSideBar">
					<?php dynamic_sidebar( 'sidebar' ); ?>
				</aside>
			</div>
		</div>

		<?php echo adrotate_group(2); ?>
	</div>
	
<?php get_footer(); ?>