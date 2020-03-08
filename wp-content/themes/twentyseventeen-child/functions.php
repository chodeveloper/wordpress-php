<?php
/**
 * Twentyseventeen-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twentyseventeen-child
 */


/**
 * Enqueue scripts and styles.
 */
function childtheme_enqueue_styles() {

	$parent_style = 'twentyseventeen-style'; 

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
	if( is_front_page() ){
		wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );


/**
 * Custom video header
 */
function childtheme_setup() {
	remove_filter( 'header_video_settings', 'twentyseventeen_video_controls' );
}
add_action( 'after_setup_theme', 'childtheme_setup' );

function childtheme_video_controls( $settings ) {
	$settings['l10n']['play'] = __( 'Play', 'twentyseventeen-child' );
	$settings['l10n']['pause'] = __( 'Pause', 'twentyseventeen-child' );
	return $settings;
}
add_filter( 'header_video_settings', 'childtheme_video_controls' );

/**
 * Add more page sections
 */
add_filter( 'twentyseventeen_front_page_sections', function(){ return 6; } );

/**
 * Add more SVGs
 */
function childtheme_include_svg_icons() {
	// Define SVG sprite file.
	$custom_svg_icons = get_theme_file_path( '/assets/images/svg-custom-icons.svg' );

	// If it exists, include it.
	if ( file_exists( $custom_svg_icons ) ) {
	require_once( $custom_svg_icons );
	}
}
add_action( 'wp_footer', 'childtheme_include_svg_icons', 99999 );

function childtheme_social_links_icons( $social_links_icons ) {
	$social_links_icons['kickstarter.com'] = 'kickstarter';
	return $social_links_icons;
}
add_filter( 'twentyseventeen_social_links_icons', 'childtheme_social_links_icons' );

/**
 * Add a CSS Class to Menu Links
 */
function childtheme_theme_menu_class($atts, $item, $args) {
	if( is_array( $atts ) ) {
	$atts['class'] = 'nav-menu-scroll-down';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes','childtheme_theme_menu_class', 0,3);
