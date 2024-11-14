<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Stylesheets -->
    <?php wp_head(); ?>
</head>

<body class="default" <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <!-- <div id="preloader">
        <div id="loader"></div>
    </div>

    <div class="procus-cursor"></div>
    <div class="procus-cursor2"></div>

    <div class="theme-color-switch">
        <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="checkbox-label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <span class="ball"></span>
        </label>
    </div>

    // back to top
    <div class="back-to-top">
        <span><i class="fa fa-angle-up"></i></span>
    </div> -->



    <!-- header area starts -->
    <header class="header-area">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo section -->
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <?php
                            if (has_custom_logo()):
                                the_custom_logo(); // Display custom logo
                            else:
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>"
                                        alt="Logo">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- navbar -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="mobile-menu">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'main-menu',
                                'container' => false,
                                'fallback_cb' => false
                            ]);
                            ?>
                        </nav>
                    </div>
                    <!-- CTA button -->
                    <div class="col-lg-2">
                        <div class="nav-right-content">
                            <a href="<?php echo esc_url(get_theme_mod('header_button_url', '#')); ?>"
                                class="primary-btn">
                                <?php echo esc_html(get_theme_mod('header_button_text', __('Let’s Talk', 'sparktech'))); ?>
                                <span><i class="ri-arrow-right-up-line"></i></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>