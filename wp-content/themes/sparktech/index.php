<?php
?>

<?php get_header(); ?>

<div id="scrollsmoother-container">
    <?php get_template_part('hero'); ?>
    <?php get_template_part('marquee'); ?>
    <?php
    // get_template_part('counterArea');
    ?>
    <?php get_template_part('about'); ?>
    <?php get_template_part('counter'); ?>
    <?php get_template_part('services'); ?>
    <?php get_template_part('whyUs'); ?>
    <?php get_template_part('portfolio'); ?>
    <?php get_template_part('review'); ?>
    <?php get_template_part('team'); ?>
    <?php get_template_part('marquee'); ?>
    <?php
    get_template_part('getInTouch');
    ?>

</div>


<?php
get_footer();
?>
