<?php
/**
 * Template Name: Member Page
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
					
					<?php the_content(); ?>

					<?php $image = CFS()->get('member_steps_image');?>
					<?php echo '<img src="' . $image . '" alt=""/>'; ?>
					<?php echo CFS()->get( 'member_steps_content' ); ?>

					<section class="member-box-area">

						<div class="content-box">

							<div class="content-box-header">
								<h2>Support the Leaders of tomorrow!</h2>
							</div><!-- .content-box-header -->

							<div class="content-box-content">
								<a class="content-box-button" href="<?php echo esc_url(get_permalink(get_page_by_path( 'become-a-member' ) ) ); ?>">Become a Member
									<span class="screen-reader-text"><?php echo esc_html( 'Become a Member' ); ?></span>
								</a><!-- .content-box-button -->
							</div><!-- .content-box-content -->

						</div>	

					</section><!-- #post-## -->

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
