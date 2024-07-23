<?php
/* 
Template Name: Plantilla Blog
*/

get_header('new');

$sitename       = get_bloginfo('name');
$group_title    = get_field('group_title');
$title          = isset($group_title['title']) ? esc_html($group_title['title']) : '';
$banner         = isset($group_title['banner']) ? esc_url($group_title['banner']) : '';

$group_category = get_field('group_category');
$title_category = isset($group_category['title']) ? esc_html($group_category['title']) : '';
?>

<main>
    <!-- Título y banner -->
    <?php get_template_part('template-parts/sections/section', 'title-banner', array('title' => $title, 'banner' => $banner, 'class' => 'text-center' )); ?>
    <!-- Título de la categoría -->

    <!-- Title -->
    <section>
        <div class="container--medium">
            <?php get_template_part('template-parts/content', 'title', array('title' => $title_category, 'class' => 'h2 text-center', 'heading_level' => 'h2'));?>
        </div>
    </section>
    <!-- End Title -->

    <!-- Category -->
        <?php get_template_part('template-parts/sections/section', 'category')?>
    <!-- End Category -->
    
    <div class="customBlog">
        <div class="container--large">
            <div class="customBlog__grid">
                <div>
                    <!-- Posts -->
                    <?php get_template_part('template-parts/sections/section', 'posts-cards'); ?>
                    <!-- End Posts -->
                </div>
                <div>
                    <!-- Recommended -->
                        <?php get_template_part('template-parts/sections/section', 'posts-recommended'); ?>
                    <!-- End Recommended -->
                </div>
            </div>
        </div>
    </div>

    
</main>


<?php get_footer('new'); ?>
