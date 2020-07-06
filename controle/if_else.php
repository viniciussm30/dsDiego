<div class="titulo">If_Else</div>

<?php
    if(true){
        echo "Serei impresso<br>";
        echo "Serei impresso novamente<br>";
    }

    // exemplo que a sentença termina no ; por isso, a sequência é o bloco de código e ele apareceu pq não tem nada haver com o if que antecede.

    if(false);{
        echo "Serei impresso<br>";
        echo "Serei impresso novamente<br>";
    }
    
    // if else 
    if(false){
        echo "Verdadeira<br>";
    }else{
        echo "Falso<br>";
    }

    // else if

    if(false){
        echo "Passo A<br>";
    }
    else if(true) {
        echo "Passo B<br>";
    }
    else {
        echo "Último passo<br>";
    }

    // elseif
    if(false){
        echo "Passo A<br>";
    }
    elseif(true) {
        echo "Passo B<br>";
    }
    else {
        echo "Último passo<br>";
    }


    // outro exemplo else if
    if(false){

    }else{
        if(false){
            
        }else{
            echo "Aqui<br>";
        }
    }

    echo "Fim<br>";