<div class="titulo">Valor vs referências</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;

    // Atribuição por valor
    $varialvelValor = $variavel;
    echo "<br>$varialvelValor";
    $varialvelValor = 'novo valor';
    echo "<br>$variavel";
    echo "<br>$varialvelValor";

    // Atribuição por referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referência';
    echo "<br>$variavel<br>$variavelReferencia";