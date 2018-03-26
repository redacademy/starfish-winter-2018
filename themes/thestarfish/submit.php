<?php
/**
 * Template Name: Submit Page
 *
 * @package starfish_Theme
 */

 wp_head(); 
?>
	<div id="primary" class="submit-area"
		<main id="main" class="submit-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<div class="submit-wrapper">
					<a class="submit-close" href="<?php echo esc_url(get_permalink(get_page_by_path( 'front-page' ) ) ); ?>" >	
						X
					</a>
					<div class="submit-content">
						<?php echo CFS()->get( 'submit_title' ); ?>
					</div>
					
					<div class="submit-form">
						<?php echo CFS()->get( 'submit_form' ); ?>
					</div>	
				
				</div>
				
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php wp_footer(); ?> 
