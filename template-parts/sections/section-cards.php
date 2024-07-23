<?php 
$sitename    = get_bloginfo('name');
$group_cards = get_field('group_cards');

$image_1_id      = !empty($group_cards["image_1"]['ID']) ? $group_cards["image_1"]['ID'] : '';
$image_1_src     = wp_get_attachment_image_url($image_1_id, 'custom-size');
$image_1_srcset  = wp_get_attachment_image_srcset($image_1_id, 'custom-size');
$image_1_info    = wp_get_attachment_image_src($image_1_id, 'full');
$image_1_width   = ($image_1_info) ? $image_1_info[1] : '';
$image_1_height  = ($image_1_info) ? $image_1_info[2] : '';
$image_1_alt     = ($image_1_id) ? get_post_meta($image_1_id, '_wp_attachment_image_alt', true) : ''; 
$image_1_title   = ($image_1_id) ? get_the_title($image_1_id) : '';

$title_1     = isset($group_cards['link_1']['title']) ? esc_attr($group_cards['link_1']['title']) : '';
$link_1      = isset($group_cards['link_1']['url']) ? esc_url($group_cards['link_1']['url']) : '';
$target_1    = isset($group_cards['link_1']['target']) ? esc_attr($group_cards['link_1']['target']) : '';
$copy_1      = isset($group_cards['copy_1']) ? esc_attr($group_cards['copy_1']) : '';
$alt_1       = isset($group_cards['link_1']['title']) ? esc_attr($group_cards['link_1']['title'] . ' - ' . $sitename) : '';

$image_2_id      = !empty($group_cards["image_2"]['ID']) ? $group_cards["image_2"]['ID'] : '';
$image_2_src     = wp_get_attachment_image_url($image_2_id, 'custom-size');
$image_2_srcset  = wp_get_attachment_image_srcset($image_2_id, 'custom-size');
$image_2_info    = wp_get_attachment_image_src($image_2_id, 'full');
$image_2_width   = ($image_2_info) ? $image_2_info[1] : '';
$image_2_height  = ($image_2_info) ? $image_2_info[2] : '';
$image_2_alt     = ($image_2_id) ? get_post_meta($image_2_id, '_wp_attachment_image_alt', true) : ''; 
$image_2_title   = ($image_2_id) ? get_the_title($image_2_id) : '';

$title_2     = isset($group_cards['link_2']['title']) ? esc_attr($group_cards['link_2']['title']) : '';
$link_2      = isset($group_cards['link_2']['url']) ? esc_url($group_cards['link_2']['url']) : '';
$target_2    = isset($group_cards['link_2']['target']) ? esc_attr($group_cards['link_2']['target']) : '';
$copy_2      = isset($group_cards['copy_2']) ? esc_attr($group_cards['copy_2']) : '';
$alt_2       = isset($group_cards['link_2']['title']) ? esc_attr($group_cards['link_2']['title'] . ' - ' . $sitename) : '';

$image_3_id      = !empty($group_cards["image_3"]['ID']) ? $group_cards["image_3"]['ID'] : '';
$image_3_src     = wp_get_attachment_image_url($image_3_id, 'custom-size');
$image_3_srcset  = wp_get_attachment_image_srcset($image_3_id, 'custom-size');
$image_3_info    = wp_get_attachment_image_src($image_3_id, 'full');
$image_3_width   = ($image_3_info) ? $image_3_info[1] : '';
$image_3_height  = ($image_3_info) ? $image_3_info[2] : '';
$image_3_alt     = ($image_3_id) ? get_post_meta($image_3_id, '_wp_attachment_image_alt', true) : ''; 
$image_3_title   = ($image_3_id) ? get_the_title($image_3_id) : '';
$title_3     = isset($group_cards['link_3']['title']) ? esc_attr($group_cards['link_3']['title']) : '';
$link_3      = isset($group_cards['link_3']['url']) ? esc_url($group_cards['link_3']['url']) : '';
$target_3    = isset($group_cards['link_3']['target']) ? esc_attr($group_cards['link_3']['target']) : '';
$copy_3      = isset($group_cards['copy_3']) ? esc_attr($group_cards['copy_3']) : '';
$alt_3       = isset($group_cards['link_3']['title']) ? esc_attr($group_cards['link_3']['title'] . ' - ' . $sitename) : '';

$image_4_id      = !empty($group_cards["image_4"]['ID']) ? $group_cards["image_4"]['ID'] : '';
$image_4_src     = wp_get_attachment_image_url($image_4_id, 'custom-size');
$image_4_srcset  = wp_get_attachment_image_srcset($image_4_id, 'custom-size');
$image_4_info    = wp_get_attachment_image_src($image_4_id, 'full');
$image_4_width   = ($image_4_info) ? $image_4_info[1] : '';
$image_4_height  = ($image_4_info) ? $image_4_info[2] : '';
$image_4_alt     = ($image_4_id) ? get_post_meta($image_4_id, '_wp_attachment_image_alt', true) : ''; 
$image_4_title   = ($image_4_id) ? get_the_title($image_4_id) : '';
$title_4     = isset($group_cards['link_4']['title']) ? esc_attr($group_cards['link_4']['title']) : '';
$link_4      = isset($group_cards['link_4']['url']) ? esc_url($group_cards['link_4']['url']) : '';
$target_4    = isset($group_cards['link_4']['target']) ? esc_attr($group_cards['link_4']['target']) : '';
$copy_4      = isset($group_cards['copy_4']) ? esc_attr($group_cards['copy_4']) : '';
$alt_4       = isset($group_cards['link_4']['title']) ? esc_attr($group_cards['link_4']['title'] . ' - ' . $sitename) : '';


?>
<section class="customCards">
    <div class="customCards__item">
        <figure class="customCards__img" role="img" aria-label="<?php echo $title_1 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_1_src ?>)" data-bg="<?php echo $image_1_src ?>">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_1; ?></h2>
            <p class="h3"><?php echo $copy_1; ?></p>
            <a class="button button--transparent" href="<?php echo $link_1; ?>" target="<?php echo $target_1; ?>" title="<?php echo $alt_1; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img" role="img" aria-label="<?php echo $title_2 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_2_src ?>)" data-bg="<?php echo $image_2_src ?>">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_2; ?></h2>
            <p class="h3"><?php echo $copy_2; ?></p>
            <a class="button button--transparent" href="<?php echo $link_2; ?>" target="<?php echo $target_2; ?>" title="<?php echo $alt_2; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img" role="img" aria-label="<?php echo $title_3 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_3_src ?>)" data-bg="<?php echo $image_3_src ?>">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_3; ?></h2>
            <p class="h3"><?php echo $copy_3; ?></p>
            <a class="button button--transparent" href="<?php echo $link_3; ?>" target="<?php echo $target_3; ?>" title="<?php echo $alt_3; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img" role="img" aria-label="<?php echo $title_4 . ' - ' . $sitename;  ?>" style="background-image: url(<?php echo $image_4_src ?>)" data-bg="<?php echo $image_4_src ?>">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_4; ?></h2>
            <p class="h3"><?php echo $copy_4; ?></p>
            <a class="button button--transparent" href="<?php echo $link_4; ?>" target="<?php echo $target_4; ?>" title="<?php echo $alt_4; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
</section>
