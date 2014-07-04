<?php
/*
Template Name: Homepage Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
    
				<?php get_sidebar(); // sidebar 1 ?>

				<div class="col-sm-10 clearfix">

					<?php include 'navbar.php';?>

					<div id="button-previous"></div>

					<div id="button-next"></div>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>