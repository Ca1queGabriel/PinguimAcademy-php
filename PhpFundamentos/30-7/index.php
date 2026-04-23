//classes e introdução
<?php

echo "Hello World!";


readonly class Animal { //como a classe é readonly, eu posso deixar público, aí a leitura fica fácil e segura. Ou seja, n precisa de getter nem setter

protected bool $voador; // ao mesmo tempo que ainda posso declará-los anteriormente
    function __construct( //por algum motivo a sintaxe é essa, tem literal um __construct ao invés do public Pindamonhangaba
        public string $som, //property promotion, promovi meus parâmetros como propriedades da classe
        public string $nome
    ) {
    }
//
//    public function getSom(): string {
//        return $this->som;
//    }
//
//
//
//    public function getNome(): string
//    {
//        return $this->nome;
//    }
}

$som = new Animal("Au", "Pascal")->som;
