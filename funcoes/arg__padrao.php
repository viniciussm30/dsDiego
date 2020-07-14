<div class="titulo">Argumento Padrão</div>
<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){ 
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao(); #aqui carrega os dois valores padrão
echo saudacao(NULL); #nesse caso apenas o segundo valor padão irá aparecer, pois para o primeiro eu preenchu como NULL
echo saudacao(null, null); #nesse caso ambos não irão aparecer
echo saudacao('Mestre', 'Supremo');

// Exemplo com apenas  um dos dois argumentos com valor padrão
function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

/*
    * Dica: sempre coloque o argumento obrigatório por último, senão eu sempre que terei que informar os parâmetros obrigatórios e se o argumento padrão for o primeiro eu semrpe vou ter que passar por ele para chegar nos obrigatórios. EX: 
*/ 

function anotarPedido2($bebida = 'Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer'); Aqui dará erro pq eu estou substituindo o valor padrão de água para hamburguer e não tenho um valor para o argumento obrigatório comida.
anotarPedido2('Refrigerante2', 'Pizza2');
