<?php
//Theme css and Jquery calling
function wp_css_js_file_calling() {
    wp_enqueue_style( 'mt-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all' );
    wp_register_style( 'menu', get_template_directory_uri() . '/css/wordpress menu style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );
    wp_enqueue_style( 'menu' );
    //google font
    wp_enqueue_style( 'google-front', 'https://fonts.googleapis.com/css2?family=Fira+Sans&family=Oswald&display=swap" rel="stylesheet', false );

    //jquery
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.2', 'true' );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'main' );
}

add_action( 'wp_enqueue_scripts', 'wp_css_js_file_calling' );