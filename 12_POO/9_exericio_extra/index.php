<?php

    class Pessoa{
        public $nome;
        public $idade;

        function cadastrar($usuario){
            $this->nome = $usuario;
        }

        function ImprimirNome (){
            echo "O nome do usuário cadastrado é: $this->nome";
        }
    }

    $user = new Pessoa();

    $user->nome = "Kauã";
    $user->idade = 20;

    $user->cadastrar("Kauã");
    $user->ImprimirNome();