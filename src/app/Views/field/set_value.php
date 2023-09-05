<!-- # Exibe o valor do item do post após a submissão do formulário. 
Muito útil em cenários de revalidação de formulário. -->

<!-- $field: Este é o nome do campo do formulário. 
Deve corresponder ao atributo 'name' do elemento de formulário em seu HTML. -->

<!-- $default: Este é o valor padrão que você deseja definir para o campo 
se não houver nenhum valor inserido pelo usuário. Por padrão, é uma string vazia. -->

<!-- $html_escape: Este é um booleano que determina se os caracteres especiais no valor do campo 
devem ser convertidos em entidades HTML para prevenir ataques de cross-site scripting (XSS). 
Por padrão, é true, o que significa que o valor do campo será escapado. -->

<?php
/*
* echo form_label('Nome:', 'name');
* echo form_input('name', set_value('name', 'Nome padrão', true));
*/
?>

<?= set_value($field, $default = '', $html_escape = true); ?>