<?php

function celltheme_script_enqueue() {
    wp_enqueue_style('resetstyle', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/celltheme.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/celltheme.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'celltheme_script_enqueue');



function celltheme_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary header navigation');
}

add_action('init', 'celltheme_theme_setup');

