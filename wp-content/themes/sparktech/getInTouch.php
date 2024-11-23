<?php
function auto_copyright($year = 'auto')
{
    // If "auto", use the current year
    if (intval($year) == 'auto') {
        $year = date('Y');
    }

    // Output single year if current year matches
    if (intval($year) == date('Y')) {
        echo intval($year);
    }
    // Output range if the year is in the past
    if (intval($year) < date('Y')) {
        echo intval($year) . ' - ' . date('Y');
    }
    // Output current year if the provided year is in the future
    if (intval($year) > date('Y')) {
        echo date('Y');
    }
}
?>


<!-- footer area starts -->
<footer class="footer-area">
    <!-- get in touch area starts -->
    <!-- Get in Touch Area -->
    <div class="get-in-touch-area"
        style="background-image: url(<?php echo esc_url(get_theme_mod('footer_bg_image', get_template_directory_uri() . '/assets/images/get-in-touch-bg.png')); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo esc_url(get_theme_mod('footer_get_in_touch_link', home_url('/contact'))); ?>"
                        class="big-title">
                        <span><?php echo esc_html(get_theme_mod('footer_get_in_touch_text', 'Get in touch')); ?></span>
                        <span class="icon"><i class="ri-arrow-right-up-line"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                        <p class="copyright-text" style="text-align: center;">
                            &copy; <?php auto_copyright("2024"); ?>
                            <a href="">SparkTech</a>. All Rights Reserved.
                            Crafted with <span style="color: #9aca3c;">♥</span> by the
                            <a href="">SparkTech Team</a>.
                            Innovation Meets Excellence.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>