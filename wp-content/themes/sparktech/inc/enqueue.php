<?php

add_action('wp_enqueue_scripts', function () {
    // Enqueue Stylesheets
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap', array(), null);

    // Enqueue Local Stylesheets
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), null);
    wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/fonts/remixicon.css', array(), null);
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null);
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), null);
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), null);
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css', array('slick'), null);
    wp_enqueue_style('sparktech_custom_style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue Custom Theme Stylesheet
    wp_enqueue_style('sparktech-style', get_stylesheet_uri());

    // Enqueue Scripts
    // Enqueue jQuery (WordPress includes it by default)
    wp_enqueue_script('jquery');

    // Enqueue Local Scripts
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), null, true);
    wp_enqueue_script('scroll-trigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap'), null, true);
    wp_enqueue_script('scroll-smoother', get_template_directory_uri() . '/assets/js/ScrollSmoother.min.js', array('gsap'), null, true);
    wp_enqueue_script('split-text', get_template_directory_uri() . '/assets/js/SplitText.min.js', array('gsap'), null, true);
    wp_enqueue_script('gsap-animation', get_template_directory_uri() . '/assets/js/gsapAnimation.js', array('gsap'), null, true);
    wp_enqueue_script('font-awesome', get_template_directory_uri() . '/assets/js/font-awesome.js', array(), '6.5.2', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('mousemove', get_template_directory_uri() . '/assets/js/mousemove.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick', 'magnific-popup', 'counterup'), null, true);
});
