<?php
add_action('customize_register', function ($wp_customize) {
    // Add Marquee Section
    $wp_customize->add_section('marquee_section', [
        'title' => __('Marquee Settings', 'sparktech'),
        'description' => __('Edit the items displayed in the marquee.', 'sparktech'),
        'priority' => 35,
    ]);

    // Add a setting and control for marquee content
    $wp_customize->add_setting('marquee_content', [
        'default' => 'Branding, Website Design, App Design, Development, UI/UX Design, Graphic Design, Motion Graphic, Digital Marketing, SEO',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('marquee_content', [
        'label' => __('Marquee Items (comma-separated)', 'sparktech'),
        'description' => __('Enter the items for the marquee separated by commas.', 'sparktech'),
        'section' => 'marquee_section',
        'type' => 'textarea',
    ]);
});
