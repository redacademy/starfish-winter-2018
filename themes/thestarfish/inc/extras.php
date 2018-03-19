<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package starfish_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function starfish_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'starfish_body_classes' );

/**
 * CUSTOM NAVIGATION
*/


class Description_Walker extends Walker_Nav_Menu {
	/**
	 * @param string $output
	 * @param WP_Post $item
	 * @param int $depth
	 * @param array $args
	 * @param int $id
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty ( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join(
			' '
			, apply_filters(
				'nav_menu_css_class'
				, array_filter( $classes ), $item
			)
		);
		! empty ( $class_names )
		and $class_names = ' class="' . esc_attr( $class_names ) . '"';
		$output .= "<li id='menu-item-$item->ID' $class_names>";
		$attributes = '';
		! empty( $item->attr_title )
		and $attributes .= ' title="' . esc_attr( $item->attr_title ) . '"';
		! empty( $item->target )
		and $attributes .= ' target="' . esc_attr( $item->target ) . '"';
		! empty( $item->xfn )
		and $attributes .= ' rel="' . esc_attr( $item->xfn ) . '"';
		! empty( $item->url )
		and $attributes .= ' href="' . esc_attr( $item->url ) . '"';
		// insert description for top level elements only
		// you may change this
		$description = ( ! empty ( $item->description ) and 1 == $depth )
			? '<small class="nav_desc">' . esc_attr( $item->description ) . '</small><a href="' . esc_attr( $item->url ) . '">Learn More</a>' : '';
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = $args->before
		               . "<a $attributes>"
		               . $args->link_before
		               . $title
		               . '</a> '
		               . $args->link_after
		               . $description
		               . $args->after;
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters(
			'walker_nav_menu_start_el'
			, $item_output
			, $item
			, $depth
			, $args
		);
	}
}

function starfish_change_header(){
	//Shows banners in the header on every page except: profiles, ...
	if(is_page_template('single-profile')){
		return;
	}

	$img_header_url = CFS()->get('banner_image');
	if(! $img_header_url){
		return;
	}
	$custom_css = "
	.entry-header {
			background: url('{$img_header_url}') no-repeat center bottom;
			background-size: 100%;
			width: 100%;
    		height: 100vh;
			color: #fff;
	}";
wp_add_inline_style( 'starfish-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'starfish_change_header' );
