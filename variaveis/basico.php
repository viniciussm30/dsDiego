<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);
    echo '<br>';
    $a = 3;
    $b = 16;
    $somaNumeros = $a + $b;
    echo $somaNumeros; #case sensitive não esquecer
    echo '<br>';
    echo isset($somaNumeros); #verifica se tem algo dentro da variavel. Se der 1 tem se não mostrar nada é pq está vazia
    $soma = 0;
    unset($soma); #tira o valor padrão da variável
    echo isset($soma); #vai "mostrar" nda, porque a variável não está setada, ou seja, perdeu seu valor original.
    echo '<br>';
    var_dump($soma); # vai mostrar null, indicando ausência de valor

    // No PHP não definimos o tipo de dado para variável, portanto, o php interpreta seu tipo no momento em que ele precisa utilizar esse variável, conforme exemplo:
    $variavel = 10;
    echo '<br>' . $variavel;
    $variavel = "Agora sou uma string!";
    echo '<br>' . $variavel;

    // Nomes de variáveis
    $var = 'válida';
    $var2 = 'válida';
    $VAR3 = 'válida';
    $_var_4 = 'válida';
    $vâr5 = 'válida'; #cuidado com esse rótulo em S.O. pode gerar problemas.
    // $6var = 'inválido';
    // $%var7 = 'inválida';
    // $var8% = 'inválida';
    echo '<br>';
    // variáveis pré-defindas
    var_dump($_SERVER["HTTP_HOST"]);
    echo '<br>';
    echo 'Acesse a lista completa em: https://www.php.net/manual/pt-BR/reserved.variables.php';

