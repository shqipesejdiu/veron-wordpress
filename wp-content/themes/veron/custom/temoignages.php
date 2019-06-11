<?php
		// register a custom post type called 'Temoignages'
		function veron_post_type_temoignages() {
		    $labels = array(
		        'name' => __( 'Temoignages' ),
		        'singular_name' => __( 'Temoignages' ),
		        'add_new' => __( 'New Temoignages' ),
		        'add_new_item' => __( 'Add New Temoignages' ),
		        'edit_item' => __( 'Edit Temoignages' ),
		        'new_item' => __( 'New Temoignages' ),
		        'view_item' => __( 'View Temoignages' ),
		        'search_items' => __( 'Search Temoignages' ),
		        'not_found' =>  __( 'No Temoignages Found' ),
		        'not_found_in_trash' => __( 'No Temoignages found in Trash' ),);
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'publicly_queryable' => true,
		         'supports' => array(
                    'title',
                    'thumbnail',
                    'editor',
                ),
		        'show_ui' => true,
		        'query_var' => true,
		        'rewrite' => true,
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'menu_position' => null,
				'map_meta_cap' => true, 
		        'menu_icon' => 'dashicons-admin-tools',
		        'supports' => array('title','editor','thumbnail', 'page-attributes'));

		    register_post_type( 'temoignages', $args );
		}
		add_action( 'init', 'veron_post_type_temoignages' );

		add_action("admin_init", "temoignages_admin_init");
 
		function temoignages_admin_init(){
		  add_meta_box("service_meta", "Service Icon",  "service", "normal", "default");
		}
		

?>