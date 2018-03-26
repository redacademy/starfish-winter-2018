<?php
/**
 * Template Name: Workshop Page
 *
 * @package starfish_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class='entry-header'>

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

		</header><!-- .entry-header -->

		<?php /* Start the Loop */ ?>

		<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<section class="workshop-description">
						<div class="workshop-description-wrapper">
							<?php the_content(); ?>
						</div>
					</section><!-- .workshop-description -->

					<section class="workshop-carousels">
						<?php
							/**
							* Set the Custom Field Suite Loops Working
							*/

							$carousels = CFS()->get( 'workshop_carousel' );

							foreach ( $carousels as $carousel ) {
								
								$single_img = empty($carousel['workshop_carousel_cell'][0]['carousel_cell_image_secondary']); //check if the first cell in the carousel contains one or two images

								echo '<div class="carousel-container ' . ($single_img ? 'container-single' : 'container-double') . '">'; //if there is no secondary img -> add class container-single, otherwise -> add class container-double
									//wrap in whole carousel
									$carousel_cells = $carousel['workshop_carousel_cell'];
									foreach($carousel_cells as $carousel_cell){
										// loop for each carousel cell
										
										echo '<div class="carousel-cell-container' . ($single_img ? ' single' : ' double') . '">'; //if there is no secondary img -> add class single, otherwise -> double
										//wrap in carousel cell with all the content and img
											echo '<div class="carousel-cell-images' . ($single_img ? '' : ' carousel-double') . '">'; //if there is no secondary img -> add nothing, otherwise -> add class carousel-double
												echo '<img src="' . $carousel_cell['carousel_cell_image_primary'] . '" class="carousel-cell-image-primary" alt=""/>';
												if ($single_img == false) { //if there is secondary img -> show the secondary img on screen
													echo '<img src="' . $carousel_cell['carousel_cell_image_secondary'] . '" class="carousel-cell-image-secondary" alt=""/>';
												}
											echo '</div>';
											echo '<div class="carousel-cell-content">';
												echo '<h2>' . $carousel['workshop_title'] . '</h2>';
												echo $carousel_cell['carousel_cell_content'];
												echo '<div class="button">';
													echo '<a href="' . esc_url(get_permalink(get_page_by_path( 'contact' ) ) ) . '" class="btn-transparent-dark">Contact Us</a>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									}
								echo '</div>';
							}
						?>
					</section><!-- .workshop-carousels -->

					<section class="workshops-content-box-area">
						<div class="content-box">
							<div class="content-box-header">
								<h3>Contact us to host a workshop</h3>
							</div><!-- .content-box-header -->
							<div class="button">
								<a class="btn-transparent" href="<?php echo esc_url(get_permalink(get_page_by_path( 'contact' ) ) ); ?>">Contact Us to Host a Workshop</a>
							</div>
						</div><!-- .content-box -->
	
					</section><!-- .workshops-content-box-area -->

</section><!-- #post-## -->

				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>