<?php
function sparktech_customize_footer($wp_customize)
{
    // Add Footer Section
    $wp_customize->add_section('footer_section', [
        'title' => __('Footer Section', 'sparktech'),
        'priority' => 60,
    ]);

    // Background Image for "Get in Touch"
    $wp_customize->add_setting('footer_bg_image', [
        'default' => get_template_directory_uri() . '/assets/images/get-in-touch-bg.png',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_bg_image', [
        'label' => __('Footer Background Image', 'sparktech'),
        'section' => 'footer_section',
        'settings' => 'footer_bg_image',
    ]));

    // "Get in Touch" Text
    $wp_customize->add_setting('footer_get_in_touch_text', [
        'default' => 'Get in touch',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_get_in_touch_text', [
        'label' => __('Get in Touch Text', 'sparktech'),
        'section' => 'footer_section',
        'type' => 'text',
    ]);

    // "Get in Touch" Link
    $wp_customize->add_setting('footer_get_in_touch_link', [
        'default' => home_url('/contact'),
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_get_in_touch_link', [
        'label' => __('Get in Touch Link', 'sparktech'),
        'section' => 'footer_section',
        'type' => 'url',
    ]);

    // SparkTech URL
    $wp_customize->add_setting('footer_sparktech_url', [
        'default' => home_url(),
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_sparktech_url', [
        'label' => __('SparkTech URL', 'sparktech'),
        'section' => 'footer_section',
        'type' => 'url',
    ]);

    // SparkTech Team URL
    $wp_customize->add_setting('footer_team_url', [
        'default' => home_url(),
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_team_url', [
        'label' => __('SparkTech Team URL', 'sparktech'),
        'section' => 'footer_section',
        'type' => 'url',
    ]);

    // Footer Text
    $wp_customize->add_setting('footer_text', [
        'default' => 'Crafted with ♥ by the SparkTech Team. Innovation Meets Excellence.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_text', [
        'label' => __('Footer Text', 'sparktech'),
        'section' => 'footer_section',
        'type' => 'text',
    ]);
}
add_action('customize_register', 'sparktech_customize_footer');
