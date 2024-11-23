<?php
function sparktech_customize_testimonials($wp_customize) {
    // Add Testimonial Section
    $wp_customize->add_section('testimonial_section', [
        'title'       => __('Testimonials', 'sparktech'),
        'description' => __('Manage the testimonial section.', 'sparktech'),
        'priority'    => 50,
    ]);

    // Add Setting for Number of Testimonials
    $wp_customize->add_setting('testimonial_count', [
        'default'           => 5,
        'transport'         => 'refresh',
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control('testimonial_count', [
        'label'       => __('Number of Testimonials', 'sparktech'),
        'section'     => 'testimonial_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 1,
            'max' => 10,
        ],
    ]);

    // Add Settings for Each Testimonial
    for ($i = 0; $i < 10; $i++) {
        $wp_customize->add_setting("testimonial_quote_$i", [
            'default'           => "Testimonial $i quote text here...",
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("testimonial_quote_$i", [
            'label'       => sprintf(__('Testimonial %d Quote', 'sparktech'), $i + 1),
            'section'     => 'testimonial_section',
            'type'        => 'textarea',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('testimonial_count', 5);
                return $i < $count;
            },
        ]);

        $wp_customize->add_setting("testimonial_image_$i", [
            'default'           => get_template_directory_uri() . '/assets/images/testimonial-3.png',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "testimonial_image_$i", [
            'label'       => sprintf(__('Testimonial %d Image', 'sparktech'), $i + 1),
            'section'     => 'testimonial_section',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('testimonial_count', 5);
                return $i < $count;
            },
        ]));

        $wp_customize->add_setting("testimonial_name_$i", [
            'default'           => "Name $i",
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("testimonial_name_$i", [
            'label'       => sprintf(__('Testimonial %d Name', 'sparktech'), $i + 1),
            'section'     => 'testimonial_section',
            'type'        => 'text',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('testimonial_count', 5);
                return $i < $count;
            },
        ]);

        $wp_customize->add_setting("testimonial_designation_$i", [
            'default'           => "Designation $i",
            'transport'         => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("testimonial_designation_$i", [
            'label'       => sprintf(__('Testimonial %d Designation', 'sparktech'), $i + 1),
            'section'     => 'testimonial_section',
            'type'        => 'text',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('testimonial_count', 5);
                return $i < $count;
            },
        ]);
    }
}
add_action('customize_register', 'sparktech_customize_testimonials');
