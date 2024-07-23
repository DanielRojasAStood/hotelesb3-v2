<?php 
$sitename       = get_bloginfo('name');
$title          = get_field('title_slider_text');
$heading_level  = 'h2';
$items          = get_field('group_slider_text');

$title = isset($title) ? esc_html($title) : '';

$slider_1_image_id      = !empty($items["slider_1"]['ID']) ? $items["slider_1"]['ID'] : '';
$slider_1_image_src     = wp_get_attachment_image_url($slider_1_image_id, 'custom-size');
$slider_1_image_srcset  = wp_get_attachment_image_srcset($slider_1_image_id, 'custom-size');
$slider_1_image_info    = wp_get_attachment_image_src($slider_1_image_id, 'full');
$slider_1_image_width   = ($slider_1_image_info) ? $slider_1_image_info[1] : '';
$slider_1_image_height  = ($slider_1_image_info) ? $slider_1_image_info[2] : '';
$slider_1_image_alt     = ($slider_1_image_id) ? get_post_meta($slider_1_image_id, '_wp_attachment_image_alt', true) : ''; 
$slider_1_image_title   = ($slider_1_image_id) ? get_the_title($slider_1_image_id) : '';

$slider_2_image_id      = !empty($items["slider_1"]['ID']) ? $items["slider_1"]['ID'] : '';
$slider_2_image_src     = wp_get_attachment_image_url($slider_2_image_id, 'custom-size');
$slider_2_image_srcset  = wp_get_attachment_image_srcset($slider_2_image_id, 'custom-size');
$slider_2_image_info    = wp_get_attachment_image_src($slider_2_image_id, 'full');
$slider_2_image_width   = ($slider_2_image_info) ? $slider_2_image_info[1] : '';
$slider_2_image_height  = ($slider_2_image_info) ? $slider_2_image_info[2] : '';
$slider_2_image_alt     = ($slider_2_image_id) ? get_post_meta($slider_2_image_id, '_wp_attachment_image_alt', true) : ''; 
$slider_2_image_title   = ($slider_2_image_id) ? get_the_title($slider_2_image_id) : '';

$slider_3_image_id      = !empty($items["slider_1"]['ID']) ? $items["slider_1"]['ID'] : '';
$slider_3_image_src     = wp_get_attachment_image_url($slider_3_image_id, 'custom-size');
$slider_3_image_srcset  = wp_get_attachment_image_srcset($slider_3_image_id, 'custom-size');
$slider_3_image_info    = wp_get_attachment_image_src($slider_3_image_id, 'full');
$slider_3_image_width   = ($slider_3_image_info) ? $slider_3_image_info[1] : '';
$slider_3_image_height  = ($slider_3_image_info) ? $slider_3_image_info[2] : '';
$slider_3_image_alt     = ($slider_3_image_id) ? get_post_meta($slider_3_image_id, '_wp_attachment_image_alt', true) : ''; 
$slider_3_image_title   = ($slider_3_image_id) ? get_the_title($slider_3_image_id) : '';

$copy     = isset($items['copy']) ? $items['copy'] : '';
?>

<section class="slick-small">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
    <div class="container--medium">
        <div class="slick-small__grid">
            <div class="slick-small__col">
                <div class="slickSmall">
                    <figure class="slick-small__img" role="img" aria-label="<?php echo $sitename ?>" style="background-image: url(<?php echo $slider_1_image_src ?>)" data-bg="<?php echo $slider_1_image_src ?>">
                    </figure>
                    <figure class="slick-small__img" role="img" aria-label="<?php echo $sitename ?>" style="background-image: url(<?php echo $slider_2_image_src ?>)" data-bg="<?php echo $slider_2_image_src ?>">
                    </figure>
                    <figure class="slick-small__img" role="img" aria-label="<?php echo $sitename ?>" style="background-image: url(<?php echo $slider_3_image_src ?>)" data-bg="<?php echo $slider_3_image_src ?>">
                    </figure>
                   
                </div>
            </div>
            <div class="slick-small__col">
                <div class="slick-small__copy copy">
                    <?php echo $copy ?>
                </div>
            </div>
        </div>
    </div>
</section>