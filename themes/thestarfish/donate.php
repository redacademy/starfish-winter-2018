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
				
				<div class="donate-wrapper">
				<img src="<?php echo get_template_directory_uri() . '/images/donate-image.png'; ?>" class="donate-image" alt="Donate Image">
					<div class="donate-content">
						<a class="close-link" href="<?php echo esc_url(get_permalink(get_page_by_path( 'front-page' ) ) ); ?>" >	
						X
						</a>
						<?php get_template_part( 'template-parts/content' ); ?>
						<?php the_content(); ?>
						<img src="<?php echo get_template_directory_uri() . '/images/paypal.png'; ?>" class="paypal-image" alt="Paypal Image">
					</div>
				</div>
			
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php wp_footer(); ?>	