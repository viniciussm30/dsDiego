<div class="titulo">Desafio Precedência</div>
<h2>Resolva os exercícios</h2>
<?php
    echo '<p>1. Qual o valor que será impresso?</p>';
    echo '2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3)<br>';
    echo '<p>2. Qual expressão imprime o valor 100?</p>';
    echo 'a) (1 + 2) * 20 - 15 <br>';
    echo 'b) 4 * 5 ** 2 <br>';
    echo 'c) 2 ** 3 ** 4 / 1e25 <br>';
    echo 'd) 3 + (3 * 8) / 2 - 3 <br>';
?>

<h2>Solução</h2>
<?php
    echo '1.', 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3), '<br>';
    echo '2.a)', (1 + 2) * 20 - 15, '<br>';
    echo 'b)', 4 * 5 ** 2, '<br>';
    echo 'c)', 2 ** 3 ** 4 / 1e25, '<br>';
    echo 'd)', 3 + (3 * 8) / 2 - 3, '<br>'
?>