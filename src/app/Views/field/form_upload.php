<!-- # Gera um campo de entrada para upload de arquivos. -->

<!-- $data: Este parâmetro pode ser uma string ou um array. 
Se for uma string, ela será tratada como o atributo 'name' do elemento de formulário. 
Se for um array, cada par chave-valor será adicionado como um atributo do elemento de formulário. 
Por exemplo, se você passar ['name' => 'userfile', 'id' => 'file1'], 
a função gerará um campo de upload de arquivo com o nome 'userfile' e o id 'file1'. -->

<!-- $value: Este é o valor padrão do campo de upload de arquivo. 
No entanto, devido à política de segurança dos navegadores, 
você não pode definir o valor padrão de um campo de upload de arquivo. 
Este parâmetro é incluído por consistência com outras funções de formulário, 
mas qualquer valor que você passar será ignorado. -->

<!-- $escape: Este é um booleano que determina se os caracteres especiais no nome do campo de upload de arquivo 
devem ser convertidos em entidades HTML. Isso é útil para evitar ataques de cross-site scripting (XSS). 
Se true, os caracteres serão escapados. -->

<?php
/*
* echo form_label('Arquivo:', 'file1');
* echo form_upload(['name' => 'userfile', 'id' => 'file1'], '', true);
*/
?>

<?= form_upload($data = [], $value = '', $escape = true); ?>