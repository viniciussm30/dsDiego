<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;
    echo '<br>' . $TAXA_DE_JUROS . '!';
    
    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    define('NOVISSIMA_TAXA', $valorVariavel);
    // const NOVISSIMA_TAXA = $valorVariavel;
    echo '<br>' . NOVISSIMA_TAXA;
    const NOVA_CONST_TAXA = 2.8 + 1.2; # Aceita apenas valores literais
    echo '<br>'. NOVA_CONST_TAXA;
    echo '<br>' . PHP_VERSION;
    echo '<br>' . __LINE__;
    echo '<br>' . __FILE__;
    echo '<br>' . __DIR__;