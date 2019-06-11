<?php
		// register a custom post type called 'Prestations'
		function veron_post_type_prestations() {
		    $labels = array(
		        'name' => __( 'Prestations' ),
		        'singular_name' => __( 'Prestations' ),
		        'add_new' => __( 'New Prestation' ),
		        'add_new_item' => __( 'Add New Prestation' ),
		        'edit_item' => __( 'Edit Prestations' ),
		        'new_item' => __( 'New Prestations' ),
		        'view_item' => __( 'View Prestations' ),
		        'search_items' => __( 'Search Prestations' ),
		        'not_found' =>  __( 'No Prestations Found' ),
		        'not_found_in_trash' => __( 'No Prestations found in Trash' ),);
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

		    register_post_type( 'prestations', $args );
		}
		add_action( 'init', 'veron_post_type_prestations' );

		add_action("admin_init", "prestations_admin_init");
 
		function prestations_admin_init(){
		  add_meta_box("prestations_meta", "prestations Icon",  "prestations", "normal", "default");
		}
		

?>