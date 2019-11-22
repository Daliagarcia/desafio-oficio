<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'categories'	=> __( 'Tamaño personalizado las categorías' ),
		'person'	=> __( 'Tamaño personalizado las personas' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );
	add_image_size( 'categories', 250, 500, true );
	add_image_size( 'person', 300, 300, true );		

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
