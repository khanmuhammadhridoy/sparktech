<?php
/**
 * Template Part: Counter Section
 */
?>

<section class="counter-home-2 pt-70 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <?php
                    // Default counters as fallback
                    $default_counters = array(
                        array('number' => 25, 'text' => __('Years of Experience', 'sparktech')),
                        array('number' => 250, 'text' => __('Projects Completed', 'sparktech'), 'plus' => true),
                        array('number' => 100, 'text' => __('Happy Clients', 'sparktech')),
                        array('number' => 35, 'text' => __('Winning Awards', 'sparktech')),
                    );

                    // Retrieve counters from theme mod and decode JSON
                    $counters_json = get_theme_mod('counter_items', json_encode($default_counters));
                    $counters = json_decode($counters_json, true);

                    // Ensure $counters is an array before looping
                    if (is_array($counters)):
                        foreach ($counters as $counter):
                            $number = isset($counter['number']) ? absint($counter['number']) : 0;
                            $text = isset($counter['text']) ? sanitize_text_field($counter['text']) : '';
                            $plus = !empty($counter['plus']);
                            ?>
                            <div class="col-lg-3 col-6">
                                <div class="counter-single-2">
                                    <div class="counter-number">
                                        <span class="counter"><?php echo esc_html($number); ?></span>
                                        <?php if ($plus): ?>
                                            <span class="plus-sign">+</span>
                                        <?php endif; ?>
                                    </div>
                                    <h6 class="counter-text"><?php echo esc_html($text); ?></h6>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    else:
                        echo '<p>' . esc_html__('No counters are available. Please configure them in the Customizer.', 'sparktech') . '</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>