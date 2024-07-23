<?php
// Obtener la página actual
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 15,
        'paged' => $paged,
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

?>
<section class="customCardPost">
    <div class="customCardPost__grid">
        <?php 
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
            <?php $name = get_the_title(); ?>
            <article id="post-<?php the_ID(); ?>" class="customCardPost__card" title="<?php echo $name ?>">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        } 
                    ?>
                    <div class="customCardPost__copy">
                        <p><?php echo esc_html(get_the_date('F j, Y')); ?></p>
                        <?php get_template_part('template-parts/content', 'title', array('title' => $name, 'class' => 'h4 text-center', 'heading_level' => 'h3'));?>
                    </div>
                </a>
            </article>
            <?php
            endwhile;
            wp_reset_postdata(); // Restaurar datos del post original
        else :
            echo '<p>No se encontraron publicaciones.</p>';
        endif;
        ?>
    </div>
</section>

<!-- Paginación -->
<section>
    <div class="customPagination">
        <?php echo paginate_links(array('total' => $query->max_num_pages)); ?>
    </div>
</section>