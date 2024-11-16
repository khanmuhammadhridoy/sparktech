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
