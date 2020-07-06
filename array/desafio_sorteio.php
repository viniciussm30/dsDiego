<div class="titulo">Desafio Sorteio</div>
<?php
$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de Neve",
    "Cinderela"
];
echo "<p>Dado o array:</p>";
print_r($nomes);
echo "<p>Faça um ajuste no código de maneira que para cada elemento do array quando for dado um refresh na páagina, apareça dentro de um H1</p>";
echo '<h2>Solução</h2>';
$indice = array_rand($nomes);
echo "<div center><h1>{$nomes[$indice]}</h1></div>";
?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>
