<?php
/**
 * Template Name: Donate Page
 *
 * @package starfish_Theme
 */

get_header(); ?>
	
	<div id="primary" class="content-area"
		<main id="main" class="content-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>	