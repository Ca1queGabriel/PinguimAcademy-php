//VARIÁVEIS
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 30-8</title>
</head>
<body>
    <h1>
        <?php
            $saudacao = "Hello,";
            $localidade = "World!";
            $numero = true;
            echo "$saudacao $localidade"; //se colocar "" tu força o teu interpretador à pensar que ali dentro pode ter uma variável, então sim, isso afeta desempenho, mas é a mesma coisa que o $"" no C#
            echo $saudacao . ' ' . $localidade . ' '. $numero; //concatenacao
        ?>
    </h1>
</body>
</html>