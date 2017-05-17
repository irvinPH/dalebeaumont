<?php
/**
 * The full width template
 *
 *  Template Name: Module Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DB
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             <section class="module module__slider">
             	 <div class="slides slick-this">
             	 	   <div class="slide">
             	 	     <img src="http://localhost/db-old/wp-content/uploads/2015/01/Dale-Beaumont-Speaking-TV.jpg" alt="52 ways" width="100%" height="auto" />
             	 	  </div>    
             	 	  <div class="slide">
             	 	     <img src="http://localhost/db-old/wp-content/uploads/2015/01/Dale-Beaumont-On-Stage.jpg" alt="52 ways" width="100%" height="auto"/>
             	 	  </div>
             	 	           	 	  
             	 </div>
             </section>
             <section class="module module__heading">
             	<div class="container">
             		 <h1>Speaking</h1>
             	</div>
             </section>
             <section class="module module__content">
             	<div class="container">
             		 <p>Dale began speaking professionally in 2001. Since then, he has delivered more than 1,000 presentations across nine countries.</p>

						<p>In the early years topics included; Goal Setting, Leadership,</p>

						<p>Then, as Dale’s business success became clear, he was invited to speak on the topics of; Entrepreneurial Mindset, Lead Generation, Public
						Relations, Outsourcing, Business Automation and Online Marketing.</p>

						<p>While Dale still speaks on the above topics, today he is most often asked to share his 'Entrepreneurial Success Story' or speak on the topics
						of; Business Growth, Technology for Business, and Artificial Intelligence.</p>
             	</div>
             </section>             
             <section class="module module__keynotes">
             	<div class="container module__keynotes--3col">
             		 <div class="row">

             		 	 <div class="col-md-4">
             		 	 	 <div class="box keynotes">
             		 	 	 	 Business Keynotes
             		 	 	 </div>
             		 	 </div>
             		 	 <div class="col-md-4">
             		 	 	 <div class="box keynotes">
             		 	 	 	 Technology Keynotes
             		 	 	 </div>
             		 	 </div>
             		 	 <div class="col-md-4">
             		 	 	 <div class="box keynotes">
             		 	 	 	 Success Keynotes
             		 	 	 </div>
             		 	 </div>

             		 </div>
             	</div>
             </section>          
             <!-- Title n Text --> 
             <section class="module module__text">
             	<div class="container">
             			<h2>Live Streaming</h2>
             		 	<p>Dale is an entrepreneur first and speaker second. Therefore, he isn’t able to accept a lot of speaking offers, especially if they involve travel. For this reason, Dale has built a TV studio within his office and is one of the few speakers that has the experience and equipment needed todeliver dynamic presentations through ‘Live Streaming'. With three professional quality cameras and a live switching desk, Dale can broadcast live into any event, anywhere in the world.</p>

						<p>All technology including the streaming service can be provided by us, and it means all that is needed on your end is a reliable internet
						connection and a web browser. Plus, if you’d like to make Dale's presentation even more interactive, he is also able to take audience questionsthrough Facebook or Twitter and answer them in real-time. Regarding fees, because live streaming presentations don’t involve Dale’s traveltime, usually we can reduce his speaking fees by up to 50 per cent.</p>

						<div class="image">
							<img src="http://localhost/db-old/wp-content/uploads/2017/05/studio.jpg" alt="52 ways" width="100%"/>
						</div>
             	</div>
             </section> 

		<?php
		if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
					//get_template_part( 'template-parts/modular-page', 'page' );
				endwhile;

		else :
			//get_template_part( 'template-parts/modular-page/content', 'none' );
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();