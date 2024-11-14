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
            <ul class="hero-social">
                <?php if ($facebook_link = get_theme_mod('hero_facebook_link', '#')): ?>
                    <li><a href="<?php echo esc_url($facebook_link); ?>"><img
                                src="<?php echo esc_url(get_theme_mod('hero_facebook_icon', get_template_directory_uri() . '/assets/images/facebook-icon.png')); ?>"
                                alt="Facebook"></a></li>
                <?php endif; ?>

                <?php if ($twitter_link = get_theme_mod('hero_twitter_link', '#')): ?>
                    <li><a href="<?php echo esc_url($twitter_link); ?>"><img
                                src="<?php echo esc_url(get_theme_mod('hero_twitter_icon', get_template_directory_uri() . '/assets/images/twitter-icon.png')); ?>"
                                alt="Twitter"></a></li>
                <?php endif; ?>

                <?php if ($linkedin_link = get_theme_mod('hero_linkedin_link', '#')): ?>
                    <li><a href="<?php echo esc_url($linkedin_link); ?>"><img
                                src="<?php echo esc_url(get_theme_mod('hero_linkedin_icon', get_template_directory_uri() . '/assets/images/linkedin-icon.png')); ?>"
                                alt="LinkedIn"></a></li>
                <?php endif; ?>

                <?php if ($instagram_link = get_theme_mod('hero_instagram_link', '#')): ?>
                    <li><a href="<?php echo esc_url($instagram_link); ?>"><img
                                src="<?php echo esc_url(get_theme_mod('hero_instagram_icon', get_template_directory_uri() . '/assets/images/instagram-icon.png')); ?>"
                                alt="Instagram"></a></li>
                <?php endif; ?>

                <?php if ($youtube_link = get_theme_mod('hero_youtube_link', '#')): ?>
                    <li><a href="<?php echo esc_url($youtube_link); ?>"><img
                                src="<?php echo esc_url(get_theme_mod('hero_youtube_icon', get_template_directory_uri() . '/assets/images/youtube-icon.png')); ?>"
                                alt="YouTube"></a></li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</section>
<!-- hero area ends -->