<?php

if ( ! function_exists( 'dale_beaumont_setup' ) ) :

	function dale_beaumont_setup() {


		// This theme supports the Jetpack site logo.
		add_theme_support( 'site-logo' );

		// Enable support for Post Thumbnails, and declare a size.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 780, 350, true );

		// This theme supports the title tag.
		add_theme_support( 'title-tag' );


		register_nav_menus( array(
			'navbar' => esc_html__( 'Top Menu', 'dale_beaumont' ),
			'footer' => esc_html__( 'Footer Menu', 'dale_beaumont' ),
            'social' => esc_html__( 'Social Media Menu', 'dale_beaumont' ),
			'fine'   => esc_html__( 'fine', 'dale_beaumont' ),
		) );



		add_theme_support( 'html5', array(
			'search-form', 
			'comment-form', 
			'comment-list', 
			'gallery', 
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'neat_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add excerpt support to pages
		add_post_type_support( 'page', 'excerpt' );
	}
endif; 


function dale_beaumont_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	//wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');


        /**
         *
         * Minified and concatenated scripts
         *
         *     @vendors     plugins.min,js
         *     @custom      scripts.min.js
         *
         *     Order is important
         *
         */
        wp_deregister_script('jquery');
		wp_deregister_script('jquery-migrate');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', true); // Enqueue it!
        wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.0.js', array('jquery'), '', true); // Enqueue it!

        //wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', true); // Enqueue it!
        wp_register_script('db_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js', array(), '', true); // Custom scripts
        wp_enqueue_script('db_vendorsJs'); // Enqueue it!

        wp_register_script('db_customJs', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '', true); // Custom scripts
        wp_enqueue_script('db_customJs'); // Enqueue it!

    }

}

function dale_beaumont_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    //wp_register_style('aa_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_style('aa_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('aa_style'); // Enqueue it!

}

function dale_beaumont_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


function dale_beaumont_body_classes( $classes ) {
    if( ! is_front_page() ) {
        $classes[] = 'not-home';
    }

    if( is_singular() ) {
        $classes[] = 'singular';
    }

    if( is_page_template('full-width-module-page.php') ) {
        $classes[] = 'module-page';
    }

    if( is_archive() || is_search() || is_home() ) {
        $classes[] = 'list-view';
    }

    return $classes;
}
add_filter('body_class', 'dale_beaumont_body_classes');
