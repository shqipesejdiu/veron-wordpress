<?php
		// register a custom post type called 'Quisommes'
		function veron_post_type_quisommes() {
		    $labels = array(
		        'name' => __( 'Quisommess' ),
		        'singular_name' => __( 'Quisommes' ),
		        'add_new' => __( 'New Quisommes' ),
		        'add_new_item' => __( 'Add New Quisommes' ),
		        'edit_item' => __( 'Edit Quisommes' ),
		        'new_item' => __( 'New Quisommes' ),
		        'view_item' => __( 'View Quisommes' ),
		        'search_items' => __( 'Search Quisommes' ),
		        'not_found' =>  __( 'No Quisommes Found' ),
		        'not_found_in_trash' => __( 'No Quisommes found in Trash' ),);
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

		    register_post_type( 'quisommes', $args );
		}
		add_action( 'init', 'veron_post_type_quisommes' );

		add_action("admin_init", "quisommes_admin_init");
 
		function quisommes_admin_init(){
		  add_meta_box("service_meta", "Service Icon",  "service", "normal", "default");
		}
		

?>