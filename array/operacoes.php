<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

// Adicionar novos elementos diretamente pelo array
$dados2["endereço"] = "Rua A";

// União de arrays
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
// $dadosCompletos = "";
echo '<br>' . is_array($dadosCompletos); #verifica se a variável realmente é um array
echo '<br>' . count($dadosCompletos); #qtde de elementos no array
echo '<br>';
$indice = array_rand($dadosCompletos); #pega um elemento de forma rabdômic, ou seja, pega índide e valor de forma randômica.
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

// Formas de interpolação usando array
echo "{$dadosCompletos['idade']}";
// echo "$dadosCompletos['idade']";
echo "<br> ${dadosCompletos['idade']}";

// Remover um elemento do array
unset($dadosCompletos["nome"]);
echo "<br>";
print_r($dadosCompletos);

// Limpar array inteiro
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

// Quando realizamos uma união entre arrays, devemos ter cuidado com essa estrutura gerada
$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];
$decimais = $impares + $pares;
echo '<br>';
print_r($decimais);
// Neste exemplo, não acontece a união, para isso, é melhor usar um merge
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

// Ordenando arrays
sort($decimais); #modifica o array original para ordená-lo
echo '<br>';
print_r($decimais);
