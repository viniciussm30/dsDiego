<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option disabled selected>Selecione uma das  opões</option>
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metro > KM</option>
        <option value="km-metro">KM > Metro</option>
        <option value="c-f">Cº > Fº</option>
        <option value="f-c">Fº > Cº</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php


    $parametro = $_POST['param'];
    $conversao = $_POST['conversao'];
    const VALOR_MILHA = 0.62;
    const VALOR_METRO = 1000;
    $conta;

    switch($conversao){
        case 'km-milha':
            $conta = $parametro * VALOR_MILHA;
            echo "$parametro $conversao -> $conta";
        break;
        case 'milha-km':
            $conta = $parametro / VALOR_MILHA;
            echo "$parametro $conversao -> $conta";
            
        break;
        case 'metro-km':
            $conta = $parametro * VALOR_METRO;
            echo "$parametro $conversao -> $conta";
        break;
        case 'km-metro' :
            $conta = $parametro / VALOR_METRO;
            echo "$parametro $conversao -> $conta";
        break;
        case 'c-f':
            $conta = ($parametro * 9/5) + 32;
            echo "$parametro $conversao -> $conta";
        break;
        default :
        $conta = ($parametro - 32) * 5/9;
        echo "$parametro $conversao -> $conta"; 
    }