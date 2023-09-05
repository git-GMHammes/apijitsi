<!-- # Gera um campo de entrada oculto. Se o primeiro parâmetro for um array, produzirá uma entrada oculta para cada elemento do array. -->

<!-- $name: O primeiro parâmetro pode ser uma string ou um array. Se for uma string, 
ela será usada como o atributo name do elemento de entrada oculto. Se for um array, 
cada par chave-valor no array se tornará um campo de entrada oculto, onde a chave é 
o atributo name e o valor é o atributo value. O tipo de parâmetro é indicado como string|array 
para refletir que ele pode ser uma dessas duas opções. -->

<!-- $value: Este é um string que será usado como o atributo value do elemento de entrada oculto. 
Se o primeiro parâmetro for um array, este parâmetro será ignorado. O valor padrão deste parâmetro é 
uma string vazia (''). -->

<!-- $recursing: Este é um parâmetro booleano usado internamente pela função form_hidden() para 
lidar com arrays multidimensionais quando o primeiro parâmetro é um array. Você geralmente 
não precisará usar ou modificar este parâmetro. O valor padrão deste parâmetro é false. -->

<!-- Quando o parâmetro $name é um array associativo, a função form_hidden() 
chama a si mesma para cada par de chave/valor no array. Durante essas chamadas recursivas, 
o parâmetro $recursing é definido como true para indicar que a função está em uma chamada recursiva. -->

<?php
/*
$data = [
    'user_id' => '123',
    'order_id' => '456',
];
*/
?>
<?= form_hidden($name, $value = '', $recursing = false); ?>