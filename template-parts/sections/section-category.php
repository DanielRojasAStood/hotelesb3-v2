<?php

    $sitename       = get_bloginfo('name');
    $group_category = get_field('group_category');
    $categories     = isset($group_category['category']) ? $group_category['category'] : [];

?>

<section class="customCardCategory">
    <div class="container">
        <div class="customCardCategory__grid">
            <?php 
                foreach ($categories as $category) { ?>
                    <div class="customCardCategory__card">
                        <?php 
                        $category_image_url = get_field('image', 'category_' . $category->term_id);
                        $category_link = get_term_link($category);

                            if ($category_image_url) { ?>
                                <figure class="customCardCategory__img">
                                    <img src="<?php echo esc_url($category_image_url); ?>" alt="<?php echo esc_attr($category->name) . ' - ' . $sitename ?>" title="<?php echo esc_attr($category->name) ?>">
                                </figure>
                        <?php } ?>
                        <div class="customCardCategory__copy">
                            <?php 
                                $name = esc_html($category->name);
                            ?>
                            <?php get_template_part('template-parts/content', 'title', array('title' => $name, 'class' => 'h4 text-center', 'heading_level' => 'h3'));?>
                            <a href="<?php echo esc_url($category_link); ?>" class="button button--transparent">CONOCE MÁS</a>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</section>