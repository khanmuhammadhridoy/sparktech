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







// Enable Elementor to recognize theme locations for custom header and footer
function procus_elementor_support()
{
    add_theme_support('elementor'); // General support for Elementor
    add_theme_support('elementor-pro'); // Support for Elementor Pro if used
}
add_action('after_setup_theme', 'procus_elementor_support');
