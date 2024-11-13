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
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="mobile-menu">
                            <ul class="main-menu">
                                <li class="has-submenu"><a href="index.html">home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">home 01</a></li>
                                        <li><a href="home-2.html">home 02</a></li>
                                        <li><a href="home-3.html">home 03</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="services.html">services</a>
                                    <ul class="submenu">
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="service-single.html">service details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="case.html">case</a>
                                    <ul class="submenu">
                                        <li><a href="case.html">case</a></li>
                                        <li><a href="case-single.html">case details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="blog.html">blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-6.html">blog full width</a></li>
                                        <li><a href="blog.html">blog column 2</a></li>
                                        <li><a href="blog-2.html">blog column 3</a></li>
                                        <li><a href="blog-3.html">blog list</a></li>
                                        <li><a href="blog-4.html">blog right sidebar</a></li>
                                        <li><a href="blog-5.html">blog left sidebar</a></li>
                                        <li><a href="blog-single.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="#">pages</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="work-process.html">work process</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="team-single.html">team details</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
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