<?php

class Pessoa{
    public $nome = "Kauã";
    public $idade = 20;

    function andar(){
        echo "Andei";
    }
}

$Usuario = new Pessoa;
$Usuario->nome = "Kauã";
$Usuario->idade = 20;

echo "Nome do usuário é: $Usuario->nome e ele tem $Usuario->idade anos";
