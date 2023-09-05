<!-- # Permite que você defina a opção selecionada de um menu dropdown. -->

<!-- $field: Este é o nome do campo de seleção. Deve ser o mesmo nome que você usou 
ao criar o campo de seleção. -->

<!-- $value: Este é o valor da opção que você deseja verificar. 
Se o valor da opção no campo de seleção for igual a esse valor, 
a opção será marcada como selecionada. -->

<!-- $default: Este é um booleano que determina se a opção deve ser selecionada por padrão 
se nenhuma outra opção estiver selecionada. O valor padrão é false. -->

<?php
/*
* echo form_label('Escolha a sua fruta preferida:', 'fruits');
* $options = ['apple' => 'Apple', 'banana' => 'Banana', 'cherry' => 'Cherry'];
* echo form_dropdown('fruits', $options, '', set_select('fruits', 'apple', true));
*/
?>
<?= set_select($field, $value = '', $default = false); ?>