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

add_action('init', 'cchideaway_post_types');


