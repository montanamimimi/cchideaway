<?php 

function cchideaway_get_posts( $posttype, $slug = false, $max = -1 ) {
    
    $args = array(
        'posts_per_page' => $max,
        'post_type' => $posttype,
        'fields' => 'ids'
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

    $res = get_posts($args);

    return $res;

}


function cchideaway_get_weekday_retreats( $day ) {

    $args = array(
        'posts_per_page' => 2,
        'post_type' => 'retreat',
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'weekday',
                'value' => $day,
                'compare' => '='
            )
        )
    );

    $res = get_posts($args);
    
    $ifEmptyArgs = array(
        'posts_per_page' => 1,
        'post_type' => 'retreat',
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'weekday',
                'value' => 'ifempty',
                'compare' => '='
            )
        )
    );

    $res2 = get_posts($ifEmptyArgs);

    if (count($res) < 2) {
        
        if (count($res) < 1) {
            array_push($res, $res2[0]);
        }

        array_push($res, $res2[0]);
    }

    return $res;
}

function cchideaway_get_retreats_add() {

    $res = array();

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'retreat',
        'fields' => 'ids',
        'meta_query' => array(
            array(
                'key' => 'weekday',
                'value' => 'additional',
                'compare' => '='
            )
        )
    );

    $the_query = new WP_query($args);

    if ( $the_query->have_posts() ) {
       
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            array_push($res, get_the_ID());
        }
        
    } 

    wp_reset_postdata();

    return $res;
}


function cchideaway_get_events_by_date( $slug = false, $max = -1 ) {
    
    $args = array(
        'posts_per_page' => $max,
        'post_type' => 'event',
        'fields' => 'ids'
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

    $posts = get_posts($args);

    $dates = array();

    foreach ($posts as $post) {
        $date = get_field('date', $post);
        array_push($dates, array(
            'id' => $post,
            'date' => strtotime($date)
        ));
    }

    usort($dates,  function ($a, $b) {
		return $a['date'] - $b['date'];
	});

    $res = array();

    foreach ($dates as $date) {
        array_push($res, $date['id']);
    }

    return $res;
}



