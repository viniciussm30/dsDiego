<div class="titulo">Operadores Ternário</div>

<?php

$idade = 70;
$status;
if ($idade >= 18){
    $status = "Maior de idade";
}else{
    $status = "Menor de idade";
}
echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
// Operador ternário é composto por 3 partes sendo: a primeira a condição a segunda o resultado verdadeiro da condiçaõ definida e a terceira o resultado falso da condição definida. Ele é composto pela ? e separa suas propriedades pelo: sendo estas os resultados verdadeiro e falso.
echo "$status<br>";

$idade = 70;
$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';
echo "$status<br>";