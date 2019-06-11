<?php
		// register a custom post type called 'Faq'
		function veron_post_type_faq() {
		    $labels = array(
		        'name' => __( 'Faqs' ),
		        'singular_name' => __( 'Faq' ),
		        'add_new' => __( 'New Faq' ),
		        'add_new_item' => __( 'Add New Faq' ),
		        'edit_item' => __( 'Edit Faq' ),
		        'new_item' => __( 'New Faq' ),
		        'view_item' => __( 'View Faq' ),
		        'search_items' => __( 'Search Faq' ),
		        'not_found' =>  __( 'No Faq Found' ),
		        'not_found_in_trash' => __( 'No Faq found in Trash' ),);
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

		    register_post_type( 'faq', $args );
		}
		add_action( 'init', 'veron_post_type_faq' );

		add_action("admin_init", "faq_admin_init");
 
		function faq_admin_init(){
		  add_meta_box("service_meta", "Service Icon",  "service", "normal", "default");
		}
		

?>