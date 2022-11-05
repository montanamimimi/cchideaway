<?php 


require_once( get_template_directory() . "/inc/helpers.php" );
require_once( get_template_directory() . "/inc/api.php" );

// Dont show admin bar

show_admin_bar(false);


// We want some thumbnails! 
	
add_theme_support( 'post-thumbnails' );

add_image_size('packagesLandscape', 544, 332, true);
add_image_size('teamAvatar', 200, 200, true);
add_image_size('eventImage', 290, 360, true);

// Register scripts 

function cchideaway_files() {

    wp_enqueue_script('googlemap_scripts', 'https://maps.googleapis.com/maps/api/js?key=' .  get_field('apikey', 'option') . '&callback=initMap', NULL, false, true);      
    wp_enqueue_script('googlemap_scripts', 'test' . get_field('apikey', 'option'), NULL, false, true);      
    wp_enqueue_script('plugins_scripts', get_theme_file_uri('/assets/plugins.js'), NULL, false, true);    
    wp_enqueue_script('cchideaway_scripts', get_theme_file_uri('/build/index.js'), NULL, false, true);     
    wp_enqueue_style('cchideaway_fonts', get_theme_file_uri('/fonts/font.css'));
    wp_enqueue_style('cchideaway_styles', get_theme_file_uri('/build/index.css'));
}


add_action('wp_enqueue_scripts', 'cchideaway_files');

// Register custom post types

function cchideaway_post_types() {

    register_post_type( 'activity', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'activities'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Activities',
            'add_new_item' => 'Add new activity',
            'edit_item' => 'Edit activity',
            'all_items' => 'All activities',
            'singular_name' => 'Activity'
        ),
        'menu_icon' => 'dashicons-palmtree'
    ));

    register_post_type( 'retreat', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'retreats'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Retreats',
            'add_new_item' => 'Add new retreat',
            'edit_item' => 'Edit retreat',
            'all_items' => 'All retreates',
            'singular_name' => 'Retreat'
        ),
        'menu_icon' => 'dashicons-pets'
    ));


    register_post_type( 'training', array(    
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'trainings'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Trainings',
            'add_new_item' => 'Add new training',
            'edit_item' => 'Edit training',
            'all_items' => 'All trainings',
            'singular_name' => 'Training'
        ),
        'menu_icon' => 'dashicons-buddicons-activity'
    ));

    register_post_type( 'event', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new event',
            'edit_item' => 'Edit event',
            'all_items' => 'All events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-carrot'
    ));

    register_post_type( 'service', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'services'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add new option',
            'edit_item' => 'Edit option',
            'all_items' => 'All options',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-editor-alignright'
    ));

    register_post_type( 'offer', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'offers'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Offers',
            'add_new_item' => 'Add new offer',
            'edit_item' => 'Edit offer',
            'all_items' => 'All offers',
            'singular_name' => 'Offer'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    register_post_type( 'team', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'teams'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Teams',
            'add_new_item' => 'Add new team',
            'edit_item' => 'Edit team',
            'all_items' => 'All teams',
            'singular_name' => 'Team'
        ),
        'menu_icon' => 'dashicons-id'
    ));

    register_post_type( 'package', array(    
        'supports' => array('title', 'thumbnail'),
        'taxonomies'  => array( 'category' ),
        'rewrite' => array(
            'slug' => 'packages'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Packages',
            'add_new_item' => 'Add new package',
            'edit_item' => 'Edit package',
            'all_items' => 'All packages',
            'singular_name' => 'Package'
        ),
        'menu_icon' => 'dashicons-smiley'
    ));

    register_post_type( 'room', array(    
        'supports' => array('title'),
        'rewrite' => array(
            'slug' => 'rooms'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Rooms',
            'add_new_item' => 'Add new room',
            'edit_item' => 'Edit room',
            'all_items' => 'All rooms',
            'singular_name' => 'Room'
        ),
        'menu_icon' => 'dashicons-heart'
    ));

    register_post_type( 'testimonial', array(    
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'testimonials'
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add new testimonial',
            'edit_item' => 'Edit testimonial',
            'all_items' => 'All testimonials',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon' => 'dashicons-testimonial'
    ));

}

// Add custom options page

if( function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => __('Settings','cchideaway'),
        'menu_title' => __('Settings','cchideaway'),
        'menu_slug' => 'theme-settings',
        'capability' => 'publish_pages',
        'redirect' => false
    ]);

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Mainpage Settings',
        'menu_title'    => 'Mainpage',
        'parent_slug'   => 'theme-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Hotel Settings',
        'menu_title'    => 'Hotel',
        'parent_slug'   => 'theme-settings',
    ));

    // acf_add_options_page();
    // acf_add_options_sub_page('Mainpage');
    // acf_add_options_sub_page('Hotel');
}




add_action('init', 'cchideaway_post_types');

function cchideawayMapKey( $api ) {
    $api['key'] = get_field('apikey', 'option');
    return $api; 
}

add_filter('acf/fields/google_map/api', 'cchideawayMapKey');


