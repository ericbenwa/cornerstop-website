				<div id="sidebar1" class="col-sm-2 col-sm-offset-1" role="complementary">
				
					<!-- <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> -->

						<!-- <?php dynamic_sidebar( 'sidebar1' ); ?> -->

						<a href="/"><img src="http://cornerstop.local/wp-content/uploads/2014/06/corner-stop-eatery-restaurant.png" /></a>
						<h2>Eat</h2>
						<h3><a href="#dinner">Dinner</a></h3>
						<h3><a href="#lunch">Lunch</a></h3>
						<h3><a href="#kids">Kid's</a></h3>

						<h2>Drink</h2>
						<h3><a href="#wines">Wines</a></h3>
						<h3><a href="#cocktails">Cocktails</a></h3>
						<h3><a href="#beers">Beers</a></h3>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>