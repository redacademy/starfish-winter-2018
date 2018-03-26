<?php
/**
 * Template Name: Team Page
 *
 * @package starfish_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->



<!-- EXECUTIVE TEAM -->

<section class="profile-box">
<div class="profile-box-preview profile-box-preview-executive">
	<!-- <p>Test</p> -->
	<div class="preview-content-container-executive">
	<?php
			$args = array( 
				'posts_per_page' => 1, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'executive team',
			);
			$myposts = get_posts( $args );
			?>
				<?php 
		foreach ( $myposts as $post ) : setup_postdata( $post );
		if ( has_post_thumbnail() ) : ?>
		<h2>
		<?php the_title(); ?>
		</h2>

		<?php the_post_thumbnail( 'large' ); ?>

		<input data-id="<?php echo $post->ID; ?>" type="button" class="popup-profile-init" value="Learn More"/>

		<?php endif; ?>
		<?php endforeach;
		wp_reset_postdata();
		?>
		
	</div>



</div>
<div class="profile-container">
	<div class="profile-headline">
		<h1>Executive Team</h1>
		<p>We are a volunteer run organization working closely together to celebrate and amplify the Canadian youth conservation movement.</p>
	</div>
		<?php
			$args = array( 
				'posts_per_page' => 12, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'executive team',
			);
			$myposts = get_posts( $args );
			?>
		<?php 
		foreach ( $myposts as $post ) : setup_postdata( $post );
		if ( has_post_thumbnail() ) : 
		?>
			<div class="profile-content">
	
    <li>
		<a class="profile-picture profile-picture-executive" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>">
		<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</a>
		</li>
	</div>
<?php endforeach;
wp_reset_postdata();
?>
</div>
</section>

<!-- EDITORIAL TEAM -->

<section class="profile-box editorial">

<div class="profile-box-preview profile-box-preview-editorial">
	<div class="preview-content-container-editorial">
	<?php
			$args = array( 
				'posts_per_page' => 1, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'editorial team',
			);
			$myposts = get_posts( $args );
			?>
				<?php 
		foreach ( $myposts as $post ) : setup_postdata( $post );
		if ( has_post_thumbnail() ) : ?>
		<h2>
		<?php the_title(); ?>
		</h2>
		<?php the_post_thumbnail( 'large' ); ?>
		<input data-id="<?php echo $post->ID; ?>" type="button" class="popup-profile-init" value="Learn More"/>
		<?php endif; ?>
		<?php endforeach;
		wp_reset_postdata();
		?>
			

	</div>

</div>

<div class="profile-container">
	<div class="profile-headline">
		<h1>Editorial Team</h1>
		<p>We are a volunteer run organization working closely together to celebrate and amplify the Canadian youth conservation movement.</p>
	</div>

		<?php
			$args = array( 
				'posts_per_page' => 12, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'editorial team',
			);
			$myposts = get_posts( $args );
			?>
		<?php 
		foreach ( $myposts as $post ) : setup_postdata( $post );
		if ( has_post_thumbnail() ) : 
		?>
		<div class="profile-content">
		
   		<li>
		<a class="profile-picture profile-picture-editorial" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>">
		<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		</a>
		</li>


	</div>
	<?php endforeach;
	wp_reset_postdata();
	?>
</div>
</section>

<!-- BOARD DIRECTORS -->

<section class="profile-box">

<div class="profile-box-preview profile-box-preview-bd">
	<!-- <p>Test</p> -->
	<div class="preview-content-container-bd">
	<?php
			$args = array( 
				'posts_per_page' => 1, 
				'offset'=> 1, 
				'post_type' => 'profile', 
				'profile_type' => 'board directors',
			);
			$myposts = get_posts( $args );
			?>
				<?php 
		foreach ( $myposts as $post ) : setup_postdata( $post );
		if ( has_post_thumbnail() ) : ?>
				<h2>
		<?php the_title(); ?>
		</h2>
		<?php the_post_thumbnail( 'large' ); ?>
		<input data-id="<?php echo $post->ID; ?>" type="button" class="popup-profile-init" value="Learn More"/>
		<?php endif; ?>
		<?php endforeach;
		wp_reset_postdata();
		?>

	</div>

</div>

<div class="profile-container">
	<div class="profile-headline">
	<h1>Board Directors</h1>
	<p>We are a volunteer run organization working closely together to celebrate and amplify the Canadian youth conservation movement.</p>
			</div>
			<?php
				$args = array( 
					'posts_per_page' => 8, 
					'offset'=> 1, 
					'post_type' => 'profile', 
					'profile_type' => 'board directors',
				);
				$myposts = get_posts( $args );
				?>
			<?php 
			foreach ( $myposts as $post ) : setup_postdata( $post );
			if ( has_post_thumbnail() ) : 
			?>
				<div class="profile-content">

		<li>
			<a class="profile-picture profile-picture-bd" href="<?php the_permalink(); ?>" id="<?php echo $post->ID; ?>">			
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?></a>
			</li>
			
		</div>
	<?php endforeach;
	wp_reset_postdata();
	?>
</div>
</section>










	</div><!-- #primary -->
<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>