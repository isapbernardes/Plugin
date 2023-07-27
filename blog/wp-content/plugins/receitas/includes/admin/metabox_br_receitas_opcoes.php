<?php

function br_receita_opcoes($post) {
    $receita_data = get_post_meta($post->ID, 'receita_data', true);
      if (empty($receita_data)) {
        $receita_data = array (
          'ingredientes' => '',
          'tempo' => '',
          'utensilios' => '',
          'dificuldade' => '0',
          'tipo' => ''
        );
      }
    ?>
    Ingredientes:<br/>
    <input type="text" name="br_ingredientes" value="<?php echo $receita_data['ingredientes']; ?>"><br/><br/>

    Tempo da receita:<br/>
    <input type="text" name="br_tempo" value="<?php echo $receita_data['tempo']; ?>"><br/><br/>

    Utensílios:<br/>
    <input type="text" name="br_utensilios" value="<?php echo $receita_data['utensilios']; ?>"><br/><br/>

    Nível de dificuldade:<br/>
    <select name="br_dificuldade">
        <option value="0" <?php echo ($receita_data ['dificuldade']==='0')?'selected = "selected"':''; ?> >Iniciante</option>
        <option value="1"  <?php echo ($receita_data ['dificuldade']==='1')?'selected = "selected"':''; ?>>Intermediário</option>

        <option value="2"  <?php echo ($receita_data ['dificuldade']==='2')?'selected = "selected"':''; ?> >Avançado</option>
    </select><br/><br/>

    Tipo da receita: <br/>
    <input type="text" name="br_tipo" value = "<?php echo $receita_data ['tipo'];?>" />
  <?php
}
?>

