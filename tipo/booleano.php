<div class="titulo">Tipo Booleano</div>

<?php 

    echo true;
    echo '<br>';
    echo false; #não mostra nada pq o valor é false.
    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . is_bool(false); #identifica se um valor é booleano ou não.
    echo '<br>' . is_bool('false'); #não mostra nada pq não é booleano.

    // fazer conversões
    echo '<p>Regras: </p>';
    echo '<br>' . var_dump((bool) 0); #converte para booleano, por isso, aparece false
    echo '<br>' . var_dump((bool) 100);
    echo '<br>' . var_dump((bool) -1); #qualquer outro número exceto 0 será convertido para true
    echo '<br>' . var_dump((bool) 0.0);
    echo '<br>' . var_dump((bool) 0.0000001);

    echo '<br>' . var_dump((bool) ""); #vazio também retorna false
    echo '<br>' . var_dump((bool) "0");
    echo '<br>' . var_dump((bool) "1");

    echo '<br>' . var_dump(!!"false"); # se eu usar a dupla negação ele mostra true, pq realiza a conversão de um valor booleano false para true. Caso eu utilize apenas uma negação eu converto a sting false para o valor booleano false.