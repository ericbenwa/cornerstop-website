			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

					<?php if ( is_page('index')) { ?>
						<p class="attribution"><strong>Lunch</strong>: Wednesday – Sunday 11:30-2:30 • <strong>Bar menu &amp; drinks</strong> in between • <strong>Dinner</strong> nightly at 5pm<br />
						<a href="tel:781-875-3065">781.875.3065</a> • <a href="https://www.google.com/maps/place/The+Corner+Stop+Eatery/@42.259371,-70.845015,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x604bb783d4e9e727">235 Hull Street, Cohasset MA 02025</a> <a href="https://www.facebook.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-facebook.png" /></a> <a href="http://www.twitter.com/cornerstop2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-twitter.png" /></a> <a href="http://www.instagram.com/cornerstopeatery"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-instagram.png" /></a></p>
					
						<?php echo do_shortcode('[mc4wp_form]'); ?>
					<?php }	 ?>

				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-2039737-19', 'cornerstopeatery.com');
			ga('send', 'pageview');
		</script>

	</body>

</html>