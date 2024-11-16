<?php
add_action('customize_register', function ($wp_customize) {

    // Add Section for Counter Section
    $wp_customize->add_section('counter_section', [
        'title' => __('Counter Section', 'sparktech'),
        'description' => __('Edit the counter section values and appearance.', 'sparktech'),
        'priority' => 40,
    ]);

    // Add setting for background image of counter area
    $wp_customize->add_setting('counter_bg_image', [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'counter_bg_image', [
        'label' => __('Background Image', 'sparktech'),
        'section' => 'counter_section',
        'settings' => 'counter_bg_image',
    ]));

    // Add setting for the image (counter-3d.png) within the section
    $wp_customize->add_setting('counter_image', [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'counter_image', [
        'label' => __('Counter Image', 'sparktech'),
        'section' => 'counter_section',
        'settings' => 'counter_image',
    ]));

    // Define counter settings for each counter
    $counters = [
        'years_experience' => __('Counter 1', 'sparktech'),
        'projects_completed' => __('Counter 2', 'sparktech'),
        'happy_clients' => __('Counter 3', 'sparktech'),
        'winning_awards' => __('Counter 4', 'sparktech')
    ];

    // Loop to add the settings for each counter
    foreach ($counters as $key => $label) {
        // Add Numeric Setting
        $wp_customize->add_setting("counter_{$key}_number", [
            'default' => 0,
            'transport' => 'postMessage',
            'sanitize_callback' => 'absint',
        ]);
        $wp_customize->add_control("counter_{$key}_number", [
            'label' => sprintf(__('%s (Number)', 'sparktech'), $label),
            'section' => 'counter_section',
            'type' => 'number',
        ]);

        // Add Text Setting
        $wp_customize->add_setting("counter_{$key}_text", [
            'default' => $label, // Default text is the label itself
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("counter_{$key}_text", [
            'label' => sprintf(__('%s (Text Description)', 'sparktech'), $label),
            'section' => 'counter_section',
            'type' => 'text',
        ]);
    }
});
