<?php
// Styles
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

// Scripts
function child_theme_enqueue_scripts() {
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/scripts.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );

// Disable TablePress CSS
add_filter( 'tablepress_use_default_css', '__return_false' );


function slick_scripts() {
    wp_enqueue_script( 'slick_js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'slick_scripts');

function slick_styles() {
    wp_enqueue_style( 'slick_css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
}

add_action('wp_enqueue_scripts', 'slick_styles');

// Astroids
// function astroids_enqueue_scripts() {
//     wp_enqueue_script( 'astroids-scripts', get_stylesheet_directory_uri() . '/astroids.js', array( 'jquery' ));
// }

// add_action( 'wp_enqueue_scripts', 'astroids_enqueue_scripts' );