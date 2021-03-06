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
						<div class="row">
							<div class="col-sm-8">
								<p class="attribution"><strong>Lunch</strong>: Wednesday – Sunday 11:30-2:30 • <strong>Bar menu &amp; drinks</strong> in between • <strong>Dinner</strong> nightly at 5pm •<br />
								<a href="tel:781-875-3065">781.875.3065</a> • <a href="https://www.google.com/maps/place/The+Corner+Stop+Eatery/@42.259371,-70.845015,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x604bb783d4e9e727" target="_blank">235 Hull Street, Cohasset MA 02025</a> <br class="index-icons" /><a href="https://www.facebook.com/cornerstopeatery" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-facebook.png" /></a> <a href="http://www.twitter.com/cornerstop2" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-twitter.png" /></a> <a href="http://www.instagram.com/cornerstopeatery" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-sm-instagram.png" /></a></p>
							</div>

							<div class="col-sm-4">
								<?php echo do_shortcode('[mc4wp_form]'); ?>
								<p>Website by <a href="http://elephascreative.com/" target="_blank"><strong>Elephas Creative</strong></a></p>
							</div>
						</div>
					<?php }	 ?>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

		<?php if ( is_page('index')) { ?>
		<script>
        var es_globals = {},
            thisImg = null,
            isForcefull = (function(){

                var search = window.location.search,
                    searchAry = search.split("&"),
                    force = false;

                for (var i=0;i<searchAry.length;i++) { 

                    var thisParam = searchAry[i].replace("?",""),
                        thisParamSplit = thisParam.split("=");
                    
                    if ((thisParamSplit[0] == "fullSite") && (thisParamSplit[1] == "true")) {
                        force = true;
                    }

                }
                return force;

            })();
            //user agent sniffing... not the best solution, but most acheivable currently
            es_globals.isMobile = (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))){return true}else{return false}})(navigator.userAgent||navigator.vendor||window.opera),
            mobileTest = /mobile/i.test(navigator.userAgent),
            androidTest = /android/i.test(navigator.userAgent),
            isTouchDevice = (function() {
                    var el = document.createElement('div');
                    el.setAttribute('ongesturestart', 'return;');
                    return typeof el.ongesturestart === "function";
                    })();

        // //a little feature detection
        // //adding the user agent test so desktops with touch aren't affected
        if ((isTouchDevice) && (mobileTest || androidTest) ) {
            es_globals.isMobile = true;
        }

        // if ((es_globals.isMobile) && !isForcefull) {
        //     window.location = "/mobile";
        // }

        es_globals.templateUrl = "<?php echo get_stylesheet_directory_uri(); ?>";

        es_globals.bgImages = [];

<?php
$image_array = array(
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-1.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-2.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-3.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-4.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-5.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-6.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-7.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-8.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-9.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-10.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-11.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-12.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-13.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-14.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-15.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-16.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-17.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-18.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-19.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-20.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-21.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-22.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-23.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-24.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-25.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-26.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-27.jpg',
get_stylesheet_directory_uri() . '/images/homepage/corner-stop-28.jpg'
);
shuffle($image_array);
foreach($image_array as $image_url) {
?>
        es_globals.bgImages.push(new Image());es_globals.bgImages[es_globals.bgImages.length - 1].src = '<?php echo $image_url; ?>';
<?php
}
?>
		es_globals.bgImages.unshift(new Image());
		es_globals.bgImages[0].src = '<?php echo get_stylesheet_directory_uri() . '/images/homepage/corner-stop-27.jpg'; ?>';
    </script>
    <?php }  ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-2039737-19', 'cornerstopeatery.com');
			ga('send', 'pageview');
		</script>

		<?php if ( is_page('eat-drink' || 'our-story')) { ?>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js" type="text/javascript" charset="utf-8"></script>
		<?php }  ?>

		<?php if ( is_page('index')) { ?>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/cycle-background-image.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/require.min.js" data-main="<?php echo get_stylesheet_directory_uri(); ?>/scripts/main.js"></script>
		<?php }  ?>
</html>