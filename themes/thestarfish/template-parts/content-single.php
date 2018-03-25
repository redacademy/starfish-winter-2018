<?php
/**
 * Template part for displaying single posts.
 *
 * @package starfish_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-header-banner">
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2><?php echo esc_html( get_the_title() );?></h2>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php starfish_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
