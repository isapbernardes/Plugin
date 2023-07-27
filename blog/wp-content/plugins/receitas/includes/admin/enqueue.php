<?php 

function br_admin_enqueue() {
     global $typenow;
     if ($typenow != 'receita') {
        return;
     }

     // Registros 

     wp_register_style (
        'br_style',
        plugins_url('/assets/css/style.css', RECEITA_PLUGIN_URL)
     );
     wp_enqueue_style ('br_style');
}