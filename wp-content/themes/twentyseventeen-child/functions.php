<?php
/**
 * Twentyseventeen-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twentyseventeen-child
 */

add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function parent_theme_enqueue_styles() {

	$parent_style = 'twentyseventeen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyseventeen-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
        wp_get_theme()->get('Version')
	);
	wp_enqueue_style( 'block-style', 
    get_stylesheet_directory_uri() . '/style-block.css', 
    '', 
    NULL, 
    'all'
    );
}
