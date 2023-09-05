<?= set_radio($field, $value, $default = false); ?>
<?php if (false) : ?>
    <!-- # Permite que você defina o botão de opção que deve ser marcado. -->

    <!-- $field: Esta é uma string que representa o nome do campo da caixa de seleção. 
    Deve corresponder ao atributo 'name' do elemento <input> no HTML. -->

    <!-- $value: Este é o valor que deseja verificar. 
Se o valor do $field for igual ao $value, 
então essa caixa de seleção será marcada. -->

    <!-- $default: Este é um booleano que indica se a caixa de seleção deve ser marcada por padrão 
se nenhuma outra opção estiver selecionada. O valor padrão é false. -->

    <?php
    /*
* echo form_label('Aceito os termos e condições:', 'terms');
* echo form_checkbox('terms', 'accept', set_checkbox('terms', 'accept', true));
*/
    ?>

    <?php
    // $data = array(
    //     'name'          => 'gender',
    //     'id'            => 'male',
    //     'value'         => 'male',
    //     'checked'       => TRUE,
    // );
    // echo form_radio($data);

    // $data = array(
    //     'name'          => 'gender',
    //     'id'            => 'female',
    //     'value'         => 'female',
    //     'checked'       => FALSE,
    // );
    // echo form_radio($data);
    ?>
    <?= set_radio($field, $value = '', $default = false); ?>
<?php endif; ?>