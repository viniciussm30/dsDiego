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
<!-- HTML          PHP          HTML -->
<div><button><?="Legal"?></button></div>