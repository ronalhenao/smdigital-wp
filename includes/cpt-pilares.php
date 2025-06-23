<?php
// Registrar Custom Post Type
function smdigital_pilares_post_type() {

	$labels = array(
		'name'                  => _x( 'Pilares', 'Post Type General Name', 'smdigital' ),
		'singular_name'         => _x( 'Pilar', 'Post Type Singular Name', 'smdigital' ),
		'menu_name'             => __( 'Pilares', 'smdigital' ),
		'name_admin_bar'        => __( 'Pilar', 'smdigital' ),
		'archives'              => __( 'Archivo', 'smdigital' ),
		'attributes'            => __( 'Atributos', 'smdigital' ),
		'parent_item_colon'     => __( 'Pilar Padre', 'smdigital' ),
		'all_items'             => __( 'Todas Las Pilares', 'smdigital' ),
		'add_new_item'          => __( 'Agregar Pilar', 'smdigital' ),
		'add_new'               => __( 'Agregar Pilar', 'smdigital' ),
		'new_item'              => __( 'Nueva Pilar', 'smdigital' ),
		'edit_item'             => __( 'Editar Pilar', 'smdigital' ),
		'update_item'           => __( 'Actualizar Pilar', 'smdigital' ),
		'view_item'             => __( 'Ver Pilar', 'smdigital' ),
		'view_items'            => __( 'Ver Pilares', 'smdigital' ),
		'search_items'          => __( 'Buscar Pilar', 'smdigital' ),
		'not_found'             => __( 'No Encontrado', 'smdigital' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'smdigital' ),
		'featured_image'        => __( 'Imagen Destacada', 'smdigital' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'smdigital' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'smdigital' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'smdigital' ),
		'insert_into_item'      => __( 'Insertar en Pilar', 'smdigital' ),
		'uploaded_to_this_item' => __( 'Agregado en Pilar', 'smdigital' ),
		'items_list'            => __( 'Lista de Pilares', 'smdigital' ),
		'items_list_navigation' => __( 'Navegación de Pilares', 'smdigital' ),
		'filter_items_list'     => __( 'Filtrar Pilares', 'smdigital' ),
	);
	$args = array(
		'label'                 => __( 'Pilar', 'smdigital' ),
		'description'           => __( 'Pilares para el Sitio Web', 'smdigital' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-yes',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'smdigital_pilares', $args );

}
add_action( 'init', 'smdigital_pilares_post_type', 0 );