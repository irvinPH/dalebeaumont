<?php

/**
 * Register theme widget areas.
 *
 * @since  1.0
 */
function dale_beaumont_register_widgets() {
	//Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'dale_beaumont' ),
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header class="widget__header"><h1 class="widget__title">',
		'after_title'   => '</h1></header>',
	) );

	//Footer
	register_sidebar( array(
		'name'          => __( 'Footer', 'dale_beaumont' ),
		'id'            => 'footer',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header class="widget__header"><h1 class="widget__title">',
		'after_title'   => '</h1></header>',
	) );
}
