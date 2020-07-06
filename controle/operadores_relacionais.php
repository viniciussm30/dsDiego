<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(24 >= 3);
echo '<br>';
var_dump(2 < 1);
echo '<br>';
var_dump(2 <= 1);
echo '<br>';
var_dump(2 != 1);
echo '<br>';
var_dump(2 <> 1);
echo '<br>';

# ==== capara iguldade estrita, ou seja, o tipo de dados também é comparado.
var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';

#mesmo caso para diferença estrita
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
echo '<br>';


echo '<p class="divisao">Relacionais no IF/Else</p><hr>';
$idade =25;
if ($idade < 18){
    echo "Menor de idade = $idade anos<br>";
}
elseif ($idade <= 65){
    echo "Adulto = $idade anos<br>";
}
else{
    echo "Pertence a terceira idade = $idade anos<br>";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(5 <=> 3); //resultado positivo se o operando da esquerda que o operando da direita, ou seja, o primeiro operando é maior que o segundo.
echo '<br>';
var_dump(5 <=> 5); #retorna 0 se eles forem iguais
echo '<br>';
var_dump(5 <=> 6); # -1 se o segundo operando for maior que o primeiro.
echo '<p class="divisao">Valores podem ser V ou F utilizando a negação</p><hr>';
var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!!" ");

