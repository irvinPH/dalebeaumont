<?php
/**
 * Neat functions and definitions
 *
 * @package dale_beaumont
 */

/**
 * Paths
 *
 * @since  1.0
 */
if ( !defined( 'DB_THEME_DIR' ) ){
    define('DB_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}
// Include Folders
include( DB_THEME_DIR . '/inc/init.php' );
include( DB_THEME_DIR . '/inc/widgets.php' );
include( DB_THEME_DIR . '/inc/customizer.php' );

// Actions and Filters
add_action( 'after_setup_theme', 'dale_beaumont_setup' );
add_action( 'wp_enqueue_scripts', 'dale_beaumont_scripts');
add_action( 'wp_enqueue_scripts', 'dale_beaumont_styles'); 
add_action( 'wp_enqueue_scripts', 'dale_beaumont_enqueue_comments_reply' );
add_action( 'widgets_init', 'dale_beaumont_register_widgets' );
add_action( 'customize_register', 'dale_beaumont_register_custiomizer_controls' );



// Shortcodes
