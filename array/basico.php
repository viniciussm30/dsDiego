<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto" );
echo "$lista<br>"; #não exibe dados do ARRAY
var_dump($lista);
echo "<br>";
print_r($lista); // exibe informação sobre uma variavel em uma maneira legivel. No caso de array moverá o ponteiro do array para o fim. Se quiser o inicio deve utilizar reset().
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);
echo '<br>';
$lista[0] = 1234;
print_r($lista);