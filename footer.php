<?php
/**
 * The template for displaying the footer.
 */
?>
		<div class="signup-form signup-form--horizontal">
			<div class="container">
				<?php if ( get_theme_mod( 'signup_form_footer_title' ) ) : ?>
					<h1 class="signup-form__title"><?php echo get_theme_mod( 'signup_form_footer_title' ); ?></h1>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'signup_form_footer_description' ) ) : ?>
					<p><?php echo get_theme_mod( 'signup_form_footer_description' ); ?></p>
				<?php endif; ?>
				<?php echo get_theme_mod( 'signup_form_footer' ); ?>
			</div>
		</div>

		<div class="footer  clearfix" itemscope itemprop="http://schema.org/WPFooter">
			<?php get_template_part( 'partials/fat-footer' ); ?>
		</div>
		
		<?php wp_footer(); ?>

	</div> <!-- /.helper -->
</body>
</html>