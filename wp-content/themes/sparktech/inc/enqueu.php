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
    // wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_register_style('sparktech_custom_style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue the stylesheets
    wp_enqueue_style('animate');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('remixicon');

    wp_enqueue_style('magnific-popup-css', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
    // wp_enqueue_style('magnific-popup');

    wp_enqueue_style('meanmenu');

    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css');
    // wp_enqueue_style('slick');

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
    // wp_register_script('jquery-2.2.4', get_template_directory_uri() . '/assets/js/jquery-2.2.4.min.js', [], null, true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], '5.0.2', true);

    wp_register_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', [], null, true);
    wp_register_script('scroll-trigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', ['gsap'], null, true);
    wp_register_script('scroll-smoother', get_template_directory_uri() . '/assets/js/ScrollSmoother.min.js', ['gsap'], null, true);
    wp_register_script('split-text', get_template_directory_uri() . '/assets/js/SplitText.min.js', ['gsap'], null, true);
    wp_register_script('gsap-animation', get_template_directory_uri() . '/assets/js/gsapAnimation.js', ['gsap'], null, true);

    wp_register_script('font-awesome', get_template_directory_uri() . '/assets/js/font-awesome.js', [], '6.5.2', true);
    wp_register_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', [], '1.0', true);
    wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', [], null, true);
    wp_register_script('mousemove', get_template_directory_uri() . '/assets/js/mousemove.js', [], null, true);
    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.min.js', [], null, true);
    wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', [], null, true);
    wp_register_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', [], null, true);
    wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', [], null, true);
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);

    // Enqueue the scripts
    // jQuery (WordPress includes it by default, but enqueue explicitly if needed)
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');

    // wp_enqueue_script('gsap');
    // wp_enqueue_script('scroll-trigger');
    // wp_enqueue_script('scroll-smoother');
    // wp_enqueue_script('split-text');
    // wp_enqueue_script('gsap-animation');

    // The proper way to enqueue GSAP script in WordPress

    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    // The core GSAP library
    wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true);
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true);
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js'), false, true);



    // FontAwesome (if not included by theme)
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    // wp_enqueue_script('counterup-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.counterup/1.0/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup-js', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), null, true);









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
