<?php
/**
 * Template Name: About Page
 * 
 * @package starfish_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

<?php

	/**
	* Set the Custom Field Suite Loops Working
	*/

	$fields = CFS()->get( 'about_carousel' );
	
	foreach ( $fields as $field ) {
		// d($field);
		echo '<h2>' . $field['about_carousel_title'] . '</h2>';
		$loop2 = $field['about_carousel_cell'];
		// d($loop2);

		echo '<div class="carousel-container">';
		foreach($loop2 as $loop){
			// d($loop['about_carousel_cell_image']);
			// wrap in carousel cell
			echo '<img src="' . $loop['about_carousel_cell_image'] . '"/>';
			echo '<p>' . $loop['about_carousel_cell_content'] . '</p>';
		}
		echo '</div>';

		// $cells = CFS()->get($field['about_carousel_cell']);
		// d($cells);
		// foreach ( $cells as $cell ) {
		// 	echo $cell['about_carousel_cell_image'];
		// 	echo $cell['about_carousel_cell_content'];
		// }
	}
?>



	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class='entry-header'>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>					
			</header>	
		<?php endif; ?>

		<?php /* Start the Loop */ ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
