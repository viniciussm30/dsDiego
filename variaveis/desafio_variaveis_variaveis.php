<div class="titulo">Desafio Variáveis_variáveis</div>

<?php 
    $a = 'Nossa';
    $Nossa = 'Eu';
    $Eu = 'consegui';
    $consegui = 'responder';
    $responder = 'esse';
    $esse = 'desafio';

    echo "Organize o conceito de variaveis_variáveis de maneira a exibir a frase: ";
    echo "<br> Nossa! Eu consegui responder esse desafio.";
    echo "<br>";
    echo "<h2>Solução</h2>";

    echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";