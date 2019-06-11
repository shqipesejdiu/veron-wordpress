<?php
		// register a custom post type called 'Services'
		function veron_post_type_services() {
		    $labels = array(
		        'name' => __( 'Services' ),
		        'singular_name' => __( 'Service' ),
		        'add_new' => __( 'New Service' ),
		        'add_new_item' => __( 'Add New Service' ),
		        'edit_item' => __( 'Edit Service' ),
		        'new_item' => __( 'New Service' ),
		        'view_item' => __( 'View Service' ),
		        'search_items' => __( 'Search Service' ),
		        'not_found' =>  __( 'No Service Found' ),
		        'not_found_in_trash' => __( 'No Services found in Trash' ),);
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

		    register_post_type( 'service', $args );
		}
		add_action( 'init', 'veron_post_type_services' );

		add_action("admin_init", "service_admin_init");
 
		function service_admin_init(){
		  add_meta_box("service_meta", "Service Icon", "service_details_meta", "service", "normal", "default");
		}
		 
		function service_details_meta() {
		 	$ret = '<p><label>Font Awesome icon: </label>
		    <input type="text" size="70" placeholder="Icon element from Font Awesome" name="service_font_awesome" value="' . get_service_field("service_font_awesome") . '" /></p>';
		    $ret .= '<p><label>Image: </label>
		    <input type="file" size="70" name="service_image"  /></p>';
		    
		    echo $ret;
		}

		function get_service_field($service_field) {
		    global $post;
		 
		    $custom = get_post_custom($post->ID);
		 
		    if (isset($custom[$service_field])) {
		        return $custom[$service_field][0];
		    }
		}

		add_action('save_post', 'save_service_details');
 
		function save_service_details(){
		   	global $post;
		 
		   	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		      	return;

		   	if(get_post_type($post) != 'service')
		      	return;
		 
		 
		   	save_service_field("service_font_awesome");
		   	save_image_field("service_image");

		}
		function save_service_field($service_field) {
		    global $post;
		 
		    if(isset($_POST[$service_field])) {
		        update_post_meta($post->ID, $service_field, $_POST[$service_field]);
		    }
		}

		function save_image_field($image_field) {
		    global $post;
		 
		    if(isset($_POST[$image_field])) {
		        update_post_meta($post->ID, $image_field, $_POST[$image_field]);
		    }
		}
?>