<?php 

include 'metabox_br_receitas_opcoes.php';
include 'enqueue.php';

function br_receitas_admin_init () {
    add_action('add_meta_boxes_receita', 'br_receitas_metabox');
    add_action ('admin_enqueue_scripts', 'br_admin_enqueue');
}

function br_receitas_metabox () {
     add_meta_box (
        'br_receita_opcoes',
        __('Opções da receita', 'receitas'), 'br_receita_opcoes', 'receita', 'normal','high',
     );
}

function br_save_post_admin($post_id, $post, $update) {
    if ($update) {
      return;
    }
  
    $receita_data = array (
      'ingredientes' => isset($_POST['br_ingredientes']) ? $_POST['br_ingredientes'] : '',
      'tempo' => isset($_POST['br_tempo']) ? $_POST['br_tempo'] : '',
      'utensilios' => isset($_POST['br_utensilios']) ? $_POST['br_utensilios'] : '',
      'dificuldade' => isset($_POST['br_dificuldade']) ? $_POST['br_dificuldade'] : '',
      'tipo' => isset($_POST['br_tipo']) ? $_POST['br_tipo'] : '',
    );
  
    update_post_meta($post_id, 'receita_data', $receita_data);
  }
  