<?php
/**
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
		
			<?php if ( is_home() ) : ?>
			
			<header class="entry-header" style="background: url(<?php echo $post_page_banner; ?>); width: 100%; height: 600px; background-size: cover; ">
				<?php single_post_title( '<h1 class="entry-title">', '</h1>' ); ?>	
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header><!-- .entry-header -->
			
			<?php endif; ?>

			<?php

				global $post;
				$args = array();

				$myposts = get_posts( entry_post_type ($args));
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
				<?php endforeach; 
				wp_reset_postdata();?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="content-box-header">
				<h2>Want to contribute to our Journal and get your story published?</h2>
			</header><!-- .content-box-header -->

			<div class="content-box-content">
				<a class="content-box-button" href="<?php echo esc_url(get_permalink(get_page_by_path( 'submit' ) ) ); ?>">Add your voice
					<span class="screen-reader-text"><?php echo esc_html( 'Add your voice' ); ?></span>
				</a><!-- .content-box-button -->
			</div><!-- .content-box-content -->
		</section><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>