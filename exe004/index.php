<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Interação com Formulário</title>
</head>
<body>
    <header>
        <h1>Apresente-se a nós</h1>
    </header>
    <section>
        <form action="card.php" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobreno">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <input type="submit" value="Enviar">
            
        </form>
    </section>
    
</body>
</html>