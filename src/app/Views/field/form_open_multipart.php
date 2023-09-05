<?= form_open_multipart($action, $attributes, $hidden); ?>

<?php if (false) : ?>
    <!-- # Similar ao form_open, mas adiciona o atributo enctype como multipart/form-data para suportar o upload de arquivos. -->

    <!-- $action: Este é um string que representa o URI que o formulário enviará seus dados quando for submetido. 
Se este parâmetro for deixado em branco (como no seu exemplo), a URI atual será usada. -->

    <!-- $attributes: Este é um array associativo de atributos extras que você gostaria de adicionar à tag de abertura do formulário. 
Por exemplo, você pode querer adicionar uma classe CSS ou um atributo de id ao formulário. Neste caso, 
você pode passar ['class' => 'minha-classe', 'id' => 'meu-id'] como o segundo parâmetro. No seu exemplo, 
este array está vazio, o que significa que nenhum atributo extra será adicionado. -->

    <!-- $hidden: Este é um array associativo que contém campos ocultos a serem adicionados ao formulário. 
Cada par chave-valor no array se tornará um elemento de campo de formulário oculto, onde a chave é o nome do campo e 
o valor é o valor do campo. Por exemplo, se você passar ['usuario_id' => '123'], a função form_open() gerará o seguinte HTML: 
<input type="hidden" name="usuario_id" value="123" />. No seu exemplo, este array está vazio, 
o que significa que nenhum campo oculto será adicionado. -->

    <?php
    /*
* $hiddenFields = ['userId' => '123', 'token' => 'abc'];
* echo form_open_multipart('upload/process', ['class' => 'my-form', 'id' => 'myForm'], $hiddenFields);
*/
    ?>

    <?= form_open_multipart($action = '', $attributes = [], $hidden = []); ?>
<?php endif; ?>