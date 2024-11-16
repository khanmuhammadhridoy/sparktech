<!-- hero area starts -->
<section class="hero-area">
    <div class="hero-bg dark-version"
        style="background-image: url(<?php echo esc_url(get_theme_mod('hero_bg_image', get_template_directory_uri() . '/assets/images/hero-bg.png')); ?>)">
    </div>

    <div class="container">
        <div class="hero-content-box">
            <div class="row hero-top-content">
                <div class="col-lg-7 offset-lg-1">
                    <h1 class="mb-20 title_one">
                        <?php echo esc_html(get_theme_mod('hero_title', 'Crafting Creativity')); ?>
                        <span
                            class="gradient-bg"><?php echo esc_html(get_theme_mod('hero_title_span', 'Creativity')); ?></span>
                    </h1>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo esc_url(get_theme_mod('imgleft', get_template_directory_uri() . '/assets/images/hero-3d-02.png')); ?>"
                        class="vector-shape vector-anim-1 item-moveOne" alt="left-image">
                </div>
            </div>
            <div class="row hero-bottom-content">
                <div class="col-lg-5">
                    <img src="<?php echo esc_url(get_theme_mod('imgright', get_template_directory_uri() . '/assets/images/hero-3d-01.png')); ?>"
                        class="vector-shape vector-anim-2 item-moveTwo" alt="right-image">
                </div>
                <div class="col-lg-7">
                    <h1 class="title_one"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Amplifying Impact!')); ?>
                    </h1>
                    <p class="mt-20">
                        <?php echo esc_html(get_theme_mod('hero_subtitle_text', 'We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable brand experiences.')); ?>
                    </p>
                    <div class="btn-group">
                        <img class="dark-version"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vector-arrow.png'); ?>"
                            alt="vector-arrow">
                        <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#')); ?>"
                            class="secondary-btn"><?php echo esc_html(get_theme_mod('hero_button_text', 'Learn More')); ?></a>
                    </div>
                </div>
            </div>



            <?php
            // Define social platforms
            $social_media = [
                'facebook' => 'Facebook',
                'twitter' => 'Twitter',
                'linkedin' => 'LinkedIn',
                'instagram' => 'Instagram',
                'youtube' => 'YouTube',
            ];

            // Output social icons
            echo '<ul class="hero-social">';
            foreach ($social_media as $key => $label) {
                $link = get_theme_mod("hero_{$key}_link", '#'); // Get the link
                $icon_class = get_theme_mod("hero_{$key}_icon", "fa-brands fa-{$key}"); // Get the icon class
            
                // Only output if the link is not the default value
                // if ($link && $link !== '#') {
                echo sprintf(
                    '<li><a href="%s" target="_blank" rel="noopener noreferrer"><i class="%s"></i> </a></li>',
                    esc_url($link),
                    esc_attr($icon_class),
                    esc_html($label)
                );
            }
            // }
            echo '</ul>';
            ?>



            <a href="#counter-area"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vector-scroll-down.png"
                    alt="vector-scroll-down" class="vector-scroll-down scroll-down"></a>



        </div>
    </div>
</section>
<!-- hero area ends -->