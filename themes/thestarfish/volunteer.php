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
				
				<?php $image = CFS()->get('volunteer_roles_image');?>
 				<?php echo '<img src="' . $image . '" />'; ?>
				<?php echo CFS()->get( 'volunteer_roles_content' ); ?>
				<?php echo CFS()->get( 'volunteer_perks_content' ); ?>

				<section class="volunteer-carousel">
					<?php
						/**
						* Set the Custom Field Suite Loops Working
						*/
						
						echo '<h2>' . CFS()->get('join_our_team_carousel_title') . '</h2>';
						$carousel_cells = CFS()->get( 'join_our_team_carousel_cell' );
							echo '<div class="carousel-container container-single">';
								foreach($carousel_cells as $carousel_cell){
									// loop for each carousel cell
									echo '<div class="carousel-cell-container single">';
										echo '<div class="carousel-cell-images" />';
											echo '<img src="' . $carousel_cell['carousel_cell_image'] . '" class="carousel-cell-image" />';
										echo '</div>';
										echo '<div class="carousel-cell-content">';
											echo $carousel_cell['carousel_cell_content'];
											echo '<div class="btn">';
												echo '<a href="' . esc_url(get_permalink(get_page_by_path( 'contributor' ) ) ) . '">Join the team</a>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								}
							echo '</div>';
					?>
				</section><!-- .front-page-carousel -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part( 'template-parts/content-donation', 'donation' ); ?>
<?php get_footer(); ?>