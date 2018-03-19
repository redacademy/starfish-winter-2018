<?php
/**
 * Template Name: Submit Page
 *
 * @package starfish_Theme
 */

?>
	<div id="primary" class="submit-area"
		<main id="main" class="submit-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>
				
				<?php echo CFS()->get( 'submit_title' ); ?>
				<?php echo CFS()->get( 'submit_form' ); ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
