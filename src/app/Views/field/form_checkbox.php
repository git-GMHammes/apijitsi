<!-- # Gera um campo de seleção de caixa de seleção. -->

<!-- $data: Este é um array ou uma string que especifica os atributos do campo de seleção. 
Se for uma string, será usada como o nome do campo de seleção. Se for um array, as chaves serão usadas 
como os nomes dos atributos e os valores serão usados como os valores dos atributos. -->

<!-- $value: Este é o valor do campo de seleção que será usado quando o campo de seleção estiver marcado. -->

<!-- $checked: Este é um booleano que determina se o campo de seleção deve estar marcado por padrão. 
Se for true, o campo de seleção estará marcado; se for false, não estará. -->

<!-- $escape: Este é um booleano que determina se os valores dos atributos devem ser escapados para evitar 
ataques de injeção de HTML/JavaScript. Se for true, os valores dos atributos serão escapados; se for false, não serão. -->

<!-- $data: Este parâmetro pode ser uma string ou um array. Se for uma string, 
ela será tratada como o atributo 'name' do elemento de formulário. Se for um array, 
cada par chave-valor será adicionado como um atributo do elemento de formulário. 
Por exemplo, se você passar ['name' => 'aceito', 'id' => 'aceito1'], 
a função gerará uma caixa de seleção com o nome 'aceito' e o id 'aceito1'. -->

<!-- $value: Este é o valor da caixa de seleção. Quando o formulário é submetido, 
se esta caixa de seleção estiver selecionada, este valor é o que é enviado. -->

<!-- $checked: Este é um booleano que determina se a caixa de seleção deve ser marcada como selecionada por padrão. 
Se true, a caixa de seleção será renderizada com o atributo 'checked', 
o que significa que estará selecionada quando o usuário ver o formulário. -->

<!-- $escape: Este é um booleano que determina se os caracteres especiais no valor e no nome da caixa de seleção 
devem ser convertidos em entidades HTML. Isso é útil para evitar ataques de cross-site scripting (XSS). Se true, 
os caracteres serão escapados. -->

<?php
/*
* echo form_label('Eu aceito os termos e condições:', 'aceito1');
* echo form_checkbox(['name' => 'aceito', 'id' => 'aceito1'], 'aceito', false, true);
*/
?>
<?= form_checkbox($data = [], $value = '', $checked = false, $escape = true); ?>