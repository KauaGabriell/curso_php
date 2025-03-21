<?php

class Carro{
    public $nome;
    public $ano;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel){
        $this->velocidade_maxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima do carro é $this->velocidade_maxima";
    }
}

$carro = new Carro;

$carro->nome = "Lancer";
$carro->ano = 2025;
$carro->setVelocidadeMaxima(300);
$carro -> getVelocidadeMaxima();



