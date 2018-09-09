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