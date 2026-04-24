<?php
declare(strict_types = 1); //define que os parâmetros nas funções sejam fortemente tipadas.
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Variáveis tipadas</title>
</head>
<body>
        <h1>Exemplo de variáveis tipadas</h1>

        <?php
            function soma(int $a, int $b): int{
                return $a + $b;
            }

            $a = rand(0,10);
            $b = rand(0,10);

            $resultado = soma($a,$b);
            echo "O resultado da soma entre $a + $b é = $resultado";
        ?>
</body>
</html>
