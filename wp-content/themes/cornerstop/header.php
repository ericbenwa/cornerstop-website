<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?> The Corner Stop Eatery</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php if ( is_page('index')) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/global-elements.css" />
		<?php }	 ?>
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript" charset="utf-8"></script>
				
	</head>
	
  <body <?php body_class(); ?> <?php if(is_page('index')) { ?> style="background-image: url('<?php echo $image_array[0]; ?>')" <?php } ?>>

        <!-- <p><a href="#ex1" rel="modal:open" style="z-index:50; color:green; position:absolute; top:5;">Open Modal</a></p> -->

		<?php if ( is_page('index')) { ?>

		<div id="bg_images">
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
	        <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
            <div class="bg_image_container"></div>
	    </div>

        <div id="page_wrapper">
            <section id="content">
            <figure id="background-arrow">
                <img src="">
            </figure>
        	</section>
        </div>

		<?php }	 ?>
		
		<div class="container">
