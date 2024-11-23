<?php
add_action('customize_register', function ($wp_customize) {
    // Add Section for Portfolio
    $wp_customize->add_section('portfolio_section', [
        'title' => __('Portfolio Section', 'sparktech'),
        'description' => __('Edit the content of the Portfolio Section.', 'sparktech'),
        'priority' => 40,
    ]);

    // Title
    $wp_customize->add_setting('portfolio_title', [
        'default' => 'Take a Look at Some of Our Work',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('portfolio_title', [
        'label' => __('Title', 'sparktech'),
        'section' => 'portfolio_section',
        'type' => 'text',
    ]);

    // Subtitle
    $wp_customize->add_setting('portfolio_subtitle', [
        'default' => 'Step into Our World of Creativity and Innovation: Unveiling Our Portfolio, a Tapestry of Past Projects Reflecting Our Commitment to Excellence and Client Success',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('portfolio_subtitle', [
        'label' => __('Subtitle', 'sparktech'),
        'section' => 'portfolio_section',
        'type' => 'textarea',
    ]);

    // Portfolio Items
    for ($i = 1; $i <= 4; $i++) {
        // Image
        $wp_customize->add_setting("portfolio_item_{$i}_image", [
            'default' => get_template_directory_uri() . "/assets/images/portfolio-{$i}-home-3.png",
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "portfolio_item_{$i}_image", [
            'label' => __("Portfolio Item {$i} Image", 'sparktech'),
            'section' => 'portfolio_section',
            'settings' => "portfolio_item_{$i}_image",
        ]));

        // Title
        $wp_customize->add_setting("portfolio_item_{$i}_title", [
            'default' => $i % 2 == 0 ? 'Creative Banner Design' : 'Social Media Marketing',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("portfolio_item_{$i}_title", [
            'label' => __("Portfolio Item {$i} Title", 'sparktech'),
            'section' => 'portfolio_section',
            'type' => 'text',
        ]);

        // Description
        $wp_customize->add_setting("portfolio_item_{$i}_description", [
            'default' => 'We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable experiences.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        $wp_customize->add_control("portfolio_item_{$i}_description", [
            'label' => __("Portfolio Item {$i} Description", 'sparktech'),
            'section' => 'portfolio_section',
            'type' => 'textarea',
        ]);

        // Link
        $wp_customize->add_setting("portfolio_item_{$i}_link", [
            'default' => 'case-single.html',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("portfolio_item_{$i}_link", [
            'label' => __("Portfolio Item {$i} Link", 'sparktech'),
            'section' => 'portfolio_section',
            'type' => 'url',
        ]);
    }

    // View All Button Text
    $wp_customize->add_setting('portfolio_button_text', [
        'default' => 'View All',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('portfolio_button_text', [
        'label' => __('Button Text', 'sparktech'),
        'section' => 'portfolio_section',
        'type' => 'text',
    ]);

    // View All Button Link
    $wp_customize->add_setting('portfolio_button_link', [
        'default' => 'case.html',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('portfolio_button_link', [
        'label' => __('Button Link', 'sparktech'),
        'section' => 'portfolio_section',
        'type' => 'url',
    ]);
});
