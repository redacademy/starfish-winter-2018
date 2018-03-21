<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Profile Post Type

function profile_post_type() {

	$labels = array(
		'name'                  => 'Profiles',
		'singular_name'         => 'Profile',
		'menu_name'             => 'Profiles',
		'name_admin_bar'        => 'Profiles',
		'archives'              => 'Profile Archives',
		'attributes'            => 'Profile Attributes',
		'parent_item_colon'     => 'Parent Profile:',
		'all_items'             => 'All Profiles',
		'add_new_item'          => 'Add New Profile',
		'add_new'               => 'Add New',
		'new_item'              => 'New Profile',
		'edit_item'             => 'Edit Profile',
		'update_item'           => 'Update Profile',
		'view_item'             => 'View Profile',
		'view_items'            => 'View Profiles',
		'search_items'          => 'Search Profile',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Profile',
		'uploaded_to_this_item' => 'Uploaded to this Profile',
		'items_list'            => 'Profiles list',
		'items_list_navigation' => 'Profiles list navigation',
		'filter_items_list'     => 'Filter Profiles list',
	);
	$args = array(
		'label'                 => 'Profile',
		'description'           => 'Profile Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'     		=> true,

	);
	register_post_type( 'profile', $args );

}
add_action( 'init', 'profile_post_type', 0 );

// Register Entry Post Type

function entry_post_type() {

	$labels = array(
		'name'                  => 'Entries',
		'singular_name'         => 'Entry',
		'menu_name'             => 'Entry',
		'name_admin_bar'        => 'Entry',
		'archives'              => 'Entry Archives',
		'attributes'            => 'Entry Attributes',
		'parent_item_colon'     => 'Parent Entry:',
		'all_items'             => 'All Entries',
		'add_new_item'          => 'Add New Entry',
		'add_new'               => 'Add New',
		'new_item'              => 'New Entry',
		'edit_item'             => 'Edit Entry',
		'update_item'           => 'Update Entry',
		'view_item'             => 'View Entry',
		'view_items'            => 'View Entries',
		'search_items'          => 'Search Entry',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Entry',
		'uploaded_to_this_item' => 'Uploaded to this Entry',
		'items_list'            => 'Entries list',
		'items_list_navigation' => 'Entries list navigation',
		'filter_items_list'     => 'Filter Entries list',
	);
	$args = array(
		'label'                 => 'Entry',
		'description'           => 'Entry Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'			=> array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-feedback',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'entry', $args );

}
add_action( 'init', 'entry_post_type', 0 );