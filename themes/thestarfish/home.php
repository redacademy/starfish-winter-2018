<?php
/**
 * Template Name: Journal Page
 *
 * @package starfish_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php 

$post_page_id = get_option( 'page_for_posts' );
// echo($post_page_id);=

$post_page_banner = (CFS()->get('banner_image', $post_page_id)); 
// echo $post_page_banner;
?>

		<?php if ( have_posts() ) : ?>
		
			<?php if ( is_home() && ! is_front_page() ) : ?>
			
			<header class="entry-header" style="background: url(<?php echo $post_page_banner; ?>); width: 100%; height: 600px; background-size: cover; ">
				<?php single_post_title( '<h1 class="entry-title">', '</h1>' ); ?>	
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header><!-- .entry-header -->
			
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

<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>