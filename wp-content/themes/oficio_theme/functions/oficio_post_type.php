<?php

// Register Custom Post Type
function oficio_post_type() {

	$labels = array(
		'name'                  => _x( 'Oficios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Oficio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Oficios', 'text_domain' ),
		'name_admin_bar'        => __( 'Oficios', 'text_domain' ),
		'archives'              => __( 'Oficio Archives', 'text_domain' ),
		'attributes'            => __( 'Oficio Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Oficio:', 'text_domain' ),
		'all_items'             => __( 'All Oficios', 'text_domain' ),
		'add_new_item'          => __( 'Add New Oficios', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Oficio', 'text_domain' ),
		'edit_item'             => __( 'Edit Oficio', 'text_domain' ),
		'update_item'           => __( 'Update Oficio', 'text_domain' ),
		'view_item'             => __( 'View Oficio', 'text_domain' ),
		'view_items'            => __( 'View Oficios', 'text_domain' ),
		'search_items'          => __( 'Search Oficio', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Oficio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Oficio', 'text_domain' ),
		'items_list'            => __( 'Oficios list', 'text_domain' ),
		'items_list_navigation' => __( 'Oficios list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Oficios list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Oficio', 'text_domain' ),
		'description'           => __( 'Las categorías de oficio que puedes encontrar', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'oficio', $args );

}
add_action( 'init', 'oficio_post_type', 0 );

 ?>
