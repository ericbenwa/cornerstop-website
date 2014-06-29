				<div id="sidebar1" class="col-sm-1" role="complementary">
				
					<!-- <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> -->

						<!-- <?php dynamic_sidebar( 'sidebar1' ); ?> -->

						<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corner-stop-eatery-restaurant-slim.png" /></a>

						<?php if ( is_page('visit')) { ?>

						<?php } elseif ( is_page('index')) { ?>

						<?php } elseif ( is_page('our-story')) { ?>
							<div class="sidebar-social-icons">
								<a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>

						<?php } elseif ( is_page('private-parties')) { ?>
							<div class="sidebar-social-icons">
								<a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>

						<?php } elseif ( is_page('gift-certificates')) { ?>
							<div class="sidebar-social-icons">
								<a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>

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
								<a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>
						<?php } else {  ?>
							<!-- All blog posts -->

							<a href="http://cornerstop.local/happenings/" class="blog-categories">All</a>
							<?php dynamic_sidebar( 'sidebar1' ); ?>

							<div class="sidebar-social-icons">
								<a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="icon-facebook" class="alignnone size-full wp-image-63 social-icon" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png" alt="icon-twitter" class="alignnone size-full wp-image-65 social-icon" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-instagram.png" alt="icon-instagram" class="alignnone size-full wp-image-64 social-icon" /></a>
							</div>
						<?php }	 ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>