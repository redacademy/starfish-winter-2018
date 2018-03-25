<?php
/**
 * Template Name: Contributor Page
 *
 * @package starfish_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php echo CFS()->get( 'form_title' ); ?>
				<?php echo CFS()->get( 'apply_here' ); ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>