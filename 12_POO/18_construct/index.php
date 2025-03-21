<?php

class Carro{
    public $cor;
    public $nome;

    function __construct($cor, $nome)
    {
        $this->cor = $cor;
        $this->nome = $nome;
    }
}

$carro = new Carro("Amarela", "Cavalo Branco");

echo "O nome do carro é $carro->nome, e é da cor $carro->cor";
