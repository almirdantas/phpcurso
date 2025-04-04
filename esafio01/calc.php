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
        <h1>Este é o resultado</h1>
    </header>
    <main>
        <section>
            <?php 
                $num = $_GET ["num"];
                $ant = -1;
                $suc = 1;
                $ant = $num - 1;
                $suc = $num + 1;
                echo"<p>O numero é:$num \n";
                echo"<p>Antecessor:$ant \n";
                echo"<p>Sucessor:$suc \n";
            ?>         
            <button type="button"><a href="index.php">Votar</a></button>
        </section>
    </main>
</body>
</html>