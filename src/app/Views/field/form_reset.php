<!-- # Gera um botão de reset. -->

<!-- $data: Este é uma string ou um array que especifica os atributos do botão de reset. Se for uma string, 
será usada como o nome do botão de reset. Se for um array, as chaves serão usadas como os nomes dos atributos e 
os valores serão usados como os valores dos atributos. -->

<!-- $value: Este é o valor do botão de reset, que é o texto exibido no botão. -->

<!-- $extra: Esta é uma string que pode ser usada para adicionar quaisquer atributos extras ao botão de reset. -->

<?php
/*
$data = [
    'name' => 'limpar',
    'id' => 'limpar-id',
    'class' => 'reset-class'
];
$value = 'Limpar Formulário';
$extra = 'onclick="return confirm(\'Você tem certeza que quer limpar o formulário?\');"';
*/
?>

<?= form_reset($data = '', $value = '', $extra = ''); ?>