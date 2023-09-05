<!-- # Gera um campo de seleção múltipla.-->

<!-- $name: Este é o nome do elemento de seleção múltipla. Ele será usado como o atributo name do elemento HTML. -->

<!-- $options: Este é um array associativo de opções que o usuário pode selecionar. 
As chaves do array serão usadas como os valores das opções e os valores do array serão usados 
como os textos exibidos para as opções. -->

<!-- $selected: Este é um array dos valores das opções que devem ser selecionadas por padrão. -->

<!-- $extra: Este é uma string que pode ser usada para adicionar qualquer atributo extra ao 
elemento de seleção múltipla. -->

<?php
/*
* $name = 'frutas';
* $options = [
*     'maca' => 'Maçã',
*     'banana' => 'Banana',
*     'laranja' => 'Laranja',
*     'manga' => 'Manga'
* ];
* $selected = ['maca', 'manga'];
* $extra = 'id="frutas-id" class="multiselect-class" required="required"';
*/
?>

<?= form_multiselect($name = '', $options = [], $selected = [], $extra = ''); ?>