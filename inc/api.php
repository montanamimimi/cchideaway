<?php 

add_action('rest_api_init', function () {
    register_rest_route('cc/v2', 'register', [
        'method' => WP_REST_SERVER::CREATABLE,
        'callback' => 'user_create_callback',
    ]);
});

function user_create_callback(WP_REST_Request $request)
{
    $name = 'Name';
    $email = 'mnt_13@mail.ru';

    $args = wp_parse_args(
        $request->get_params(),
        [
            'redirect' => '',
        ]
    );


   
    $message = "CCHIDEAWAY : \r\n \r\n";   


    $subject = "TESTTETSTSTSTSE";
    $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    $success = true;

    $to = 'mnt_13@mail.ru';
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
       
    

  wp_redirect($args['redirect']);
        
  exit();
}
