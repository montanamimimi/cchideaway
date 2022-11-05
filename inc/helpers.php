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


function cchideaway_text_icons($text) {

    $allLetters = array(
        'A' => array(
            'filename' => 'a',
            'size' => 'uppercase'
        ),
        'a' => array(
            'filename' => 'a_',
            'size' => 'lowercase-basic'
        ),
        'B' => array(
            'filename' => 'b',
            'size' => 'uppercase'
        ),
        'b' => array(
            'filename' => 'b_',
            'size' => 'lowercase-hight'
        ),
        'C' => array(
            'filename' => 'c',
            'size' => 'uppercase'
        ),
        'c' => array(
            'filename' => 'c_',
            'size' => 'lowercase-basic'
        ),
        'D' => array(
            'filename' => 'd',
            'size' => 'uppercase'
        ),
        'd' => array(
            'filename' => 'd_',
            'size' => 'lowercase-hight'
        ),
        'E' => array(
            'filename' => 'e',
            'size' => 'uppercase'
        ),
        'e' => array(
            'filename' => 'e_',
            'size' => 'lowercase-basic'
        ),
        'F' => array(
            'filename' => 'f',
            'size' => 'uppercase'
        ),
        'f' => array(
            'filename' => 'f_',
            'size' => 'lowercase-hight'
        ),
        'I' => array(
            'filename' => 'i',
            'size' => 'uppercase'
        ),
        'i' => array(
            'filename' => 'i_',
            'size' => 'lowercase-i'
        ),
        'J' => array(
            'filename' => 'j',
            'size' => 'uppercase'
        ),
        'j' => array(
            'filename' => 'j_',
            'size' => 'lowercase-low'
        ),
        'K' => array(
            'filename' => 'k',
            'size' => 'uppercase'
        ),
        'k' => array(
            'filename' => 'k_',
            'size' => 'lowercase-hight'
        ),
        'L' => array(
            'filename' => 'l',
            'size' => 'uppercase'
        ),
        'l' => array(
            'filename' => 'l_',
            'size' => 'lowercase-hight'
        ),
        'M' => array(
            'filename' => 'm',
            'size' => 'uppercase'
        ),
        'm' => array(
            'filename' => 'm_',
            'size' => 'lowercase-wide'
        ),
        'N' => array(
            'filename' => 'n',
            'size' => 'uppercase'
        ),
        'n' => array(
            'filename' => 'n_',
            'size' => 'lowercase-basic'
        ),
        'Q' => array(
            'filename' => 'q',
            'size' => 'uppercase'
        ),
        'q' => array(
            'filename' => 'q_',
            'size' => 'lowercase-low'
        ),
        'O' => array(
            'filename' => 'o',
            'size' => 'uppercase'
        ),
        'o' => array(
            'filename' => 'o_',
            'size' => 'lowercase-basic'
        ),
        'P' => array(
            'filename' => 'p',
            'size' => 'uppercase'
        ),
        'p' => array(
            'filename' => 'p_',
            'size' => 'lowercase-low'
        ),
        'R' => array(
            'filename' => 'r',
            'size' => 'uppercase'
        ),
        'r' => array(
            'filename' => 'r_',
            'size' => 'lowercase-basic'
        ),
        'S' => array(
            'filename' => 's',
            'size' => 'uppercase'
        ),
        's' => array(
            'filename' => 's_',
            'size' => 'lowercase-basic'
        ),
        'T' => array(
            'filename' => 't',
            'size' => 'uppercase'
        ),
        't' => array(
            'filename' => 't_',
            'size' => 'lowercase-hight'
        ),
        'U' => array(
            'filename' => 'u',
            'size' => 'uppercase'
        ),
        'u' => array(
            'filename' => 'u_',
            'size' => 'lowercase-basic'
        ),
        'V' => array(
            'filename' => 'v',
            'size' => 'uppercase'
        ),
        'v' => array(
            'filename' => 'v_',
            'size' => 'lowercase-basic'
        ),
        'W' => array(
            'filename' => 'w',
            'size' => 'uppercase'
        ),
        'w' => array(
            'filename' => 'w_',
            'size' => 'lowercase-wide'
        ),
        'X' => array(
            'filename' => 'x',
            'size' => 'uppercase'
        ),
        'x' => array(
            'filename' => 'x_',
            'size' => 'lowercase-basic'
        ),
        'Y' => array(
            'filename' => 'y',
            'size' => 'uppercase'
        ),
        'y' => array(
            'filename' => 'y_',
            'size' => 'lowercase-low'
        ),
        'Z' => array(
            'filename' => 'z',
            'size' => 'uppercase'
        ),
        'z' => array(
            'filename' => 'a_',
            'size' => 'lowercase-basic'
        ),
    );

    $result = '';
    $needle = '~';
    $lastPos = 0;
    $positions = array();

    while (($lastPos = strpos($text, $needle, $lastPos))!== false) {
        $positions[] = $lastPos;
        $lastPos = $lastPos + strlen($needle);
    }

    $prevPos = 0;
    
    foreach ($positions as $value) {

        $result .= substr($text, $prevPos, $value - $prevPos);
        $letter = substr($text, $value+1, 1);

        if (isset($allLetters[$letter])) {           
           $url = get_theme_file_uri('/assets/images/letters/' . $allLetters[$letter]['filename'] . '.svg');
           $result .= '<img class="svg-image-text svg-' . $allLetters[$letter]['size'] .'" src="' . $url  . '">';
        } else {
            $result .= $letter;            
        }

        $prevPos = $value + 2;
    }

    $result .= substr($text, $prevPos);
    
    return $result;
}


