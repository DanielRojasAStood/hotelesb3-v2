<?php
/* 
Template Name: Plantilla Inicio
*/
get_header('new');?>

<main>
    <!-- Slider -->
        <?php get_template_part('template-parts/sections/section', 'slider') ?>
    <!-- End Slider -->

    <!-- Text -->
        <?php get_template_part('template-parts/sections/section', 'text') ?>
    <!-- End Text -->

    <!-- Cards -->
    <?php get_template_part('template-parts/sections/section', 'cards') ?>
    <!-- End Cards -->

    <!-- Location -->
    <?php get_template_part('template-parts/sections/section', 'location') ?>
    <!-- End Location -->

    <!-- Slider Small -->
    <?php get_template_part('template-parts/sections/section', 'slider-small') ?>
    <!-- End Slider Small -->

    <!-- Slider Testimonials -->
    <?php get_template_part('template-parts/sections/section', 'testimonials') ?>
    <!-- End Slider Testimonials -->

    <!-- Slider Calification -->
    <?php get_template_part('template-parts/sections/section', 'calification') ?>
    <!-- End Slider Calification -->

</main>

<?php get_footer('new');