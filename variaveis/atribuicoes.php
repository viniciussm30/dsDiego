<div class="titulo">Atribuições</div>

<?php

    $title = 'Atribuições';
    $numero = 10;;
    echo $numero;
    $numero = $numero - 3;
    echo '<br>' . $numero;
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    $numero--; #decremento uma unidade. Não funciona com variáveis literais
    --$numero; #isso é igual -> $numero = $numero - 1;
    echo '<br>' . $numero;
    $numero++; #isso é igual -> $numero = $numero + 1;
    ++$numero;
    echo '<br>' . $numero;
    $numero = 20;
    echo '<br>' . $numero;
    $numero -= 5;
    echo '<br>' . $numero;
    $numero += 5;
    echo '<br>' . $numero;
    $numero *= 10;
    echo '<br>' . $numero;
    $numero /= 2;
    echo '<br>' . $numero;
    $numero %= 6;
    echo '<br>' . $numero;
    $numero **= 4;
    echo '<br>' . $numero;
    $numero .= 4; #aqui é apenas uma concatenação
    echo '<br>' . $numero;

    // atribuição de strings

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;
    $texto .= ' de verdade!';
    echo '<br>' . $texto;

    // variaveis inexistentes
    // $variaveisInexistente = 'valor inexistente';
    echo '<br>' . $variaveisInexistente;
    $valor = $variaveisInexistente ?? 'valor default'; #caso não exista um valor o ?? vai definir um valor padrão
    echo '<br>' . $valor;
    # se eu comentar a variável $variavelInexistente o resultado apresentado no ech deve ser o resultado padrão, ou seja, valor default.