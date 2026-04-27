<?php


declare(strict_types = 1);

$titulo = require('config/titulo.php');

function globalDefinition(string $nome): string{
    global $titulo; //aqui tô definindo que eu quero pegar a variável título que tá no global do escopo.

    return "Olá, $titulo, $nome";
}


echo(globalDefinition("Caique"));

