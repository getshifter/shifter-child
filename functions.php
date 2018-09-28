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
    wp_enqueue_script( 'slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'slick_scripts');

function slick_styles() {
    wp_enqueue_style( 'slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
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

// Remove WordPress Added Emoji Scripts
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove WordPress Dashicons
function remove_WordPress_Dashicons() {
    if (!is_user_logged_in()) {
        wp_deregister_style( 'dashicons' ); 
    }
}

add_action( 'wp_head',     'remove_WordPress_Dashicons', 100 );

// Use Google jQuery
function replace_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4');
    wp_enqueue_script('jquery');
}

add_action('init', 'replace_jquery');

// Remove Divi Builder Scripts
function deregister_divi_scripts() {
    if (!is_admin()) {
        wp_deregister_script('et-builder-modules-script');
        wp_deregister_script('magnific-popup');
        wp_deregister_script('waypoints');
        wp_deregister_script('divi-fitvids');
        wp_deregister_script('divi-custom-script');
        wp_deregister_script('et-builder-modules-global-functions-script');
        wp_deregister_script('et-jquery-touch-mobile');
    }
}

// add_action('wp_footer', 'deregister_divi_scripts');

// Remove Divi Builder Styles
function deregister_divi_styles() {
    if (!is_admin()) {
        wp_deregister_style('magnific-popup');
    }
}

// add_action('wp_head', 'deregister_divi_styles');

// Micromodal
// function micromodal() {
//     wp_enqueue_script( 'micromodal', 'https://unpkg.com/micromodal@0.3.2/dist/micromodal.min.js');
// }

// add_action('wp_enqueue_scripts', 'micromodal');