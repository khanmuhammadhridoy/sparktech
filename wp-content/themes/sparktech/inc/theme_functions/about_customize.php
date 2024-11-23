<?php

function theme_customizer_about($wp_customize)
{
    // Section: About Section
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'yourtheme'),
        'priority' => 30,
    ));

    // Setting: About Image
    $wp_customize->add_setting('about_image', array(
        'default' => get_template_directory_uri() . '/assets/images/about.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __('About Image', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_image',
    )));

    // Setting: About Image Alt Text
    $wp_customize->add_setting('about_image_alt', array(
        'default' => __('About Us', 'yourtheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_image_alt', array(
        'label' => __('Image Alt Text', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_image_alt',
        'type' => 'text',
    ));

    // Setting: About Title Tag
    $wp_customize->add_setting('about_title_tag', array(
        'default' => __('Who We Are', 'yourtheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_title_tag', array(
        'label' => __('Title Tag', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_title_tag',
        'type' => 'text',
    ));

    // Setting: About Heading
    $wp_customize->add_setting('about_heading', array(
        'default' => __('We are <span>Creative Digital Agency</span>', 'yourtheme'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_heading', array(
        'label' => __('Heading', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_heading',
        'type' => 'textarea',
    ));

    // Setting: About Description
    $wp_customize->add_setting('about_description', array(
        'default' => __('We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable brand experiences.', 'yourtheme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_description', array(
        'label' => __('Description', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_description',
        'type' => 'textarea',
    ));

    // Setting: About List
    $wp_customize->add_setting('about_list', array(
        'default' => __('Unleashing digital creativity.|Crafting your brand\'s digital story.|Innovation meets creativity.', 'yourtheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_list', array(
        'label' => __('List Items (separated by |)', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_list',
        'type' => 'textarea',
    ));

    // Setting: Button Text
    $wp_customize->add_setting('about_button_text', array(
        'default' => __('Read more', 'yourtheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_button_text', array(
        'label' => __('Button Text', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_button_text',
        'type' => 'text',
    ));

    // Setting: Button Link
    $wp_customize->add_setting('about_button_link', array(
        'default' => __('#', 'yourtheme'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('about_button_link', array(
        'label' => __('Button Link', 'yourtheme'),
        'section' => 'about_section',
        'settings' => 'about_button_link',
        'type' => 'url',
    ));
}
add_action('customize_register', 'theme_customizer_about');
