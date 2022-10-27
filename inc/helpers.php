<?php 

function cchideaway_get_posts( $posttype, $slug = false, $max = -1 ) {
    
    $args = array(
        'posts_per_page' => $max,
        'post_type' => $posttype,
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


function cchideaway_get_weekday_retreats( $day ) {
    $retreats = cchideaway_get_posts('retreat');

    $args = array(
        'posts_per_page' => 2,
        'post_type' => 'retreat',
        'meta_query' => array(
            array(
                'key' => 'weekday',
                'value' => $day,
                'compare' => '='
            )
        )
    );
    
    $ifEmptyArgs= array(
        'posts_per_page' => 1,
        'post_type' => 'retreat',
        'meta_query' => array(
            array(
                'key' => 'weekday',
                'value' => 'ifempty',
                'compare' => '='
            )
        )
    );

    $ifEmpty = query_posts($ifEmptyArgs)[0];

    $weekdays = query_posts($args);

    if (count($weekdays) < 2) {
        
        if (count($weekdays) < 1) {
            array_push($weekdays, $ifEmpty);
        }

        array_push($weekdays, $ifEmpty);
    }


    return $weekdays;
}


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

function cchideaway_get_activities( $slug = false ) {
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'activity',
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