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

<body <?php body_class(); ?>>

    <header class="header-area">
        <!-- menu area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo section -->
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <?php
                            if (has_custom_logo()):
                                // Display the custom logo
                                the_custom_logo();
                            else:
                                // Fallback to a default logo if none is set
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
                            // Display the primary menu dynamically without limiting the submenu depth
                            wp_nav_menu([
                                'theme_location' => 'primary-menu', // Uses the menu location registered in functions.php
                                'menu_class' => 'main-menu',    // Applies 'main-menu' class to the <ul> element for styling
                                'container' => false,          // Removes the <div> wrapper around the menu
                                'fallback_cb' => false           // Disables fallback to a page list if no menu is set
                            ]);
                            ?>
                        </nav>
                    </div>



                    <div class="col-lg-2">
                        <div class="nav-right-content">
                            <a href="contact.html" class="primary-btn">Let’s Talk <span><i
                                        class="ri-arrow-right-up-line"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu"></div>
        </div>
    </header>