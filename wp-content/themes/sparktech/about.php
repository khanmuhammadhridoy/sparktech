<?php ?>
<?php
/**
 * Template Part: About Section
 */
?>

<!-- about area starts -->
<section class="about-home-2 pt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <!-- Dynamic Image -->
                <img src="<?php echo esc_url(get_theme_mod('about_image', get_template_directory_uri() . '/assets/images/about.png')); ?>"
                    alt="<?php echo esc_attr(get_theme_mod('about_image_alt', 'About Us')); ?>">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="about-content">
                    <div class="section-top-2">
                        <!-- Dynamic Title Tag -->
                        <span
                            class="title-tag"><?php echo esc_html(get_theme_mod('about_title_tag', 'Who We Are')); ?></span>
                        <!-- Dynamic Heading -->
                        <h2 class="title_one">
                            <?php echo wp_kses_post(get_theme_mod('about_heading', 'We are <span>Creative Digital Agency</span>')); ?>
                        </h2>
                    </div>
                    <!-- Dynamic Description -->
                    <p class="mt-20">
                        <?php echo esc_html(get_theme_mod('about_description', 'We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable brand experiences.')); ?>
                    </p>
                    <ul class="about-list">
                        <!-- Dynamic List Items -->
                        <?php
                        $about_list = get_theme_mod('about_list', 'Unleashing digital creativity.|Crafting your brand\'s digital story.|Innovation meets creativity.');
                        if ($about_list):
                            $list_items = explode('|', $about_list); // Split list items by |
                            foreach ($list_items as $item):
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            endforeach;
                        endif;
                        ?>
                    </ul>
                    <!-- Dynamic Button -->
                    <a href="<?php echo esc_url(get_theme_mod('about_button_link', '#')); ?>" class="primary-btn mt-40">
                        <?php echo esc_html(get_theme_mod('about_button_text', 'Read more')); ?>
                        <span><i class="ri-arrow-right-up-line"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>