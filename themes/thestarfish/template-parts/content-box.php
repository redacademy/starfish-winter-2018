<?php
/**
 * Template part for displaying green content-box.
 *
 * @package Starfish_Theme
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="content-box-header">
		<?php the_title( '<h1 class="content-box-title">', '</h1>' ); ?>
	</header><!-- .content-box-header -->

	<div class="content-box-content">
		<?php the_content(); ?>
		
		<?php
			
		?>

		<button class="content-box-button">
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button><!-- .content-box-button -->

	</div><!-- .content-box-content -->
</section><!-- #post-## -->