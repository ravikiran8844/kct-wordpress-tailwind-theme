<?php

function my_tailwind_enqueue() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/dist/output.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_tailwind_enqueue');


add_theme_support( 'title-tag' );


function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
