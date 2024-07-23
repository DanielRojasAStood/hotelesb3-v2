<?php 
$sitename       = get_bloginfo('name');
$title          = get_field('title_testimonials');
$heading_level  = 'h2';
$items          = get_field('group_testimonials');

$title = isset($title) ? esc_html($title) : '';

$detail_1 = isset($items['detail_1']) ? esc_html($items['detail_1']) : '';
$detail_2 = isset($items['detail_2']) ? esc_html($items['detail_2']) : '';
$detail_3 = isset($items['detail_3']) ? esc_html($items['detail_3']) : '';
$detail_4 = isset($items['detail_4']) ? esc_html($items['detail_4']) : '';
$detail_5 = isset($items['detail_5']) ? esc_html($items['detail_5']) : '';

$name_1 = isset($items['name_1']) ? esc_html($items['name_1']) : '';
$name_2 = isset($items['name_2']) ? esc_html($items['name_2']) : '';
$name_3 = isset($items['name_3']) ? esc_html($items['name_3']) : '';
$name_4 = isset($items['name_4']) ? esc_html($items['name_4']) : '';
$name_5 = isset($items['name_5']) ? esc_html($items['name_5']) : '';

$image_1 = isset($items['image_1']) && esc_url($items['image_1']) ? esc_url($items['image_1']) : IMG_BASE . 'icon-user-anonimous.png';
$image_2 = isset($items['image_2']) && esc_url($items['image_2']) ? esc_url($items['image_2']) : IMG_BASE . 'icon-user-anonimous.png';
$image_3 = isset($items['image_3']) && esc_url($items['image_3']) ? esc_url($items['image_3']) : IMG_BASE . 'icon-user-anonimous.png';
$image_4 = isset($items['image_4']) && esc_url($items['image_4']) ? esc_url($items['image_4']) : IMG_BASE . 'icon-user-anonimous.png';
$image_5 = isset($items['image_5']) && esc_url($items['image_5']) ? esc_url($items['image_5']) : IMG_BASE . 'icon-user-anonimous.png';
?>

<section class="slick-testimonials">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
    <div class="slickTestimonials">
        <div class="slick-testimonials__item">
            <p class="copy"><?php echo $detail_1; ?></p>
            <div class="slick-testimonials__name">
                <figure class="slick-testimonials__img">
                    <img src="<?php echo $image_1; ?>" alt="slider 1 - <?php echo $sitename; ?>" title="slider 1" width="70" height="70">
                </figure>
                <div>
                    <p class="small"><?php echo $name_1; ?></p>
                    <p class="small">Cliente</p>
                </div>
            </div>
        </div>
        <div class="slick-testimonials__item">
            <p class="copy"><?php echo $detail_1; ?></p>
            <div class="slick-testimonials__name">
                <figure class="slick-testimonials__img">
                    <img src="<?php echo $image_2; ?>" alt="slider 2 - <?php echo $sitename; ?>" title="slider 2" width="70" height="70">
                </figure>
                <div>
                    <p class="small"><?php echo $name_2; ?></p>
                    <p class="small">Cliente</p>
                </div>
            </div>
        </div>
        <div class="slick-testimonials__item">
            <p class="copy"><?php echo $detail_1; ?></p>
            <div class="slick-testimonials__name">
                <figure class="slick-testimonials__img">
                    <img src="<?php echo $image_3; ?>" alt="slider 3 - <?php echo $sitename; ?>" title="slider 3" width="70" height="70">
                </figure>
                <div>
                    <p class="small"><?php echo $name_3; ?></p>
                    <p class="small">Cliente</p>
                </div>
            </div>
        </div>
        <div class="slick-testimonials__item">
            <p class="copy"><?php echo $detail_4; ?></p>
            <div class="slick-testimonials__name">
                <figure class="slick-testimonials__img">
                    <img src="<?php echo $image_4; ?>" alt="slider 4 - <?php echo $sitename; ?>" title="slider 4" width="70" height="70">
                </figure>
                <div>
                    <p class="small"><?php echo $name_4; ?></p>
                    <p class="small">Cliente</p>
                </div>
            </div>
        </div>
        <div class="slick-testimonials__item">
            <p class="copy"><?php echo $detail_5; ?></p>
            <div class="slick-testimonials__name">
                <figure class="slick-testimonials__img">
                    <img src="<?php echo $image_5; ?>" alt="slider 5 - <?php echo $sitename; ?>" title="slider 5" width="70" height="70">
                </figure>
                <div>
                    <p class="small"><?php echo $name_5; ?></p>
                    <p class="small">Cliente</p>
                </div>
            </div>
        </div>
    </div>
</section>