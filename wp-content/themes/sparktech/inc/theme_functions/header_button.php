<?php
// Register Customizer Options for Header Button
function sparktech_customize_header_button($wp_customize)
{
    $wp_customize->add_section('sparktech_header_button', [
        'title' => __('Header Button', 'sparktech'),
        'description' => 'Customize the Header Button Here',
    ]);

    // Button Text Setting
    $wp_customize->add_setting('header_button_text', [
        'default' => __('Let’s Talk', 'sparktech'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('header_button_text', [
        'label' => __('Button Text', 'sparktech'),
        'section' => 'sparktech_header_button',
        'type' => 'text',
    ]);

    // Button URL Setting
    $wp_customize->add_setting('header_button_url', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('header_button_url', [
        'label' => __('Button URL', 'sparktech'),
        'section' => 'sparktech_header_button',
        'type' => 'url',
    ]);
}
add_action('customize_register', 'sparktech_customize_header_button');