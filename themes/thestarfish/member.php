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
					<section class="member-description-wrapper">

						<div class="member-description-content">
							<?php the_content(); ?>
						</div><!-- .member-description-content -->

					</section><!-- .member-description-wrapper -->

					<section class="member-steps">

						<div class="member-steps-content">
							<?php echo CFS()->get( 'member_steps_content' ); ?>
						</div>
						<div class="member-steps-image">
							<?php $image = CFS()->get('member_steps_image');?>
							<?php echo '<img src="' . $image . '" alt=""/>'; ?>
						</div>

					</section><!-- .member-steps -->

					<section class="member-box-area">

						<div class="content-box">

							<div class="content-box-header">
								<h2>Support the Leaders of tomorrow!</h2>
							</div><!-- .content-box-header -->

							<div class="content-box-content">
								<a class="btn-transparent" href="<?php echo esc_url(get_permalink(get_page_by_path( 'become-a-member' ) ) ); ?>">Become a Member
									<span class="screen-reader-text"><?php echo esc_html( 'Become a Member' ); ?></span>
								</a><!-- .btn-transparent -->
							</div><!-- .content-box-content -->

						</div><!-- .content-box -->

					</section><!-- .member-box-area -->

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_template_part( 'template-parts/content-donation', 'donation' ); ?>
<?php get_footer(); ?>
