<?php 
get_header('new');
?>

    <main class="customSingle">
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="customSingle__hero">
                <div class="container">
                    <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            // Solo muestra la primera categoría
                            echo '<p class="h6 fw-bold">'. esc_html($categories[0]->name) . '</p>';
                        }
                    ?>
                    <h1 class="h1"><?php the_title(); ?></h1>
                </div>
            </section>

            <div class="container">
                <div class="customSingle__grid">
                    <section class="customSingle__content">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="">
                                <?php the_post_thumbnail('full'); ?>
                            </figure>
                        <?php endif; ?>
    
                        <?php the_content(); ?>
                    </section>
    
                    <section class="customSingle__sidebar">
                        <!-- Recommended -->
                            <?php get_template_part('template-parts/sections/section', 'posts-recommended'); ?>
                        <!-- End Recommended -->
                    </section>
                </div>
            </div>
        <?php endwhile; ?>
    </main>

<?php get_footer('new');