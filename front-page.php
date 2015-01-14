<?php
  /**
   * Template Name: Homepage
   *
   * @package     WordPress
   * @subpackage  Starkers
   * @since       Starkers 4.0
   *
   * Please see /external/starkers-utilities.php for info on get_template_parts()
   */
 ?>

<body <?php body_class(); ?> id="body-background">
  <!-- Content Begins Here -->

  <?php
    //Get the header
    get_template_parts( array( 'parts/html-header') );
  ?>

  <!-- Jumbotron! -->

  <!-- Content ends here -->

  <?php
    //Get the footer
    get_template_parts( array( 'parts/html-footer') );
  ?>