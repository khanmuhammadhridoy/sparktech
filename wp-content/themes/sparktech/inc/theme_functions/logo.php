<?php
// Register Customizer Options for Logo Upload
function sparktech_customize_logo($wp_customize)
{
    $wp_customize->add_section('sparktech_logo_area', [
        'title' => __('Logo Area', 'sparktech'),
        'description' => 'Customize the Logo Here',
    ]);

    $wp_customize->add_setting('sparktech_logo', [
        'default' => get_template_directory_uri() . '/assets/images/logo.png', // Default logo URL
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sparktech_logo', [
        'label' => __('Logo Upload', 'sparktech'),
        'settings' => 'sparktech_logo',
        'section' => 'sparktech_logo_area',
    ]));
}
add_action('customize_register', 'sparktech_customize_logo');