<?php $color = get_sub_field( 'bg_color' ) ? 'style="background-color: #' . get_sub_field( 'bg_color' ) . ';"' : ''; ?>
<section id="video" class="module" <?php echo $color; ?>>
  <div class="container">
  	  <h2 class="module__heading animated"><?php the_sub_field( 'heading' ); ?> </h2>
  	  <p class="module__subheading"><?php the_sub_field( 'sub_heading' ); ?> </p>
   </div>
   <div class="module__player">
		<img src="<?php echo bloginfo('template_url') ?>/assets/img/video.png" alt="media logo" width="100%" class="media-logos animated"/>
   </div>
</section>