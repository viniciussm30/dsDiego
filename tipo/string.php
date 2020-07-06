<div class="titulo">Tipo String</div>

<?php

    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");
    #A resposta é 10 pq ele conta o acento e demias caracteres especciais
    echo '<br>';

    #concatenação
    echo ("Nós também" . ' somos');
    echo '<br>';
    echo ("Número é: " . 123);
    echo '<br>';
    echo "'Teste'". '"Teste"' . '\'Teste\'' . "\"Teste\" "."\\";

    /*
        Caracteres de scape
        \ -> espaço
        \n -> linha
        \t -> tab
    */

    #Função para imprimir
    print("<br>Também existe a função print");
    print"<br>Também existe a função print";

    # Algumas funções
    echo '<br>' . strtoupper('maiúsculas');
    echo '<br>' . strtolower('MINÚSCULAS');
    echo '<br>' . ucfirst('só a primeira letra fica maiúscula');
    echo '<br>' . ucwords('todas as palavrass irão iniciar com letras maiúscula');
    echo '<br>' . strlen('Quantas letras inclusive acento. Ex: é');
    echo '<br>' . mb_strlen('Eu também', 'utf-8'); #não considera acentos/caracteres especiais.
    echo '<br>' . substr("Sou uma parte mesmo", 7,6); #posso pegar parte de uma string onde o primeiro parâmetro e onde inicia e o segundo onde termina
    echo '<br>' . substr("Sou uma parte mesmo", 7); # se eu não passar o segundo parâmetro ele irá pegar a partir do primeiro e vai até o final da string
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); #consigo trocar uma string por outra. Ex: no primeiro parametro eu indo a referência (palavra que quero troca), no segundo parametro eu coloco o valor que irá substituir e no terceiro parâmetro a string onde quero que a aconteça a troca. Obs: posso ter N referênias e em todas serão trocadas.
