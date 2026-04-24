<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo basicão de função</title>
</head>
<body>
    <h1>Exemplo básico de função</h1>

    <?php
        function soma($a, $b){
            return $a + $b;
        }

        echo soma(3, 3);
    ?>
</body>
</html>