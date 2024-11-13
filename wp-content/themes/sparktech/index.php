<?php
?>


<?php get_header(); ?>

<?php
// If it's the homepage, or any singular page, display Elementor content
if (have_posts()):
    while (have_posts()):
        the_post();
        // Display Elementor content if available
        the_content();
    endwhile;
endif;
?>

<?php get_template_part('hero',''); ?>

<h1>outsite</h1>

<?php get_footer(); ?>