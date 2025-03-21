<?php

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    public function setModelo($model){
        $this->modelo = $model;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Carro extends Veiculo{
    
}

$carro = new Veiculo();
$carro->setModelo("BMW X6");
echo $carro->getModelo();
var_dump($carro);
    