<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    'cor'  => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>';
var_dump($dados[0]); # não acessamos mais por índice
// Acesso é por chaves
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
// se tentarmos acessar por índice ou chave inexistente o valor retornado será null
echo '<br>';
var_dump($dados['outra_informacao']);

$lista = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8,
    "sexo" => "F"
);
echo '<br>';
print_r($lista);

// Adicionar um novo elemento sem passagem de chaves
$lista[]= 1.45;
echo '<br>';
print_r($lista);

// Adicionar um novo elemento 
$lista["altura"] = 1.45;
echo '<br>';
print_r($lista);

$teste = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($teste);