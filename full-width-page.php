<?php
/**
 * The full width template
 *
 *  Template Name: Full Width Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DB
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
				 

					get_template_part( 'template-parts/content', 'page' );
				endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();