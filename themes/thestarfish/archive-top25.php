<?php
/**
 * Template Name: Top 25
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
		<section class="top25-box">
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


<div class="top25-profiles-box">
		<div class="profile-scroll-box">
 				<?php
				$args = array( 
					'posts_per_page' => 25, 
					'offset'=> 1, 
					'post_type' => 'profile', 
					'profile_type' => 'nominees',	
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
							<?php the_title(); ?>
							</div>
					<?php endforeach;
					wp_reset_postdata();
					?>
			</div>
			<div class="nominee-meet-container">
				<h2>Meet the Top 25</h2>
				<?php the_excerpt(); ?>
				<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'nominate' ) ) ); ?>"><button>Nominate</button></a>
			</div>

		</div>



<div class="nominee-carousel">
		<?php
			$args = array( 
				'posts_per_page' => 25, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'nominees',
			);
			$myposts = get_posts( $args );
			?>

			<div class="carousel-top-25">
				
				<?php 
				foreach ( $myposts as $post ) : setup_postdata( $post );?>
						<div class="carousel-top-25-cell">
						<?php if ( has_post_thumbnail() ) : 
								the_post_thumbnail( 'large' ); 
							endif; ?>
							<a class="top25-profile-picture" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>"><?php the_title(); ?></a>
						</div>
				<?php endforeach;
				wp_reset_postdata();
				?>
			</div>
</div>

</div>
</section>

<section class="content-box-area">
	<div id="judges-image">
	</div>
	<div class="content-box">
		
		<div class="content-box-header">
			<h2>Judges</h2>
			<p>Just like our Top 25 list,these changemakers are committed to progressive, 
			positive change in their communities and are lending their expertise to finding 
			our next round of young Canadian leaders</p>
		</div><!-- .content-box-header -->

		<div>
			<a class="btn-transparent" href="<?php echo esc_url(get_permalink(get_page_by_path( 'judges' ) ) ); ?>">
			Meet the Judges
			</a><!-- .content-box-button -->

		</div><!-- .content-box-content -->
	
	</div>	

</section><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>