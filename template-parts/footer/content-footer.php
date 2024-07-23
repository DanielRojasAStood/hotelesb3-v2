<?php
    $sitename           = get_bloginfo('name');
    $headerFooter       = get_page_by_path('contenido-header-footer')->ID;
    $item               = ($headerFooter) ? get_field('group_footer', $headerFooter) : null;

    $logo               = isset($item['logo_footer']) ? esc_url($item['logo_footer']) : '';
    $title_contact      = isset($item['title_contact']) ? esc_html($item['title_contact']) : '';
    $title_browse      = isset($item['title_browse']) ? esc_html($item['title_browse']) : '';
    $detail_1           = isset($item['detail_1']) ? $item['detail_1'] : '';
    $detail_2           = isset($item['detail_2']) ? $item['detail_2'] : '';

?>
<footer class="customFooter">
    <div class="container--medium">
        <div class="customFooter__grid">
            <div class="customFooter__col">
                <div>
                    <a href="/" title="Logo Footer">
                        <img src="<?php echo $logo; ?>" alt="Logo Footer - <?php $sitename; ?>" width="100" height="100" title="Logo Footer">
                    </a>
                </div>
                <div class="customFooter__social">
                    <!-- Social Media -->
                        <?php get_template_part('template-parts/content', 'social-media-widget') ?>
                    <!-- End Social Media -->
                </div>
            </div>
            <div class="customFooter__col">
                <h3 class="h3"><?php echo $title_contact ?></h3>
                <div class="copy">
                    <?php echo $detail_1 ?>
                </div>
            </div>
            <div class="customFooter__col">
                <h3 class="h3"><?php echo $title_browse ?></h3>
                <div class="copy">
                    <?php echo $detail_2 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="customFooter__bottom">
        <div class="container--medium">
            <figure>
                <img src="<?php echo IMG_BASE . 'metodos-de-pago-por-payu.png'?>" alt="Medios de pagos - <?php echo $sitename; ?>" title="Medios de pagos" width="300" height="51">
            </figure>
        </div>
    </div>
</footer>
