<?php
/**
 * Template Name: Entry Archive
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php 
$post_page_id = get_option( 'page_for_posts' );
$post_page_banner = (CFS()->get('banner_image', $post_page_id)); 
?>

		<?php if ( have_posts() ) : ?>
			<header class="entry-header" style="background: url(<?php echo esc_url($post_page_banner); ?>); width: 100%; height: 100vh; background-size: cover; margin-top:60px; ">
				<?php single_post_title( '<h1 class="entry-title">', '</h1>' ); ?>	
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header><!-- .entry-header -->
<div class="archive-title-head">
<h3>Latest from our Journal<h3>
</div>
	<div class="archive-container">
	<?php
			$args = array( 
					'post_type' => 'post',
					'posts_per_page' => 7, 
					);
			$myposts = get_posts($args);
			foreach ( $myposts as $post ) : setup_postdata( $post ); 
		?>
		<div class="archive-story-container">
		<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>"><?php 	
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
			}
			the_excerpt(); ?></a>
		</div>
			<?php endforeach; 
				wp_reset_postdata();?>
		<!-- second journa -->

      	<?php
			$args = array( 
					'post_type' => 'entry',
					'posts_per_page' => 3, 
					);
			$myposts = get_posts($args);
			foreach ( $myposts as $post ) : setup_postdata( $post ); 
		?>

		<div class="archive-story-container">
          <h4><?php the_title(); ?></h4>
		  <a href="<?php the_permalink(); ?>"><?php 	
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
			}
			the_excerpt(); ?></a>
		</div>
			<?php endforeach; 
				wp_reset_postdata();?>
			<?php endif; ?>
	</div>



		<section class="archive-box-area">

			<div class="content-box">
		
				<div class="content-box-header">
					<h2>Want to contribute to our Journal and get your story published?</h2>
				</div><!-- .content-box-header -->

				<div class="content-box-content">
					<a class="btn-transparent" href="<?php echo esc_url(get_permalink(get_page_by_path( 'submit' ) ) ); ?>">Add your voice
						<span class="screen-reader-text"><?php echo esc_html( 'Add your voice' ); ?></span>
					</a><!-- .content-box-button -->
				</div><!-- .content-box-content -->
			
			</div>	
		
		</section><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part( 'template-parts/content', 'donation' ); ?>
<?php get_footer(); ?>
