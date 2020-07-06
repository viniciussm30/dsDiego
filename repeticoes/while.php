<div class="titulo">While / Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;
while($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}
echo "<br><hr>";
$contador = 10;
// do while garante a execução pelo menos 1 vez mesmo que a expressão seja falsa
do{
    echo "while $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);

echo "<br><hr>";
$contador = 0;
while(true){
    echo "while $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE)break;
}
