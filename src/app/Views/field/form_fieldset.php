<!-- # Gera uma tag fieldset com uma tag legend opcional. -->

<!-- $legend_text: Este é uma string que especifica o texto da legenda do conjunto de campos. -->

<!-- $attributes: Este é um array que pode ser usado para adicionar quaisquer atributos extras ao conjunto de campos. 
As chaves são usadas como os nomes dos atributos e os valores são usados como os valores dos atributos. -->

<?php
/*
* $legend_text = 'Informações do Usuário';
* $attributes = ['id' => 'usuario-info', 'class' => 'fieldset-class'];
* echo form_fieldset($legend_text, $attributes);
* // Insira aqui os campos de entrada do formulário
* echo form_fieldset_close();
*/
?>
<!-- <fieldset id="usuario-info" class="fieldset-class"> -->
    <!-- <legend>Informações do Usuário</legend> -->
    <!-- Insira aqui os campos de entrada do formulário -->
<!-- </fieldset> -->
<?= form_fieldset($legend_text = '', $attributes = []); ?>