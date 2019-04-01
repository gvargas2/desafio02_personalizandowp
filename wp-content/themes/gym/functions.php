<?php

// Registro de Estilos

function register_enqueue_style() {
  $theme_data = wp_get_theme();

  /*Registrando estilos*/
  wp_register_style('bootstrap_min',
  get_parent_theme_file_uri('/css/bootstrap.min.css'));
  wp_register_style('bootstrap_theme',
  get_parent_theme_file_uri('/css/bootstrap-theme.min.css'));
  wp_register_style('styles',
  get_parent_theme_file_uri('/css/styles.css'));

  /* Enqueue estilos */
  wp_enqueue_style('bootstrap_min');
  wp_enqueue_style('bootstrap_theme');
  wp_enqueue_style('styles');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

// Registro de Scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();


  wp_deregister_script('jquery-migrate');

  /*Resgistrando Scripts*/
  wp_register_script('jQuery_slim',
  get_parent_theme_file_uri('/js/vendor/jquery-3.3.1.slim.min.js'), null, null, true);
  wp_register_script('jQuery_min',
  get_parent_theme_file_uri('/js/vendor/jquery-1.11.2.min.js'), null, null, true);
  wp_register_script('modernizr',
  get_parent_theme_file_uri('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), null, null, true);
  wp_register_script('bootstrap',
  get_parent_theme_file_uri('/js/vendor/bootstrap.min.js'), null, null, true);
  wp_register_script('plugins',
  get_parent_theme_file_uri('/js/plugins.js'), null, null, true);
  wp_register_script('main',
  get_parent_theme_file_uri('/js/main.js'), null, null, true);

  /*Enqueue Scripts*/
  wp_enqueue_script('jQuery_slim');
  wp_enqueue_script('jQuery_min');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('plugins');
  wp_enqueue_script('main');


}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

// Register Custom Post Type
function cabecera_post_type() {

	$labels = array(
		'name'                  => _x( 'cursos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'curso', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cursos', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'curso', 'text_domain' ),
		'description'           => __( 'personalización de sección cursos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cursos', $args );

}
add_action( 'init', 'cabecera_post_type', 0 );

?>
