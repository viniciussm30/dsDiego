<div class="titulo">Array Constantes</div>
<?php
const FRUTAS = [
    'laranja',
    'abacaxi'
];

// FRUTAS[0] ='banana'; Não é possível alterar um registro de um array constante

const CARROS = [
    'Fiat' => 'Uno',
    'Ford' => 'Fiesta'
];

// CARROS["BMW"] = "325i";
echo '<br>' . CARROS['Fiat'];

define(
    'CIDADES',
    array('Belo Horizonte', 'Recife')
);

// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];