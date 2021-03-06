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

	<a href="#" class="category"><h2>Motorsport</h2><img height="230" width="230" src="<?php echo get_stylesheet_directory_uri() ?>/images/ms.jpg"></a>
	<a href="#" class="category"><h2>Industry</h2><img height="230" width="230" src="<?php echo get_stylesheet_directory_uri() ?>/images/industry.jpg"></a>
	<a href="#" class="category"><h2>Family</h2><img height="230" width="230" src="<?php echo get_stylesheet_directory_uri() ?>/images/family.jpg"></a>
	<a href="#" class="category"><h2>Chicken</h2><img height="230" width="230" src="<?php echo get_stylesheet_directory_uri() ?>/images/chicken.jpg"></a>

	</div>
</div>

<?php //Get The Footer
get_template_parts( array( 'parts/html-footer') ); ?>