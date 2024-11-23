<?php
function sparktech_customize_services($wp_customize)
{
    // Add Services Section
    $wp_customize->add_section('services_section', [
        'title' => __('Services Section', 'sparktech'),
        'priority' => 50,
    ]);

    // Big Title
    $wp_customize->add_setting('services_big_title', [
        'default' => 'services',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('services_big_title', [
        'label' => __('Big Title', 'sparktech'),
        'section' => 'services_section',
        'type' => 'text',
    ]);

    // Title Tag
    $wp_customize->add_setting('services_title_tag', [
        'default' => 'What we offer',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('services_title_tag', [
        'label' => __('Title Tag', 'sparktech'),
        'section' => 'services_section',
        'type' => 'text',
    ]);

    // Main Title
    $wp_customize->add_setting('services_main_title', [
        'default' => 'We provide <span>top-Notch Services for you</span>',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('services_main_title', [
        'label' => __('Main Title', 'sparktech'),
        'section' => 'services_section',
        'type' => 'textarea',
    ]);

    // Button Text
    $wp_customize->add_setting('services_button_text', [
        'default' => 'View all',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('services_button_text', [
        'label' => __('Button Text', 'sparktech'),
        'section' => 'services_section',
        'type' => 'text',
    ]);

    // Button URL
    $wp_customize->add_setting('services_button_url', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('services_button_url', [
        'label' => __('Button URL', 'sparktech'),
        'section' => 'services_section',
        'type' => 'url',
    ]);

    // Number of Services to Display
    $wp_customize->add_setting('services_count', [
        'default' => 6,
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control('services_count', [
        'label' => __('Number of Services to Display', 'sparktech'),
        'section' => 'services_section',
        'type' => 'number',
        'input_attrs' => [
            'min' => 1,
            'max' => 20,
        ],
    ]);

    // Loop through services
    for ($i = 1; $i <= 20; $i++) {
        // Service Title
        $wp_customize->add_setting("service_{$i}_title", [
            'default' => "Service Title {$i}",
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("service_{$i}_title", [
            'label' => __("Service {$i} Title", 'sparktech'),
            'section' => 'services_section',
            'type' => 'text',
        ]);

        // Service URL
        $wp_customize->add_setting("service_{$i}_url", [
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("service_{$i}_url", [
            'label' => __("Service {$i} URL", 'sparktech'),
            'section' => 'services_section',
            'type' => 'url',
        ]);

        // Service Image
        $wp_customize->add_setting("service_{$i}_image", [
            'default' => get_template_directory_uri() . "/assets/images/service-image{$i}-home-2.png",
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "service_{$i}_image", [
            'label' => __("Service {$i} Image", 'sparktech'),
            'section' => 'services_section',
            'settings' => "service_{$i}_image",
        ]));

        // Service Description
        $wp_customize->add_setting("service_{$i}_description", [
            'default' => 'This is a sample description.',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("service_{$i}_description", [
            'label' => __("Service {$i} Description", 'sparktech'),
            'section' => 'services_section',
            'type' => 'textarea',
        ]);
    }
}
add_action('customize_register', 'sparktech_customize_services');
