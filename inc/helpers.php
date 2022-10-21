<?php 


function cchideaway_get_packages($slug = false) {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'package',
    );

    if ( $slug ) {
        $args['tax_query'] = array(
            array(
                'field' => 'slug',
                'taxonomy' => 'category',
                'terms' => $slug
            )
        );
    }

    $posts = query_posts($args);
    return $posts;
}


function cchideaway_get_testimonials() {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'testimonial',
    );

    $posts = query_posts($args);
    
    return $posts;
}

function cchideaway_get_teams( $slug = false ) {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'team',
    );

    if ( $slug ) {
        $args['tax_query'] = array(
            array(
                'field' => 'slug',
                'taxonomy' => 'category',
                'terms' => $slug
            )
        );
    }

    $posts = query_posts($args);
    
    return $posts;
}

function cchideaway_get_events( $slug = false ) {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'event'
    );

    if ( $slug ) {
        $args['tax_query'] = array(
            array(
                'field' => 'slug',
                'taxonomy' => 'category',
                'terms' => $slug
            )
        );
    }


    $posts = query_posts($args);
    
    return $posts;

}