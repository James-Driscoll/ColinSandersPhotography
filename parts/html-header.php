<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
    
		<title><?php wp_title( 'Colin Sanders |' ); ?></title>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Icon  -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>

    <!-- Custom Style -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=3" rel="stylesheet">

		<!-- DNS Prefetch -->
		<link rel="dns-prefetch" href="<?php echo get_bloginfo("url"); ?>" />
		<link rel="dns-prefetch" href="//ajax.googleapis.com" />
		<link rel="dns-prefetch" href="//maps.google.com" />

		<!-- IE Stuff -->
		<meta http-equiv="imagetoolbar" content="false" />

		<!-- JQuery -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.7.1.min.js" ></script>

		<!-- BxSlider -->
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bxSlider.min.js"></script>

		<!-- Site Javascript -->
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/site.js"></script>

		<?php wp_head(); ?>

    <script>site = {ss: "<?php echo get_stylesheet_directory_uri(); ?>"};</script>
        
  </head>


  <body <?php body_class(); ?> class="page-id-9 page-id-50 page-id-11">

    <div class="header container">
      
    	<h1 class="title"><a href="<?php echo get_site_url(); ?>">Colin Sanders Photography</a></h1>

			<?php
				//Output the navigation
			  	$args = array(
				  "theme_location" => "top_navigation",
				  'container_class' => 'top-nav container'
				);
				wp_nav_menu($args);
			?>

		</div>
