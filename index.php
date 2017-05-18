<?php get_header(); ?>

	<div class="container">
		<div class="grid">
			<div class="grid__column  grid__column--l-8  grid__column--content">
				<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
					<?php get_template_part( 'partials/loop' ); ?>
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