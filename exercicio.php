<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Tec. em DS</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
</head>

<body class="exercicio">


    <!-- Cabeçalho -->
    <header class="cabecalho">
        <h1>Téc. em Desenvolvimento de Sistemas - Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>

    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>



    <!-- Conteúdo -->
    <main class="principal">
        <div class="conteudo">
            <?php

                // Formas
                // 1ª Forma de exibir conteúdo utilizando include: include('basico/ola.php'); dir/file
                // 2ª Forma - Utilizando como parâmetro o diretório -> ?dir=basico pegando o valor a partir de uma requisição GET: include($_GET['dir']."/ola.php");
                // 3ª Forma - Se eu quiser passar um segundo parametro eu posso separar utilizando o &. Nesse caso poderia passar o nome do arquivo que eu gostaria de carregar. include($_GET['dir']."/".$_GET['file']. ".php"); ou include("{$_GET['dir']}/{$_GET['file']}php");
                // 4ª Forma - Pega o caminho de forma absoluta(completo)
                // Fim das formas

                // include('basico/ola.php');
                // include($_GET['dir']."/ola.php");
                // include("{$_GET['dir']}/{$_GET['file']}.php");
                include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>







    <!-- Rodapé -->
    <footer class="rodape">
        ETEC PROF. ª HELCY M. M. AGUIAR &copy; <?= date('Y');?>
    </footer>
</body>

</html>