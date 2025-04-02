<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Resultado</title>

</head>
<body>
    <header>
        <h1>Resultado do processo</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo"<p>É um praser lhe conhecer, <strong> $nome $sobrenome</strong>! Este é meu Site."
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>