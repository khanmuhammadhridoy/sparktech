<?php

//default theme function
include_once("inc/default.php");

//theme function css and js enqueue
include_once("inc/enqueue.php");

//theme function
include_once("inc/theme_functions/logo.php");
include_once("inc/theme_functions/header_button.php");
include_once("inc/theme_functions/sparktech_customize_hero.php");


// include_once("inc/theme_functions/customizer.php");
// include_once("inc/theme_functions/sparktech_customize_css.php");



//menu reg
include_once("inc/menu_reg.php");

//elementor add
// include_once("inc/elementor_add.php");



// Add settings and controls to the Customizer
add_action('customize_register', function ($wp_customize) {
    // Section for Social Media
    $wp_customize->add_section('hero_section', [
        'title' => __('Hero Section', 'sparktech'),
        'description' => __('Settings for social media icons in the hero section.', 'sparktech'),
        'priority' => 30,
    ]);

    // Social Media Platforms
    $social_media = [
        'facebook' => __('Facebook', 'sparktech'),
        'twitter' => __('Twitter', 'sparktech'),
        'linkedin' => __('LinkedIn', 'sparktech'),
        'instagram' => __('Instagram', 'sparktech'),
        'youtube' => __('YouTube', 'sparktech'),
    ];

    foreach ($social_media as $key => $label) {
        // Link Setting
        $wp_customize->add_setting("hero_{$key}_link", [
            'default' => '#',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ]);

        $wp_customize->add_control("hero_{$key}_link", [
            'label' => sprintf(__('%s Link', 'sparktech'), $label),
            'section' => 'hero_section',
            'type' => 'url',
        ]);

        // Icon Class Setting
        $wp_customize->add_setting("hero_{$key}_icon", [
            'default' => "fa-brands fa-{$key}", // Default FontAwesome class
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        $wp_customize->add_control("hero_{$key}_icon", [
            'label' => sprintf(__('%s Icon Class', 'sparktech'), $label),
            'section' => 'hero_section',
            'type' => 'text',
        ]);
    }
});