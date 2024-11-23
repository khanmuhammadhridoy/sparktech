<section class="service-home-2 py-120">
    <span class="big-title"><?php echo esc_html(get_theme_mod('services_big_title', 'services')); ?></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-top-2">
                    <span
                        class="title-tag"><?php echo esc_html(get_theme_mod('services_title_tag', 'What we offer')); ?></span>
                    <h2 class="title_one">
                        <?php echo wp_kses_post(get_theme_mod('services_main_title', 'We provide <span>top-Notch Services for you</span>')); ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-top-btn">
                    <a href="<?php echo esc_url(get_theme_mod('services_button_url', '#')); ?>" class="primary-btn">
                        <?php echo esc_html(get_theme_mod('services_button_text', 'View all')); ?>
                        <span><i class="ri-arrow-right-up-line"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="service-items mt-60">
            <?php
            $services_count = absint(get_theme_mod('services_count', 6));
            for ($i = 1; $i <= $services_count; $i++):
                ?>
                <div class="single-service-2">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="service-title">
                                <h2>
                                    <a href="<?php echo esc_url(get_theme_mod("service_{$i}_url", '#')); ?>">
                                        <?php echo esc_html(get_theme_mod("service_{$i}_title", "Service Title {$i}")); ?>
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-image">
                                <img src="<?php echo esc_url(get_theme_mod("service_{$i}_image", get_template_directory_uri() . "/assets/images/service-image{$i}-home-2.png")); ?>"
                                    alt="Service Image">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-content">
                                <p><?php echo esc_html(get_theme_mod("service_{$i}_description", 'This is a sample description.')); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>