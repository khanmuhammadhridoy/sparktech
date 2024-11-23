<?php
/**
 * Counter Section Customizer
 */

function sparktech_customize_counter($wp_customize)
{
    // Add Counter Section
    $wp_customize->add_section('counter_section', array(
        'title' => __('Counter Section', 'sparktech'),
        'description' => __('Edit the counter items.', 'sparktech'),
        'priority' => 40,
    ));

    // Add Counter Items Setting
    $wp_customize->add_setting('counter_items', array(
        'default' => json_encode(array(
            array('number' => 25, 'text' => __('Years of Experience', 'sparktech')),
            array('number' => 250, 'text' => __('Projects Completed', 'sparktech'), 'plus' => true),
            array('number' => 100, 'text' => __('Happy Clients', 'sparktech')),
            array('number' => 35, 'text' => __('Winning Awards', 'sparktech')),
        )),
        'sanitize_callback' => 'sparktech_sanitize_repeater',
    ));

    // Add Counter Items Control
    $wp_customize->add_control(new Sparktech_Repeater_Control($wp_customize, 'counter_items', array(
        'label' => __('Counter Items', 'sparktech'),
        'section' => 'counter_section',
        'settings' => 'counter_items',
        'description' => __('Add counter items with number and text. Use JSON format.', 'sparktech'),
    )));
}

// Sanitize Repeater
function sparktech_sanitize_repeater($input)
{
    $decoded = json_decode($input, true);
    if (is_array($decoded)) {
        return json_encode(array_map(function ($item) {
            return array(
                'number' => absint($item['number']),
                'text' => sanitize_text_field($item['text']),
                'plus' => isset($item['plus']) ? (bool) $item['plus'] : false,
            );
        }, $decoded));
    }
    return json_encode(array());
}

// Repeater Control Class
if (class_exists('WP_Customize_Control')) {
    class Sparktech_Repeater_Control extends WP_Customize_Control
    {
        public $type = 'repeater';

        public function render_content()
        {
            $value = json_decode($this->value(), true);
            $value = is_array($value) ? $value : array();
            ?>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <textarea style="width: 100%; height: 200px;" <?php $this->link(); ?>><?php echo esc_textarea(json_encode($value, JSON_PRETTY_PRINT)); ?></textarea>
            <p class="description"><?php echo esc_html($this->description); ?></p>
            <?php
        }
    }
}

add_action('customize_register', 'sparktech_customize_counter');
