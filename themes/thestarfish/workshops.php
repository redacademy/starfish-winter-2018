<?php
/**
 * Template Name: Workshop Page
 *
 * @package starfish_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php /* Start the Loop */ ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class='entry-header'>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
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
										echo '</div>';
									echo '</div>';
								}
							echo '</div>';
						}
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>