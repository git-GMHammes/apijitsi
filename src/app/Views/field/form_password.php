<?= form_password($data, $value, $escape); ?>

<?php if (isset($Message_required_field)) : ?>
    <div class="invalid-feedback"><?= $Message_required_field; ?></div>
<?php endif; ?>

<?php if (false) : ?>
    <!-- # Gera um campo de entrada de senha. -->

    <!-- $data: Este é um array associativo que pode conter vários atributos para a tag de entrada. 
    As chaves do array representam o nome do atributo e o valor representa o valor do atributo. 
    Por exemplo, ['name' => 'password', 'id' => 'password'] irá gerar uma entrada com o nome e o id 'password'. -->

    <!-- $value: Este é o valor padrão para o campo de entrada de senha. Na maioria das vezes, 
    isso é deixado em branco para a segurança, já que preencher um campo de senha por padrão pode expor dados sensíveis. -->

    <!-- $escape: Este é um booleano que determina se os caracteres especiais no valor devem ser codificados como 
    entidades HTML para evitar problemas de segurança, como ataques de injeção de HTML. 
    Se for verdadeiro (que é o padrão), todos os caracteres especiais no valor serão codificados. -->

    <?php
    /*
echo form_password(['name' => 'password', 'id' => 'password', 'required' => 'required'], '', true);
*/
    ?>

    <?= form_password($data = [], $value = '', $escape = true); ?>
<?php endif ?>