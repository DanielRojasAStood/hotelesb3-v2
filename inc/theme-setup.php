<?php
// Agregar titulo a logo
function add_title_to_custom_logo_image($html) {
    $site_name = get_bloginfo('name');
    $html = preg_replace('/<img(.*?)(\/>)/', '<img$1 title="' . esc_attr($site_name) . '" $2', $html);
    return $html;
}
add_filter('get_custom_logo', 'add_title_to_custom_logo_image');

// Agregar múltiples ubicaciones de menú
function mytheme_register_menus() {
    register_nav_menus(array(
        'menu-es' => __('Menu ES'),
        'button-translate' => __('Boton Idioma'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Subir SVG
function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

// Guarda archivos JSON de ACF en la carpeta '/acf-json' dentro del tema activo.
function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

// custom size
function img_setup_theme() {
    add_image_size('custom-size', 423, 519, true); // Normal resolution
    add_image_size('custom-size-2x', 846, 1038, true); // High resolution
}
add_action('after_img_setup_theme', 'setup_theme');


