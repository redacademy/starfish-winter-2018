<?php
/**
 * Template Name: Donate Page
 *
 * @package starfish_Theme
 */

wp_head(); ?>
	
	<div id="primary" class="content-area"
		<main id="main" class="content-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="donate-content">
					<?php get_template_part( 'template-parts/content' ); ?>
					<?php the_content(); ?>
				</div>
		
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php wp_footer(); ?>	