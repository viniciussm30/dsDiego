<div class="titulo">Desafio Tabela #01</div>
<h3>Enunciado:</h3>
<p>Crie uma estrutura de tabela dinâmica, utilizando for ou foreach, de maneira que exiba os dados da matriz a seguir dentro desta tabela, ou seja, gerando as colunas e linhas.<br>
A segunda parte do exercício é colocar cor de fundo para as linhas pares, ou seja, tronando a tabela zebrada. <br>
Obs: cor de sua preferência, utilize for ou foreach para encontrar as linhass pares.
</p>
<?php
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];
    foreach($matriz as $linha){
        foreach($linha as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }

    echo "<h3>Solução:</h3>";
    echo "<h5>Tabela renderizada sem cores</h5>";


    echo "<h5>Tabela zebrada</h5>";
?>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse; /*tira os espaços entre as células */
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }
</style>
