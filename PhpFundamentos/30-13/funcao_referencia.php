<?php

declare(strict_types = 1);

$titulo = 'parâmetro por referência';
$subtitulo = 'teste com valores e referências';

function converteTitulo(&$titulo): void{
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}

converteTitulo($titulo);

function convertesubtitulo(string $subtitulo){
    return mb_convert_case($subtitulo, MB_CASE_TITLE);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <h2><?= converteTituloValor($subtitulo) ?></h2>

    <div>
        <?= $subtitulo ?>
    </div>
</body>
</html>
