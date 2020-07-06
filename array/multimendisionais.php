<div class="titulo">Multimendisionais</div>
<?php
$dados = [
    [
        "nome" => "João",
        "idade" => "26",
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => "25",
        "naturalidade" => "Bahia"
    ]
];
print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chave";
echo '<br>';
print_r($dados[2]);

// Na exclusão de um elemento o array não é reordenado. Por exemplo, se eu excluir o índice 1, irão sobrar os índices 0 e 2
unset($dados[1]);
echo "<br>";
print_r($dados);
echo '<br>';
var_dump($dados[1]);