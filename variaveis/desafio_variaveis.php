<div class="titulo">Desafio Variáveis</div>

<?php 

    echo '<h2>Utilizar variáveis para solucionar a equação que foi passada</h2>';
    echo '<br>' . '<h2>Solução</h2>';
    $numero1 = 6;
    $numero2 = 3;
    $numero3 = 2;
    $numero1_divisao1 = 3;
    $numero2_divisao1 = 2;
    $numero4 = 1;
    $numero5 = 5;
    $nuemro6 = 2;
    $numero7 = 7;
    $numero1_divisao2 = 2;
    $numero1_divisaoPrincipal = 10;
    $conta = ([$numero1*($numero2+$numero3)]**2/$numero1_divisao1*$numero2_divisao1 - (($numero4-$numero5)*($nuemro6-$numero7)**2/$numero1_divisao2)**3)/10**3;
    echo $conta;

