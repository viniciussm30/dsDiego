<div class="titulo">Break / Continue</div>
<?php
/*
    * Continue é utilizado em estruturas de laço para pular o resto da iteração atuaal, e continuar a execução na validação da condição e, então, iniciar a próxima iteração
    * OBS: Não se usa continue em switch
*/

$cont = 1;
for(;;){
    echo "$cont<br>";
    $cont++;
    if($cont > 5){
        break;
    }
}
echo "Fim!";
echo "<br><hr>";
for(;;){
    $cont++;
    if($cont % 2 === 1){
        continue;
    }
    echo "$cont<br>";
    if($cont >= 30){
        break;
    }
}
echo "Fim!";
echo "<br><hr>";

foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5){
        break;
    }
    if($valor % 2 === 0){
        continue;
    }
    echo "$valor<br>";
}
echo "Fim!";
echo "<br><hr>";