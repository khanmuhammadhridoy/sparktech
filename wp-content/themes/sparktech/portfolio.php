<?php
// Default content
$portfolio_title = get_theme_mod('portfolio_title', 'Take a Look at Some of Our Work');
$portfolio_subtitle = get_theme_mod('portfolio_subtitle', 'Step into Our World of Creativity and Innovation: Unveiling Our Portfolio, a Tapestry of Past Projects Reflecting Our Commitment to Excellence and Client Success');
$portfolio_button_text = get_theme_mod('portfolio_button_text', 'View All');
$portfolio_button_link = get_theme_mod('portfolio_button_link', 'case.html');

$default_portfolio_items = [
    [
        'image' => get_template_directory_uri() . '/assets/images/portfolio-1-home-3.png',
        'title' => 'Social Media Marketing',
        'description' => 'We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable experiences.',
        'link' => 'case-single.html',
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/portfolio-2-home-3.png',
        'title' => 'Creative Banner Design',
        'description' => 'We are a passionate collective of creatives, designers, and strategists dedicated.',
        'link' => 'case-single.html',
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/portfolio-3-home-3.png',
        'title' => 'Creative Banner Design',
        'description' => 'We are a passionate collective of creatives, designers, and strategists dedicated.',
        'link' => 'case-single.html',
    ],
    [
        'image' => get_template_directory_uri() . '/assets/images/portfolio-4-home-3.png',
        'title' => 'Social Media Marketing',
        'description' => 'We are a passionate collective of creatives, designers, and strategists dedicated to shaping remarkable experiences.',
        'link' => 'case-single.html',
    ],
];

$portfolio_items = [];
for ($i = 1; $i <= 4; $i++) {
    $portfolio_items[] = [
        'image' => get_theme_mod("portfolio_item_{$i}_image", $default_portfolio_items[$i - 1]['image']),
        'title' => get_theme_mod("portfolio_item_{$i}_title", $default_portfolio_items[$i - 1]['title']),
        'description' => get_theme_mod("portfolio_item_{$i}_description", $default_portfolio_items[$i - 1]['description']),
        'link' => get_theme_mod("portfolio_item_{$i}_link", $default_portfolio_items[$i - 1]['link']),
    ];
}
?>

<section class="portfolio-home-3 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="section-top-3">
                    <h2 class="title_one"><?php echo esc_html($portfolio_title); ?></h2>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-2 col-lg-6 align-self-end">
                <p class="mt-20"><?php echo esc_html($portfolio_subtitle); ?></p>
            </div>
        </div>
        <div class="portfolio-items-3 mt-60">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-portfolio-3">
                        <a href="<?php echo esc_url($portfolio_items[0]['link']); ?>">
                            <img src="<?php echo esc_url($portfolio_items[0]['image']); ?>" alt="portfolio-image">
                        </a>
                        <h3 class="mt-30">
                            <a
                                href="<?php echo esc_url($portfolio_items[0]['link']); ?>"><?php echo esc_html($portfolio_items[0]['title']); ?></a>
                        </h3>
                        <p class="mt-20"><?php echo esc_html($portfolio_items[0]['description']); ?></p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-end">
                    <div class="single-portfolio-3">
                        <a href="<?php echo esc_url($portfolio_items[1]['link']); ?>">
                            <img src="<?php echo esc_url($portfolio_items[1]['image']); ?>" alt="portfolio-image">
                        </a>
                        <h3 class="mt-30">
                            <a
                                href="<?php echo esc_url($portfolio_items[1]['link']); ?>"><?php echo esc_html($portfolio_items[1]['title']); ?></a>
                        </h3>
                        <p class="mt-20"><?php echo esc_html($portfolio_items[1]['description']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 align-self-end">
                    <div class="single-portfolio-3">
                        <a href="<?php echo esc_url($portfolio_items[2]['link']); ?>">
                            <img src="<?php echo esc_url($portfolio_items[2]['image']); ?>" alt="portfolio-image">
                        </a>
                        <h3 class="mt-30">
                            <a
                                href="<?php echo esc_url($portfolio_items[2]['link']); ?>"><?php echo esc_html($portfolio_items[2]['title']); ?></a>
                        </h3>
                        <p class="mt-20"><?php echo esc_html($portfolio_items[2]['description']); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="single-portfolio-3">
                        <a href="<?php echo esc_url($portfolio_items[3]['link']); ?>">
                            <img src="<?php echo esc_url($portfolio_items[3]['image']); ?>" alt="portfolio-image">
                        </a>
                        <h3 class="mt-30">
                            <a
                                href="<?php echo esc_url($portfolio_items[3]['link']); ?>"><?php echo esc_html($portfolio_items[3]['title']); ?></a>
                        </h3>
                        <p class="mt-20"><?php echo esc_html($portfolio_items[3]['description']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-button text-center">
                        <a href="<?php echo esc_url($portfolio_button_link); ?>" class="primary-btn">
                            <?php echo esc_html($portfolio_button_text); ?>
                            <span><i class="ri-arrow-right-up-line"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>