<?= form_dropdown($name, $options, $selected, $extra); ?>

<?php if (false) : ?>
    <!-- # Gera um campo de seleção suspensa. -->

    <!-- $name: Este é o atributo 'name' do elemento de formulário. Este é um identificador que será usado quando 
o formulário for submetido para identificar os dados deste campo. -->

    <!-- $options: Este é um array associativo de opções que será usado para gerar os elementos de opção do menu suspenso. 
A chave do array será o valor do atributo 'value' da opção e o valor do array será o texto da opção. -->

    <!-- $selected: Este pode ser um valor único ou um array de valores que correspondem às opções que você deseja que 
sejam selecionadas por padrão. Se este valor corresponder a uma das chaves no array de opções, 
essa opção será renderizada com o atributo 'selected'. -->

    <!-- $extra: Esta é uma string que será incluída diretamente na tag do menu suspenso. 
Você pode usá-lo para adicionar qualquer atributo adicional que você desejar, 
como classes CSS, atributos de dados, etc. -->

    <?php
    /*
* $options = ['1' => 'Opção 1', '2' => 'Opção 2', '3' => 'Opção 3'];
* echo form_dropdown('selecao', $options, '2', 'class="meu-dropdown"');
*/
/*
<?= form_dropdown($name = 'my_dropdown', $options = ['option1' => 'Opção 1', 'option2' => 'Opção 2'], $selected = 'option1', $attributes = ['class' => 'form-control', 'id' => 'my-dropdown']); ?>
*/
    ?>

    <?= form_dropdown($name = '', $options = [], $selected = [], $extra = ''); ?>
<?php endif ?>