<?php
// Enqueue stylesheets
function sparktech_enqueue_styles()
{
    // Enqueue the main stylesheet (style.css in the theme root folder)
    wp_enqueue_style('sparktech-style', get_stylesheet_uri());

    // Enqueue a custom stylesheet
    wp_enqueue_style('sparktech-custom-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'sparktech_enqueue_styles');
