<?php
/**
 * Template Name: Contributor Page
 *
 * @package starfish_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header" >
						
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				</header><!-- .entry-header -->

				<div class="entry-content">

					<section class="contributer-description-wrapper">

						<div class="contributer-description-content">
							<?php the_content(); ?>
						</div><!-- .contributer-description-content -->

					</section><!-- .contributer-description-wrapper -->

					<div class="contributor-form">
						<?php echo esc_html( CFS()->get( 'form_title' ) ); ?>
						<?php echo CFS()->get( 'apply_here' ); ?>
					</div>
				</div><!-- .entry-content -->
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>