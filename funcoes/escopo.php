<div class="titulo">Função & Escopo</div>
<?php
function imprimirMensagens(){
    echo "Olá! " ;
    echo "Até a próxima!<br>";
}
imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<hr>";

$variavel = 1;
function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

echo "<hr>";

function trocarValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValorDeVerdade();
echo "Depois: $variavel <br>";