<?php
function sparktech_customize_hero($wp_customize)
{
    // Add Hero Section
    $wp_customize->add_section('hero_section', [
        'title' => __('Hero Section', 'sparktech'),
        'priority' => 30,
        'description' => __('Customize the hero section content (text, images, and icons).', 'sparktech'),
    ]);


    // Hero Title
    $wp_customize->add_setting('hero_title', [
        'default' => 'Crafting Creativity',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_title', [
        'label' => __('Hero Title', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    // Add Setting for Hero Title Span
    $wp_customize->add_setting('hero_title_span', [
        'default' => 'Creativity',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    // Add Control for Hero Title Span
    $wp_customize->add_control('hero_title_span_control', [
        'label' => __('Title Highlight (Span)', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_title_span',
        'type' => 'text',
    ]);

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', [
        'default' => 'We are a passionate collective of creatives, designers, and strategists...',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_subtitle', [
        'label' => __('Hero Subtitle', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ]);


    // Add Setting for Hero Button Text
    $wp_customize->add_setting('hero_button_text', [
        'default' => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ]);

    // Add Control for Hero Button Text
    $wp_customize->add_control('hero_button_text_control', [
        'label' => __('Button Text', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_button_text',
        'type' => 'text',
    ]);

    // Add Setting for Hero Button Link
    $wp_customize->add_setting('hero_button_link', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ]);

    // Add Control for Hero Button Link
    $wp_customize->add_control('hero_button_link_control', [
        'label' => __('Button Link', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_button_link',
        'type' => 'url',
    ]);


    // Hero Background Image
    $wp_customize->add_setting('hero_bg_image', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_image', [
        'label' => __('Hero Background Image', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_bg_image',
    ]));

    // Left Image (imgleft)
    $wp_customize->add_setting('imgleft', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgleft', [
        'label' => __('Left Image', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'imgleft',
    ]));

    // Right Image (imgright)
    $wp_customize->add_setting('imgright', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgright', [
        'label' => __('Right Image', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'imgright',
    ]));

}

add_action('customize_register', 'sparktech_customize_hero');


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


