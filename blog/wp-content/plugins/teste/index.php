<?php 

/*
Plugin Name: Teste para Hooks

*/

function bt_title ( $title ){
    return '[ALTERADO]' .$title;
}

function bt_head() {
  do_action ('bt_personalizado');
}

function bt_personalizado() {
    echo "HOOK ACIONADO!";
}

add_filter('the_title', 'bt_title');


add_action('bt_personalizado', 'bt_personalizado');
add_action('wp_head', 'bt_head');


