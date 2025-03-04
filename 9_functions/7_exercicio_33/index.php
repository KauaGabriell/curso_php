<?php
    function info($genero, $nome, $idade){
        if(is_string($nome) && is_int($idade)){
            echo "Olá eu sou ". $genero. " ". $nome. " e tenho ". $idade. " anos <br>";
        }else{
            echo "Por favor insira os dados corretos, o nome tem que ser preenchido com um texto e idade com um número inteiro <br>";
        }
    }
    info("a", "Maria", 20);