<?php
// Get background image and counter image from the Customizer
$bg_image_url = get_theme_mod('counter_bg_image', ''); // Background Image URL
$counter_image_url = get_theme_mod('counter_image', ''); // Counter Image URL

// Define counter keys
$counters = [
    'years_experience' => __('Years of Experience', 'sparktech'),
    'projects_completed' => __('Projects Completed', 'sparktech'),
    'happy_clients' => __('Happy Clients', 'sparktech'),
    'winning_awards' => __('Winning Awards', 'sparktech')
];
?>

<!-- Counter Area starts -->
<section class="counter-area pt-110 pb-90" id="counter-area"
    style="background-image: url('<?php echo esc_url($bg_image_url); ?>');">
    <!-- Dynamically set the counter image -->
    <img src="<?php echo esc_url($counter_image_url); ?>" alt="counter-3d" class="counter-3d">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2 class="title_one">Experiences Fueled by <span>Passion</span> and <span>Expertise</span></h2>
                    <p class="mt-20">At our core, we're more than just a creative agency – we're a dynamic team of
                        storytellers, strategists, and tech enthusiasts.</p>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <?php foreach ($counters as $key => $label): ?>
                <div class="col-lg-3 col-6">
                    <div class="counter-single">
                        <div class="counter-number">
                            <span class="counter"><?php echo esc_html(get_theme_mod("counter_{$key}_number", 0)); ?></span>
                            <?php if ($key === 'projects_completed'): ?>
                                <span class="plus-sign">+</span>
                            <?php endif; ?>
                        </div>
                        <h6 class="counter-text"><?php echo esc_html(get_theme_mod("counter_{$key}_text", $label)); ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Counter Area ends -->