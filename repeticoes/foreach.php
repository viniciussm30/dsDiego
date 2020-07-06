<div class="titulo">Foreach</div>
<?php
$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];
/*
    *Foreach é composto por:
    * 1 - Array
    * 2 - Chave/indice
    * 3 - valor
*/  
foreach($array as $diasemana){
    echo "$diasemana <br>";
}
echo "<hr>";
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];
foreach($array as $indice => $diasemana){
    echo "$indice => $diasemana <br>";
}
echo "<hr>";
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
foreach($matriz as $linha){
    // indice
    // valor
    foreach($linha as $letra){
        echo "$letra<br>";
    }
}
echo "<hr>";
$numeros = [1, 2, 3, 4, 5];
foreach($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}
print_r($numeros);

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}
print_r($numeros);