<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    "janeiro",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"
);
print_r($meses);
echo '<br>' . $meses[5];
echo "<p>Ajuste o array para que os meses possam ser exibidos a partir de 1. Ou seja, 'meses[1]' corresponda a janeiro</p>";
echo "<h2>Solução</h2>";

$meses = array(
    1 => 'janeiro',
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"
);
print_r($meses);
echo '<br>' . $meses[10];