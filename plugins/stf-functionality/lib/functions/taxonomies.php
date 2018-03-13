<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Profile Type Taxonomy

function profile_type_taxonomy() {

	$labels = array(
		'name'                       => 'Profile Types',
		'singular_name'              => 'Profile Type',
		'menu_name'                  => 'Profile Types',
		'all_items'                  => 'All Profile Types',
		'parent_item'                => 'Parent Profile Type',
		'parent_item_colon'          => 'Parent Profile Type:',
		'new_item_name'              => 'New Profile Type Name',
		'add_new_item'               => 'Add New Profile Type',
		'edit_item'                  => 'Edit Profile Type',
		'update_item'                => 'Update Profile Type',
		'view_item'                  => 'View Profile Type',
		'separate_items_with_commas' => 'Separate Profile Types with commas',
		'add_or_remove_items'        => 'Add or remove Profile Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Profile Types',
		'search_items'               => 'Search Profile Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Profile Types',
		'items_list'                 => 'Profile Types list',
		'items_list_navigation'      => 'Profile Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'profile_type', array( 'profile' ), $args );

}
add_action( 'init', 'profile_type_taxonomy', 0 );