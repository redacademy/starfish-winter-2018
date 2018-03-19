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
					<div class="footer-subscribe">
						<h3>Subscribe</h3>
						<p>Enter your email to get our newsletter</p>
					</div>
					<div class="footer-contact">
						<h3>Stay in Touch</h3>
						<p>Contact Us</p>
					</div>

					<div id="footer-sidebar" class="secondary">
						<div id="footer-sidebar1">
							<?php
								if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
								}
							?>
						</div><!-- #footer-sidebar1 -->
					</div><!-- #footer-sidebar -->

					<div class="footer-social">
						<h3>Social Media</h3>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-youtube"></i>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
