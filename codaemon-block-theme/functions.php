<?php

// ENQUE GENERAL SCRIPTS
function otg_block_theme_styles() {
	wp_enqueue_style('otg-main-style', get_stylesheet_uri(),	[], '1.00');
	// wp_enqueue_script( 'otg-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js?v=1', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'otg_block_theme_styles' );


// CUSTOM FONT SIZES
// function register_custom_image_sizes() {
// 	add_image_size( 'standing', 1000, 1500, array( 'center', 'center' ) );
// }
// add_action( 'after_setup_theme', 'register_custom_image_sizes' );


// COMING SOON
// function redirect_to_specific_page() {
// 	if(!is_user_logged_in() && !is_page( 'coming-soon' )) {
// 	  wp_redirect( '/coming-soon/', 302 );
// 	  exit;
// 	}
// }
// add_action( 'template_redirect', 'redirect_to_specific_page' );


/* CUSTOM BLOCKS */
function registering_acf_blocks() {
	register_block_type( __DIR__ . '/blocks/example_rename' );
}
add_action( 'init', 'registering_acf_blocks' );


function load_gasp_scripts()
{
	
	wp_enqueue_script('jquery-min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js','','', false);
	if ( is_home() || is_front_page() ):
		wp_enqueue_script('gasp-js','https://unpkg.co/gsap@3/dist/gsap.min.js','','', false);
		wp_enqueue_script('gasp-scroll','https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js','','', false);
		wp_enqueue_script('gasp-script',get_stylesheet_directory_uri() . '/assets/js/main-gasp.js');
	endif;
	wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/custom-script.js');
}
add_action( 'wp_enqueue_scripts',  'load_gasp_scripts');


/* Register block script */
function cwp_register_block_script() {
	wp_register_script( 'example_rename', get_template_directory_uri() . '/blocks/slider-locations/slider-locations.js', [ 'jquery', 'acf' ] );
	// wp_register_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), true );
	// wp_register_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
}
add_action( 'init', 'cwp_register_block_script' );

add_image_size( 'home-about', 1045, 586, array( 'center', 'center' ));
add_theme_support( 'custom-header' );


// Custom testimonial block 
function wp_register_acf_blocks() {
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type( __DIR__ . '/blocks/testimonial' );
}
// Here we call our tt3child_register_acf_block() function on init.
add_action( 'acf/init', 'wp_register_acf_blocks' );

add_action( 'customize_register', '__return_true' );




