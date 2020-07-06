<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32" e Sorvete
    - Se nenhum for executado -> fica em casa  mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Traballho 1 (terça): </label>
        <select name="t1" id="t1">
            <option disabled selected>Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta): </label>
        <select name="t2" id="t2">
            <option disabled selected>Selecione uma opção</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>


<?php
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];


    
    if ($t1 == 0 && $t2 == 1 || $t1 == 1 && $t2 == 0){
        if($t1 == 1){
            echo "Você realizou apenas o trabalho da terça. Vai ganhar uma TV 32'' e um sorvete.";
        }elseif($t2 == 1){
            echo "Você realizou apenas o trabalho da quinta. Vai ganhar uma TV 32'' e um sorvete.";
        }
    }
    elseif($t1 == 1 && $t2 == 1){
        echo "Você realizou os trabalhos de terça e quinta. Vai ganhar uma TV 50'' e um sorvete.";
    }
    else{
        echo "Você não realizou nenhum trabalho não ganhará nada.";
    }
