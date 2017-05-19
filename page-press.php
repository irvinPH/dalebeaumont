<?php
/*
*  Press Page
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

             <section class="banner" style="background: url('http://dalebeaumont.com/wp-content/uploads/2015/01/Dale-Beaumont-Event.jpg') -120px 0px no-repeat; min-height: 250px; ">
                   <div class="container">
 
                   </div>
             </section> 
		<?php endif; ?>
	<?php endwhile; ?>


		<div id="content" class="content page-press" role="main" itemscope itemprop="mainContentOfPage">

             <section class="module module--text">
                <div class="container">
                   <div class="heading">
                         <p class="text-center">If you are a journo, blogger or social media commentator we'd love to support you to write the story you need. Below you'll find a list of our recent media releases along with dozens of images you can use to add colour to your story. Feel free to download and use as you like. And should you require something a little different, please contact: media[at]brin.ai.</p>
                   </div>
                 </div>  
               </section> 
               <section class="module module--features">  
                    <div class="container">     
                         <h1 class="module__title">Professional</h1>
                         <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>

                         </div>
                  </div>       
             </section>
               <section class="module module--features">  
                    <div class="container">     
                         <h1 class="module__title">Casual</h1>
                         <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                      <div class="module__media">
                                            <div class="image">
                                                  <img src="http://localhost/db-old/wp-content/uploads/2017/05/forbes.jpg" />
                                            </div>
                                           <p class="title">Founder - Dale Beaumont</p>
                                           <div class="grid grid--feature-buttons">
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1-a-web/?wpdmdl=10801&amp;masterkey=58db42f17be78" class="feature__button btn-orange">Web</a>
                                                </div>
                                                <div class="grid__column">
                                                      <a href="https://brin.ai/download/press-line-1/?wpdmdl=10721&amp;masterkey=58db427fa9931" class="feature__button btn-green">Print</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>

                         </div>
                  </div>       
             </section>



		</div>
	
	
<?php get_footer(); ?>