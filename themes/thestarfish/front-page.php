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
					<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'about' ) ) ); ?>">Learn More</a>

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
												echo '<div class="button">';
													echo '<a href="' . esc_url(get_permalink(get_page_by_path( 'top-25' ) ) ) . '" class="btn-transparent-dark">Learn More</a>';
												echo '</div>';
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

						<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'workshops' ) ) ); ?>">Learn More</a>

					</section><!-- .front-page-workshops -->

					<section class="front-page-journal">

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
									<div class="button">
										<a href="<?php the_permalink(); ?>" class="btn-transparent-dark">Read More</a>
									</div>
								</div>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
						</div>

					</section><!-- .journal -->

					<section class="front-page-become-box">

						<div class="front-page-become-volunteer">
							
							<h2  class="front-page-volunteer-header">Become a Volunteer</h2>

							<div class="front-page-volunteer-content">
								<a class="content-box-button" href="<?php echo esc_url(get_permalink(get_page_by_path( 'become-a-volunteer' ) ) ); ?>">Volunteer
									<span class="screen-reader-text"><?php echo esc_html( 'Volunteer' ); ?></span>
								</a><!-- .content-box-button -->
							</div><!-- .front-page-volunteer-content -->

						</div><!-- .fornt-page-become-volunteer -->

						<div class="front-page-become-member">
							
								<h2 class="front-page-member-header">Become a Member</h2>

							<div class="front-page-member-content">
								<a class="content-box-button" href="<?php echo esc_url(get_permalink(get_page_by_path( 'member' ) ) ); ?>">Membership
									<span class="screen-reader-text"><?php echo esc_html( 'Membership' ); ?></span>
								</a><!-- .content-box-button -->
							</div><!-- .front-page-member-content -->
						</div><!-- .front-page-become-member -->

					</section><!-- .front-page-become-box -->

				</div><!-- .entry-content -->			
					
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>