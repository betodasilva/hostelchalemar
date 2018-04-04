<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Quartos.
	 */

	$labels = array(
		"name" => __( "Quartos", "chalemar" ),
		"singular_name" => __( "Quarto", "chalemar" ),
	);

	$args = array(
		"label" => __( "Quartos", "chalemar" ),
		"labels" => $labels,
		"description" => "We are lucky to live in a glorious age that gives us everything we could ask for as a human race. What more could you need when you have meat covered in cheese nestled between bread as a complete meal.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quartos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-multisite",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "quartos", $args );

	/**
	 * Post Type: Depoimentos.
	 */

	$labels = array(
		"name" => __( "Depoimentos", "chalemar" ),
		"singular_name" => __( "Depoimento", "chalemar" ),
	);

	$args = array(
		"label" => __( "Depoimentos", "chalemar" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "depoimentos", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => array( "editor" ),
	);

	register_post_type( "depoimentos", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
