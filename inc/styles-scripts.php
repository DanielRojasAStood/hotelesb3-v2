<?php
// Función para encolar estilos
function hotelesb3_enqueue_styles() {
    // Registrar y encolar la hoja de estilo principal
    wp_enqueue_style('hotelesb3-main-style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    
    // Encolar hojas de estilo generadas por Webpack
    $cssFilePaths = glob(get_stylesheet_directory() . '/css/build/main.min.*.css');
    if (!empty($cssFilePaths)) {
        $cssFileURI = get_stylesheet_directory_uri() . '/css/build/' . basename($cssFilePaths[0]);
        wp_enqueue_style('main_css', $cssFileURI);
    }
}

// Función para encolar scripts de terceros
function b3_load_3rdparty_scripts() {
    // Registrar scripts
    wp_register_script('reservation_engine', 'https://b3-virrey-dot-secure-booking-co3.appspot.com/virreyscript', array(), '', true);
    wp_register_script('reservation_engine_placer', get_template_directory_uri() . '/widget_placer.js', array('jquery', 'reservation_engine'), '1.0.0', true);   

    // Encolar scripts
    wp_enqueue_script('reservation_engine');
    wp_enqueue_script('reservation_engine_placer');
    
    // Encolar scripts generados por Webpack
    $jsFilePaths = glob(get_stylesheet_directory() . '/js/build/main.min.*.js');
    if (!empty($jsFilePaths)) {
        $jsFileURI = get_stylesheet_directory_uri() . '/js/build/' . basename($jsFilePaths[0]);
        wp_enqueue_script('main_js', $jsFileURI, null, null, true);
    }
}

// Acción para encolar los estilos en WordPress
add_action('wp_enqueue_scripts', 'hotelesb3_enqueue_styles');

// Acción para encolar los scripts de terceros y habilitar jQuery
add_action('wp_enqueue_scripts', 'b3_load_3rdparty_scripts');

// Habilitar jQuery
if (!is_admin()) {
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_script('jquery');
    });
}
?>