<?php


function popper_child_setup() {

	//Prepare theme for translation
	load_theme_textdomain('popper-child', get_stylesheet_directory() . '/languages' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => esc_html__( 'Footer Menu', 'popper-child' ),
	) );
}
add_action('after_setup_theme', 'popper_child_setup');

function popper_child_script() {
	wp_enqueue_style( 'popper-child-fonts', 'https://fonts.googleapis.com/css?family=Roboto');
}
add_action( 'wp_enqueue_scripts', 'popper_child_script');