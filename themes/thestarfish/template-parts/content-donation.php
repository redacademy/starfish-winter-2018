<?php
/**
 * Template part for displaying the "You can help" donation section above the footer
 *
 * @package Starfish_Theme
 */

?>

<section class="donation-container">
	<div class="content-donation">
		
		<div class="content-donation-info">
			<h2>You can Help!</h2>
			<p>Your support will help us run our programs, provide a plateform to changemakers 
				of tommorow and give them the recognition they deserve.</p>
		</div>
			<a class="btn-donate" href="<?php echo esc_url(get_permalink(get_page_by_path( 'donate' ) ) ); ?>" >
				Donate
				<span class="screen-reader-text"><?php echo esc_html( 'Donate' ); ?></span>
			</a>

	</div><!-- .entry-content -->
</section><!-- end of section -->

