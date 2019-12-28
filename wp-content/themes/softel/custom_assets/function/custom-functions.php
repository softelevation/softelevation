<?php

//-- Added Custom Menus --//
register_nav_menus( array(
			'header_menu' => esc_html__( 'Header Menu', 'softel' ),
		) );
register_nav_menu('footer_menu_left', __('Footer Menu Left', 'softel'));
register_nav_menu('footer_menu_right', __('Footer Menu Right', 'softel'));
register_nav_menu('footer_menu_center', __('Footer Menu Center', 'softel'));

//--*******Navigation Changes to Classes Start********--//

//-- Added class to the "li" element in nav--//
function change_menu_class($classes, $item, $args) {
  if($args->theme_location == 'header_menu') {
    $classes[] = 'rd-nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'change_menu_class', 1, 3);


//-- Added class to the "a" element in nav --//
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="rd-nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

//-- Added class to the Sub menu "li" element in nav--//
function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="rd-menu rd-navbar-dropdown" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); 


//--*******Navigation Changes to Classes End********--//

//--CPT for Slider --//
function cpt_for_slider() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'softel' ),
        'singular_name'       => _x( 'Sliders', 'Post Type Singular Name', 'softel' ),
        'menu_name'           => __( 'Sliders', 'softel' ),
        'parent_item_colon'   => __( 'Parent Slider', 'softel' ),
        'all_items'           => __( 'All Sliders', 'softel' ),
        'view_item'           => __( 'View Slider', 'softel' ),
        'add_new_item'        => __( 'Add New Slider', 'softel' ),
        'add_new'             => __( 'Add New Slider', 'softel' ),
        'edit_item'           => __( 'Edit Slider', 'softel' ),
        'update_item'         => __( 'Update Slider', 'softel' ),
        'search_items'        => __( 'Search Slider', 'softel' ),
        'not_found'           => __( 'Not Found', 'softel' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'softel' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'slider', 'softel' ),
        'description'         => __( 'Sliders for banner sction', 'softel' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'slider' ),
        /* A hierarchical CPT is like Pages and can have * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'register_meta_box_cb' => 'add_custom_metaboxes',
    );
    // Registering your Custom Post Type
    register_post_type( 'slider', $args );
 
}
 
add_action( 'init', 'cpt_for_slider', 0 );


//--CPT for Service Section --//
function cpt_for_services() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Our Services', 'Post Type General Name', 'softel' ),
        'singular_name'       => _x( 'Our Services', 'Post Type Singular Name', 'softel' ),
        'menu_name'           => __( 'Our Services', 'softel' ),
        'parent_item_colon'   => __( 'Our Services', 'softel' ),
        'all_items'           => __( 'All Services', 'softel' ),
        'view_item'           => __( 'View Services', 'softel' ),
        'add_new_item'        => __( 'Add New Service', 'softel' ),
        'add_new'             => __( 'Add New Service', 'softel' ),
        'edit_item'           => __( 'Edit Service', 'softel' ),
        'update_item'         => __( 'Update Service', 'softel' ),
        'search_items'        => __( 'Search Service', 'softel' ),
        'not_found'           => __( 'Not Found', 'softel' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'softel' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'services', 'softel' ),
        'description'         => __( 'Our Services sction', 'softel' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'services' ),
        /* A hierarchical CPT is like Pages and can have * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'register_meta_box_cb' => 'add_custom_metaboxes',
    );
    // Registering your Custom Post Type
    register_post_type( 'services', $args );
 
}
 
add_action( 'init', 'cpt_for_services', 0 );



 //-- Get Custom Post data --//
// function query_to_get_custom_post( $query ) {
//     if ( is_home() && $query->is_main_query() )
//         $query->set( 'post_type', array( 'post', 'slider' ) );
//     return $query;
// }
// add_action( 'pre_get_posts', 'query_to_get_custom_post' );

//-- For adding custom meta box --//
// function add_custom_metaboxes() {
//         add_meta_box(
//             'wpt_events_location',
//             'Event Location',
//             'wpt_events_location',
//             'events',
//             'side',
//             'default'
//         );
//     }

// function wpt_events_location() {
// 	global $post;
// 	// Nonce field to validate form request came from current site
// 	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
// 	// Get the location data if it's already been entered
// 	$location = get_post_meta( $post->ID, 'location', true );
// 	// Output the field
// 	echo '<input type="text" name="location" value="' . esc_textarea( $location )  . '" class="widefat">';
// }


//-- Breadcrumbs --//
function softel_breadcrumb(){
?>
	<section class="breadcrumbs-custom-inset">
	    <div class="breadcrumbs-custom">
	        <div class="container">
	            <h1 class="breadcrumbs-custom-title"><?php echo the_title(); ?></h1>
	            <ul class="breadcrumbs-custom-path">
	            	<?php if (!is_home()) { ?>
	              		<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
	              	<?php } ?>
	              	<?php if (is_single() || is_category() || is_page()) { ?>
	              		<li class="active"><?php echo the_title(); ?></li>
	          		<?php } ?>
	            </ul>
	        </div>
	        <div class="box-position" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/bg-elements.jpg);"></div>
	    </div>
	</section>
<?php 
}
add_shortcode('breadcrumb', 'softel_breadcrumb');
