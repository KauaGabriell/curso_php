<?php

class Animal{
    public $nome;
    public $idade;

    function escolherNome($nome){
        $this->nome = $nome;
    }

    function falarIdade($idade){
        $this->idade = $idade;
    }

    function latir(){
        return "au au";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
}

$Thor = new Animal();
$Thor->escolherNome("Thor");
$Thor->falarIdade(12);

echo "O nome do animal é $Thor->nome e ele tem $Thor->idade anos";
echo "<br>";
echo $Thor->latir();
echo $Thor->latirForte();