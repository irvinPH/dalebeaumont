<?php
/*
Template Name: Full-width Template
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( get_field( 'slideshow') ) : ?>
			<?php $slideshow = get_field( 'slideshow' ); ?>
			<div class="slideshow">
				<div class="">
					<?php nivo_slider( $slideshow->ID ); ?>
				</div>
			</div>
		<?php else: ?>	

             <section class="module module__banner" style="background: url('http://dalebeaumont.com/wp-content/uploads/2015/01/Dale-Beaumont-Event.jpg') -120px 0px no-repeat; min-height: 250px; ">
                   <div class="container">
 
                   </div>
             </section> 
		<?php endif; ?>
	<?php endwhile; ?>

	<div class="container">
		<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', 'page' ); ?>
				
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>