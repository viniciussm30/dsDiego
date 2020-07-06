<div class="titulo">Desafio String</div>

<?php
    echo "<b>Enunciado: </b><br>";
    echo "Avaliando os métodos da documentação da string, qual o método(s) que a posição do texto: <br>";
    echo "'abc' na string '!AbcaBcabc retorne 1?'";
    echo '<br><br>';
    echo '<h2>Solução</h2>';

    // Usando o string pos
    echo strpos('!AbcaBcabc', 'abc'). '<br>';
    /*
        Primeiro parâmetro é a string onde eu quero procurar, o segundo parâmetro é o que eu quero calcular.
        No strops ele considera maiúsculas e minúsculas por isso o resulto será 7
    */


    echo stripos('!AbcaBcabc', 'abc'). '<br>';  # Aqui ele é case sensitive, ou seja, ele pega exatamente a string que queremos respeitando maiúscula e minúsculas.

    echo strpos(strtolower('!AbcaBcabc'), 'abc'); #outra forma de resolver é convertendo tudo para manúsculas.
