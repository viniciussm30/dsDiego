<div class="titulo">Argumentos & Retorno</div>
<?php
function obterMensagem(){
    return 'Seja bem vindo(a)!';
}
obterMensagem();
$msg = obterMensagem();
echo $msg;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

$nome = $_GET['nome'];

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('João');
echo '<br>', obterMensagemComNome('Maria');
echo '<br>', obterMensagemComNome($nome);

function soma($a, $b){
    $soma = $a + $b;
    return  $soma;
}

$x = 5;
$y = 5;
echo '<br>', soma(4, 5);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

// ex por referência
function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);
echo '<br>', $variavel;
