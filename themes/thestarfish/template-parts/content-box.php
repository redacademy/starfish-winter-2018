<?php
/**
 * Template part for displaying green content-box.
 *
 * @package Starfish_Theme
 */
?>

<section class="content-box">
	
	<div class="content-box-header">
		<h2></h2>
	</div><!-- .content-box-header -->

	<div class="content-box-content">
		<!-- Content (description) for the box here -->
		<a class="content-box-button" href="<?php echo esc_url(get_permalink(get_page_by_path( 'path to the page here' ) ) ); ?>"><!-- Name of the button here -->
			<span class="screen-reader-text"><?php echo esc_html( 'NAME OF THE BUTTON HERE' ); ?></span>
		</a><!-- .content-box-button -->

	</div><!-- .content-box-content -->
</section><!-- #post-## -->