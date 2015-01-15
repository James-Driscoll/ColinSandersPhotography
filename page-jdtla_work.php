<?php
/*
 *
 * Template Name: Work
 * 
 * @package WordPress
 * @subpackage ThomasLineArt
 *
 */

//Get The Header
get_template_parts( array( 'parts/html-header') ); ?>

<div class="container">
	<div class="page-studio">

		<div class="pc pc-1">
			<?php $title = False; ?>
			<?php $query = new WP_Query( array('post_type' => 'jdtla_work', 'posts_per_page' => 1000 ) );
			while ( $query->have_posts() ) : $query->the_post();
				if (pa_in_taxonomy("categories", "Family")) {
					if ($title == False) { ?>
						<h1 class="pc-title">Family</h1>
						<?php $title = True;
					} ?>
					<a class="work-item" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_title(); ?>
					</a>
				<?php } ?>
				<?php  wp_reset_postdata(); ?>
			<?php endwhile; ?>
		</div>

		<div class="pc pc-2">
			<?php $title = False; ?>
			<?php $query = new WP_Query( array('post_type' => 'jdtla_work', 'posts_per_page' => 1000 ) );
			while ( $query->have_posts() ) : $query->the_post();
				if (pa_in_taxonomy("categories", "Industry")) {
					if ($title == False) { ?>
						<h1 class="pc-title">Industry</h1>
						<?php $title = True;
					} ?>
					<a class="work-item" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_title(); ?>
					</a>
				<?php } ?>
				<?php  wp_reset_postdata(); ?>
			<?php endwhile; ?>
		</div>

		<div class="pc pc-3">
			<?php $title = False; ?>
			<?php $query = new WP_Query( array('post_type' => 'jdtla_work', 'posts_per_page' => 1000 ) );
			while ( $query->have_posts() ) : $query->the_post();
				if (pa_in_taxonomy("categories", "Motorsport")) {
					if ($title == False) { ?>
						<h1 class="pc-title">Motorsport</h1>
						<?php $title = True;
					} ?>
					<a class="work-item" href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_title(); ?>
					</a>
				<?php } ?>
				<?php  wp_reset_postdata(); ?>
			<?php endwhile; ?>
		</div>

	</div>
</div>

<?php //Get The Footer
get_template_parts( array( 'parts/html-footer') ); ?>