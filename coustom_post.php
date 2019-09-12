<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type:  banner post.
	 */

	$labels = array(
		"name" => __( " banner post", "agency" ),
		"singular_name" => __( "ca", "agency" ),
		"menu_name" => __( "banner", "agency" ),
		"add_new" => __( "add new", "agency" ),
		"add_new_item" => __( "add new", "agency" ),
	);

	$args = array(
		"label" => __( " banner post", "agency" ),
		"labels" => $labels,
		"description" => "hello",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "banner", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "banner", $args );

	/**
	 * Post Type: section post.
	 */

	$labels = array(
		"name" => __( "section post", "agency" ),
		"singular_name" => __( "icon pack", "agency" ),
		"menu_name" => __( "section2", "agency" ),
		"all_items" => __( "section_2 post", "agency" ),
		"add_new" => __( "add new", "agency" ),
	);

	$args = array(
		"label" => __( "section post", "agency" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "section2", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor","custom-fields", "thumbnail", ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "section2", $args );

	/**
	 * Post Type: hover.
	 */

	$labels = array(
		"name" => __( "hover", "agency" ),
		"singular_name" => __( "Hover", "agency" ),
		"menu_name" => __( "Hover", "agency" ),
		"all_items" => __( "all hover post", "agency" ),
		"add_new" => __( "add new", "agency" ),
	);

	$args = array(
		"label" => __( "hover", "agency" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "hover", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "hover", $args );

	/**
	 * Post Type: coustom.
	 */

	$labels = array(
		"name" => __( "coustom", "agency" ),
		"singular_name" => __( "Coustom", "agency" ),
		"menu_name" => __( "coustom", "agency" ),
		"all_items" => __( "all post", "agency" ),
		"add_new" => __( "add new", "agency" ),
	);

	$args = array(
		"label" => __( "coustom", "agency" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "coustom", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "coustom", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
 ?>



 <?php 
function icon( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'icon2',
		'title' => esc_html__( 'icon', 'agency' ),
		'post_types' => array('post' ),
		'context' => 'normal',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' =>  'facebook',
				'type' => 'url',
				'name' => esc_html__( 'facebook', 'agency' ),
				'placeholder' => esc_html__( 'facebook', 'agency' ),
			),
			array(
				'id' =>  'linkdin',
				'type' => 'url',
				'name' => esc_html__( 'linkdin', 'agency' ),
				'placeholder' => esc_html__( 'linkdin', 'agency' ),
			),
			array(
				'id' =>  'dribbble',
				'type' => 'url',
				'name' => esc_html__( 'dribbble', 'agency' ),
				'placeholder' => esc_html__( 'dribbble', 'agency' ),
			),
			array(
				'id' =>  'be',
				'type' => 'url',
				'name' => esc_html__( 'be', 'agency' ),
				'placeholder' => esc_html__( 'be', 'agency' ),
			),
			array(
				'id' =>  'google',
				'type' => 'url',
				'name' => esc_html__( 'google', 'agency' ),
				'placeholder' => esc_html__( 'google', 'agency' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'icon' );

  ?>