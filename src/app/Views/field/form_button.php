<!-- # Gera um botão genérico. -->

<!-- $data: Este é uma string ou um array que especifica os atributos do botão. Se for uma string, 
será usada como o nome do botão. Se for um array, as chaves serão usadas como os nomes dos atributos 
e os valores serão usados como os valores dos atributos. -->

<!-- $content: Este é o conteúdo do botão, ou seja, o texto que será exibido no botão. -->

<!-- $extra: Esta é uma string que pode ser usada para adicionar quaisquer atributos extras ao botão. -->
<?php
/*
* $data = [
*     'name' => 'mostrar',
*     'id' => 'mostrar-id',
*     'class' => 'button-class'
* ];
* $content = 'Mostrar Detalhes';
* $extra = 'onclick="showDetails();"';
*/
?>
<?= form_button($data = [], $content = '', $extra = ''); ?>