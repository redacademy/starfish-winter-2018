<?php
/**
 * The main template file.
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
				<div class="entry-content">
					<?php the_content(); ?>

					<section class="front-page-carousel">
						<?php
							/**
							* Set the Custom Field Suite Loops Working
							*/

							$carousels = CFS()->get( 'front_page_carousel' );

							foreach ( $carousels as $carousel ) {
								
								$single_img = empty($carousel['front_page_carousel_cell']);

								echo '<div class="carousel-container container-single">';
									//wrap in whole carousel
									$carousel_cells = $carousel['front_page_carousel_cell'];
									foreach($carousel_cells as $carousel_cell){
										// loop for each carousel cell
										echo '<div class="carousel-cell-container single">';
											echo '<div class="carousel-cell-images" />';
												echo '<img src="' . $carousel_cell['carousel_cell_image'] . '" class="carousel-cell-image" />';
											echo '</div>';
											echo '<div class="carousel-cell-content">';
												echo '<h2>' . $carousel['carousel_title'] . '</h2>';
												echo $carousel_cell['carousel_cell_content'];
											echo '</div>';
										echo '</div>';
									}
								echo '</div>';
							}
						?>
					</section><!-- .front-page-carousel -->

					<section class="front-page-workshops">

						<?php $image1 = CFS()->get('first_workshop_image');?>
						<?php echo '<img src="' . $image1 . '" />'; ?>

						<?php $image2 = CFS()->get('second_workshop_image');?>
						<?php echo '<img src="' . $image2 . '" />'; ?>

						<?php echo CFS()->get( 'workshops_content' ); ?>

					</section><!-- .front-page-workshops -->

					<section class="journal">

						<h2> Journal</h2>

						<!-- Getting the journal posts data -->

						<?php
							$args = array( 'post_type' => 'post', 'order' => 'DESC', 'numberposts' => 3 );
							$journal_posts = get_posts( $args ); // returns an array of posts
						?>

						<!-- Displaying the journal posts data -->

						<div class="carousel-container container-single">
							<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
							<div class="carousel-cell-container single">
								<div class="carousel-cell-images" >
									<?php the_post_thumbnail('medium_large'); ?>
								</div>
								<div class="carousel-cell-content">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
								</div>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
						</div>

					</section><!-- .journal -->

					<section class="become">

							

					</section><!-- .become -->

				</div><!-- .entry-content -->			
					
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>