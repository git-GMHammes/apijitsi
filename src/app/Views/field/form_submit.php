<?= form_submit($data, $value, $extra); ?>
<?php if (false) : ?>
    <!-- # Gera um botão de envio. -->

    <!-- $data: Este parâmetro pode ser uma string ou um array. Se for uma string, 
ela será usada como o nome e o id do botão de envio. Se for um array, 
pode conter vários atributos para a tag do botão. As chaves do array representam o nome 
do atributo e o valor representa o valor do atributo. 
Por exemplo, ['name' => 'submit', 'id' => 'submit'] 
irá gerar um botão de envio com o nome e o id 'submit'. -->

    <!-- $value: Este é o valor padrão para o botão de envio. 
Este valor será exibido como o texto no botão. -->

    <!-- $extra: Esta é uma string contendo qualquer atributo adicional que você deseja adicionar à tag do botão. 
Por exemplo, 'class="btn btn-primary"' adicionará a classe 'btn' e 'btn-primary' ao botão. -->

    <?php
    /*
$submit = [
    'data' => [
        'name' => 'enviar'
    ],
    'value' => 'Enviar',
    'extra' => 'class="btn btn-outline-primary"'
];
    echo view('field/form_submit', $submit)
*/
    ?>

    <?= form_submit($data = '', $value = '', $extra = ''); ?>
<?php endif ?>