<?php


// Render Elementor content on all pages
function sparktech_render_elementor_content($content)
{
    if (is_page() && class_exists('Elementor\Plugin')) {
        // Get Elementor content for the current page
        $elementor_content = \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(get_the_ID());

        // If Elementor content exists, return it; otherwise, return default content
        if (!empty($elementor_content)) {
            return $elementor_content;
        }
    }

    // Return default content if no Elementor content is found
    return $content;
}

add_filter('the_content', 'sparktech_render_elementor_content');







function sparktech_register_elementor_header_location($elementor_theme_manager)
{
    $elementor_theme_manager->register_location('header', [
        'label' => __('Header', 'sparktech'),
        'view' => 'view/header.php',
    ]);
}
add_action('elementor/theme/register_locations', 'sparktech_register_elementor_header_location');
