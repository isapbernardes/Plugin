<?php 
function br_activate_plugin() {
    if ( version_compare(get_bloginfo('version'),'6.0.0', '<') ){
       wp_die(__('Você precisa realizar a atualização do //seu WordPress', 'receitas'));
    };
}