<?php 
/*
Plugin Name: Receitas
Description: Plugin receitas.
Version: 1.0
Author: B7Web
Author URI: https://b7.web.com.br
Text Domain: receitas
*/

if (!function_exists('add_action')){
    echo 'Ops! É apenas um plugin';
    exit;
}

// Setup 
define ('RECEITA_PLUGIN_URL',__FILE__);
// Include 
include ('includes/activate.php');
include ('includes/init.php');
include ('includes/admin/admin_init.php');
include ('includes/filter_content.php');

//Hooks

register_activation_hook(RECEITA_PLUGIN_URL, 'br_active_plugin');

add_action('init', 'br_receitas_init');
add_action ('admin_init', 'br_receitas_admin_init');
add_action('save_post_receita', 'br_save_post_admin', 10, 3);
add_filter ('the_content','br_filter_receita_content');

//Shortcodes


