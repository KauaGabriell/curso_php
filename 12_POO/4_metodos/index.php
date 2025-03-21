<?php

class User{
    function Cadastrar (){
        echo "Cadastro realizado com sucesso";
    }

    function Login(){
        echo "Agora faça o login";
    }
}

$Peixe = new User;
$João = new User;

$Peixe -> Cadastrar();
$Peixe -> Login();

