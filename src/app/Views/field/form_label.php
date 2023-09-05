<?= form_label($label_text, $id, $attributes); ?>

<?php if (false) : ?>
    <!-- # Gera uma etiqueta de formulário. -->

    <!-- $label_text: Esta é uma string que especifica o texto do rótulo. -->

    <!-- $id: Este é o ID do elemento de entrada ao qual o rótulo está associado. -->

    <!-- $attributes: Este é um array que pode ser usado para adicionar quaisquer atributos extras 
ao rótulo. As chaves são usadas como os nomes dos atributos e os valores são usados como os valores dos atributos. -->

    <?php
    /*
* $label_text = 'Nome do Usuário';
* $id = 'usuario-nome';
* $attributes = ['class' => 'label-class'];
*/
    ?>

    <?= form_label($label_text = '', $id = '', $attributes = []); ?>
<?php endif ?>