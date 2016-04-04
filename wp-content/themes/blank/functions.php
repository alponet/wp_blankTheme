<?php
/**
 * Theme functions and definitions
 *
 */

show_admin_bar(false);

function theme_add_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.2.min.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'wigwam-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_add_styles' );
