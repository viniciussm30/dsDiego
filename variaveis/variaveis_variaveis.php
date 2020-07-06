<div class="titulo">Variáveis_variáveis</div>

<?php 
$a = 'valoraA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita';
$eita = 'porcaria';
$porcaria = 'ta joia';

echo "$epa {$$epa} {$$$epa} {$$$$epa} {$$$$$porcaria}";