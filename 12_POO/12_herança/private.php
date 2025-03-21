<?php

class Pessoa{
    public $idade = 20;

    public function falar(){
        echo "Olá Mundo <br>";
    }

    private function gritar(){
        echo "FRONTEND EFETIVADO <br>";
    }

   

    protected function FalarBaixo(){
        echo "Xiu <br>";
    }
    public function acessarFalarBaixo(){ //O método acima é protected então criamos o esse "Getter" para acessá-lo.
        $this->FalarBaixo();
    }
    
}

class Programador extends Pessoa{
    public function acessarGritar(){ //Nesse exemplo não conseguimos acessar porque o método gritar é PRIVADO, então não podemos acessar de outra classe
        $this->gritar();
    }
}

$peixe = new Pessoa;
$peixe = new Programador;
$peixe->falar();
$peixe->acessarGritar();//Acessamos a função privada
$peixe->acessarFalarBaixo();//Acessamos a função Protegida

$Carlinhos =  new Programador; //Declaramos Carlinhos como um classe que herda as propriedades e métodos da Classe Pessoa
$Carlinhos->acessarFalarBaixo();
