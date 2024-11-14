<?php

// Theme Function
// Register Customizer Options for Logo Upload
function sparktech_customize_register($wp_customize)
{
    // Add a section for the header area in the Customizer
    $wp_customize->add_section('sparktech_header_area', [
        'title' => __('Header Area', 'sparktech'),
        'description' => 'Customize The Header Here',
    ]);

    // Add a setting for the custom logo
    $wp_customize->add_setting('sparktech_logo', [
        'default' => get_template_directory_uri() . '/assets/images/logo.png', // Default logo URL
    ]);

    // Add a control for the logo upload using the image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sparktech_logo', [
        'label' => __('Logo Upload', 'sparktech'),
        'settings' => 'sparktech_logo',
        'section' => 'sparktech_header_area',
    ]));
}
add_action('customize_register', 'sparktech_customize_register');
