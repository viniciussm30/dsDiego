<div class="titulo">Converções PHP</div>

<?php 
    echo is_int(PHP_INT_MAX); #identifica se tem um valor inteiro
    // INT para FLOAT
    echo '<p>Int para float</p>';
    echo '<br>';
    var_dump(PHP_INT_MAX+1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);

    // float para int
    #converter para inteiro pode ter peda no número
    echo '<p>Float para int</p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump(intval(2.8,10)); #primeiro parametro o valor e o segundo a baseque desejo converter (decimal, binário, hexa...). OBS: se eu nõa colocr nada no segundo parâmetro automaticamente ele sabe que é base decimal.
    
    var_dump(intval('11010101101',2)); #exemplo de base binária
    echo '<br>';
    var_dump((int) round(2.8)); #arredonda para inteiro. Porem, se eu tirar o int ele arredonda mas o valor fica float, ou seja, mesmo dando 3 ele é consideraado um float . EX:
    echo '<br>';
    var_dump(round(2.8));

    // Operações string
    echo '<p>Strings</p>';
    var_dump(3 + "2"); #vai dar 5 pq isso não é uma concatenação, ou seja, de forma implicita acontece a conversão da string para um valor númerico. 
    echo '<br>';
    var_dump("3" . 2); #aqui ele concatena, portanto, fica uma string
    echo '<br>', is_string("3". 2); #vai dar uma string tbm, por causa da concatenação
    echo '<br>', is_string("3" + 2); #nesse caso não dá uma string, por isso, não irá exibir nada.
    echo '<br>';
    var_dump(1+"cinco"); #aqui mostra 1 pq cinco é uma sttring não tem operação para isso.
    echo '<br>';
    var_dump(1 + "cinco 5");#por ter um texto logo após o + não irá realizar operação de soma.
    echo '<br>';
    var_dump(1+"2 + 5"); #vai dar 3, pq depois do dois temos mais um número.
    echo '<br>';
    var_dump(1 + "3.2"); #aqui vai dar um float 
    echo '<br>';
    var_dump(1 + "-3.2e2"); #utilizando exponenciaação
    echo '<br>';
    var_dump((int) "10.5"); #faz o arredondamento para inteiro, mesmo a expressão estando entre aspas.
    echo '<br>';
    var_dump((float) "10.5"); #converto uma string para o float

