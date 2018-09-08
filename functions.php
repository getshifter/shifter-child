<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

//Remove JQuery migrate
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
    $script = $scripts->registered['jquery'];
    
    if ( $script->deps ) { // Check whether the script has any dependencies
    $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
    }
    }
    }
    
    add_action( 'wp_default_scripts', 'remove_jquery_migrate' );