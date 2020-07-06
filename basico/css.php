<div class="titulo">Integração HTML</div>
<h1>
    <?php
        echo 'Olá';
        echo '<small>';
        echo 'Mundo!';
        echo '</small>';
    ?>
</h1>

<!-- Aqui só imprimo uma senteça, ou seja, apenas o que está entre as aspas. Diferentemente da primeira parte que está dentro do H1, onde consigo imprimir quantas sentenças eu quiser -->

<?= "<div> Outra forma de me 'expressar!' </div>" ?>
<br/>
<!-- HTML                         PHP          HTML -->
<div center azul><button dobro><?="Legal"?></button></div>

<!-- Quando eu utilizo seletor [] é a mesma coisa que dizer que qualquer elemento html que tenha um atributo de mesmo nome do seletor irá receber sua estilização.
EX:
    <h1 [center]>
        <style>
            [center]{
                display: flex;
                justify-content: center;
            }
        </style>
-->

<style>
    button{
        padding: 5px <?=2*10?>px;
        background-color: #4286F4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;

    }
    [azul]{
        color: #4286F4;
    }

    [dobro]{
        /* font-size: 2rem; */
        font-size: <?= 10-8 ?>rem;
    }
</style>