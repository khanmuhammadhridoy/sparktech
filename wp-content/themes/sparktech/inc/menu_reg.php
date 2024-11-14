<?php
// Function to register custom menu locations
function sparktech_register_menus()
{
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'sparktech'), // Assigns 'Primary Menu' as the label, with 'sparktech' as the text domain
    ]);
}
add_action('init', 'sparktech_register_menus');
