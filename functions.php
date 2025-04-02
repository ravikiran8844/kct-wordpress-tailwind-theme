<?php

add_theme_support( 'title-tag' );


// function my_theme_enqueue_styles() {
//     wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), '1.0', 'all');
// }
// add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function custom_favicon() {
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/favicon.png">';
}
add_action('wp_head', 'custom_favicon');



function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), filemtime(get_template_directory() . '/dist/output.css'), 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


