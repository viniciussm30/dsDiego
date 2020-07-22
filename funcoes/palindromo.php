<div class="titulo">Desafio Palindromo</div>
<h2>Enunciado</h2>
<p>Conceito: palíndromo é uma palavra, frase ou qualquer outra sequência de unidades que tenha a propriedade de poder ser lida tanto da direita para a esquerda como da esquerda para a direita.</p>
<p>Faça uma função que seja capaz de receber uma palavra como argumento e identificar se ela é um palíndromo.</p>
<p>Resolva o exercício de duas maneiras diferentes:</p>
<ol>
    <li>Utilize laços de repetição</li>
    <li>Utilize funções de string</li>
</ol>
<?php
echo "<h3>Solução com FOR</h3>";
function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
        return 'Sim';
    }
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';
echo '<hr>';

echo "<h3>Soluão com Função de String</h3>";    
function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
    // strrev reverte uma string
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';