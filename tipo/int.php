<div class="titulo">Tipo Inteiro</div>
<?php
    echo 11;
    echo '<br>';
    var_dump(11); 
    // exibe o tipo da variável
    echo '<br>';
    echo PHP_INT_MAX, ' - tamanho máximo suportado pelo PC', '<br>';
    // tamanho máximo de inteiro suportado pelo seu PC
    echo PHP_INT_MIN,' - tamanho minimo suportado pelo PC', '<br>';
    // tamanho minimo de inteiro suportado pelo seu PC
    echo 011, ' - o número 011 (Octal) é igual a 9 na base decimal', '<br>';
    // valor da base octal que vai de 0 a 7
    echo 0b110011, ' - valor 110011 (binário) representa 59 no decimal', '<br>';
    // valor base binário 0 e 1
    echo 0x11acf0, ' - valor 11acf0 (hexadecimal) representa 1158384 no decimal', '<br>';
    // valor hexadecimal de 0 a f