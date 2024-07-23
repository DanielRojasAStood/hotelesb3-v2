<?php
$title = $args['title'];
$class = $args['class'];
$heading_level = isset($args['heading_level']) ? $args['heading_level'] : 'h2';
?>

<<?php echo $heading_level; ?> class="title <?php echo $class; ?>">
    <?php echo esc_html($title); ?>
</<?php echo $heading_level; ?>>
