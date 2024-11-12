<?php
// Enqueue main and custom stylesheets
function sparktech_enqueue_styles()
{
    // Enqueue the main stylesheet (style.css in the theme root folder)
    wp_enqueue_style('sparktech-style', get_stylesheet_uri());

    // Enqueue a custom stylesheet located at /css/custom-style.css
    wp_enqueue_style('sparktech-custom-style', get_template_directory_uri() . '/css/custom-style.css');
}
add_action('wp_enqueue_scripts', 'sparktech_enqueue_styles');

// Theme setup options
function sparktech_theme_setup()
{
    // Enable dynamic title tags support (WordPress manages the <title> tag)
    add_theme_support('title-tag');

    // Enable featured images on posts and pages
    add_theme_support('post-thumbnails');

    // Enable support for a custom logo, with flexible dimensions
    add_theme_support('custom-logo', array(
        'height' => 100,    // Default height in pixels
        'width' => 400,    // Default width in pixels
        'flex-height' => true,   // Allows custom height adjustment
        'flex-width' => true,   // Allows custom width adjustment
    ));

    // Enable custom header for additional control (optional for tagline styling)
    add_theme_support('custom-header', array(
        'default-text-color' => '000',  // Default color for tagline
        'width' => 1200,   // Default header width
        'height' => 280,    // Default header height
        'flex-height' => true,   // Allows custom height adjustment
    ));
}
add_action('after_setup_theme', 'sparktech_theme_setup');

// Add a favicon to the site
function sparktech_add_favicon()
{
    // Link to favicon (make sure favicon.ico is in the images folder in your theme)
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon.ico" type="image/x-icon">';
}
add_action('wp_head', 'sparktech_add_favicon');

// Function to display the site logo, title, and tagline in the theme
function sparktech_display_site_info()
{
    // Check if a custom logo is set
    if (function_exists('the_custom_logo') && has_custom_logo()) {
        // Display the custom logo
        the_custom_logo();
    } else {
        // If no logo, display the site title as a fallback
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    }

    // Display the site tagline (description) under the logo or title
    echo '<p>' . get_bloginfo('description') . '</p>';
}
