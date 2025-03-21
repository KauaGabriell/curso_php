<?php

trait Nome {
    private $nome;

    public function setarNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Cliente{
    use Nome;
}

$Peixe = new Cliente;

$Peixe->setarNome("Peixe");
echo $Peixe->getNome(). "<br>";

class Disciplina{
    use Nome;
}

$d1 = new Disciplina;
$d1->setarNome("POO");
echo $d1->getNome();
