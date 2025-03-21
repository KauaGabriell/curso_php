<?php

class Pessoa{
    public $idade = 20;

    public function falar(){
        echo "Olá Mundo <br>";
    }

    private function gritar(){
        echo "FRONTEND EFETIVADO <br>";
    }

    public function acessarGritar(){ //O método acima é privado então criamos o esse "Getter" para acessá-lo.
        $this->gritar();
    }

    protected function FalarBaixo(){
        echo "Xiu <br>";
    }
    
    
}

class Programador extends Pessoa{
    public function acessarFalarBaixo(){ //Nesse caso conseguimos acessar porque o método é protected ele deixa nós acessarmos.
        $this->FalarBaixo();
    }
}

$peixe = new Pessoa;
$peixe = new Programador;
$peixe->falar();
$peixe->acessarGritar();//Acessamos a função privada
$peixe->acessarFalarBaixo();//Acessamos a função Protegida

$Carlinhos =  new Programador; //Declaramos Carlinhos como um classe que herda as propriedades e métodos da Classe Pessoa
$Carlinhos->acessarFalarBaixo();


//Classe privada em exemplo

