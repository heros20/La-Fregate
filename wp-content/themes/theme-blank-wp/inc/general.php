<?php
/**
 * blank_1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank_1
 */

if ( ! defined( '_S_VERSION' ) ) {

	define( '_S_VERSION', '1.0.1' );
}

if ( ! function_exists( 'blank_1_setup' ) ) :
	
	function blank_1_setup() {
		load_theme_textdomain( 'blank_1', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'blank_1_setup' );


function blank_1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blank_1_content_width', 640 );
}
add_action( 'after_setup_theme', 'blank_1_content_width', 0 );


function blank_1_scripts() {
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
		wp_enqueue_style('style-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
		wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);
				
	
		wp_enqueue_script( 'modernizer-js',get_template_directory_uri().'/assets/js/modernizer.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'all-js',get_template_directory_uri().'/assets/js/all.js', array(), _S_VERSION, true );

		wp_enqueue_script( 'bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), _S_VERSION, true );

		wp_enqueue_script( 'custom-js',get_template_directory_uri().'/assets/js/custom.js', array(), _S_VERSION, true );


	
	
}
add_action( 'wp_enqueue_scripts', 'blank_1_scripts' );