<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é Dia " . date("d/M/Y");
    echo " e a hora é " . date("G:i:s")
    ?>
</body>
</html>