<?= form_radio($data, $escape = true); ?>&nbsp;<?= $set['label']?>&emsp;

<?php if (false) : ?>
    <!-- # Gera um campo de entrada de rádio. -->

    <!-- $data: Este parâmetro pode ser uma string ou um array. 
Se for uma string, ela será tratada como o atributo 'name' do elemento de formulário. 
Se for um array, cada par chave-valor será adicionado como um atributo do elemento de formulário. 
Por exemplo, se você passar ['name' => 'gender', 'id' => 'male'], 
a função gerará um botão de opção com o nome 'gender' e o id 'male'. -->

    <!-- $value: Este é o valor do botão de opção. 
Quando o formulário é submetido, se este botão de opção estiver selecionado, 
este valor é o que é enviado. -->

    <!-- $checked: Este é um booleano que determina se o botão de opção deve ser marcado como selecionado por padrão. 
Se true, o botão de opção será renderizado com o atributo 'checked', 
o que significa que estará selecionado quando o usuário ver o formulário. -->

    <!-- $escape: Este é um booleano que determina se os caracteres especiais no valor 
e no nome do botão de opção devem ser convertidos em entidades HTML. 
Isso é útil para evitar ataques de cross-site scripting (XSS). 
Se true, os caracteres serão escapados. -->

    <?php
    /*
* echo form_label('Masculino:', 'male');
* echo form_radio(['name' => 'gender', 'id' => 'male'], 'male', false, true);
* echo form_label('Feminino:', 'female');
* echo form_radio(['name' => 'gender', 'id' => 'female'], 'female', false, true);
*/
    ?>
    <?= form_radio($data = [], $value = '', $checked = false, $escape = true); ?>
<?php endif; ?>