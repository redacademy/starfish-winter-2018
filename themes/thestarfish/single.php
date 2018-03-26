<?php
/**
 * The template for displaying all single posts.
 *
 * @package starfish_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>
		<h3 class="journal-related-title">Similar Articles</h3>
	<div class="journal-container">
		<?php $journalpost = new WP_Query( 'posts_per_page=3' ); ?>
				<!-- // Start our WP Query -->
				<?php while ($journalpost -> have_posts()) : $journalpost -> the_post(); ?>
			<div class="journal-block">
					<?php if ( has_post_thumbnail() ) : ?>
					<a class="readentry" href="<?php echo get_permalink(); ?>">	<?php the_post_thumbnail( 'large' ); ?></a>
						<?php endif; ?>						<!-- // Display the Post Title with Hyperlink -->
				<div class="journal-info">
					<div class="storytitle">
						<strong><?php the_title(); ?></strong>
					</div>
				</div>
			</div>

		<?php 
		endwhile;
		wp_reset_postdata();
		?>
		</div>
					</main><!-- #main -->
				</div><!-- #primary -->

<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>



