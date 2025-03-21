<?php

class Humano {
    public $nome = "Peixe";
    public $idade = 20;

    public function falar(){
        echo "Olá Mundo <br>";
    }
}

class Professor extends Humano{
    private $materia = "Design e Interface";

    //Acessar Matéria
    public function acessarMateria(){
        echo $this->materia. "<br>";
    }
    
    private function ensinar(){
        echo "Front é péssimo";
    }

    //Acessando método ensinar
    public function acessarEnsinar(){
        $this->ensinar();
    }
}

$aluno = new Humano;
echo $aluno->nome. "<br>";
echo $aluno->idade. "<br>";
$aluno->falar();

$Talles = new Professor;
echo $Talles->acessarMateria();
$Talles->acessarEnsinar();

