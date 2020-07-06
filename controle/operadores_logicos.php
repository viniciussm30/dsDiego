<div class="titulo">Operadores Logicos</div>

<?php
    echo "<p class='divisao'>V ou F </p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); #not;
    echo '<br>';
    var_dump(!!true);
    echo '<br>';

    echo "<p class='divisao'>Tabela verdade 'AND' (E) </p><hr>";
    # posso utilizar o && ou and
    var_dump(true && true);
    echo '<br>';
    var_dump(true && false && true);
    echo '<br>';
    var_dump (false && true);
    echo '<br>';
    var_dump(false && false);
    

    echo "<p class='divisao'>Tabela verdade 'xor' (OU)</p><hr>";
    # posso utilizar o || ou xor
    var_dump(true || true);
    echo '<br>';
    var_dump(true || false || true);
    echo '<br>';
    var_dump(false || true);
    echo '<br>';
    var_dump(false || false);
    

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 65;
    $sexo = 'M';

    $pagouPrevidencia = true;
    $criterioHomem = ($idade >= 65 && $sexo === 'M');
    $criterioMulher = ($idade >= 60 && $sexo === 'F');
    $atingiuCriterio = $criterioHomem || $criterioMulher;

    $podeAposentar = $pagouPrevidencia && $atingiuCriterio;

    echo "<br>Pode se aposentar -> $podeAposentar.<br>";

    if($idade >= 60 && $sexo === 'F'){
        echo "Pode se aposentar -> $sexo";
    }elseif($idade >= 65 && $sexo === 'M'){
        echo "Pode se aposentar -> $sexo";
    }else{
        echo "Vai ter que trabalhar mais um pouco.";
    }
