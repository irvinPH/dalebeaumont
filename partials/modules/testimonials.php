<section id="testimonials" class="module">
	<div class="container">
	<?php if ( $testimonials = get_sub_field( 'testimonials' ) ) : wp_enqueue_script( 'slick'); $slick_id = uniqid(); ?>
		 	 <div class="testimonial">
			 <?php foreach ( $testimonials as $post ) : setup_postdata( $post ); ?>
		 	 	  <div class="row">
		 	 	  		<div class="col-md-3">
		 	 	  		 	
					 	 	  <div class="testimonial__image">
					 	 	  	<?php if(has_post_thumbnail()) {  the_post_thumbnail('testimonial-thumb'); 
									} else {
										echo '<img src="'.get_bloginfo("template_url").'/images/testimonial-default.jpg"  />';
									}
								?> 
					 	 	  </div>
					 	 	
					 	</div>
					 	<div class="col-md-9"> 	  
					 	 	  <div class="testimonial__quote">
					 	 	  	  <p><?php the_content(); ?></p>
					 	 	  </div>
							  <cite class="testimonial__attribution">
										<span class="testimonial__name"><?php the_title(); ?></span>
										<span class="testimonial__subtitle"><?php the_sub_field( 'subtitle' ); ?></span>
							  </cite>
			 	 	  </div>
		 	 	  </div>
			 <?php endforeach; wp_reset_postdata(); ?>
		 	 </div>
	<?php endif; ?>
	</div>
</section>