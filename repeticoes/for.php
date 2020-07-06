<div class="titulo">Laço For</div>
<?php
/*
    For composto por três partes:
    1 - contador;
    2 - expressão (true / false);
    3 - incremneto ou decremento.
*/
for($cont = 1; $cont <= 5; $cont++){
    echo "$cont<br>";
}

echo "<br><hr><br>";
for(;$cont <= 10; $cont++){
    echo "$cont<br>";
}

echo "<br><hr><br>";
for(;$cont <= 15;){
    echo "$cont<br>";
    $cont++;
}
echo "<br><hr><br>";
$array = [
    1 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];
for($i = 1; $i < count($array); $i++){
    echo "{$array[$i]}<br>";
}
print_r($array);
echo "<br><hr><br>";
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
for($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]}<br>";
    }
}
echo "<br><hr><br>";
for($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]} ";
    }
    echo "<br>";
}