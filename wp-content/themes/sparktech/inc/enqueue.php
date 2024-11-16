<?php

function sparktech_enqueue_styles()
{
    // Register stylesheet
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('font-awesome', src: get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_register_style('remixicon', get_template_directory_uri() . '/assets/fonts/remixicon.css');
    wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_register_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css');
    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_register_style('sparktech_custom_style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue the stylesheets
    wp_enqueue_style('animate');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('remixicon');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('meanmenu');
    wp_enqueue_style('slick');
    wp_enqueue_style('sparktech_custom_style');

    // Enqueue Google Fonts
    wp_enqueue_style('sparktech-google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap', false);


    // Enqueue the main stylesheet (style.css in the theme root folder)
    wp_enqueue_style('sparktech-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sparktech_enqueue_styles');

function sparktech_enqueue_js()
{
    // Register JavaScript
    wp_register_script('jquery-2.2.4', get_template_directory_uri() . '/assets/js/jquery-2.2.4.min.js', [], null, true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery-2.2.4'], '5.0.2', true);

    wp_register_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', [], null, true);
    wp_register_script('scroll-trigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', ['gsap'], null, true);
    wp_register_script('scroll-smoother', get_template_directory_uri() . '/assets/js/ScrollSmoother.min.js', ['gsap'], null, true);
    wp_register_script('split-text', get_template_directory_uri() . '/assets/js/SplitText.min.js', ['gsap'], null, true);
    wp_register_script('gsap-animation', get_template_directory_uri() . '/assets/js/gsapAnimation.js', ['gsap'], null, true);
    
    wp_register_script('font-awesome', get_template_directory_uri() . '/assets/js/font-awesome.js', [], '6.5.2', true);
    wp_register_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', ['jquery-2.2.4'], '1.0', true);
    wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', ['jquery-2.2.4'], null, true);
    wp_register_script('mousemove', get_template_directory_uri() . '/assets/js/mousemove.js', ['jquery-2.2.4'], null, true);
    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.min.js', ['jquery-2.2.4'], null, true);
    wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery-2.2.4'], null, true);
    wp_register_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', ['jquery-2.2.4'], null, true);
    wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', ['jquery-2.2.4'], null, true);
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery-2.2.4'], null, true);

    // Enqueue the scripts
    wp_enqueue_script('jquery-2.2.4');
    wp_enqueue_script('bootstrap');

    wp_enqueue_script('gsap');
    wp_enqueue_script('scroll-trigger');
    wp_enqueue_script('scroll-smoother');
    wp_enqueue_script('split-text');
    wp_enqueue_script('gsap-animation');

    wp_enqueue_script('font-awesome');
    wp_enqueue_script('counterup');
    wp_enqueue_script('magnific-popup');
    wp_enqueue_script('mousemove');
    wp_enqueue_script('meanmenu');
    wp_enqueue_script('slick');
    wp_enqueue_script('easing');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'sparktech_enqueue_js');
