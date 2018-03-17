<?php
/**
 * Template Name: Volunteer Page
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class='entry-header'>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					
				</header>
				
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>
				
				<?php echo $image = CFS()->get('volunteer_roles_image');?>
 				<?php echo '<img src="' . $image . '" />'; ?>
				<?php echo CFS()->get( 'volunteer_roles_content' ); ?>
				<?php echo CFS()->get( 'volunteer_perks_content' ); ?>

				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/content-donation', 'donation' ); ?>
<?php get_footer(); ?>