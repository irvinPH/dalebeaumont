<?php get_header(); ?>

	<div class="container ">
	

				<div id="content" class="content" role="main" itemscope itemprop="mainContentOfPage">
					<?php if ( ! is_front_page() ) : ?>
						<header class="archive__header">
							<h1 class="archive__title ">
								<?php single_post_title(); ?>
							</h1>
						</header>
					<?php endif; ?>
					
					<?php get_template_part( 'partials/loop' ); ?>
				</div>
	</div>
	
<?php get_footer(); ?>