<div class="titulo">Operções Aritimeticas</div>
<?php
    echo 1 + 1, '<br>';
    var_dump(1+1);
    echo '<br>';
    echo 1 + 2.5, ' - soma <br>';
    echo 10 - 2, ' - subtração <br>';
    echo 2 * 5, ' - multiplicação <br>';
    echo 7 / 4, ' - divisão <br>';
    echo intdiv(7,4), ' - divisão truncada (descarta casas decimais, não arredonda) <br>';
    // trunca o valor para um inteiro. Ele não arredonda, só tira as casas decimais.
    echo round(7/4), ' - divisão arredonda <br>';
    echo round(1.743874+88.0899), ' - soma arredonda <br>';
    // aqui ele arredonda
    echo 7%4, ' - resto da divisão <br>';
    echo 7%2, ' - resto da divisão (par ou ímpar) <br>';
    echo 8%2, ' - resto da divisão (par ou ímpar) <br>';
    // pega o resto da divisão. Se eu quiser saber se o número é par ou impar através do resto da divisão é possível, se o resto der 0 ele é par e se der 1 ele é ímpar, mas isso tem que ser utilizando % 2.
    echo 7/0, ' - divisão resultado infinito (divisão por 0) <br>';
    // mostra que o resultado é infinito
    // echo intdiv(7,0); - mostra um erro, pois, estamos forçando o resultado a dar um valor inteiro. OBS: como deu erro ele não mostra/renderiza a próxima linha
    echo 4 ** 2, ' - exponenciação <br>';
    // exponenciação
    #Precendência de Operadores:
    // () -> ** -> / * -> %(mode) -> + -
    echo '<p>Precedência</p>';
    echo '<p>() -> ** -> / * -> %(mode) -> + -</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2+3) * 4) ** 2, '<br>';
