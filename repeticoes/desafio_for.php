<div class="titulo">Desafio For</div>
<!-- 
    Criar um laço for que exiba:
        #
        ##
        ###
        ####
        #####
        Onde vocês devem fazer de duas formas:
            1) Pode utilizar incremento. Ex: $cont++
            2) Não pode utilizar incremento, ou seja, $cont++
-->

<?php
$impressao = '';
for($i = 1; $i <= 5; $i++){
    $msg = "#";
    $impressao .= '#';
    echo "$impressao<br>";
}
echo "<hr>";
for($impressao2 = '#'; $impressao2 !== '######';$impressao2 .= "#"){
    echo "$impressao2<br>";
}