<div class="titulo">Argumento Variáveis</div>
<?php
function somar($a, $b){
    return $a + $b;
}

echo somar(4,5) . '<br>';
// Devido a ter definido 2 argumentos para a função somar, ela só calcula os dois primeiros valores passados como parâmetros.
echo somar(4, 5, 6) . '<br>';
// Para deixar dinâmico, ou seja, independente da quantidade de valores enviados a função somar deve fazer:^

function somarCompleta(...$numeros){
    // print_r($numeros);
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somarCompleta(1,2,3,4,5);
// passando um array como parâmetro
$array = [6,7,8];
echo  '<br>' . somarCompleta(...$array);
// o uso dos 3 pontos permite que eu utilize apenas os valores do array, ou seja, se eu não colocar esses 3 pontos eu estarei trabalhando com um array dentro de outro.

// Aqui iremos passar um parâmetro fixo e um variável
function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
membros("Diego", "Vinícius", "André", "Lucas", "Henrique");
echo '<br>';
membros("João", "Silva");