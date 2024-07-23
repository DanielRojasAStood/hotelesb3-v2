<div class="header__menu" data-menu>
    <button class="header__menu-close" type="button" aria-label="close menu" data-close-menu>
        <span class="line line-top"></span>
        <span class="line line-center"></span>
    </button>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-es',
            'container' => 'nav',
            'container_class' => '',
            'menu_class' => '',
        ));
    ?>
</div>
