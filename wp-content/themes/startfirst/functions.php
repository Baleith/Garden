<?php

function custom_function() {
//code
}

// Add scripts and stylesheets
function startwordpress_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}


// WordPress Titles
add_theme_support( 'title-tag' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );