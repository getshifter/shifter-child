<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

// Disable TablePress CSS
add_filter( 'tablepress_use_default_css', '__return_false' );