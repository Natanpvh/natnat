<?php
/**
 * Implementando funcionalidades de post personalizados
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
 /**
 * Configura a configuração de post personalizado do WordPress.
 *
 * @since Nat Nat 1.0
 *
 * @uses custom_post_type_galerias()
 */

function custom_post_type_galerias() {

	$labels = array(
		'name'                  => _x( 'Galerias', 'Post Type General Name', 'nat' ),
		'singular_name'         => _x( 'Galeria', 'Post Type Singular Name', 'nat' ),
		'menu_name'             => __( 'Galeria', 'nat' ),
		'name_admin_bar'        => __( 'Post Galeria', 'nat' ),
		'archives'              => __( 'Item Galeria', 'nat' ),
		'attributes'            => __( 'Item Galeria', 'nat' ),
		'parent_item_colon'     => __( 'Parent Galeria:', 'nat' ),
		'all_items'             => __( 'All Galeria', 'nat' ),
		'add_new_item'          => __( 'Add Nova Galeria', 'nat' ),
		'add_new'               => __( 'Add Nova Galeria', 'nat' ),
		'new_item'              => __( 'Nova Galeria', 'nat' ),
		'edit_item'             => __( 'Edit Galeria', 'nat' ),
		'update_item'           => __( 'Update Galeria', 'nat' ),
		'view_item'             => __( 'View Galeria', 'nat' ),
		'view_items'            => __( 'View Galeria', 'nat' ),
		'search_items'          => __( 'Search Galeria', 'nat' ),
		'not_found'             => __( 'Not found Galeria', 'nat' ),
		'not_found_in_trash'    => __( 'Not found in Trash Galeria', 'nat' ),
		'featured_image'        => __( 'Destaque de Image', 'nat' ),
		'set_featured_image'    => __( 'Set featured image', 'nat' ),
		'remove_featured_image' => __( 'Remove featured image', 'nat' ),
		'use_featured_image'    => __( 'Use as featured image', 'nat' ),
		'insert_into_item'      => __( 'Insert into item', 'nat' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Galeria', 'nat' ),
		'items_list'            => __( 'Items list Galeria', 'nat' ),
		'items_list_navigation' => __( 'Items list navigation', 'nat' ),
		'filter_items_list'     => __( 'Filter items list', 'nat' ),
	);
	$rewrite = array(
		'slug'                  => 'galerias',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Galeria', 'nat' ),
		'description'           => __( 'Galerias de Fotos', 'nat' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => 	false,
		'public'                => true,
		'rewrite'               => $rewrite,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-camera',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'galerias', $args );

}
add_action( 'init', 'custom_post_type_galerias', 0 );