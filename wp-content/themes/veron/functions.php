<?php

    
    require get_template_directory() . '/custom/Nos-Prestations.php';
    require get_template_directory() . '/custom/Faq.php';
    require get_template_directory() . '/custom/temoignages.php';
    require get_template_directory() . '/custom/quisommes_nous.php';
    require get_template_directory() . '/custom/services.php';
    
          register_sidebar(array(
		 'name' => '1st Sidebar',
		 'id' => 'first-sidebar',
		 'description' => 'the top sidebar',
		 'before_widget' => '<div>',
		 'after_widget' => '</div>'
	 ));
function top_navbar(){
  $defaults = array(
    'theme_location'  => 'top',
    'menu'            => 'main-nav',
    'container'       => 'div',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'header-menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  );

  wp_nav_menu( $defaults );
}
		
	add_theme_support( 'post-thumbnails');

	//Remove image deafult width and height 
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
		   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		   return $html;
	}

function pagination($pages = '', $range = 4){  
    $showitems = ($range * 2)+1;  
 
    global $paged;
    if(empty($paged)) $paged = 1;
 
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }   
    if(1 != $pages){
        echo "<div class=\"pagination\">";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }
        if($paged<$pages){
            echo "<a href=\"".get_pagenum_link($paged + 1)."\">></a>";
        }
            
        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );
function custom_custom_form_class_attr( $class ) {
  $class .= ' form-horizontal';
  return $class;
}

?>