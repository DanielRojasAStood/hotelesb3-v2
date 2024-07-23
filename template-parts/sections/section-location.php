<?php 
$sitename       = get_bloginfo('name');
$title          = get_field('title_location');
$heading_level  = 'h2';
$group_location = get_field('group_location');

$title     = isset($title) ? esc_html($title) : '';
$map       = isset($group_location['map']) ? $group_location['map'] : '';

$map_image_id      = !empty($group_location["map"]['ID']) ? $group_location["map"]['ID'] : '';
$map_image_src     = wp_get_attachment_image_url($map_image_id, 'custom-size');
$map_image_srcset  = wp_get_attachment_image_srcset($map_image_id, 'custom-size');
$map_image_info    = wp_get_attachment_image_src($map_image_id, 'full');
$map_image_width   = ($map_image_info) ? $map_image_info[1] : '';
$map_image_height  = ($map_image_info) ? $map_image_info[2] : '';
$map_image_alt     = ($map_image_id) ? get_post_meta($map_image_id, '_wp_attachment_image_alt', true) : ''; 
$map_image_title   = ($map_image_id) ? get_the_title($map_image_id) : '';

$link_map_title   = isset($group_location['link_mapa']['title']) ? esc_attr($group_location['link_mapa']['title']) : '';
$link_map_url     = isset($group_location['link_mapa']['url']) ? esc_url($group_location['link_mapa']['url']) : '';
$link_map_target  = isset($group_location['link_mapa']['target']) ? esc_attr($group_location['link_mapa']['target']) : '';

$title_1   = isset($group_location['cta_1']['title']) ? esc_attr($group_location['cta_1']['title']) : '';
$cta_1     = isset($group_location['cta_1']['url']) ? esc_url($group_location['cta_1']['url']) : '';
$target_1  = isset($group_location['cta_1']['target']) ? esc_attr($group_location['cta_1']['target']) : '';
$copy_1    = isset($group_location['copy_1']) ? $group_location['copy_1'] : '';

$title_2   = isset($group_location['cta_2']['title']) ? esc_attr($group_location['cta_2']['title']) : '';
$cta_2     = isset($group_location['cta_2']['url']) ? esc_url($group_location['cta_2']['url']) : '';
$target_2  = isset($group_location['cta_2']['target']) ? esc_attr($group_location['cta_2']['target']) : '';
$copy_2    = isset($group_location['copy_2']) ? $group_location['copy_2'] : '';
?>
<section class="customLocation">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
    <div class="container--medium">
        <div class="customLocation__grid">
            <div class="customLocation__col">
                <a href="<?php echo $link_map_url ?>"  target="<?php echo $link_map_target; ?>" title="<?php echo $link_map_title ?>">
                    <figure class="customLocation__img" role="img" aria-label="<?php echo $title_1 . ' - ' . $sitename; ?>" style="background-image: url(<?php echo $map_image_src ?>)"></figure>
                </a>
            </div>
            <div class="customLocation__col">
                <div class="customLocation__content">
                    <div class="copy text-center">
                        <?php echo $copy_1 ; ?>
                    </div>
                    <?php if($title_1) { ?>
                        <a href="<?php echo $cta_1 ; ?>" class="button button--red" title="<?php echo $title_1 ; ?>" target="<?php echo $target_1 ; ?>">
                            <?php echo $title_1 ; ?>
                        </a>
                    <?php } ?>
                    <div class="copy text-center">
                        <?php echo $copy_2 ; ?>
                    </div>
                    <?php if($title_2) { ?>
                        <a href="<?php echo $cta_2 ; ?>" class="button button--red" title="<?php echo $title_2 ; ?>" target="<?php echo $target_2 ; ?>">
                            <?php echo $title_2 ; ?>
                        </a>
                    <?php } ?>
                    <div class="customLocation__social">
                        <?php get_template_part('template-parts/content', 'social-media-widget') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>