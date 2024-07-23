<?php
/* 
Template Name: Plantilla Evento
*/
get_header('new');

$pageID       = get_page_by_path('eventos')->ID;

$sitename       = get_bloginfo('name');
$group_title    = get_field('group_title', $pageID);
$title          = isset($group_title['title']) ? esc_html($group_title['title']) : '';
$banner         = isset($group_title['banner']) ? esc_url($group_title['banner']) : '';

$group_events    = get_field('group_events', $pageID);
$title_event    = !empty($group_events['heading']) ? esc_html($group_events['heading'] ) : '';

$group_gallery  = get_field('group_gallery', $pageID);
$heading_level_h2  = 'h2';
$heading_level_h3  = 'h3';
?>

<main>
    <!-- Title Banner -->
        <?php get_template_part('template-parts/sections/section', 'title-banner', array('title' => $title, 'banner' => $banner, 'class' => '' )) ?>
    <!-- End Title Banner -->

    <section>
        <div class="container--medium">
            <?php get_template_part('template-parts/content', 'title', array('title' => $title_event, 'class' => 'h2 text-center', 'heading_level' => $heading_level_h2));?>
        </div>
    </section>

    <?php
        $args = array(
            'post_type' => 'eventos',
            'posts_per_page' => -1,
        );
        $eventos_query = new WP_Query( $args );

        if ( $eventos_query->have_posts() ) :
            $contador = 1;
            while ( $eventos_query->have_posts() ) : $eventos_query->the_post();
        ?>
            <section class="customCardsEvents">
                <div class="container">
                    <div class="customCardsEvents__grid">
                        <div class="customCardsEvents__col">
                            <?php if ( get_field('group_gallery') ) : ?>
                                <div class="slickGallery">
                                    <?php 
                                        $group_gallery = get_field('group_gallery');
                                        $image_1 = $group_gallery['image_1'];
                                        $image_2 = $group_gallery['image_2'];
                                        $image_3 = $group_gallery['image_3'];
                                    ?>
                                    <figure>
                                        <img src="<?php echo $image_1; ?>" alt="Imagen 1 - <?php echo $sitename; ?>" title="Imagen 1" width="" height="">
                                    </figure>
                                    <figure>
                                        <img src="<?php echo $image_2; ?>" alt="Imagen 2 - <?php echo $sitename; ?>" title="Imagen 2" width="" height="">
                                    </figure>
                                    <figure>
                                        <img src="<?php echo $image_3; ?>" alt="Imagen 3 - <?php echo $sitename; ?>" title="Imagen 3" width="" height="">
                                    </figure>
                                </div>
                            <?php endif; ?>
                        </div>
                    
                        <div class="customCardsEvents__col">
                            <div>
                                <?php $title = get_the_title();?>
                                <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h3', 'heading_level' => $heading_level_h3));?>
                                <div class="h4">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="customCardsEvents__cta">
                                <div>
                                    <span>Iconos</span>
                                    <span>Iconos</span>
                                    <span>Iconos</span>
                                </div>
                                <?php 
                                    $link = $group_gallery['link']; 
                                    $url = $link['url']; 
                                    $title = $link['title']; 
                                ?>
                                <a class="button button--red" href="<?php echo $url; ?>"><?php echo $title; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
        <?php
            $contador++;
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <p><?php _e( 'No se encontraron eventos.', 'textdomain' ); ?></p>
        <?php endif; ?>


</main>

<?php get_footer('new');