<?php
function sparktech_theme_setup() {
    // Enable theme support for title-tag and post-thumbnails
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'sparktech'),
    ));
}
add_action('after_setup_theme', 'sparktech_theme_setup');

function sparktech_enqueue_scripts() {
    // Enqueue styles and scripts from assets folder
    wp_enqueue_style('sparktech-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('sparktech-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'sparktech_enqueue_scripts');
?>