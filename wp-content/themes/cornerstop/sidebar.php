				<div id="sidebar1" class="col-sm-2 col-sm-offset-1" role="complementary">
				
					<!-- <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> -->

						<!-- <?php dynamic_sidebar( 'sidebar1' ); ?> -->

						<a href="/"><img src="http://cornerstop.local/wp-content/uploads/2014/06/corner-stop-eatery-restaurant.png" /></a>

						<?php if ( is_page('visit')) { ?>

						<?php } elseif ( is_page('blog')) { ?>
							<span>blog goodies</span>

						<?php } elseif ( is_page('eat-drink')) { ?>
							<h2>Eat</h2>
							<h3><a href="#dinner">Dinner</a></h3>
							<h3><a href="#lunch">Lunch</a></h3>
							<h3><a href="#kids">Kid's</a></h3>

							<h2>Drink</h2>
							<h3><a href="#wines">Wines</a></h3>
							<h3><a href="#cocktails">Cocktails</a></h3>
							<h3><a href="#beers">Beers</a></h3>

							<div class="sidebar-social-icons">
								<a href="http://www.facebook.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>
						<?php } else {  ?>
							<!-- Our Story, Private Parties and any other left -->
							<div class="sidebar-social-icons">
								<a href="http://www.facebook.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com"><img src="http://cornerstop.local/wp-content/uploads/2014/06/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>
						<?php }	 ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>