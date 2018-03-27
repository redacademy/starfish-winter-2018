<?php
/**
 * Template Name: Become a Member
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header" >
					
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<section class="become-a-member-wrapper">
						<div class="become-a-member-content">
							<?php the_content(); ?>
							<div class="paypal-button">
								<img src="<?php echo get_template_directory_uri() . '/images/paypal.png'; ?>" alt="Paypal Image">
							</div>
						</div>
					</section><!-- .become-a-member-wrapper -->

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>