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

    // Social Media Settings for Icons & Links
    // Facebook Icon & Link
    $wp_customize->add_setting('hero_facebook_icon', [
        'default' => get_template_directory_uri() . '/assets/images/facebook-icon.png', // Default icon
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_facebook_icon', [
        'label' => __('Facebook Icon', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_facebook_icon',
    ]));
    $wp_customize->add_setting('hero_facebook_link', [
        'default' => '#', // Default link
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_facebook_link', [
        'label' => __('Facebook Link', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);

    // Twitter Icon & Link
    $wp_customize->add_setting('hero_twitter_icon', [
        'default' => get_template_directory_uri() . '/assets/images/twitter-icon.png', // Default icon
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_twitter_icon', [
        'label' => __('Twitter Icon', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_twitter_icon',
    ]));
    $wp_customize->add_setting('hero_twitter_link', [
        'default' => '#', // Default link
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_twitter_link', [
        'label' => __('Twitter Link', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);

    // LinkedIn Icon & Link
    $wp_customize->add_setting('hero_linkedin_icon', [
        'default' => get_template_directory_uri() . '/assets/images/linkedin-icon.png', // Default icon
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_linkedin_icon', [
        'label' => __('LinkedIn Icon', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_linkedin_icon',
    ]));
    $wp_customize->add_setting('hero_linkedin_link', [
        'default' => '#', // Default link
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_linkedin_link', [
        'label' => __('LinkedIn Link', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);

    // Instagram Icon & Link
    $wp_customize->add_setting('hero_instagram_icon', [
        'default' => get_template_directory_uri() . '/assets/images/instagram-icon.png', // Default icon
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_instagram_icon', [
        'label' => __('Instagram Icon', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_instagram_icon',
    ]));
    $wp_customize->add_setting('hero_instagram_link', [
        'default' => '#', // Default link
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_instagram_link', [
        'label' => __('Instagram Link', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);

    // YouTube Icon & Link
    $wp_customize->add_setting('hero_youtube_icon', [
        'default' => get_template_directory_uri() . '/assets/images/youtube-icon.png', // Default icon
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_youtube_icon', [
        'label' => __('YouTube Icon', 'sparktech'),
        'section' => 'hero_section',
        'settings' => 'hero_youtube_icon',
    ]));
    $wp_customize->add_setting('hero_youtube_link', [
        'default' => '#', // Default link
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('hero_youtube_link', [
        'label' => __('YouTube Link', 'sparktech'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);
}

add_action('customize_register', 'sparktech_customize_hero');
