<?php
// Registrar Custom Post Type
function smdigital_logos_post_type() {

	$labels = array(
		'name'                  => _x( 'Logos', 'Post Type General Name', 'smdigital' ),
		'singular_name'         => _x( 'Logo', 'Post Type Singular Name', 'smdigital' ),
		'menu_name'             => __( 'Logos', 'smdigital' ),
		'name_admin_bar'        => __( 'Logo', 'smdigital' ),
		'archives'              => __( 'Archivo', 'smdigital' ),
		'attributes'            => __( 'Atributos', 'smdigital' ),
		'parent_item_colon'     => __( 'Logo Padre', 'smdigital' ),
		'all_items'             => __( 'Todas Las Logos', 'smdigital' ),
		'add_new_item'          => __( 'Agregar Logo', 'smdigital' ),
		'add_new'               => __( 'Agregar Logo', 'smdigital' ),
		'new_item'              => __( 'Nueva Logo', 'smdigital' ),
		'edit_item'             => __( 'Editar Logo', 'smdigital' ),
		'update_item'           => __( 'Actualizar Logo', 'smdigital' ),
		'view_item'             => __( 'Ver Logo', 'smdigital' ),
		'view_items'            => __( 'Ver Logos', 'smdigital' ),
		'search_items'          => __( 'Buscar Logo', 'smdigital' ),
		'not_found'             => __( 'No Encontrado', 'smdigital' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'smdigital' ),
		'featured_image'        => __( 'Imagen Destacada', 'smdigital' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'smdigital' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'smdigital' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'smdigital' ),
		'insert_into_item'      => __( 'Insertar en Logo', 'smdigital' ),
		'uploaded_to_this_item' => __( 'Agregado en Logo', 'smdigital' ),
		'items_list'            => __( 'Lista de Logos', 'smdigital' ),
		'items_list_navigation' => __( 'Navegación de Logos', 'smdigital' ),
		'filter_items_list'     => __( 'Filtrar Logos', 'smdigital' ),
	);
	$args = array(
		'label'                 => __( 'Logo', 'smdigital' ),
		'description'           => __( 'Logos para el Sitio Web', 'smdigital' ),
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
	register_post_type( 'smdigital_logos', $args );

}
add_action( 'init', 'smdigital_logos_post_type', 0 );