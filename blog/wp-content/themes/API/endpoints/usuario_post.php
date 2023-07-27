<?php
function api_usuario_post($request) {

    $usuario_email = $request ['email'];
    
    $response = array(
        'nome' => 'Isadora',
        'email' => 'isadora.bernardes74@hotmail.com'
    );
    
    return rest_ensure_response($response);
}

function registrar_api_usuario_post() {
    register_rest_route('api', '/usuario', array(
        array(
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => 'api_usuario_post',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_usuario_post');



?>