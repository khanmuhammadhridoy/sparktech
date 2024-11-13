<?php
// Check if Elementor is active and content exists
if (class_exists('Elementor\Plugin')) {
    $elementor_content = \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(get_the_ID());
    echo $elementor_content; ?>
    <div class="hero-section">
    <h1>Welcome to Our Website</h1>
    <p>Some static text or image for the hero section.</p>
    </div> // This will display the Elementor content
    <?php
} else {
    // Fallback to static content if no Elementor content is found
    ?>
    <div class="hero-section">
        <h1>Welcome to Our Website</h1>
        <p>Some static text or image for the hero section.</p>
    </div>
    <?php
}
