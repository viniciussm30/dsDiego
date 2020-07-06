<div class="titulo">Desafio Tabela #02</div>
<h3>Enunciado:</h3>
<p>Crie um formulário onde o usuário informe a quantidade de colunas e linhas de uma tabela. Captre as informações deste formulário e utilizado for ou foreach, gere a tabela dinâmicas</p>
<form action="#">
    <div>
        <label for="">Linhas</label>
        <input type="text" name="linha" id="linha">
    </div>
    <div>
        <label for="">Colunas</label>
        <input type="text" name="coluna" id="coluna">
    </div>
    <div>
        <button>Gerar Tabela</button>
    </div>
</form>

<?php

?>



<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse; /*tira os espaços entre as células */
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }
    form *{
        font-size: 1.8rem;
    }
    form > div{
        margin-bottom: 10px;
    }
</style>