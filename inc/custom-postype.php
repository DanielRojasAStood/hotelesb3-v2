<?php
// Registra el Custom Post Type para eventos
function registrar_custom_post_type_eventos() {
    $labels = array(
        'name'               => _x( 'Eventos', 'nombre general del tipo de entrada' ),
        'singular_name'      => _x( 'Evento', 'nombre singular del tipo de entrada' ),
        'add_new'            => _x( 'Agregar nuevo', 'evento' ),
        'add_new_item'       => __( 'Agregar nuevo Evento' ),
        'edit_item'          => __( 'Editar Evento' ),
        'new_item'           => __( 'Nuevo Evento' ),
        'all_items'          => __( 'Todos los Eventos' ),
        'view_item'          => __( 'Ver Evento' ),
        'search_items'       => __( 'Buscar Eventos' ),
        'not_found'          => __( 'No se encontraron Eventos' ),
        'not_found_in_trash' => __( 'No se encontraron Eventos en la papelera' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Eventos'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Contiene información sobre eventos y actividades programadas',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-calendar-alt',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        'taxonomies'    => array('category')
    );
    register_post_type( 'eventos', $args ); 
}
add_action( 'init', 'registrar_custom_post_type_eventos' );
