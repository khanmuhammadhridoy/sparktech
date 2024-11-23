<?php
add_action('customize_register', function ($wp_customize) {

    // Add Section for "Why Choose Us"
    $wp_customize->add_section('choose_section', [
        'title' => __('Why Choose Us Section', 'sparktech'),
        'description' => __('Edit the content of the "Why Choose Us" section.', 'sparktech'),
        'priority' => 40,
    ]);

    // Title
    $wp_customize->add_setting('choose_title', [
        'default' => 'Award Wining Digital Agency',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('choose_title', [
        'label' => __('Title', 'sparktech'),
        'section' => 'choose_section',
        'type' => 'text',
    ]);

    // Subtitle
    $wp_customize->add_setting('choose_subtitle', [
        'default' => 'Why Choose Us',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('choose_subtitle', [
        'label' => __('Subtitle', 'sparktech'),
        'section' => 'choose_section',
        'type' => 'text',
    ]);

    // Paragraph
    $wp_customize->add_setting('choose_paragraph', [
        'default' => 'Discover why Procus is the right choice for your digital needs. From innovative solutions and collaborative partnerships to a proven track record and dedicated support.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('choose_paragraph', [
        'label' => __('Paragraph', 'sparktech'),
        'section' => 'choose_section',
        'type' => 'textarea',
    ]);

    // List Items
    $list_defaults = [
        'Unleashing digital creativity.',
        'Crafting your brand\'s digital story.',
        'Innovation meets creativity.',
    ];

    foreach ($list_defaults as $index => $default) {
        $key = 'choose_list_item_' . ($index + 1);
        $wp_customize->add_setting($key, [
            'default' => $default,
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control($key, [
            'label' => __('List Item ' . ($index + 1), 'sparktech'),
            'section' => 'choose_section',
            'type' => 'text',
        ]);
    }

    // Button Text
    $wp_customize->add_setting('choose_button_text', [
        'default' => 'See More',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('choose_button_text', [
        'label' => __('Button Text', 'sparktech'),
        'section' => 'choose_section',
        'type' => 'text',
    ]);

    // Button Link
    $wp_customize->add_setting('choose_button_link', [
        'default' => 'about.html',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('choose_button_link', [
        'label' => __('Button Link', 'sparktech'),
        'section' => 'choose_section',
        'type' => 'url',
    ]);

    // Image
    $wp_customize->add_setting('choose_image', [
        'default' => get_template_directory_uri() . '/assets/images/choose.png',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'choose_image', [
        'label' => __('Image', 'sparktech'),
        'section' => 'choose_section',
        'settings' => 'choose_image',
    ]));
});
