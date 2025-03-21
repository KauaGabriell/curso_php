<?php
    class User{
        public $nome = "Peixe";
        public $idade = 30;
        public $profissao = "Desenvoledor";

        function Estar(){
            echo " Está";
        }
        function Programar(){
            echo " Programando o sucesso";
        }
    }

  $peixe = new User;

  echo $peixe->nome;
  echo $peixe->idade;
  $peixe -> Estar();
  $peixe -> Programar();
