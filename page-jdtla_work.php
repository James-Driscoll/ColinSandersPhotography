<?php
/*
 *
 * Template Name: Portfolio
 * 
 * @package WordPress
 * @subpackage ThomasLineArt
 *
 */

//Get The Header
get_template_parts( array( 'parts/html-header') ); ?>

<div class="container">
	<div class="page-portfolio">

	<a href="#" class="category"><h2>Motorsport</h2><img src="<?php echo get_stylesheet_directory_uri() ?>/images/.jpg"></a>
	<a href="#" class="category"><h2>Industry</h2><img src="<?php echo get_stylesheet_directory_uri() ?>/images/.jpg"></a>
	<a href="#" class="category"><h2>Family</h2><img src="<?php echo get_stylesheet_directory_uri() ?>/images/.jpg"></a>
	<a href="#" class="category"><h2>Chicken</h2><img src="<?php echo get_stylesheet_directory_uri() ?>/images/.jpg"></a>

	</div>
</div>

<?php //Get The Footer
get_template_parts( array( 'parts/html-footer') ); ?>