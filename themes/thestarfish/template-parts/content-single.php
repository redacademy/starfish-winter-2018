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
		<h2 class="single-post-title"><?php echo esc_html( get_the_title() );?></h2>
		<section class="single-post-container">
			<div class="single-post-sidebar">
				<span class="entry-date">Posted<br><?php echo get_the_date(); ?></span>
				<?php starfish_entry_footer(); ?>
			</div>
			<div class="single-post-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			<div>
		</section>
	</div>


</article><!-- #post-## -->
