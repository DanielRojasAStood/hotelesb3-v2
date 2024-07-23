<?php
$sitename         = get_bloginfo('name');
$headerFooter     = get_page_by_path('contenido-header-footer')->ID;
$item             = ($headerFooter) ? get_field('grupo_header_top', $headerFooter) : null;

$icon_payu        = isset($item['icon_payu']) ? esc_url($item['icon_payu']) : '';
$link_payu        = isset($item['link_payu']['url']) ? esc_url($item['link_payu']['url']) : '';
$target_payu      = isset($item['link_payu']['target']) ? esc_attr($item['link_payu']['target']) : '';
$alt_payu         = isset($item['link_payu']['title']) ? esc_attr($item['link_payu']['title'] . ' - ' . $sitename) : '';
$title_payu       = isset($item['link_payu']['title']) ? esc_attr($item['link_payu']['title']) : '';

$icon_waze        = isset($item['icon_waze']) ? esc_url($item['icon_waze']) : '';
$link_waze        = isset($item['link_waze']['url']) ? esc_url($item['link_waze']['url']) : '';
$target_waze      = isset($item['link_waze']['target']) ? esc_attr($item['link_waze']['target']) : '';
$alt_waze         = isset($item['link_waze']['title']) ? esc_attr($item['link_waze']['title'] . ' - ' . $sitename) : '';
$title_waze       = isset($item['link_waze']['title']) ? esc_attr($item['link_waze']['title']) : '';

$icon_instagram   = isset($item['icon_instagram']) ? esc_url($item['icon_instagram']) : '';
$link_instagram   = isset($item['link_instagram']['url']) ? esc_url($item['link_instagram']['url']) : '';
$target_instagram = isset($item['link_instagram']['target']) ? esc_attr($item['link_instagram']['target']) : '';
$alt_instagram    = isset($item['link_instagram']['title']) ? esc_attr($item['link_instagram']['title'] . ' - ' . $sitename) : '';
$title_instagram  = isset($item['link_instagram']['title']) ? esc_attr($item['link_instagram']['title']) : '';

$icon_tiktok      = isset($item['icon_tiktok']) ? esc_url($item['icon_tiktok']) : '';
$link_tiktok      = isset($item['link_tiktok']['url']) ? esc_url($item['link_tiktok']['url']) : '';
$target_tiktok    = isset($item['link_tiktok']['target']) ? esc_attr($item['link_tiktok']['target']) : '';
$alt_tiktok       = isset($item['link_tiktok']['title']) ? esc_attr($item['link_tiktok']['title'] . ' - ' . $sitename) : '';
$title_tiktok     = isset($item['link_tiktok']['title']) ? esc_attr($item['link_tiktok']['title']) : '';

$icon_facebook    = isset($item['icon_facebook']) ? esc_url($item['icon_facebook']) : '';
$link_facebook    = isset($item['link_facebook']['url']) ? esc_url($item['link_facebook']['url']) : '';
$target_facebook  = isset($item['link_facebook']['target']) ? esc_attr($item['link_facebook']['target']) : '';
$alt_facebook     = isset($item['link_facebook']['title']) ? esc_attr($item['link_facebook']['title'] . ' - ' . $sitename) : '';
$title_facebook   = isset($item['link_facebook']['title']) ? esc_attr($item['link_facebook']['title']) : '';

$icon_youtube     = isset($item['icon_youtube']) ? esc_url($item['icon_youtube']) : '';
$link_youtube     = isset($item['link_youtube']['url']) ? esc_url($item['link_youtube']['url']) : '';
$target_youtube   = isset($item['link_youtube']['target']) ? esc_attr($item['link_youtube']['target']) : '';
$alt_youtube      = isset($item['link_youtube']['title']) ? esc_attr($item['link_youtube']['title'] . ' - ' . $sitename) : '';
$title_youtube    = isset($item['link_youtube']['title']) ? esc_attr($item['link_youtube']['title']) : '';
?>

<a href="<?php echo $link_payu ?>" target="<?php echo $target_payu; ?>">
    <img src="<?php echo $icon_payu; ?>" alt="<?php echo $alt_payu; ?>" width="60" height="40" title="<?php echo $title_payu; ?>">
</a>
<a href="<?php echo $link_waze ?>" target="<?php echo $target_waze; ?>">
    <img src="<?php echo $icon_waze; ?>" alt="<?php echo $alt_waze; ?>" width="35" height="35" title="<?php echo $title_waze; ?>">
</a>
<a href="<?php echo $link_instagram ?>" target="<?php echo $target_instagram; ?>">
    <img src="<?php echo $icon_instagram; ?>" alt="<?php echo $alt_instagram; ?>" width="40" height="40" title="<?php echo $title_instagram; ?>">
</a>
<a href="<?php echo $link_tiktok ?>" target="<?php echo $target_tiktok; ?>">
    <img src="<?php echo $icon_tiktok; ?>" alt="<?php echo $alt_tiktok; ?>" width="40" height="40" title="<?php echo $title_tiktok; ?>">
</a>
<a href="<?php echo $link_facebook ?>" target="<?php echo $target_facebook; ?>">
    <img src="<?php echo $icon_facebook; ?>" alt="<?php echo $alt_facebook; ?>" width="40" height="40" title="<?php echo $title_facebook; ?>">
</a>
<a href="<?php echo $link_youtube ?>" target="<?php echo $target_youtube; ?>">
    <img src="<?php echo $icon_youtube; ?>" alt="<?php echo $alt_youtube; ?>" width="40" height="40" title="<?php echo $title_youtube; ?>">
</a>