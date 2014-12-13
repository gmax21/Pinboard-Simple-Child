<?php
add_action( 'wp_enqueue_scripts', 'get_that_parent_theme_css' );
function get_that_parent_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}