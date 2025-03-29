<?php

function my_tailwind_enqueue() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/dist/output.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_tailwind_enqueue');


add_theme_support( 'title-tag' );
