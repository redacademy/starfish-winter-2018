<?php
/**
 * Template Name: Judges
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
		<section class="top25-box">
		<div class="top25-content">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class='entry-header'>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					
				</header>
				
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>


	<div class="profile-scroll-box">
 				<?php
				$args = array( 
					'posts_per_page' => 25, 
					'offset'=> 1, 
					'post_type' => 'profile', 
					'profile_type' => 'judges',	
				);
				$myposts = get_posts( $args );
				?>
			<div class="nominee-content">
					<?php 
					foreach ( $myposts as $post ) : setup_postdata( $post );?>
							<div class="nominee-profiles-box">
							<a class="nominee-popup" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>"><?php if ( has_post_thumbnail() ) : 
								the_post_thumbnail( 'large' ); 
								endif; ?>
							</a>
							<span class="name-title-profile">
							<p><?php the_title(); ?></p>
							</span>
							<!-- <br> -->
							<?php echo CFS()->get( 'subtitle' ); ?>
							</div>
					<?php endforeach;
					wp_reset_postdata();
					?>
			</div>
			<div class="nominee-meet-container">
				<h2>Meet the Judges</h2>
				<?php the_excerpt(); ?>
			</div>

		</div>

<div class="nominee-meet-container-after">
				<h2>Meet the Judges</h2>
				<?php the_excerpt(); ?>
				<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'nominate' ) ) ); ?>"><button>Nominate</button></a>
</div>

<div class="nominee-carousel">
		<?php
			$args = array( 
				'posts_per_page' => 25, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'judges',
			);
			$myposts = get_posts( $args );
			?>

			<div class="carousel-top-25">
				
				<?php 
				foreach ( $myposts as $post ) : setup_postdata( $post );?>
						<div class="carousel-top-25-cell">
						<a class="nominee-popup" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>">
						<?php if ( has_post_thumbnail() ) : 
								the_post_thumbnail( 'large' ); 
							endif; ?></a>

							<span class="name-title-profile">
							<p><?php the_title(); ?></p>
							</span>
							
							<?php echo CFS()->get( 'subtitle' ); ?>
						</div>
						
				<?php endforeach;
				wp_reset_postdata();
				?>
			</div>
</div>

</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_template_part( 'template-parts/content', 'donation' ); ?>

<?php get_footer(); ?>