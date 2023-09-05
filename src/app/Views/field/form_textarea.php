<?= form_textarea($data); ?>

<?php if (isset($Message_required_field)) : ?>
    <div class="invalid-feedback"><?= $Message_required_field; ?></div>
<?php endif; ?>

<?php if (false) : ?>
<!-- 'name' => 'nome_do_campo' - Isto define o atributo name da tag textarea. 
Este é o nome que será usado quando os dados do formulário forem enviados ao servidor. -->


<!-- 'id' => 'id_do_campo' - Isto define o atributo id da tag textarea. 
O id é geralmente usado para identificar especificamente este campo para uso em JavaScript ou CSS. -->


<!-- 'value' => set_value('nome_do_campo', $default), 
- A chave 'value' define o texto inicial que será exibido dentro do textarea. 
A função set_value() é uma função útil do CodeIgniter que preenche automaticamente 
o campo com o valor que foi inserido na última tentativa de envio do formulário. 
Isso é útil para preservar os dados inseridos pelo usuário se houver erros no formulário 
que precisem ser corrigidos. O primeiro parâmetro para set_value() é o nome do campo e 
o segundo parâmetro é um valor padrão que será usado se não houver nenhum valor a ser repopulado. -->


<?php
// $data = [
//     'name'  => 'nome_do_campo',
//     'id'    => 'id_do_campo',
//     'value' => set_value('nome_do_campo', 'valor_default'),
//     'class' => 'form-control form-control-sm'
// ];

// echo form_textarea($data);
?>

    <?= form_textarea($data = []); ?>
    <?= form_textarea($data, set_value($field, $default, $html_escape), $escape); ?>
<?php endif ?>