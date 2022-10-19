<?php 


function cchideaway_get_featured_packages() {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'package',
        'tax_query' => array(
            array(
                'field' => 'slug',
                'taxonomy' => 'category',
                'terms' => 'featured'
            )
        )
    );

    $posts = query_posts($args);
    return $posts;
}