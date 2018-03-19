<?php
/**
 * Template part for displaying carousel.
 *
 * @package Starfish_Theme
 */

?>

<?php

	/**
	 * Template Part for the carousel custom fields. COPY, PASTE, AND CHANGE for the page you are working on.
	 */

	/**
	* Set the Custom Field Suite Loops Working
	*/

	$carousels = CFS()->get( 'about_carousel' );

	foreach ( $carousels as $carousel ) {
		
		$single_img = empty($carousel['about_carousel_cell'][0]['about_carousel_cell_image_secondary']); //check if the first cell in the carousel contains one or two imgs

		echo '<div class="carousel-container ' . ($single_img ? 'container-single' : 'container-double') . '">'; //if there is no secondary img -> add class container-single, otherwise -> add class container-double
			//wrap in whole carousel
			$carousel_cells = $carousel['about_carousel_cell'];
			foreach($carousel_cells as $carousel_cell){
				// loop for each carousel cell
				
				echo '<div class="carousel-cell-container' . ($single_img ? ' single' : ' double') . '">'; //if there is no secondary img -> add class single, otherwise -> double
				//wrap in carousel cell with all the content and img
					echo '<div class="carousel-cell-images' . ($single_img ? '' : ' carousel-double') . '">'; //if there is no secondary img -> add nothing, otherwise -> add class carousel-double
						echo '<img src="' . $carousel_cell['about_carousel_cell_image_primary'] . '" class="carousel-cell-image-primary"/>';
						if ($single_img == false) { //if there is secondary img -> show the secondary img on screen
							echo '<img src="' . $carousel_cell['about_carousel_cell_image_secondary'] . '" class="carousel-cell-image-secondary"/>';
						}
					echo '</div>';
					echo '<div class="carousel-cell-content">';
						echo '<h2>' . $carousel['about_carousel_title'] . '</h2>';
						echo $carousel_cell['about_carousel_cell_content'];
					echo '</div>';
				echo '</div>';
			}
		echo '</div>';
	}
?>