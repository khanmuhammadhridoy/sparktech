<?php
function sparktech_customize_team($wp_customize)
{
    // Add Team Section
    $wp_customize->add_section('team_section', [
        'title' => __('Team Section', 'sparktech'),
        'description' => __('Manage the team section.', 'sparktech'),
        'priority' => 55,
    ]);

    // Add Setting for Number of Team Members
    $wp_customize->add_setting('team_count', [
        'default' => 6,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control('team_count', [
        'label' => __('Number of Team Members', 'sparktech'),
        'section' => 'team_section',
        'type' => 'number',
        'input_attrs' => [
            'min' => 1,
            'max' => 10,
        ],
    ]);

    // Add Settings for Each Team Member
    for ($i = 0; $i < 10; $i++) {
        // Team Member Name
        $wp_customize->add_setting("team_name_$i", [
            'default' => "Team Member $i",
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("team_name_$i", [
            'label' => sprintf(__('Team Member %d Name', 'sparktech'), $i + 1),
            'section' => 'team_section',
            'type' => 'text',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('team_count', 6);
                return $i < $count;
            },
        ]);

        // Team Member Designation
        $wp_customize->add_setting("team_designation_$i", [
            'default' => 'Founder & CEO',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("team_designation_$i", [
            'label' => sprintf(__('Team Member %d Designation', 'sparktech'), $i + 1),
            'section' => 'team_section',
            'type' => 'text',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('team_count', 6);
                return $i < $count;
            },
        ]);

        // Team Member Image
        $wp_customize->add_setting("team_image_$i", [
            'default' => get_template_directory_uri() . '/assets/images/team-member-01.png',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "team_image_$i", [
            'label' => sprintf(__('Team Member %d Image', 'sparktech'), $i + 1),
            'section' => 'team_section',
            'active_callback' => function () use ($i) {
                $count = get_theme_mod('team_count', 6);
                return $i < $count;
            },
        ]));

        // Team Member Social Links
        $social_links = ['twitter', 'linkedin', 'website', 'instagram', 'facebook'];
        foreach ($social_links as $social) {
            $wp_customize->add_setting("team_{$social}_link_$i", [
                'default' => '#',
                'transport' => 'refresh',
                'sanitize_callback' => 'esc_url_raw',
            ]);
            $wp_customize->add_control("team_{$social}_link_$i", [
                'label' => sprintf(__('Team Member %d %s Link', 'sparktech'), $i + 1, ucfirst($social)),
                'section' => 'team_section',
                'type' => 'url',
                'active_callback' => function () use ($i) {
                    $count = get_theme_mod('team_count', 6);
                    return $i < $count;
                },
            ]);
        }
    }
}
add_action('customize_register', 'sparktech_customize_team');
