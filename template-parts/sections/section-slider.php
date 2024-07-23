<?php 
$sitename = get_bloginfo('name');
$items    = get_field('group_slider');

$image_1_id      = !empty($items["slider_1"]['ID']) ? $items["slider_1"]['ID'] : '';
$image_1_src     = wp_get_attachment_image_url($image_1_id, 'custom-size-2x');
$image_1_srcset  = wp_get_attachment_image_srcset($image_1_id, 'custom-size-2x');
$image_1_info    = wp_get_attachment_image_src($image_1_id, 'full');
$image_1_width   = ($image_1_info) ? $image_1_info[1] : '';
$image_1_height  = ($image_1_info) ? $image_1_info[2] : '';
$image_1_alt     = ($image_1_id) ? get_post_meta($image_1_id, '_wp_attachment_image_alt', true) : ''; 
$image_1_title   = ($image_1_id) ? get_the_title($image_1_id) : '';

$image_2_id      = !empty($items["slider_2"]['ID']) ? $items["slider_2"]['ID'] : '';
$image_2_src     = wp_get_attachment_image_url($image_2_id, 'custom-size-2x');
$image_2_srcset  = wp_get_attachment_image_srcset($image_2_id, 'custom-size-2x');
$image_2_info    = wp_get_attachment_image_src($image_2_id, 'full');
$image_2_width   = ($image_2_info) ? $image_2_info[1] : '';
$image_2_height  = ($image_2_info) ? $image_2_info[2] : '';
$image_2_alt     = ($image_2_id) ? get_post_meta($image_2_id, '_wp_attachment_image_alt', true) : ''; 
$image_2_title   = ($image_2_id) ? get_the_title($image_2_id) : '';

$image_3_id      = !empty($items["slider_3"]['ID']) ? $items["slider_3"]['ID'] : '';
$image_3_src     = wp_get_attachment_image_url($image_3_id, 'custom-size-2x');
$image_3_srcset  = wp_get_attachment_image_srcset($image_3_id, 'custom-size-2x');
$image_3_info    = wp_get_attachment_image_src($image_3_id, 'full');
$image_3_width   = ($image_3_info) ? $image_3_info[1] : '';
$image_3_height  = ($image_3_info) ? $image_3_info[2] : '';
$image_3_alt     = ($image_3_id) ? get_post_meta($image_3_id, '_wp_attachment_image_alt', true) : ''; 
$image_3_title   = ($image_3_id) ? get_the_title($image_3_id) : '';

$title_1  = isset($items['link_1']['title']) ? esc_attr($items['link_1']['title']) : '';
$link_1   = isset($items['link_1']['url']) ? esc_url($items['link_1']['url']) : '';
$target_1 = isset($items['link_1']['target']) ? esc_attr($items['link_1']['target']) : '';

$title_2  = isset($items['link_2']['title']) ? esc_attr($items['link_2']['title']) : '';
$link_2   = isset($items['link_2']['url']) ? esc_url($items['link_2']['url']) : '';
$target_2 = isset($items['link_2']['target']) ? esc_attr($items['link_2']['target']) : '';

$title_3  = isset($items['link_3']['title']) ? esc_attr($items['link_3']['title']) : '';
$link_3   = isset($items['link_3']['url']) ? esc_url($items['link_3']['url']) : '';
$target_3 = isset($items['link_3']['target']) ? esc_attr($items['link_3']['target']) : '';

$title_4  = isset($items['link_4']['title']) ? esc_attr($items['link_4']['title']) : '';
$link_4   = isset($items['link_4']['url']) ? esc_url($items['link_4']['url']) : '';
$target_4 = isset($items['link_4']['target']) ? esc_attr($items['link_4']['target']) : '';

$title_5  = isset($items['link_5']['title']) ? esc_attr($items['link_5']['title']) : '';
$link_5   = isset($items['link_5']['url']) ? esc_url($items['link_5']['url']) : '';
$target_5 = isset($items['link_5']['target']) ? esc_attr($items['link_5']['target']) : '';
?>

<section class="slick-banner">
    <div class="slick-banner__overlay"></div>
    <div class="slick-banner__copy">
        <?php if($title_1) { ?><a href="<?php echo $link_1; ?>" target="<?php echo $target_1; ?>" title="<?php echo $title_1; ?>"><?php echo $title_1; ?></a><?php }?>
        <?php if($title_2) { ?><a href="<?php echo $link_2; ?>" target="<?php echo $target_2; ?>" title="<?php echo $title_2; ?>"><?php echo $title_2; ?></a><?php }?>
        <?php if($title_3) { ?><a href="<?php echo $link_3; ?>" target="<?php echo $target_3; ?>" title="<?php echo $title_3; ?>"><?php echo $title_3; ?></a><?php }?>
        <?php if($title_4) { ?><a href="<?php echo $link_4; ?>" target="<?php echo $target_4; ?>" title="<?php echo $title_4; ?>"><?php echo $title_4; ?></a><?php }?>
        <?php if($title_5) { ?><a href="<?php echo $link_5; ?>" target="<?php echo $target_5; ?>" title="<?php echo $title_5; ?>"><?php echo $title_5; ?></a><?php }?>
    </div>
    <div class="slickBanner">
        <figure class="slick-banner__img" role="img" aria-label="<?php echo $title_1 . ' - ' . $sitename; ?>" style="background-image: url(<?php echo $image_1_src ?>)" data-bg="<?php echo $image_1_src ?>">
        </figure>

        <figure class="slick-banner__img" role="img" aria-label="<?php echo $title_2 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_2_src ?>)" data-bg="<?php echo $image_2_src ?>">
        </figure>

        <figure class="slick-banner__img" role="img" aria-label="<?php echo $title_3 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_3_src ?>)" data-bg="<?php echo $image_3_src ?>">
        </figure>
    </div>
</section>
