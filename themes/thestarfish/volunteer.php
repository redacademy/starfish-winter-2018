<?php
/**
 * Template Name: Volunteer Page
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="volunteer-roles">
					<div class="volunteer-roles-content">
						<?php echo CFS()->get( 'volunteer_roles_content' ); ?>
					</div>
					<div class="volunteer-roles-image">
						<?php $image = CFS()->get('volunteer_roles_image');?>
						<?php echo '<img src="' . $image . '" alt=""/>'; ?>
					</div>

				</section><!-- .volunteer-roles -->

				<section class="volunteer-perks">
					<div class="volunteer-perks-content">

						<?php echo CFS()->get( 'volunteer_perks_content' ); ?>

					</div>

				</section><!-- .volunteer-perks -->

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
											echo '<img src="' . $carousel_cell['carousel_cell_image'] . '" class="carousel-cell-image" alt=""/>';
										echo '</div>';
										echo '<div class="carousel-cell-content">';
											echo $carousel_cell['carousel_cell_content'];
											echo '<div class="button">';
												echo '<a href="' . esc_url(get_permalink(get_page_by_path( 'contributor' ) ) ) . '" class="btn-transparent-dark">Join the team</a>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								}
							echo '</div>';
					?>
				</section><!-- .front-page-carousel -->

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part( 'template-parts/content-donation', 'donation' ); ?>
<?php get_footer(); ?>