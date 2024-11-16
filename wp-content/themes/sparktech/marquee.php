<?php
// Get marquee content from Customizer
$marquee_items = get_theme_mod('marquee_content', '');
$marquee_array = explode(',', $marquee_items); // Convert the comma-separated string into an array
?>

<div class="custom-marquee">
    <div class="marquee-container">
        <div class="marquee">
            <div class="primary-bg">
                <div class="marquee-content marquee-row-1">
                    <?php foreach ($marquee_array as $item): ?>
                        <span><i class="ri-gemini-fill"></i> <?php echo esc_html(trim($item)); ?> <span></span></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="black-bg">
                <div class="marquee-content marquee-row-2">
                    <?php foreach ($marquee_array as $item): ?>
                        <span><i class="ri-gemini-fill"></i> <?php echo esc_html(trim($item)); ?> <span></span></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>