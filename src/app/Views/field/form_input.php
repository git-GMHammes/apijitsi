<?php if ($with_set) : ?>
    <?= form_input($data, set_value($field, $default, $html_escape), $escape); ?>
<?php else : ?>
    <?= form_input($data, $value, $escape); ?>
<?php endif; ?>

<?php if (isset($Message_required_field)) : ?>
    <div class="invalid-feedback"><?= $Message_required_field; ?></div>
<?php endif; ?>

<?php if (false) : ?>
    <!-- # Gera um campo de entrada padrão. Este pode ser personalizado passando um array de atributos. -->

    <!-- $data: Este é um array associativo que pode conter várias informações sobre o campo de entrada. 
Você pode usar este parâmetro para definir o name, id, class, value, type e qualquer outro atributo 
do elemento de entrada que você deseja criar. Se você passar uma string em vez de um array, 
a string será usada como o atributo name do elemento de entrada. O valor padrão deste parâmetro é um array vazio ([]). -->

    <!-- $value: Este é um string que será usado como o atributo value do elemento de entrada, 
caso o value não seja especificado no array $data. Se o primeiro parâmetro for um array 
e incluir uma chave 'value', este parâmetro será ignorado. O valor padrão deste parâmetro é uma string vazia (''). -->

    <!-- $escape: Este é um booleano que determina se o valor do campo de entrada deve ser escrito com segurança 
para evitar ataques de Cross-Site Scripting (XSS). Se for true, o valor do campo de entrada será escapado. 
Se for false, o valor será incluído como está. O valor padrão deste parâmetro é true. -->

<!-- 'type' => text: Campo de texto padrão. -->
<!-- 'type' => email: Campo de email, usado para inserir endereços de email. -->
<!-- 'type' => number: Campo numérico, onde apenas valores numéricos são permitidos. -->
<!-- 'type' => date: Campo de data, usado para selecionar uma data específica. -->
<!-- 'type' => time: Campo de hora, usado para selecionar um horário específico. -->

    <?php
    /*
* $data = [
*     'name' => 'username',
*     'id' => 'user-id',
*     'class' => 'input-class',
*     'required' => 'required'
* ];
* $value = '<Hello World>';
* $escape = true;
*/
    ?>
    <?php
    /*
$data = ['name' => 'username', 'class' => 'form-control '.(empty(form_error('username')) ? '' : 'is-invalid')];
$field = 'username';
$default = '';
$html_escape = true;
$escape = true;

echo form_input($data, set_value($field, $default, $html_escape), $escape);
echo form_error('username', '<div class="invalid-feedback">', '</div>');

*/
    ?>
    <?= form_input($data = [], $value = '', $escape = true); ?>
    <?= form_input($data, set_value($field, $default, $html_escape), $escape); ?>
<?php endif ?>