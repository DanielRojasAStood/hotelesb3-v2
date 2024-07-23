<?php 
$sitename = get_bloginfo('name');
$title    = get_field('title_calification');
$items    = get_field('group_calification');

$title = isset($title) ? esc_html($title) : '';
$heading_level  = 'h2';

$image_1 = isset($items['image_1']) ? esc_url($items['image_1']) : '';
$image_2 = isset($items['image_2']) ? esc_url($items['image_2']) : '';
$image_3 = isset($items['image_3']) ? esc_url($items['image_3']) : '';
$image_4 = isset($items['image_4']) ? esc_url($items['image_4']) : '';

$numer_1 = isset($items['numer_1']) ? $items['numer_1'] : '';
$numer_2 = isset($items['numer_2']) ? $items['numer_2'] : '';
$numer_3 = isset($items['numer_3']) ? $items['numer_3'] : '';
$numer_4 = isset($items['numer_4']) ? $items['numer_4'] : '';

$title_1     = isset($items['link_1']['title']) ? esc_attr($items['link_1']['title']) : '';
$link_1      = isset($items['link_1']['url']) ? esc_url($items['link_1']['url']) : '';
$target_1    = isset($items['link_1']['target']) ? esc_attr($items['link_1']['target']) : '';
$alt_1       = isset($items['link_1']['title']) ? esc_attr($items['link_1']['title'] . ' - ' . $sitename) : '';

$title_2     = isset($items['link_2']['title']) ? esc_attr($items['link_2']['title']) : '';
$link_2      = isset($items['link_2']['url']) ? esc_url($items['link_2']['url']) : '';
$target_2    = isset($items['link_2']['target']) ? esc_attr($items['link_2']['target']) : '';
$alt_2       = isset($items['link_2']['title']) ? esc_attr($items['link_2']['title'] . ' - ' . $sitename) : '';

$title_3     = isset($items['link_3']['title']) ? esc_attr($items['link_3']['title']) : '';
$link_3      = isset($items['link_3']['url']) ? esc_url($items['link_3']['url']) : '';
$target_3    = isset($items['link_3']['target']) ? esc_attr($items['link_3']['target']) : '';
$alt_3       = isset($items['link_3']['title']) ? esc_attr($items['link_3']['title'] . ' - ' . $sitename) : '';

$title_4     = isset($items['link_4']['title']) ? esc_attr($items['link_4']['title']) : '';
$link_4      = isset($items['link_4']['url']) ? esc_url($items['link_4']['url']) : '';
$target_4    = isset($items['link_4']['target']) ? esc_attr($items['link_4']['target']) : '';
$alt_4       = isset($items['link_4']['title']) ? esc_attr($items['link_4']['title'] . ' - ' . $sitename) : '';
?>

<section class="customCalification">
    <div class="container--medium">
        <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
        <div class="customCalification__grid">
            <a href="<?php echo $link_1; ?>" target="<?php echo $target_1; ?>" title="<?php echo $alt_1; ?>">
                <figure class="customCalification__img">
                    <img src="<?php echo $image_1; ?>" alt="Imagen 1 - <?php echo $sitename; ?>" title="Imagen 1" width="140" height="100">
                </figure>
                <h3 class="h3"><?php echo $numer_1; ?></h3>
                <p class="copy"><?php echo $title_1; ?></p>
            </a>

            <a href="<?php echo $link_2; ?>" target="<?php echo $target_2; ?>" title="<?php echo $alt_2; ?>">
                <figure class="customCalification__img">
                    <img src="<?php echo $image_2; ?>" alt="Imagen 1 - <?php echo $sitename; ?>" title="Imagen 1" width="60" height="61">
                </figure>
                <h3 class="h3"><?php echo $numer_2; ?></h3>
                <p class="copy"><?php echo $title_2; ?></p>
            </a>

            <a href="<?php echo $link_3; ?>" target="<?php echo $target_3; ?>" title="<?php echo $alt_3; ?>">
                <figure class="customCalification__img">
                    <img src="<?php echo $image_3; ?>" alt="Imagen 1 - <?php echo $sitename; ?>" title="Imagen 1" width="225" height="41">
                </figure>
                <h3 class="h3"><?php echo $numer_3; ?></h3>
                <p class="copy"><?php echo $title_3; ?></p>
            </a>

            <a href="<?php echo $link_4; ?>" target="<?php echo $target_4; ?>" title="<?php echo $alt_4; ?>">
                <figure class="customCalification__img">
                    <img src="<?php echo $image_4; ?>" alt="Imagen 1 - <?php echo $sitename; ?>" title="Imagen 1" width="178" height="50">
                </figure>
                <h3 class="h3"><?php echo $numer_4; ?></h3>
                <p class="copy"><?php echo $title_4; ?></p>
            </a>
        </div>
    </div>
</section>