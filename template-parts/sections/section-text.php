<?php 
$group_text     = get_field('group_text');
$title          = isset($group_text['title']) ? esc_html($group_text['title']) : '';
$heading_level  = 'h2';
$copy           = isset($group_text['copy']) ? $group_text['copy'] : '';
?>
<section class="customText">
    <div class="container--medium text-center">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
        <div class="copy">
            <?php echo $copy; ?>
        </div>
    </div>
</section>
