<?php
$choose_title = get_theme_mod('choose_title', 'Award Wining Digital Agency');
$choose_subtitle = get_theme_mod('choose_subtitle', 'Why Choose Us');
$choose_paragraph = get_theme_mod('choose_paragraph', 'Discover why Procus is the right choice for your digital needs. From innovative solutions and collaborative partnerships to a proven track record and dedicated support.');
$choose_list_items = [
    get_theme_mod('choose_list_item_1', 'Unleashing digital creativity.'),
    get_theme_mod('choose_list_item_2', 'Crafting your brand\'s digital story.'),
    get_theme_mod('choose_list_item_3', 'Innovation meets creativity.'),
];
$choose_button_text = get_theme_mod('choose_button_text', 'See More');
$choose_button_link = get_theme_mod('choose_button_link', 'about.html');
$choose_image = get_theme_mod('choose_image', get_template_directory_uri() . '/assets/images/choose.png');
?>

<section class="choose-home-2 py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <img src="<?php echo esc_url($choose_image); ?>" alt="choose-image">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="choose-content">
                    <div class="section-top-2">
                        <span class="title-tag"><?php echo esc_html($choose_subtitle); ?></span>
                        <h2 class="title_one"><?php echo wp_kses_post($choose_title); ?></h2>
                    </div>
                    <p class="mt-20"><?php echo esc_html($choose_paragraph); ?></p>
                    <ul class="about-list">
                        <?php foreach ($choose_list_items as $item): ?>
                            <li><?php echo esc_html($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo esc_url($choose_button_link); ?>" class="primary-btn mt-40">
                        <?php echo esc_html($choose_button_text); ?>
                        <span><i class="ri-arrow-right-up-line"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>