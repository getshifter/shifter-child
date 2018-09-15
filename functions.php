<?php
// Parent Styles
function parent_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles' );

// Child Styles
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

// Scripts
function child_theme_enqueue_scripts() {
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ));
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
function astroids_enqueue_scripts() {
    if(is_404()) {
        wp_enqueue_script( 'astroids-scripts', get_stylesheet_directory_uri() . '/assets/js/astroids.js', array( 'jquery' ));
    }
}

add_action( 'wp_enqueue_scripts', 'astroids_enqueue_scripts' );


// Remove Default Projects CPT
function custom_unregister_theme_post_types() {
    global $wp_post_types;

      if ( isset( $wp_post_types["project"] ) ) {
         unset( $wp_post_types[ "project" ] ); //UPDATED
      }

}

add_action( 'init', 'custom_unregister_theme_post_types', 20 );


// Micromodal
// function micromodal() {
//     wp_enqueue_script( 'micromodal', 'https://unpkg.com/micromodal@0.3.2/dist/micromodal.min.js');
// }

// add_action('wp_enqueue_scripts', 'micromodal');