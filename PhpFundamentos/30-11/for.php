<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>For positivo</h3>
        <?php
            for ($i = 0; $i < 10; $i++){echo "Dessa vez o número é $i <br>";}
        ?>
    </div>
    <div style="margin-top: 53px">
        <h3>For negativo</h3>
        <?php
            for ($i = 10; $i > 0; $i--){echo "Dessa vez o número é $i <br>";}
        ?>
    </div>
    <div style="margin-top: 53px">
        <h3>For com Arrays e Índices</h3>
        <?php
            $frutas = ['maça', 'banana', 'melancia'];

            for ($i = 0; $i < count($frutas); $i++){echo "A fruta é $frutas[$i] <br>";}
        ?>
    </div>



</body>
</html>