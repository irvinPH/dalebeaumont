<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DB
 */
?>
	<section id="next-step" class="top-footer module">
		<div class="container">
			 <h2 class="module__heading">Next Steps</h2>
			 <div class="row">
			 	  <div class="col-md-6 col-sm-6 col-xs-6">
			 	      <a href="#">
				 	  	  <div class="module__image animated step-1">
				 	  	  	  <img src="<?php echo bloginfo('template_url') ?>/assets/img/52WAYS.png" />
				 	  	  </div>
			 	  	  </a>
			 	  </div>
			 	  <div class="col-md-6 col-sm-6 col-xs-6">
			 	 	   <a href="#">
				 	  	  <div class="module__image animated step-2">
				 	  	  	  <img src="<?php echo bloginfo('template_url') ?>/assets/img/BRiN.png" />
				 	  	  </div>
				 	   </a>  
			 	  </div>
			 </div>
		</div>
	</section>
	<section id="signup" class="module">
	  <div class="container">
	       <h2 class="module__heading">Want <span class="module__heading--caps">Free</span> Help to Grow Your Business?</h2>
	       <p  class="module__subheading">Subscribe now and receive free growth strategies delivered weekly</p>
	       <div class="signup-form--horizontal"> 
         		<div class="moonray-form-p2c1648f169 ussr"><div class="moonray-form moonray-form-label-pos-stacked">
					<form class="moonray-form-clearfix" action="https://forms.ontraport.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8">
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text"><label for="mr-field-element-152257964015" class="moonray-form-label">First Name</label><input name="firstname" type="text" class="moonray-form-input" id="mr-field-element-152257964015" required value="" placeholder="First Name"/></div>
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email"><label for="mr-field-element-505851839203" class="moonray-form-label">Email</label><input name="email" type="email" class="moonray-form-input" id="mr-field-element-505851839203" required value="" placeholder="Email"/></div>
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-select"><label for="mr-field-element-554569858955" class="moonray-form-label">State (AUS)</label><select name="StateAUS_131" class="moonray-form-input" id="mr-field-element-554569858955"><option value="">Select (AUS)</option><option value="747">NSW</option><option value="748">VIC</option><option value="749">QLD</option><option value="750">WA</option><option value="751">SA</option><option value="752">TAS</option><option value="753">ACT</option><option value="754">NT</option><option value="763">Outside Australia</option></select></div>
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-select"><label for="mr-field-element-745904797455" class="moonray-form-label">#1 Business Problem</label><select name="1BusinessP_166" class="moonray-form-input" id="mr-field-element-745904797455"><option value="">#1 Business Problem</option><option value="804">Finding & Retaining Staff</option><option value="807">Lack of Targeted Leads</option><option value="805">Working Too Many Hours</option><option value="806">Adapting to New Technology</option><option value="808">Low or Inconstant Revenue </option><option value="820">Issues with Website & Traffic</option><option value="809">It's something not on this list...</option></select></div>
					<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-submit"><input type="submit" name="submit-button" value="Claim Now" class="moonray-form-input" id="mr-field-element-706840236438" src/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_source" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_medium" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_term" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_content" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_campaign" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="referral_page" type="hidden" value=""/></div>
					<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c1648f169"/></div>

							</form>
						</div>
					</div>
			</div>		
	  </div>
	</section>
	<footer class="site-footer">
				<div class="container module">
					<div class="footer  clearfix" itemscope itemprop="http://schema.org/WPFooter">
						<?php get_template_part( 'template-parts/fat-footer' ); ?>
					</div>
				</div>
			<?php wp_footer(); ?>
	</footer>


   </div> <!-- /.helper -->
</body>
</html>