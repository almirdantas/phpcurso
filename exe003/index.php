<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de variáveis em PHP</title>
</head>
<body>
    <h1>Tipos de Variáveis em PHP</h1>
    <?php
        // 0x = Hexadecimal, 0b = Binario, 0 = Octa
        // 
        //$num = 0x1A;
        //echo "O valor da variavel é: $num"

        //$v = "almir";
        //var_dump($v);

        //$num = (integer) 3e2; // 3 x 10(2)
        //echo "A variave é $num";
        //var_export($num);

        //$num = (float) "950";
        //var_dump($num);

        //$vet = [6 , 2.5,"Maria" , 9, true];
        //var_dump($vet);

        class pessoa{
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p);
    ?>
    
</body>
</html>