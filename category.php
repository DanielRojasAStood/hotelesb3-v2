<?php 
$sitename           = get_bloginfo('name');
$category_id        = get_queried_object_id();
$category_image_url = get_field('image_banner', 'category_' . $category_id);
$title              = single_cat_title('', false);

$posts_per_page     = 9;
$paged              = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args               = array(
                    'cat' => get_query_var('cat'),
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                    'order' => 'DESC'
                );

$query = new WP_Query( $args ); 

get_header("new"); 
?>

<main>
    <!-- Título y banner -->
        <?php get_template_part('template-parts/sections/section', 'title-banner', array('title' => $title, 'banner' => $category_image_url, 'class' => 'text-center' )); ?>
    <!-- Título de la categoría -->

    <div class="container--large">
        <a href="/blog" class="back" title="Regresar al blog">« Regresar al blog</a>
        <section class="customCardPost">
            <div class="customCardPost__grid">
                <?php 
                if ( $query->have_posts() ) : ?>
                    <?php 
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php $name = get_the_title(); ?>
                        <article id="post-<?php the_ID(); ?>" class="customCardPost__card">
                            <a href="<?php the_permalink(); ?>" title="<?php echo $name ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        } 
                                    ?>
                                <?php endif; ?>
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
    </div>

</main>

<?php get_footer("new"); ?>