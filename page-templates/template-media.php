<?php
/**
 *  Custom Grid Page for (Media Articles)
 *
 *  Template Name: Media Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DB
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             <section class="module module__banner" style="background: url('http://dalebeaumont.com/wp-content/uploads/2015/01/Dale-Beaumont-Event.jpg') -120px 0px no-repeat; ">
                   <div class="container">
                         <h1><?php the_title(); ?></h1>
                   </div>
             </section>     
             <section id="" class="module">
                  <div class="container">
                         <div class="heading">
                               <p class="text-center"><?php the_content(); ?></p>
                         </div>
                         <?php
                         	query_posts(array(
                            'post_type'      => 'media_articles',
                            'paged'          => $paged,
							'posts_per_page' => 28,
                            'order'          => 'ASC',
				    		'orderby'        => 'menu_order',
                            'post_status'    => 'publish',
                            'post_parent'    => 0,  
                            ));
                         ?>
                         <div class="row">
                         	 <?php if (have_posts()) : ?>
                             	<?php while (have_posts()) : the_post(); ?>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <h3><a href="<?php the_field('media_link'); ?>" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new"><?php the_field('media_source'); ?></a></h3>

                                            <div class="image">
                                            	 <a href="<?php the_field('media_link'); ?>" rel="bookmark" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new">
										                            <?php $image = wp_get_attachment_image_src(get_field('media_image'), 'full'); ?>
										                                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('media_image')) ?>" /> 
										                              </a>
                                            </div>
                                           <p>
                                               <a href="<?php the_field('media_link'); ?>" rel="bookmark" title="Dale has been featured in <?php the_field('media_source'); ?> " target="new">Click here</a> 
                                                <?php if( get_field('media-type') ) { ?>
                                									to <?php the_field('media-type'); ?>.
                                								<?php	} else  { ?>
                                									to read.
                                								<?php	} ?>
                                          </p>
                                      </div>
                                </div>
                           		<?php endwhile; ?>       
                         </div>
                         <?php endif; ?>  
                         <?php wp_reset_query();?>
                          <div class="btn-block">
                                <a href="" class="btn">Load More</a>
                          </div>
                  </div> 
             </section>
            
          

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();