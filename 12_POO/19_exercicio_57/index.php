<?php

class Cachorro{
    public $nome;
    public $raça;
    public $cor;

    public function __construct($nome, $raça, $cor)
    {
        $this->nome = $nome;
        $this->raça = $raça;
        $this->cor = $cor;
    }
}

$Dog = new Cachorro("Thor", "Shitzu", "Preto");
echo $Dog->nome."<br>";
echo $Dog->raça."<br>";
echo $Dog->cor."<br>";