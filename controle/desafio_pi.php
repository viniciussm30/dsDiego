<div class="titulo">Desafio PI</div>

<?php
    echo pi();
    $pi = 3.14;
    if ($pi === pi()){
        echo "<br>Iguais!";
    }
    else{
        echo "<br>Diferentes!";
    }

    echo "<p>Utilizando operadores relacionais faça o algoritimo do pi de maneira que fique iguais, entretando no primeiro blobo de if</p>";
    echo "<h2>Solução</h2>";

    $piErrado = 2.8;

    if($piErrado == pi()){
        echo "Errado";
    }
    elseif($pi == pi()){
        echo "ll";
    }
    else{
        echo "iguais";
    }