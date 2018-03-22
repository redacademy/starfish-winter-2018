<?php
/**
 * The template for displaying the footer.
 *
 * @package starfish_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div id="footer-sidebar" class="secondary">
						<div id="footer-sidebar1">
							<?php
								if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
								}
							?>
						</div><!-- #footer-sidebar1 -->
					</div><!-- #footer-sidebar -->

					<div class="footer-contact">
						<h3>Stay in Touch</h3>
						<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'contact' ) ) ); ?>">Contact Us</a>
					</div><!-- .footer-contact -->

					<div class="footer-social">
						<h3>Social Media</h3>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-youtube"></i>
					</div><!-- .footer-social -->

				</div><!-- .site-info -->

				<div class="site-copyright">
					<div class="site-footer-logo">
						<img src="<?php echo get_template_directory_uri() . '/images/logo-white.svg'; ?>" class="logo" alt="Starfish Logo">
					</div>
					
					<p>&copy; <?php echo date( 'Y' ); ?> The Starfish Environmental Society. Website by <a href="https://redacademy.com/" target="_blank">Red Academy</a></p>
				</div><!-- .site-copyright -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
